<?php /* Smarty version 2.6.12, created on 2015-11-26 12:38:49
         compiled from ../inc/menu-lateral.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', '../inc/menu-lateral.html', 20, false),)), $this); ?>
<ul class="ul-menu-lateral hidden-xs">
	<?php if ($this->_tpl_vars['menuLateral'] == 'marca'): ?>
	    <li class="linha-menu-lateral"><a class="link-menu-lateral <?php if ($this->_tpl_vars['urlMarca'] == 'bgl'): ?> link-menu-lateral-ativo <?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
marcas/bgl">BGL</a></li>
	    <li class="linha-menu-lateral"><a class="link-menu-lateral <?php if ($this->_tpl_vars['urlMarca'] == 'hiwin'): ?> link-menu-lateral-ativo <?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
marcas/hiwin">HIWIN</a></li>
	    <li class="linha-menu-lateral"><a class="link-menu-lateral <?php if ($this->_tpl_vars['urlMarca'] == 'ina-flag'): ?> link-menu-lateral-ativo <?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
marcas/ina-flag">INA FAG</a></li>
	    <li class="linha-menu-lateral"><a class="link-menu-lateral <?php if ($this->_tpl_vars['urlMarca'] == 'ktr'): ?> link-menu-lateral-ativo <?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
marcas/ktr">KTR</a></li>
	    <li class="linha-menu-lateral"><a class="link-menu-lateral <?php if ($this->_tpl_vars['urlMarca'] == 'nachi'): ?> link-menu-lateral-ativo <?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
marcas/nachi">NACHI</a></li>
	    <li class="linha-menu-lateral"><a class="link-menu-lateral <?php if ($this->_tpl_vars['urlMarca'] == 'metalflex-acoplamentos'): ?> link-menu-lateral-ativo <?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
marcas/metalflex-acoplamentos">METALFLEX Acoplamentos</a></li>
	    <li class="linha-menu-lateral"><a class="link-menu-lateral <?php if ($this->_tpl_vars['urlMarca'] == 'rolmax'): ?> link-menu-lateral-ativo <?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
marcas/rolmax">ROLMAX</a></li>
	    <li class="linha-menu-lateral"><a class="link-menu-lateral <?php if ($this->_tpl_vars['urlMarca'] == 'sabo'): ?> link-menu-lateral-ativo <?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
marcas/sabo">SABÓ</a></li>
	    <li class="linha-menu-lateral"><a class="link-menu-lateral <?php if ($this->_tpl_vars['urlMarca'] == 'sav'): ?> link-menu-lateral-ativo <?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
marcas/sav">SAV</a></li>
	    <li class="linha-menu-lateral"><a class="link-menu-lateral <?php if ($this->_tpl_vars['urlMarca'] == 'skf'): ?> link-menu-lateral-ativo <?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
marcas/skf">SKF</a></li>
	    <li class="linha-menu-lateral"><a class="link-menu-lateral <?php if ($this->_tpl_vars['urlMarca'] == 'timken'): ?> link-menu-lateral-ativo <?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
marcas/timken">TIMKEN</a></li>
	<?php elseif ($this->_tpl_vars['menuLateral'] == 'produtos'): ?>
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosCategoria']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<!-- <li class="linha-menu-lateral"><a class="link-menu-lateral link-menu-lateral-ativo-p" href="<?php echo $this->_tpl_vars['URL']; ?>
"></a></li> -->
			<li class="linha-menu-lateral"><a class="link-menu-lateral <?php if ($this->_tpl_vars['url'][1] == $this->_tpl_vars['dadosCategoria'][$this->_sections['i']['index']]['urlAmigavel'] || $this->_tpl_vars['dados'][0]['tituloCat'] == $this->_tpl_vars['dadosCategoria'][$this->_sections['i']['index']]['titulo']): ?> link-menu-lateral-ativo <?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
produtos/<?php echo $this->_tpl_vars['dadosCategoria'][$this->_sections['i']['index']]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dadosCategoria'][$this->_sections['i']['index']]['titulo']; ?>
</a></li>
		<?php endfor; endif; ?> 
	<?php elseif ($this->_tpl_vars['menuLateral'] == 'noticias'): ?>
		<?php $this->assign('nmTipo', ((is_array($_tmp=@$this->_tpl_vars['nmTipo'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, ""))); ?>
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosMenuLateral']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if ($this->_tpl_vars['nmTipo'] <> $this->_tpl_vars['dadosMenuLateral'][$this->_sections['i']['index']]['dataMes'][0]): ?>
				<li class="linha-menu-lateral ano-menu-lateral"><?php echo $this->_tpl_vars['dadosMenuLateral'][$this->_sections['i']['index']]['dataMes'][0]; ?>
</li>     
				<div class="encapsula-mes-ano">
			<?php endif; ?>
			<?php $this->assign('nmTipo', $this->_tpl_vars['dadosMenuLateral'][$this->_sections['i']['index']]['dataMes'][0]); ?>
           	<li class="linha-menu-lateral"><a class="link-menu-lateral <?php if ($this->_tpl_vars['url'][2] == $this->_tpl_vars['dadosMenuLateral'][$this->_sections['i']['index']]['Mes'] && $this->_tpl_vars['url'][1] == $this->_tpl_vars['dadosMenuLateral'][$this->_sections['i']['index']]['dataMes'][0]): ?>link-menu-lateral-ativo<?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
noticias/<?php echo $this->_tpl_vars['dadosMenuLateral'][$this->_sections['i']['index']]['dataMes'][0]; ?>
/<?php echo $this->_tpl_vars['dadosMenuLateral'][$this->_sections['i']['index']]['Mes']; ?>
">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['dadosMenuLateral'][$this->_sections['i']['index']]['Mes']; ?>
</a></li>
        	</div>   
        <?php endfor; endif; ?>  
	<?php endif; ?>
</ul>

<div class="bloco-menulat-mobile visible-xs-block">
	<?php if ($this->_tpl_vars['menuLateral'] == 'marca'): ?>
		<select name="menuLateralMarca" class="form-control menuLateralMarca">
			<option value="">Selecione uma marca</option>
			<option value="<?php echo $this->_tpl_vars['URL']; ?>
marcas/bgl">BGL</option>
			<option value="<?php echo $this->_tpl_vars['URL']; ?>
marcas/hiwin">HIWIN</option>
			<option value="<?php echo $this->_tpl_vars['URL']; ?>
marcas/ina-flag">INA FAG</option>
			<option value="<?php echo $this->_tpl_vars['URL']; ?>
marcas/ktr">KTR</option>
			<option value="<?php echo $this->_tpl_vars['URL']; ?>
marcas/nachi">NACHI</option>
			<option value="<?php echo $this->_tpl_vars['URL']; ?>
marcas/metalflex-acoplamentos">METALFLEX Acoplamentos</option>
			<option value="<?php echo $this->_tpl_vars['URL']; ?>
marcas/rolmax">ROLMAX</option>
			<option value="<?php echo $this->_tpl_vars['URL']; ?>
marcas/sabo">SABÓ</option>
			<option value="<?php echo $this->_tpl_vars['URL']; ?>
marcas/sav">SAV</option>
			<option value="<?php echo $this->_tpl_vars['URL']; ?>
marcas/skf">SKF</option>
			<option value="<?php echo $this->_tpl_vars['URL']; ?>
marcas/timken">TIMKEN</option>
		</select>
	<?php elseif ($this->_tpl_vars['menuLateral'] == 'produtos'): ?>
		<select name="menuLateralProdutos" class="form-control menuLatateralProd">
			<option value="">Selecione um produto</option>
			<!-- <option value="Produto1">Produto 1</option>
			<option value="Produto2">Produto 2</option> -->
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosCategoria']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<option value="<?php echo $this->_tpl_vars['URL']; ?>
produtos/<?php echo $this->_tpl_vars['dadosCategoria'][$this->_sections['i']['index']]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dadosCategoria'][$this->_sections['i']['index']]['titulo']; ?>
</option> 
			<?php endfor; endif; ?> 
		</select>
	<?php elseif ($this->_tpl_vars['menuLateral'] == 'noticias'): ?>
		<select name="menuLateralNoticias" class="form-control menuLateralNot">
			<option value="">Selecione uma noticia</option>
			<?php $this->assign('nmTipo', ((is_array($_tmp=@$this->_tpl_vars['nmTipo'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, ""))); ?>
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosMenuLateral']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<?php if ($this->_tpl_vars['nmTipo'] <> $this->_tpl_vars['dadosMenuLateral'][$this->_sections['i']['index']]['dataMes'][0]): ?>
					 <option value="" disabled="disabled"><?php echo $this->_tpl_vars['dadosMenuLateral'][$this->_sections['i']['index']]['dataMes'][0]; ?>
</option>   
				<?php endif; ?>
				<?php $this->assign('nmTipo', $this->_tpl_vars['dadosMenuLateral'][$this->_sections['i']['index']]['dataMes'][0]); ?>
				<!-- <option value="<?php echo $this->_tpl_vars['URL']; ?>
noticias/<?php echo $this->_tpl_vars['dadosMenuLateral'][$this->_sections['i']['index']]['Mes']; ?>
"><?php echo $this->_tpl_vars['dadosMenuLateral'][$this->_sections['i']['index']]['Mes']; ?>
</option> -->
				<option value="<?php echo $this->_tpl_vars['URL']; ?>
noticias/<?php echo $this->_tpl_vars['dadosMenuLateral'][$this->_sections['i']['index']]['dataMes'][0]; ?>
/<?php echo $this->_tpl_vars['dadosMenuLateral'][$this->_sections['i']['index']]['Mes']; ?>
">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['dadosMenuLateral'][$this->_sections['i']['index']]['Mes']; ?>
</option>
			<?php endfor; endif; ?>  
		</select>
	<?php endif; ?>
</div>
<br>