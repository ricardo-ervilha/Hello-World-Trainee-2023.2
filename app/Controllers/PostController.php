<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use \Datetime;


class PostController{

    public function postsCreate()
    {
        $imagePath = "public/assets/img_posts/" . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
        $now = new DateTime();

        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $imagePath,
            'created_at' =>  $now->format('Y-m-d H:i:s'),
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

    public function delete()
    {
        App::get('database')->delete('posts', $_POST['id']);
        header('Location: /listaDePosts');   
       }

}
    
