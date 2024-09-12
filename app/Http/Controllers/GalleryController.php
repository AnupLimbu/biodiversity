<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGalleryRequest;
use App\Models\Gallery;
use App\Repositories\GalleryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;


class GalleryController extends Controller
{

    protected $repository;
    protected $view_path="backend.admin.gallery.";
    protected $model;
    protected $route_prefix = "gallery";


    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new Gallery();
        $this->repository =  new GalleryRepository(new Gallery());
    }

    public function index()
    {
        $products=$this->repository->getAll();
        return view($this->view_path."index",compact('products'));
    }

    public function getList(Request $request)
    {
        $products=$this->repository->getAll();
             return Datatables::of($products)
                    ->addIndexColumn()
                    ->addColumn('action', function($product){
                        return $this->generateActionButtons($product);
                    })
                 ->editColumn("thumbnail",function ($item){
                     return asset($item->thumbnail);
                 })
                    ->rawColumns(['action'])
                    ->make(true);
    }

    public function show($id)
    {
        $project=$this->repository->getById($id);
         if(\request()->expectsJson()){
              return response()->json([]);
         }
         return view($this->view_path."show",compact('project'));
    }

    public function edit($id)
    {
           $gallery=$this->repository->getById($id);
          return view($this->view_path."edit",compact('gallery'));
    }

    public function create()
    {
         return view($this->view_path."create");
    }

    public function store(CreateGalleryRequest $request)
    {
      try {
            DB::beginTransaction();
            $attributes= $request->only($this->model->getFillable());
//            dd($request->file());
          if ($request->file('thumbnail')){
              $imageName = time().'.'.$request->thumbnail->getClientOriginalExtension();
              $attributes['thumbnail']="storage/gallery/".$imageName;
              $image = $request->file('thumbnail');
              $imageName = time() . '.' . $image->getClientOriginalExtension();
              $image->storeAs('gallery', $imageName, 'public');
          }
            $this->repository->create($attributes);
            DB::commit();
            if($request->expectsJson()){
              return response()->json([]);
            }
            return redirect()->route($this->route_prefix.'.index')->with('success', 'Gallery created successfully.');
          } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route($this->route_prefix.'.index')->withInput()->with('failed', "Failed to update Gallery : ".$e->getMessage());
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
      return   '<nobr>'.$edit_btn.' '.$delete_btn.'</nobr>';
    }

    public function update(CreateGalleryRequest $request, $id)
    {
      try {
            DB::beginTransaction();
            $attributes= $request->only($this->model->getFillable());
            $pro=$this->repository->getById($id);
            if ($request->file('thumbnail')){
              $imageName = time().'.'.$request->thumbnail->getClientOriginalExtension();
              $attributes['thumbnail']="storage/gallery/".$imageName;
              $image = $request->file('thumbnail');
              $imageName = time() . '.' . $image->getClientOriginalExtension();
              $image->storeAs('gallery', $imageName, 'public');
              if ($pro->thumbnail){
                  $array=explode("/",$pro->thumbnail);
                  $last_key=array_key_last($array);
                  if (file_exists(public_path('storage/gallery')."/".$array[$last_key])){
                      unlink(public_path('storage/gallery')."/".$array[$last_key]);
                  }
                  }
            }
                $this->repository->update($id,$attributes);

            DB::commit();
            if($request->expectsJson()){
              return response()->json([]);
            }
            return redirect()->route($this->route_prefix.'.index')->with('success','Gallery updated successfully.');
          } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route($this->route_prefix.'.index')->withInput()->with('failed', "Failed to update. Gallery : " .$e->getMessage());
          }
    }

    public function destroy($id)
    {
      try {
            DB::beginTransaction();
            $this_model= $this->repository->getById($id);
            $image= $this_model->thumbnail;
            $this->repository->delete($id);
            unlink($image);
            DB::commit();
            if(\request()->expectsJson()){
              return response()->json([]);
            }
            return redirect()->back()->with('success','Gallery deleted successfully.');
          } catch (\Exception $e) {
             DB::rollback();
             return redirect()->back()->withInput()->with('failed', 'Failed to delete Gallery : '.$e->getMessage());
          }
    }
}
