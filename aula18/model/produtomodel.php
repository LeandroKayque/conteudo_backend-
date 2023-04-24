<?php
require_once "../conexao.php"; // inclui o arquivo de conexão com o banco de dados

$sql = "INSERT INTO `produto` (`nome`, `preco`, `descricao`, `foto`) VALUES (?, ?, ?, ?);"; // define a instrução SQL a ser executada

$conexao->prepare($sql); // prepara a instrução SQL, mas não executa

$comando = $conexao->prepare($sql); // prepara a instrução SQL novamente e armazena na variável $comando
$comando->bind_param("ssds", "a","b", 1, "c" );
$comando->execute(); // executa a instrução SQL preparada anteriormente e insere os valores fornecidos 
