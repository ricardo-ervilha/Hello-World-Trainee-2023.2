<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController{

    public function index()
    {
        return view("admin/listaUsers");
    }

    public function usersCreate()
    {
        $parameters = [
            'name' => $_POST['name'],
            'sobrenome' => $_POST['sobrenome'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],        
        ];
    App::get('database')->insert('users', $parameters);

    header('Location: /listaDeUsuarios');
    }

    public function usersView()
    {

    }

    public function usersEdit()
    {

    }

    public function usersDelete()
    {

    }
}