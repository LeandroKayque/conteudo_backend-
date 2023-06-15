<?php
    // Verificar se o ID da tarefa foi fornecido
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        // Incluir arquivo de configuração do banco de dados
        require_once 'config.php';

        // Excluir a tarefa do banco de dados
        $sql = "DELETE FROM tarefas WHERE ID = '$id'";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Tarefa excluída com sucesso.</p>";
        } else {
            echo "<p>Ocorreu um erro ao excluir a tarefa: " . $conn->error . "</p>";
        }

        // Fechar a conexão com o banco de dados
        $conn->close();
    } else {
        echo "<p>ID da tarefa não fornecido.</p>";
    }
?>
