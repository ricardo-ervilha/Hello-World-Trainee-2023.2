<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController{

    public function index(){
        return view("admin/listaUsers");
    }

    public function post(){
        return view("admin/listaPosts");
    }

    public function create()
    {
        $parameters = [
            'nome' => $_POST['nome'],
            'sobrenome' => $_POST['sobrenome'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],        
        ];
    App::get('database')->insert('users', $parameters);

    header('Location: /listaDeUsuarios');
    }

    public function create_post()
    {
        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $_POST['image'],
            'created_at' => $_POST['created_at'],
            'author_post' => $_POST['author_post'],
        ];
    App::get('database')->insert('posts', $parameters);

    header('Location: /listaDePosts');
    }

}