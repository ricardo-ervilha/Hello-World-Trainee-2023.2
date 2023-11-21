<?php

use App\Core\Router;

//Rotas da aplicação

$router->get('listaDeUsuarios', 'UserController@index');
$router->get('listaDePosts', 'UserController@posts');
