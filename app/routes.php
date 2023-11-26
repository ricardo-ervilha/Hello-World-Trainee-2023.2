<?php

use App\Core\Router;

//Rotas da aplicação

$router->get('listaDeUsuarios', 'UserController@index');
$router->get('listaDePosts', 'PostController@posts');

$router->post('users/create', 'UserController@usersCreate');
$router->post('posts/create', 'PostController@postsCreate');
