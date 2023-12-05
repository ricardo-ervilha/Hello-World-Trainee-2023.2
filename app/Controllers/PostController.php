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

        if(!isset($_SESSION)) {
            session_start();
        }
        $author_post = $_SESSION['id'];

        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $imagePath,
            'created_at' =>  $now->format('Y-m-d H:i:s'),
            'author_post' =>$author_post,
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

        $autor = App::get('database')->recuperaDadosDoAutor($posts->author_post);
        var_dump($autor);
        die();

        return view("admin/listaPosts", compact('tables', 'autor'));
    }

    public function update_post()
    {
        $imagePath = "public/assets/img_posts/" . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $imagePath,
            'author_post' => 1,
        ];

        App::get('database')->edit('posts', $_POST['id'], $parameters);

        header('Location: /listaDePosts');
    }

    public function delete()
    {
        App::get('database')->delete('posts', $_POST['id']);
        header('Location: /listaDePosts');   
       }

}
    
