<?php

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

Route::get('/', function () {
    return view('landing.landing');
});
Route::get('/javascript/{filePath}', [PostController::class, 'show']);
Route::get('/{category}', [PostController::class, 'list']);
Route::view('/admin/new_post', 'admin.newpost');
Route::post('/admin/new_post', [PostController::class, 'createPost']);
