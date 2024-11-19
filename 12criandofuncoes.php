<!DOCTYPE html>
<html>
<body>

<?php
	//A função precisa existir antes para funcionar
	function exibirNome(){
		echo "Meu nome é Marta";
		
	}
	
	exibirNome(); //chamar a função

	function exibirNome1($nome){
		echo "<br> Meu nome é $nome";
		
		
	}
	exibirNome1("Maria");
	echo "<br>";
	
	//mesmo colocando a tipagem, NÃO é obrigatório na chamada
	//informar do tipo correto
	function calcularMedia (string $nome, float $n1, $n2, $n3, $n4): float{
		$media= ($n1 + $n2 + $n3 + $n4) /4;
		if($media >= 7):
			echo "$nome foi aprovado com a média $media.";			
		else:
			echo "$nome foi reprovado.";
		endif;
		return $media;
	}
	
	$valor=calcularMedia("Bob",5,7,9,10);
	echo "<br> $valor";
	echo "<br>";
	calcularMedia("Maria",5,7,6,3);
	
?>

</body>
</html>
