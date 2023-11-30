<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController{

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
        $users = App::get('database')->selectAll('users');
        $tables = [
            'users' => $users,
        ];

        return view("admin/listaUsers", $tables);
    }

    public function usersEdit()
    {

    }

    public function delete(){
        App::get('database')->delete('users', $_POST['id']);
        header('Location: /listaDeUsuarios');   
       }
}