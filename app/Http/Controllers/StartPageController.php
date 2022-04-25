<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class StartPageController extends Controller
{
    public function index()
    {

        $posts = Post::with('user')
            -> latest()
            -> active()
            -> take(5)
            -> get();

        return  view('index', compact('posts'));
    }
}
