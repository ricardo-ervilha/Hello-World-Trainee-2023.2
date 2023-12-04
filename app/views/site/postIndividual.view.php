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
    <form action="/postIndividualCreate" method="get">
    <input type="hidden" value="<?= $function->id ?>" name="id">
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
                    <!-- Use o conteúdo real do post que é passado para a view -->
                    <p><?= $post['content'] ?></p>

                    <!-- Use o caminho real da imagem do post que é passado para a view -->
                    <img src="<?= $post['image'] ?>" class="icone">

                    <!--  <p>Uma das características marcantes do JavaScript é sua capacidade de manipular o DOM (Document Object Model), possibilitando a interação direta com os elementos de uma página web. Isso significa que, por meio de JavaScript, é possível alterar o conteúdo, estilo e estrutura de uma página de forma dinâmica, respondendo a eventos como cliques do usuário.

                    Além disso, o JavaScript suporta programação assíncrona, o que é essencial para operações que envolvem requisições a servidores, garantindo uma experiência de usuário mais fluída e responsiva. Bibliotecas populares, como o jQuery, 
                    ao oferecer abstrações e funcionalidades que facilitam tarefas comuns. Com o surgimento do Node.js, JavaScript expandiu suas fronteiras, possibilitando o desenvolvimento de aplicações do lado do servidor. Isso permitiu aos desenvolvedores utilizar a mesma linguagem em ambientes cliente e servidor, simplificando o desenvolvimento e promovendo a reutilização de código.</p>
                    -->
                    
                </div>

                <!-- Botão para voltar-->
                <div class="voltar">
                    <button id="voltar">
                        <img src="../../../public/assets/icon-user-white (2).png">
                    </button>
                </div>
            </div>
        </div>
        </form>
    </div>

</body>
</html>
