<?php
require_once "../conexao.php";

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$foto = "semfoto.png";

$sql = "INSERT INTO `produto` (`nome`, `descricao`, `preco`, `foto`) VALUES (?, ?, ?, ?)"; // define a instrução SQL a ser executada
echo $sql;


$comando = $conexao->prepare($sql); // prepara a instrução SQL e armazena na variável $comando
$comando->bind_param("ssds", $nome, $descricao, $preco, $foto);
$comando->execute(); 

?>
