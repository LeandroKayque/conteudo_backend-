<h2>Exercício 1</h2>
<p>
    Crie um vetor, como representado abaixo:
    <pre>
         --------- 
        |Murilo   | 
         --------- 
        |4        |
         --------- 
        |3        |
         --------- 
    </pre>
    <p>
        Após calcule a média das posições 1 e 2
        do vetor e armazene o resultado na posição 3.
    </p>
    <p>
        Utilize uma estrutura de condição verificar se a média,
        armazenada na posição 3 é maior ou igual a 6, se for
        armazena na posição 4 do vetor a situação "Aprovado",
        caso contrário armazene "reprovado".
    </p>

    <p>
        Imprima o vetor utilizando o comando var_dump
    </p>
    
</p>

<p>



	<?php
		
		$vetor = array("Murilo", 4, 3);

		
		$media = ($vetor[1] + $vetor[2]) / 2;
		$vetor[3] = $media;

		
		if ($media >= 6) {
			$vetor[4] = "Aprovado";
		} else {
			$vetor[4] = "Reprovado";
		}

		
		echo "<pre>";
		var_dump($vetor);
		echo "</pre>";
	?>
