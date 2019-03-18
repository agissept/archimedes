<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;


class AboutController extends Controller
{
    public function show()
    {
        $popularPosts = Post::orderBy('featured', 'asc')->take(6)->get();

        return view('about', ['popularPosts' => $popularPosts]);
    }
}