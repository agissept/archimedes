<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class DetailPostController extends Controller
{
    public function showPost($id)
    {

        $post = Post::find($id);
        $prevPost = Post::find($id - 1);
        $nextPost = Post::find($id + 1);
        $post->featured = $post->featured + 1;
        $post->save();

        $popularPosts = Post::orderBy('featured', 'asc')->take(6)->get();
        return view('detail-post', ['post' => $post, 'popularPosts' => $popularPosts, 'prevPost' => $prevPost, 'nextPost' => $nextPost]);

    }
}
