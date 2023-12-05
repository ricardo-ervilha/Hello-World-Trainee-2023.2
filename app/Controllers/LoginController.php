<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController{

    public function view()
    {
        return view("site/login");
    }

    public function __construct()
    {
        if(!isset($_SESSION)) {
            session_start();
        }

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

      

    public function landingPage(){

        $posts = App::get('database')->selectFive('posts');
        $tables = [
            'posts' => $posts,
        ];

        return view("site/landingPage", $tables);
    }

    public function admin(){
        $usersCount = App::get('database')->contador('users');
        $postsCount = App::get('database')->contador('posts');
    
        // Passando a contagem como variável para a view
        return view("admin/dashboard", ['postsCount' => $postsCount, 'usersCount' => $usersCount] );
    }

    public function listaPosts(){

        $posts = App::get('database')->selectAll('posts');
        $tables = [
            'posts' => $posts,
        ];

        return view('site/lista_de_posts', $tables);
    }
    
}
    
