<?php

use App\Core\Router;

//Rotas da aplicação

$router->get('login', 'LoginController@login');
$router->get('dashboard', 'LoginController@inicio');

$router->get('listaDeUsuarios', 'UserController@users');
$router->get('listaDePosts', 'PostController@posts');

$router->post('users/create', 'UserController@usersCreate');
$router->post('posts/create', 'PostController@postsCreate');
