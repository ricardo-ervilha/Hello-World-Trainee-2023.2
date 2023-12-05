<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController{

    public function __construct()
    {
        if(!isset($_SESSION)) {
            session_start();
        }

    }

    public function view()
    {
        return view("site/login");
        
    }

    public function login()
    {
        if(isset($_POST['email']) || isset($_POST['password'])) {


        
                $email = $_POST['email'];
                $senha = $_POST['password'];

        
                $quantidade = App::get('database')->validateLogin($email, $senha);

                if($quantidade == 1) {
                    
                    $usuario = App::get('database')->selectUser($email, $senha);



                    if(!isset($_SESSION)) {
                        session_start();
                    }

        
                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['name'];
                    $_SESSION['login_success'] = "Login realizado com sucesso!";

                    header("Location: /dashboard");

        
                } else{

                    $_SESSION['erro_login'] = "Verifique Email e Senha";
                
                    header("Location: /loginView");
                }

        
            }
        }

      

    public function dashboard()
    {
        return view("admin/dashboard");
    }

    public function logout(){
        if(!isset($_SESSION)){
            session_start();
        }
    
        session_destroy();
    
        header("Location: /loginView");
    }

    public function listaPosts()
    {
        
        $page = 1;
        $total_pages = 5;
        return view("site/lista_de_posts", compact("page","total_pages"));
    
    }

 
}
    
