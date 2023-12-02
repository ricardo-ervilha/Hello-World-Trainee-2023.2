<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController{

    public function login()
    {
        return view("site/login");
    }

    public function landingPage(){
        return view("site/landingPage");
    }

    public function inicio()
    {
        if(isset($_POST['email']) || isset($_POST['senha'])) {

            if(strlen($_POST['email']) == 0) {
                echo "Preencha seu e-mail";
            } else if(strlen($_POST['senha']) == 0) {
                echo "Preencha sua senha";
            } else {
        
                $email = $mysqli->real_escape_string($_POST['email']);
                $senha = $mysqli->real_escape_string($_POST['senha']);
        
                $sql_code = "SELECT * FROM users WHERE email = '$email' AND password = '$senha'";
                $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        
                $quantidade = $sql_query->num_rows;
        
                if($quantidade == 1) {
                    
                    $usuario = $sql_query->fetch_assoc();
        
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

    public function admin(){

        $users = App::get('database')->contador('users');
        $posts = App::get('database')->contador('posts');

        return view("admin/dashboard", $users, $posts);
    }
}
    