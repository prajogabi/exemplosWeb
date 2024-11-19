<?php
/*
A classe pode ter métodos estáticos e não estáticos.

O método estático pode ser acessado dentro da própria classe usando a palavra reservada self::

*/
class Saudacao {

 //obrigatório ter o construtor	
 public function __construct(){	
    //chamada ao método estático dentro da classe
	self::saudacao();
 }
 
 
  public static function saudacao() {
    echo "<font color='blue'>Ola Mundo!</font>";
  }
}

// Chamada ao método estático
new Saudacao();
?>