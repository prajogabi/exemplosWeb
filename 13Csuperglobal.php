<!DOCTYPE html>
<html>
<head>
<title>Validação de formulário</title>
</head>
<body>


<!--VALIDACAO DE FORMULARIO USUANDO - FILTER
FILTRA utilizando um padrão especifico.
FUNÇÕES (filter_input - filter_ver)
FILTER_VALIDATE_INT
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL
-->

<?php
 //os dados do formulário serão enviados para essa página
 //isset - verificar se existe uma variável criada/
 //se clicou no formulário - A primeira vez que a página é carregada, 
 //não entra no if. 
 if (isset($_POST['enviar-formulario'])):
	echo "Enviou <br>";
	//var_dump($_POST); //superglobal $_POST
	//$erros = array(); //array de erros
	$idade = $_POST['idade'];
	echo $_POST['idade'];

	//incluir na caixa de texto idade
	//<input type="button" value="executa script">
	//<script> alert("Executando script malicioso!"); </script>

endif;


 
?>


<!--Vai imprimir o nome da própria página  (auto chamada)-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

	Idade: <input type="text" name="idade"><br>
	Email: <input type="text" name="email"><br>
	Peso: <input type="text" name="peso"><br>
	IP: <input type="text" name="ip"><br>


	<button type="submit" name="enviar-formulario"> Enviar </button>

</form>


</form>

</body>

</html>