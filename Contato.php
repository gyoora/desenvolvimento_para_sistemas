<?php

	 if($_GET){

		require_once "Cliente.class.php";
		$obj = new Cliente(0, $_GET["nome"], $_GET["cpf"], $_GET["email"]);

		//$obj->nome=$_GET["nome"];
		//$obj->sobrenome=$_GET["sobrenome"];
		//$obj->cpf=$_GET["cpf"];
		
		//echo "<pre>";
		//var_dump($obj);
		//echo"</pre>";

		$connect = $obj -> conexao();

		$msg = $obj -> inserir($connect);

		header("location:listar_clientes.php?msg=$msg");
		die();
		//echo "<h1>O nome é " . $_GET["nome"] . "<h1><br>";

		//echo "O sobrenome é {$_GET["sobrenome"]}<br>";
		} 

	else {
		header ("location:form_cliente.html");
		die();
	}

?>