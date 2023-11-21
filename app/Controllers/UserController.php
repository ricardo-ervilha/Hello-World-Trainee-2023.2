<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController{

    public function index(){
        return view("admin/listaUsers");
    }

    public function posts(){
        return view("admin/listaPosts2");
    }

}