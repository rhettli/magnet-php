var kkDapCtrl = null;
function kkGetDapCtrl() {
	if(null == kkDapCtrl) {
	  try{
	  	if (window.ActiveXObject) {
	  	//if (navigator.userAgent.indexOf('MSIE') != -1) {
				kkDapCtrl = new ActiveXObject("DapCtrl.DapCtrl");
	  	}	else {
				var browserPlugins = navigator.plugins;
				for (var bpi=0; bpi<browserPlugins.length; bpi++) {
					try {
						if (browserPlugins[bpi].name.indexOf('Thunder DapCtrl') != -1) {
							var e = document.createElement("object");
							e.id = "dapctrl_history";
							e.type = "application/x-thunder-dapctrl";
							e.width = 0;
							e.height = 0;
							document.body.appendChild(e);
							break;
						}
					} catch (e) {}
				}
				kkDapCtrl = document.getElementById('dapctrl_history');
	  	}
	  } catch(e) {}
	}
	return kkDapCtrl;
}
function start(url) {
  var dapCtrl=kkGetDapCtrl();
  try {
		var ver = dapCtrl.GetThunderVer("KANKAN", "INSTALL");
		var type = dapCtrl.Get("IXMPPACKAGETYPE");
		if(ver && type && ver >= 672 && type >= 2401)
		{
			dapCtrl.Put("sXmp4Arg", '"'+url+'"'+' /sstartfrom _web_xunbo /sopenfrom web_xunbo');
		}	else {
			//alert('请先更新迅雷看看！');
				if(window.confirm("请先更新迅雷看看播放器\n\n点击“确定”下载并安装更新\n\n否则请点击“取消”")){
	window.open("http://xmp.down.sandai.net/kankan/XMPSetup_5.1.18.3900-dl.exe");
	}
		}
	} catch(e) {
  	//alert('请先安装迅雷看看！');
	if(window.confirm("请先安装迅雷看看播放器\n\n点击“确定”下载并安装软件\n\n否则请点击“取消”")){
	window.open("http://xmp.down.sandai.net/kankan/XMPSetup_5.1.18.3900-dl.exe");
	}
	}
}