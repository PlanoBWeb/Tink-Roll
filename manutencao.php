<?php
	include_once "configs/config.php";
	include_once "url.php";
		
	$smarty->assign("url", $url);
	$smarty->assign("pagina", $pagina);
	$smarty->assign("URL", URL);
	$smarty->display("manutencao.html");
?>