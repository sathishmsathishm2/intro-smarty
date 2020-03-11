<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-11 09:43:35
  from 'C:\xampp\htdocs\projects\intro-smarty\templates\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e68a4b7e05db3_67496196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a392be82cac6442e9bcae416ae171c9e54ddc3e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\intro-smarty\\templates\\about.tpl',
      1 => 1583916213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:loop.tpl' => 1,
  ),
),false)) {
function content_5e68a4b7e05db3_67496196 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7486339175e68a4b7deab78_36157246', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_7486339175e68a4b7deab78_36157246 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7486339175e68a4b7deab78_36157246',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>welcome to About Page</h1>
    <ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
?>
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['car']->value;?>
</li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php $_smarty_tpl->_subTemplateRender("file:loop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
}
