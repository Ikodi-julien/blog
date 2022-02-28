<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/{categorie}', function() {
    return view('post.list');
});
Route::get('/admin/new_post', function() {
    return view('admin.newpost');
});
Route::post('/admin/new_post', function() {
    // Validation des données
    request()->validate([
        'title' => 'required|unique:posts,title',
        'short' => 'required',
        'content_path' => 'required|unique:posts,content_path',
        'read_duration' => 'required', 'min:5'
    ]);
    // Insertion dans la base
    try {
        $post = new App\Models\Post([
            'author' => request('author'),
            'title'=> request('title'),
            'short'=> request('short'),
            'content_path'=> request('content_path'),
            'read_duration'=> request('read_duration'),
        ]);
        $post->save();
    } catch (Throwable $th) {
        report($th);
        flash('ça n\'a pas fonctionné :' . ' ' . $th->getMessage())->error();
        return back();
    }

    flash('Les infos sont reçues')->success();
    return back();
});
