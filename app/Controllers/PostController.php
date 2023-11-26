<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostController{

    public function posts()
    {
        return view("admin/listaPosts2");
    }

    public function postsCreate()
    {
        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $_POST['image'],
            'created_at' => $_POST['created_at'],
            'author_post' => 14,
        ];
    App::get('database')->insert('posts', $parameters);

    header('Location: /listaDePost2');
    }

    public function postsView()
    {

    }

    public function postsEdit()
    {

    }

    public function postsDelete()
    {

    }

    
}