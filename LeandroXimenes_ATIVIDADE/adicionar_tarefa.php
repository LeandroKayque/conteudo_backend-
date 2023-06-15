<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Tarefa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Adicionar Tarefa</h1>
        </div>

        <h2>Adicionar Tarefa:</h2>
        <form action="salvar_tarefa.php" method="POST">
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" required><br><br>
            
            <label for="prioridade">Prioridade:</label>
            <select name="prioridade" required>
                <option value="Alta">Alta</option>
                <option value="Média">Média</option>
                <option value="Baixa">Baixa</option>
            </select><br><br>
            
            <label for="data_limite">Data Limite:</label>
            <input type="date" name="data_limite" required><br><br>
            
            <label for="responsavel">Responsável:</label>
            <input type="text" name="responsavel" required><br><br>
            
            <input type="submit" value="Adicionar Tarefa" class="button">
        </form>

        <div class="footer">
            <a href="visualizar_tarefas.php" class="button">Visualizar Tarefas</a>
        </div>
    </div>
</body>
</html>
