<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-11 09:37:19
  from 'C:\xampp\htdocs\projects\intro-smarty\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e68a33f5158f6_21000495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3fbe9664a6bd53f1a5a3bf8b93d853d9048b3dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\intro-smarty\\templates\\layout.tpl',
      1 => 1583915835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e68a33f5158f6_21000495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"s>
</head>
<body>
  <div class="container">
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15945156835e68a33f514672_47332208', 'body');
?>

  </div>
</body>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3825971695e68a33f5151b7_08455490', 'style');
?>

</html><?php }
/* {block 'body'} */
class Block_15945156835e68a33f514672_47332208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15945156835e68a33f514672_47332208',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'style'} */
class Block_3825971695e68a33f5151b7_08455490 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_3825971695e68a33f5151b7_08455490',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style'} */
}
