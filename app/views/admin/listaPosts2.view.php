<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">
		<title>Posts - Hello World</title>

		<link rel="stylesheet" href="../../../public/css/listaDePostAdmin.css">
        
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

					<?php require('./app/views/admin/modalNewPost.php') ?>
			</div>

			<div class="div-tabela">

				<table class="tabela">
					<thead>
						<tr class="cabeçalho">
                        <th>Título</th>
                        <th>Conteúdo</th>
                        <th>Usuário</th>
                        <th>Data de Modificação</th>
                        <th>Ações</th>
						</tr>
					</thead>

			<?php 
			
			$pdo = new PDO('mysql:host=localhost;dbname=helloworld', 'root', '');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");
		
			try {
				$pdoStatement = $pdo->query("SELECT * FROM posts");
		
				while($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)){
		
					echo "<tbody> <tr class='linha'> <td>{$row['title']}</td> <td>{$row['content']}</td> <td>{$row['author_post']}</td> <td>{$row['updated_at']}</td>"; 
					
					require ('./app/views/admin/icons-posts.php');

					echo "</tr>";
				}
		
			} catch(Exception $e) {
				echo "Erro: {$e->getMessage()}";
			}
			
			?>

		</tbody>
		</table>

			</div>
		
		</div>

		<script src="../../../public/js/allModals.js"></script>
	</body>
</html>