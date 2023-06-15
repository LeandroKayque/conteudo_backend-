<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Tarefas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Visualizar Tarefas</h1>
        </div>

        <h2>Tarefas:</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Prioridade</th>
                <th>Data Limite</th>
                <th>Responsável</th>
                <th>Ações</th>
            </tr>
            <?php
                // Incluir arquivo de configuração do banco de dados
                require_once 'config.php';

                // Realizar a consulta no banco de dados
                $sql = "SELECT * FROM tarefas";
                $result = $conn->query($sql);

                // Exibir as tarefas
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['ID'] . "</td>";
                        echo "<td>" . $row['Descricao'] . "</td>";
                        echo "<td>" . $row['Prioridade'] . "</td>";
                        echo "<td>" . $row['DataLimite'] . "</td>";
                        echo "<td>" . $row['Responsavel'] . "</td>";
                        echo "<td>";
                        echo "<a href='editar_tarefa.php?id=" . $row['ID'] . "' class='edit-button'>Editar</a>";
                        echo "<a href='excluir_tarefa.php?id=" . $row['ID'] . "' class='delete-button'>Excluir</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Nenhuma tarefa encontrada.</td></tr>";
                }

                // Fechar a conexão com o banco de dados
                $conn->close();
            ?>
        </table>

        <div class="footer">
            <a href="index.php" class="button">Voltar</a>
        </div>
    </div>
</body>
</html>
