<?php
/*
Explicação do exemplo:

As classes Audi, Volvo e Citroen herdam da classe Carro. 
Isso significa que as classes Audi, Volvo e Citroen podem usar a propriedade $name e o método construtor.

O método intro() por ser abstrato, obriga a classe filha a implementar e retornar uma string.

OBS: A função pode retornar vários tipos, como por exemplo: int, float, bool, array etc.
consulte a documentação para verificar todos os tipos:
=>https://www.php.net/manual/pt_BR/language.types.declarations.php.
*/


//classe Pai
abstract class Carro {
  public $nome;
  public function __construct($nome) {
    $this->nome = $nome;
  }
  abstract public function intro() : string;
}

//classes Filhas
class Audi extends Carro {
  public function intro() : string {
    return "Escolheu qualidade alemã! Eu sou um $this->nome!";
  }
}

class Volvo extends Carro {
  public function intro() : string {
    return "Orgulho de ser Suíço! Eu sou um $this->nome!";
  }
}

class Citroen extends Carro {
  public function intro() : string {
    return "A extravagância franceça! Eu sou um $this->nome!";
  }
}

// Criando os objetos
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
?>