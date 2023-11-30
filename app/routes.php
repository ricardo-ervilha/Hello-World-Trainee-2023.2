<?php

use App\Core\Router;

//Rotas da aplicação

$router->get('login', 'LoginController@login');
$router->get('dashboard', 'LoginController@inicio');

$router->post('users/create', 'UserController@usersCreate');
$router->post('posts/create', 'PostController@postsCreate');

$router->get('listaDeUsuarios', 'UserController@usersView');
$router->get('listaDePosts', 'PostController@postsView');

//deleteUsers
$router->post('deleteUser', 'UserController@delete');
$router->post('deletePost', 'PostController@delete');