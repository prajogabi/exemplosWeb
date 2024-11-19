<?php
class Pessoa {
	
  // a palavra reservada final - impede que o método seja sobreescrito.
  final public function intro() {
    // algum código
  }
}

class Cliente extends Pessoa {
  // resultará em erro
  public function intro() {
	// algum código
  }
}


echo "testando";
?>