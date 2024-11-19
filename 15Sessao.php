<?php
/*
localstorage:
*NUNCA EXPIRA-Os dados ficam lá enquanto não apagarmos por código ou 
pelo próprio navegador.
Se abrir outro navegado outra hash é criada para o usuário
*ALOCAÇÃO MÁXIMA de 10mb

Session:
*A SESSION EXPIRA-Duram enquanto o usuário está com o navegador aberto
setando que expira em 30 minutos session_cache_expire(30);
*ALOCAÇÃO MÁXIMA no php.ni memory_limit


Cookie:
*O COOKIE EXPIRA 
*Precisa da permissão do navegador. 
*ALOCAÇÃO MÁXIMA de 4kb - 
Entre os três, os cookies contêm a menor quantidade de dados.
> Configurações >>Privacidade e Segurança (Firefox)
*/

session_start(); //usar sempre para manipular sessão

//CRIA OS PARES DE CHAVES-VALORES DA SESSÃO
$_SESSION['id']="123456";
$_SESSION['usuario']="marta";

//session_id() - GERA HASH ÚNICO para o usuário
//Um visitante acessando o seu web site ganha um identificador único, o assim chamado id de sessão.
echo "id: " . $_SESSION['id']."<br> usuário: ".$_SESSION['usuario']." <br>". session_id();


//https://javascript.plainenglish.io/cookie-vs-session-vs-local-storage-why-cookies-are-usually-not-the-best-option-4b09de8fb0f3
?>