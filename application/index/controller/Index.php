<?php
namespace app\index\controller;

use think\Db;//导入系统Db类
use think\Controller;//导入控制器类
use think\Jump;//重定向跳转
use think\Session;//重定向跳转
/**
 * 表格功能
 * ginkgofox
 * 2019-10-22
 */
class Index extends CommonController
{
    //舆情收藏
    public function Collect()
    {
    	return view();
    }
    
    //收藏列表
    public function CollectList()
    {
    	if(request()->isAjax()){
    		
    		$title = input('post.title');
    		$start = input('post.start');
    		$end = input('post.end');
    		
    		//判断是否有接收筛选查询
    		if($title != ""){
    			$sql_title = "news_title like '%".$title."%'";
    		}else {
    			$sql_title = "";
    		}
    		if($start != "" && $end != ""){
    			$sql_time = "news_time>='".$start."' and news_time<='".$end."'";
    		}else if($start != ""){
    			$sql_time = "news_time>='".$start."'";
    		}else if($end != ""){
    			$sql_time = "news_time<='".$end."'";
    		}else {
    			$sql_time = "";
    		}
    		
    		$sql="select * from tb_xinhua";
    		$sqlArr=array();
    		if($sql_title!="" || $sql_time!=""){
    			array_push($sqlArr, ' where ');
    			if($sql_title!="" && $sql_time!="") {
    				array_push($sqlArr, $sql_title);
    				array_push($sqlArr, ' and ');
    				array_push($sqlArr, $sql_time);
    			}else if($sql_time==""){
    				array_push($sqlArr, $sql_title);
    			}else{
    				array_push($sqlArr, $sql_time);
    			}
    		}
    		 
    		$sql.=implode($sqlArr);
    		$sql.=" order by id desc";
    			
	    	$all = Db::query($sql);
	    	$data = [];
	    
	    	$collection = Db::name('tb_xinhua')
	    	 
	    	-> alias('b')
	    	-> join('tb_collection a','a.collection_id = b.id')
	    	-> order('a.id desc')
	    	-> select();
	    
	    	foreach($all as $key => &$vo){
	    		foreach($collection as $key2 => &$vo2){
	    			if($vo['id'] == $vo2['collection_id']) {
	    				array_push($data,$vo);
	    			}
	    		}
	    	}
	    	
	    	$result['code'] = 0;
	    	$result['data'] = $data;
	    	
    		return json($result);		
    	}else{
    		$this -> error("获取信息失败");
    	}
    }
    
    //取消收藏
    public function uncollectList()
    {
    	$id = input('post.id');
    	$dcode = Db::execute("delete from tb_collection where collection_id=?",[$id]);
    		
    	if($dcode){
    		
    		if(request()->isAjax()){
    			
			    $all = Db::query("select * from tb_xinhua order by id desc");
				$data = [];
				    	
				$collection = Db::name('tb_xinhua') 	
				   -> alias('b')
				   -> join('tb_collection a','a.collection_id = b.id')
				   -> order('a.id desc')
				   -> select();
				    	
				foreach($all as $key => &$vo){
				    foreach($collection as $key2 => &$vo2){
				    	if($vo['id'] == $vo2['collection_id']) {
				    		array_push($data,$vo);
				    	}
				    }
				}
				
		    	$result['code'] = 0;
		    	$result['data'] = $data;
		    	
	    		return json($result);
		    			
	    	}else{
	    		$this -> error("获取信息失败");
	    	}
    	}else{
    		$this -> error("删除失败");
    	}
    }
    
    //舆情检索
    public function Search()
    {
    	return view();
    }
    
    //舆情检索列表
    public function SearchList()
    {
    	//筛选
    	$time = input('post.time');
    	$emotion = input('post.emotion/a');

    	if($time != ""){//判断是否有接收筛选查询
    		if($time==0){
    			$sql_time = 'TO_DAYS(news_time) = TO_DAYS(NOW())';
    		}
    		if($time==1){
    			$sql_time = 'TO_DAYS(news_time) = TO_DAYS(NOW())';
    		}
    		if($time==3){
    			$sql_time = 'DATE_SUB(CURDATE(), INTERVAL 7 DAY) <= DATE(news_time)';
    		}
    		if($time==7){
    			$sql_time = 'DATE_SUB(CURDATE(),INTERVAL 1 WEEK) <= DATE(news_time)';
    		}
    		if($time==-1){
    			$sql_time = "news_time>='2018-05-09' and news_time<='2018-09-12'";
    		}
    	}else {
    		$sql_time = "";
    	}
    	
    	if($emotion != ""){
    		$sql_emotion = "news_emotion in (";
    		for($i=0; $i<sizeof($emotion); $i++){
    			if($i < sizeof($emotion)-1){
    				$sql_emotion = $sql_emotion."'".$emotion[$i]."',";
    			}else{
    				$sql_emotion = $sql_emotion."'".$emotion[$i]."')";
    			}
    		}
    	}else {
    		$sql_emotion = "news_emotion like ''";
    	}
    	
    	$sql="select * from tb_xinhua";
    	$sqlArr=array();
    	if($sql_time!="" || $sql_emotion!=""){
    		array_push($sqlArr, ' where ');
    		if($sql_emotion!="" && $sql_time!="") {
    			array_push($sqlArr, $sql_time);
    			array_push($sqlArr, ' and ');
    			array_push($sqlArr, $sql_emotion);
    		}else if($sql_time==""){
    			array_push($sqlArr, $sql_emotion);
    		}else{
    			array_push($sqlArr, $sql_time);
    		}
    	}
    	
    	$sql.=implode($sqlArr);
    	$sql.=" order by news_time desc";

    	$data = Db::query($sql);
    	 
    	$collection = Db::name('tb_xinhua')
    
    	-> alias('b')
    	-> join('tb_collection a','a.collection_id = b.id')
    	-> order('a.id desc')
    	-> select();
    	 
    	foreach($data as $key => &$vo){
    		$vo['news_collect'] = '收藏';
    		foreach($collection as $key2 => &$vo2){
    			if($vo['id'] == $vo2['collection_id']) {
    				$vo['news_collect'] = '已收藏';
    			}
    		}
    	}
    
    	$result['code'] = 0;
	    $result['data'] = $data;
	    	
    	return json($result);
    }
    
