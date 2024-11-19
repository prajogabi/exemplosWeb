<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Consumindo dados webservice - CREATE</title>
	</head>
	<body>
		<?php
			
			$url="http://localhost/29create.php";
		
			//dado que será inserido no banco de dados
			$data = array(
			  'titulo'      => 'A biblia do Javascript1 '
			);	
			
			//Lista de opções de contexto do HTTP
			//Accept - informa o tipo de resposta esperada do servidor no HEADER
			//Content-Type - informa o tipo de conteúdo enviado no BODY deve ser um json
			$options = array(
			  'http' => array(
				'method'  => 'POST',
				'content' => json_encode( $data ),
				'header'=>  "Content-Type: application/json\r\n" .
							"Accept: application/json\r\n"
				)
			);
			//stream_context_create - Função que cria uma stream (dados que serão codificados e enviados via HTTP)
			//variavel do tipo resource
			$context  = stream_context_create( $options );
			
			//file_get_contents -  Função que lê todo o conteúdo de um arquivo para uma string 
			//Parâmetro 1 ($url): it defines a set of directories where to look for an included/read file.
			//Parâmetro 2 (false): Define um conjunto de diretórios onde incluir/ler arquivos. Como estamos false, será lido do diretório padrão do PHP (Por default, é .:/usr/share/php).
			//Parâmetro 3 ($context): Parâmetros enviados por meio da requisição HTTP
			//transforma de resource para string
			$result = file_get_contents( $url, false, $context );
			
			//json_decode -  Função que lê todo o conteúdo de um arquivo para uma String/Array
			$response = json_decode( $result );
			echo "registro criado com sucesso";
		?>
	</body>
</html>
