<?php

include_once "adm_login.php";
include_once "classes/Noticias.class.php";
$class = new Noticias();

$pagina = "produto";

$smarty->assign("titulo", utf8_encode(TITULO));
$smarty->assign("nome", $_SESSION['nome']);

if( $_POST['acao'] == "gravar" )
{
	$idProduto = 0;
	if( $_POST['id'] )
	{
		$idProduto = $_POST['id'];
		$retorno = $class->Altera($_POST, $_FILES["arquivo"], $_FILES["arquivo2"]);
		$smarty->assign("mensagem", $retorno[1]);

		$idProduto = $retorno[2];
	}
	else
	{
		$retorno = $class->Grava($_POST, $_FILES["arquivo"], $_FILES["arquivo2"]);
		$smarty->assign("mensagem", $retorno[1]);

		$idProduto = $retorno[2];
	}
	
	$smarty->assign("mensagem", utf8_encode($retorno[1]));
	$smarty->assign("redir", "adm_" . $pagina . ".php?acao=visualizar&id=".$idProduto);
	$smarty->display("mensagem.html");
	exit();
}
elseif( $_GET['acao'] == "pesquisar" )
{
	$retorno 			= $class->Pesquisar($_POST, null, null);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	$smarty->assign("dados", $retorno[1]);
	$smarty->display('admin/' . $pagina . '/relacao.html');
	exit;
}
elseif( $_GET['acao'] == "visualizar" )
{
	$parametro['id'] = $_GET['id'];
	$retorno = $class->Pesquisar($parametro, null, null);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}

	$parametroCategoria['idProduto'] = $_GET['id'];
	$retornoCategoria = $class->Pesquisar_Produto_Categoria($parametroCategoria);

	if( $retornoCategoria[0] )
	{
		$smarty->assign("mensagem", $retornoCategoria[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}

	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("dadosCategoria", $retornoCategoria[1]);
	$smarty->display("admin/" . $pagina . "/visualizar.html");
	exit;
}
elseif( $_GET['acao'] == "editar" )
{
	$parametro['id'] 		= $_GET['id'];
	$parametro['categoria'] = "1";
	$retorno = $class->Pesquisar($parametro, null, null);
	
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}

	$retornoCategoria = $classCategoria->Pesquisar(null);
	if( $retornoCategoria[0] )
	{
		$smarty->assign("mensagem", $retornoCategoria[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}

	$smarty->assign("dadosCategoria", $retornoCategoria[1]);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("botao", "Alterar");
	$smarty->display("admin/" . $pagina . "/dados.html");
	exit;
}
elseif( $_GET['acao'] == "exclui" )
{
	$retorno = $class->Exclui($_GET['id']);
	
	$smarty->assign("mensagem", utf8_encode($retorno[1]));
	$smarty->assign("redir", "adm_" . $pagina . ".php?acao=pesquisar");
	$smarty->display("mensagem.html");
	exit();
}

$retornoCategoria 	= $classCategoria->Pesquisar($_POST, null, null);

$smarty->assign("dadosCategoria", $retornoCategoria[1]);
$smarty->assign("botao", "Gravar");
$smarty->display("admin/" . $pagina . "/dados.html");
exit();

?>