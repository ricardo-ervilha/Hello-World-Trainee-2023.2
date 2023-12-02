<td>
	
<button id="openUserModalBtn<?=$function->id?>" class="icon-visualizar"><img class="icones" src="../../../public/assets/icon-ver.png"></button>

<?php require('./app/views/admin/modals/modalViewPost.php') ?>

<button id="open-modal<?=$function->id?>" class="icon-editar"><img class="icones" src="../../../public/assets/icon-editar.png"></button>

<?php require('./app/views/admin/modals/modal_edit_post.php') ?>

<button id="delModal<?=$function->id?>" class="icon-excluir"><img class="icones" src="../../../public/assets/icon-delete.png"></button>

<?php require('./app/views/admin/modals/modal_delete_post.php') ?>

</td>