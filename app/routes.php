<?php

use App\Core\Router;

//Rotas da aplicação

$router->get('listaDeUsuarios', 'UserController@readUsers');
$router->get('listaDePosts', 'UserController@readPosts');
