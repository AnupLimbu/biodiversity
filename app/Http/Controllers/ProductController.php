<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use App\Models\Product;
use App\Http\Requests\CreateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;


class ProductController extends Controller
{

    protected $repository;
    protected $view_path="backend.admin.product.";
    protected $model;


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:product-view|product-create|product-edit|product-delete'], ['only' => ['show']]);
        $this->middleware(['permission:product-create'], ['only' => ['create', 'store', 'show']]);
        $this->middleware(['permission:product-edit'], ['only' => ['edit', 'update', 'show']]);
        $this->middleware(['permission:product-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:product-view'], ['only' => ['index']]);
        $this->model = new Product();
        $this->repository =  new ProductRepository(new Product());
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
                        return $this->actionButtons($product);
                    })
                    ->rawColumns(['action'])
                    ->make(true);
    }
        public function actionButtons($product){
             $is_auth_id=(Auth::id()==$product->id)?true:false;
            $actionBtns='';
                 $show_btn = '<a href="'.route("products.show", $product->id).'" class="actions btn btn-sm btn-info" data-tooltip="true" title="Show">
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
         $product=$this->repository->getById($id);
         if(\request()->expectsJson()){
              return response()->json([]);
         }
         return view($this->view_path."show",compact('product'));
    }

    public function edit($id)
    {
          $product=$this->repository->getById($id);
          return view($this->view_path."edit",compact('product'));
    }

    public function create()
    {
         return view($this->view_path."create");
    }

    public function store(CreateProductRequest $request)
    {
      try {
            DB::beginTransaction();
            $attributes= $request->only($this->repository->getFillable());
            $this->repository->create($attributes);
            DB::commit();
            if($request->expectsJson()){
              return response()->json([]);
            }
            return redirect()->back()->with('success', 'Product created successfully.');
          } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->with('failed', "Failed to update Product : ".$e->getMessage());
          }

    }



    public function update(CreateProductRequest $request, $id)
    {
      try {
            DB::beginTransaction();
            $attributes= $request->only($this->repository->getFillable());
            $this->repository->update($id,$attributes);
            DB::commit();
            if($request->expectsJson()){
              return response()->json([]);
            }
            return redirect()->route('')->with('success','Product updated successfully.');
          } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->with('failed', "Failed to update. Product : " .$e->getMessage());
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
            return redirect()->route('')->with('success','Product deleted successfully.');
          } catch (\Exception $e) {
             DB::rollback();
             return redirect()->back()->withInput()->with('failed', 'Failed to delete Product : '.$e->getMessage());
          }
    }
}
