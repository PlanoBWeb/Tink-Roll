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
		$smarty->assign("redir", "index.php");
		$smarty->display("mensagem.html");
		exit();
	}

	if ($_POST['search'] || $_POST['searchMobile']) {
		if ($_POST['searchMobile']) {
			$parametro['busca'] 		= $_POST['searchMobile'];	
		}else{
			$parametro['busca'] 		= $_POST['search'];	
		}
	//}elseif (!is_numeric($url[1])) {
	}elseif (!is_numeric($url[1]) && $url[1] != "") {
		$parametro['produtosCat'] 		= $url[1];	
	}else{
		$parametro['prodHiwin'] 		= "1";	
	}

	//  Paginação
	$retornoPag = $class->Pesquisar($parametro, null, null);
	if( $retornoPag[0] )
		die("<script>alert('".$retornoPag[1]."');location.href='home';</script>");

	$totalPorPagina = 9;
	$totalDeProdutos = count($retornoPag[1]);
	$conta = $totalDeProdutos / $totalPorPagina;
	$totalPaginas = ceil($conta);

	if (!(intval($url[1]) || intval($url[2]))) {
		$paginacao = 1;
	}else{
		if (intval($url[2])) {
			$paginacao = $url[2];
		}else{
			$paginacao = $url[1];	
		}
	}
	//  Fim Paginação

	$retorno 					= $class->Pesquisar($parametro, $totalPorPagina, $paginacao);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "index.php");
		$smarty->display("mensagem.html");
		exit();
	}

	// Busca ajax
	if ($parametro['busca']) {
		if ($retorno[1]) {
			echo '<ul class="carrega-busca-ajax">';
			foreach ($retorno[1] as $key) {
				echo '
					<li class="selectProduto">'.$key["titulo"].'</li>
				';
			}	
			echo '</ul>';
		}	
	}	
	// Busca ajax

	$Numpaginas = array();
	for($j=0; $j <= $totalPaginas; $j++) { 
		$Numpaginas[$j] = $j;
	}

	if ($_POST['searchMobile']) {
		$valorBusca		= $_POST['searchMobile'];	
	}else{
		$valorBusca 	= $_POST['search'];	
	}

	$smarty->assign("paginacao", $paginacao);
	$smarty->assign("valorBusca", $valorBusca);
	$smarty->assign("totalPaginas", $totalPaginas);
	$smarty->assign("Numpaginas", $Numpaginas);
	$smarty->assign("dadosCategoria", $retornoCategoria[1]);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("url", $url);
	$smarty->assign("pagina", $pagina);	
	$smarty->assign("URL", URL);
	$smarty->assign("menuLateral", "produtos");
	if (!$_POST['buscaAjax']) {
		$smarty->display("produtos.html");
	}
	exit;
?>