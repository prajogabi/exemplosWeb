<!DOCTYPE html>
<html>
<head>
<script>
function mostraDica(str) {
  if (str.length == 0) {
    document.getElementById("txtmostradica").innerHTML = "";
    return;
  } else {
	  
	//O objeto XMLHttpRequest envia um pedido ao servidor e 
	//recebe resposta do servidor  (depois do carregamento da página)
	//O objeto XMLHttpRequest pode ser usado para fazer um pedido ao servidor	
	//O objeto XMLHttpRequest é o sonho do desenvolvedor web, porque você pode:
	//->Atualizar uma página web sem carregar toda.
	//->Solicitar dados ao servidor - depois que a página é carregada
	//->Pedir dados ao servidor - depois que a página é carregada
	//-> Enviar dados ao servidor - em background
    var xmlhttp = new XMLHttpRequest();
	
	//A  propriedade onreadystatechange é disparada sempre que a propriedade readyState
	//do XMLHttpRequest é alterada
	// A função será executada, caso ocorra alguma resquisição ao servidor
    xmlhttp.onreadystatechange = function() {
		
	//Se o readyStaty for igual a 4 , significa que o pedido foi enviado ao servidor e retornou com a resposta. O Ajax tem 5 tipos de estados. https://www.w3schools.com/xml/ajax_xmlhttprequest_response.asp
	//Se o status for igual a 200, significa que a conexão está OK!
	//status: https://www.w3schools.com/xml/ajax_xmlhttprequest_response.asp
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtmostradica").innerHTML = this.responseText;
      }
    }
	
	//sintaxe: open(método, url, assincrono)
    xmlhttp.open("GET", "19getdica.php?q="+str, true);
	//disparando requisição
    xmlhttp.send();
  }
}
</script>
</head>
<body>

<p><b>Inicie digitando uma letra na caixa de texto a seguir:</b></p>
<form action="">
  <label for="fname">Nome:</label>
  <input type="text" id="fname" name="fname" onkeyup="mostraDica(this.value)">
</form>
<p>Sugestão: <span id="txtmostradica"></span></p>

</body>
</html>