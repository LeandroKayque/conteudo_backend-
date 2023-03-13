<h2> Vetor 3 </h2>
<?php
$notas = []; 
$notas["Poliana"] = [7, 9];
$notas["Murilo"] = [8, 5];
$notas["Andre"] = [6, 7];

foreach ($notas as $nome => $notas_aluno) {
    echo "Notas de ".$nome.": " .implode(", ", $notas_aluno)."<br>";
}
?>
