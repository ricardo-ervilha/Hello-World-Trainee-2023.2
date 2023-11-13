<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">
		<title>Usuários - Hello World</title>

		<link rel="stylesheet" href="../../../public/css/listaUsers.css">
        
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	</head>


	<body>
		<div class="container">

			<h1>Lista de Usuários</h1>

			<div class="new-user">
					<button id="add-user">
						<div class="button-new user"><img src="../../../public/assets/icon-add.png"></div>
						<div class="text-new-user"><h2>Novo Usuário</h2></div>
					</button>

					<?php require('./app/views/admin/modalNewUser.html') ?>
			</div>

			<div class="div-tabela">

				<table class="tabela">
					<thead>
						<tr class="cabeçalho">
							<th class="id">ID</th>
							<th class="nome">Nome</th>
							<th class="email">E-mail</th>
							<th class="acoes">Ações</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>1</td>
							<td>Usuário 1</td>
							<td>usuario1@example.com</td>
							<td>
								<button id="openUserModalBtn" class="icon-visualizar"><img src="../../../public/assets/icon-ver.png"></button>

								<?php require('./app/views/admin/modalViewUser.html') ?>

								<button id="open-modal" class="icon-editar"><img src="../../../public/assets/icon-editar.png"></button>

								<?php require('./app/views/admin/modal_edit_user.html') ?>

								<button onclick="document.getElementById('id01').style.display='block'" class="icon-excluir"><img src="../../../public/assets/icon-delete.png"></button>

								<?php require('./app/views/admin/modal_delete_user.html') ?>
							</td>
						</tr>
						
					
						<tr>
							<td>2</td>
							<td>Usuário 2</td>
							<td>usuario2@example.com</td>
							<td>
								<button id="openUserModalBtn" class="icon-visualizar"><img src="../../../public/assets/icon-ver.png"></button>
								<button class="icon-editar"><img src="../../../public/assets/icon-editar.png"></button>
								<button class="icon-excluir"><img src="../../../public/assets/icon-delete.png"></button>
							</td>
							
						</tr>

						<tr>
							<td>3</td>
							<td>Usuário 3</td>
							<td>usuario3@example.com</td>
							<td>
								<button class="icon-visualizar"><img src="../../../public/assets/icon-ver.png"></button>
								<button class="icon-editar"><img src="../../../public/assets/icon-editar.png"></button>
								<button class="icon-excluir"><img src="../../../public/assets/icon-delete.png"></button>
							</td>
						</tr>
				
						<tr>
							<td>4</td>
							<td>Usuário 4</td>
							<td>usuario4@example.com</td>
							<td>
								<button class="icon-visualizar"><img src="../../../public/assets/icon-ver.png"></button>
								<button class="icon-editar"><img src="../../../public/assets/icon-editar.png"></button>
								<button class="icon-excluir"><img src="../../../public/assets/icon-delete.png"></button>
							</td>
						</tr>
					</tbody>
				</table>

			</div>
		
		</div>

		<script src="../../../public/js/allModals.js"></script>
	</body>
</html>