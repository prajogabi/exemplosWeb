<!DOCTYPE html>
<html>
<body>

<?php
class Cliente {
  // Propriedade - são visíveis apenas dentro da classes (ESCOPO das variáveis.)
  private $nome;
  private $CPF;

  //Construtor
  function __construct($nome, $CPF) {
    $this->nome = $nome;
    $this->CPF = $CPF;
  }
  
  //Se você criar uma função __destruct(), o PHP chamará automaticamente esta função no final do script.  
  function __destruct() {
    echo "</br> O objeto cliente {$this->nome} foi eliminado da memória.";
  }
  
  // Métodos
  function set_nome($nome) {
	//$this - é um palavra reservada e informa que está sendo usado a propriedade do próprio objeto.
    $this->nome = $nome;
  }
  function get_nome() {
    return $this->nome;
  }
  function set_cpf($CPF) {
    $this->CPF = $CPF;
  }
  function get_CPF() {
    return $this->CPF;
  }
}

class Pedido{
		
}

//Instanciando ou criando um objeto
$pessoa = new Cliente('Maria','265.596.650-38');


//Obtendo os valores das propriedades
echo "<h2> <font color='green'> Nome: " . $pessoa->get_nome() . " </font></h2>";
echo "</br>";
echo "<h3> CPF: " .  $pessoa->get_CPF(). "</h3>";


//Verificando se o objeto pertence a classe
var_dump($pessoa instanceof Cliente);
echo "</br>";
var_dump($pessoa instanceof Pedido);
?>
 
</body>
</html>
