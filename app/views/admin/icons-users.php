<td>
	
<button id="openUserModalBtn<?=$row['id']?>" class="icon-visualizar"><img class="icones" src="../../../public/assets/icon-ver.png"></button>

<?php require('./app/views/admin/modalViewUser.php') ?>

<button id="open-modal<?=$row['id']?>" class="icon-editar"><img class="icones" src="../../../public/assets/icon-editar.png"></button>

<?php require('./app/views/admin/modal_edit_user.php') ?>

<button id="delModal<?=$row['id']?>" class="icon-excluir"><img class="icones" src="../../../public/assets/icon-delete.png"></button>

<?php require('./app/views/admin/modal_delete_user.php') ?>

</td>
