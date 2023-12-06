<?php

use App\Core\Router;

//Rotas da aplicação

$router->get('login', 'LoginController@login');
$router->get('dashboard', 'LoginController@inicio');
$router->get('home', 'LoginController@landingPage');

$router->get('posts', 'LoginController@listaPosts');

$router->post('users/create', 'UserController@usersCreate');
$router->post('posts/create', 'PostController@postsCreate');

$router->get('listaDeUsuarios', 'UserController@usersView');
$router->get('listaDePosts', 'PostController@postsView');

//update_users_and_posts
$router->post('update_user', 'UserController@update_user');
$router->post('update_post', 'PostController@update_post');

//deleteUsers&Posts
$router->post('deleteUser', 'UserController@delete');
$router->post('deletePost', 'PostController@delete');

//lista de posts
$router->get('listaDosPosts', 'PostController@listaDosPosts');

//post individual
$router->get('postIndividual', 'PostController@postIndividual');

//dashboard
$router->get('dashboardView', 'PostController@dashboardView');