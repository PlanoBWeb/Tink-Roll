<?php /* Smarty version 2.6.12, created on 2015-11-26 16:23:55
         compiled from marca.html */ ?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow">
	<meta name="description" content="Empresa fornecedora de produtos <?php echo $this->_tpl_vars['urlMarca']; ?>
" />
	<link href="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-tab.png" rel="icon">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/estilo.css">
	<title>Tinkroll – fornecedora da  <?php echo $this->_tpl_vars['urlMarca']; ?>
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
commom/img/banner-institucional.jpg" alt="banner marcas" title="banner marcas">
            <h2 class="titulo-banner-interna">marcas</h2>
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
                    <h2 class="titulo-interna-destaque titulo-cor-cinza">&nbsp;&nbsp;Marcas</h2><br>

                    <?php if ($this->_tpl_vars['urlMarca'] == 'bgl'): ?>
                        <div class="row">
                            <img class="img-marcas mg-top-none" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bgl.jpg" alt="bgl" title="bgl">
                            <h1 class="titulo-sobre mg-top-none">bgl</h1>
                            <p class="txt-interna">O Grupo Schaeffler desenvolve e produz sob as marcas INA e FAG, mundialmente, rolamentos, mancais, guias lineares e componentes de motores para a ferramentaria, indústria automobilística e aeronáutica.</p>
                        </div>
                        <ul>
                            <li class="txt-interna-lista"><a href="<?php echo $this->_tpl_vars['URL']; ?>
