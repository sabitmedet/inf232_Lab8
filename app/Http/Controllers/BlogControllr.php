<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogControllr extends Controller
{
    public function index() {
        $blogs = Blog::all();

        return view('blog.index')->with(['blogs' => $blogs]);
    }
}
