<div class="modal" id="modal-edit<?=$function->id?>" style="display: none">
    <div class="modal-newpost-content">
        <form action="posts/create" method="POST" enctype="multipart/form-data">
        <span class="close">&times;</span>
        <div class="modal-head">
            <h1>Editar Post</h1>
        </div>
        <div class="newpost-content-body">
            <div class="div-title">
                <h2>Título:</h2>       
                <input class="campo-titulo" value="<?=$function->title?>" name="title">
            </div>

            <div class="div-conteudo">
                    <h2>Conteúdo:</h2>
                    <textarea name="content"><?=$function->content?></textarea>
            </div>

            <div class="div-image">
                    <h2>Imagem:</h2>
                    <label>Enviar
                        <input class = "image" type="file" name="image"> 
                    </label>
            </div>

            <div  class="div-postar">
                <button>Editar</button>
            </div> 
        </div>
        </form>
    </div>
</div>    
<link rel="stylesheet" href="../../../public/css/modals/modalNewPost.css">
<script src="../../../public/js/allModals.js"></script>

