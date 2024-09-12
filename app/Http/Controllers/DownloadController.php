<?php

namespace App\Http\Controllers;

use App\Http\Trait\fileUpload;
use App\Repositories\DownloadRepository;
use App\Models\Download;
use App\Http\Requests\CreateDownloadRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;


class DownloadController extends Controller
{
  use fileUpload;
    protected $repository;
    protected $view_path="backend.admin.download.";
    protected $model;
    protected $user_permissions;
    protected $route_prefix="downloads";


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:download-view|download-create|download-edit|download-delete'], ['only' => ['show']]);
        $this->middleware(['permission:download-create'], ['only' => ['create', 'store', 'show']]);
        $this->middleware(['permission:download-edit'], ['only' => ['edit', 'update', 'show']]);
        $this->middleware(['permission:download-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:download-view'], ['only' => ['index']]);
        $this->model = new Download();
        $this->user_permissions = "";
        $this->repository =  new DownloadRepository(new Download());
    }

    public function index()
    {
        $downloads=$this->repository->getAll();
        return view($this->view_path."index",compact('downloads'));
    }

    public function getList(Request $request)
    {
        $downloads=$this->repository->getAll();
             return Datatables::of($downloads)
                    ->addIndexColumn()
                    ->addColumn('action', function($download){
                        return $this->actionButtons($download);
                    })
                    ->rawColumns(['action'])
                    ->make(true);
    }
        public function actionButtons($download){
             $is_auth_id=(Auth::id()==$download->id)?true:false;
             return $this->generateActionButtons($download);
        }

    public function show($id)
    {
         $download=$this->repository->getById($id);
         if(\request()->expectsJson()){
              return response()->json([]);
         }
         return view($this->view_path."show",compact('download'));
    }

    public function edit($id)
    {
          $download=$this->repository->getById($id);
          return view($this->view_path."edit",compact('download'));
    }

    public function create()
    {
         return view($this->view_path."create");
    }

    public function store(CreateDownloadRequest $request)
    {
      try {
            DB::beginTransaction();
            $attributes= $request->only($this->model->getFillable());
            if ($request->file('thumbnail')){
              $imageName = time().'.'.$request->thumbnail->getClientOriginalExtension();
              $attributes['thumbnail']="storage/downloads/thumbnail/".$imageName;
              $image = $request->file('thumbnail');
              $imageName = time() . '.' . $image->getClientOriginalExtension();
              $image->storeAs('downloads/thumbnail', $imageName, 'public');
           }
          if ($request->file('file')){
              $imageName = time().'.'.$request->file->getClientOriginalExtension();
              $attributes['file']="storage/downloads/files/".$imageName;
              $image = $request->file('file');
              $imageName = time() . '.' . $image->getClientOriginalExtension();
              $image->storeAs('downloads/files', $imageName, 'public');
          }
            $this->repository->create($attributes);
            DB::commit();
            if($request->expectsJson()){
              return response()->json([]);
            }
            return redirect()->back()->with('success', 'Download created successfully.');
          } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->with('failed', "Failed to update Download : ".$e->getMessage());
          }

    }



    public function update(CreateDownloadRequest $request, $id)
    {
      try {
            DB::beginTransaction();
            $attributes= $request->only($this->model->getFillable());
            $this->repository->update($id,$attributes);
            DB::commit();
            if($request->expectsJson()){
              return response()->json([]);
            }
            return redirect()->route($this->route_prefix.'.index')->with('success','Download updated successfully.');
          } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route($this->route_prefix.'.index')->withInput()->with('failed', "Failed to update. Download : " .$e->getMessage());
          }
    }

    public function destroy($id)
    {
      try {
            DB::beginTransaction();
            $this->repository->delete($id);
            DB::commit();
            if(\request()->expectsJson()){
              return response()->json([]);
            }
            return redirect()->back()->with('success','Download deleted successfully.');
          } catch (\Exception $e) {
             DB::rollback();
             return redirect()->back()->withInput()->with('failed', 'Failed to delete Download : '.$e->getMessage());
          }
    }
     public function generateActionButtons($model){
            $show_btn = '<a href="'.route($this->route_prefix.".show", $model->id).'" class="actions btn btn-sm btn-info" data-tooltip="true" title="Show">
                        <i class="far fa-eye" aria-hidden="true"></i></a>';
            $delete_btn= '<form style="display:inline" action="'. route($this->route_prefix.'.destroy' , $model->id ).'" method="POST">
                                        '.csrf_field(). method_field("DELETE").'
                                        <button class="btn btn-danger btn-sm delete-asset" title="delete" onclick="deleteModel()">
                                        <i class="fas fa-trash" aria-hidden="true"></i>
                                    </button>

                                        </form>';
            $edit_btn= '<a href="'.route($this->route_prefix.'.edit', $model->id).'" class="actions btn btn-sm btn-warning" data-tooltip="true" title="Edit">
                        <i class="fas fa-pencil-alt" aria-hidden="true"></i></a>';
          return   '<nobr>'.$show_btn.' '.$edit_btn.' '.$delete_btn.'</nobr>';
        }
}
