<?php
	include_once "configs/config.php";
	include_once "url.php";

	$smarty->assign("url", $url);
	$smarty->assign("URL", URL);
	$smarty->assign("pagina", $pagina);
	$smarty->assign("urlMarca", $url[1]);
	$marcas 	= array("bgl", "hiwin", "ina-flag", "ktr", "nachi", "metalflex-acoplamentos", "rolmax", "sabo", "sav", "skf", "timken");
	if (in_array($url[1], $marcas)) {
		$smarty->assign("menuLateral", "marca");
		$smarty->display("marca.html");	
	}else{
		$smarty->assign("menuLateral", "marca");
		$smarty->display("marcas.html");	
	}
	
?>