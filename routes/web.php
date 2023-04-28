<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryHasPostsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

//home
Route::get('/',[HomeController::class,'index']);

//login, logout route
Route::get('/login', [LoginController::class, 'displayloginform'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::get('/user/dashboard', [LoginController::class, 'userdashboard'])->middleware('auth');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

// admin
Route::prefix('admin/')->middleware(['auth', 'role'])->group(function ($id) {
    Route::get('/dashboard', [LoginController::class, 'admindashboard'])->name('admin.dashboard');
    route::get('/account', [AdminController::class, 'index']);
    Route::get('/account/create', [AdminController::class, 'create'])->name('create');
    Route::post('/account/store', [AdminController::class, 'store'])->name('register');
    Route::get('/account/edit/{id}', [AdminController::class, 'edit']);
    Route::post('/account/update/{id}', [AdminController::class, 'update'])->name('updateaccount');
    Route::get('/account/destroy/{id}', [AdminController::class, 'destroy']);
});

// user
Route::prefix('user')->middleware('auth')->group(function ($id) {
    Route::get('/dashboard', [LoginController::class, 'userdashboard'])->name('user.dashboard');
    Route::get('register', [RegisterController::class, 'create'])->withoutMiddleware('auth');
    Route::post('store', [RegisterController::class, 'store'])->withoutMiddleware('auth');
    Route::get('/posts', [PostController::class, 'index']);

    //category
    route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category');
        Route::get('/create', [CategoryController::class, 'create'])->name('create_category');
        Route::post('/store', [CategoryController::class, 'store']);
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit_category');
        Route::post('/update/{id}', [CategoryController::class, 'update']);
        Route::get('/destroy/{id}', [CategoryController::class, 'destroy']);
    });

    //post
    route::prefix('post')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('post');
        Route::get('/create', [PostController::class, 'create'])->name('create_post');
        Route::post('/store', [PostController::class, 'store']);
        Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit_post');
        Route::post('/update/{id}', [PostController::class, 'update']);
        Route::get('/destroy/{id}', [PostController::class, 'destroy']);
    });

    //comment
    route::prefix('comment')->group(function () {
        Route::get('/', [CommentController::class, 'index']);
        Route::get('/destroy/{id}', [CommentController::class, 'destroy']);
    });
});

Route::prefix('blog')->group(function($id){
    Route::get('post/{id}',[HomeController::class,'show']);
    Route::get('category/{id}',[CategoryHasPostsController::class,'index']);
    Route::get('search/',[SearchController::class,'index']);
    Route::post('/comment', [CommentController::class, 'store']);

});