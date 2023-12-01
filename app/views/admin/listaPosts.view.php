<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Posts - Hello World</title>
		<link rel="stylesheet" href="../../../public/css/listaUsers.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<h1 class="h1-list-users">Lista de Posts</h1>
			<div class="new-user">
					<button id="add-user">
						<div class="button-new user"><img src="../../../public/assets/novoPost.png"></div>
						<div class="text-new-user"><h2>Novo Post</h2></div>
					</button>

					<?php require ('./app/views/admin/modals/modalNewPost.php'); ?>

			</div>
			<div class="div-tabela">
				<table class="tabela">
					<thead>
						<tr class="cabeçalho">	
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Data de Modificação</th>
                        <th>Ações</th>
						</tr>
					</thead>

			<?php foreach($posts as $function) : ?>
			
			<tbody> <tr class='linha'> <td><?=$function->title?></td> <td><?=$function->author_post?></td> <td><?=$function->updated_at?></td>
					
			<?php require ('./app/views/admin/icons/icons-posts.php'); ?>

			</tr>
			
			<?php endforeach; ?>

			</tbody>
			</table>
		</div>
		</div>
		<script src="../../../public/js/allModals.js"></script>
	</body>
</html>