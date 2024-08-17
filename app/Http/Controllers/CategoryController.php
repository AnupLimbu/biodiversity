<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use App\Models\Category;
use App\Http\Requests\CreateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;


class CategoryController extends Controller
{

    protected $repository;
    protected $view_path="backend.admin.category.";
    protected $model;


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:category-view|category-create|category-edit|category-delete'], ['only' => ['show']]);
        $this->middleware(['permission:category-create'], ['only' => ['create', 'store', 'show']]);
        $this->middleware(['permission:category-edit'], ['only' => ['edit', 'update', 'show']]);
        $this->middleware(['permission:category-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:category-view'], ['only' => ['index']]);
        $this->model = new Category();
        $this->repository =  new CategoryRepository(new Category());
    }

    public function index()
    {
        $categorys=$this->repository->getAll();
        return view($this->view_path."index",compact('categorys'));
    }

    public function getList(Request $request)
    {
        $categorys=$this->repository->getAll();
             return Datatables::of($categorys)
                    ->addIndexColumn()
                    ->addColumn('action', function($category){
                        return $this->actionButtons($category);
                    })
                    ->rawColumns(['action'])
                    ->make(true);
    }
        public function actionButtons($category){
             $is_auth_id=(Auth::id()==$category->id)?true:false;
            $actionBtns='';
                 $show_btn = '<a href="'.route("categorys.show", $category->id).'" class="actions btn btn-sm btn-info" data-tooltip="true" title="Show">
                    <i class="far fa-eye" aria-hidden="true"></i></a>';
               //   if(!$is_auth_id)  }}
                 // {
                      $delete_btn= '<a class="btn btn-danger btn-sm delete-asset" title="delete" onclick="return false;">
                    <i class="fas fa-trash"></i></a>';
                      $edit_btn= '<a href="/" class="actions btn btn-sm btn-warning" data-tooltip="true" title="Edit">
                    <i class="fas fa-pencil-alt" aria-hidden="true"></i></a>';
                  //}else{
                    //  $delete_btn ='';
                    //  $edit_btn='';
                  //}
                $actionBtns = '
                    <nobr>
                        '.$show_btn.' '.$edit_btn.' '.$delete_btn.'
                    </nobr>
                    ';
                return $actionBtns;
        }

    public function show($id)
    {
         $category=$this->repository->getById($id);
         if(\request()->expectsJson()){
              return response()->json([]);
         }
         return view($this->view_path."show",compact('category'));
    }

    public function edit($id)
    {
          $category=$this->repository->getById($id);
          return view($this->view_path."edit",compact('category'));
    }

    public function create()
    {
         return view($this->view_path."create");
    }

    public function store(CreateCategoryRequest $request)
    {
      try {
            DB::beginTransaction();
            $attributes= $request->only($this->repository->getFillable());
            $this->repository->create($attributes);
            DB::commit();
            if($request->expectsJson()){
              return response()->json([]);
            }
            return redirect()->back()->with('success', 'Category created successfully.');
          } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->with('failed', "Failed to update Category : ".$e->getMessage());
          }

    }



    public function update(CreateCategoryRequest $request, $id)
    {
      try {
            DB::beginTransaction();
            $attributes= $request->only($this->repository->getFillable());
            $this->repository->update($id,$attributes);
            DB::commit();
            if($request->expectsJson()){
              return response()->json([]);
            }
            return redirect()->route('')->with('success','Category updated successfully.');
          } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->with('failed', "Failed to update. Category : " .$e->getMessage());
          }
    }

    public function destroy($id)
    {
      try {
            DB::beginTransaction();
            $this->repository->delete($id);
            DB::commit();
            if($request->expectsJson()){
              return response()->json([]);
            }
            return redirect()->route('')->with('success','Category deleted successfully.');
          } catch (\Exception $e) {
             DB::rollback();
             return redirect()->back()->withInput()->with('failed', 'Failed to delete Category : '.$e->getMessage());
          }
    }
}
