<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(['prefix' => '/', 'as' => ''],function(){
    Route::get('/', function () {return view('sub-pages/home/index');});
    Route::get('/contact-us', function () { return view('sub-pages/contact-us/index');});
    Route::get('/news-and-events', [\App\Http\Controllers\NewsAndEventsController::class, 'webView']);
    Route::get('/news-and-events/{id}', [\App\Http\Controllers\NewsAndEventsController::class, 'webViewIndividual']);
    Route::get('/contact_us', function (\Illuminate\Http\Request $request) {
        try {
            $request->validate(['name' => 'required', 'message' => 'required']);
            \App\Models\ContactUs::create($request->all());
            $message='success';
            return view('sub-pages/contact-us/index', compact('message'));
        }catch (\Exception $exception){
            $message='failed';
            return view('sub-pages/contact-us/index',compact('message'));
        }
    });
    Route::get('/about-us', function () {return view('sub-pages/about-us/index');});

    Route::get('/teams', function () {
        $teams =  (\App\Models\Team::where('type','team')->orderBy('order', 'DESC')->get());
        $advisor =  (\App\Models\Team::where('type','advisor')->orderBy('order', 'DESC')->get());
        $staff =  (\App\Models\Team::where('type','staff')->orderBy('order', 'DESC')->get());
        $volunteer =  (\App\Models\Team::where('type','volunteer')->orderBy('order', 'DESC')->get());
        return view('sub-pages/our-teams/team', compact('teams','volunteer','advisor','staff'));
    });
    Route::get('/advisors', function () {
        return view('sub-pages/our-teams/advisor');
    });
    Route::get('/support_us', function () {
        return view('sub-pages/support_us/index');
    });
    Route::group(['prefix' => 'projects', 'as' => 'project.'], function (){
        Route::get('/', function () {
            $projects =  (\App\Models\Project::orderBy('created_at', 'DESC')->get());
            return view('sub-pages/projects/index', compact('projects'));
        });
        Route::get('/ongoing', function () {
            $ongoing =  (\App\Models\Project::orderBy('created_at', 'DESC')->where('status','on-going')->get());
            return view('sub-pages/projects/index', compact('ongoing'));
        });
        Route::get('/completed', function () {
            $completed =  (\App\Models\Project::orderBy('created_at', 'DESC')->where('status','completed')->get());
            return view('sub-pages/projects/index', compact('completed'));
        });
        Route::get('/{id}', function ($id) {
            $project =  (\App\Models\Project::where('id', $id)->first());
            $projects =  (\App\Models\Project::where('id','!=',$project->id)->orderBy('created_at', 'DESC')->limit(4)->get());
            return view('sub-pages/projects/show', compact('project','projects'));
        });
    });
});

Route::get('/admin', function () {
    return view('backend.admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('admin/news-and-events', \App\Http\Controllers\NewsAndEventsController::class);
    Route::get('admin/news-and-events-list', [\App\Http\Controllers\NewsAndEventsController::class,'getList'])->name('news-and-events.list');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

    Route::group(['middleware'=>"auth",'prefix' => 'admin/projects', 'as' => 'projects.'], function(){
    Route::get('/', [ProjectController::class, 'index'])->name('index');
    Route::get('list', [ProjectController::class, 'getList'])->name('list');
    Route::get('create', [ProjectController::class, 'create'])->name('create');
    Route::get('{id}/edit', [ProjectController::class, 'edit'])->name('edit');
    Route::get('{id}/show', [ProjectController::class, 'show'])->name('show');
    Route::post('/', [ProjectController::class, 'store'])->name('store');
    Route::patch('{id}', [ProjectController::class, 'update'])->name('update');
    Route::delete('{id}/delete', [ProjectController ::class, 'destroy'])->name('destroy');

    });
    Route::group(['middleware'=>"auth",'prefix' => 'admin/contact_us', 'as' => 'contact_us.'], function(){
    Route::get('/', [ContactUsController::class, 'index'])->name('index');
    Route::get('list', [ContactUsController::class, 'getList'])->name('list');
//    Route::get('create', [ContactUsController::class, 'create'])->name('create');
    Route::get('{id}/edit', [ContactUsController::class, 'edit'])->name('edit');
    Route::get('{id}/show', [ContactUsController::class, 'show'])->name('show');
    Route::post('/', [ContactUsController::class, 'store'])->name('store');
    Route::patch('{id}', [ContactUsController::class, 'update'])->name('update');
    Route::delete('{id}', [ContactUsController::class, 'destroy'])->name('destroy');
});

Route::group(['middleware'=>"auth",'prefix' => 'admin/users', 'as' => 'users.'], function(){
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('list', [UserController::class, 'getList'])->name('list');
    Route::get('create', [UserController::class, 'create'])->name('create');
    Route::get('{id}/edit', [UserController::class, 'edit'])->name('edit');
    Route::get('{id}/show', [UserController::class, 'show'])->name('show');
    Route::post('/', [UserController::class, 'store'])->name('store');
    Route::patch('{id}', [UserController::class, 'update'])->name('update');
    Route::get  ('{id}/delete', [UserController ::class, 'destroy'])->name('destroy');
});

Route::group(['middleware'=>"auth",'prefix' => 'admin/roles', 'as' => 'roles.'], function(){
    Route::get('/', [RoleController::class, 'index'])->name('index');
    Route::get('list', [RoleController::class, 'getList'])->name('list');
    Route::get('create', [RoleController::class, 'create'])->name('create');
    Route::get('{id}/edit', [RoleController::class, 'edit'])->name('edit');
    Route::get('{id}/show', [RoleController::class, 'show'])->name('show');
    Route::post('/', [RoleController::class, 'store'])->name('store');
    Route::get  ('{id}/delete', [RoleController::class, 'destroy'])->name('destroy');
    Route::put('{id}', [RoleController::class, 'update'])->name('update');
});

Route::group(['middleware'=>"auth",'prefix' => 'admin/teams', 'as' => 'teams.'], function(){
    Route::get('/', [TeamController::class, 'index'])->name('index');
    Route::get('list', [TeamController::class, 'getList'])->name('list');
    Route::get('create', [TeamController::class, 'create'])->name('create');
    Route::get('{id}/edit', [TeamController::class, 'edit'])->name('edit');
    Route::get('{id}/show', [TeamController::class, 'show'])->name('show');
    Route::post('/', [TeamController::class, 'store'])->name('store');
    Route::get  ('{id}/delete', [TeamController::class, 'destroy'])->name('destroy');
    Route::put('{id}', [TeamController::class, 'update'])->name('update');
});

Route::group(['middleware'=>"auth",'prefix' => 'admin/downloads', 'as' => 'downloads.'], function(){
    Route::get('/', [DownloadController::class, 'index'])->name('index');
    Route::get('list', [DownloadController::class, 'getList'])->name('list');
    Route::get('create', [DownloadController::class, 'create'])->name('create');
    Route::get('{id}/edit', [DownloadController::class, 'edit'])->name('edit');
    Route::get('{id}/show', [DownloadController::class, 'show'])->name('show');
    Route::post('/', [DownloadController::class, 'store'])->name('store');
    Route::get  ('{id}/delete', [DownloadController::class, 'destroy'])->name('destroy');
    Route::put('{id}', [DownloadController::class, 'update'])->name('update');
});
require __DIR__.'/auth.php';
