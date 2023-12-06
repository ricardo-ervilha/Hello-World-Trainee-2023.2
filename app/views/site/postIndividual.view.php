<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Individual</title>
    <link rel="stylesheet" href=../../../public/css/postIndividual.css>
    <script src="../../../public/js/postIndividual.js"></script>
</head>
<body>

    <div class="conteudo">
        <!--Imagens-->
        <img src="../../../public/assets//Ellipse1.png" class="overlay-image">
        <img src="../../../public/assets//marcaDagua.png" class="marcaDagua">
        
        <div class="card-container grid-template-columns">
            
            <div class="central">
                <div class="title">
                    <!-- Use o título real do post que é passado para a view -->
                    <h1 class="card-title"><?= $post['title'] ?></h1>
                </div>
                
                <div class="main-content">
                    <!-- Exibe o conteúdo antes da imagem -->
                    <p><?= $contentBeforeImage ?></p>

                    <!-- Use o caminho real da imagem do post que é passado para a view -->
                    <img src="<?= $post['image'] ?>" class="icone">

                    <!-- Exibe o conteúdo após a imagem -->
                    <p><?= $contentAfterImage ?></p>
                    
                </div>

                <!-- Botão para voltar à página anterior -->
                <div class="voltar">
                    <button id="voltar" onclick="history.back();">
                        <img src="../../../public/assets/icon-user-white (2).png">
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
