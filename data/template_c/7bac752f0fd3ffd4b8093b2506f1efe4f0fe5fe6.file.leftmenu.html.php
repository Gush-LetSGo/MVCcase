<?php /* Smarty version Smarty-3.1.16, created on 2017-09-26 09:13:31
         compiled from "tpl\admin\leftmenu.html" */ ?>
<?php /*%%SmartyHeaderCode:26293539d921c295dd0-60924783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bac752f0fd3ffd4b8093b2506f1efe4f0fe5fe6' => 
    array (
      0 => 'tpl\\admin\\leftmenu.html',
      1 => 1506417209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26293539d921c295dd0-60924783',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_539d921c29b383_34050383',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d921c29b383_34050383')) {function content_539d921c29b383_34050383($_smarty_tpl) {?><aside id="sidebar" class="column">
	<h3>文章操作</h3>
	<ul class="toggle">
		<li class="icn_new_article"><a href="index.php?controller=admin&method=newsadd">文章添加</a></li>
		<li class="icn_categories"><a href="index.php?controller=admin&method=newslist">文章管理</a></li>
	</ul>
	<h3>管理员操作</h3>
	<ul class="toggle">
		<li class="icn_jump_back"><a href="index.php?controller=admin&method=logout">退出登录</a></li>
	</ul>
	
	<footer>
		
	</footer>
</aside><!-- end of sidebar --><?php }} ?>
