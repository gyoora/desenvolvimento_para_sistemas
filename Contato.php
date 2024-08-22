<?php
 if($_GET){
	 require_once "Cliente.class.php";
	 $obj =new Cliente();
	 $obj->nome=$_GET["nome"];
	 $obj->sobrenome=$_GET["sobrenome"];
	 $obj->cpf=$_GET["cpf"];
	 
	 $obj->inserir();
	 
	 echo "<pre>";
	 var_dump($obj);
	 echo"</pre>";



	//echo "<h1>O nome é " . $_GET["nome"] . "<h1><br>";

	 //echo "O sobrenome é {$_GET["sobrenome"]}<br>";
} 
else {
	header ("location:index.html");
}
?>