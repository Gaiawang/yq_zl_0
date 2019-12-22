<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"F:\xampp\htdocs\yq_zl_0\public/../application/index\view\index\proposal.html";i:1572159550;s:64:"F:\xampp\htdocs\yq_zl_0\application\index\view\public\_Left.html";i:1571898162;s:64:"F:\xampp\htdocs\yq_zl_0\application\index\view\public\_Menu.html";i:1571827967;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>设置方案</title>
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
						<li style="font-weight: bold; margin-left: 0.5%;">设置方案</li>
					</ul>
				</div>
				<div class="Pro">
					<div class="right">
						<div>
							<span style="color: #e03143">*<span style="color: #666666;margin-left: 0.5%;font-size: 13px">方案名称</span></span>
							<input type="text" placeholder="请输入方案名称" style="">
						</div>
						<div style="margin-top: 2%">
							<span style="color: #e03143">*<span style="color: #666666;margin-left: 0.5%;font-size: 13px">所属分类</span></span>
								<select>
									<option>选择方案分类</option>
									<option>方案分类一</option>
									<option>方案分类二</option>
								</select>
							<img src="/yq_zl_0/public/static/index/images/add.png" style="width: 20px;margin-left: 2%"><span style="color: #1d83ef;margin-left: 0.5%;font-size: 13px">添加分类</span>
						</div>
						<div style="margin-top: 2%">
							<span style="font-weight: bolder;font-size: 15px;">分析词设置（必填）</span>
						</div>
						<div style="margin-top: 2%">
							<span style="color: #e03143">*<span style="color: #666666;margin-left: 0.5%;font-size: 13px">分析词</span></span>
							<input type="text" placeholder="输入多个分析关键词，多个词用“，”隔开" style="margin-left: 1%">
						</div>
						<div style="margin-top: 2%">
							<img src="/yq_zl_0/public/static/index/images/add.png" style="width: 20px;">
							<span style="color: #1d83ef;margin-left: 0.5%;font-size: 13px">添加“或”的关键词</span>
							<span style="color: #666666;margin-left: 12%;font-size: 13px">（每组分析词是或的关系，最多支持10个关键词）</span>
						</div>
						<div style="margin-top: 2%">
							<span style="font-weight: bolder;font-size: 15px;">特征词设置（选填）</span>
						</div>
						<div style="margin-top: 2%">
							<span style="color: #666666;margin-left: 0.5%;font-size: 13px">歧义词</span>
							<input type="text" placeholder="输入多个歧义词，多个词用“，”隔开，最多支持10个关键词" style="margin-left: 1%">
						</div>
						<div style="margin-top: 1%">
							<span style="color: #666666;margin-left: 8%;font-size: 13px">（例：分析词为清华大学，歧义词为清华大学生，清华大学生将不会再进行高亮）</span>
						</div>
						<div style="margin-top: 2%">
							<span style="color: #666666;margin-left: 0.5%;font-size: 13px">排除词</span>
							<input type="text" placeholder="输入多个排除词，多个词用“，”隔开，最多支持50个关键词" style="margin-left: 1%">
						</div>
						<div style="margin-top: 1%">
							<span style="color: #666666;margin-left: 26.5%;font-size: 13px">（包含排除词的信息将不会进入分析结果）</span>
						</div>
						<div style="margin-top: 4%">
							<button style="color: #FFFFFF;font-size: 12px;border: none;background: #1d83ef;width: 5%;height: 30px;border-radius: 4px;">编辑</button>
						</div>
					</div>
					<div class="left">
						<table>
							<tr style="background: #f3f4fa">
								<th style="text-align: left; padding-left: 2%;"><span>方案预览</span></th>
							</tr>
							<tr>
								<td></td>
							</tr>
						</table>
					</div>
				</div>

			</div>
			<div style="clear: both"></div>
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
