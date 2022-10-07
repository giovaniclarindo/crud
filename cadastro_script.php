<?php

    include "conexao.php";

    if(mysqli_connect_error()) {

        echo "Problemas para conectar no banco. Verificar dados!";
        die();

        }

        $sql = "INSERT INTO pessoas (nome, email, telefone, endereco)" . "VALUES ('{$_POST["nome"]}', '{$_POST["email"]}', '{$_POST["telefone"]}', '{$_POST["endereco"]}')";

        $conexao->query($sql);
        $conexao->close();

        echo "Cadastrado com sucesso!";

        header("refresh:3;url=home.html");
