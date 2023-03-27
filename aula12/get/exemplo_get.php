<h3> Esse código em PHP recebe dois números através de uma requisição GET, soma os valores e retorna o resultado. </h3>
<?php
// Abre a tag PHP

$resultado = $_GET[ 'numero1' ] + $_GET['numero2'];
// Atribui à variável $resultado a soma dos valores passados pela URL nas chaves 'numero1' e 'numero2'

echo "O resultado da soma é $resultado";
// Exibe na tela a string "O resultado da soma é " concatenada com o valor da variável $resultado














