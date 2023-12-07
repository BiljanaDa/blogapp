<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    return view('pages.home');
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{title}', [PostController::class, 'show']);
Route::get('/createpost', [PostController::class, 'showCreatePost']);
Route::post('/createpost', [PostController::class, 'store']);
Route::post('/createcomment', [CommentController::class, 'store']);
Route::get('/table', function () {
    return view('pages.table');
});
Route::get('/table', [PostController::class, 'table']);
Route::get('/deletepost/{id}', [PostController::class, 'destroy']);

Route::get('/deletecomment/{id}', [CommentController::class, 'destroy']);

