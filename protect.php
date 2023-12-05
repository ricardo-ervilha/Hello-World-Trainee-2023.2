<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    header("Location: /loginView");
    $_SESSION['erro_rota_admin'] = "Faça Login";
    
}

?>