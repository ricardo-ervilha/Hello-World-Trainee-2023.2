<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostController{

    public function readPosts()
    {
        return view("admin/listaPosts2");
    }

    public function postsCreate()
    {
        $imagePath = "public/assets/img_posts/" . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

        if(!isset($_SESSION)) {
            session_start();
        }
        $author_post = $_SESSION['id'];

        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $imagePath,
            'created_at' => $_POST['created_at'],
            'author_post' =>$author_post,
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /listaDePosts');
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