<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Consumindo dados webservice</title>
	</head>
	<body>
		<?php
			$url="http://localhost/29read.php";
			//json_decode - Função que analisa a string codificada JSON e converte-a em uma variável do PHP.
			//file_get_contents -  Função que lê todo o conteúdo de um arquivo para uma String
			$resultado = json_decode(file_get_contents($url));
			
			
			//var_dump($resultado);
			
			
			foreach ($resultado->data as $item){
				echo "Id: " . $item->id . "<br>";
				echo "Titulo: " . $item->titulo . " <br>";
				
				echo "<br>";
			}
			

		?>
	</body>
</html>
