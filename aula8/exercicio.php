<h2> Ordenação - Ordem Alfabetica<h2>



<?php
$nomes = array("Murilo", "Poliana", "Dalva", "Lavinia", "Camila", "Kaua");

for($c=0; $c<=5; $c++){ 
  for($i = $c + 1; $i<=5; $i++){
    if($nomes[$c] > $nomes[$i]){
      $celBranco = $nomes[$i];
      $nomes[$i] = $nomes[$c];
      $nomes[$c] = $celBranco;
    }
  }
}

var_dump($nomes);




