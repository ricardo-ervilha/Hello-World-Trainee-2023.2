<?php
include ('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
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

<div class="unificacao">
        
    <div>
        <?php require('./app/views/admin/sidebar_admin.html')?>
    </div>

        <div class="dashboard">

            <div class="alert alert-success" role="alert"  id='msg_login'>
                <?php if(isset($_SESSION['login_success'])): ?> 
                    <p><?= $_SESSION['login_success']?></p>
                    <?php unset($_SESSION['login_success']) ?>
                <?php endif ?> 
            </div>

                <div class="topo">
                    <h1>Bem-vindo(a) de volta, <?php echo $_SESSION['nome'];?>!</h1>
                    <div class="logout-dashboard">
                        <p id="seta" onclick="mostrarLista()"> &nabla;</p>
                        <button onclick="mostrarLista()"><img src="../../../public/assets/foto-usuario.png"></button>
                        <ul id="lista" class="lista-hidden">

                            <form action="logout_trocar_user">
                                <button>Trocar usuário</button>
                            </form>

                            <form action="logout_sair">
                                <button>Sair</button>
                            </form>

                        </ul>                
                    </div>
                </div>

                <div class="bloco-cards">

                    <div class="cards-superior">
                        
                        <button class="card"> <img src="../../../public/assets/info-usuarios.png">
                            <p><span style="font-size: 28px;"><?php echo $usersCount; ?></span> <br> Users</p>
                        </button>

                        <button class="card"> <img src="../../../public/assets/info-publi.png">
                            <p><span style="font-size: 28px;"><?php echo $postsCount; ?></span> <br> Posts </p>
                        </button>

                    </div>

                    <div class="cards-inferior">
                        <a href="./listaDeUsuarios">
                        <button class="card">
                            <img src="../../../public/assets/editar-usuario.png">
                            <p>Gerenciar <br>usuários</p>
                        </button>
                        </a>

                        <a href="./listaDePosts">
                        <button class="card"> <img src="../../../public/assets/editar-post.png">
                            <p>Gerenciar<br> Posts </p>
                        </button>
                        </a>
                    </div>
                </div>
        </div>
</div>

<script> 
    setTimeout(function () {
      document.getElementById("msg_login").style.display = "none";
    }, 5000);
    function hide(){
    document.getElementById("msg_login").style.display = "none";
    }
</script> 

</body>

</html>