<?php
/* Smarty version 4.2.1, created on 2023-02-09 14:20:20
  from 'C:\xampp\htdocs\mips\modules\ht_staticblocks\views\templates\hook\ht_staticblocks_displayTop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e4f31461ebf6_14155346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77a21947aa0788f3191801872d8f7b25aa5a2c0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mips\\modules\\ht_staticblocks\\views\\templates\\hook\\ht_staticblocks_displayTop.tpl',
      1 => 1675861866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e4f31461ebf6_14155346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '123079244863e4f31461b676_64049218';
?>

<!-- Static Block module -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block_list']->value, 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
	<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['content']))) {?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['content'],'quotes','UTF-8' ));?>

	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- /Static block module --><?php }
}
