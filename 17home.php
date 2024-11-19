<?php

//Conexão
require_once 'db_connect.php';

//iniciar a sessão
session_start();

//verificação para não permitir acessar a página home sem antes efetuar login
// se não existir a sessão logado
if (!isset($_SESSION['logado'])):
	header('Location: 17loginB.php');
endif;

//Dados
$id = $_SESSION['id_usuario'];

$sql= "SELECT * FROM usuarios WHERE id='$id'";
$resultado= mysqli_query($connect,$sql);
//transforma a variavel resultado em array 
$dados =mysqli_fetch_array($resultado);
//fechando a conexão depois de armazenar os dados
mysqli_close($connect);

include "17header.php";
?>
<html>
<head>
	<title>Página restrita</title>
	<meta charset="utf-8">
</head>
<body>

<?php echo "<h2> Usuário logado, " . $dados['nome'] . "</h2>";?>
<hr>


<?php include "17footer.php"; ?>
</body>
</html>