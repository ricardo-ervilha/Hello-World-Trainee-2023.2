<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController{

    public function readUsers(){

        $users = App::get('helloworld')->selectAll('users');
        $tables = [
            'users' => $users,
        ];

        return view("admin/listaUsers", $tables);
    }

    public function posts(){
        return view("admin/listaPosts2");
    }

}