<?php

namespace App\Http\Controllers;

use App\Repositories\TeamRepository;
use App\Models\Team;
use App\Http\Requests\CreateTeamRequest;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;


class TeamController extends Controller
{

    protected $repository;
    protected $view_path="backend.admin.team.";
    protected $model;
    protected $user_permissions;
    public  $route_prefix='teams';


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:team-view|team-create|team-edit|team-delete'], ['only' => ['show']]);
        $this->middleware(['permission:team-create'], ['only' => ['create', 'store', 'show']]);
        $this->middleware(['permission:team-edit'], ['only' => ['edit', 'update', 'show']]);
        $this->middleware(['permission:team-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:team-view'], ['only' => ['index']]);
        $this->model = new Team();
        $this->user_permissions = "";
        $this->repository =  new TeamRepository(new Team());
    }

    public function index()
    {
        $teams=$this->repository->getAll();
        return view($this->view_path."index",compact('teams'));
    }

    public function getList(Request $request)
    {
        $teams=Team::all()->sortByDesc('order')->sortByDesc('type');
             return Datatables::of($teams)
                    ->addIndexColumn()
                 ->addColumn('social_links',function ($item){
                     $linkedin_link=$item->linkedin_link?'<a style="font-size: 40px;" href="'.($item->linkedin_link??'').'" title="Linkedin"> <i class="fa-brands fa-linkedin-in"></i></a>':'';
                     $google_scholar_link=$item->google_scholar_link?'<a style="font-size: 40px;" href="'.($item->google_scholar_link??'').'" title="Google Scholar"><i class="fa-brands fa-researchgate"></i></a>':'';
                     $research_gate_link=$item->research_gate_link?' <a style="font-size: 40px; margin-right:5px" href="'.($item->research_gate_link??'').'" title="Reasearchgate">G</a>':'';
                     return $linkedin_link.$research_gate_link.$google_scholar_link;
                 })
                    ->addColumn('action', function($team){
                        return $this->actionButtons($team);
                    })
                 ->editColumn("image",function ($item){
                     return asset($item->image);
                 })
                    ->rawColumns(['action','social_links'])
                    ->make(true);
    }
        public function actionButtons($team){
            return $this->generateActionButtons($team);
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
    public function show($id)
    {
         $team=$this->repository->getById($id);
         if(\request()->expectsJson()){
              return response()->json([]);
         }
         return view($this->view_path."show",compact('team'));
    }

    public function edit($id)
    {
          $team=$this->repository->getById($id);
          return view($this->view_path."edit",compact('team'));
    }

    public function create()
    {
         return view($this->view_path."create");
    }

    public function store(CreateTeamRequest $request)
    {
      try {
            DB::beginTransaction();
            $attributes= $request->only($this->model->getFillable());
            if ($request->file('image')){
              $imageName = time().'.'.$request->image->getClientOriginalExtension();
              $attributes['image']="storage/images/".$imageName;
              $image = $request->file('image');
              $imageName = time() . '.' . $image->getClientOriginalExtension();
              $image->storeAs('images', $imageName, 'public');
            }
            $this->repository->create($attributes);
            DB::commit();
            if($request->expectsJson()){
              return response()->json([]);
            }
            return redirect()->route('teams.index')->with('success', 'Team created successfully.');
          } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('teams.index')->withInput()->with('failed', "Failed to update Team : ".$e->getMessage());
          }

    }



    public function update(CreateTeamRequest $request, $id)
    {
      try {
            DB::beginTransaction();
            $attributes= $request->only($this->model->getFillable());
            $team=$this->repository->getById($id);
            if ($request->file('image')){
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $attributes['image']="storage/images/".$imageName;
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('images', $imageName, 'public');
                if ($team->image){
                    $array=explode("/",$team->image);
                    $last_key=array_key_last($array);
                    if (file_exists(public_path('storage/images')."/".$array[$last_key])){
                        unlink(public_path('storage/images')."/".$array[$last_key]);
                    }

                }
            }
            $this->repository->update($id,$attributes);
            DB::commit();
            if($request->expectsJson()){
              return response()->json([]);
            }
            return redirect()->route('teams.index')->with('success','Team updated successfully.');
          } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->with('failed', "Failed to update. Team : " .$e->getMessage());
          }
    }

    public function destroy($id)
    {
      try {
          DB::beginTransaction();
          $this_model= $this->repository->getById($id);
          $image= $this_model->image;
          $this->repository->delete($id);
          if ($image && file_exists( base_path("public/".$image))){
              unlink($image);
          }
            DB::commit();
            if(\request()->expectsJson()){
              return response()->json([]);
            }
            return redirect()->back()->with('success','Team deleted successfully.');
          } catch (\Exception $e) {
             DB::rollback();
             return redirect()->back()->withInput()->with('failed', 'Failed to delete Team : '.$e->getMessage());
          }
    }
}
