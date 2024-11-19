<!DOCTYPE html>
<html>
<body>

<?php
class Cliente {
  // Propriedade - são visíveis apenas dentro da classes (ESCOPO das variáveis.)
  private $nome;
  private $CPF;

  // Métodos
  function set_nome($nome) {
	//$this - é um palavra reservada e informa que está sendo usado a propriedade do próprio objeto da classe. 
	//$this spo pode ser usada dentro dos métodos das classes.
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
$pessoa = new Cliente();

//Atribuindo valores as propriedades do objeto
$pessoa->set_nome('Maria');
$pessoa->set_CPF('265.596.650-38');


//Obtendo os valores das propriedades
echo "<h2> Nome: " . $pessoa->get_nome() . "</h2>";
echo "</br>";
echo "<h3> CPF: " .  $pessoa->get_CPF(). "</h3>";


//Verificando se o objeto pertence a classe -> retorna um boolean
var_dump($pessoa instanceof Cliente);
echo "</br>";
var_dump($pessoa instanceof Pedido);
?>
 
</body>
</html>
