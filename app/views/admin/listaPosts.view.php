<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/listaDePostAdmin.css">
    <script src="../../../public/js/listaDePostAdmin.js"></script>
    <title>Lista de Post</title>
</head>
<body>
    <div class="tabela-main" style="display: inline-table;">
        <h1>Lista de Posts</h1>

        <!-- Botão para criar um novo post -->
        <div class="new-post">
            <button id="add-post">
                <img src="../../../public/assets/novoPost.png">
                <h2>Novo Post</h2>
            </button>
    </div>
    
        <!-- Tabela de posts -->
        <table id="postTable">
            <thead>
            <tr>
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
		
					echo "<tbody> <tr> <td>{$row['title']}</td> <td>{$row['content']}</td> <td>{$row['author_post']}</td> <td>{$row['updated_at']}</td>"; 
					echo "</tr>";
				}
		
			} catch(Exception $e) {
				echo "Erro: {$e->getMessage()}";
			}
            
            ?>

        </tbody>
        </table>
    </div>
</body>
</html>
