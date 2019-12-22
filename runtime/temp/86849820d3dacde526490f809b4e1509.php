<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"F:\xampp\htdocs\yq_zl_0\public/../application/index\view\index\collect.html";i:1572161555;s:64:"F:\xampp\htdocs\yq_zl_0\application\index\view\public\_Left.html";i:1576910441;s:64:"F:\xampp\htdocs\yq_zl_0\application\index\view\public\_Menu.html";i:1571827967;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>舆情收藏</title>
	<link rel="stylesheet" type="text/css" href="/yq_zl_0/public/static/index/css/admin1.css" />
	<link rel="stylesheet" type="text/css" href="/yq_zl_0/public/static/index/css/layui.css" />
	<link rel="stylesheet" type="text/css" href="/yq_zl_0/public/static/index/css/Yq.css" />
</head>

<body>
<!-- 左侧导航-beg -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>舆情检索</title>
		<link rel="stylesheet" type="text/css" href="/yq_zl_0/public/static/index/css/admin1.css"/>
		<link rel="stylesheet" type="text/css" href="/yq_zl_0/public/static/index/css/layui.css"/>
		<link rel="stylesheet" type="text/css" href="/yq_zl_0/public/static/index/css/Yq.css"/>
	</head>
	<body>
	<div>
		<div style="width: 200px;height: 60px;background: #1890ff;">
			<h2>网站检测</h2>
		</div>
		<div class="list" style="float:left;width: 200px" >
			<ul id="ul1" >
				<li><a href="#" class="inactive">应用性能持续监测</a>
					<ul>
						<li><a href="#" class="inactive">移动检测</a>
							<ul>
								<li><a href="#">移动web app检测</a></li>
								<li><a href="#">移动Native APP即时监测</a></li>
								<li><a href="#">移动端到端真机检测</a></li>
							</ul>
						</li>
						<li><a href="#" class="inactive">WEB监测</a>
							<ul>
								<li><a href="#">PC 端到端真机检测</a></li>
								<li><a href="#">PC JS监测</a></li>
								<li><a href="#">网络检测</a></li>
								<li><a href="#">可用性检测</a></li>
								<li><a href="#">流媒体监测</a></li>
								<li><a href="#">流媒体flash检测</a></li>
							</ul>
						</li>
						<li><a href="#" class="inactive">应用检测</a>
							<ul>
								<li><a href="#">语言类检测</a></li>
								<li><a href="#">平台类监测</a></li>
								<li><a href="#">数据库类检测</a></li>
							</ul>
						</li>
						<li><a href="#">日志监测</a></li>
					</ul>
				</li>
				<li ><a href="#" class="inactive" >应用性能即时监测</a>
					<ul>

						<li><a href="<?php echo url("RealTimeMonitoring/whole_view"); ?>" target="displayArea">综合评分</a></li>
						<li><a href="<?php echo url("Webperformancemonitoring/pc"); ?>" target="displayArea">PC即时检测</a></li>
						<li><a href="<?php echo url("Webperformancemonitoring/pad"); ?>" target="displayArea">移动WEB APP即时监测</a></li>
						<li><a href="<?php echo url("Webperformancemonitoring/mobile"); ?>" target="displayArea">移动APP即时监测</a></li>
						<li><a href="#"  class="inactive">网络即时监测</a>
							<ul>
								<li><a href="<?php echo url("Networkmonitoring/distributedgraph"); ?>" target="displayArea">分布视图</a></li>
								<li><a href="<?php echo url("Networkmonitoring/analysis"); ?>" target="displayArea">解析视图</a></li>
								<li><a href="<?php echo url("Networkmonitoring/mainframes_view"); ?>" target="displayArea">主机视图</a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>

	</div>
		<script type="text/javascript" src="/yq_zl_0/public/static/index/js/jquery-3.3.1.js"></script>
		<script src="/yq_zl_0/public/static/index/js/layui1.js" type="text/javascript" charset="utf-8"></script>
		<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
		<script type="text/javascript">
			//给所有 .box input 元素添加 checked =  ckAll 当前的状态；
			//prop('checked',value) ,第一个值获取属性，第二个值：设置属性值。prop只有一个参数时，表示获取元素属性。
			$('#ckAll').click(function(){
				$('.box input').prop('checked',$(this).prop('checked'));
			});
			$('.box input').click(function(){
				//each 便利每一个元素，让其执行该函数
				$('.box input').each(function(){
					if(!$(this).prop('checked')){
						$('#ckAll').prop('checked',false);
						//有一个不满足就 跳出该循环，避免执行下面
						return false;
					}else{
						$('#ckAll').prop('checked',true);
					}
				})
			})

			$('#ckAll1').click(function(){
				$('.box1 input').prop('checked',$(this).prop('checked'));
			});
			$('.box1 input').click(function(){
				//each 便利每一个元素，让其执行该函数
				$('.box1 input').each(function(){
					if(!$(this).prop('checked')){
						$('#ckAll1').prop('checked',false);
						//有一个不满足就 跳出该循环，避免执行下面
						return false;
					}else{
						$('#ckAll1').prop('checked',true);
					}
				})
			})
		</script>
		<script>

			 function go(x)
			 {
				d=document.getElementsByTagName('li')
				for(p=d.length;p--;){
					if(d[p].id!=x){d[p].style.color='#000'/*其他*/}
					else{d[p].style.color='#1d83ef'/*点击的*/}
				}
				window.location="./"+x;
			}


		</script>
		<script>
			layui.use('table', function () {
				var table = layui.table;
				//监听表格复选框选择
				table.on('checkbox(demo)', function (obj) {
					console.log(obj)
				});
				//监听工具条
				table.on('tool(demo)', function (obj) {
					var data = obj.data;
					if (obj.event === 'detail') {
						layer.msg('ID：' + data.id + ' 的查看操作');
					} else if (obj.event === 'del') {
						layer.confirm('真的删除行么', function (index) {
							obj.del();
							layer.close(index);
						});
					} else if (obj.event === 'edit') {
						layer.alert('编辑行：<br>' + JSON.stringify(data))
					}
				});

				var $ = layui.$, active = {
					getCheckData: function () { //获取选中数据
						var checkStatus = table.checkStatus('idTest')
								, data = checkStatus.data;
						layer.alert(JSON.stringify(data));
					}
					, getCheckLength: function () { //获取选中数目
						var checkStatus = table.checkStatus('idTest')
								, data = checkStatus.data;
						layer.msg('选中了：' + data.length + ' 个');
					}
					, isAll: function () { //验证是否全选
						var checkStatus = table.checkStatus('idTest');
						layer.msg(checkStatus.isAll ? '全选' : '未全选')
					}
				};

				$('.demoTable .layui-btn').on('click', function () {
					var type = $(this).data('type');
					active[type] ? active[type].call(this) : '';
				});
			});
		</script>
	<script type="text/javascript" src="static/js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.inactive').click(function(){
				if($(this).siblings('ul').css('display')=='none'){
					$(this).addClass('inactives');
					$(this).siblings('ul').slideDown(100).children('li');
				}else{
					$(this).removeClass('inactives');
					$(this).siblings('ul').slideUp(100);
				}
			})
		});
	</script>
	</body>
