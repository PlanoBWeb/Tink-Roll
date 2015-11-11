<?php /* Smarty version 2.6.12, created on 2015-11-09 16:06:08
         compiled from admin/produto/dados.html */ ?>
﻿<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/topo.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
<script>

	function checa()
	{
		frm = document.frm_cadastro;
		
		if(trim(frm.titulo.value) == "")
		{
			alert("Preencha o campo Título!");
			frm.titulo.focus();
			return false;
		}
		
		if(trim(frm.arquivo.value) == "" && trim(frm.caminhoImagem.value) == "")
		{
			alert("Selecione a imagem de destaque!");
			return false;
		}
				
		return true;
	}
</script>
'; ?>


<!-- Conteúdo -->
    <form class="form-admin" name="frm_cadastro" method="POST" enctype="multipart/form-data" onSubmit="return checa()">
        <input type="hidden" name="acao" value="gravar" />
        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['dados'][0]['id']; ?>
" />
        <input type="hidden" name="caminhoImagem" value="<?php echo $this->_tpl_vars['dados'][0]['caminhoImagem']; ?>
" />
        <input type="hidden" name="manual" value="<?php echo $this->_tpl_vars['dados'][0]['manual']; ?>
" />
        <input type="hidden" name="extencoeValidas" value="jpg|jpeg|gif|png|pdf">

        <p class="texto">CADASTRO DE PRODUTO</p>
        
        <label>*Nome:</label>
        <input type="text" name="titulo" size="50" value="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
" class="formu" />

        <label style="float: left; margin-right: 50px;"> <input type="checkbox" name="especial" value="1" <?php if ($this->_tpl_vars['dados'][0]['especial'] == 1): ?>checked<?php endif; ?> /> especial</label>
        <label> <input type="checkbox" name="destaque" value="1" <?php if ($this->_tpl_vars['dados'][0]['destaque'] == 1): ?>checked<?php endif; ?>/> destaque</label>
        
        
        <label>*Categoria<b></b>:</label>
        <select name="idCategoria[]" multiple style="height:150px">
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
                <option value="<?php echo $this->_tpl_vars['dadosCategoria'][$this->_sections['i']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['dados'][0]['idCategoria'] == $this->_tpl_vars['dadosCategoria'][$this->_sections['i']['index']]['id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['dadosCategoria'][$this->_sections['i']['index']]['categoria']; ?>
</option>
            <?php endfor; endif; ?>
        </select>

        <label>*Descrição:</label>
        <textarea type="text" name="descricao" class="formu" /><?php echo $this->_tpl_vars['dados'][0]['descricao']; ?>
</textarea>
            
        <label>*Imagem:</label>
        <input type="file" name="arquivo" size="50"/>
        <?php if ($this->_tpl_vars['dados'][0]['caminhoImagem']): ?>
            <img src="<?php echo $this->_tpl_vars['dados'][0]['caminhoImagem']; ?>
" width="100" border="0"/>
        <?php endif; ?>

        <label>*Manual:</label>
        <input type="file" name="arquivo2" size="50"/>
        <?php if ($this->_tpl_vars['dados'][0]['manual']): ?>
            <img src="<?php echo $this->_tpl_vars['dados'][0]['manual']; ?>
" width="100" border="0"/>
        <?php endif; ?>

        <input name="submit" type="submit" class="botao" value="<?php echo $this->_tpl_vars['botao']; ?>
" />
        <input name="voltar" type="button" class="botao" value="voltar" onClick="history.back();" />
        <label class="no-top">* Campos obrigatórios.</label>
    </form>
<!-- FIM Conteúdo -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/rodape.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>