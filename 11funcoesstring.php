<!DOCTYPE html>
<html>
<body>

<?php
	$nome = "marta amorim";
	$novoNome = strtoupper($nome);//str to upper
	echo "Maiúscula: $novoNome";
	
	echo "<br>";
	
	$nome = strtolower($novoNome); //str to lower
	echo "Minúscula: $nome";
	echo "<br>";
	echo "<br>";
	
	/*Começa contando de 1 até ao final da string*/
	$mensagem = "Olamundo"; //retorna parte da string
	echo "Começa no 4 de Olamundo: " . substr($mensagem,4); // o 4 é o inicio
	echo "<br>";	
	echo "Começa no 4 de Olamundo e pega 2: " . substr($mensagem,4,2);
	
	echo "<br>";
	echo "<br>";
	$objeto = "mouse"; //retorna parte da string
	echo str_pad($objeto,7,"h");//adiona espaço em branco-> inspecionar html
	echo "<br>";
	echo str_pad($objeto,7,"*");
	echo "<br>";
	echo str_pad($objeto,7,"*",STR_PAD_LEFT);
	echo "<br>";
	echo str_pad($objeto,7,"*",STR_PAD_BOTH);
	echo "<br>";
	
	echo "<br>";
	echo "<br>";
	$string=str_repeat("Sucesso!",5);
	echo $string;
	echo "<br>";
	echo "<br>";
		
		
	echo "Tamanho string Ola mundo: " . strlen("Ola mundo");
	echo "<br>";
	echo "Tamanho string Olá mundo: " . strlen("Olá mundo");
	
	echo "<br>";
	echo "<br>";
	
	$texto="A seleção Argentina será campeã da copa do mundo de 2026";
	$novoTexto = str_replace("Argentina", "Brasileira", $texto);
	echo $novoTexto;
	
	echo "<br>";
	echo "<br>";
	
	echo "posição de copa:" . strpos($texto,"copa");
	
?>

</body>
</html>
