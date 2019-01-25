<?php
/* Smarty version 3.1.30, created on 2018-10-25 14:44:44
  from "D:\PHPstudy\PHPTutorial\WWW\10-25\newLazyLoad\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd1665ca8eaf6_84678278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '835277c37d79e408132fdd507ab124678e5d164b' => 
    array (
      0 => 'D:\\PHPstudy\\PHPTutorial\\WWW\\10-25\\newLazyLoad\\templates\\index.html',
      1 => 1539768077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd1665ca8eaf6_84678278 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<!-- 注意这里引入的路径是相对于index.php的路径引入的 -->
</head>
<body>
	<ul class="goods">
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aaa']->value, 'val', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
			<li>
				<?php echo $_smarty_tpl->tpl_vars['val']->value["goodsName"];?>

				<?php echo $_smarty_tpl->tpl_vars['val']->value["desc"];?>

			</li>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ul>
	<?php echo '<script'; ?>
 type="text/javascript" src="jquery-1.12.4.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/index.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
