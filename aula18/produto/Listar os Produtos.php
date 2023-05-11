<?php
require_once "../conexao.php";

$sql = "SELECT * FROM produto";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nome</th><th>Descrição</th><th>Preço</th></tr>";
    while ($linha = $resultado->fetch_assoc()) {
        echo "<tr><td>".$linha['idproduto']."</td><td>".$linha['nome']."</td><td>".$linha['descricao']."</td><td>".$linha['preco']."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum produto encontrado.";
}
?>
