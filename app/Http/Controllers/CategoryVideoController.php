<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class CategoryVideoController extends Controller
{
    public function showPost()
    {
        $posts = Post::paginate(12);

        $popularPosts = Post::orderBy('featured', 'asc')->take(6)->get();
        return view('category-video', [ 'posts' => $posts, 'popularPosts' => $popularPosts ]);
        
    }
}
