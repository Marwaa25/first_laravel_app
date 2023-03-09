<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});
Route::get('/students',[StudentController::class,'index']);

Route::get('/posts',  [PostController::class,'index']);
Route::get('/posts/show/{post}',  [PostController::class,'show'])->name('posts.show');
Route::get('/posts/create',  [PostController::class,'create']);
Route::post('/posts/store',  [PostController::class,'store'])->name('posts.store');
Route::get('/posts/{post}/edit', [PostController::class,'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


