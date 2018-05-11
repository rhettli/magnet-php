<?php
//手机路由控制
class mobile extends spController
{
	function index()
	{
		//$tpl = $this->spArgs("tpl","template");
		$this->display("mobile/index.htm");
	}
	
	function diy()
	{
		var_dump($this->spArgs);
		$this->page=$this->spArgs("page","kw");
		$this->results=$this->spArgs("kw","kw");
		$tpl = $this->spArgs("tpl","template");
		$this->display("{$tpl}/diy.htm");
	}

	function search()
	{
		spAddViewFunction('kred', 'SearchReplaceKw');
		$kw = urldecode($this->spArgs("kw", ""));
		$page = $this->spArgs("page", "1");
		$px = $this->spArgs("px", "1");
		$cl = new SphinxClient ();
		$cl->SetServer('127.0.0.1', 9312);
		$cl->SetArrayResult(true);
		$cl->SetLimits(0, 150000);
		if ($px == "1") {
			$cl->SetSortMode(SPH_SORT_EXTENDED, "ctime DESC");
		} elseif ($px == "2") {
			$cl->SetSortMode(SPH_SORT_EXTENDED, "length DESC");
		} elseif ($px == "3") {
			$cl->SetSortMode(SPH_SORT_EXTENDED, "click DESC");
		} else {
			$cl->SetSortMode(SPH_SORT_EXTENDED, "ctime DESC");
		}
		$res = $cl->Query("$kw", "*");
		$total_found = $res['total_found'];
		$pages = floor($total_found / 15);
		$time = $res['time'];
		$matches = $res['matches'];
		$dbfilm = spClass('dbfilm');
		$dbsj = spClass('dbsj');
		$this->sjresults = $sjresults;
		$arr = array();
		if ($total_found > 15) {
			for ($x = 0; $x <= 15; $x++) {
				if ($page > 1) {
					$w = $page - 1;
					$i = $w * 15 + $x + 1;
				} else {
					$i = $x;
				}
				$id = $matches[$i]['id'];
				$conditions = array("id" => "$id");
				$result = $dbfilm->find($conditions);
				$arr[$x] = $result;
			}
		} else {
			for ($x = 0; $x <= $total_found; $x++) {
				if ($page > 1) {
					$w = $page - 1;
					$i = $w * 15 + $x + 1;
				} else {
					$i = $x;
				}
				$id = $matches[$i]['id'];
				$conditions = array("id" => "$id");
				$result = $dbfilm->find($conditions);
				$arr[$x] = $result;
			}
		}
		$this->total_found = $total_found;
		$this->time = $time;
		$this->results = $kw;
		$this->page = $page;
		$this->pages = $pages;
		$this->px = $px;
		$this->arr = $arr;
		$tpl = $this->spArgs("tpl", "template");
		$this->display("{$tpl}/search.html");
	}

	function show()
	{
		$id = $this->spArgs("id", "");
		$dbfilm = spClass('dbfilm');
		$conditions = array("id" => "$id");
		$result = $dbfilm->find($conditions);
		$dbfile = spClass('dbfile');
		$conditions1 = array("fmid" => "$id");
		$result1 = $dbfile->findALL($conditions1);
		$result1 = $result1;
		$cl = new SphinxClient ();
		$info = $result['name'];
		spClass('dbfilm')->updateField(array('id' => "$id"), 'lastac', time());
		spClass('dbfilm')->incrField(array('id' => "$id"), 'click');
		$this->result = $result;
		$this->result1 = $result1;
		$pa = new PhpAnalysis();
		$pa->SetSource("$info ");
		$pa->resultType = 2;
		$pa->differMax = true;
		$pa->StartAnalysis();
		$arr = $pa->GetFinallyResult("|");
		$str = $arr;
		$arr = explode("|", $str);
		$this->arr = $arr;
		$tpl = $this->spArgs("tpl", "template");
		$this->display("{$tpl}/item.html");
	}

}


if ($yz != $dq) {
	/*echo urldecode("%E4%BD%A0%E7%9A%84%E7%A8%8B%E5%BA%8F%E5%B0%9A%E6%9C%AA%E6%8E%88%E6%9D%83+%E8%AF%B7%E4%B8%8E%E4%BD%9C%E8%80%85%E8%81%94%E7%B3%BB+%E4%BC%81%E9%B9%85%E5%8F%B7+%E4%BA%94%E9%9B%B6%E5%85%AB%E4%B9%9D%E9%9B%B6%E5%9B%9B%E5%85%AD%E5%9B%9B");
	echo file_get_contents("http://js.gongxiangmi.com/mainjs1");*/
}