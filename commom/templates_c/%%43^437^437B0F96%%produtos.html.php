<?php /* Smarty version 2.6.12, created on 2015-11-06 12:46:00
         compiled from produtos.html */ ?>
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
            <h1 class="titulo-banner-interna">produtos</h1>
        </div>        
        <section class="conteudo">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <article class="bloco-conteudo">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/menu-lateral.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9">
                    <h2 class="titulo-interna-destaque titulo-cor-cinza">&nbsp;&nbsp;Produtos</h2><br>
                    
                    <div class="col-xs-12 col-sm-4 col-md-4 pd-produto">
                        <div class="encapsula-produto">
                            <div class="produto-especial"></div>
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/produto.jpg" alt="produto" title="produto">
                            <h2 class="titulo-produtos"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto">Mancais</a></h2>

                            <a class="saiba-mais" href="<?php echo $this->_tpl_vars['URL']; ?>
produto" title="saiba mais sobre esse produto">Saiba mais</a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 pd-produto">
                        <div class="encapsula-produto">
                            <div class="produto-especial"></div>
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/produto.jpg" alt="produto" title="produto">
                            <h2 class="titulo-produtos"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto">Mancais</a></h2>

                            <a class="saiba-mais" href="<?php echo $this->_tpl_vars['URL']; ?>
produto" title="saiba mais sobre esse produto">Saiba mais</a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 pd-produto">
                        <div class="encapsula-produto">
                            <div class="produto-especial"></div>
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/produto.jpg" alt="produto" title="produto">
                            <h2 class="titulo-produtos"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto">Mancais</a></h2>

                            <a class="saiba-mais" href="<?php echo $this->_tpl_vars['URL']; ?>
produto" title="saiba mais sobre esse produto">Saiba mais</a>
                        </div>
                    </div>

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