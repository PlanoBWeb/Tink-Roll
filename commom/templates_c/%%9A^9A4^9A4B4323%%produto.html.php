<?php /* Smarty version 2.6.12, created on 2015-11-10 16:14:50
         compiled from produto.html */ ?>
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
                    <div class="row">
                        <h2 class="titulo-interna-destaque titulo-cor-cinza">&nbsp;&nbsp;Acoplamentos</h2><br>
                        
                        <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                            <img class="img-produto pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/produto-detalhe.jpg" alt="produto" title="produto">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                            <h1 class="titulo-produto">Acoplamentos - Linha M</h1>
                            <p class="txt-interna">Os acoplamentos de grades elásticas METALFLEX tipo M são torcionalmente flexíveis e estão disponíveis em 17 tamanhos, permitindo furações de até 235mm e transmitem torque de até 53.781 Nm. Esses acoplamentos podem ser utilizados tanto em posição vertical quanto horizontal, pois sua exclusiva vedação evita a entrada de impurezas e perda de lubrificante.</p>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                                    <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/categoria.png" title="categoria" alt="categoria">
                                    <p class="titulo-interna-destaque titulo-cor-cinza mg-left-desc-prod">Categoria</p>
                                    <p class="txt-interna mg-left-desc-prod">Acoplamentos</p>
                                </div>   
                                <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                                    <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/manual.png" title="manual" alt="manual">
                                    <p class="titulo-interna-destaque titulo-cor-cinza mg-left-desc-prod">Manual (pdf)</p>
                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="txt-interna mg-left-desc-prod">Acoplamentos</a>
                                </div>        
                            </div>
                        </div>
                    </div>

                    <div class="row bloco-form-produto">
                        <h1 class="solicite mg-top-none">Solicite um orçamento!</h1><br>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/form.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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