<?php
	//Código fonte manipula a classe calculadora e o valores provenientes da interface
	include '30_calc_class.php';
	
	//valores da interface
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operador = $_POST['operador'];
	
	//Instanciando o objeto calculadora
	$calculadora = new Calculadora($num1,$num2, $operador);
	
	//chamando o método para calcular e imprimir na tela o resultado
	echo $operador . ': '. $calculadora->calcular();
?>
