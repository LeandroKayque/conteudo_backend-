<!DOCTYPE html>
<html>
<head>
    <title>Gerenciador de Tarefas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8fafc;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 400px;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        h1 {
            color: #55c500;
            font-size: 28px;
            margin: 0;
            padding: 0;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #666;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #f8f8f8;
            font-size: 14px;
            color: #333;
            margin-bottom: 20px;
            box-sizing: border-box;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #55c500;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #449400;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Gerenciador de Tarefas</h1>
        </div>

        <h2>Adicionar Tarefa:</h2>
        <form action="salvar_tarefa.php" method="POST">
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" required>

            <label for="prioridade">Prioridade:</label>
            <select name="prioridade" required>
                <option value="Alta">Alta</option>
                <option value="Média">Média</option>
                <option value="Baixa">Baixa</option>
            </select>

            <label for="data_limite">Data Limite:</label>
            <input type="date" name="data_limite" required>

            <label for="responsavel">Responsável:</label>
            <input type="text" name="responsavel" required>

            <input type="submit" value="Adicionar Tarefa" class="button">
        </form>

        <div class="footer">
            <a href="visualizar_tarefas.php" class="button">Visualizar Tarefas</a>
        </div>
    </div>
</body>
</html>
