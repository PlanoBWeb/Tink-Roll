<?php /* Smarty version 2.6.12, created on 2015-11-26 18:38:28
         compiled from produto.html */ ?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow">
	<meta name="description" content="Empresa especializada em  <?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
" />
	<link href="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-tab.png" rel="icon">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/estilo.css">
	<title>Tinkroll – <?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
</title>
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
commom/img/banner-institucional.jpg" alt="banner produtos" title="banner produtos">
            <h3 class="titulo-banner-interna">produtos</h3>
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
                        <?php if ($this->_tpl_vars['dados'][0]['filePagina']): ?>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../templates/".($this->_tpl_vars['pagInclude']).".html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        <?php else: ?>
                            <h1 class="titulo-produto"><?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
</h1>
                            <h2 class="titulo-interna-destaque titulo-cor-cinza"><?php echo $this->_tpl_vars['dados'][0]['subTitulo']; ?>
</h2>
           
                            <div class="col-xs-12 col-sm-6 col-md-6 pd-none img-desc-prod">
                                <img class="img-produto" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][0]['caminhoImagem']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
" title="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
">
                            </div>
                            <!-- <div class="col-xs-12 col-sm-6 col-md-6 pd-none encapsula-txt-prod-pag"> -->
                                <p class="txt-interna"><?php echo $this->_tpl_vars['dados'][0]['descricao']; ?>
</p>
                                <div class="col-xs-12 col-sm-12 col-md-12 pd-none">
                                    <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                                        <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/categoria.png" title="categoria" alt="categoria">
                                        <p class="titulo-interna-destaque titulo-cor-cinza mg-left-desc-prod">Categoria</p>
                                        <h3 class="txt-interna mg-left-desc-prod"><?php echo $this->_tpl_vars['dados'][0]['tituloCat']; ?>
</h3>
                                    </div>   
                                    <?php if ($this->_tpl_vars['dados'][0]['caminhoPdf']): ?>
                                        <div class="col-xs-12 col-sm-6 col-md-6 pd-none encapsula-pdf-pag" >
                                            <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/manual.png" title="manual" alt="manual">
                                            <p class="titulo-interna-destaque titulo-cor-cinza mg-left-desc-prod">Manual (pdf)</p>
                                            <div class="mtlsr-images-for-lightbox">
                                                <ul>
                                                    <li>
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
                                                            <a href="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['caminhoPdf']; ?>
" target="_blank" >
                                                                <h3 class="txt-interna mg-left-desc-prod">
                                                                    <?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['tituloPdf']; ?>

                                                                </h3>
                                                            </a>
                                                        <?php endfor; endif; ?> 
                                                    </li>
                                                </ul>
                                            </div> 
                                            <div class="mtlsr-lightbox">
                                                <a href="#" class="close">&#9421;</a>
                                            </div>
                                        </div> 
                                    <?php endif; ?>
                                </div>
                            <!-- </div> -->
                        <?php endif; ?>
                    </div>
                    <div class="row bloco-form-produto">
                        <p class="solicite mg-top-none">Solicite um orçamento!</p><br>
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