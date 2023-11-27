<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController{

    public function index(){
        return view("admin/listaUsers");
    }

    public function edit()
    {
        $parameters = [
            'nome' => $_POST['nome'],
            'sobrenome' => $_POST['sobrenome'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];

        App::get('database')->edit('users', $_POST['id'], $parameters);

        header('Location: /listaDeUsuarios');
    }

}