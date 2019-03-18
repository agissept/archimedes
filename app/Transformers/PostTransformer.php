<?php

namespace App\Transformers;

use TCG\Voyager\Models\Post;
use League\Fractal\TransformerAbstract;

class PostTransformer extends TransformerAbstract
{
    public function transform(Post $post){
        return[
            'title' => $post->title,
            'body' => $post->body,
            'image' => $post->image,
            'date' => date('d-M-Y', strtotime($post->created_at)),
        ];
    }
}