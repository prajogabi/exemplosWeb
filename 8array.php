<!DOCTYPE html>
<html>
<body>

<?php
//ARRAY INDEXADOS AUTOMATICAMENTE COM NÚMEROS - 
//Por padrão os índices são criados com números:
//O array armazenar qualquer tipo de valor
$lista = array("Ola", 10, 10.5);


//print_r imprime qualquer variável como a var_dump. 

/*
echo "var_dump: </br>";
var_dump($lista);
echo "</br> print_r: </br>";
print_r($lista);
*/

//echo "</br>";
//echo "</br> Lista: " . $lista[0] . ", " . $lista[1] . " e " . $lista[2] . ".";
//echo "</br></br>";


//ARRAY INDEXADOS MANUALMENTE COM NÚMEROS
//primeira forma de criar array
$carros = array(4=>"BMW", 2=> "Veloster", 3=>"Hilux");
print_r($carros);


echo "<br>";
/*adicionando mais um item ao array - adiciona no final*/
$carros[] = "Amarok";
/*O indice será o maior indice + 1 */
print_r($carros);
echo "<br>";

//adiciona no inicio, e coloca indice 0. Todos os indices serão reorganizados.
//array_unshift($carros , 'Celta');
//print_r($carros);

//echo "<br>";
//$carros[10] = "Camaro";
//echo "Carro na posição 10: " . $carros[10];
//echo "<br>";
//print_r($carros);
//echo "<br>";

//remove item do array
//echo "excluindo item do array que não existe <br>";
//echo "<br>";
//unset($carros[20]);
//print_r($carros);
//echo "<br>";
//echo "<br>";

//echo "excluindo item do array que  existe <br>. Não reorganiza o índice";
//unset($carros[2]);
//print_r($carros);
//echo "<br>";

//segunda forma de criar array
$motos = array();
$motos[]= "Yamaha";
$motos[]= "Honda";
$motos[]= "Suzuki";
//echo "<br>";
//echo "moto[0]= $motos[0]";
//echo "<br>";
//print_r($motos);
//echo "<br>";

//terceira forma de criar array
$clientes=["João","Maria","Pedro","Ana"];
//print_r($clientes);
//echo "<br>";
//echo "quantidade:". count($clientes);
//echo "<br>";

//echo "<br>";
//ordena o array e reorganiza os índices
//sort($clientes);
//print_r($clientes);

//percorrendo um array
//foreach($clientes as $indice => $valor){
//	echo $indice . " - " . $valor . "<br>";
//} 

echo "<br>";
echo "<hr>";
echo "<br>";

//ARRAY ASSOCIATIVOS - OS ÍNDICES podem não ser numéricos.
// acompanha o par key(valor)
//Em outras linguagens são conhecidos como dictionary , map ou 
// genericamente falando coleção de dados
/*
$pessoa = array("nome"=> "marta", "idade"=> 23, "altura"=>1.75);
print_r($pessoa);

$pessoa["cidade"]="Itabuna";
echo "<br>";
echo "<br>";

foreach($pessoa as $indice => $valor) {
		echo $indice. ":" .$valor ."<br>";
}
*/


//ARRAY MULTIMENSIONAL - EXEMPLO 1 - 
//TRÊS COLUNAS E CINCO LINHAS (ARRAY TRÊS DIMENSÕES)
//As dimensões são as colunas 
$carros = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15),
  array("Fusca",10,5)
);


//pega a primeira coluna ou a primeira dimensão
$col0 = array_column($carros, 0, 0);
//print_r($col0);

$totlinhas = count($col0);

//echo "tot: $totlinhas ";

echo "</br>";
echo "</br>";


echo "<table border='1'>";
	echo "<tr>";
		echo "<th>Carro</th>";
		echo "<th>Em estoque</th>";
		echo "<th>Vendidos</th>";
	echo "</tr>";
	for ($linha = 0; $linha < $totlinhas ; $linha++) {
		
	  //echo "<p><b>Linha número $linha</b></p>";
	  echo "<tr>";
	  for ($col = 0; $col < 3; $col++) {
		echo "<td>".$carros[$linha][$col]."</td>";
	  }
	  echo "</tr>";
	}
echo "</table>";



/*
foreach ($carros as $index => $member) {
    print "Array index : {$index}";
    print "</br>";
    foreach ($member as $key => $value) {
        print "{$key} : {$value}";
        print "</br>";
    }
}
*/

//ARRAY MULTIMENSIONAL ASSOCIATIVO- 
//EXEMPLO 2 - QUATRO COLUNAS E TRÊS LINHAS  (ARRAY QUATRO DIMENSÕES)

$times = array(
		"cariocas"=> array("vasco","flamengo","botafogo"),
		"paulistas"=> array("santos","sao paulo","palmeiras"),
		"bahianos"=> array("bahia","vitoria","itabuna")
		);
		

//echo $times["cariocas"][1];
//echo "<br>";



/*
foreach($times["cariocas"] as $indice => $valor){
	echo $indice. ":" .$valor ."<br>";	
} 

*/

/*
foreach($times as $indicelinha => $valorlinha){
	foreach($valorlinha as $indice => $valor){
		echo $indice. ":" .$valor ."<br>";	
	}
	echo "<br><br>";
} 
*/

?>

</body>
</html>

