<?php

use App\Core\Router;

//Rotas da aplicação

$router->get('listaDeUsuarios', 'UserController@index');

$router->post('listaDeUsuarios/update', 'UserController@edit');