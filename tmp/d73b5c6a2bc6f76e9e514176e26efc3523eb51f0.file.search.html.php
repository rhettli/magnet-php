<?php /* Smarty version Smarty-3.0.8, created on 2015-10-26 18:15:19
         compiled from "D:\WWW/tpl\template/search.html" */ ?>
<?php /*%%SmartyHeaderCode:25359562dfd37897c31-77916215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd73b5c6a2bc6f76e9e514176e26efc3523eb51f0' => 
    array (
      0 => 'D:\\WWW/tpl\\template/search.html',
      1 => 1445853912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25359562dfd37897c31-77916215',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>下载：<?php echo $_smarty_tpl->getVariable('results')->value;?>
- 第<?php echo $_smarty_tpl->getVariable('page')->value;?>
页_磁力链接_1974t - </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="1974t,种子搜索引擎,种子搜索网站,种子搜索器,迅雷种子,种子资源搜索,种子下载器,bt种子,种子全集,百度云种子,求种子,你懂的,网盘种子">
<meta name="description" content="1974t—全球领先的种子搜索引擎，是新一代的p2p种子搜索神器，致力于给广大网友提供最先进的种子搜索服务，超过1000万条的最全p2p种子库，没有你搜不到，只有你想不到！">
<link href="/image/favicon.ico" rel="icon">
<link href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="/tpl/template/style/feiliuzhixia.css" rel="stylesheet">
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">导航</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index'),$_smarty_tpl);?>
">1974t</a>
			</div>
			<div class="navbar-collapse collapse" id="navbar">
				<ul class="nav navbar-nav">
                    <li><a href="/tpl/template/help.html" target="_blank">下载帮助</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/tpl/template/message.html" target="_blank">交流求片</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container" style="padding-right: 60px; padding-left: 60px;">
		<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search'),$_smarty_tpl);?>
">
			<div class="input-group">
				<input class="form-control" type="text" name="kw"  value="<?php echo $_smarty_tpl->getVariable('results')->value;?>
"  placeholder="搜索电影、剧集、动漫、番号、演员..." baiduSug="1" autofocus required>
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span>搜索</button>
				</span>
			</div>
		</form>
	</div>
	
	<div class="container" style="padding-right: 60px; padding-left: 60px;">
		<ol class="breadcrumb">
			<b>排序方式：</b>
			<li><a  href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','kw'=>$_smarty_tpl->getVariable('results')->value,'px'=>1,'page'=>$_smarty_tpl->getVariable('page')->value),$_smarty_tpl);?>
">创建时间</a></li>
			<li><a  href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','kw'=>$_smarty_tpl->getVariable('results')->value,'px'=>2,'page'=>$_smarty_tpl->getVariable('page')->value),$_smarty_tpl);?>
">文件大小</a></li>
			<li><a  href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','kw'=>$_smarty_tpl->getVariable('results')->value,'px'=>3,'page'=>$_smarty_tpl->getVariable('page')->value),$_smarty_tpl);?>
">热度指数</a></li>
			<li>&nbsp;&nbsp;已为您搜索到包含  <font color="red"><?php echo $_smarty_tpl->getVariable('results')->value;?>
</font> 的 <font color="red"><?php echo $_smarty_tpl->getVariable('total_found')->value;?>
</font> 个资源 ,耗时<font color="red"> <?php echo $_smarty_tpl->getVariable('time')->value;?>
</font> ms。 </li>
		</ol>
	</div>
	
	<div class="container" style="padding-right: 60px; padding-left: 60px;">
		<div class="row">
			<div class="col-md-8">
				<div class="navbar-collapse collapse" style="padding-right: 0px;padding-left: 0px;">
					<?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->value = 0;
  if ($_smarty_tpl->getVariable('x')->value<count($_smarty_tpl->getVariable('sjresults')->value)){ for ($_foo=true;$_smarty_tpl->getVariable('x')->value<count($_smarty_tpl->getVariable('sjresults')->value); $_smarty_tpl->tpl_vars['x']->value++){
?>
					<?php if ($_smarty_tpl->getVariable('sjresults')->value[$_smarty_tpl->tpl_vars['x']->value]['name']!=null){?>
					<div class="default">
						<div class=body">
							
						</div><!--列表页面包屑下方广告位-->
					</div>
					<?php }?>
					<?php }} ?>
				</div>
				<?php if ($_smarty_tpl->getVariable('total_found')->value>0){?>
				<?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->value = 0;
  if ($_smarty_tpl->getVariable('x')->value<count($_smarty_tpl->getVariable('arr')->value)-1){ for ($_foo=true;$_smarty_tpl->getVariable('x')->value<count($_smarty_tpl->getVariable('arr')->value)-1; $_smarty_tpl->tpl_vars['x']->value++){
?>
				<?php ob_start();?><?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->tpl_vars['x']->value]['name'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
				<div class="panel panel-default">
					<div class="panel-body">
						<h5 class="item-title"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'show','id'=>$_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->tpl_vars['x']->value]['id']),$_smarty_tpl);?>
" target="_blank"><?php echo SearchReplaceKw(array('string'=>$_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->tpl_vars['x']->value]['name'],'sokw'=>$_smarty_tpl->getVariable('results')->value),$_smarty_tpl);?>
</a><?php if (time()-$_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->tpl_vars['x']->value]['ctime']<86400){?>&nbsp;&nbsp;<span class="highlight"><b>New!</b></span><?php }?></h5>
						<table>
							<tr>
								<td width="90px"><span class="label label-info"><b><?php echo date('Y-m-d',$_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->tpl_vars['x']->value]['ctime']);?>
</b></span></td>
								<td width="100px"><span class="label label-info"><b><?php echo sprintf("%.2f",$_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->tpl_vars['x']->value]['length']/1024/1024/1024);?>
GB</b></span></td>
								<td width="45px"><span class="label label-success"><b><?php if (time()-$_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->tpl_vars['x']->value]['ctime']<1209600){?>极速<?php }else{ ?>很快<?php }?></span></td>
								<td width="80px"><span class="label label-danger"><b><?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->tpl_vars['x']->value]['click'];?>
 &#176;C</b></span></td>
								<td width="100px"><a class="label label-primary" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'show','id'=>$_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->tpl_vars['x']->value]['id']),$_smarty_tpl);?>
" target="_blank" title="查看详细信息">详细信息</a></td>
							</tr>
						</table>
					</div>
				</div>
				<?php }?>
				<?php }} ?>
				<?php }else{ ?>
				
				<div class="center">
					<p>对不起，暂时没有关于“<b><?php echo $_smarty_tpl->getVariable('results')->value;?>
</b>”的下载资源</p>
					<p>请尝试去掉特殊符号，并减少关键词长度后重新搜索</p>
				</div>
			<?php }?>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading center"><b>热门搜索</b></div>
					<div class="panel-body">
					<!--更改下面电影的时候，左侧和右侧要一致，不能只修改一侧，例如:煎饼侠.html">煎饼侠</a>-->
						<p>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-速度与激情.html" target="_blank">速度与激情</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-左耳.html" target="_blank">左耳</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-战狼.html" target="_blank">战狼</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-澳门风云.html" target="_blank">澳门风云</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-万物生长.html" target="_blank">万物生长</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-何以笙箫默.html" target="_blank">何以笙箫默</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-超能陆战队.html" target="_blank">超能陆战队</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-四大名捕.html" target="_blank">四大名捕</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-木星上行.html" target="_blank">木星上行</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-一步之遥.html" target="_blank">一步之遥</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-生死阻击.html" target="_blank">生死阻击</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-咱们结婚吧.html" target="_blank">咱们结婚吧</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-复仇者联盟.html" target="_blank">复仇者联盟</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-狼图腾.html" target="_blank">狼图腾</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-以和为贵.html" target="_blank">以和为贵</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-死神来了.html" target="_blank">死神来了</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-道士出山.html" target="_blank">道士出山</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-天将雄狮.html" target="_blank">天将雄狮</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-星际穿越.html" target="_blank">星际穿越</a>
							<a class="btn btn-sm btn-warning hotwords" href="/main-search-kw-功夫.html" target="_blank">功夫</a>
						</p>
					</div>
				</div>

				<div class="navbar-collapse collapse"></div><!--列表页右侧上部广告位-->
				<div class="navbar-collapse collapse"></div><!--列表页右侧中部广告位-->
				<div class="navbar-collapse collapse"></div><!--列表页右侧下部广告位-->
			</div>
		</div>
	</div>
	<div class="container" style="padding-right: 60px; padding-left: 60px;">
	
		<div class="navbar-collapse collapse">
			<div class="row">
				<?php if ($_smarty_tpl->getVariable('page')->value>=1){?>
				<ul class="pagination col-md-8">
					<?php if ($_smarty_tpl->getVariable('page')->value>1){?>
					<li><a href="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('px')->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','kw'=>$_smarty_tpl->getVariable('results')->value,'px'=>$_tmp2,'page'=>1),$_smarty_tpl);?>
">首页</a></li>
					<li><a href="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('px')->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','kw'=>$_smarty_tpl->getVariable('results')->value,'px'=>$_tmp3,'page'=>$_smarty_tpl->getVariable('page')->value-1),$_smarty_tpl);?>
">上一页</a></li>
					<?php }?>

					<?php if ($_smarty_tpl->getVariable('page')->value>4){?>
                    <li><a href="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('px')->value;?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','kw'=>$_smarty_tpl->getVariable('results')->value,'px'=>$_tmp4,'page'=>$_smarty_tpl->getVariable('page')->value-4),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('page')->value-4;?>
</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getVariable('page')->value>3){?>
                    <li><a href="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('px')->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','kw'=>$_smarty_tpl->getVariable('results')->value,'px'=>$_tmp5,'page'=>$_smarty_tpl->getVariable('page')->value-3),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('page')->value-3;?>
</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getVariable('page')->value>2){?>
                    <li><a href="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('px')->value;?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','kw'=>$_smarty_tpl->getVariable('results')->value,'px'=>$_tmp6,'page'=>$_smarty_tpl->getVariable('page')->value-2),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('page')->value-2;?>
</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getVariable('page')->value>1){?>
					<li><a href="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('px')->value;?>
<?php $_tmp7=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','kw'=>$_smarty_tpl->getVariable('results')->value,'px'=>$_tmp7,'page'=>$_smarty_tpl->getVariable('page')->value-1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('page')->value-1;?>
</a></li>
                    <?php }?>
					<li class="disabled"><a href="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('px')->value;?>
<?php $_tmp8=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','kw'=>$_smarty_tpl->getVariable('results')->value,'px'=>$_tmp8,'page'=>$_smarty_tpl->getVariable('page')->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('page')->value;?>
</a></li>
					<?php if ($_smarty_tpl->getVariable('page')->value<=$_smarty_tpl->getVariable('pages')->value&&$_smarty_tpl->getVariable('page')->value<=66){?>
					<li><a href="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('px')->value;?>
<?php $_tmp9=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','kw'=>$_smarty_tpl->getVariable('results')->value,'px'=>$_tmp9,'page'=>$_smarty_tpl->getVariable('page')->value+1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('page')->value+1;?>
</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getVariable('page')->value<=$_smarty_tpl->getVariable('pages')->value-1&&$_smarty_tpl->getVariable('page')->value<=65){?>
                    <li><a href="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('px')->value;?>
<?php $_tmp10=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','kw'=>$_smarty_tpl->getVariable('results')->value,'px'=>$_tmp10,'page'=>$_smarty_tpl->getVariable('page')->value+2),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('page')->value+2;?>
</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getVariable('page')->value<=$_smarty_tpl->getVariable('pages')->value-2&&$_smarty_tpl->getVariable('page')->value<=64){?>
                    <li><a href="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('px')->value;?>
<?php $_tmp11=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','kw'=>$_smarty_tpl->getVariable('results')->value,'px'=>$_tmp11,'page'=>$_smarty_tpl->getVariable('page')->value+3),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('page')->value+3;?>
</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getVariable('page')->value<=$_smarty_tpl->getVariable('pages')->value-3&&$_smarty_tpl->getVariable('page')->value<=63){?>
                    <li><a href="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('px')->value;?>
<?php $_tmp12=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','kw'=>$_smarty_tpl->getVariable('results')->value,'px'=>$_tmp12,'page'=>$_smarty_tpl->getVariable('page')->value+4),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('page')->value+4;?>
</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getVariable('page')->value<=$_smarty_tpl->getVariable('pages')->value&&$_smarty_tpl->getVariable('page')->value<=66){?>
					<li><a href="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('px')->value;?>
<?php $_tmp13=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','kw'=>$_smarty_tpl->getVariable('results')->value,'px'=>$_tmp13,'page'=>$_smarty_tpl->getVariable('page')->value+1),$_smarty_tpl);?>
">下一页</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getVariable('page')->value<=$_smarty_tpl->getVariable('pages')->value&&$_smarty_tpl->getVariable('pages')->value<=66){?>
                    <li><a href="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('px')->value;?>
<?php $_tmp14=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','kw'=>$_smarty_tpl->getVariable('results')->value,'px'=>$_tmp14,'page'=>$_smarty_tpl->getVariable('pages')->value+1),$_smarty_tpl);?>
">末页</a></li>
                    <?php }?>
				</ul>
			    <?php }?>
			</div>
		</div>
	</div>
<nav class="footer navbar-inverse">
		<div class="container">
			<div class="navbar-collapse collapse navbar-text">
				<p>简单、快速、高效、稳定、影视、音乐、软件、BT、种子</p>
				<p><a href="https://www.conoha.jp/referral/?token=ItU80qib2Kiq4HEbltO6Vj_4xLUIdkHjxzZME5W5BtfoGcYW6RQ-QO2" target="_blank">本站由conoha驱动</a> | <a href="/tpl/template/dcma.html">1974T声明</a> | <a href="/tpl/template/sitemap.xml" target="_blank">网站地图</a></p>
			</div>
			<div class="navbar-text navbar-right">
				<p>(c)2015 1974t.com&nbsp;|&nbsp;<a href="https://item.taobao.com/item.htm?id=520733457715" target="_blank"><span style="color:#E53333;">购买本网站源码请点击此处</span></a></p>
				<p>1974T磁力搜索引擎，第二好用的磁力搜索引擎</p>
			</div>
		</div>
	</nav>
<!--img标签横幅广告位-->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="http://www.baidu.com/js/opensug.js" charset="gbk"></script>


</body>
</html>