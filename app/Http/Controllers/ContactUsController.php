<?php

namespace App\Http\Controllers;

use App\Repositories\ContactusRepository;
use App\Models\ContactUs;
use App\Http\Requests\CreateContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;


class ContactUsController extends Controller
{

    protected $repository;
    protected $view_path="backend.admin.contact.";
    protected $model;
    protected $route_prefix= "contact_us";


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:contact-view|contact-create|contact-edit|contact-delete'], ['only' => ['show']]);
        $this->middleware(['permission:contact-create'], ['only' => ['create', 'store', 'show']]);
        $this->middleware(['permission:contact-edit'], ['only' => ['edit', 'update', 'show']]);
        $this->middleware(['permission:contact-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:contact-view'], ['only' => ['index']]);
        $this->model = new ContactUs();
        $this->repository =  new ContactusRepository(new ContactUs());
    }

    public function index()
    {
        $contacts=$this->repository->getAll();
        return view($this->view_path."index",compact('contacts'));
    }

    public function getList(Request $request)
    {

        $contacts=DB::table('contact_us')->get();
             return Datatables::of($contacts)
                    ->addIndexColumn()
                    ->addColumn('action', function($contacts){
                        return $this->generateActionButtons($contacts);
                    })
                    ->rawColumns(['action'])
                    ->make(true);
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
      return'<nobr>'.$show_btn.' '.$edit_btn.' '.$delete_btn.'</nobr>';
    }
    public function show($id)
    {
         $contact=$this->repository->getById($id);
         if(\request()->expectsJson()){
              return response()->json([]);
         }
         return view($this->view_path."show",compact('contact'));
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

    public function store(CreateContactRequest $request)
    {
      try {
            DB::beginTransaction();
            $attributes= $request->only($this->repository->getFillable());
            $this->repository->create($attributes);
            DB::commit();
            if($request->expectsJson()){
              return response()->json([]);
            }
            return redirect()->back()->with('success', 'ContactUs created successfully.');
          } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->with('failed', "Failed to update ContactUs : ".$e->getMessage());
          }

    }



    public function update(CreateContactRequest $request, $id)
    {
      try {
            DB::beginTransaction();
            $attributes= $request->only($this->repository->getFillable());
            $this->repository->update($id,$attributes);
            DB::commit();
            if($request->expectsJson()){
              return response()->json([]);
            }
            return redirect()->route('')->with('success','ContactUs updated successfully.');
          } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->with('failed', "Failed to update. ContactUs : " .$e->getMessage());
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
            return redirect()->route($this->route_prefix.'.index')->with('success','ContactUs deleted successfully.');
          } catch (\Exception $e) {
             DB::rollback();
             return redirect()->back()->withInput()->with('failed', 'Failed to delete ContactUs : '.$e->getMessage());
          }
    }
}
