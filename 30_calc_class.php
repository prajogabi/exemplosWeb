<?php

//Classe calculadora
class Calculadora{
	
	//Atributos
	private $num1;
	private $num2;
	private $operador;
	
	
	//Método construtor
	public function __construct($num1,$num2,$operador){
		$this->num1 =$num1;
		$this->num2 =$num2;
		$this->operador =$operador;
		
		
	}
	
	//Método para calcular baseado nos valores e operador
	public function calcular(){
		switch($this->operador){
			case 'somar': //operador soma
				$result = $this->num1 + $this->num2; 
				break;
			case 'subtrair': //operador subtração
				$result = $this->num1 - $this->num2;
				break;
			case 'multiplicar': //operador multiplicação
				$result = $this->num1 * $this->num2;
				break;
				
			
			default: //caso nenhum dos operadores seja selecionado.
				$result = "Error";
				break;
		}
		
		return $result;
		
	}
	
}
?>