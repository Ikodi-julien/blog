<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'landing']);
Route::get('/javascript/{filePath}', [PostController::class, 'showOne']);
Route::get('/{category}', [PostController::class, 'list']);
Route::get('/admin/new_post', [AdminController::class, 'newPost']);
Route::post('/admin/new_post', [PostController::class, 'createPost']);
