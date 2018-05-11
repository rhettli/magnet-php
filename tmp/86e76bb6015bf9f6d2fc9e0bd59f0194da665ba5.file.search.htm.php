<?php /* Smarty version Smarty-3.0.8, created on 2017-05-29 12:43:10
         compiled from "D:\phpstudy\WWW\cloudbooks.top.new/tpl\search.htm" */ ?>
<?php /*%%SmartyHeaderCode:28303592ba6de642433-16403281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86e76bb6015bf9f6d2fc9e0bd59f0194da665ba5' => 
    array (
      0 => 'D:\\phpstudy\\WWW\\cloudbooks.top.new/tpl\\search.htm',
      1 => 1496032983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28303592ba6de642433-16403281',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title id="title"></title>

    <meta name="keywords" content="<<?php ?>?=$kw;?<?php ?>>">

    <meta name="description" content="<<?php ?>?=$kw;?<?php ?>>">
 
	<link href="http://cdn.bootcss.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/static/css/style.css" type="text/css">

    <!--link charset="utf-8" href="/static/style/bootstrap.min.css" rel="stylesheet" <link rel="shortcut icon" href="http://127.0.0.1/static/img/icon.png"> /-->

    <!--[if lt IE 9]>

    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>    <![endif]--><!--bootstrap-->

	<script src="http://cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>

	<script src="http://cdn.bootcss.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	
<script>
(function(){
   var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?0a5a71f484e5c469666ff5a3c413c395":"https://jspassport.ssl.qhimg.com/11.0.1.js?0a5a71f484e5c469666ff5a3c413c395";
   document.write('<script src="' + src + '" id="sozz"><\/script>');
})();
</script>
</head>

<body>

<div id="wrap">
 
<?php $_template = new Smarty_Internal_Template("navbar.htm", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

 
    <div class="container">

<div class="hot_search"><div class="col-md-5  hot_form">

     <form action="search.php"><div class="input-group">

     <input name="" type="hidden" value="baidu">

     <input type="text" class="form-control stext" id="serach" placeholder="输入关键字，搜索有惊喜" required="" autofocus="" x-webkit-speech="" name="kw" value="" baidusug="1">

     <span class="input-group-btn">   

     <button class="btn btn-primary"  onclick="location.href='/bind__search__kw__'+$('#serach').val()+'.html';return false;">

	 <span class="glyphicon glyphicon-search"></span>搜索</button>

     </span></div><!-- /input-group -->

     </form></div>

</div>
<div class="alert alert-warning">
	<a href="#" class="close" data-dismiss="alert">
		&times;
	</a>
	<strong>当前</strong>搜索要点：如果要搜索某个词，当拆分时搜索不到，可以试试搜索全词,搜索人数多，请耐心等待结果,(没有结果的时候可以尝试刷新)
</div>

	

	  <div class="row" style='min-height:360px;'>

		 <div id='id_col8_content' class="col-md-8 search_list" >
 
		 <div id='adlefttop'><!--动态添加数据，广告-->

		 </div>

		 

		 

         <ul id="media-list">

		 

         <!--动态添加数据，资源列表-->

         

         </ul>

		</div>

		

		  <div class="col-md-4">
		  <!--
<div class="row" style="margin-left: 20px;">
<a target="_blank" href="http://1755446.iz45.com/">
<img  id='ad_truelove'  width="300" height="300">

</a>
</div>-->
	<a href="#" id="example" class="btn btn-success" rel="popover" 
	data-content="为我的网站创建一个提示框如此简单！" data-original-title="Bootstrap弹出框">悬停弹出框</a>

			   <div id='adrighttop' class="col-md-12" style="padding-right: 0px;">

			    <!--广告区 右上角 正方形-->

					

			   </div>

		  </div>

		

		</div>

		 <div height='1px;' id='adtlovelist'> 
			 <script src='http://1755446.iz45.com/AD/?FID=1755446&X=5&Y=1&TYPE=3&CHANNEL=R5' ></script>
		</div>

    <ul id='pageIndex' class="pagination" style="margin-top:10px">

        

        <!--动态添加数据，分页导航-->

      

      </ul>
	  
 <div id='adleftbottom'><!--动态添加数据，广告 左下方 矩形横幅-->

</div>

    </div>

<div id="footer">

   <div class="container">

   <p class="text-muted">

   Copyright @ 2013-2015 资源提供:<a href="http://www.cloudbooks.top/" target="_blank" style="color:#336600;"><b>云书磁力搜索</b></a> All rights reserved. 备案号:皖ICP备16004259号

   <em class="f_info">

		<a href="javascript:scrollTo(0,0);">返回顶部</a>

	</em>

	

    <em class="f_info">

		<a href="about.php" title="免责声明">免责声明</a>

		&nbsp;&nbsp

	</em>

</p>



	</div>
</div>
 
<script type="text/javascript" src="/static/js/tiletemplate.min.js"></script>
<script type="text/javascript" color="0,0,255" opacity="0.5" count="99" src="/static/js/panel.js"></script>
<script id="tpl-item" type="text/tileTemplate">
        <<?php ?>% for (i = 0, len = items.length; i < len; i ++) { %<?php ?>>
		  <li class="media"><div class="media-body"><h4>
		  <a class="title" target="_blank" href="bind__detail__lock__<<?php ?>%=items[i].id%<?php ?>>.html"> 
				<<?php ?>%=@items[i].name%<?php ?>>
		  </a>  </h4>
		  
		  <div class="s_b">   <cite>发布日期：<b> <<?php ?>%=@items[i].ctime%<?php ?>> </b></cite>
		  <cite>文件大小：<span class="label label-danger"><b>
		  <<?php ?>% if (items[i].length <1024) { %<?php ?>>
			<<?php ?>%=items[i].length %<?php ?>> B		
		<<?php ?>% }else if(items[i].length<1048576){ %<?php ?>>  
			<<?php ?>%=parseInt(items[i].length/1024)%<?php ?>> KB	
		<<?php ?>% }else if(items[i].length<1073741824){ %<?php ?>>  
			<<?php ?>%=parseInt(items[i].length/1024/1024)%<?php ?>> MB	
		<<?php ?>% } else  { %<?php ?>>
			<<?php ?>%=parseInt(items[i].length/1024/1024/1024)%<?php ?>> GB
		<<?php ?>% }  %<?php ?>>
</b></span></cite>
		   <cite>访问热度：<b> <<?php ?>%=@items[i].id%<?php ?>> </b></cite>
		    <span class="glyphicon glyphicon-save">111<a href="bind__detail__lock__<<?php ?>%=items[i].id%<?php ?>>.html">磁力下载</a></span> </div></div></li>
 
        <<?php ?>% } %<?php ?>> 

</script>
<script >
var jsondata=<?php echo $_smarty_tpl->getVariable('json_data')->value;?>
;
//alert(jsondata);
if(jsondata.length==0){
$('#id_col8_content').html("<img id='load' src='/static/img/nodata.png'>");
//alert(jsondata.length);
 
}else if(jsondata.total_found=='0'){

$('#id_col8_content').html("<img id='load' style='width:390px;' src='/static/img/nodata.png'>");
}else{

	var output = document.getElementById("media-list");
	output.innerHTML = tileTemplate.render("tpl-item", jsondata);
}

</script>
</body></html>