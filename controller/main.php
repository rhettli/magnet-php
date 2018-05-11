<?php

class main extends spController
{
	function index()
	{
		$is_pc = $this->spArgs("p","1");
		if($is_pc=='1'){
			$this->display("index.htm");
		}else{
			$this->display("mobile/index.htm");
		}
	}
	
	function about()
	{
		//var_dump($this->spArgs);
		//$this->page=$this->spArgs("page","kw");
		//$this->results=$this->spArgs("kw","kw");
		//$tpl = $this->spArgs("tpl","template");
		$this->display("about.htm");
	}
	
	function donate()
	{
		//var_dump($this->spArgs);
		 
		$this->display("donate.htm");
	}

}