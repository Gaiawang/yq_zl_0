<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"C:\xampp\htdocs\yq_zl_0\public/../application/index\view\index\dragtest.html";i:1572512334;s:64:"C:\xampp\htdocs\yq_zl_0\application\index\view\public\_Left.html";i:1571898162;s:64:"C:\xampp\htdocs\yq_zl_0\application\index\view\public\_Menu.html";i:1571827967;}*/ ?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>舆情检索</title>
<link rel="stylesheet" type="text/css"
	href="/yq_zl_0/public/static/index/css/admin1.css" />
<link rel="stylesheet" type="text/css"
	href="/yq_zl_0/public/static/index/css/layui.css" />
<link rel="stylesheet" type="text/css"
	href="/yq_zl_0/public/static/index/css/Yq.css" />
<link rel="stylesheet" type="text/css"
	href="/yq_zl_0/public/static/index/css/dragTest.css" />
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
		<div class="all">
			<div class="page-right w250 temp-right fr">
				<div class="__vuescroll hasVBar"
					style="height: 100%; width: 250px; padding: 0px; position: relative; overflow: hidden;">
					<div class="__panel"
						style="position: relative; box-sizing: border-box; height: 100%; overflow: hidden scroll; margin-right: -6px;">
						<div class="__view"
							style="position: relative; box-sizing: border-box; min-width: 100%; min-height: 100%; width: -webkit-fit-content;">
							<div class="type-list">
								<div class="type-header">
									<h2 class="title">选择模块</h2>
								</div>
								<div class="dragArea">
									<div class="list-complete-item text" draggable="true" id="drag-text" ondragstart="drag(event)">
										<i class="icons text-icon"></i>文本
									</div>
									<div class="list-complete-item text" draggable="true" id="drag-summary" ondragstart="drag(event)">
										<i class="icons text-icon"></i>报告简述
									</div>
									<div class="list-complete-item text">
										<i class="icons data1-icon"></i>事件走势
									</div>
									<div class="list-complete-item text">
										<i class="icons table-icon"></i>热门文章
									</div>
									<div class="list-complete-item text">
										<i class="icons table-icon"></i>负面文章
									</div>
									<div class="list-complete-item text">
										<i class="icons ring-icon"></i>情感属性
									</div>
									<div class="list-complete-item text">
										<i class="icons ring-icon"></i>媒体分布
									</div>
									<div class="list-complete-item text">
										<i class="icons ring-icon"></i>平台分布
									</div>
									<div class="list-complete-item text">
										<i class="icons menu-icon"></i>活跃账号
									</div>
									<div class="list-complete-item text">
										<i class="icons menu-icon"></i>敏感账号
									</div>
									<div class="list-complete-item text">
										<i class="icons menu-icon"></i>影响力账号
									</div>
									<div class="list-complete-item text">
										<i class="icons ring-icon"></i>账号认证
									</div>
									<div class="list-complete-item text">
										<i class="icons data2-icon"></i>传播力分布
									</div>
									<div class="list-complete-item text">
										<i class="icons ring-icon"></i>文章类型
									</div>
									<div class="list-complete-item text">
										<i class="icons yun-icon"></i>热门词云
									</div>
									<div class="list-complete-item text">
										<i class="icons map-icon"></i>发布地区
									</div>
									<div class="list-complete-item text">
										<i class="icons map-icon"></i>提及地区
									</div>
									<div class="list-complete-item text">
										<i class="icons data1-icon"></i>预警趋势
									</div>
									<div class="list-complete-item text">
										<i class="icons text-icon"></i>处置建议
									</div>
								</div>
							</div>
							<div
								style="display: block; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; border: none; padding: 0px; margin: 0px; opacity: 0; z-index: -1000; pointer-events: none;">
								<object type="text/html" tabindex="-1" data="about:blank"
									style="display: block; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; border: none; padding: 0px; margin: 0px; opacity: 0; z-index: -1000; pointer-events: none;"></object>
							</div>
						</div>
					</div>
					<div class="__rail-is-vertical"
						style="position: absolute; z-index: 1; border-radius: 6px; background: rgba(1, 169, 154, 0); border: none; width: 6px; top: 0px; bottom: 6px; right: 2px;">
						<div class="__bar-wrap-is-vertical"
							style="position: absolute; border-radius: 6px; top: 0px; bottom: 0px; width: 100%;">
							<div class="__bar-is-vertical"
								style="cursor: pointer; position: absolute; margin: auto; transition: opacity 0.5s ease 0s; user-select: none; border-radius: inherit; height: 36.1386%; background: rgb(196, 196, 204); width: 6px; opacity: 0; transform: translateY(0%); left: 0px; right: 0px;"></div>
						</div>
					</div>
					<div class="__rail-is-horizontal"
						style="position: absolute; z-index: 1; border-radius: 6px; background: rgba(1, 169, 154, 0); border: none; height: 6px; left: 0px; right: 6px; bottom: 2px;"></div>
				</div>
			</div>
			<div class="page-left pr260">
				<div class="detail-warp">
					<input type="text" placeholder="填写报告标题"
						class="template-title ac db"> <input type="text"
						placeholder="填写作者名称" class="template-author ac db">
					<div class="dragWrap">
						<div class="dragArea11" draggable="true" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
					</div>
					<div class="bottom ac mt20">
						<button class="btn save btn-jbblue">保存模板</button>
						<button class="btn save btn-jbblue ml20">预览模板</button>
						<button class="btn save btn-none ml20" style="display: none;">返回</button>
					</div>
				</div>
			</div>
			<!---->
		</div>
	</div>
	<script type="text/javascript" src="/yq_zl_0/public/static/index/js/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		var html = "";
		function allowDrop(ev){
	        ev.preventDefault();
	    }
	    function drag(ev){
	        ev.dataTransfer.setData("Text",ev.target.id);
	    }
	    function drop(ev){
	        ev.preventDefault();
	        var data=ev.dataTransfer.getData("Text");
	        if(data == "drag-text") {
	        	var el1 = document.createElement('div');
	        	var attr1 = document.createAttribute('draggable'); 
	        	attr1.value = 'true';
	        	el1.setAttributeNode(attr1);
	        	ev.target.appendChild(el1);
	        	
				var el2 = document.createElement('div');
				el2.className = 'tit';
				el1.appendChild(el2);
				
				var el3 = document.createElement('div');
				var text3 = document.createTextNode("删除");
				el3.appendChild(text3);
				el3.style.float = "right";
				el3.onclick = function(el) {
					el.target.parentNode.parentNode.parentNode.removeChild(el.target.parentNode.parentNode);
	            }
				el2.appendChild(el3);
				
			 	var el4 = document.createElement('input');
			 	var attr4 = document.createAttribute('type'); 
				attr4.value = 'text';
				el4.setAttributeNode(attr4);
				el4.className = 'name';
				var attr4_1 = document.createAttribute('value'); 
				attr4_1.value = '文本';
				el4.setAttributeNode(attr4_1);
				el2.appendChild(el4);
				
 				var el5 = document.createElement('div');
				el5.className = 'cont ac mt15';
				el1.appendChild(el5);
				
			 	var el6 = document.createElement('textarea');
			 	var attr6 = document.createAttribute('type'); 
				attr6.value = 'text';
				el6.className = 'input-textarea';
				el6.setAttributeNode(attr6);
				el5.appendChild(el6);	
	        }
	        if(data == "drag-summary") {
	        	html += '<div draggable="true"><div class="tit"><span style="float: right;" onclick="deleteNode(this)">删除</span> <input type="text" class="name" value="报告简述"> <!----> <!----></div> <div class="cont ac mt15"><!----> <textarea type="text" class="input-textarea"></textarea></div></div>';
	        	var el1 = document.createElement('div');
	        	var attr1 = document.createAttribute('draggable'); 
	        	attr1.value = 'true';
	        	el1.setAttributeNode(attr1);
	        	ev.target.appendChild(el1);
	        	
				var el2 = document.createElement('div');
				el2.className = 'tit';
				el1.appendChild(el2);
				
				var el3 = document.createElement('div');
				var text3 = document.createTextNode("删除");
				el3.appendChild(text3);
				el3.style.float = "right";
				el3.onclick = function(el) {
					el.target.parentNode.parentNode.parentNode.removeChild(el.target.parentNode.parentNode);
	            }
				el2.appendChild(el3);
				
			 	var el4 = document.createElement('input');
			 	var attr4 = document.createAttribute('type'); 
				attr4.value = 'text';
				el4.setAttributeNode(attr4);
				el4.className = 'name';
				var attr4_1 = document.createAttribute('value'); 
				attr4_1.value = '报告简述';
				el4.setAttributeNode(attr4_1);
				el2.appendChild(el4);
				
 				var el5 = document.createElement('div');
				el5.className = 'cont ac mt15';
				el1.appendChild(el5);
				
			 	var el6 = document.createElement('textarea');
			 	var attr6 = document.createAttribute('type'); 
				attr6.value = 'text';
				el6.setAttributeNode(attr6);
				el6.className = 'input-textarea';
				var txt6 = document.createTextNode('本报告就加入素材的文章进行分析，共有**篇相关素材。其中，博客100篇，占比59%；微信98篇，占比54%；新闻40篇，占比45%。而论坛的比重最大，共有**篇，达到信息总量的60%。目前主要的报道集中在网易新闻、和讯论坛、中青网、新民网、百度、中国江苏网等几大站点。详细报告请继续浏览。');
				el6.appendChild(txt6);
				el5.appendChild(el6);
	        }
	    }
	</script>
</body>

</html>