<head>
    <link rel="stylesheet" href="../../../public/css/modal_delete.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kelly+Slab&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
<div id="id01<?=$row['id']?>" class="modal-d" style="display: none;">
    <form class="modal-d-content" action="/action_page.php">
        <div class="container-d">
            <span class="close-delete"
                title="Close Modal">&times;</span>
            <img src="../../../public/assets/Delete-Bin-Trash.png">
            <h2 class="h2-d">Tem certeza?</h2>

            <div class="clearfix">
                <button type="button"class="cancelbtn">Cancelar</button>
                <button type="submit" class="deletebtn">Excluir</button>
            </div>
        </div>
    </form>
</div>
</body>