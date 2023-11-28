<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostController{

    public function postsCreate()
    {
        $imagePath = "public/assets/img_posts/" . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
               
        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $imagePath,
            'created_at' => $_POST['created_at'],
            'author_post' => 1,
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /listaDePosts');
    }

    public function postsView()
    {
        $posts = App::get('database')->selectAll('posts');
        $tables = [
            'posts' => $posts,
        ];

        return view("admin/listaPosts2", $tables);
    }

    public function postsEdit()
    {

    }

    public function postsDelete()
    {

    }

    
}