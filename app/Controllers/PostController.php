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
        return view("site/postIndividual");
    }   

    public function dashboardView()
    {
        return view("admin/dashboard");
    }
    public function postIndividualCreate($postId)
    {
    // Use o QueryBuilder para obter os dados do post específico do banco de dados
    $post = App::get('database')->selectById('posts', $postId);
    // Verifique se o post foi encontrado
    if (!$post) {
        die('Post não encontrado');
    }

    // Agora, você precisa enviar esses dados para a sua view (página HTML)
    $data = [
        'post' => $post,
    ];

    // Use a função view para incluir o HTML da página e passe os dados
    return view("site/postIndividual/", $data);
}


}
    
