<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/',[HomeController::class,'index']);

route::get('/redirect',[HomeController::class,'redirect']);
route::get('/blog/{id}', [HomeController::class,'blog']);
Route::get('/category/{id}', [HomeController::class, 'show']);
Route::get('/search', [HomeController::class, 'searchdata']);



route::post('/add_category',[AdminController::class,'add_category']);
route::get('/view_category',[AdminController::class,'view_category']);
route::get('/delete_category/{id}',[AdminController::class,'delete_category']);


route::post('/add_post',[AdminController::class,'add_post']);
route::get('/view_post',[AdminController::class,'view_post']);
route::get('/show_post',[AdminController::class,'show_post']);
route::get('/update_post/{id}',[AdminController::class,'update_post']);
route::get('/delete_post/{id}',[AdminController::class,'delete_post']);


