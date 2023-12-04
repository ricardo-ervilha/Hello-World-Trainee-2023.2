<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("Usuário não logado.<p><a href=\"loginView\">Entrar</a></p>");
}

?>