<?php

// Conexão com o banco de dados
include 'config.php';

// Vamos obter os valores do título e do conteúdo enviados pelo formulário

$title = $_POST['title'];
$description = $_POST['description'];
$img_url = $_POST['img_url'];

$stmt = $conn->prepare("INSERT INTO posts (title, description, img_url) VALUE (?, ?, ?)");
$stmt->bind_param("sss",$title, $description, $img_url);

if ($stmt->execute()) {
    print "<script>alert('Cadastro realizado com sucesso!');</script>";
    print "<script>location.href='postagens.php';</script>";
} else {
    print "<script>alert('Não foi possivel cadastrar o usuario!');</script>";
    print "<script>location.href='?page=novo';</script>"; $stmt->error;
}

// Fechando a declaração e a conexão com o banco de dados
$smtp->clse();