<?php /* Smarty version 2.6.12, created on 2015-11-09 16:54:31
         compiled from localizacao.html */ ?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow">
	<meta name="description" content="" />
	<link href="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-tab.png" rel="icon">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/estilo.css">
	<title>Tink Roll</title>
 	<!-- Bootstrap -->
    <link href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="banner-interna hidden-xs">
            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/banner-institucional.jpg" alt="banner institucional" title="banner institucional">
            <h1 class="titulo-banner-interna">Localização</h1>
        </div>        
        <section class="conteudo">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <article class="bloco-conteudo">
                <div class="col-xs-12 col-sm-6 col-md-6 mapa-local">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.425717952524!2d-46.60248448502104!3d-23.624920384651286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5b6453d4695b%3A0x109148dc3a61cea4!2sR.+Bertolina+Maria%2C+54+-+Vila+Vermelha%2C+S%C3%A3o+Paulo+-+SP%2C+04298-090!5e0!3m2!1spt-BR!2sbr!4v1446741558207" allowfullscreen></iframe>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <h2 class="titulo-interna-destaque mg-top-none">Conheça nossa loja!</h2><br><br>
                    <h3 class="titulo-interna-destaque titulo-cor-cinza">Localização:</h3>
                    <p class="txt-interna mg-bottom-none">Rua Bertolina Maria, 54</p>
                    <p class="txt-interna mg-bottom-none">Vila Vermelha - São Paulo - SP</p>
                    <p class="txt-interna mg-bottom-none">Cep.: 04298-090</p><br><br>

                    <h3 class="titulo-interna-destaque titulo-cor-cinza">Contato:</h3>

                    <p class="txt-interna mg-bottom-none">Fone/Fax: <a href="<?php echo $this->_tpl_vars['URL']; ?>
tel:01134290600">(11) 3429-0600</a> / <a href="<?php echo $this->_tpl_vars['URL']; ?>
tel:01129461300" class="txt-interna"> 2946-1300</a></p>
                    <p class="txt-interna">Email: <a href="<?php echo $this->_tpl_vars['URL']; ?>
mailto:tinkroll@tinkroll.com.br"> tinkroll@tinkroll.com.br </a></p>
                </div>
            </article>    
        </section>
    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>