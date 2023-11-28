<!-- Modal de post -->

<div id="userModal<?=$function->id?>" class="modal" style="display: none;">
    <div class="modal-content">
        <div class="modal-head">
            <h2>Informações do Post</h2>
        </div>
        <div class="content-body">

            <div class="inputTitulo">
                <label for="postTitleInput">
                    <h2>Título:</h2>
                </label>
                <input type="text" id="postTitleInput" class="imp" value="<?=$function->title?>" readonly disabled>
            </div>

            <div class="inputConteudo">
                <label for="postContentInput">
                    <h2>Conteúdo do Post:</h2>
                </label>
                <input type="text" id="postContentInput" class="imp" value="<?=$function->content?>" readonly disabled>
            </div>

            <div class="inputAutor">
                <label for="postAuthorInput">
                    <h2>Autor:</h2>
                </label>
                <input type="text" id="postAuthorInput" class="imp" value="<?=$function->author_post?>" readonly disabled>
            </div>

            <div class="inputDataHora">
                <label for="postDateTimeInput">
                    <h2>Data/Hora da Postagem:</h2>
                </label>
                <input type="text" id="postDateTimeInput" class="imp" value="<?=$function->created_at?>" readonly disabled>
            </div>

            <div class="inputImage">
                <label for="postImageInput">
                    <h2>Imagem:</h2>
                </label>
                <img id="postImageInput" class="img-fluid" src="<?=$function->image?>">
            </div>

            <span class="close" id="closePostModalBtn">&times;</span>
        </div>
    </div>
</div>

<script src="../../../public/js/allModals.js"></script>
<link rel="stylesheet" href="../../../public/css/modalView.css">
