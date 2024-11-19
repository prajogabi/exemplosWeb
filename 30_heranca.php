<?php

/*
A classe Cliente herda da classe Pessoa.

Isso significa que a classe Cliente pode usar as propriedades public $name e $color, 
bem como os métodos public __construct() e intro().

A classe Cliente também possui seu próprio método: message().
*/
class Pessoa {
  public $nome;
  public $CPF;
  public function __construct($nome, $CPF) {
    $this->nome = $nome;
    $this->CPF = $CPF;
  }
  protected function intro() {
    echo "A pessoa tem o nome {$this->nome} e o CPF é {$this->CPF}.";
  }
}

class Cliente extends Pessoa {
  public function mensagem() {
    echo "Eu sou uma pessoa ou um cliente?  </br> </br>";
  }
}

// Instanciando cliente
$cliente = new Cliente("Maria", "09495774721");  // OK. __construct() is public
$cliente->mensagem(); // OK. message() is public


// Como corrigir o problema?
try { //comando que trata exceção (erro)
	$cliente->intro(); // ERROR.
}
catch(Error  $e) { //captura e trata o erro'	
	  echo 'Erro de responsabilidade do programador: chamando uma função protect '; 
}

?>