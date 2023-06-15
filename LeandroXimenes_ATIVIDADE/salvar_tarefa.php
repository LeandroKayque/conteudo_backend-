<?php
    // Verificar se os dados do formulário foram enviados
    if (isset($_POST["descricao"]) && isset($_POST["prioridade"]) && isset($_POST["data_limite"]) && isset($_POST["responsavel"])) {
        $descricao = $_POST["descricao"];
        $prioridade = $_POST["prioridade"];
        $data_limite = $_POST["data_limite"];
        $responsavel = $_POST["responsavel"];

        // Incluir arquivo de configuração do banco de dados
        require_once 'config.php';

        // Inserir a tarefa no banco de dados
        $sql = "INSERT INTO tarefas (Descricao, Prioridade, DataLimite, Responsavel) VALUES ('$descricao', '$prioridade', '$data_limite', '$responsavel')";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Tarefa adicionada com sucesso.</p>";
        } else {
            echo "<p>Ocorreu um erro ao adicionar a tarefa: " . $conn->error . "</p>";
        }

        // Fechar a conexão com o banco de dados
        $conn->close();
    } else {
        echo "<p>Dados da tarefa não fornecidos.</p>";
    }
?>
