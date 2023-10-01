<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login-admin',[LoginController::class, 'login']);
Route::post('/login-admin',[LoginController::class, 'loginStore']);
Route::get('/logout', [HomeController::class, 'logOut']);
Route::group(['middleware'=>'auth:admin'],function(){

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/admins',[AdminController::class,'index'])->name('admin.admins');
    Route::get('/admin-delete-{id}',[AdminController::class,'delete'])->name('admin.admin.delete');
    Route::get('/admin-create',[AdminController::class,'create'])->name('admin.create.admin');
    Route::post('/admin-create',[AdminController::class,'store'])->name('admin.create.admin.store');

    Route::get('/users',[UserController::class,'index']);

    Route::get('/posts',[PostController::class,'index']);
    Route::get('/post-delete-{id}',[PostController::class,'delete']);
    Route::get('/post-create',[PostController::class,'create']);
    Route::post('/post-create',[PostController::class,'store']);
    Route::get('/post-edite-{id}',[PostController::class,'edite']);
    Route::post('/post-edite',[PostController::class,'update']);
    Route::get('/post-slider-{id}',[PostController::class,'indexSlider']);
    Route::get('/post-slide-delete-{id}',[PostController::class,'deleteSlide']);
    Route::get('/post-create-slide-{id}',[PostController::class,'createSlide']);
    Route::post('/post-create-slide',[PostController::class,'storeSlide']);

    Route::get('/about',[AboutController::class,'index']);
    Route::post('/about',[AboutController::class,'store']);

    Route::get('/contacts',[ContactController::class,'index']);
    Route::get('/delete-contact-{id}',[ContactController::class,'delete']);

    Route::get('/setting',[SettingController::class,'index']);
    Route::post('/setting',[SettingController::class,'store']);

    Route::get('/categories',[CategoryController::class,'index']);
    Route::get('/category-delete-{id}',[CategoryController::class,'delete']);
    Route::get('/category-create',[CategoryController::class,'create']);
    Route::post('/category-create',[CategoryController::class,'store']);

    Route::get('/cards',[CardController::class,'index']);
    Route::get('/card-delete-{id}',[CardController::class,'delete']);
    Route::get('/card-create',[CardController::class,'create']);
    Route::post('/card-create',[CardController::class,'store']);
});

