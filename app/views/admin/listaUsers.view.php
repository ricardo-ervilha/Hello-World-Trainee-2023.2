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

			<h1 class="h1-list-users">Lista de Usuários</h1>

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

					<?php foreach ($users as $read) : ?>

		
					<tbody> <tr> <td><?=$read->id?></td> <td><?=$read->name?></td> <td><?=$read->email?></td>
					
					<?php require ('./app/views/admin/icons-users.php'); ?>

					</tr>

					<?php endforeach; ?>

		</tbody>
		</table>

			</div>
		
		</div>

		<script src="../../../public/js/allModals.js"></script>
	</body>
</html>