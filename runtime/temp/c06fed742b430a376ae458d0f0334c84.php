<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"C:\xampp\htdocs\yq_zl\public/../application/index\view\index\search.html";i:1572226296;s:62:"C:\xampp\htdocs\yq_zl\application\index\view\public\_Left.html";i:1571898162;s:62:"C:\xampp\htdocs\yq_zl\application\index\view\public\_Menu.html";i:1571827967;}*/ ?>
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
			<!--表格1-->
			<div class="Div">
				<table class="Sele_table" cellpadding="0" border="1" width="1200" height="150">
					<tr>
						<td style="width: 10%;background-color: #f3f4fa"><span>时间</span></td>
						<td colspan="3" style="width: 40%">
							<ul id="list">
								<li onclick='g(this.id)' id="0">今天</li>
								<li onclick='g(this.id)' id="1">24小时</li>
								<li onclick='g(this.id)' id="3">3天</li>
								<li onclick='g(this.id)' id="7">7天</li>
								<li class="button" onclick='g(this.id)'id="-1">自定义</li>
								<li>
									<div class="layui-form demoTable" id="time" action="" style="margin-left: 15px;margin-top: -1%;margin-bottom: -8%;width: 167%;">
									<div class="layui-form-item" style="margin-left:-15px;">
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
								</div>
								</li>
							</ul>
			          </td >
					</tr>
					<tr>
						<td style="width: 10%;background-color: #f3f4fa"><span>省份</span></td>
						<td style="width: 40%">
							<select>
                                <option value="0">北京市</option>
                                <option>天津市</option>
                                <option>上海市</option>
                                <option>重庆市</option>
                                <option>河北省</option>
                                <option>山西省</option>
                                <option>辽宁省</option>
                                <option>吉林省</option>
                                <option>黑龙江省</option>
                                <option>江苏省</option>
								<option>浙江省</option>
								<option>安徽省</option>
								<option>福建省</option>
								<option>江西省</option>
								<option>山东省</option>
								<option>河南省</option>
								<option>湖北省</option>
								<option>湖南省</option>
								<option>广东省</option>
								<option>海南省</option>
								<option>四川省</option>
								<option>贵州省</option>
								<option>云南省</option>
								<option>陕西市</option>
								<option>甘肃省</option>
								<option>青海省</option>
								<option>台湾省</option>
								<option>内蒙古自治区</option>
								<option>广西壮族自治区</option>
								<option>西藏自治区</option>
								<option>宁夏回族自治区</option>
								<option>新疆维吾尔自治区</option>
								<option>香港特别行政区</option>
								<option>澳门特别行政区</option>
							</select>
						</td >
						<td style="width: 10%;background-color: #f3f4fa"><span>重点关注对象</span></td>
						<td style="width: 40%">
							<select>
                                <option value="0">北京市</option>
                                <option>天津市</option>
                                <option>上海市</option>
                                <option>重庆市</option>
                                <option>河北省</option>
                                <option>山西省</option>
                                <option>辽宁省</option>
                                <option>吉林省</option>
                                <option>黑龙江省</option>
                                <option>江苏省</option>
								<option>浙江省</option>
								<option>安徽省</option>
								<option>福建省</option>
								<option>江西省</option>
								<option>山东省</option>
								<option>河南省</option>
								<option>湖北省</option>
								<option>湖南省</option>
								<option>广东省</option>
								<option>海南省</option>
								<option>四川省</option>
								<option>贵州省</option>
								<option>云南省</option>
								<option>陕西市</option>
								<option>甘肃省</option>
								<option>青海省</option>
								<option>台湾省</option>
								<option>内蒙古自治区</option>
								<option>广西壮族自治区</option>
								<option>西藏自治区</option>
								<option>宁夏回族自治区</option>
								<option>新疆维吾尔自治区</option>
								<option>香港特别行政区</option>
								<option>澳门特别行政区</option>
							</select>
						</td >
					</tr>
					<tr>
						<td style="width: 10%;background-color: #f3f4fa"><span>舆情属性(多选)</span></td>
						<td style="width: 40%">
							<form class="input">
								<input type="checkbox" value="全部"id="ckAll" /> 全部
								<div class="box">
									<input type="checkbox" value="负面"  name="checkname" id="fu" /> 负面
									<input type="checkbox" value="中性"  name="checkname" id="meddl" /> 中性
									<input type="checkbox" value="正面"  name="checkname" id="top" /> 正面
								</div>
							</form>
						</td >
						<td style="width: 10%;background-color: #f3f4fa"><span>舆情主题</span></td>
						<td style="width: 40%">
							<select>
								<option value="0">全部</option>
								<option>主题一</option>
								<option>主题二</option>
								<option>主题三</option>
							</select>
						</td >
					</tr>
					<tr>
						<td style="width: 10%;background-color: #f3f4fa"><span>数据来源(多选)</span></td>
						<td style="width: 40%">
							<form class="input">
								<input type="checkbox" value="全部" id="ckAll1" /> 全部
								<div class="box1">
									<input type="checkbox" value="新闻网站" id="news" /> 新闻网站
									<input type="checkbox" value="政府网站" id="government" /> 政府网站
									<input type="checkbox" value="论坛" id="forum" /> 论坛
									<input type="checkbox" value="微博" id="wb" /> 微博
									<input type="checkbox" value="境外网站" id="overseas" /> 境外网站
								</div>

							</form>
						</td >
						<td style="width: 10%;background-color:#f3f4fa"><span>是否敏感</span></td>
						<td style="width: 40%">
							<select>
								<option>是</option>
								<option>否</option>
							</select>
						</td >
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
		<script type="text/javascript" src="/yq_zl/public/static/index/js/jquery-3.3.1.js"></script>
		<script src="/yq_zl/public/static/index/js/layui1.js" type="text/javascript" charset="utf-8"></script>
		<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
		<script type="text/javascript">
			//默认选中全部
			$('#ckAll').prop('checked', true);
			$('.box input').prop('checked', true);
			//给所有 .box input 元素添加 checked =  ckAll 当前的状态；
			//prop('checked',value) ,第一个值获取属性，第二个值：设置属性值。prop只有一个参数时，表示获取元素属性。
			$('#ckAll').click(function(){
				$('.box input').prop('checked',$(this).prop('checked'));
				search();
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
				});
				search();
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

			function g(x){
				d=document.getElementsByTagName('li')
				for(p=d.length;p--;){
					if(d[p].id!=x){
						d[p].style.color='#000'/*其他*/
						d[p].classList.remove("checked");
					}else{
						d[p].style.color='#1d83ef';/*点击的*/
						d[p].classList.add("checked");
					}
				}
				search();
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
				        {field:'news_title', width:260, align: 'center', title: '新闻标题',
						   templet:function(d){
							 return '<a class="New">'+d.news_title+'</a>';
					    }},
						{field:'news_emotion', width:180,align: 'center', title: '舆情属性'},
						{field:'news_source', width:180, sort: true, align: 'center', title: '新闻来源'},
						{field:'news_emotion', width:180, align: 'center', title: '相似文章',
						   templet:function(d){
							 return '--';
						}},
						{field:'news_time', width:180, sort: true, align: 'center', title: '时间'},
						{field:'experience', width:180, align: 'center', title: '操作',
					       templet:function(d){
							 return '<span><a class="New">查看原文</a></span>'
							        +'<span style="padding-left: 7%"><a class="New" href="javascript:collectionHandler('
							        +d.id+',\''+d.news_collect+'\')">'+d.news_collect+'</a></span>';
					    }}
				    ]]
				});
			}
			
			//收藏
			function collectionHandler(id, collect) {
				 if(collect == "已收藏") {
					 if(confirm("是否取消收藏？")){
					    $.ajax({
							type:"post",
							contentType: 'application/x-www-form-urlencoded;charset=utf-8',
							url:"<?php echo url('uncollectNews'); ?>",
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
				 }else if(collect == "收藏") {
					 $.ajax({
						type:"post",
						contentType: 'application/x-www-form-urlencoded;charset=utf-8',
						url:"<?php echo url('collectNews'); ?>",
						data:{id: id},
						dataType: "json",
						success:function(data){
							alert("已收藏！");
							showTable(data.data);
						},
						error:function(e){  
				            console.log(e);  
						}
					});
				 }
			}
			
			//搜索列表
			function search() {
				var start = $("#start_time").val();
				var end = $("#end_time").val();
				var time = "";
				$("#list li").each(function() {
					if($(this).hasClass('checked')) {
						time = $(this).attr('id');
					}
				});
				var emotionArr = [];
				$('.box input').each(function(){
					if($(this).prop('checked')) {
						emotionArr.push($(this).val());
					}
				});
				
				$.ajax({
					type:"post",
					contentType: 'application/x-www-form-urlencoded;charset=utf-8',
					url:"<?php echo url('SearchList'); ?>",
					data:{
						emotion: emotionArr,
						start: start,
						end: end,
						time: time
					},
					dataType: "json",
					success:function(data){
						showTable(data.data);
					},
					error:function(e){  
			            console.log(e);  
					}
				});
			}

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
				
				//初始化表格数据
				table.render({
				    elem: '#tableData',
				    width: 1200,
					height: 500,
				    url: 'SearchList',
				    page: true, //开启分页
				    cols: [[ //表头
				        {field:'news_title', width:260, align: 'center', title: '新闻标题',
				           templet:function(d){
					         return '<a class="New">'+d.news_title+'</a>';
			            }},
						{field:'news_emotion', width:180,align: 'center', title: '舆情属性'},
						{field:'news_source', width:180, sort: true, align: 'center', title: '新闻来源'},
						{field:'news_emotion', width:180, align: 'center', title: '相似文章',
				           templet:function(d){
						         return '--';
				        }},
						{field:'news_time', width:180, sort: true, align: 'center', title: '时间'},
						{field:'experience', width:180, align: 'center', title: '操作',
			               templet:function(d){
					         return '<span><a class="New">查看原文</a></span>'
					         		+'<span style="padding-left: 7%"><a class="New" href="javascript:collectionHandler('
					         		+d.id+',\''+d.news_collect+'\')">'+d.news_collect+'</a></span>';
			            }}
				    ]]
				 });
				//重新渲染表格
				search();
			});
		</script>
	</body>
</html>
