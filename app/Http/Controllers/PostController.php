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

        $post->title = 'Novo teste';
        $post->content = 'homologacao';
        $post->author = 'Marilia';
        $post->save();

        dd($post);
    }


     public function read(Request $r)
    {
        $post = new Post();

        $post = $post->find(1);

        return($post);
    }

    public function all(Request $r)
    {
        $posts = Post::all();

        dd($posts);
    }

    public function update(Request $request)
    {
        
        $posts = Post::where('id','>',1)->update([
            'author' => 'Zilton',
            'title' => 'teste'
            ]);

        return $posts;

    }

    public function del(Request $request)
    {   
        $post = Post::find(1);
        //deletar todos os registros do banco
        //$post = Post::where('id','>',0)->delete();
        
        if ($post){
           return $post->delete();
        }

            return 'Não existe esse Id';

    }

}
