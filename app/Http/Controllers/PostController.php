<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request){
        $new_post = [
            'title' => 'homologacao',
            'content' => 'teste',
            'author' => 'zilton'
        ];

        //forma mais convencional de criar registro no banco.
        // $post = new Post($new_post);
        // $post->save();

        $post = new Post();

        $post->title = 'teste';
        $post->content = 'homologacao';
        $post->author = 'diego';
        $post->save();

        dd($post);
    }
}
