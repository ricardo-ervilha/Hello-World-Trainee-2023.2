<?php
if(isset($_FILES['image'])) {
    $arquivo = $_FILES['image'];

    if($arquivo['error'])
        die("Falha ao enviar arquivo");
    $pasta = "../../../public/assets/";
    $nomeDoArquivo = $arquivo['name'];

    $deu_certo = move_uploaded_file($arquivo["temp_name"], $pasta);
}
?>

<div class="modal" id="modal">
    <div class="modal-content">
        <form action="posts/create" method="POST">
        <span class="close">&times</span>
        <div class="modal-head">
            <h1>Novo Post</h1>
        </div>
        <div class="content-body">
            <div class="div-title">
                <h2>Título:</h2>       
                <input class="campo-titulo" placeholder="Título do seu novo post" name="title">
            </div>

            <div class="div-conteudo">
                    <h2>Conteúdo:</h2>
                    <textarea name="content">Digite aqui o seu post</textarea>
            </div>

            <div class="div-image">
                <form enctype="multipart/form-data" action="" method='POST'>
                <h2>Imagem:</h2>
                <input type="file" name="image">
                </form>
            </div>

            <div class="div-date">
                <h2>Data de Criação:</h2>
                <input type="date" name="created_at">
            </div>

            <div  class="div-postar">
                <button>Postar</button>
            </div> 
        </div>
        </form>
    </div>
</div>    
<script src="../../../public/js/allModals.js"></script>
<link rel="stylesheet" href="../../../public/css/modalNewPost.css">

