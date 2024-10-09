<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"]; //md5 para ocultar a senha no banco
        $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO users (name, email, password, data_nasc) VALUES (
        '{$name}', '{$email}', '{$password}', '{$data_nasc}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastro realizado com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possivel cadastrar o usuario!');</script>";
            print "<script>location.href='?page=novo';</script>";
        }
        break;

    case 'editar':
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"]; //md5 para ocultar a senha no banco
        $data_nasc = $_POST["data_nasc"];

        $sql = "UPDATE users SET name='{$name}',
                                email='{$email}',
                                password='{$password}', 
                                data_nasc='{$data_nasc}' 
                                WHERE 
                                id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Alteração realizada com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possivel alterar o usuario!');</script>";
            print "<script>location.href='?page=novo';</script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM users WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Excluído com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possivel excluir o usuario!');</script>";
            print "<script>location.href='?page=novo';</script>";
        }

        break;
}