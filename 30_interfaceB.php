<?php
//Para implementar uma interface, uma classe deve usar a palavra-chave implements.

//Uma classe que implementa uma interface deve implementar TODOS os métodos da interface.
//Usando interfaces, o código funcionará para todos os animais, mesmo que cada animal se comporte de maneira diferente.


interface Animal {
  public function Onomatopeia();
  
}

class Gato implements Animal {
  public function Onomatopeia() {
    echo " Meow ";
  }
}

class Cachorro implements Animal {
  public function Onomatopeia() {
    echo " AuAu ";
  }
}

class Rato implements Animal {
  public function Onomatopeia() {
    echo " Squeak ";
  }
}

//Criando lista de animais
$gato = new Gato();
$cachorro = new Cachorro();
$rato = new Rato();
$animals = array($gato, $cachorro, $rato);

// Cada animal faz seu som particular
foreach($animals as $animal) {
  //Polimorfismo
  $animal->Onomatopeia();
  echo "</br>";
}

?>
