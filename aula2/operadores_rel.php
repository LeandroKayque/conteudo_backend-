<h2>Operadores Relacionais</h2>
<hr>

<p>
    Operadores relacionais são utilizados
    para comprar a relação entre "coisas".
</p>

<ul>
    <li>>  | Maior</li>
    <li><  | Menos</li>
    <li>>= | Maior Igual</li>
    <li><= | Menor Igual</li>
    <li>!= | Diferente</li>
    <li>== | Igual</li>
</ul>

<p>
    Os operadores relacionais retornam verdadeiro
    (true), ou falso (false). Em PHP true pode ser
    representado por 1 ou por uma variavel com valor,
    e falso pode ser representado por 0 ou pela
    inexistência d evalor em uma variável.
</p>

<?php
    $valor = 10 >= 10;
    var_dump($valor);
?>