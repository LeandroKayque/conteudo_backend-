<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listagem de Produtos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <h1>Listagem de Produtos</h1>
    <?php
    require_once "../conexao.php";

    $sql = "SELECT * FROM produto";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nome</th><th>Descrição</th><th>Preço</th><th>Foto</th></tr>";
        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$linha['idproduto']."</td>";
            echo "<td>".$linha['nome']."</td>";
            echo "<td>".$linha['descricao']."</td>";
            echo "<td>".$linha['preco']."</td>";

            $foto = "../uploads/".$linha['foto'];
            echo "<td><img src='".$foto."' alt='Foto do produto'></td>";

            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum produto encontrado.";
    }
    ?>
</body>
</html>
