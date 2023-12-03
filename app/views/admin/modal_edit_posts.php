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
        <form action="update_post" method="POST" enctype="multipart/form-data">
        <input hidden value='<?=$row['id']?>' name="id">        
            <div class="modal-content">
                
                <div class="modal-head">
                    <div class="close-container">
                        <span class="closeEdit">&times;</span>
                    </div>
                    <div class="title-container">
                        <h1>Edição de Posts</h1>
                    </div>
                </div>

                <div class="content-bodyy">
                    <div class="titulo">
                        <h2>Título</h2>
                        <input class="input-edit" type="text" name="title">
                    </div>
                    
                    <div class="texto">
                        <h2>Conteúdo</h2>
                        <textarea class="input-edit" name="content"></textarea>
                    </div>

                    <div class="imagem">
                        <h2>Imagem</h2>
                        <button><input class="input-edit" type="file" placeholder="Enviar" name="image"></button>
                    </div>

                    <button class="save">Salvar</button>
                </div>
            </div>
        </form>    
        </div>
        <script src="../../../public/js/allModals.js"></script>
</body>
</html>