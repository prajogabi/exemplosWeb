<!DOCTYPE html>
<html>
<body>

<?php
$contador=1;

echo "Repetidor While </br>";
while ($contador <= 10): //Enquanto a condicção for verdadeira, executa o trecho de código
	echo "Contador é $contador <br>";
	$contador++; // é igual contador=contador + 1;
endwhile;

//OU escrita alternativa
/*$contador=1;
while ($contador <= 10){
	echo "Contador é $contador <br>";
	$contador++;
}
*/

echo "<hr>";

$contador =1;

echo "Repetidor Do/While </br>";
do{
	
	echo "Contador é $contador <br>";
	$contador++;
}while ($contador <= 10);


echo "<hr>";
echo "<br>";

echo "Repetidor For </br>";
for($contador=0;$contador<=10;$contador++):
	echo "Contador é $contador <br>";
endfor;



echo "<hr>";
echo "<br>";

echo "Repetidor For </br>";
for($contador=0;$contador<=10;$contador++):
	echo "8 x $contador=" . (8 * $contador);
	echo "<br>";
endfor;

echo "<hr>";
echo "<br>";



$cores = array("Verde", "Vermelho","Azul","Preto");
echo "Repetidor For Each </br>";
//percorre cada item do array por meio do par chave/valor
foreach($cores as $indice => $valor):
	echo $valor. "<br>";
endforeach;

?>  

</body>
</html>
