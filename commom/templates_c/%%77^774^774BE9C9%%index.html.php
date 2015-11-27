<?php /* Smarty version 2.6.12, created on 2015-11-26 12:30:27
         compiled from index.html */ ?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow">
	<meta name="description" content="Empresa especialista em rolamentos e acessórios industriais." />
	<link href="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-tab.png" rel="icon">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/estilo.css">
	<title>Title Tinkroll - Rolamentos e Acessórios industriais.</title>
 	<!-- Bootstrap -->
    <link href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- vitrine -->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/vitrine/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/vitrine/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/vitrine/owl.transitions.css">
    <!-- vitrine -->
    <meta name="google-site-verification" content="EwRCJtTla3gsjdYtyrcQagRE87q4xHHM1_r6QYf9swM" />
  </head>
  <body>
    <div class="container-fluid">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <section class="conteudo">
            <div id="demo" class="vitrine-index">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <div id="owl-demo" class="owl-carousel">
                                <div class="item">
                                    <div class="bloco-desc-banner">
                                        <h2>Rolamentos para:</h2>
                                        <p>Construção Civil • Automobilístico • Ferroviário Papel e Celulose • Mineração • Siderurgia e muito mais!</p>
                                    </div>
                                    <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/banner.jpg" alt="banner" title="banner">
                                </div>
                                <!-- <div class="item"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/banner.jpg" alt="banner" title="banner"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <article class="bloco-destaque-home">
                <div class="bloco-encapusla-conteudo">
                    <div class="col-xs-12 col-sm-6 col-md-6 vitrine-slides bloco-border-right pd-right-destaque">
                        <h3 class="titulo-sobre">conheça nossos produtos</h3>
                        <div class="linha-separador"></div>
                        <div class="bloco-roda-vitrine">
                            <div class="encapsula-produto-vitrine">
                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosProd']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                    <div class="col-xs-12 col-sm-4 col-md-4 pd-produto-destaque produto-vitrine">
                                        <div class="bloco-produto-destaque">
                                            <img class="img-produto-destaque" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosProd'][$this->_sections['i']['index']]['caminhoThumb']; ?>
" alt="Produto" title="Produto">
                                            <a href="<?php echo $this->_tpl_vars['URL']; ?>
produto/<?php echo $this->_tpl_vars['dadosProd'][$this->_sections['i']['index']]['urlAmigavel']; ?>
" class="titulo-produto-destaque"><?php echo $this->_tpl_vars['dadosProd'][$this->_sections['i']['index']]['titulo']; ?>
</a>
                                        </div>
                                    </div>
                                <?php endfor; endif; ?> 
                                <!-- <div class="col-xs-12 col-sm-4 col-md-4 pd-produto-destaque produto-vitrine">
                                    <div class="bloco-produto-destaque">
                                        <img class="img-produto-destaque" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/produto.png" alt="Produto" title="Produto">
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="titulo-produto-destaque">Produto teste</a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="setas-produto-destaque">
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
" id="prev" class="pull-left"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/btn-left.png" alt="Seta esquerda" title="Seta esquerda"></a>
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
" id="next" class="pull-right"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/btn-right.png" alt="Seta direita" title="Seta direita"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 pd-left-destaque">
                        <h3 class="titulo-sobre">Vídeo - Sistema de Movimentação Integrado</h3>
                        <div class="linha-separador"></div>
                        <iframe class="video-destaque" src="https://www.youtube.com/embed/M_kvXDqfrJs"></iframe>
                    </div>
                </div>
            </article>    
            <div class="row">
                <div class="bloco-encapusla-conteudo">
                    <div class="col-xs-12 col-sm-6 col-md-6 bloco-border-right pd-right-destaque">
                        <h3 class="titulo-sobre">notícias</h3>
                        <div class="linha-separador"></div>
                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dados']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>                 
                            <div class="row noticia-ind-destaque">
                                <img class="img-noticia-destaque" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['caminhoImagem2']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['titulo']; ?>
" title="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['titulo']; ?>
">
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
noticia/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['pagina']; ?>
" class="link-not-destaque"><h2><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['titulo']; ?>
</h2>
                                    <span class="txt-not-destaque"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['texto']; ?>

                                    </span>
                                    <span class="cont-not-destaque">Continuar lendo »</span>
                                </a>
                            </div>      
                        <?php endfor; endif; ?>      
                    </div>  
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-tel-conteudo.png" title="Fale Conosco" alt="Fale Conosco">
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9">
                                <h3 class="titulo-sobre">Fale conosco!</h3>
                                <div class="linha-separador"></div>
                                <div class="noticia-ind-destaque">
                                    <p class="link-not-destaque">Dúvidas, sugestões ou reclamações, fale conosco! Temos uma equipe especializada com vasta experiência.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/arroba.png" title="Fale Conosco" alt="Fale Conosco">
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9">
                                <h3 class="titulo-sobre">Receba nossa newsletter</h3>
                                <div class="linha-separador"></div>
                                <div class="noticia-ind-destaque">
                                    <form name="news" action="" method="post"> 
                                        <input type="hidden" name="acao" value="newsletter">
                                        <div class="form-group">
                                            <input type="text" name="nome" class="form-control" placeholder="*Nome">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="*e-mail">
                                        </div>
                                        <button type="submit" class="btn btn-default btn-news pull-right" onclick="return enviarNews();">enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>            
                </div>  
            </div>    
        </section>
    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>