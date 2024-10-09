<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagens</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <div class="formulario">
        <div class="container">
            <h1>Nova postagem</h1>
        </div>

        <form action="salvar_postagem.php" method="POST">

            <div class="mb-2">
                <label for="title" class="form-label">Título da Notícia</label>
                <input class="form-control" id="exampleFormControlInput1" name="title" placeholder="Titulo">
            </div>
            <div class="mb-3">
                <label for="img_url" class="form-label">Imagem</label>
                <input class="form-control" id="exampleFormControlInput1" name="img_url" placeholder="Link da imagem">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Conteúdo:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
            </div>


            <!-- Botão que envia as informações preenchidas -->
            <button type="submit" class="btn btn-primary">Enviar publicação</button>
        </form>
        <a class="btn btn-primary" href="index.php">Home</a><br>
        <a class="btn btn-primary" href="postagens.php">Todas as postagens</a><br>
    </div>

</body>

</html>