<?php /* Smarty version 2.6.12, created on 2015-11-26 17:55:48
         compiled from produtos.html */ ?>
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
	<title>Tinkroll – Conheça nossos produtos!</title>
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
            <p class="titulo-banner-interna">produtos</p>
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
                    <h1 class="titulo-interna-destaque titulo-cor-cinza">&nbsp;&nbsp;<?php echo $this->_tpl_vars['dados'][0]['tituloCat']; ?>
</h1><br>
                    <?php if ($this->_tpl_vars['dados'] < 1): ?>
                        <center><p class="titulo-produto">Nenhum resultado encontrado</p> </center>
                    <?php else: ?>
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
                            <div class="col-xs-12 col-sm-4 col-md-4 pd-produto">
                                <div class="encapsula-produto">
                                    <?php if ($this->_tpl_vars['dados'][$this->_sections['i']['index']]['hiwin']): ?>
                                        <div class="produto-especial"></div>
                                    <?php endif; ?>
                                    <img src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['caminhoThumb']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['titulo']; ?>
" title="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['titulo']; ?>
">
                                    <div class="titulo-and-sub-prod">
                                        <h2 class="titulo-produtos"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
/"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['titulo']; ?>
</a></h2>
                                        <h3 class="sub-titulo-produtos"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['subTitulo']; ?>
</h3>
                                    </div>
                                    <a class="saiba-mais" href="<?php echo $this->_tpl_vars['URL']; ?>
produto/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
/" title="saiba mais sobre esse produto">Saiba mais</a>
                                </div>
                            </div>
                        <?php endfor; endif; ?> 
                        <?php if ($this->_tpl_vars['totalPaginas'] > 1): ?>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="pull-right">
                                        <?php unset($this->_sections['i']);
$this->_sections['i']['start'] = (int)1;
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Numpaginas']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
                                            <a  class="txt-interna" href="<?php echo $this->_tpl_vars['URL']; ?>
produtos/<?php if ($this->_tpl_vars['url'][1]):  echo $this->_tpl_vars['url'][1]; ?>
/<?php endif;  echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
">
                                                <?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>

                                            </a>
                                        <?php endfor; endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
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