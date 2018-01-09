<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Corcel\Model\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::published();
        return view('welcome', compact('post'));
    }
}
