<?php
	class indexController{
		function index(){
		    $newsobj=M('news');
		    $data=$newsobj->findAll_orderby_dateline();
			VIEW::assign(array('data'=>$data));
			VIEW::display('index.html');
		}
		function articlecontent(){
		    $newsobj=M('news');
		    $data=$newsobj->findOne_by_id($_GET['id']);
			VIEW::assign(array('data'=>$data));
			VIEW::display('articlecontent.html');
		}
	}
?>