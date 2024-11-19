<!DOCTYPE html>
<html>
<head>
<title>Título do documento HTML</title>
</head>
<body>
Conteúdo do documento HTML

<!--A variável superglobal GET e POST servem para coletar dados de formulários-->
<form action="dadosget.php" method="get">

	Nome: <input type="text" name="nome"><br>
	Email: <input type="text" name="email"><br>
	<!--<input type="submit" name="Enviar">-->
	<button type="submit"> Enviar </button>
	<!--passar o parametro por meio de URL-->
	<a href="dadosget1.php?idade=123&nome=Eu123&email=Eu123@gmail.com">Enviar dados </a>
</form>


</form>

</body>

</html>