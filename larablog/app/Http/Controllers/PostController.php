<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class PostController extends Controller
{
    public function createPost(){
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
            if (request('categorie2')) {
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
        if (request('category') === "all-categories") {
            $posts = Post::all();
        } else {
            $category = Category::where('name', request('category'))->first();
            $posts = $category->posts;
        }

        return view('post.list', ['posts' => $posts]);
    }

    public function showOne() {

        return view('post.post', ['filePath' => request('filePath')]);
    }

    public function landing() {
        $posts = Post::all()->sortByDesc('created_at');
        // On garde les $i premiers
        for ($i = 0; $i < 3; $i++) {
            $withCat[] = [
                'post' => $posts[$i],
                'categories' => $posts[$i]->categories,
                'date' => implode(array_slice(str_split($posts[$i]->created_at), 0, 10))
            ];
        }
        // dd($withCat);
        return view('landing.landing', ['postWithCat' => $withCat]);
    }
}
