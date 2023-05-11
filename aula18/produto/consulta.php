<?php
require_once "../conexao.php";

if (isset($_GET["id"])) {
	$id = $_GET["id"];

	$sql = "SELECT * FROM produto WHERE idproduto = ?";
	$comando = $conexao->prepare($sql);
	$comando->bind_param("i", $id);

	if ($comando->execute()) {
		$resultado = $comando->get_result();
		$produto = $resultado->fetch_assoc();

		if ($produto) {
			echo "<h1>Produto Encontrado</h1>";
			echo "<p>ID: " . $produto["idproduto"] . "</p>";
			echo "<p>Nome: " . $produto["nome"] . "</p>";
			echo "<p>Descrição: " . $produto["descricao"] . "</p>";
			echo "<p>Preço: " . $produto["preco"] . "</p>";
		} else {
			echo "<h1>Produto não encontrado</h1>";
		}
	} else {
		echo "Erro na consulta SQL: " . $conexao->error;
	}

	$conexao->close();
}
?>
