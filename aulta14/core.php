<?php
   

    
    if(isset($_POST['cor'])) {
        $cor = $_POST['cor'];
        $cor2['cor'] = $cor;
    } else {
        
        $cor2['cor'] = 'white';
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mudança de cor</title>
	<meta charset="UTF-8">
	<style>
		body {
			background-color: <?php echo $cor2['cor']; ?>;
		}
	</style>
</head>
<body>
	<form method="POST" action="">
		<label for="cor">Escolha uma cor:</label>
		<select name="cor" id="cor">
			<option value="white">Branco</option>
			<option value="red">Vermelho</option>
			<option value="green">Verde</option>
			<option value="blue">Azul</option>
            <option value="pink">Rosa</option>
            <option value="yellow">Amarelo</option>
		</select>
		<button type="submit">Enviar</button>
	</form>
</body>
</html>
