<!DOCTYPE html>
<html lang="pt-br">

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Posts</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/landingPage.css">
    <link rel="stylesheet" href="../../../public/css/lista_de_posts.css">
</head>

<body>
    <h3>Posts Recentes</h3>
    <h1>Hello World</h1>

    <div class="flex-container">

        <?php foreach($posts as $function) : ?>

        <div>
            <img height="50%" src="<?=$function->image?>">
            <div class="text-area">
                <h2><?=$function->title?></h2>
                <p> <?=$function->content?></p>
            </div>
        </div>
       
        <?php endforeach; ?>

        
    </div>
    <?php require './app/views/includes/pagination.php'?>
</body>

</html>