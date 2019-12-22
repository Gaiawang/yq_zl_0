<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"C:\xampp\htdocs\yq_zl\public/../application/index\view\index\warning.html";i:1571898285;s:62:"C:\xampp\htdocs\yq_zl\application\index\view\public\_Left.html";i:1571898162;s:62:"C:\xampp\htdocs\yq_zl\application\index\view\public\_Menu.html";i:1571827967;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>预警中心</title>
		<link rel="stylesheet" type="text/css" href="/yq_zl/public/static/index/css/admin1.css" />
		<link rel="stylesheet" type="text/css" href="/yq_zl/public/static/index/css/layui.css" />
	</head>

	<body>
		<!-- 左侧导航-beg -->
	    <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>舆情检索</title>
		<link rel="stylesheet" type="text/css" href="/yq_zl/public/static/index/css/admin1.css"/>
		<link rel="stylesheet" type="text/css" href="/yq_zl/public/static/index/css/layui.css"/>
		<link rel="stylesheet" type="text/css" href="/yq_zl/public/static/index/css/Yq.css"/>
	</head>
	<body>
	<div>
		<div style="width: 200px;height: 60px;background: #1890ff;"></div>
		<div style="margin-top: 1%;margin-left: 1%;">
			<a href="./Proposal">
				<button style="border: none;border-radius: 2px;background: #1890ff;color: white;width: 11%;height: 50px;">+&nbsp;&nbsp;创建方案</button>
			</a>
			<div style="margin-top: 1%">
				<img src="/yq_zl/public/static/index/images/a.png" style="width: 18px" />
				<span style="margin-left: 0.5%;font-weight: 550">XXXXX</span>
				<img src="/yq_zl/public/static/index/images/right.png" style="margin-left: 5.5%" />
			</div>
			<ul class="list_left" >
				<li  onclick='go(this.id)' id="Index"><img src="/yq_zl/public/static/index/images/case.png"><span>舆情情况</span></li>
				<li  onclick='go(this.id)' id="Search"><img src="/yq_zl/public/static/index/images/manage.png"><span>舆情管理</span></li>
				<li  onclick='go(this.id)' id="Search"><span style="font-weight: 500;margin-left: 1.7%;">舆情检索</span></li>
				<li  onclick='go(this.id)' id="HotEvent"><span style="font-weight: 500;margin-left: 1.7%;">热点事件</span></li>
				<li  onclick='go(this.id)' id="Report"><img src="/yq_zl/public/static/index/images/report.png"><span>舆情报告</span></li>
				<li  onclick='go(this.id)' id="Collect"><img src="/yq_zl/public/static/index/images/col.png"><span>舆情收藏</span></li>
				<li  onclick='go(this.id)' id="Warning"><img src="/yq_zl/public/static/index/images/col.png"><span>预警中心</span>
				<li  onclick='go(this.id)' id="ReportCenter"><img src="/yq_zl/public/static/index/images/col.png"><span>报告中心</span>
			</ul>
		</div>

	</div>
		<script type="text/javascript" src="/yq_zl/public/static/index/js/jquery-3.3.1.js"></script>
		<script src="/yq_zl/public/static/index/js/layui1.js" type="text/javascript" charset="utf-8"></script>
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
		<link rel="stylesheet" type="text/css" href="/yq_zl/public/static/index/css/admin1.css"/>
		<link rel="stylesheet" type="text/css" href="/yq_zl/public/static/index/css/layui.css"/>
		<link rel="stylesheet" type="text/css" href="/yq_zl/public/static/index/css/Yq.css"/>
	</head>
	<body>
		<div style="height: 60px;background: #FFFFFF;">
			<img src="/yq_zl/public/static/index/images/ld.png" style="width: 15px;margin-right: 13%;float: right;margin-top: 1.5%;" />
			<span style="height: 15px;border-right: 1px solid #8f94a1;float: right;margin-top: 1.7%;margin-right: -35px;"></span>
			<img src="/yq_zl/public/static/index/images/tx.png" style="width: 30px;margin-right: -6%;float: right;margin-top: 1%;" />
			<span style="float: right;margin-right: -12%;margin-top: 1.3%;">
				<a href="javascript:;" data-url="admin-info.html" data-id='5' data-text="个人信息">杨阳洋 <i class="layui-icon">&#xe61a;</i></a>
			</span>
		</div>
		<script type="text/javascript" src="/yq_zl/public/static/index/js/jquery-3.3.1.js"></script>
	</body>
