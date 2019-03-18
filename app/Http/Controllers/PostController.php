<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Transformers\PostTransformer;

class PostController extends Controller
{

    public function showPost()
    {
        $postsSlide = Post::all()->take(3);
        
        $postAll = Post::paginate(12);

        $popularPosts = Post::orderBy('featured', 'asc')->take(6)->get();
        return view('index', [ 'postsSlide' => $postsSlide , 'postAll' => $postAll, 'popularPosts' => $popularPosts]);
        
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
