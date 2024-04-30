<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\PostController;
Route::get('/posts',[PostController::class,'index']);
Route::get('posts/edit/{id}', [PostController::class,'edit'])->name('post.edit');
Route::get('posts/create',[PostController::class,'create'])->name('posts.create');
Route::get('/posts/{id}',[PostController::class,'show'])->name('post.show');
Route::delete('/posts/{id}',[PostController::class,'delete'])->name('post.delete');
Route::get('/',function(){
    return view('welcome');
});


