<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\LoginController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth','checkAccess'])->prefix('admin')->group(function(){

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('user/list', [UserController::class, 'list'])->name('user.list');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::get('user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

    Route::get('role/create', [RoleController::class, 'create'])->name('role.create');
    Route::post('role/store', [RoleController::class, 'store'])->name('role.store');
    Route::get('role/list', [RoleController::class, 'list'])->name('role.list');
    Route::get('role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
    Route::get('role/delete/{id}', [RoleController::class, 'delete'])->name('role.delete');


    Route::get('page/create', [PageController::class, 'create'])->name('page.create');
    Route::post('page/store', [PageController::class, 'store'])->name('page.store');
    Route::get('page/list', [PageController::class, 'list'])->name('page.list');
    Route::get('page/edit/{id}', [PageController::class, 'edit'])->name('page.edit');
    Route::get('page/delete/{id}', [PageContproller::class, 'delete'])->name('page.delete');



    Route::get('menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::post('menu/store', [MenuController::class, 'store'])->name('menu.store');
    Route::get('menu/list', [MenuController::class, 'list'])->name('menu.list');
    Route::get('menu/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
    Route::get('menu/delete/{id}', [MenuController::class, 'delete'])->name('menu.delete');

});

Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login/make',[LoginController::class,'login'])->name('login.make');
Route::get('logout',[LoginController::class,'logout'])->name('logout');


Route::get('/',[FrontendController::class,'index']);

