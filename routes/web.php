<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewController;
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

Route::get('/',[viewController::class,'index']);
Route::get('news',[viewController::class,'blog']);
Route::get('/news/{id}', [viewController::class, 'news']);
Route::patch('/news/{id}/comment',[CommentController::class,'add_comment'])->name('add_comment');
