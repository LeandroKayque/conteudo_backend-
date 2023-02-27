<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Vetores em PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
        }
        h1 {
            text-align: center;
            margin-top: 30px;
        }
        h2 {
            margin-top: 40px;
            border-bottom: 1px solid #ccc;
        }
        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"] {
            font-size: 16px;
            padding: 5px;
        }
        input[type="submit"] {
            font-size: 16px;
            padding: 5px 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .alert {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
        }
        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }
        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
    </style>
</head>
<body>
    <h1>Vetores em PHP</h1>
    <p>
        Vetores são estruturas de armazenamento compostas heterogêneas,
        que podem ser indexadas numericamente ou textualmente.
    </p>

    <h2>Vetores indexados numericamente</h2>
    <?php
        // exemplo de vetor indexado numericamente
        $notas = [6, 3];
        echo "<p>Notas: " . implode(", ", $notas) . "</p>";

        // calcular média das notas
        $media = array_sum($notas) / count($notas);
        echo "<p>Média: " . number_format($media, 1) . "</p>";

        // verificar se aluno foi aprovado ou reprovado
        if ($media >= 6) {
            $mensagem = "Aprovado";
            $alert_class = "alert-success";
        } else {
            $mensagem = "Reprovado";
            $alert_class = "alert-danger";
        }
        echo "<div class='alert $alert_class'>$mensagem</div>";
    ?>

    <h2>Vetores com índice textual</h2>
    <?php
        // exemplo de vetor com índice textual
        $notas = [
            "Debora" => 7,
            "Murilo" => 7.8,
            "Poliana" => 9
        ];

        // imprimir a nota da Poliana
        echo "<p>A Poliana tirou nota " . $notas["Poliana"] . "</p>";

        // imprimir todas as notas
        echo "<ul>";
        foreach ($notas as $nome => $nota) {
            echo "<li>$nome: $nota</li>";
        }
        echo "</ul>";
    ?>

    <h2>Calcular média com formulário</h2>
