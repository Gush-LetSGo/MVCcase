<?php /* Smarty version Smarty-3.1.16, created on 2017-09-25 09:15:53
         compiled from "tpl\articlecontent.html" */ ?>
<?php /*%%SmartyHeaderCode:2200859c8c8787cad63-79666686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '911893e306fdd38a9b7bb56fbe1e5882645f07d8' => 
    array (
      0 => 'tpl\\articlecontent.html',
      1 => 1506330950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2200859c8c8787cad63-79666686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59c8c878805084_67487147',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c8c878805084_67487147')) {function content_59c8c878805084_67487147($_smarty_tpl) {?><!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title></title>
	<script src="img/js/jquery-1.5.2.min.js" type="text/javascript"></script>
</head>
<body>
<a href="index.php">返回主页</a>
<div style="width:600px;margin:10px auto;">
	<h1><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h1>
	<p><span style="margin-right:20px;">作者：<?php echo $_smarty_tpl->tpl_vars['data']->value['author'];?>
</span><span>来源：<?php echo $_smarty_tpl->tpl_vars['data']->value['from'];?>
</span></p>
	<div><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</div>
</div>
</body>
</html><?php }} ?>
