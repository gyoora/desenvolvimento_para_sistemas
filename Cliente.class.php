<?php

	class Cliente 
	{	
		//atributos
		public function __construct(private int $id_cliente = 0, private string $nome = "", private string $cpf = "", private string $email = ""){}

		//métodos
		public function inserir($conexao)
		{
			//echo "estou no inserir";
			$sql = "INSERT INTO clientes (id_cliente, nome, cpf, email) VALUES (?, ?, ?, ?)";
			// preparamos a frase sql evitando injeção de sql
			$stm = $conexao->prepare($sql);
			// substituindo os pontos de interrogação
			$stm->bindValue(1, $this -> id_cliente);
			$stm->bindValue(2, $this -> nome);
			$stm->bindValue(3, $this -> cpf);
			$stm->bindValue(4, $this -> email);

			$stm->execute();
			// retornar uma mensagem
			return "Cliente inserido com sucesso";
		}

		public function conexao(){
			$parametros = "mysql:host=localhost;dbname=primeiro_acesso;charset=utf8mb4";

			$conexao = New PDO($parametros, "root", "");

			return $conexao;
		}		

		public function buscar_clientes($conexao)
		{
			$sql = "SELECT * FROM clientes";
			$stm = $conexao -> prepare($sql);
			$stm -> execute();
			return $stm -> fetchAll(PDO::FETCH_OBJ);
		}
		
	} //fim da classe

?>

