<?php
require_once "../conexao.php";

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$foto = $_FILES["foto"];

// Verifica se uma foto foi enviada
if (!empty($foto["name"])) {
    // Define o diretório de destino
    $diretorioDestino = "../uploads/";

    // Define um nome único para o arquivo
    $nomeArquivo = uniqid() . "_" . $foto["name"];

    // Define o caminho completo do arquivo
    $caminhoArquivo = $diretorioDestino . $nomeArquivo;

    // Move o arquivo para o diretório de destino
    if (move_uploaded_file($foto["tmp_name"], $caminhoArquivo)) {
        // Inserção no banco de dados
        $sql = "INSERT INTO produto (nome, descricao, preco, foto) VALUES (?, ?, ?, ?)";
        $comando = $conexao->prepare($sql);
        $comando->bind_param("ssds", $nome, $descricao, $preco, $nomeArquivo);

        if ($comando->execute()) {
            echo "Produto cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar o produto.";
        }
    } else {
        echo "Erro ao fazer o upload da foto.";
    }
} else {
    echo "Por favor, selecione uma foto.";
}
?>
