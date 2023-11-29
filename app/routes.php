<?php

use App\Core\Router;

//Rotas da aplicação

$router->get('loginView', 'LoginController@view');
$router->post('login', 'LoginController@login');

$router->get('dashboard', 'LoginController@dashboard');
$router->get('home', 'LoginController@home');

$router->post('users/create', 'UserController@usersCreate');
$router->post('posts/create', 'PostController@postsCreate');

$router->get('admin/listaDeUsuarios', 'UserController@readUsers');
$router->get('admin/listaDePosts', 'PostController@readPosts');


