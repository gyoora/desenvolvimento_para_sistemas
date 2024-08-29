<?php

    require_once "Cliente.class.php";

    $cliente = new Cliente();
    $connect = $cliente -> conexao();
    $retorno = $cliente -> buscar_clientes($connect);

    // echo "<pre>";
    // var_dump($retorno);
    // echo "</pre>";

    if($_GET) {
        echo "<br><br><h2>{$_GET['msg']}</h2><br>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body class="aling_center">
        <h1>Clientes</h1>
        <br>
        <a href="form_cliente.html">Novo cliente</a>
        <br><br>
        <table class="style_table">
            <thead>
                <tr class="style_table">
                    <th class="style_table">Nome</th>
                    <th class="style_table">CPF</th>
                    <th class="style_table">E-mail</th>
                </tr>
            </thead>
            <tbody class="style_table">
                <?php
                    foreach($retorno as $dados) {
                        //echo "{$dados['id_cliente']}<br>";
                        echo "<tr>
                                <td class='style_table'>{$dados -> nome}</td>
                                <td class='style_table'>{$dados -> cpf}</td>
                                <td class='style_table'>{$dados -> email}</td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
        <br><br>
    </body>
</html>