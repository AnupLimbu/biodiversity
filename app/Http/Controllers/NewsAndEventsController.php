<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsAndEventsRequest;
use App\Models\NewsAndEvents;
use App\Models\Team;
use App\Repositories\NewsAndEventsRepository;
use App\Repositories\TeamRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class NewsAndEventsController extends Controller
{
    protected NewsAndEventsRepository $repository;
    protected NewsAndEvents $model;

    public function __construct()
    {
        $this->middleware('auth',['except'=>'webView']);
        $this->middleware(['permission:news-and-events-view|news-and-events-create|news-and-events-edit|news-and-events-delete'], ['only' => ['show']]);
        $this->middleware(['permission:news-and-events-create'], ['only' => ['create', 'store', 'show']]);
        $this->middleware(['permission:news-and-events-edit'], ['only' => ['edit', 'update', 'show']]);
        $this->middleware(['permission:news-and-events-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:news-and-events-view'], ['only' => ['index']]);
        $this->model = new NewsAndEvents();
        $this->repository =  new NewsAndEventsRepository($this->model);
    }

    public function index()
    {
        return view('backend/admin/news-and-events/index');
    }

    public function create()
    {
        return view('backend/admin/news-and-events/create');
    }

    public function edit($id)
    {
        $newsAndEvent=$this->repository->getById($id);
        return view('backend/admin/news-and-events/edit', compact('newsAndEvent'));
    }

    public function show()
    {
        return view('backend/admin/news-and-events/edit');
    }

    public function store(NewsAndEventsRequest $request)
    {
        try {
            DB::beginTransaction();
            $this->repository->createOrUpdate($request);
            DB::commit();
            return redirect()->route('news-and-events.index')->with('success','News and Events Created successfully.');
        }catch (\Exception $exception)
        {
            DB::rollback();
            return redirect()->route('news-and-events.index')->with('failed','News and Events could not be saved successfully.');
        }
    }

    public function update($id, NewsAndEventsRequest $request)
    {
        try {
            DB::beginTransaction();
            $this->repository->createOrUpdate($request, $id);
            DB::commit();
            return redirect()->route('news-and-events.index')->with('success','News and Events updated successfully.');
        }catch (\Exception $exception)
        {
            DB::rollback();
            return redirect()->route('news-and-events.index')->with('failed','News and Events could not be updated successfully.');
        }
    }

    public function webView(Request $request)
    {
        $newsAndEvents=$this->repository->getAll();
        return view('sub-pages/news-and-events/index',compact('newsAndEvents'));
    }

    public function getList(Request $request)
    {
        $newsAndEvents=DB::table('news_and_events')->get();
        return Datatables::of($newsAndEvents)
            ->addIndexColumn()
            ->addColumn('action', function($newsAndEvent){
                return $this->actionButtons($newsAndEvent);
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function actionButtons($category){
        $is_auth_id=(Auth::id()==$category->id)?true:false;
        $actionBtns='';
        $show_btn = '';
        $delete_btn= '<form style="display:inline" action="'. route('news-and-events.destroy' ,['news_and_event'=>$category->id ]).'" method="POST">
                                    '.csrf_field(). method_field("DELETE").'
                                    <button class="btn btn-danger btn-sm delete-asset" title="delete" onclick="deleteModel()">
                                    <i class="fas fa-trash" aria-hidden="true"></i>
                                </button>

                                    </form>';
        $edit_btn= '<a href="'.route('news-and-events.edit' ,['news_and_event'=>$category->id ]).'" class="actions btn btn-sm btn-warning" data-tooltip="true" title="Edit">
                    <i class="fas fa-pencil-alt" aria-hidden="true"></i></a>';

        $actionBtns = '
                    <nobr>
                        '.$show_btn.' '.$edit_btn.' '.$delete_btn.'
                    </nobr>
                    ';
        return $actionBtns;
    }

    public function destroy($id)
    {
        try {
            $newsAndEvent = $this->repository->getById($id);

            Storage::disk('local')->delete($newsAndEvent->banner_img);
            Storage::disk('local')->delete($newsAndEvent->file);
            $newsAndEvent->delete();
            return redirect()->route('news-and-events.index')->with('success', 'News and Events deleted successfully.');
        }catch (\Exception $exception)
        {
            return redirect()->route('news-and-events.index')->with('success', 'News and Events could not be deleted.');
        }
    }
}
