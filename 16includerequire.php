<?php 
$meu_titulo = 'minha página';

include 'header.php';
//require 'header.php';
//retorna um erro e interrompe o script se o arquivo nao existir OU existir algum erro
//require 'headerx.php'; 
//retorna um warning e NAO INTERROMPE o script se o arquivo nao existir
//include 'headerx.php'; 



//include 'header.php';
//include 'header.php';

//include_once 'header.php'; //verificar se o arquivo ja foi incluido. Se tiver incluido nao inclui novamente.
//include_once 'header.php';
?>
<section class="body_content">
	<?php echo "Seja bem vindo!";?>
</section>

<?php 
//include 'footer.php';
include 'footer.php';

?>
