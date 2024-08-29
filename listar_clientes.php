<?php

    require_once "Cliente.class.php";

    $cliente = new Cliente();
    $connect = $cliente -> conexao();
    $retorno = $cliente -> buscar_clientes($connect);

    echo "<pre>";
    var_dump($retorno);
    echo "</pre>";

?>