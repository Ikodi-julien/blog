<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function newPost() {
        $categories = Category::all();
        // dd($categories);
        return view('admin.newpost', ['categories' => $categories]);
    }
}
