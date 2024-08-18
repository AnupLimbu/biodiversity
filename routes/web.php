<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

    Route::get('/', function () {
     return view('sub-pages/home/index');
    });



    Route::get('/admin/dashboard', function () {
    return view('backend.admin.dashboard');
    })->middleware(['auth'])->name('dashboard');
    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::group(['middleware'=>"auth",'prefix' => 'admin/products', 'as' => 'products.'], function(){
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('list', [ProductController::class, 'getList'])->name('list');
    Route::get('create', [ProductController::class, 'create'])->name('create');
    Route::get('{id}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::get('{id}/show', [ProductController::class, 'show'])->name('show');
    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::patch('{id}', [ProductController::class, 'update'])->name('update');
    });
    Route::group(['middleware'=>"auth",'prefix' => 'admin/categories', 'as' => 'categories.'], function(){
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('list', [CategoryController::class, 'getList'])->name('list');
    Route::get('create', [CategoryController::class, 'create'])->name('create');
    Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('edit');
    Route::get('{id}/show', [CategoryController::class, 'show'])->name('show');
    Route::post('/', [CategoryController::class, 'store'])->name('store');
    Route::patch('{id}', [CategoryController::class, 'update'])->name('update');
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

require __DIR__.'/auth.php';
