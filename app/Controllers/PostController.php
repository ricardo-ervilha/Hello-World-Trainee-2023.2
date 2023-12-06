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

        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $imagePath,
            'created_at' =>  $now->format('Y-m-d H:i:s'),
            'author_post' => 1,
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /listaDePosts');
    }

    public function postsView()
    {
        $posts = App::get('database')->selectAll('posts');
        $tables = [
            'posts' => $posts,
        ];

        return view("admin/listaPosts2", $tables);
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

    public function listaDosPosts()
    {
        return view("site/lista_de_posts");
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

    // Define os dados a serem passados para a view
    $data = [
        'post' => $post,
    ];

    // Chama a view e passa os dados
    return view("site/postIndividual", $data);
}
 

    public function dashboardView()
    {
        return view("admin/dashboard");
    }

}
    
