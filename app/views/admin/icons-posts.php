<td>
	
<button id="openUserModalBtn<?=$function->id?>" class="icon-visualizar"><img class="icones" src="../../../public/assets/icon-ver.png"></button>

<?php require('./app/views/admin/modalViewPost.php') ?>

<button id="open-modal<?=$function->id?>" class="icon-editar"><img class="icones" src="../../../public/assets/icon-editar.png"></button>

<?php require('./app/views/admin/modal_edit_posts.php') ?>

<button id="delModal<?=$function->id?>" class="icon-excluir"><img class="icones" src="../../../public/assets/icon-delete.png"></button>

<?php require('./app/views/admin/modal_delete_post.php') ?>

</td>
