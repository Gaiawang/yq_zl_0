<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"C:\xampp\htdocs\yq_zl_0\public/../application/index\view\index\reportcenter.html";i:1572158174;s:64:"C:\xampp\htdocs\yq_zl_0\application\index\view\public\_Left.html";i:1571898162;s:64:"C:\xampp\htdocs\yq_zl_0\application\index\view\public\_Menu.html";i:1571827967;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>报告中心</title>
		<link rel="stylesheet" type="text/css" href="/yq_zl_0/public/static/index/css/admin1.css"/>
		<link rel="stylesheet" type="text/css" href="/yq_zl_0/public/static/index/css/layui.css"/>
		<link rel="stylesheet" type="text/css" href="/yq_zl_0/public/static/index/css/Yq.css"/>
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
		<div style="width: 200px;height: 60px;background: #1890ff;"></div>
		<div style="margin-top: 1%;margin-left: 1%;">
			<a href="./Proposal">
				<button style="border: none;border-radius: 2px;background: #1890ff;color: white;width: 11%;height: 50px;">+&nbsp;&nbsp;创建方案</button>
			</a>
			<div style="margin-top: 1%">
				<img src="/yq_zl_0/public/static/index/images/a.png" style="width: 18px" />
				<span style="margin-left: 0.5%;font-weight: 550">XXXXX</span>
				<img src="/yq_zl_0/public/static/index/images/right.png" style="margin-left: 5.5%" />
			</div>
			<ul class="list_left" >
				<li  onclick='go(this.id)' id="Index"><img src="/yq_zl_0/public/static/index/images/case.png"><span>舆情情况</span></li>
				<li  onclick='go(this.id)' id="Search"><img src="/yq_zl_0/public/static/index/images/manage.png"><span>舆情管理</span></li>
				<li  onclick='go(this.id)' id="Search"><span style="font-weight: 500;margin-left: 1.7%;">舆情检索</span></li>
				<li  onclick='go(this.id)' id="HotEvent"><span style="font-weight: 500;margin-left: 1.7%;">热点事件</span></li>
				<li  onclick='go(this.id)' id="Report"><img src="/yq_zl_0/public/static/index/images/report.png"><span>舆情报告</span></li>
				<li  onclick='go(this.id)' id="Collect"><img src="/yq_zl_0/public/static/index/images/col.png"><span>舆情收藏</span></li>
				<li  onclick='go(this.id)' id="Warning"><img src="/yq_zl_0/public/static/index/images/col.png"><span>预警中心</span>
				<li  onclick='go(this.id)' id="ReportCenter"><img src="/yq_zl_0/public/static/index/images/col.png"><span>报告中心</span>
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
	</body>
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
			<div class="Div" style="padding-bottom: 2.5%;">
				<div class="title">
					<ul>
						<li style="font-size: 21px; font-weight: bolder;color: #1890ff;margin-top: -0.3%;">|</li>
						<li style="font-weight: bold; margin-left: 0.5%;">报告中心</li>
					</ul>
				</div>
				<div style="margin-top: 2%">
					<ul id="list1" style="margin-left: 2.5%">
						<li onclick='g(this.id)' id="v">简报列表</li>
						<li onclick='g(this.id)'id="g">自定义简报模板</li>
						<li onclick='g(this.id)' id="o">定时报告模板</li>
						<li onclick='g(this.id)' id="h">定时报告</li>
					</ul>
					<button class="new">+&nbsp;&nbsp;新建普通模板报告</button>
				</div>
			<div style="clear: both"></div>
		</div>
			<div class="Div1">
				<table class="table1">
					<tr>
						<th>默认模板</th>
						<th>创建时间</th>
						<th>操作</th>
					</tr>
					<tr>
						<td>清博报告 - 简洁版</td>
						<td>2019-10-23 14:17:20</td>
						<td><img src="/yq_zl_0/public/static/index/images/handle.png" style="width: 20px" /></td>
					</tr>
					<tr>
						<td>清博报告 - 简洁版</td>
						<td>2019-10-23 14:17:20</td>
						<td><img src="/yq_zl_0/public/static/index/images/handle.png" style="width: 20px" /></td>
					</tr>
					<tr>
						<td>清博报告 - 简洁版</td>
						<td>2019-10-23 14:17:20</td>
						<td><img src="/yq_zl_0/public/static/index/images/handle.png" style="width: 20px" /></td>
					</tr>
					<tr>
						<td>清博报告 - 简洁版</td>
						<td>2019-10-23 14:17:20</td>
						<td><img src="/yq_zl_0/public/static/index/images/handle.png" style="width: 20px" /></td>
					</tr>
					<tr>
						<td>清博报告 - 简洁版</td>
						<td>2019-10-23 14:17:20</td>
						<td><img src="/yq_zl_0/public/static/index/images/handle.png" style="width: 20px" /></td>
					</tr>
					<tr>
						<td>清博报告 - 简洁版</td>
						<td>2019-10-23 14:17:20</td>
						<td><img src="/yq_zl_0/public/static/index/images/handle.png" style="width: 20px" /></td>
					</tr>
					<tr>
						<td>清博报告 - 简洁版</td>
						<td>2019-10-23 14:17:20</td>
						<td><img src="/yq_zl_0/public/static/index/images/handle.png" style="width: 20px" /></td>
					</tr>
					<tr>
						<td>清博报告 - 简洁版</td>
						<td>2019-10-23 14:17:20</td>
						<td><img src="/yq_zl_0/public/static/index/images/handle.png" style="width: 20px" /></td>
					</tr>
					<tr>
						<td>清博报告 - 简洁版</td>
						<td>2019-10-23 14:17:20</td>
						<td><img src="/yq_zl_0/public/static/index/images/handle.png" style="width: 20px" /></td>
					</tr>
					<tr>
						<td>清博报告 - 简洁版</td>
						<td>2019-10-23 14:17:20</td>
						<td><img src="/yq_zl_0/public/static/index/images/handle.png" style="width: 20px" /></td>
					</tr>

				</table>
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

			function g(x)
			{
				d=document.getElementsByTagName('li')
				for(p=d.length;p--;){
					if(d[p].id!=x){
						d[p].style.color='#999999';
						d[p].style.border='1px solid #e1e1e1';
						d[p].style.background='#ffffff';
						/*其他*/}
					else{
						d[p].style.color='#1d83ef';
						d[p].style.border='1px solid #1d83ef';
						d[p].style.background='#e8f6ff';
						/*点击的*/}
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
	</body>
</html>
