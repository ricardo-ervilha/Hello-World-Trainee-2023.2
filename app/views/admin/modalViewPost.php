<!-- Modal de post -->

<div id="modalView<?=$row['id']?>" class="modal" style="display: none;">
    <div class="modal-content">
        <div class="modal-head">
            <h2>Informações do Post</h2>
        </div>
        <div class="content-body">

            <div class="inputTitulo">
                <label for="postTitleInput">
                    <h2>Título:</h2>
                </label>
                <input type="text" id="postTitleInput" class="imp" value="<?=$row['title']?>" readonly disabled>
            </div>

            <div class="inputConteudo">
                <label for="postContentInput">
                    <h2>Conteúdo do Post:</h2>
                </label>
                <input type="text" id="postContentInput" class="imp" value="<?=$row['content']?>" readonly disabled>
            </div>

            <div class="inputAutor">
                <label for="postAuthorInput">
                    <h2>Autor:</h2>
                </label>
                <input type="text" id="postAuthorInput" class="imp" value="<?=$row['author_post']?>" readonly disabled>
            </div>

            <div class="inputDataHora">
                <label for="postDateTimeInput">
                    <h2>Data/Hora da Postagem:</h2>
                </label>
                <input type="text" id="postDateTimeInput" class="imp" value="<?=$row['created_at']?>" readonly disabled>
            </div>

            <div class="inputImage">
                <label for="postImageInput">
                    <h2>Imagem:</h2>
                </label>
                <img id="postImageInput" class="img-fluid" src="<?=$row['image']?>">
            </div>

            <span class="close" id="close-view">&times;</span>
        </div>
    </div>
</div>

<link rel="stylesheet" href="../../../public/css/modalView.css">
<script src="../../../public/js/allModals.js"></script>
