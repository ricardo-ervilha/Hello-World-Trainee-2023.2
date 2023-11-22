<?php

use App\Core\Router;

//Rotas da aplicação

$router->get('listaDeUsuarios', 'UserController@index');
$router->get('listaDePosts', 'UserController@post');

$router->post('create', 'UserController@create');
$router->post('create_post', 'UserController@create_post');