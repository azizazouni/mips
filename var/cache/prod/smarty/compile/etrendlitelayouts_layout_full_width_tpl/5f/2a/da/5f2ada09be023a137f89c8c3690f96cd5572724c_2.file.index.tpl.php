<?php
/* Smarty version 4.2.1, created on 2023-02-09 14:20:26
  from 'C:\xampp\htdocs\mips\themes\etrendlite\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e4f31a2fdae1_81956373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f2ada09be023a137f89c8c3690f96cd5572724c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mips\\themes\\etrendlite\\templates\\index.tpl',
      1 => 1675861867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e4f31a2fdae1_81956373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46763134163e4f31a2f8df8_42660675', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_195778303663e4f31a2f9426_66857913 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_44539857963e4f31a2fa0b3_57740005 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_212237009063e4f31a2f9ca5_99164924 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44539857963e4f31a2fa0b3_57740005', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_46763134163e4f31a2f8df8_42660675 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_46763134163e4f31a2f8df8_42660675',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_195778303663e4f31a2f9426_66857913',
  ),
  'page_content' => 
  array (
    0 => 'Block_212237009063e4f31a2f9ca5_99164924',
  ),
  'hook_home' => 
  array (
    0 => 'Block_44539857963e4f31a2fa0b3_57740005',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195778303663e4f31a2f9426_66857913', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212237009063e4f31a2f9ca5_99164924', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
