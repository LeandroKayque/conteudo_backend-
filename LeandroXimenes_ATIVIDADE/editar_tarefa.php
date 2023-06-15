<!DOCTYPE html>
<html>
<head>
    <title>Editar Tarefa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Editar Tarefa</h1>
        </div>

        <?php
            // Verificar se o ID da tarefa foi fornecido
            if (isset($_GET["id"])) {
                $id = $_GET["id"];

                // Incluir arquivo de configuração do banco de dados
                require_once 'config.php';

                // Realizar a consulta no banco de dados para obter os dados da tarefa
                $sql = "SELECT * FROM tarefas WHERE ID = '$id'";
                $result = $conn->query($sql);

                // Verificar se a tarefa existe
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $descricao = $row["Descricao"];
                    $prioridade = $row["Prioridade"];
                    $data_limite = $row["DataLimite"];
                    $responsavel = $row["Responsavel"];

                    // Exibir o formulário preenchido com os dados da tarefa
                    echo "<h2>Editar Tarefa:</h2>";
                    echo "<form action='atualizar_tarefa.php' method='POST'>";
                    echo "<input type='hidden' name='id' value='$id'>";
                    echo "<label for='descricao'>Descrição:</label>";
                    echo "<input type='text' name='descricao' value='$descricao' required><br><br>";
                    echo "<label for='prioridade'>Prioridade:</label>";
                    echo "<select name='prioridade' required>";
                    echo "<option value='Alta' " . ($prioridade == 'Alta' ? 'selected' : '') . ">Alta</option>";
                    echo "<option value='Média' " . ($prioridade == 'Média' ? 'selected' : '') . ">Média</option>";
                    echo "<option value='Baixa' " . ($prioridade == 'Baixa' ? 'selected' : '') . ">Baixa</option>";
                    echo "</select><br><br>";
                    echo "<label for='data_limite'>Data Limite:</label>";
                    echo "<input type='date' name='data_limite' value='$data_limite' required><br><br>";
                    echo "<label for='responsavel'>Responsável:</label>";
                    echo "<input type='text' name='responsavel' value='$responsavel' required><br><br>";
                    echo "<input type='submit' value='Atualizar Tarefa' class='button'>";
                    echo "</form>";
                } else {
                    echo "<p>Tarefa não encontrada.</p>";
                }

                // Fechar a conexão com o banco de dados
                $conn->close();
            } else {
                echo "<p>ID da tarefa não fornecido.</p>";
            }
        ?>

        <div class="footer">
            <a href="visualizar_tarefas.php" class="button">Voltar</a>
        </div>
    </div>
</body>
</html>
