<?php /* Smarty version 2.6.12, created on 2015-11-11 17:48:57
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
            <article class="bloco-conteudo bloco-conteudo-pag">
                <div class="col-xs-12 col-sm-3 col-md-3 encapsula-menu-lateral-pag">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/menu-lateral.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9">
                    <div class="row">
                        <h1 class="titulo-produto">Acoplamentos - Linha M</h1>
                        <h2 class="titulo-interna-destaque titulo-cor-cinza">Acoplamentos</h2>
                        <div class="col-xs-12 col-sm-12 col-md-12 pd-none">


                            <div class="col-xs-6 col-sm-3 col-md-3 pd-none">
                                <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/categoria.png" title="categoria" alt="categoria">
                                <p class="titulo-interna-destaque titulo-cor-cinza mg-left-desc-prod">Categoria</p>
                                <p class="txt-interna mg-left-desc-prod">Acoplamentos</p>
                            </div>   
                            <div class="col-xs-6 col-sm-3 col-md-3 pd-none">
                                <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-dimensionamento.png" title="dimensionamento" alt="dimensionamento">
                                <p class="titulo-interna-destaque titulo-cor-cinza mg-left-desc-prod">Dimensionamento</p>
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="txt-interna mg-left-desc-prod">Acoplamentos</a>
                            </div> 
                            <div class="col-xs-6 col-sm-3 col-md-3 pd-none">
                                <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-especificacao.png" title="especificação" alt="especificação">
                                <p class="titulo-interna-destaque titulo-cor-cinza mg-left-desc-prod">Especificações Técnicas</p>
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="txt-interna mg-left-desc-prod">Acoplamentos</a>
                            </div> 
                            <div class="col-xs-6 col-sm-3 col-md-3 pd-none encapsula-pdf-pag" >
                                <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/manual.png" title="manual" alt="manual">
                                <p class="titulo-interna-destaque titulo-cor-cinza mg-left-desc-prod">Manual (pdf)</p>
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="txt-interna mg-left-desc-prod">Acoplamentos</a>
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="txt-interna mg-left-desc-prod">Acoplamentos</a>
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="txt-interna mg-left-desc-prod">Acoplamentos</a>
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="txt-interna mg-left-desc-prod">Acoplamentos</a>
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="txt-interna mg-left-desc-prod">Acoplamentos</a>
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="txt-interna mg-left-desc-prod">Acoplamentos</a>
                            </div> 


                        </div>
                        <div class="encapsula-conteudo-produto-pag">

                            <?php if ($this->_tpl_vars['dados'][0]['filePagina']): ?>
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../templates/".($this->_tpl_vars['pagInclude']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>                                
                            <?php else: ?>
                                <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                                    <img class="img-produto pull-left" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][0]['caminhoImagem']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
" title="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
">
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 pd-none encapsula-txt-prod-pag">
                                    <p class="txt-interna"><?php echo $this->_tpl_vars['dados'][0]['descricao']; ?>
</p>
                                </div>
                            <?php endif; ?>
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