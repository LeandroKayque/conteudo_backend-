<?php
require_once "../conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];

$sql = "UPDATE `produto` SET `nome` = ?, `descricao` = ?, `preco` = ? WHERE `idproduto` = ?";
echo $sql;

$comando = $conexao->prepare($sql);
$comando->bind_param("ssdi", $nome, $descricao, $preco, $id);

if ($comando->execute()) {
    echo "Produto atualizado com sucesso!";
} else {
    echo "Erro ao atualizar produto!";
}
