<!DOCTYPE html>
<html>
<body>

<?php
//ARRAY INDEXADOS AUTOMATICAMENTE COM NÚMEROS - 
//Por padrão os índices são criados com números:
//O array armazenar qualquer tipo de valor
$lista = array("Ola", 10, 10.5);



echo "</br> Array indexados: </br>";
print_r($lista);

echo "</br>";
echo "</br> Acessando cada item: " . $lista[0] . ", " . $lista[1] . " e " . $lista[2] . ".";
echo "</br></br>";
echo "<hr>";

//ARRAY ASSOCIATIVOS
//primeira forma de criar array
$carros = array(4=>"BMW", 2=> "Veloster", 3=>"Hilux");

echo "</br> Array associativos (com números nas chaves): </br>";
print_r($carros);


echo "<br>";
echo "<br>";
/*adicionando mais um item ao array - adiciona no final*/
$carros[] = "Amarok";

//adiciona no inicio
array_unshift($carros , 'Celta');
print_r($carros);

echo "<br>";
$carros[10] = "Camaro";
echo "Carro na posição 10: " . $carros[10];
echo "<br>";
print_r($carros);
echo "<br>";
echo "<br>";

//remove item do array
echo "Excluindo item do array que não existe <br>";
echo "<br>";
unset($carros[20]);
print_r($carros);
echo "<br>";
echo "<br>";


//segunda forma de criar array
$motos = array();
$motos[]= "Yamaha";
$motos[]= "Honda";
$motos[]= "Suzuki";
echo "<br>";
echo "<br>";
echo "moto[0]= $motos[0]";
echo "<br>";
print_r($motos);
echo "<br>";
echo "<br>";

//terceira forma de criar array
$clientes=["João","Maria","Pedro","Ana"];
print_r($clientes);
echo "<br>";
echo "Quantidade itens array:". count($clientes);
echo "<br>";

echo "<br>";
echo "<br>";
//ordena o array e reorganiza os índices
echo "</br> Ordenando array: </br>";
sort($clientes);
print_r($clientes);
echo "<br>";
echo "<br>";
//percorrendo um array
echo "</br> Percorrendo array com foreach: </br>";
foreach($clientes as $indice => $valor){
	echo $indice . " - " . $valor . "<br>";
} 

echo "<br>";
echo "<hr>";
echo "<br>";

//ARRAY ASSOCIATIVOS - OS ÍNDICES podem não ser numéricos.
echo "</br> Array associativos (com string nas chaves): </br>";
$pessoa = array("nome"=> "marta", "idade"=> 23, "altura"=>1.75);
print_r($pessoa);

$pessoa["cidade"]="Itabuna";
echo "<br>";
echo "<br>";

foreach($pessoa as $indice => $valor) {
		echo $indice. ":" .$valor ."<br>";
}

?>

</body>
</html>

