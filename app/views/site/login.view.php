<?php
include('connection.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>

<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8">
		<title>Login - Hello World</title>
		<link rel="stylesheet" href="../../../public/css/login.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	</head>

<body>

    <div class="container">
    

    <div class="tela-login" >
        <form action="inicio" method="POST">
            <div class=logo>
                <img src="../../../public/assets/logo_hello_world.png" alt="Logo Hello World">
            </div>

            <div class="text-login">
                <h1 >Login</h1>
            </div>

            <div class="campo-email">
                <img src="../../../public/assets/icon-user-white (2).png" alt="Ícone de login">
                <input type="text" name="email">
            </div>

            <div class="campo-senha">
                <img src="../../../public/assets/icon-key-white.png" alt="Ícone de senha">
                <input type="password" name="password">
            </div>
            
            <div class="button-entrar">
                <button type="submit" >Entrar</a></button>
        </div>
        </form>
  
    </div>
    




</body>
</html>
