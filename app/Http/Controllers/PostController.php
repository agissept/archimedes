<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Transformers\PostTransformer;

class PostController extends Controller
{

    public function showPost()
    {
        $post = Post::all()->take(6);
        return view('index', [ 'posts' => $post ]);
    }

    public function a()
    {
        $post = Post::all()->take(6);
        dd($post);
    }

    public function post(Post $post){
        $post = Post::all();
        
        return fractal()
            ->collection($post)
            ->transformWith(new PostTransformer)
            ->toArray();
    }
}
