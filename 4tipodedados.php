<!DOCTYPE html>
<html>
<head>
<title>teste</title>


</head>

<body>
<?php

/****NÚMEROS ESCALARES****/
//string
$nome="Ola mundo";
//$nome='Ola mundo1';


var_dump($nome);

echo "<br>";

if (is_string($nome)):
	echo "É uma string";
else:
	echo "Não é um string";
endif;
/**/

echo "</br>";

//inteiro - intervalo entre number -2,147,483,648 e 2,147,483,647. (2 bilhões)
$nome=123;

//echo "<br>";

/*
if (is_int ($nome)):
	echo "É um inteiro";
else:
	echo "Não é um inteiro";
endif;
echo "<br>";
var_dump($nome);

*/
//float
$altura=1.72;

var_dump($altura);


echo "<br>";

// if (is_float($altura)):
	// echo "É um float";
// else:
	// echo "Não é um float";
// endif;



//boolean
$admin=true;


var_dump($admin);

echo "<br>";

if (is_bool($admin)):
	echo "É um boolean";
else:
	echo "Não é um boolean";
endif;

echo "<hr>";



/****COMPOSTOS****/
//$carros= array("Gol","Uno", "Camaro");
//$carros= array("Gol","Uno", "Camaro",12,20.6,true);
/*var_dump($carros);
if (is_array($carros)):
	echo "É um array";
else:
	echo "Não é um array";
endif;
*/

//echo "<hr>";


/****Objeto****/
//The $this keyword refers to the current object, and is only available inside methods.
/*
class Cliente{
	public $nome;
	private $sobrenome;
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome() {
		return $this->nome;
  }
   public function setSobrenome($sobrenome){
		$this->sobrenome = $sobrenome;
	}
   public function getSobrenome() {
		return $this->sobrenome;
  }
		
}

$cliente = new Cliente();
$cliente->setNome("Marta");
echo "Nome: " . $cliente->getNome();
$cliente->setSobrenome("Amorim");
echo " Sobrenome: " . $cliente->getSobrenome();
echo "<br>";
*/



//var_dump($cliente);
/*
if (is_object($cliente)):
	echo "É um objeto";
else:
	echo "Não é um objeto";	
endif;
*/

/****Especiais****/

//$cidade=0;
//$cidade=null;
//$cidade="null";
//$cidade=NULL;
/*
var_dump($cidade);
if (is_null($cidade)):
	echo "Está nulo";
else:
	echo "Não está nulo";	
endif;
*/
//$pais = "Europeu";
//$$pais = "Alemanha";

//var_dump($pais);
//var_dump($$pais);

?>
</body>

</html>