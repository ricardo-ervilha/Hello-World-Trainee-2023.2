<!-- Modal de post -->
<link rel="stylesheet" href="../../../public/css/modalViewPosts.css">


<div id="userModal<?=$row['id']?>" class="modal" style="display: none;">
    <div class="modal-content">
        <div class="modal-head">
            <h2>Informações do Post</h2>
        </div>
        <div class="content-body">

            <div class="inputTitulo">
                <label for="postTitleInput">
                    <h2>Título:</h2>
                </label>
                <input type="text" id="postTitleInput" class="imp" value="<?=$row['title']?>" readonly>
            </div>

            <div class="inputConteudo">
                <label for="postContentInput">
                    <h2>Conteúdo do Post:</h2>
                </label>
                <input type="text" id="postContentInput" class="imp" value="<?=$row['content']?>" readonly>
            </div>

            <div class="inputAutor">
                <label for="postAuthorInput">
                    <h2>Autor:</h2>
                </label>
                <input type="text" id="postAuthorInput" class="imp" value="<?=$row['author_post']?>" readonly>
            </div>

            <div class="inputDataHora">
                <label for="postDateTimeInput">
                    <h2>Data/Hora da Postagem:</h2>
                </label>
                <input type="text" id="postDateTimeInput" class="imp" value="<?=$row['created_at']?>" readonly>
            </div>

            <span class="close" id="closePostModalBtn">&times;</span>
        </div>
    </div>
</div>

<script src="../../../public/js/allModals.js"></script>