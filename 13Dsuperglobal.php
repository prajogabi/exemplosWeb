<!DOCTYPE html>
<html>
<head>
<title>Validação de formulário</title>
</head>
<body>


<!--VALIDACAO DE FORMULARIO USUANDO FILTER
FILTRA utilizando um padrão especifico.
FUNÇÕES (filter_input - filter_vAr)
FILTER_VALIDATE_INT
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL
-->

<?php
	
	   
 //os dados do formulário serão enviados para essa página
 //isset - verificar se existe uma variável criada ou se clicou no formulário - A primeira vez que a página carrega é nulo
 if (isset($_POST['enviar-formulario'])):
	echo "Carregou";
	//echo "Enviou <br>";
	//var_dump($_POST); //superglobal $_POST
	$erros = array(); //array de erros
	$idade = $_POST['idade'];
	$nome = $_POST['nome'];
			
		 
	//validações
	$res = array("options"=>array("regexp"=>"/^[a-zA-Z]/"));
	if(! filter_var($nome, FILTER_VALIDATE_REGEXP,$res)) {		  
		  $erros[]= "Nome deve possuir somente letras [a-zA-Z].";
	}
	
	//A função filter_var faz da mesma forma, no entanto não especifica POST ou GET
	//http://php.net/manual/pt_BR/function.filter-var.php	
	if ( filter_input(INPUT_POST,"idade",FILTER_VALIDATE_INT) === false): 
		$erros[] = "Idade precisa ser um inteiro";
	endif;
	
	if(filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)===false): 
		$erros[] = "Email inválido";
	endif;
	
	
	if(filter_input(INPUT_POST,'peso',FILTER_VALIDATE_FLOAT) ===false): 
		$erros[] = "peso inválido";
	endif;
	
	
	if(filter_input(INPUT_POST,'ip',FILTER_VALIDATE_IP)=== false): 
		$erros[] = "IP inválido";
	endif;
	

	
	//exibindo mensagens
	//empty - retorna verdadeiro e falso/verificar se a variável está vazia
	if (!empty($erros)):
		foreach($erros as $erro):
			echo "<li> $erro </li>";
		endforeach;
	else:
		echo "Parabéns, seus dados estão corretos!";
	endif;	
 endif;
 
?>


<!--Vai imprimir o nome da própria página  (auto chamada)-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	
	Idade: <input type="text" name="idade"><br>
	Nome: <input type="text" name="nome"><br>
	Email: <input type="text" name="email"><br>
	Peso: <input type="text" name="peso"><br>
	IP: <input type="text" name="ip"><br>


<button type="submit" name="enviar-formulario"> Enviar </button>

</form>


</form>

</body>

</html>