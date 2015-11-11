<?php
	include_once "configs/config.php";
	include_once "classes/Noticias.class.php";
	$class = new Noticias();

	include_once "classes/Newsletter.class.php";
	$classNewsletter = new Newsletter();

	$retorno	= $class->Pesquisar($_GET, 2, 1);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}

	if ($_POST['acao'] == 'newsletter') {

		$parametro['email'] = $_POST['email'];
		$parametro['nome']  = $_POST['nome'];
		$retorno	= $classNewsletter->Grava($parametro);

		if( $retorno[0] )
		{
			$smarty->assign("mensagem", $retorno[1]);
			$smarty->assign("redir", "home");
			$smarty->display("mensagem.html");
			exit();
		}

		if (empty($_POST['nome'])|| empty($_POST['email'])) 
		{
		   	header("Location: home"); 
		} else { 
			$ip = $_SERVER['REMOTE_ADDR'];
			$data = date("d/m/y");
			$hora = date("H:i"); 

			$nome = $_POST['nome'];
			$email = $_POST['email'];

			$cont = "$ip\r\n";
			$cont .= "$data\r\n";
			$cont .= "$hora\r\n\r\n";
			$cont .= "Nome: \t$nome\r\n";
			$cont .= "E-mail: \t$email\r\n";

			$headers 	= "MIME-Version: 1.1\r\n";
			$headers 	.= "Content-type: text/plain; charset=UTF-8\n";
			$assunto 	.= "Tink Roll - Newsletter";
			$conteudo 	.= "$cont\r\n";
			$headers 	.= "From: joseygor@planobweb.com.br\n"; 
			$headers 	.= "Return-Path: joseygor@planobweb.com.br\r\n"; 
			//$headers 	.= "Bcc: contato@planobweb.com.br\r\n"; // cópia
			$headers 	.= "Reply-To: $email\n";
			$envio 		= mail("joseygor@planobweb.com.br", $assunto,$conteudo,$headers);

			echo utf8_decode("<script>alert('Cadastro enviado com sucesso.');location.href ='home'</script>");
		}

	}

	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("URL", URL);
	$smarty->display("index.html");
?>