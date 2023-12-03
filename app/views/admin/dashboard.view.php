<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/dashboard.css">
    <title>Dashboard</title>

    <script>

        function mostrarLista() {

            var x = document.getElementById("lista");

            if (x.className === "lista-hidden") {
                x.className = "show";
            } else {
                x.className = "lista-hidden";
            }
        }

    </script>
</head>

<body>

<div class="alert-success" role="alert">
  Login realizado com sucesso
</div>
        <div class="topo">
            

            <h1>Bem-vindo de volta, <?php echo $_SESSION['nome'];?>!</h1>
            <div class="logout">
                <p id="seta" onclick="mostrarLista()"> &nabla;</p>
                <button onclick="mostrarLista()"><img src="../../../public/assets/foto-usuario.png"></button>
                <ul id="lista" class="lista-hidden">
                    <li><a>Trocar usuário</a></li>
                    <li><a href="/logout">Sair</a></li>
                </ul>
            </div>
        </div>

        <div class="bloco-cards">

            <div class="cards-superior">

                <button class="card"> <img src="../../../public/assets/info-usuarios.png">
                    <p><span style="font-size: 28px;">50</span> <br> Users</p>
                </button>

                <button class="card"> <img src="../../../public/assets/info-publi.png">
                    <p><span style="font-size: 28px;">200</span> <br> Posts </p>
                </button>

                <button class="card"> <img src="../../../public/assets/info-avaliacoes.png">
                    <p><span style="font-size: 28px;">100</span> <br> Avaliações </p>
                </button>

            </div>

            <div class="cards-inferior">
                <button class="card">
                    <img src="../../../public/assets/editar-usuario.png">
                    <p>Gerenciar <br>usuários</p>
                </button>

                <button class="card"> <img src="../../../public/assets/editar-post.png">
                    <p><a href="/listaDePosts">>Gerenciar<br> Posts </a></p>
                </button>
            </div>
        </div>
</body>

</html>