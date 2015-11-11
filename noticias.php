<?php
	include_once "configs/config.php";
	include_once "classes/Noticias.class.php";
	include_once "url.php";
	$class = new Noticias();

	if ($url[1] == "Janeiro") {
		$mesBreadCrumb = $url[1];
	}elseif ($url[1] == "Fevereiro") {
		$mesBreadCrumb = $url[1];
	}elseif ($url[1] == "Marco") {
		$mesBreadCrumb = $url[1];
	}elseif ($url[1] == "Abril") {
		$mesBreadCrumb = $url[1];
	}elseif ($url[1] == "Maio") {
		$mesBreadCrumb = $url[1];
	}elseif ($url[1] == "Junho") {
		$mesBreadCrumb = $url[1];
	}elseif ($url[1] == "Julho") {
		$mesBreadCrumb = $url[1];
	}elseif ($url[1] == "Agosto") {
		$mesBreadCrumb = $url[1];
	}elseif ($url[1] == "Setembro") {
		$mesBreadCrumb = $url[1];
	}elseif ($url[1] == "Outubro") {
		$mesBreadCrumb = $url[1];
	}elseif ($url[1] == "Novembro") {
		$mesBreadCrumb = $url[1];
	}elseif ($url[1] == "dezembro") {
		$mesBreadCrumb = $url[1];
	}else{
		$mesBreadCrumb = "";
	}

	if ($url[1] == "") {
		$dateAtual = explode("/",date("d/m/Y"));
		$parametro['ano'] 	= $dateAtual[2];
		$parametro['mes'] 	= $dateAtual[1];	
	}else{
		$parametro['ano'] 	= $url[1];
		$parametro['mes'] 	= $url[2];	
	}	
	$retorno			= $class->Pesquisar($parametro, null, null);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}

	$retornoMenuLateral	= $class->PesquisarMenuLateral($parametro);
	if( $retornoMenuLateral[0] )
	{
		$smarty->assign("mensagem", $retornoMenuLateral[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}

	$smarty->assign("mesBreadCrumb", $mesBreadCrumb);
	$smarty->assign("url", $url);
	$smarty->assign("pagina", $pagina);	
	$smarty->assign("dadosMenuLateral", $retornoMenuLateral[1]);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("URL", URL);
	$smarty->assign("menuLateral", "noticias");
	$smarty->display("noticias.html");
?>