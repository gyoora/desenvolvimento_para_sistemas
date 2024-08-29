<?php

    require_once "Cliente.class.php";

    $cliente = new Cliente();
    $connect = $cliente -> conexao();
    $retorno = $cliente -> buscar_clientes($connect);

    echo "<pre>";
    var_dump($retorno);
    echo "</pre>";

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Clientes</h1>
        <br>
        <a href="form_cliente.html">Novo cliente</a>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($retorno as $dados) {
                        //echo "{$dados['id_cliente']}<br>";
                        echo "<tr>
                                <td>{$dados -> nome}</td>
                                <td>{$dados -> cpf}</td>
                                <td>{$dados -> email}</td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
        <br><br>
    </body>
</html>