<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;


class CategoryArticleController extends Controller
{
    public function showPost()
    {
        $posts = Post::paginate(12);

        $popularPosts = Post::orderBy('featured', 'asc')->take(6)->get();
        return view('category-article', [ 'posts' => $posts, 'popularPosts' => $popularPosts]);
        
    }
}
