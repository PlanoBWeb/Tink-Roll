<?php

// Data no passado
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

// Sempre modificado
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

// HTTP/1.1
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);

// HTTP/1.0
header("Pragma: no-cache");

session_start();

require $path.'libs/Smarty.class.php';

$smarty = new Smarty;
/*
$smarty->compile_check = false;
$smarty->caching = false;
$smarty->debugging = false;
*/

/* MyADMIN - http://phpmyadmin.locaweb.com.br/ */
if( $_SERVER['SERVER_NAME'] == 'planobweb' || $_SERVER['SERVER_NAME'] == '192.168.0.105')
{
	define("db_host", 'localhost');
	define("db_user", 'root');
	define("db_pass", '');
	define("db_base", 'tinkroll');
	define("PATH_SERVIDOR","C:/wamp/www/Clientes/TinkRoll/Web/");
	if ($_SERVER['SERVER_NAME'] == '192.168.0.105') {
		define("URL","http://192.168.0.105/clientes/TinkRoll/Web/");
	}else{
		define("URL","http://planobweb/clientes/TinkRoll/Web/");
	}
}
else
{
	/* DADOS Online  */
	define("db_host", '179.188.16.43');
	define("db_user", 'planobweb212');
	define("db_pass", 'teste123');
	define("db_base", 'planobweb212');
	//define("PATH_SERVIDOR","E:/Home/planobweb2/Web/extranet/");
	define("URL","http://planobweb/clientes/TinkRoll/Web/");
}

//Acesso ao MyAdmin
$resultado=mysql_connect(db_host, db_user, db_pass);
if (!($resultado)) {
	echo "Erro ao conectar-se ao MySQL<br>";
}

//Acesso ao Banco de Dados
$resultado = mysql_select_db(db_base);
if (!($resultado)) {
	echo "Erro ao conectar-se ao Banco de Dados";
}

define("TITULO","TinkRoll");


?>