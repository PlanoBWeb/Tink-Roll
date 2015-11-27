<?php /* Smarty version 2.6.12, created on 2015-11-27 11:57:26
         compiled from ../inc/breadcrumb.html */ ?>
<div class="bloco-breadcrumb">
    <ul class="ul-breadcrumb">
        <li class="linha-bread"><a class="link-bread" href="<?php echo $this->_tpl_vars['URL']; ?>
">home</a> </li>
        <?php if ($this->_tpl_vars['url'][2]): ?>
        	<li class="seta-bread"> >> </li>
        	<li class="linha-bread"><a class="link-bread" href="<?php echo $this->_tpl_vars['URL'];  if ($this->_tpl_vars['url'][0] == 'noticia'): ?>noticias<?php else:  echo $this->_tpl_vars['url'][0];  endif; ?>"><?php if ($this->_tpl_vars['url'][0] == 'noticia'): ?> noticias <?php else: ?> <?php echo $this->_tpl_vars['url'][0]; ?>
 <?php endif; ?></a></li>
        	<li class="seta-bread"> >> </li>
        	<!-- <li class="linha-bread"><a class="link-bread" href="<?php echo $this->_tpl_vars['URL']; ?>
noticias/<?php echo $this->_tpl_vars['url'][1]; ?>
"><?php echo $this->_tpl_vars['url'][1]; ?>
</a></li> -->
            <li class="linha-bread"><?php echo $this->_tpl_vars['url'][1]; ?>
</li>
            <?php if (! is_numeric ( $this->_tpl_vars['url'][2] )): ?>
            	<li class="seta-bread"> >> </li>
            	<li class="linha-bread"><?php echo $this->_tpl_vars['url'][2]; ?>
</li>
            <?php endif; ?>
        <?php elseif ($this->_tpl_vars['url'][1]): ?>
        	<li class="seta-bread"> >> </li>
        	<li class="linha-bread"><a class="link-bread" href="<?php echo $this->_tpl_vars['URL'];  if ($this->_tpl_vars['url'][0] == 'noticia'): ?>noticias<?php elseif ($this->_tpl_vars['url'][0] == 'produto'): ?>produtos<?php else:  echo $this->_tpl_vars['url'][0];  endif; ?>"><?php if ($this->_tpl_vars['url'][0] == 'noticia'): ?> noticias <?php elseif ($this->_tpl_vars['url'][0] == 'produto'): ?>produtos <?php elseif ($this->_tpl_vars['url'][0] == "fale-conosco"): ?> Fale Conosco <?php else: ?> <?php echo $this->_tpl_vars['url'][0]; ?>
 <?php endif; ?></a></li>
        	<li class="seta-bread"> >> </li>
        	<li class="linha-bread"><?php if ($this->_tpl_vars['url'][0] == 'produto'):  echo $this->_tpl_vars['dados'][0]['titulo'];  elseif ($this->_tpl_vars['url'][0] == 'produtos'):  echo $this->_tpl_vars['dados'][0]['tituloCat'];  elseif ($this->_tpl_vars['url'][0] == 'noticia'):  echo $this->_tpl_vars['dados'][0]['titulo'];  else:  echo $this->_tpl_vars['url'][1];  endif; ?></li>            
        <?php else: ?>
			<li class="seta-bread"> >> </li>
        	<li class="linha-bread"><?php if ($this->_tpl_vars['pagina'] == "fale-conosco"): ?> Fale Conosco <?php elseif ($this->_tpl_vars['pagina'] == 'manutencao'): ?> Manutenção <?php elseif ($this->_tpl_vars['pagina'] == 'localizacao'): ?>Localização<?php else: ?> <?php echo $this->_tpl_vars['pagina']; ?>
 <?php endif; ?></li>        
        <?php endif; ?>
    </ul>
</div>