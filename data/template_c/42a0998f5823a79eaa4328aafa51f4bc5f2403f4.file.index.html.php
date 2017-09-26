<?php /* Smarty version Smarty-3.1.16, created on 2017-09-25 09:01:09
         compiled from "tpl\index.html" */ ?>
<?php /*%%SmartyHeaderCode:646759c8c17d45a4d3-11675354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42a0998f5823a79eaa4328aafa51f4bc5f2403f4' => 
    array (
      0 => 'tpl\\index.html',
      1 => 1506330063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '646759c8c17d45a4d3-11675354',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59c8c17d483416_70163692',
  'variables' => 
  array (
    'data' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c8c17d483416_70163692')) {function content_59c8c17d483416_70163692($_smarty_tpl) {?><!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title></title>
	<script src="img/js/jquery-1.5.2.min.js" type="text/javascript"></script>


</head>


<body>
<table class="tablesorter" cellspacing="0" style="margin:0"> 
	<thead> 
		<tr>  
   				<th>标题</th>
   				<th>作者</th>
		</tr> 
	</thead>
	<tbody>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
		<tr>
			<td><a href="index.php?controller=index&method=articlecontent&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></td> 
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</td> 
   		</tr>
	<?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
		<tr>
			<td  colspan=3>
				暂无新闻
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
</body>
</html><?php }} ?>
