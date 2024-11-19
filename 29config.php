<?php

$db_user='root';
$db_password='usbw';
$db_name='sistemalogin';

/*para conectar ao POSTGRESQL "pgsql:host=$host;port=5432*/

//$db= new PDO('mysql:host=localhost;dbname='. $db_name . ';charset=utf8', $db_user,$db_password);
$db= new PDO('mysql:host=127.0.0.1;port=33066;dbname='. $db_name . ';charset=utf8', $db_user,$db_password);

//alguns atributos de performance.
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//define('APP_NAME', 'PHP REST API TUTORIAL - PROFA MARTA');


?>