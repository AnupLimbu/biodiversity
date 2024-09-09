<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;
use App\Models\Project;
use App\Http\Requests\CreateProjectRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;


class ProjectController extends Controller
{

    protected $repository;
    protected $view_path="backend.admin.project.";
    protected $model;
    protected $route_prefix = "projects";


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:project-view|project-create|project-edit|project-delete'], ['only' => ['show']]);
        $this->middleware(['permission:project-create'], ['only' => ['create', 'store', 'show']]);
        $this->middleware(['permission:project-edit'], ['only' => ['edit', 'update', 'show']]);
        $this->middleware(['permission:project-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:project-view'], ['only' => ['index']]);
        $this->model = new Project();
        $this->repository =  new ProjectRepository(new Project());
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
          $project=$this->repository->getById($id);
          return view($this->view_path."edit",compact('project'));
    }

    public function create()
    {
         return view($this->view_path."create");
    }

    public function store(CreateProjectRequest $request)
    {
      try {
            DB::beginTransaction();
            $attributes= $request->only($this->model->getFillable());
//            dd($request->file());
          if ($request->file('image')){
              $imageName = time().'.'.$request->image->getClientOriginalExtension();
              $attributes['image']=asset('/storage/projects')."/".$imageName;
              $image = $request->file('image');
              $imageName = time() . '.' . $image->getClientOriginalExtension();
              $image->storeAs('projects', $imageName, 'public');
          }
            $this->repository->create($attributes);
            DB::commit();
            if($request->expectsJson()){
              return response()->json([]);
            }
            return redirect()->route($this->route_prefix.'.index')->with('success', 'Project created successfully.');
          } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route($this->route_prefix.'.index')->withInput()->with('failed', "Failed to update Project : ".$e->getMessage());
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

    public function update(CreateProjectRequest $request, $id)
    {
      try {
            DB::beginTransaction();
            $attributes= $request->only($this->model->getFillable());
            $pro=$this->repository->getById($id);
              if ($request->file('image')){
              $imageName = time().'.'.$request->image->getClientOriginalExtension();
              $attributes['image']=asset('/storage/projects')."/".$imageName;
              $image = $request->file('image');
              $imageName = time() . '.' . $image->getClientOriginalExtension();
              $image->storeAs('projects', $imageName, 'public');
              if ($pro->image){
                  $array=explode("/",$pro->image);
                  $last_key=array_key_last($array);
                  if (file_exists(public_path('storage/projects')."/".$array[$last_key])){
                      unlink(public_path('storage/projects')."/".$array[$last_key]);
                  }

              }
                  $this->repository->update($id,$attributes);
          }
            DB::commit();
            if($request->expectsJson()){
              return response()->json([]);
            }
            return redirect()->route($this->route_prefix.'.index')->with('success','Project updated successfully.');
          } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route($this->route_prefix.'.index')->withInput()->with('failed', "Failed to update. Project : " .$e->getMessage());
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
            return redirect()->back()->with('success','Project deleted successfully.');
          } catch (\Exception $e) {
             DB::rollback();
             return redirect()->back()->withInput()->with('failed', 'Failed to delete Project : '.$e->getMessage());
          }
    }
}
