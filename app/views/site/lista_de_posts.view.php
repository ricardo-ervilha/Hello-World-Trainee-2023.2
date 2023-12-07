<?php
    // Suponha que $posts seja um array com os dados dos posts

    // Lógica de pesquisa
    if (isset($_GET['busca'])) {
        $termoPesquisa = $_GET['busca'];
        $postsFiltrados = [];

        foreach ($posts as $function) {
            // Verifica se o termo de pesquisa está presente no título ou no conteúdo do post
            if (stripos($function->title, $termoPesquisa) !== false || stripos($function->content, $termoPesquisa) !== false) {
                $postsFiltrados[] = $function;
            }
        }

        // Atualiza a variável $posts com os resultados filtrados
        $posts = $postsFiltrados;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Posts</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/landingPage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/lista_de_posts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h4>Posts Recentes</h4>
    <h1>Hello World</h1>
    <!-- Barra de pesquisa-->
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="">
                <div class="input-group">
                    <input type="search" class="form-control form-control-lg" placeholder="Busque por Posts" name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-default" style="background-color: #e3e3e3; border-radius: 0">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="flex-container">
        <?php foreach ($posts as $function) : ?>
            <div>
                <a href="/postIndividual?id=<?= $function->id ?>">
                    <img height="50%" src="<?= $function->image ?>">
                    <div class="text-area">
                        <h2><?= $function->title ?></h2>
                        <p><?= $function->content ?></p>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>

        
    </div>
    <div class="pagination">
        <?php require './app/views/includes/pagination.php'?>
    </div>
</body>

</html>
