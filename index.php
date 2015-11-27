<?php
	$url = $_SERVER['REQUEST_URI'];
	$url = substr($url, 1);
	$url = str_replace("clientes/TinkRoll/Web/", "", $url);
	// $url = str_replace("Homologacao/", "", $url);
	$url = explode('/', $url);
	
	$permissao  = array('home', 'index', 'institucional', 'localizacao','produtos', 'marcas', 'fale-conosco', 'envia', 'obrigado-contato', 'obrigado-news', 'obrigado-orcamento', 'produto', 'noticias', 'noticia', 'manutencao');
	$marcas 	= array("bgl", "hiwin", "ina-flag", "ktr", "nachi", "metalflex-acoplamentos", "rolmax", "sabo", "sav", "skf", "timken");

	if ($url[0] == "" || $url[0] == "index") {
		include "home.php";
	}elseif ($url[0] == "admin") {
		include "admin/index.php";
	}elseif(in_array($url[0], $marcas) ){
		include "marcas.php";
	}
	else{
		if (in_array($url[0], $permissao)) {
			include $url[0].".php";
		}else{
			include "erro.php";
		}
	}
?>