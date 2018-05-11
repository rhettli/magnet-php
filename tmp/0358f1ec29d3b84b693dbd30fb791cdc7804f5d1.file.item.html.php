<?php /* Smarty version Smarty-3.0.8, created on 2015-10-26 18:16:40
         compiled from "D:\WWW/tpl\template/item.html" */ ?>
<?php /*%%SmartyHeaderCode:28572562dfd888b97c3-71810186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0358f1ec29d3b84b693dbd30fb791cdc7804f5d1' => 
    array (
      0 => 'D:\\WWW/tpl\\template/item.html',
      1 => 1445853736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28572562dfd888b97c3-71810186',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?php echo $_smarty_tpl->getVariable('result')->value['name'];?>
_磁力链接_BT种子-迅雷下载 - 1974t</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('result')->value['name'];?>
下载,<?php echo $_smarty_tpl->getVariable('result')->value['name'];?>
磁力链接,<?php echo $_smarty_tpl->getVariable('result')->value['name'];?>
资源网">
<meta name="description" content="1974t是先进的BT磁力链接搜索引擎。这里有<?php echo $_smarty_tpl->getVariable('result')->value['name'];?>
的免费资源下载，同时还提供<?php echo $_smarty_tpl->getVariable('result')->value['name'];?>
在线云播放和迅雷离线下载，可以将资源BT种子保存在本地，支持小米路由一键下载。">
<link href="/image/favicon.ico" rel="icon">
<link href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="/tpl/template/style/feiliuzhixia.css" rel="stylesheet">
</head>
<body>
<script>
var str;
function aa(){
str=document.getElementById("input1").value;
return str;
}
</script>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">磁力链接</span>
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
	<div class="container" >
		<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search'),$_smarty_tpl);?>
">
			<div class="input-group">
				<input class="form-control" type="text" name="kw" value="<?php echo $_smarty_tpl->getVariable('result')->value['name'];?>
" placeholder="搜索电影、剧集、动漫、番号、演员..." baiduSug="1" autofocus required>
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span>&nbsp;搜索</button>
				</span>
			</div>
		</form>
	</div>
	<div class="container"  >
		<h3><?php echo $_smarty_tpl->getVariable('result')->value['name'];?>
</h3>
	</div>
	<div class="container"  >
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="info row">
							<div class="col-xs-4"><b>创建时间</b>&nbsp;&nbsp;&nbsp;<span class="badge"><?php echo date('Y-m-d',$_smarty_tpl->getVariable('result')->value['ctime']);?>
</span></div>
							<div class="col-xs-4"><b>文件大小</b>&nbsp;&nbsp;&nbsp;<span class="badge"><?php echo sprintf("%.2f",$_smarty_tpl->getVariable('result')->value['length']/1024/1024/1024);?>
GB</span></div>
							<div class="col-xs-4"><b>连接速度</b>&nbsp;&nbsp;&nbsp;<span class="badge"><?php if (time()-$_smarty_tpl->getVariable('result')->value['ctime']<1209600){?>极速<?php }else{ ?>很快<?php }?></span></div>
						</div>
						<div class="info row">
							<div class="col-xs-4"><b>活跃时间</b>&nbsp;&nbsp;&nbsp;<span class="badge"><?php echo date('Y-m-d',$_smarty_tpl->getVariable('result')->value['lastac']);?>
</span></div>
							<div class="col-xs-4"><b>文件数量</b>&nbsp;&nbsp;&nbsp;<span class="badge"><?php echo count($_smarty_tpl->getVariable('result1')->value);?>
</span></div>
							<div class="col-xs-4"><b>热度指数</b>&nbsp;&nbsp;&nbsp;<span class="badge"><?php echo $_smarty_tpl->getVariable('result')->value['click'];?>
 &#176;C</span></div>
						</div>
						<div class="info row">
							<div class="col-md-12"><b>种子哈希</b>&nbsp;&nbsp;&nbsp;<span class="badge green"><?php echo $_smarty_tpl->getVariable('result')->value['infohash'];?>
</span></div>
						</div>
						<div class="info otherkey">
							<b>搜索标签</b>&nbsp;&nbsp;&nbsp;<?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->value = 1;
  if ($_smarty_tpl->getVariable('x')->value<count($_smarty_tpl->getVariable('arr')->value)){ for ($_foo=true;$_smarty_tpl->getVariable('x')->value<count($_smarty_tpl->getVariable('arr')->value); $_smarty_tpl->tpl_vars['x']->value++){
?><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','kw'=>$_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->tpl_vars['x']->value]),$_smarty_tpl);?>
" target="_blank"><span class="badge blue"><?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->tpl_vars['x']->value];?>
</span></a>&nbsp;&nbsp;<?php }} ?>
						</div>
					</div>
				</div>
				<textarea class="well magnet center" id="MagnetLink" onclick="$(this).select();" readonly>magnet:?xt=urn:btih:<?php echo $_smarty_tpl->getVariable('result')->value['infohash'];?>
&dn=<?php echo $_smarty_tpl->getVariable('result')->value['name'];?>
</textarea>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading center"><b>热门搜索</b></div>
					<div class="panel-body otherwords">
					<!--更改下面电影的时候，左侧和右侧要一致，不能只修改一侧，例如:煎饼侠.html">煎饼侠</a>-->
						<p>
							<a class="btn btn-xs btn-danger hotwords" href="/main-search-kw-狼图腾.html" target="_blank">狼图腾</a>
							<a class="btn btn-xs btn-danger hotwords" href="/main-search-kw-以和为贵.html" target="_blank">以和为贵</a>
							<a class="btn btn-xs btn-danger hotwords" href="/main-search-kw-速度与激情.html" target="_blank">速度与激情</a>
							<a class="btn btn-xs btn-danger hotwords" href="/main-search-kw-超能陆战队.html" target="_blank">超能陆战队</a>
							<a class="btn btn-xs btn-danger hotwords" href="/main-search-kw-生死阻击.html" target="_blank">生死阻击</a>
							<a class="btn btn-xs btn-danger hotwords" href="/main-search-kw-死神来了.html" target="_blank">死神来了</a>
							<a class="btn btn-xs btn-danger hotwords" href="//main-search-kw-道士出山.html" target="_blank">道士出山</a>
							<a class="btn btn-xs btn-danger hotwords" href="//main-search-kw-天将雄狮.html" target="_blank">天将雄狮</a>
							<a class="btn btn-xs btn-danger hotwords" href="//main-search-kw-左耳.html" target="_blank">左耳</a>
							<a class="btn btn-xs btn-danger hotwords" href="/main-search-kw-战狼.html" target="_blank">战狼</a>
							<a class="btn btn-xs btn-danger hotwords" href="/main-search-kw-澳门风云.html" target="_blank">澳门风云</a>
							<a class="btn btn-xs btn-danger hotwords" href="/main-search-kw-万物生长.htmll" target="_blank">万物生长</a>
							<a class="btn btn-xs btn-danger hotwords" href="/main-search-kw-何以笙箫默.html" target="_blank">何以笙箫默</a>
							<a class="btn btn-xs btn-danger hotwords" href="/main-search-kw-星际穿越.html" target="_blank">星际穿越</a>
							<a class="btn btn-xs btn-danger hotwords" href="/main-search-kw-功夫.html" target="_blank">功夫</a>
							<a class="btn btn-xs btn-danger hotwords" href="/main-search-kw-咱们结婚吧.html" target="_blank">咱们结婚吧</a>
							<a class="btn btn-xs btn-danger hotwords" href="/main-search-kw-复仇者联盟.html" target="_blank">复仇者联盟</a>
							<a class="btn btn-xs btn-danger hotwords" href="/main-search-kw-四大名捕.html" target="_blank">四大名捕</a>
							<a class="btn btn-xs btn-danger hotwords" href="/main-search-kw-木星上行.html" target="_blank">木星上行</a>
							<a class="btn btn-xs btn-danger hotwords" href="/main-search-kw-一步之遥.html" target="_blank">一步之遥</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container"  >
		<div class="row">
			<div class="col-md-8">
				<div class="downbutton center">
					<a class="btn btn-sm btn-success" href="magnet:?xt=urn:btih:<?php echo $_smarty_tpl->getVariable('result')->value['infohash'];?>
&dn=<?php echo $_smarty_tpl->getVariable('result')->value['name'];?>
"><b>立即下载</b></a>
					<a class="btn btn-sm btn-success" href="javascript:;" onClick="copyMagnetLink()"><b>复制链接</b></a>
					<a class="btn btn-sm btn-info" tabindex="0" data-trigger="focus" data-toggle="popover" data-placement="top" data-html="ture" data-content="<img class='qrcode' src='http://qr.liantu.com/api.php?text=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'show','page'=>$_smarty_tpl->getVariable('result')->value['id']),$_smarty_tpl);?>
'>"><b>手机下载</b></a>
					<a class="btn btn-sm btn-info" href="magnet:?xt=urn:btih:<?php echo $_smarty_tpl->getVariable('result')->value['infohash'];?>
&dn=<?php echo $_smarty_tpl->getVariable('result')->value['name'];?>
"><b>保存种子</b></a>
					<a class="btn btn-sm btn-primary" href="http://vod.xunlei.com/mini.html?url=magnet:?xt=urn:btih:<?php echo $_smarty_tpl->getVariable('result')->value['infohash'];?>
&dn=<?php echo $_smarty_tpl->getVariable('result')->value['name'];?>
" target="_blank"><b>迅雷云播</b></a>
					<a class="btn btn-sm btn-primary" href="javascript:;" onclick="start('magnet:?xt=urn:btih:<?php echo $_smarty_tpl->getVariable('result')->value['infohash'];?>
&dn=<?php echo $_smarty_tpl->getVariable('result')->value['name'];?>
')"><b>迅雷看看</b></a>
					<a class="btn btn-sm btn-danger" href="magnet:?xt=urn:btih:<?php echo $_smarty_tpl->getVariable('result')->value['infohash'];?>
&dn=<?php echo $_smarty_tpl->getVariable('result')->value['name'];?>
" id="d2r" target="_blank"><b>小米路由</b></a>
					<a class="btn btn-sm btn-danger" href="http://pan.baidu.com/" target="_blank"><b>百度网盘</b></a>			
					</div>
				<table class="table table-striped">
					<tr>
						<th colspan="2">
							<span>文件列表</span>
							<font color="red">&nbsp;&nbsp;强烈建议使用百度网盘离线下载、迅雷看看在线观看。或者使用迅雷下载观看!!!</font> 
						</th>
					</tr>
					
					<?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->value = 0;
  if ($_smarty_tpl->getVariable('x')->value<count($_smarty_tpl->getVariable('result1')->value)){ for ($_foo=true;$_smarty_tpl->getVariable('x')->value<count($_smarty_tpl->getVariable('result1')->value); $_smarty_tpl->tpl_vars['x']->value++){
?>
					<tr>
						<td><?php echo $_smarty_tpl->getVariable('result1')->value[$_smarty_tpl->tpl_vars['x']->value]['file'];?>
</td>
						<td><?php echo sprintf("%.2f",$_smarty_tpl->getVariable('result1')->value[$_smarty_tpl->tpl_vars['x']->value]['length']/1024/1024/1024);?>
G</td>
					</tr>
					<?php }} ?>
					
					
						<td>1974t影视搜索（www.1974t.com）</td>
						<td>1974t.com</td>
					</tr>
				</table>
			</div>
			<div class="col-md-4">
				<div class="navbar-collapse collapse"></div><!--内容页左侧上部广告位-->
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="gg-item-left"></div><!--内容页左侧下部广告位-->
			</div>
			<div class="col-md-8">
				<div class="gg-item-center"></div><!--内容页中部上方广告位-->
				<div class="gg-item-center"></div><!--内容页中部下方广告位-->
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
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"5","bdPos":"right","bdTop":"139.5"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<script src="http://www.1974t.com/script/xmp.js"></script>
<script src="http://s.miwifi.com/d2r/js/base64.js"></script>
<script>
function copyMagnetLink() {
var MagnetLink=document.getElementById("MagnetLink");
	MagnetLink.select();
	document.execCommand("copy");
	alert("复制成功\n\n如浏览器不支持此操作，请手动复制");
}
</script>
<script>
$(function () {
	$('[data-toggle="popover"]').popover()
})
</script>
<script>
function d2r(elem) {
var href = elem.getAttribute("href")
href = "http://d.miwifi.com/d2r/?url=" +
	Base64.encodeURI(href) + "&name={{item.name}}"
	Base64.encodeURI(href) + "&src=1974t.com"
elem.setAttribute("href",href)
}
$(document).ready(function () {
	d2r(document.getElementById("d2r"))
})
</script>
</body>
</html>