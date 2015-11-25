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

	if ($url[1]) {
		$parametro['produtosCat'] 	= $url[1];	
	}elseif ($_POST['search']) {
		$parametro['busca'] 		= $_POST['search'];	
	}else{
		$parametro['prodHiwin'] 		= "1";	
	}
	$retorno 					= $class->Pesquisar($parametro, null, null);
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
			foreach ($retorno[1] as $key) {
				echo '
					<ul class="carrega-busca-ajax">					    		
						<li class="selectProduto">'.$key["titulo"].'</li>
					</ul>
				';
			}	
		}	
	}	
	// Busca ajax

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