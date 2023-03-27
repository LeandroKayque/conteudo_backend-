<h1>Tabuada</h1> 

<table> 
<?php 
$tabuada = $_GET['tabuada']; // Recebe o número da tabuada enviado via GET e armazena em uma variável
for ($i=1; $i<=10; $i++) { // Tabuada por 1 a 10
	echo "<tr>"; 
    
	echo "<td>" . $tabuada . " x " . $i . " = </td>"; // Cria uma coluna da tabela com a fórmula da multiplicação

	echo "<td>" . ($tabuada*$i) . "</td>"; // Cria uma coluna da tabela com o resultado da multiplicação

	echo "</tr>"; 
}
echo "<h2> Essa é a tabuada do $tabuada"; // Imprime uma mensagem com o número da tabuada fora da tabela
?>
</table> 
