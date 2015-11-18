<?php
	include_once "configs/config.php";
	include_once "url.php";
	include_once "classes/Categoria.class.php";
	include_once "classes/Produto.class.php";
	$class 			= new Produto();
	$classCategoria = new Categoria();

	$retornoCategoria = $classCategoria->Pesquisar($_POST, null, null);
	if( $retornoCategoria[0] )
	{
		$smarty->assign("mensagem", $retornoCategoria[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}

	// $parametro['produtosCat'] 	= $url[1];
	// $parametro['produto'] 		= $url[2];
	$parametro['produto'] 		= $url[1];
	// $parametro['produtosCat'] 	= $_POST['search'];
	$retorno 					= $class->Pesquisar($parametro, null, null);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}

	$smarty->assign("pagInclude", $retorno[1][0]['filePagina']);
	$smarty->assign("dadosCategoria", $retornoCategoria[1]);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("url", $url);
	$smarty->assign("pagina", $pagina);	
	$smarty->assign("URL", URL);
	$smarty->assign("menuLateral", "produtos");
	$smarty->assign("menuLateral", "produtos");
	$smarty->display("produto.html");
	exit;
?>
?>