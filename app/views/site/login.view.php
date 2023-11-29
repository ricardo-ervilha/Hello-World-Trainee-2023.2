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
        <form action="/login" method="POST">
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
