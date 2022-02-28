<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Throwable;

class PostController extends Controller
{
    public function createPost(){
    // Validation des données
    request()->validate([
        'title' => 'required|unique:posts,title',
        'short' => 'required',
        'content_path' => 'required|unique:posts,content_path',
        'read_duration' => 'required', 'min:5'
    ]);
    // Insertion dans la base
    try {
        $post = new Post([
            'author' => request('author') === null ? 'Julien' : request('author'),
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
    }

    public function list() {
        // dd(request('category'));
        $posts = Post::all();

        return view('post.list', ['posts' => $posts]);
    }
}