</html>

		    <!-- 顶部导航-end -->
			<div style="margin-top: 1.2%;display: inline-block;height: 400px;width: 644px;background: #FFFFFF;margin-left: 1%;border-radius: 10px;">
				<span class="yline"></span>
				<span style="position: absolute;top: 13%;left: 3.8%;font-weight: 800;">
					预警来源设置
				</span>
				<span style="position: absolute;top: 13%;left: 35%;color: #8f94a1;">
					预警接收一键开关
					<span style="position: absolute;top: -1%;right: -50%;">
						<input type="checkbox" name="sex" id="male" class="chooseBtn" />
					    <label for="male" class="choose-label">
                        </label>
					</span>
				</span>
				<span style="position: absolute;top: 19%;left: 2.6%;font-weight: 600;font-size: 40px;">
					3067
				</span>
				<span style="position: absolute;top: 25%;left: 2.6%;color: #8f94a1;">
					关键词预警信息量
				</span>
				<div class="layui-anim layui-anim-scaleSpring yuan">
					<img src="/yq_zl/public/static/index/images/yj.png" style="position: absolute;top: 22%;left: 33%;" />
					<span style="position: absolute;top: 130px;left: 30%;color: #FFFFFF;font-size: 20px;">
						预警设置
					</span>
				</div>
				<div class="layui-anim layui-anim-scaleSpring yuan1">
					<span style="position: absolute;top: 60px;left: 25%;color: #FFFFFF;font-size: 20px;">
						接收设置
					</span>
				</div>
				<div class="layui-anim layui-anim-scaleSpring yuan2">
					<span style="position: absolute;top: 60px;left: 18%;color: #FFFFFF;font-size: 20px;">
						关键词设置
					</span>
				</div>
			</div>

			<div style="display: inline-block;height: 400px;width: 644px;background: #FFFFFF;margin-left: 1%;border-radius: 10px;">
				<span class="yline1"></span>
				<span style="position: absolute;top: 13%;left: 53.5%;font-weight: 800;">
					预警趋势
				</span>
				<div class="layui-form">
					<table class="layui-table" style="width: 93%;margin: 9% auto;">
						<colgroup>
							<col width="50">
							<col width="50">
							<col width="50">
							<col width="50">
							<col width="50">
						</colgroup>
						<thead>
							<tr>
								<th class="a">红色预警</th>
								<th class="b">红色预警</th>
								<th class="c">黄色预警</th>
								<th class="d">灰色预警</th>
								<th class="e">绿色预警</th>
							</tr>
						</thead>
						<tbody>
							<tr align="center">
								<td>POI>800</td>
								<td>POI>600</td>
								<td>POI>300</td>
								<td>POI>100</td>
								<td>POI>100</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div id="zhu" style="height: 300px;width: 47%;position: absolute;left: 51%;margin-top: -8%;"></div>
			</div>

			<div style="height: 400px;width: 99%;background: #FFFFFF;margin-left: 1%;margin-top: 1.2%;border-radius: 10px;">
				<span class="yline2"></span>
				<span style="position: absolute;top: 69%;left: 3.8%;font-weight: 800;">
					预警信息列表
				</span>
				<div style="position: absolute;top: 73%;left: 1.5%;">
					<table class="layui-hide" id="test"></table>
				</div>
			</div>

			<div style="height: 20px;">

			</div>

		</div>
	</body>
	<script src="/yq_zl/public/static/index/js/layui1.js" type="text/javascript" charset="utf-8"></script>
	<script src="/yq_zl/public/static/index/js/echarts.js" type="text/javascript" charset="utf-8"></script>

	<script type="text/javascript">
		var dom = document.getElementById("zhu");
		var myChart = echarts.init(dom);
		var app = {};
		option = null;
		app.title = '堆叠柱状图';

		option = {
			tooltip: {
				trigger: 'axis',
				axisPointer: { // 坐标轴指示器，坐标轴触发有效
					type: 'shadow' // 默认为直线，可选为：'line' | 'shadow'
				}
			},
			grid: {
				left: '3%',
				right: '4%',
				bottom: '3%',
				containLabel: true
			},
			xAxis: [{
				type: 'category',
				data: ['周一', '周二', '周三', '周四', '周五', '周六', '周日']
			}],
			yAxis: [{
				type: 'value'
			}],
			series: [{
					name: '直接访问',
					type: 'bar',
					data: [320, 332, 301, 334, 390, 330, 320]
				},
				{
					name: '邮件营销',
					type: 'bar',
					stack: '广告',
					data: [120, 132, 101, 134, 90, 230, 210]
				},
				{
					name: '联盟广告',
					type: 'bar',
					stack: '广告',
					data: [220, 182, 191, 234, 290, 330, 310]
				},
				{
					name: '视频广告',
					type: 'bar',
					stack: '广告',
					data: [150, 232, 201, 154, 190, 330, 410]
				},
				{
					name: '搜索引擎',
					type: 'bar',
					data: [862, 1018, 964, 1026, 1679, 1600, 1570],
					markLine: {
						lineStyle: {
							normal: {
								type: 'dashed'
							}
						},
						data: [
							[{
								type: 'min'
							}, {
								type: 'max'
							}]
						]
					}
				},
				{
					name: '百度',
					type: 'bar',
					barWidth: 5,
					stack: '搜索引擎',
					data: [620, 732, 701, 734, 1090, 1130, 1120]
				},
				{
					name: '谷歌',
					type: 'bar',
					stack: '搜索引擎',
					data: [120, 132, 101, 134, 290, 230, 220]
				},
				{
					name: '必应',
					type: 'bar',
					stack: '搜索引擎',
					data: [60, 72, 71, 74, 190, 130, 110]
				},
				{
					name: '其他',
					type: 'bar',
					stack: '搜索引擎',
					data: [62, 82, 91, 84, 109, 110, 120]
				}
			]
		};;
		if(option && typeof option === "object") {
			myChart.setOption(option, true);
		}
	</script>

    <script type="text/javascript">
    	layui.use('table', function(){
  var table = layui.table;
  
  table.render({
    elem: '#test'
//  ,url:'/demo/table/user/'
    ,page: { //支持传入 laypage 组件的所有参数（某些参数除外，如：jump/elem） - 详见文档
      layout: ['limit', 'count', 'prev', 'page', 'next', 'skip'] //自定义分页布局
      //,curr: 5 //设定初始在第 5 页
      ,groups: 1 //只显示 1 个连续页码
      ,first: false //不显示首页
      ,last: false //不显示尾页
      
    }
    ,width: 1290
    ,cols: [[
       {type:'checkbox',}
      ,{field:'id', width:950,}
      ,{field:'username', width:100,}
      ,{field:'sex', width:100,}
      ,{field:'city', width:100,}
    ]],
    data: [{
					"id": "1000",
					"sf": "内蒙古自治区",
					"yq": "255"
				},
				{
					"id": "1000",
					"sf": "内蒙古自治区",
					"yq": "255"
				},
				{
					"id": "1000",
					"sf": "内蒙古自治区",
					"yq": "255"
				},
				{
					"id": "1000",
					"sf": "内蒙古自治区",
					"yq": "255"
				},
				{
					"id": "1000",
					"sf": "内蒙古自治区",
					"yq": "255"
				},
				{
					"id": "1000",
					"sf": "内蒙古自治区",
					"yq": "255"
				},
			]
    
  });
});
    </script>
</html>