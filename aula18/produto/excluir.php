
<?php
require_once "../conexao.php";

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$foto = "semfoto.png";

$id = $_GET['id'];
$sql = "DELETE FROM `produto` WHERE `idproduto` = $id"; // define a instrução SQL para excluir o produto com o ID especificado
echo $sql;

$comando = $conexao->prepare($sql); // prepara a instrução SQL e armazena na variável $comando
$comando->execute(); // executa a consulta
?>