    //收藏新闻
    public function collectNews()
    {
    	$id = input('post.id');
    	$dcode = Db::execute("insert into tb_collection value(?,?)",['null',$id]);
    
    	if($dcode){
    		
    		if(request()->isAjax()){
    			
			    $data = Db::query("select * from tb_xinhua order by news_time desc");
			    
			    $collection = Db::name('tb_xinhua')
			    
			    -> alias('b')
			    -> join('tb_collection a','a.collection_id = b.id')
			    -> order('a.id desc')
			    -> select();
			    
			    foreach($data as $key => &$vo){
			    	$vo['news_collect'] = '收藏';
			    	foreach($collection as $key2 => &$vo2){
			    		if($vo['id'] == $vo2['collection_id']) {
			    			$vo['news_collect'] = '已收藏';
			    		}
			    	}
			    }
				
		    	$result['code'] = 0;
		    	$result['data'] = $data;
		    	
	    		return json($result);
		    			
	    	}else{
	    		$this -> error("获取信息失败");
	    	}
    	}else{
    		$this -> error("删除失败");
    	}
    }
    
    //取消收藏
    public function uncollectNews()
    { 
    	$id = input('post.id');
    	$dcode = Db::execute("delete from tb_collection where collection_id=?",[$id]);
    		
    	if($dcode){
    		
    		if(request()->isAjax()){
    			
			    $data = Db::query("select * from tb_xinhua order by news_time desc");
			    
			    $collection = Db::name('tb_xinhua')
			    
			    -> alias('b')
			    -> join('tb_collection a','a.collection_id = b.id')
			    -> order('a.id desc')
			    -> select();
			    
			    foreach($data as $key => &$vo){
			    	$vo['news_collect'] = '收藏';
			    	foreach($collection as $key2 => &$vo2){
			    		if($vo['id'] == $vo2['collection_id']) {
			    			$vo['news_collect'] = '已收藏';
			    		}
			    	}
			    }
				
		    	$result['code'] = 0;
		    	$result['data'] = $data;
		    	
	    		return json($result);
		    			
	    	}else{
	    		$this -> error("获取信息失败");
	    	}
    	}else{
    		$this -> error("删除失败");
    	}
    }
    
    //舆情报告
    public function Reportcenter()
    {
    	return view();
    }
    
    //报告中心
    public function Report()
    {
    	return view();
    }
    
    //创建方案
    public function Proposal()
    {
    	return view();
    }
    
    //热点事件
    public function Hotevent()
    {
    	return view();
    }
    
    //热点事件列表
    public function HotEventList()
    {
    	if(request()->isAjax()){
    
    		$title = input('post.title');
    		$time = input('post.time');
    
    		//判断是否有接收筛选查询
    		if($title != ""){
    			$sql_title = "news_title like '%".$title."%'";
    		}else {
    			$sql_title = "";
    		}
    		if($time != ""){
	    		if($time==0){
	    			$sql_time = 'TO_DAYS(news_time) = TO_DAYS(NOW())';
	    		}
	    		if($time==1){
	    			$sql_time = 'TO_DAYS(news_time) = TO_DAYS(NOW())';
	    		}
	    		if($time==-1){
	    			$sql_time = "news_time>='2018-05-09' and news_time<='2018-09-12'";
	    		}
    		}else {
    			$sql_time = "";
    		}
    	
    		$sql="select * from tb_xinhua";
    		$sqlArr=array();
    		if($sql_title!="" || $sql_time!=""){
    			array_push($sqlArr, ' where ');
    			if($sql_title!="" && $sql_time!="") {
    				array_push($sqlArr, $sql_title);
    				array_push($sqlArr, ' and ');
    				array_push($sqlArr, $sql_time);
    			}else if($sql_time==""){
    				array_push($sqlArr, $sql_title);
    			}else{
    				array_push($sqlArr, $sql_time);
    			}
    		}
    		 
    		$sql.=implode($sqlArr);
    		$sql.=" order by news_time desc";
    		 
    		$data = Db::query($sql);
    
    		$result['code'] = 0;
    		$result['data'] = $data;
    
    		return json($result);
    	}else{
    		$this -> error("获取信息失败");
    	}
    }
    
    //舆情情况
    public function Index()
    {
    	return view();
    }
    
    //预警中心
    public function Warning()
    {
    	return view();
    }

    //报告模板拖拽测试
    public function Dragtest()
    {
        return view();
    }
}
