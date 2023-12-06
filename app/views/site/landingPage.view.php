<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/landingPage.css">
</head>

<body>

    <?php require('./app/views/site/navbar.html')?>

    <div class="conteudo">

        <div class="header">
            <div class="content">

                <h1>Mergulhe <span style="color: #5cacee; font-weight: 500;">profundamente</span> no ecossistema
                    tecnológico.
                    <img src="../../../public/assets/logo_transp.png" class="logo-h1" alt="Imagem da logo transparente">
                </h1>
                <img class="img-header" src="../../../public/assets/img-capa.png" alt="Imagem de um homem usando um notebook" width="40%">

            </div>
        </div>

        <div class="container">
            <div class="bloco">

                <div class="quadro">

                    <div class="topo-quadro">
                        <h3>Últimas postagens</h3>
                    </div>

                    <div class="fundo-branco">
                        <div class="post-left">

                            <?php foreach($posts as $function) : ?>
                                <!-- Adicione um link para a página individual para cada post -->
                                <a href="/postIndividual?id=<?=$function->id?>" class="post-left-1">
                                    <img src="<?=$function->image?>" alt="Imagem do post">
                                    <p><?=$function->title?></p>
                                </a>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('./app/views/site/footer.html')?>

</body>
</html>
