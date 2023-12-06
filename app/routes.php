<?php

use App\Core\Router;

//Rotas da aplicação

$router->get('loginView', 'LoginController@view');
$router->post('login', 'LoginController@login');
$router->get('logout_sair', 'LoginController@logout_sair');
$router->get('logout_trocar_user', 'LoginController@logout_trocar_user');

$router->get('posts', 'LoginController@listaPosts');

$router->get('dashboard', 'LoginController@admin');
$router->get('home', 'LoginController@landingPage');

$router->post('users/create', 'UserController@usersCreate');
$router->post('posts/create', 'PostController@postsCreate');

$router->get('listaDeUsuarios', 'UserController@usersView');
$router->get('listaDePosts', 'PostController@postsView');

//update_users_and_posts
$router->post('update_user', 'UserController@update_user');
$router->post('update_post', 'PostController@update_post');

//deleteUsers
$router->post('deleteUser', 'UserController@delete');
$router->post('deletePost', 'PostController@delete');

//dashboard
$router->get('dashboardView', 'PostController@dashboardView');

//post individual
$router->get('postIndividual', 'PostController@postIndividual');
