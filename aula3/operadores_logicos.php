<h2>Operadores Lógicos</h2>
<hr>São utilizados para avaliar uma expressão formada por um conjunto de valores lógicos.
<ul>
    <li>and | E</li>
    <li>or  | OU</li>
    <li>&&  | OU</li>
    <li>!   | NÃO</li>
    <li>xor | Ou Exclusivo</li>
</ul>
<h3>Tabela Verdade - E</h3>
<table border=1>
    <tr>
        <th colspan=3>Tabela do E</th>
        <tr>
        <td>V</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>V</td>
        <td>F</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>V</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>F</td>
        <td>F</td>
    </tr>
</table>
<strong>Exemplo</strong>
Murilo disse à Bruna que iria ao parque se:<br>
<ol>
<li>Domingo estivesse de sol</li> 
<li>Tivesse realizado todas as atividades do IF.</li> 
</ol>
<?php 
$condicao1 = true;
$condicao2 = false;
$acao_murilo = $condicao && $condicao2;
var_dump($acao_murilo);
?>
<h2>Estrutura de condição</h2>
<hr>
<p>
    A estrutura de condição é utilizada 
    para avaliar qual instrução deve ser 
    executada, dada uma condição.

    Se a condição dor verdadeira (true) executada a 
    intrução 1, caso contrário executada a instrução

<strong>Exemplo</strong>
<pre>
    if (<em>condicao</em>){
        //instrução 1 
    }else{
        //intrução 2
    }
</pre>
</p>

<?php
/*
Para passar de ano é necessário tirar no 
minimo 6 pontos em cada disciplina.Murilo
tirou...Ele foi aprovado ou não?
*/
$nota_do_murilo = 5;
if($nota_do_murilo >=6){
    echo"Murilo foi aprovado!";
}else{
    echo"Murilo foi reprovado";
}
?> 