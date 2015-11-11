<?php /* Smarty version 2.6.12, created on 2015-11-06 18:18:06
         compiled from admin/produto/visualizar.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/topo.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- Conteúdo -->
<form class="form-admin" name="frm_cadastro" method="POST" enctype="multipart/form-data" onSubmit="return checa()">
        <p class="texto">VISUALIZAÇÃO DO PRODUTO</p>
        
        <label>*Titulo: <strong><?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
</strong></label>
        
        <label>*Categorias:</label>
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
            <li><?php echo $this->_tpl_vars['dadosCategoria'][$this->_sections['i']['index']]['categoria']; ?>
</li>
        <?php endfor; endif; ?>

        <label>*Descrição:</label>
        <label><strong><?php echo $this->_tpl_vars['dados'][0]['descricao']; ?>
</strong></label></br></br>
            
        <?php if ($this->_tpl_vars['dados'][0]['caminhoImagem']): ?>
            <img src="<?php echo $this->_tpl_vars['dados'][0]['caminhoImagem']; ?>
" width="100" border="0"/>
        <?php endif; ?>

        <br><br>

        <?php if ($this->_tpl_vars['dados'][0]['manual']): ?>
            <img src="<?php echo $this->_tpl_vars['dados'][0]['manual']; ?>
" width="100" border="0"/>
        <?php endif; ?>

        </br></br>
        <input name="voltar" type="button" class="botao" value="Editar esse Registro" onClick="location.href='adm_produto.php?acao=editar&id=<?php echo $this->_tpl_vars['dados'][0]['id']; ?>
';" />
    </form>
<!-- FIM Conteúdo -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/rodape.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>