<?php /* Smarty version 2.6.0, created on 2009-01-26 14:46:32
         compiled from order_notification.tpl.html */ ?>
<?php echo @constant('EMAIL_HELLO'); ?>
, <?php echo $this->_tpl_vars['order_custname']; ?>

<?php echo @constant('EMAIL_THANK_YOU_FOR_SHOPPING_AT'); ?>
 <?php echo @constant('CONF_SHOP_NAME'); ?>
!

<?php echo @constant('STRING_ORDER_ID'); ?>
: <?php echo $this->_tpl_vars['order_id']; ?>


<?php if (isset($this->_sections['i'])) unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['order_content']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 if ($this->_tpl_vars['order_content'][$this->_sections['i']['index']][4] != ""): ?>[<?php echo $this->_tpl_vars['order_content'][$this->_sections['i']['index']][4]; ?>
] <?php endif;  echo $this->_tpl_vars['order_content'][$this->_sections['i']['index']][1]; ?>
 (x<?php echo $this->_tpl_vars['order_content'][$this->_sections['i']['index']][2]; ?>
): <?php echo $this->_tpl_vars['order_content'][$this->_sections['i']['index']][3]; ?>

<?php endfor; endif; ?>

<?php echo @constant('TABLE_TOTAL'); ?>
 <?php echo $this->_tpl_vars['order_total']; ?>


<?php echo @constant('EMAIL_ORDER_WILL_BE_SHIPPED_TO'); ?>
:
<?php echo $this->_tpl_vars['order_shipping_address']; ?>


<?php echo @constant('EMAIL_OUR_MANAGER_WILL_CONTACT_YOU'); ?>


<?php echo @constant('EMAIL_SINCERELY'); ?>
, <?php echo @constant('CONF_SHOP_NAME'); ?>

<?php echo @constant('CONF_SHOP_URL'); ?>