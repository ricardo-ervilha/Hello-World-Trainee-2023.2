<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController{

    public function readUsers(){
        $users = App::get('database')->selectAll('users');
        $tables = [
            'users' => $users,
        ];

        return view("admin/listaUsers", $tables);
    }

    public function usersCreate()
    {
        var_dump("teste");
        $parameters = [
            'name' => $_POST['name'],
            'sobrenome' => $_POST['sobrenome'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],        
        ];
    App::get('database')->insert('users', $parameters);

    header('Location: /admin/listaDeUsuarios');
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