<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController{

    

    public function view()
    {
        return view("site/login");
    }

    public function login()
    {
        if(isset($_POST['email']) || isset($_POST['password'])) {

            if(strlen($_POST['email']) == 0) {
                echo "Preencha seu e-mail";
            } else if(strlen($_POST['password']) == 0) {
                echo "Preencha sua senha";
            } else {
        
                $email = $_POST['email'];
                $senha = $_POST['password'];
        
                $quantidade = App::get('database')->validateLogin($email, $senha);
        
                if($quantidade == 1) {
                    
                    
        
                    if(!isset($_SESSION)) {
                        session_start();
                    }
        
                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['nome'];
        
                    header("Location: /dashboard");
        
                } else {
                    echo "Falha ao logar! E-mail ou senha incorretos";
                }
        
            }
        }

    }  

    public function dashboard()
    {
        return view("admin/dashboard");
    }

    public function home()
    {
        
        $page = 1;
        $total_pages = 5;
        return view("site/landingPage", compact("page","total_pages"));
    
    }
}
    