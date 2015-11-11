<?php
if (empty($_POST['nome'])|| empty($_POST['email'])|| empty($_POST['telefone'])|| empty($_POST['onde'])|| empty($_POST['msg'])) {
   header("Location: index.php"); 
} else { 
  $ip = $_SERVER['REMOTE_ADDR'];
  $data = date("d/m/y");
  $hora = date("H:i"); 

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $onde = $_POST['onde'];
  $telefone = $_POST['telefone'];
  $msg = $_POST['msg'];

  $cont = "$ip\r\n";
  $cont .= "$data\r\n";
  $cont .= "$hora\r\n\r\n";
  $cont .= "Nome: \t$nome\r\n";
  $cont .= "E-mail: \t$email\r\n";
  $cont .= "Telefone: \t$telefone\r\n";
  $cont .= "Onde nos encontrou: \t$onde\r\n";
  $cont .= "\r\nMensagem: \n";
  $cont .= "$msg";

  $headers 	= "MIME-Version: 1.1\r\n";
  $headers 	.= "Content-type: text/plain; charset=UTF-8\n";
  $assunto 	.= "Tink Roll - Contato";
  $conteudo 	.= "$cont\r\n";
  $headers 	.= "From: joseygor@planobweb.com.br\n"; 
  $headers 	.= "Return-Path: joseygor@planobweb.com.br\r\n"; 
  //$headers 	.= "Bcc: contato@planobweb.com.br\r\n"; // cópia
  $headers 	.= "Reply-To: $email\n";
  $envio 		= mail("joseygor@planobweb.com.br", $assunto,$conteudo,$headers);
  
  echo "<script>location.href ='obrigado-contato'</script>";
}

?>

