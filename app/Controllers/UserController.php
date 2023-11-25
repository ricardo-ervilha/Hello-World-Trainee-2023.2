<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController{

    public function readUsers(){

        $usuarios = App::get('helloworld')->selectAll('users');
        $tables = [
            
            'id' => $id,
            'name' => $name,
            'sobrenome' => $sobrenome,
            'phone' => $phone,
            'email' => $email,
            'password' => $password,
            'updated_at' => $updated_at,
            'created_at' => $created_at;
        ];

        return view("admin/listaUsers", $tables);
    }

    public function posts(){
        return view("admin/listaPosts2");
    }

}