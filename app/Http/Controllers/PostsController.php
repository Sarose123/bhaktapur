<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function show($slug){

        return view('test')->with('post',Post::where('slug',$slug)->firstOrFail());
    }
} 
