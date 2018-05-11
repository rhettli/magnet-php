<?php

include  APP_PATH."/include/sphinxapi.php";

class bind extends spController
{
	const PAGE_COUNT=15;
	const MODE = SPH_MATCH_ALL;
	const RANKER = SPH_RANK_WORDCOUNT;
	
	const HOST = "127.0.0.1";
	const PORT = 9312;
	const INDEX = "*";
	
	function detail()//----------------------------
	{
		session_start();
		//var_dump($r->request());
		
		$id	=$this->spArgs("lock","");
		$is_pc=$this->spArgs("p","1");
		$jdata=array();
		if($id){
			//echo 'jj';
			$name=$_SESSION[$id."_name"];
			$ctime=$_SESSION[$id."_ctime"];
			$last_seen=$_SESSION[$id."_last_seen"];
			$hot=$_SESSION[$id."_hot"];
			$length=$_SESSION[$id."_length"];
			$info_hash='';
			//$jdata=array();
			if(!$name || !$$ctime || !$last_seen || !$hot || !$length){
				$res = spClass('search_filelist_hash')->findSql(
				'select file_list,search_hash.info_hash,search_hash.name,search_hash.create_time,search_hash.last_seen,
				search_hash.length,search_hash.requests from search_filelist,search_hash where search_filelist.id ='.$id.' 
				AND search_filelist.info_hash=search_hash.info_hash');
				
				$name=$res[0]['name'];
				$info_hash=$res[0]['info_hash'];
				$last_seen=$res[0]['last_seen'];	
				$ctime=$res[0]['create_time'];	
				$hot=$res[0]['requests'];	
				$length=$res[0]['length'];
				$jd=$res[0]['file_list'];
				
				//这一条数据很独特，在if else中，不然会重复格式化数据
				$jdata['length']=$this->_get_human_size($length);	
				//var_dump($res);
			}else{
				$res = spClass('search_filelist')->find( array("id" =>$id),null,
				'file_list');
				$jd=$res['file_list'];
				$jdata['length']=$length;	
			}
			
				$jdata['name']=$name;
				$jdata['info_hash']=$info_hash;
				$jdata['ctime']=$ctime;	
				$jdata['last_seen']=$last_seen;	
				$jdata['hot']=$hot;	
	
				//var_dump($jdata);
		}
		$this->relative='';
		$this->title=$jdata['name'];
		$msg= preg_replace("/[=|<|>|《|》|\|\[|\]|【|】|\(|\)|（|）|\+|\.| +|、]/iu",",",$this->title);
		$msg= preg_replace("/,+/iu",",",$msg);
		$zindex=explode(",", $msg);
		foreach ($zindex as $value) {

		if($value=='' || $value==$this->title ) {continue;}
		    $this->relative=$this->relative.'<a class ="relative" target="_blank" href="/bind/search/kw/'.$value.'/page/1.html">'.$value.'</a>';
		    //echo $value.'>';

		}
		
	
		//var_dump(($jdata['file_list']) );
		$jdata['file_number']=count($jd);
		foreach ( json_decode($jd) as $value){
		 $tb_str=$tb_str.'<tr> <td>'.$value->path.' </td> <td>'.$value->length.' </td>  </tr>';
		}
	 	$this->tb_str=$tb_str;	
		$this->json_data=json_encode($jdata);			
		
		$this->display("detail.htm");
	}


	function search()//--------------------------------------
	{
		session_start();
		
		$this->kw=urldecode($this->spArgs("kw", "")); //$this->spArgs("kw","");
		
		if(!$_SESSION["_illegal"]){
			//echo 'no';
			$myfile = fopen(APP_PATH."/lib/politics.txt", "r") or die("Unable to open file!");
			$_SESSION["_illegal"]= fread($myfile,filesize(APP_PATH."/lib/politics.txt"));
			fclose($myfile);
			
		}
		//echo 'n1o';
		//echo 'illegal='.$_SESSION["_illegal"];
		$lines=explode ("\n",$_SESSION["_illegal"]);
		foreach ($lines as $line ){
			//$rule  = $arr['1']['MAX_PAGE'];//'/totalPages: (.*?),/i';  
			//echo $line;  //"MAX_PAGE" => '/totalPages: (.*?),/i',
			preg_match('/'.$line.'/',$this->kw,$res);
			//var_dump( $line)  ;
			//echo $res[0];
			if(isset($res[0])  && $res[0]!=''){
				//var_dump( $res[0])  ;
				$this->json_data=json_encode(array('illegal'=>'1'));
				$this->display("search.htm");
				return ;
			}
			
		}
		
		

		$this->is_pc=$this->spArgs("p","1");//pc  or mobile
		$data=array();
		if($this->kw){
			//var_dump($r->request());
			$this->page	= $this->spArgs("page","1");
			$data['cpage']=$this->page;
			$data['kw']=$this->kw;
			//echo 'page'.$this->page."\n";
			//echo self::PAGE_COUNT*($this->page - 1 ) ;

			$sortby=$this->spArgs("s","");//name  size ctime
			
			$cl = new SphinxClient ();
			
			$cl->SetServer(self::HOST, self::PORT);//
			$cl->SetConnectTimeout ( 1 );
			$cl->SetArrayResult ( true );
			$cl->SetWeights ( array ( 100, 1 ) );
			$cl->SetMatchMode ( self::MODE );
			
			//if ( count($filtervals) )	$cl->SetFilter ( $filter, $filtervals );
			//if ( $groupby )				$cl->SetGroupBy ( $groupby, SPH_GROUPBY_ATTR, $groupsort );
			if ( $sortby ){	
				$cl->SetSortMode ( SPH_SORT_EXTENDED, $sortby.' desc' );
				//if ( $sortexpr )			
				//$cl->SetSortMode ( SPH_SORT_EXPR,'desc');
			}			
			//if ( $distinct )			$cl->SetGroupDistinct ( $distinct );
			//if ( $select )				$cl->SetSelect ( $select );
			
			$cl->SetLimits(((int)$this->page-1)*self::PAGE_COUNT,self::PAGE_COUNT,1000); //( 0, $limit, ( $limit>1000 ) ? $limit : 1000 );
			
			$cl->SetRankingMode ( self::RANKER );
			$res = $cl->Query ($this->kw, self::INDEX );	
			
			if ($res===false ){
				print "Query failed: " . $cl->GetLastError() . ".\n";
			} else {
				//if ( $cl->GetLastWarning() )	print "WARNING: " . $cl->GetLastWarning() . "\n\n";
				
				//获取所有的页码
				//$this->total_found= $res[total_found];
				
				$data['total_found']=$res[total_found];
				
				//if ( is_array($res["words"]) )
				///	foreach ( $res["words"] as $word => $info )
				//		print "    '$word' found $info[hits] times in $info[docs] documents\n";
				if (isset($res["matches"]) )
				{
					$items=array();
					foreach ( $res["matches"] as $docinfo )
					{
						$count=count($items);
					
						$items[$count]['name']=$_SESSION[$docinfo[id]."_name"];
						$items[$count]['requests']=$_SESSION[$docinfo[id]."_requests"];
						if(!$items[$count]['name'] || !$items[$count]['requests']){
							$res = spClass('search_hash')->find( array("id" => $docinfo['attrs']['hash_id']),null,'name,requests');
							$items[$count]['name']=$res['name'];
							$items[$count]['requests']=$res['requests'];
						}
						
						
						
						//var_dump($result1);
						$items[$count]['id']=$docinfo[id];
						$items[$count]['ctime']=date( "Y-m-d", $docinfo['attrs']['create_time']);
						//$items[$count]['create_time']=$docinfo[id];
						$items[$count]['last_seen']=$docinfo['attrs']['last_seen'];
						$items[$count]['length']= $this->_get_human_size($docinfo['attrs']['length']);
						$items[$count]['hash_id']=$docinfo['attrs']['hash_id'];
						//$items[$count]['info_hash']=$res['info_hash'];
						
						//设置session
						$_SESSION[$docinfo[id]."_name"]=$items[$count]['name'];
						$_SESSION[$docinfo[id]."_ctime"]=$items[$count]['ctime'];
						//$_SESSION[$docinfo[id]."_size"]=$res['name'];
						$_SESSION[$docinfo[id]."_length"]=$items[$count]['length'] ;
						$_SESSION[$docinfo[id]."_last_seen"]=$items[$count]['last_seen'];
						$_SESSION[$docinfo[id]."_hot"]=$items[$count]['requests'];
						
					}
					//var_dump($items);
					$data['items']=$items;
					//var_dump($data);
				}
			}
			
		}else{
		
		}
		$this->items='';
		 foreach ( $items as $item){
			$this->items=$this->items.sprintf('<li class="media"><div class="media-body"><h4>

<a class="title" target="_blank" href="/bind/detail/lock/%s.html"> 
%s
</a>  </h4>

<div class="s_b">   <cite>发布日期：<b>%s</b></cite>

<cite>文件大小：<span class="label label-danger"><b>
%s
</b> </span></cite>

<cite>访问热度：<b> %s </b></cite>

<span class="glyphicon glyphicon-save"><a href="/bind/detail/lock/%s.html">磁力下载</a></span> </div></div></li>',$item['id'],$item['name'],$item['ctime'],$item['length'],$item['id'],$item['id']);


//                 $tb_str=$tb_str.'<tr> <td>'.$value->path.' </td> <td>'.$value->length.' </td>  </tr>';

                }


		//var_dump($this->items);
		$this->json_data=json_encode($data);
		$this->display("search.htm");
	}
	
	private function _get_human_size($length_){
			    $length=(int)$length_;
				$s='';
				if ($length<1024) {
					$s=$length.'B';
				 }else if($length<1048576){ 
					$s=floor($length/1024). 'KB';
				 }else if($length<1073741824){
					$s=floor($length/1024/1024).'MB';	
				 } else  { 
					$s=floor($length/1024/1024/1024).'GB';
				}
				return $s;
  
	}
	
}
