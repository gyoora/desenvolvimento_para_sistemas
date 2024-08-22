<?php

    require_once "Clientes.class.php";

    $cliente = New Cliente();
    $connect = $cliente -> conexao();
    $retorno = $cliente -> buscar_clientes($connect);

    echo "<pre>";
    var_dump($retorno);
    echo "</pre>";

?>