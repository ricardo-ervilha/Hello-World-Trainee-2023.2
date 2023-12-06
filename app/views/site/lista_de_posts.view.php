<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Posts</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/landingPage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/lista_de_posts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h3>Posts Recentes</h3>
    <h1>Hello World</h1>
    <!-- Barra de pesquisa-->
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="simple-results.html">
                <div class="input-group">
                    <input type="search" class="form-control form-control-lg" placeholder="Busque por Posts">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-default" style="background-color: #e3e3e3; border-radius: 0">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="flex-container">
        <?php foreach ($posts as $function) : ?>
            <div>
                <a href="/postIndividual?id=<?= $function->id ?>">
                    <img height="50%" src="<?= $function->image ?>">
                    <div class="text-area">
                        <h2><?= $function->title ?></h2>
                        <p><?= $function->content ?></p>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>