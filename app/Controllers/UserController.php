<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController{

    public function index(){
        return view("admin/listaUsers");
    }
    public function delete(){
     App::get('database')->delete('users', $_POST['id']);
     header('location: /listaDeUsarios');   
    }

    public function Post(){
        return view("admin/listaDePost");
       }

       public function deletePost(){
        App::get('database')->delete('post', $_POST['id']);
        header('location: /listaDePOst');   
       }       

}