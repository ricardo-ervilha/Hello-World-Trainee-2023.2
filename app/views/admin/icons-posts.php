<td>
	
<button id="open-view<?=$row['id']?>" class="icon-visualizar"><img class="icones" src="../../../public/assets/icon-ver.png"></button>

<?php require('./app/views/admin/modalViewPost.php') ?>

<button id="open-edit" class="icon-editar<?=$row['id']?>"><img class="icones" src="../../../public/assets/icon-editar.png"></button>

<?php require('./app/views/admin/modal_edit_posts.php') ?>

<button id="open-delete<?=$row['id']?>" class="icon-excluir"><img class="icones" src="../../../public/assets/icon-delete.png"></button>

<?php require('./app/views/admin/modal_delete_user.php') ?>

</td>

<script src="../../../public/js/allModals.js"></script>