<style>
	.list ul li{background-color:#467ca2; border:solid 1px #316a91; border-bottom:0;}
	.list ul li a{padding-left: 10px;color: #fff; font-size:12px; display: block; font-weight:bold; height:36px;line-height: 36px;position: relative;
	}
	.list ul li .inactive{  no-repeat 184px center;}
	.list ul li .inactives{no-repeat 184px center;}
	.list ul li ul{display: none;}
	.list ul li ul li { border-left:0; border-right:0; background-color:#6196bb; border-color:#467ca2;}
	.list ul li ul li ul{display: none;}
	.list ul li ul li a{ padding-left:20px;}
	.list ul li ul li ul li { background-color:#d6e6f1; border-color:#6196bb; }
	.last{ background-color:#d6e6f1; border-color:#6196bb; }
	.list ul li ul li ul li a{ color:#316a91; padding-left:30px;}
</style>
</html>

<!-- 左侧导航-end -->
<div class="row">
	<!-- 顶部导航-beg -->
	<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>舆情检索</title>
		<link rel="stylesheet" type="text/css" href="/yq_zl_0/public/static/index/css/admin1.css"/>
		<link rel="stylesheet" type="text/css" href="/yq_zl_0/public/static/index/css/layui.css"/>
		<link rel="stylesheet" type="text/css" href="/yq_zl_0/public/static/index/css/Yq.css"/>
	</head>
	<body>
		<div style="height: 60px;background: #FFFFFF;">
			<img src="/yq_zl_0/public/static/index/images/ld.png" style="width: 15px;margin-right: 13%;float: right;margin-top: 1.5%;" />
			<span style="height: 15px;border-right: 1px solid #8f94a1;float: right;margin-top: 1.7%;margin-right: -35px;"></span>
			<img src="/yq_zl_0/public/static/index/images/tx.png" style="width: 30px;margin-right: -6%;float: right;margin-top: 1%;" />
			<span style="float: right;margin-right: -12%;margin-top: 1.3%;">
				<a href="javascript:;" data-url="admin-info.html" data-id='5' data-text="个人信息">杨阳洋 <i class="layui-icon">&#xe61a;</i></a>
			</span>
		</div>
		<script type="text/javascript" src="/yq_zl_0/public/static/index/js/jquery-3.3.1.js"></script>
	</body>
</html>

	<!-- 顶部导航-end -->
	<!--表格1-->
	<div class="Div">
		<table class="Sele_table" cellpadding="0" border="1" width="1200" height="40">
			<tr>
				<td style="width: 10%;background-color: #f3f4fa"><span>标题</span></td>
				<td style="width: 40%">
					<input type="text" placeholder="请输入标题" style="border: none;padding-left: 7%;" id="news_title"/>
				</td>
				<td style="width: 10%;background-color: #f3f4fa"><span>时间</span></td>
				<td style="width: 40%">
					<div class="layui-form demoTable" action="" style="margin-left: 15px;margin-top:-3.8%; margin-bottom: -8%;">
						<div class="layui-form-item" style="margin-left:-15px;margin-top: 3.8%;">
							<div class="layui-inline klo" style="margin-left:2.5%;">
								从:
							</div>
							<div class="layui-inline klo" style="width: 100px;">
								<input type="text" name="start_time" id="start_time" class="layui-input" placeholder="单据日期（起）" style="width:150px;height: 30px;" />
							</div>
							<div class="layui-inline klo" style="margin-left:10.5%;">
								至
							</div>
							<div class="layui-inline klo" style="width: 100px;">
								<input type="text" name="end_time" id="end_time" class="layui-input" placeholder="2019-2-2" style="width:150px;height: 30px;" />
								<div class="customer"></div>
							</div>

						</div>
						<button class="layui-btn layui-btn-normal" data-type="reload" style="height: 30px; line-height: 20px;margin-top: -21%;margin-left: 86%;" onclick="search()">
							查询</button>
					</div>

				</td>
			</tr>
		</table>
	</div>
	<!--表格2-->
	<div class="Div1">
		<div class="layui-form" id="table-list" style=" margin-left: 2.7%">
			<table id="tableData" lay-filter="test"></table>
		</div>
	</div>
</div>
<script type="text/javascript">
	layui.use('laydate', function() {
		var laydate = layui.laydate;

		//日期时间选择器
		laydate.render({
			elem: '#start_time',
			type: 'datetime'
		});
	})
</script>
<script type="text/javascript" src="/yq_zl_0/public/static/index/js/jquery-3.3.1.js"></script>
<script src="/yq_zl_0/public/static/index/js/layui1.js" type="text/javascript" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script type="text/javascript">
	//给所有 .box input 元素添加 checked =  ckAll 当前的状态；
	//prop('checked',value) ,第一个值获取属性，第二个值：设置属性值。prop只有一个参数时，表示获取元素属性。
	$('#ckAll').click(function() {
		$('.box input').prop('checked', $(this).prop('checked'));
	});
	$('.box input').click(function() {
		//each 便利每一个元素，让其执行该函数
		$('.box input').each(function() {
			if(!$(this).prop('checked')) {
				$('#ckAll').prop('checked', false);
				//有一个不满足就 跳出该循环，避免执行下面
				return false;
			} else {
				$('#ckAll').prop('checked', true);
			}
		})
	})

	$('#ckAll1').click(function() {
		$('.box1 input').prop('checked', $(this).prop('checked'));
	});
	$('.box1 input').click(function() {
		//each 便利每一个元素，让其执行该函数
		$('.box1 input').each(function() {
			if(!$(this).prop('checked')) {
				$('#ckAll1').prop('checked', false);
				//有一个不满足就 跳出该循环，避免执行下面
				return false;
			} else {
				$('#ckAll1').prop('checked', true);
			}
		})
	})

	//取消收藏
	function collectionHandler(id){
		if(confirm("是否取消收藏？")){
			$.ajax({
				type:"post",
				contentType: 'application/x-www-form-urlencoded;charset=utf-8',
				url:"<?php echo url('uncollectList'); ?>",
				data:{id: id},
				dataType: "json",
				success:function(data){
					showTable(data.data);
				},
				error:function(e){  
		            console.log(e);  
				}
			});
		}
	}
	
	//渲染表格数据
	function showTable(data) {
		var table = layui.table;
		table.render({
			elem: '#tableData',
		    width: 1200,
			height: 500,
		    data: data,
		    page: true, //开启分页
		    cols: [[ //表头
              {field:'news_title', width:240, align: 'center', title: '标题',
		           templet:function(d){
			         return '<a class="New">'+d.news_title+'</a>';
	            }},
				{field:'news_emotion', width:240,align: 'center', title: '属性'},
				{field:'news_source', width:240, align: 'center', title: '来源'},
				{field:'news_time', width:240, sort: true,align: 'center', title: '时间'},
				{field:'experience', width:240, align: 'center', title: '操作',
	               templet:function(d){
			         return '<span><a class="New">查看原文</a></span>'
			         		+'<span style="padding-left: 7%"><a class="New" href="javascript:collectionHandler('
			         		+d.id+')">取消收藏</a></span>';
	            }}
		    ]]
		});
	}
	
	//搜索列表
	function search() {
		var title = $("#news_title").val();
		var start = $("#start_time").val();
		var end = $("#end_time").val();
		
		$.ajax({
			type:"post",
			contentType: 'application/x-www-form-urlencoded;charset=utf-8',
			url:"<?php echo url('CollectList'); ?>",
			data:{title: title,start: start,end: end},
			dataType: "json",
			success:function(data){
				showTable(data.data);
			},
			error:function(e){  
	            console.log(e);  
			}
		});
	}
	
	function g(x) {
		d = document.getElementsByTagName('li')
		for(p = d.length; p--;) {
			if(d[p].id != x) {
				d[p].style.color = '#000' /*其他*/
			} else {
				d[p].style.color = '#1d83ef' /*点击的*/
			}
		}
	}

	layui.use('laydate', function() {
		var laydate = layui.laydate;

		//常规用法
		laydate.render({
			elem: '#start_time'
		});
		laydate.render({
			elem: '#end_time'
		});

	});
</script>
<script>
	layui.use('table', function() {
		var table = layui.table;
		//监听表格复选框选择
		table.on('checkbox(demo)', function(obj) {
			console.log(obj)
		});
		//监听工具条
		table.on('tool(demo)', function(obj) {
			var data = obj.data;
			if(obj.event === 'detail') {
				layer.msg('ID：' + data.id + ' 的查看操作');
			} else if(obj.event === 'del') {
				layer.confirm('真的删除行么', function(index) {
					obj.del();
					layer.close(index);
				});
			} else if(obj.event === 'edit') {
				layer.alert('编辑行：<br>' + JSON.stringify(data))
			}
		});

		var $ = layui.$,
				active = {
					getCheckData: function() { //获取选中数据
						var checkStatus = table.checkStatus('idTest'),
								data = checkStatus.data;
						layer.alert(JSON.stringify(data));
					},
					getCheckLength: function() { //获取选中数目
						var checkStatus = table.checkStatus('idTest'),
								data = checkStatus.data;
						layer.msg('选中了：' + data.length + ' 个');
					},
					isAll: function() { //验证是否全选
						var checkStatus = table.checkStatus('idTest');
						layer.msg(checkStatus.isAll ? '全选' : '未全选')
					}
				};

		$('.demoTable .layui-btn').on('click', function() {
			var type = $(this).data('type');
			active[type] ? active[type].call(this) : '';
		});
		
		//初始化表格数据
		table.render({
		    elem: '#tableData',
		    width: 1200,
			height: 500,
		    url: 'CollectList',
		    page: true, //开启分页
		    cols: [[ //表头
		        {field:'news_title', width:240, align: 'center', title: '标题',
		           templet:function(d){
			         return '<a class="New">'+d.news_title+'</a>';
	            }},
				{field:'news_emotion', width:240,align: 'center', title: '属性'},
				{field:'news_source', width:240, align: 'center', title: '来源'},
				{field:'news_time', width:240, sort: true,align: 'center', title: '时间'},
				{field:'experience', width:240, align: 'center', title: '操作',
	               templet:function(d){
			         return '<span><a class="New">查看原文</a></span>'
			         		+'<span style="padding-left: 7%"><a class="New" href="javascript:collectionHandler('
			         		+d.id+')">取消收藏</a></span>';
	            }}
		    ]]
		 });
		//重新渲染表格
		search();
	});
</script>
</body>

</html>