">Catálogo</a></li>
                        </ul>
                        
                          

                    <?php elseif ($this->_tpl_vars['urlMarca'] == 'hiwin'): ?>
                        <div class="row">
                            <img class="img-marcas mg-top-none" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/hiwin.jpg" alt="hiwin" title="hiwin">
                            <h1 class="titulo-sobre mg-top-none">hiwin</h1>
                            <p class="txt-interna">O Grupo Schaeffler desenvolve e produz sob as marcas INA e FAG, mundialmente, rolamentos, mancais, guias lineares e componentes de motores para a ferramentaria, indústria automobilística e aeronáutica.</p>
                            <!-- <p class="txt-interna">  </p> -->
                        </div>
                        <div class="row">
                            <ul>
                                <li class="txt-interna-lista">Ball Screws</li>
                                <li class="txt-interna-lista">Linear Guideways</li>
                                <li class="txt-interna-lista">Linear Motors</li>
                                <li class="txt-interna-lista">Linear Stages (KK Type)</li>
                                <li class="txt-interna-lista">Linear Stages (KS Type)</li>
                                <li class="txt-interna-lista">Linear Actuators</li>
                                <li class="txt-interna-lista">Linear Bearings</li>
                                <li class="txt-interna-lista">Linear Encoders-PMS</li>
                            </ul>
                        </div>

                    <?php elseif ($this->_tpl_vars['urlMarca'] == "ina-flag"): ?>
                        <div class="row">
                            <img class="img-marcas mg-top-none" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/ina.jpg" alt="ina flag" title="ina flag">
                            <h1 class="titulo-sobre mg-top-none">INA FAG</h1>
                            <p class="txt-interna">O Grupo Schaeffler desenvolve e produz sob as marcas INA e FAG, mundialmente, rolamentos, mancais, guias lineares e componentes de motores para a ferramentaria, indústria automobilística e aeronáutica.</p>
                        </div>
                        <ul>
                            <li class="txt-interna-lista"><a href="http://medias.schaeffler.de/medias">Catálogo</a></li>
                        </ul>

                    <?php elseif ($this->_tpl_vars['urlMarca'] == 'ktr'): ?>
                        <div class="row">
                            <img class="img-marcas mg-top-none" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/ktr.jpg" alt="ktr" title="ktr">
                            <h1 class="titulo-sobre mg-top-none">ktr</h1>
                            <p class="txt-interna">O Grupo Schaeffler desenvolve e produz sob as marcas INA e FAG, mundialmente, rolamentos, mancais, guias lineares e componentes de motores para a ferramentaria, indústria automobilística e aeronáutica.</p>
                        </div>
                        <div class="row">
                            <ul>
                                <li class="txt-interna-lista"><a href="https://www.ktr.com/en/products/power-transmission-technology/couplings/flexible-jaw-and-pin-bush-couplings/rotex/rotex-standard/" target="_blank">ROTEX</a></li>
                                <li class="txt-interna-lista"><a href="http://www.ktr.com/en/products/couplings/polynorm/950_ar.htm?frame=br" target="_blank">POLY-NORM</a></li>
                                <li class="txt-interna-lista"><a href="http://www.ktr.com/en/products/couplings/951_polycoupling/pkz.htm?frame=br" target="_blank">POLY COUPLING</a></li>
                                <li class="txt-interna-lista"><a href="http://www.ktr.com/en/products/couplings/revolexkx/960_kxd.htm?frame=br" target="_blank">REVOLEX KX </a></li>
                                <li class="txt-interna-lista"><a href="http://www.ktr.com/en/products/couplings/bowex/910_junior.htm?frame=br" target="_blank">BoWex</a></li>
                                <li class="txt-interna-lista"><a href="http://www.ktr.com/en/products/couplings/gearex/fa.htm?frame=br" target="_blank">GEARex</a></li>
                                <li class="txt-interna-lista"><a href="http://www.ktr.com/en/products/couplings/bowexflepa/924_bowexflepa.htm?frame=br" target="_blank">BoWex FLE-PA</a></li>
                                <li class="txt-interna-lista"><a href="http://www.ktr.com/en/products/couplings/bowexelastic/922_he1_he2.htm?frame=br" target="_blank">BoWex-ELASTIC</a></li>
                                <li class="txt-interna-lista"><a href="http://www.ktr.com/en/products/couplings/925_monolastic/monolastic.htm?frame=br" target="_blank">MONOLASTIC</a></li>
                                <li class="txt-interna-lista"><a href="http://www.ktr.com/en/products/couplings/radexn/931_nana1_nana2.htm?frame=br" target="_blank">RADEX-N</a></li>
                                <li class="txt-interna-lista"><a href="http://www.ktr.com/en/products/couplings/rigiflex/rigiflex.htm?frame=br" target="_blank">RIGIFLEX-N</a></li>
                                <li class="txt-interna-lista"><a href="http://www.ktr.com/en/products/couplings/rotexgs/backlashfree.htm?frame=br" target="_blank">ROTEX GS</a></li>
                                <li class="txt-interna-lista"><a href="http://www.ktr.com/en/products/couplings/toolflex/943_typem.htm?frame=br" target="_blank">TOOLFLEX</a></li>
                                <li class="txt-interna-lista"><a href="http://www.ktr.com/en/products/couplings/radexnc/935_ek.htm?frame=br" target="_blank">RADEX-NC</a></li>
                                <li class="txt-interna-lista"><a href="http://www.ktr.com/en/products/couplings/minex/957_s224.htm?frame=br" target="_blank">MINEX-S</a></li>
                                <li class="txt-interna-lista"><a href="http://www.ktr.com/en/products/couplings/countex/countex1.htm?frame=br" target="_blank">COUNTEX</a></li>
                            </ul>
                        </div>              
                    <?php elseif ($this->_tpl_vars['urlMarca'] == 'nachi'): ?>
                        <div class="row">
                            <img class="img-marcas mg-top-none" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/nachi.jpg"  alt="nachi" title="nachi">
                            <h1 class="titulo-sobre mg-top-none">nachi</h1>
                            <p class="txt-interna">Rolamentos</p>
                        </div>
                        <ul>
                            <li class="txt-interna-lista">Rolamentos autocompensadores de rolos</li>
                            <li class="txt-interna-lista">Rolamentos de precisão do Rolling</li>
                            <li class="txt-interna-lista">Suporte Rolamentos Screw</li>
                            <li class="txt-interna-lista">Rolamentos de rolos cilíndricos</li>
                            <li class="txt-interna-lista">Rolamentos Axiais</li>
                            <li class="txt-interna-lista">Radial Rolamentos</li>
                            <li class="txt-interna-lista"><a href="http://nachi-tool.jp/bearing/index.php" target="_blank">Catálogo</a></li>
                        </ul>

                    <?php elseif ($this->_tpl_vars['urlMarca'] == "metalflex-acoplamentos"): ?>

                        <img class="img-marcas mg-top-none" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/metalflex.jpg" alt="metalflex" title="metalflex">
                        <h1 class="titulo-sobre mg-top-none">metalflex</h1>
                    <?php elseif ($this->_tpl_vars['urlMarca'] == 'rolmax'): ?>

                        <img class="img-marcas mg-top-none" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/rolmax.jpg" alt="rolmax" title="rolmax">
                        <h1 class="titulo-sobre mg-top-none">rolmax</h1>
                        <p class="txt-interna">A ROLMAX fabrica a mais completa linha de unidades de rolamentos de esferas no país para eixos de 20mm a 100mm e ¾" a 4", totalmente blindados e relubrificáveis, mesmo quando montados com mancais de outros fabricantes, devido ao duplo sistema de relubrificação.</p>
                    <?php elseif ($this->_tpl_vars['urlMarca'] == 'sabo'): ?>
                        <div class="row">
                            <img class="img-marcas mg-top-none" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/sabo.jpg" alt="sabo" title="sabo">
                            <h1 class="titulo-sobre mg-top-none">sabo</h1>
                            <p class="txt-interna">O grupo SABÓ, presente em 10 países, é um dos líderes mundiais no desenvolvimento de soluções em vedação para a indústria automobilística mundial.</p>
                        </div>
                        <ul>
                            <li class="txt-interna-lista"><a href="http://www.sabogroup.com.br/2010/produtos-retentores.php" target="_blank">Retentores</a></li>
                            <li class="txt-interna-lista"><a href="http://www.sabogroup.com.br/2010/produtos-catalogos.php" target="_blank">Catálogo técnico</a></li>
                            <li class="txt-interna-lista"><a href="http://www.sabogroup.com.br/2010/produtos-juntas.php" target="_blank">Juntas</a></li>
                            <li class="txt-interna-lista"><a href="http://www.sabogroup.com.br/2010/produtos-total.php" target="_blank">Sabó total</a></li>
                        </ul>

                    <?php elseif ($this->_tpl_vars['urlMarca'] == 'sav'): ?>

                        <img class="img-marcas mg-top-none" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/sav.jpg" alt="sav" title="sav">
                        <h1 class="titulo-sobre mg-top-none">sav</h1>
                        <p class="txt-interna"> <a href="http://www.retentoressav.com.br/" target="_blank">http://www.retentoressav.com.br/</a> </p>

                    <?php elseif ($this->_tpl_vars['urlMarca'] == 'skf'): ?>
                        <div class="row">
                            <img class="img-marcas mg-top-none" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/skf.jpg" alt="skf" title="skf">
                            <h1 class="titulo-sobre mg-top-none">skf</h1>
                        </div>
                        <ul>
                            <li class="txt-interna-lista">Rolamentos</li>
                            <li class="txt-interna-lista">Rolamentos High-/super-precision</li>
                            <li class="txt-interna-lista">Unidades de Rolamento</li>
                            <li class="txt-interna-lista">Caixas</li>
                            <li class="txt-interna-lista">Dados gerais sobre rótulas e terminais de rótula</li>
                            <li class="txt-interna-lista">Rolamentos deslizantes e buchas FW</li>
                            <li class="txt-interna-lista">Vedantes</li>
                            <li class="txt-interna-lista">Hydraulic seals</li>
                            <li class="txt-interna-lista">Coupling systems</li>
                        </ul>

                    <?php elseif ($this->_tpl_vars['urlMarca'] == 'timken'): ?>

                        <img class="img-marcas mg-top-none" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/timken.jpg" alt="timken" title="timken">
                        <h1 class="titulo-sobre mg-top-none">timken</h1>
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