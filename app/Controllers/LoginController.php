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

    public function logout_trocar_user(){
        session_destroy();
        header("Location: /loginView");
    }

    public function logout_sair(){
        session_destroy();
        header("Location: /home");
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

         $page = intval($_GET['pagina']);
        if(isset($_GET["pagina"]) && empty($_GET["pagina"])){
            $page = intval($_GET['pagina']);

            if($page <= 0 ){
                return redirect('posts');
            }
        }

        

        
        $itens_por_page = 2;
        $start_limit = $itens_por_page * $page - $itens_por_page;
        $rows_count = App::get('database')->contador('posts');

        if($start_limit > $rows_count){
            return redirect('posts');
        }

         $total_pages = ceil($rows_count / $itens_por_page);


        $posts = App::get('database')->selectAllPosts('posts', $start_limit, $itens_por_page);
        

        $tables = [
            'posts' => $posts,
        ];
       

        return view('site/lista_de_posts', compact("posts", "page", "total_pages"));
    }
    
}
    
