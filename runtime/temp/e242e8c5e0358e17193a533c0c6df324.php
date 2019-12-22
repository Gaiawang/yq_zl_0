<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"F:\xampp\htdocs\yq_zl_0\public/../application/index\view\index\report.html";i:1572164263;s:64:"F:\xampp\htdocs\yq_zl_0\application\index\view\public\_Left.html";i:1571898162;s:64:"F:\xampp\htdocs\yq_zl_0\application\index\view\public\_Menu.html";i:1571827967;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>舆情报告</title>
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
			<div class="Div">
				<table class="Sele_table" cellpadding="0" border="1" width="1200" height="80">
					<tr>
						<td style="width: 10%;background-color: #f3f4fa"><span>事件标题</span></td>
						<td style="width: 40%">
							<input type="text"  placeholder="请输入流程名" style="border: none;padding-left: 7%;" />
							<button style="background-color: #1d83ef;border: none;background-color: #1d83ef; border: none;color: #fff;width: 11%;height: 94%;margin-left: 43%;">查询</button>
						</td >
						<td style="width: 10%;background-color: #f3f4fa"><span>时间</span></td>
						<td style="width: 40%">
							<div class="layui-form demoTable" action="" style="margin-left: 15px;margin-top:-3.8%; margin-bottom: -8%;">
								<div class="layui-form-item" style="margin-left:-15px;">
									<div class="layui-inline klo" style="margin-left:2.5%;">
										从:
									</div>
									<div class="layui-inline klo" style="width: 100px;">
										<input type="text" name="start_time" id="start_time" class="layui-input" placeholder="单据日期（起）" style="width:150px;height: 30px;"/>
									</div>
									<div class="layui-inline klo" style="margin-left:10.5%;">
										至
									</div>
									<div class="layui-inline klo" style="width: 100px;">
										<input type="text" name="end_time" id="end_time" class="layui-input" placeholder="2019-2-2" style="width:150px;height: 30px;"/>
										<div class="customer"></div>
									</div>
								</div>
							</div>
						</td >
					</tr>
					<tr>
						<td style="width: 10%;background-color: #f3f4fa"><span>简报类型</span></td>
						<td colspan="3" style="width: 40%">
							<ul id="list">
								<li onclick='g(this.id)' id="w">全部</li>
								<li onclick='g(this.id)' id="y">日常简报</li>
								<li onclick='g(this.id)'id="1">突发预警简报</li>
							</ul>
			          </td >
					</tr>

				</table>
			</div>
			<!--表格2-->
			<div class="Div1">
				<div class="layui-form" id="table-list" style=" margin-left: 2.7%">
					<table class="layui-table" lay-data="{width: 1200, height:400,  page:true, id:'idTest'}" lay-filter="demo">
						<thead>
						<tr>
							<th lay-data="{field:'id', width:300,align: 'center'}">编号</th>
							<th lay-data="{field:'username', width:300,align: 'center'}">标题</th>
							<th lay-data="{field:'city', width:300,align: 'center'}">简报类型</th>
							<th lay-data="{field:'sign', width:300,sort: true,align: 'center'}">创建时间</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>1</td>
							<td><a class="New">三岁女儿坐在沙发上吃...</a></td>
							<td class="hidden-xs">日常简报</td>
							<td class="hidden-xs">2017/09/17 18:20:02</td></td>
						</tr>
						<tr>
							<td>2</td>
							<td><a class="New">三岁女儿坐在沙发上吃...</a></td>
							<td class="hidden-xs">突发简报</td>
							<td class="hidden-xs">2017/09/17 18:20:02</td></td>
						</tr>
						<tr>
							<td>3</td>
							<td><a class="New">三岁女儿坐在沙发上吃...</a></td>
							<td class="hidden-xs">日常简报</td>
							<td class="hidden-xs">2017/09/17 18:20:02</td></td>
						</tr>
						<tr>
							<td>4</td>
							<td><a class="New">三岁女儿坐在沙发上吃...</a></td>
							<td class="hidden-xs">突发简报</td>
							<td class="hidden-xs">2017/09/17 18:20:02</td></td>
						</tr>
						<tr>
							<td>5</td>
							<td><a class="New">三岁女儿坐在沙发上吃...</a></td>
							<td class="hidden-xs">日常简报</td>
							<td class="hidden-xs">2017/09/17 18:20:02</td></td>
						</tr>
						<tr>
							<td>6</td>
							<td><a class="New">三岁女儿坐在沙发上吃...</a></td>
							<td class="hidden-xs">突发简报</td>
							<td class="hidden-xs">2017/09/17 18:20:02</td></td>
						</tr>
						<tr>
							<td>7</td>
							<td><a class="New">三岁女儿坐在沙发上吃...</a></td>
							<td class="hidden-xs">日常简报</td>
							<td class="hidden-xs">2017/09/17 18:20:02</td></td>
						</tr>
						<tr>
							<td>8</td>
							<td><a class="New">三岁女儿坐在沙发上吃...</a></td>
							<td class="hidden-xs">突发简报</td>
							<td class="hidden-xs">2017/09/17 18:20:02</td></td>
						</tr>
						<tr>
							<td>9</td>
							<td><a class="New">三岁女儿坐在沙发上吃...</a></td>
							<td class="hidden-xs">日常简报</td>
							<td class="hidden-xs">2017/09/17 18:20:02</td></td>
						</tr>
						<tr>
							<td>10</td>
							<td><a class="New">三岁女儿坐在沙发上吃...</a></td>
							<td class="hidden-xs">突发简报</td>
							<td class="hidden-xs">2017/09/17 18:20:02</td></td>
						</tr>
						<tr>
							<td>11</td>
							<td><a class="New">三岁女儿坐在沙发上吃...</a></td>
							<td class="hidden-xs">日常简报</td>
							<td class="hidden-xs">2017/09/17 18:20:02</td></td>
						</tr>
						<tr>
							<td>12</td>
							<td><a class="New">三岁女儿坐在沙发上吃...</a></td>
							<td class="hidden-xs">突发简报</td>
							<td class="hidden-xs">2017/09/17 18:20:02</td></td>
						</tr>
						</tbody>
					</table>
				</div>
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
			
			layui.use('laydate', function(){
  				var laydate = layui.laydate;
  				//日期时间选择器
	  			laydate.render({
	  			    elem: '#test5',
	  			    type: 'datetime'
	  			});
			});
		</script>
		<script>

			function g(x)
			{
				d=document.getElementsByTagName('li')
				for(p=d.length;p--;){
					if(d[p].id!=x){d[p].style.color='#000'/*其他*/}
					else{d[p].style.color='#1d83ef'/*点击的*/}
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
