<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Throwable;

class PostController extends Controller
{
    public function createPost(){
        // dd(request());
        // Validation des données
        request()->validate([
            'categorie1' => 'required',
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
            // récup des catégories

            $post->save();
            $cat1 = Category::where('name', request('categorie1'))->firstOrFail();
            $post->categories()->attach($cat1);
            if (request('categorie2') !== '') {
                $cat2 = Category::where('name', request('categorie2'))->firstOrFail();
                $post->categories()->attach($cat2);
            }

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

    public function show() {

        return view('post.post', ['filePath' => request('filePath')]);
    }
}
