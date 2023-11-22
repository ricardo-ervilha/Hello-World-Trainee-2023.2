<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição posts</title>
    <link rel="stylesheet" href="../../../public/css/edit_modal.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
        <div class="modal" id="modal-edit<?=$row['id']?>" style="display: none;">
            <div class="modal-content">
                
                <div class="modal-head">
                    <div class="close-container">
                        <span class="closeEdit">&times;</span>
                    </div>
                    <div class="title-container">
                        <h1>Edição de Posts</h1>
                    </div>
                </div>

                <div class="content-body">
                    <div class="titulo">
                        <h2>Título</h2>
                        <input class="input-edit" type="text">
                    </div>
                    
                    <div class="texto">
                        <h2>Conteúdo</h2>
                        <textarea class="input-edit"></textarea>
                    </div>

                    <div class="imagem">
                        <h2>Imagem</h2>
                        <input class="input-edit" type="image" placeholder="Enviar">
                    </div>

                    <div class="data">
                        <h2>Data de criação</h2>
                        <input class="input-edit" type="date">
                    </div>
                      
                    <div class="autor">
                        <h2>Autor</h2>
                        <input class="input-edit" type="text">
                    </div>

                    <button class="save">Salvar</button>
                </div>
            </div>
        </div>
        <script src="../../../public/js/allModals.js"></script>
</body>
</html>