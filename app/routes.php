<?php

use App\Core\Router;

//Rotas da aplicação

$router->get('listaDeUsuarios', 'UserController@index');
$router->get('listaDePost', 'UserController@post');

//deleteUsers
$router->post('delete', 'UserController@delete');
//deletePost
//$router->post('deletePost', 'UserController@deletePost');