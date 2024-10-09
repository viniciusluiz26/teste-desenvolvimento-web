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
    <div class="container">
        <h1>Todas as postagens</h1>
        <a class="btn btn-primary" href="index.php">Home</a><br>
    </div>
    <?php
    // Incluir o aquivo conexão com o banco de dados
    include 'config.php';

    $sql = "SELECT * FROM posts ORDER BY id DESC";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $title = $row['title'];
            $description = $row['description'];
            $created_at = $row['created_at'];
            $img_url = $row['img_url'];


            echo "<div class='card mx-auto p-2' style='width: 50rem;'>
                  <div class='card-body'>
                  <h5 class='card-title'>Nova postagem!</h5>
                  <p class='card-text text-center'>Titulo: $title</p>
                  <p class='card-text text-center'>Descrição: $description</p>
                  <p class='card-text text-center'>Data: $created_at</p>
                  <p class='card-text text-center'>URL da imagem: $img_url</p>
                  </div>
                  </div>";
            echo "<hr>";





        }
    } else {
        echo "Nenhuma postagem encontrada.";
    }

    $conn->close();

    ?>
</body>

</html>