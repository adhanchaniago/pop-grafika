<?php /* Smarty version 2.6.0, created on 2009-01-27 16:35:28
         compiled from search_simple.tpl.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'search_simple.tpl.html', 15, false),)), $this); ?>

<?php if ($this->_tpl_vars['products_to_show_count'] > 0): ?>
<center>
<p><?php echo @constant('STRING_FOUND'); ?>
 <b><?php echo $this->_tpl_vars['products_found']; ?>
</b> <?php echo @constant('STRING_PRODUCTS'); ?>

</center>
<p>
 
 <center><?php echo $this->_tpl_vars['search_navigator']; ?>
</center>
 <p>
 <table cellpadding=6 border=0 width=95%>
  <?php if (isset($this->_sections['i1'])) unset($this->_sections['i1']);
$this->_sections['i1']['name'] = 'i1';
$this->_sections['i1']['loop'] = is_array($_loop=$this->_tpl_vars['products_to_show']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i1']['max'] = (int)$this->_tpl_vars['products_to_show_count'];
$this->_sections['i1']['show'] = true;
if ($this->_sections['i1']['max'] < 0)
    $this->_sections['i1']['max'] = $this->_sections['i1']['loop'];
$this->_sections['i1']['step'] = 1;
$this->_sections['i1']['start'] = $this->_sections['i1']['step'] > 0 ? 0 : $this->_sections['i1']['loop']-1;
if ($this->_sections['i1']['show']) {
    $this->_sections['i1']['total'] = min(ceil(($this->_sections['i1']['step'] > 0 ? $this->_sections['i1']['loop'] - $this->_sections['i1']['start'] : $this->_sections['i1']['start']+1)/abs($this->_sections['i1']['step'])), $this->_sections['i1']['max']);
    if ($this->_sections['i1']['total'] == 0)
        $this->_sections['i1']['show'] = false;
} else
    $this->_sections['i1']['total'] = 0;
if ($this->_sections['i1']['show']):

            for ($this->_sections['i1']['index'] = $this->_sections['i1']['start'], $this->_sections['i1']['iteration'] = 1;
                 $this->_sections['i1']['iteration'] <= $this->_sections['i1']['total'];
                 $this->_sections['i1']['index'] += $this->_sections['i1']['step'], $this->_sections['i1']['iteration']++):
$this->_sections['i1']['rownum'] = $this->_sections['i1']['iteration'];
$this->_sections['i1']['index_prev'] = $this->_sections['i1']['index'] - $this->_sections['i1']['step'];
$this->_sections['i1']['index_next'] = $this->_sections['i1']['index'] + $this->_sections['i1']['step'];
$this->_sections['i1']['first']      = ($this->_sections['i1']['iteration'] == 1);
$this->_sections['i1']['last']       = ($this->_sections['i1']['iteration'] == $this->_sections['i1']['total']);
?>
	<?php if (!($this->_sections['i1']['index'] % @constant('CONF_COLUMNS_PER_PAGE'))): ?><tr><?php endif; ?>
	<td valign=top width="<?php echo smarty_function_math(array('equation' => "100 / x",'x' => @constant('CONF_COLUMNS_PER_PAGE'),'format' => "%d"), $this);?>
%">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "product_brief.tpl.html", 'smarty_include_vars' => array('product_info' => $this->_tpl_vars['products_to_show'][$this->_sections['i1']['index']])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</td>
	<?php if (!(( $this->_sections['i1']['index']+1 ) % @constant('CONF_COLUMNS_PER_PAGE'))): ?></tr><?php endif; ?>
  <?php endfor; endif; ?>
 </table>
 <p>
 <center><?php echo $this->_tpl_vars['search_navigator']; ?>
</center>

<?php else: ?>

<center>
<p><?php echo @constant('STRING_NO_MATCHES_FOUND'); ?>

</center>

<?php endif; ?>