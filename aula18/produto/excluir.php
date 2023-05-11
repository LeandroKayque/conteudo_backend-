<?php
require_once "../conexao.php";

$id = $_POST["id"];

$sql = "DELETE FROM produto WHERE idproduto = ?";
$comando = $conexao->prepare($sql);
$comando->bind_param("i", $id);

if ($comando->execute()) {
    echo "Produto excluído com sucesso!";
} else {
    echo "Erro ao excluir produto!";
}
