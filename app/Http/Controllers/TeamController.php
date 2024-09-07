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
        $teams=$this->repository->getAll();
             return Datatables::of($teams)
                    ->addIndexColumn()
                 ->addColumn('social_links',function ($item){
                     $facebook=$item->facebook_link?'<a style="font-size: 50px;" href="'.($item->facebook_link??'').'"><i class="fa-brands fa-facebook"></i></a>':'';
                     $insta=$item->instagram_link?' <a style="font-size: 50px;color:red" href="'.($item->instagram_link??'').'"><i class="fa-brands fa-instagram"></i></a>':'';
                     return $facebook.$insta;
                 })
                    ->addColumn('action', function($team){
                        return $this->actionButtons($team);
                    })
                    ->rawColumns(['action','social_links'])
                    ->make(true);
    }
        public function actionButtons($team){
             $is_auth_id=(Auth::id()==$team->id)?true:false;
            $actionBtns='';
                 $show_btn = '<a href="'.route("teams.show", $team->id).'" class="actions btn btn-sm btn-info" data-tooltip="true" title="Show">
                    <i class="far fa-eye" aria-hidden="true"></i></a>';
               //   if(!$is_auth_id)  }}
                 // {
                      $delete_btn= '<a class="btn btn-danger btn-sm delete-asset" title="delete" onclick="return false;">
                    <i class="fas fa-trash"></i></a>';
                      $edit_btn= '<a href="'.route('teams.edit', $team->id).'" class="actions btn btn-sm btn-warning" data-tooltip="true" title="Edit">
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
                $attributes['image']=asset('/storage/images')."/".$imageName;
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
            $this->repository->delete($id);
            DB::commit();
            if($request->expectsJson()){
              return response()->json([]);
            }
            return redirect()->route('')->with('success','Team deleted successfully.');
          } catch (\Exception $e) {
             DB::rollback();
             return redirect()->back()->withInput()->with('failed', 'Failed to delete Team : '.$e->getMessage());
          }
    }
}
