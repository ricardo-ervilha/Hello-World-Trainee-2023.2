<?php

use App\Core\Router;

//Rotas da aplicação

$router->get('listaDeUsuarios', 'UserController@usersView');
$router->get('listaDePosts', 'PostController@postsView');

//Login

$router->get('login', 'LoginController@login');
$router->get('dashboard', 'LoginController@inicio');

//Create

$router->post('users/create', 'UserController@usersCreate');
$router->post('posts/create', 'PostController@postsCreate');

//Delete
$router->post('deleteUser', 'UserController@delete');
$router->post('deletePost', 'PostController@delete');