<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use \Datetime;


class PostController{

    public function postsCreate()
    {
        $imagePath = "public/assets/img_posts/" . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
        $now = new DateTime();

        if(!isset($_SESSION)) {
            session_start();
        }
        
        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $imagePath,
            'created_at' =>  $now->format('Y-m-d H:i:s'),
            'author_post' => $_SESSION['id'],
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /listaDePosts');
    }

    public function postsView()
    {
        $posts = App::get('database')->selectAll('posts');
 
        $qtdPosts =  App::get('database')->contador('posts');
        $autores = [];

        for($i=0; $i<$qtdPosts; $i++){
            $autores[$posts[$i]->id] = App::get('database')->recuperaDadosDoAutor($posts[$i]->author_post);
        }

        return view("admin/listaPosts", ['posts' => $posts, 'autores' => $autores]);
    }

    public function update_post()
    {
        $imagePath = "public/assets/img_posts/" . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $imagePath,
            'author_post' => 1,
        ];

        App::get('database')->edit('posts', $_POST['id'], $parameters);

        header('Location: /listaDePosts');
    }

    public function delete()
    {
        App::get('database')->delete('posts', $_POST['id']);
        header('Location: /listaDePosts');   
       }

    public function dashboardView()
    {
        return view("admin/dashboard");
    }

    public function postIndividual()
{
    // Obtém o ID do post da query string
    $idPost = ($_GET['id']);

    // Obtém os dados do post do banco de dados usando o ID
    $post = App::get('database')->selectById('posts', $idPost);

    // Verifica se o post foi encontrado
    if (!$post) {
        die('Post não encontrado');
    }

    // Define o número máximo de caracteres antes da imagem
    $maxCharactersBeforeImage = 180;

    // Divide o conteúdo antes e depois da imagem com base no número de caracteres
    $content = $post['content'];

    // Procura o último espaço antes do ponto de corte
    $lastSpaceBeforeCutoff = mb_strrpos(mb_substr($content, 0, $maxCharactersBeforeImage), ' ');

    // Divide o conteúdo no último espaço antes do ponto de corte
    $contentBeforeImage = mb_substr($content, 0, $lastSpaceBeforeCutoff);
    $contentAfterImage = mb_substr($content, $lastSpaceBeforeCutoff);

    // Define os dados a serem passados para a view
    $data = [
        'post' => $post,
        'contentBeforeImage' => $contentBeforeImage,
        'contentAfterImage' => $contentAfterImage,
    ];

    // Chama a view e passa os dados
    return view("site/postIndividual", $data);
}

}