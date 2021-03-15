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

    public function store(Request $request){
        Blog::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'age' => $request->age
        ]);
        return back();
    }

    public function get_blog($id){
        $blog = Blog::find($id);

        if($blog == null)
            return response(['message' => 'blog not found'], 404);

        return view('blog.detail')->with(['blog' => $blog]);    
    }
}
