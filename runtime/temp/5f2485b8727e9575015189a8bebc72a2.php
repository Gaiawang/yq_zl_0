<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"F:\xampp\htdocs\yq_zl_0\public/../application/index\view\index\index.html";i:1576915440;s:64:"F:\xampp\htdocs\yq_zl_0\application\index\view\public\_Left.html";i:1576995561;s:64:"F:\xampp\htdocs\yq_zl_0\application\index\view\public\_Menu.html";i:1571827967;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>舆情首页</title>
		<link rel="stylesheet" type="text/css" href="/yq_zl_0/public/static/index/css/admin1.css" />
		<link rel="stylesheet" type="text/css" href="/yq_zl_0/public/static/index/css/layui.css" />
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
						<li><a href="<?php echo url("RealTimeMonitoring/pc"); ?>" target="displayArea">PC即时检测</a></li>
						<li><a href="<?php echo url("RealTimeMonitoring/pad"); ?>" target="displayArea">移动WEB APP即时监测</a></li>
						<li><a href="<?php echo url("RealTimeMonitoring/mobile"); ?>" target="displayArea">移动APP即时监测</a></li>
						<li><a href="#"  class="inactive">网络即时监测</a>
							<ul>
								<li><a href="<?php echo url("RealTimeMonitoring/distributedgraph"); ?>" target="displayArea">分布视图</a></li>
								<li><a href="<?php echo url("RealTimeMonitoring/analysis"); ?>" target="displayArea">解析视图</a></li>
								<li><a href="<?php echo url("RealTimeMonitoring/mainframes_view"); ?>" target="displayArea">主机视图</a></li>
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
			<div style="height: 150px;width: 98%;background: #FFFFFF;margin: 20px auto;border-radius: 10px;">
				<!--<span style="margin-left: 20px;">
					<a href="javascript:void(0)"><img src="/yq_zl_0/public/static/index/images/index/1.png" style="width: 18%;height: 86%;margin-top: 0.8%;"/>
					<p style="margin-left: 3.9%;margin-top:-7%;">
						<img src="/yq_zl_0/public/static/index/images/index/jr.png" style="width: 1.6%;"/>
						<p style="font-size: 13px;margin-top: -23px;margin-left: 80px;color: white;">今日舆情数量</p>
					</p>
					<p style="font-size: 35px;margin-left: 60px;margin-top: 5px;color: white;">
						255
					</p>
					</a>
				</span>-->

				<span style="margin-left: 20px;">
					<a href="javascript:void(0)"><img src="/yq_zl_0/public/static/index/images/index/1.png" style="width: 18%;height: 86%;margin-top: 0.8%;"/></a>
				</span>
				<span style="margin-left: 20px;">
					<a href="javascript:void(0)"><img src="/yq_zl_0/public/static/index/images/index/2.png" style="width: 18%;height: 86%;margin-top: 0.8%;"/></a>
				</span>
				<span style="margin-left: 20px;">
					<a href="javascript:void(0)"><img src="/yq_zl_0/public/static/index/images/index/3.png" style="width: 18%;height: 86%;margin-top: 0.8%;"/></a>
				</span>
				<span style="margin-left: 20px;">
					<a href="javascript:void(0)"><img src="/yq_zl_0/public/static/index/images/index/4.png" style="width: 18%;height: 86%;margin-top: 0.8%;"/></a>
				</span>
				<span style="margin-left: 20px;">
					<a href="javascript:void(0)"><img src="/yq_zl_0/public/static/index/images/index/5.png" style="width: 18%;height: 86%;margin-top: 0.8%;"/></a>
				</span>

			</div>

			<div style="display: inline-block;height: 400px;width: 58%;background: #FFFFFF;margin-left: 1%;border-radius: 10px;">
				<span class="line"></span>
				<span style="position: absolute;top: 35%;left: 3.8%;font-weight: 800;">
					趋势分析
				</span>
				<span style="position: absolute;top: 40%;left: 3.8%;color: #47A5FB;">
					今天
				</span>
				<span style="position: absolute;top: 40%;left: 7%;">
					30天
				</span>
				<div id="container" style="display: inline-block;height: 360px;width: 38%;position: absolute;left: 10%;margin-top: 2%;"></div>
			</div>

			<div style="display: inline-block;height: 400px;width: 38.7%;background:#FFFFFF; margin-left: 1%;border-radius: 10px;">
				<span class="line1"></span>
				<span style="position: absolute;top: 35%;right: 26.7%;font-weight: 800;">
					今日敏感舆情(TOP7)
				</span>
				<span style="position: absolute;top: 35%;right: 2.5%;color: #8f94a1;font-size: 17px;cursor: pointer;">
					更多
					<i class="layui-icon">&#xe65b;</i>
					<a href="javascript:void(0)" style="margin-left: 20px;">
					<i class="layui-icon">&#x1006;</i>
					</a>
				</span>
				<div style="border-bottom:1.5px dashed #8f94a1; height:50px;width:90%;margin: 6% auto;">
					<span style="position: absolute;font-size: 15px;bottom: 57%;">
						三岁女儿坐在沙发上吃...
						<span style="position: relative;font-size: 13px;left: 60%;color: #00a0e9;">
							相似文章4篇
						</span>
					<span style="position: relative;font-size: 13px;left: 63%;color: #8f94a1;">
							13:09
						</span>
					</span>
				</div>
				<div style="border-bottom:1.5px dashed #8f94a1; height:50px;width:90%;margin: -7% auto;">
					<span style="position: absolute;font-size: 15px;bottom: 51%;">
						三岁女儿坐在沙发上吃...
						<span style="position: relative;font-size: 13px;left: 60%;color: #00a0e9;">
							相似文章4篇
						</span>
					<span style="position: relative;font-size: 13px;left: 63%;color: #8f94a1;">
							13:09
						</span>
					</span>
				</div>
				<div style="border-bottom:1.5px dashed #8f94a1; height:50px;width:90%;margin: 6% auto;">
					<span style="position: absolute;font-size: 15px;bottom: 45%;">
						三岁女儿坐在沙发上吃...
						<span style="position: relative;font-size: 13px;left: 60%;color: #00a0e9;">
							相似文章4篇
						</span>
					<span style="position: relative;font-size: 13px;left: 63%;color: #8f94a1;">
							13:09
						</span>
					</span>
				</div>
				<div style="border-bottom:1.5px dashed #8f94a1; height:50px;width:90%;margin: -7% auto;">
					<span style="position: absolute;font-size: 15px;bottom: 39%;">
						三岁女儿坐在沙发上吃...
						<span style="position: relative;font-size: 13px;left: 60%;color: #00a0e9;">
							相似文章4篇
						</span>
					<span style="position: relative;font-size: 13px;left: 63%;color: #8f94a1;">
							13:09
						</span>
					</span>
				</div>
				<div style="border-bottom:1.5px dashed #8f94a1; height:50px;width:90%;margin: 6% auto;">
					<span style="position: absolute;font-size: 15px;bottom: 33%;">
						三岁女儿坐在沙发上吃...
						<span style="position: relative;font-size: 13px;left: 60%;color: #00a0e9;">
							相似文章4篇
						</span>
					<span style="position: relative;font-size: 13px;left: 63%;color: #8f94a1;">
							13:09
						</span>
					</span>
				</div>
				<div style="border-bottom:1.5px dashed #8f94a1; height:50px;width:90%;margin: -7% auto;">
					<span style="position: absolute;font-size: 15px;bottom: 27%;">
						三岁女儿坐在沙发上吃...
						<span style="position: relative;font-size: 13px;left: 60%;color: #00a0e9;">
							相似文章4篇
						</span>
					<span style="position: relative;font-size: 13px;left: 63%;color: #8f94a1;">
							13:09
						</span>
					</span>
				</div>
				<div style="border-bottom:1.5px dashed #8f94a1; height:50px;width:90%;margin: 6% auto;">
					<span style="position: absolute;font-size: 15px;bottom: 21%;">
						三岁女儿坐在沙发上吃...
						<span style="position: relative;font-size: 13px;left: 60%;color: #00a0e9;">
							相似文章4篇
						</span>
					<span style="position: relative;font-size: 13px;left: 63%;color: #8f94a1;">
							13:09
						</span>
					</span>
				</div>
			</div>
			
			<!--饼图1-->
			<div style="display: inline-block;margin-top: 1.2%;height: 400px;width: 28.4%;background: #FFFFFF;margin-left: 1%;border-radius: 10px;">
				<span class="line2"></span>
				<span style="position: absolute;top: 91%;left: 3.8%;font-weight: 800;">
					情感分析
				</span>
				<span style="position: absolute;top: 96%;left: 3.8%;color: #47A5FB;">
					今天
				</span>
				<span style="position: absolute;top: 96%;left: 7%;">
					昨天
				</span>
				<span style="position: absolute;top: 96%;left: 10.5%;">
					3天
				</span>
				<div id="bingtu" style="display: inline-block;height: 320px;width: 38%;position: absolute;left: -4%;margin-top: 3%;"></div>
			</div>
			
			<!--饼图2-->
			<div style="display: inline-block;height: 400px;width: 28.4%;background: #FFFFFF;margin-left: 1%;border-radius: 10px;">
				<span class="line3"></span>
				<span style="position: absolute;top: 91%;left: 33.8%;font-weight: 800;">
					负面分析
				</span>
				<span style="position: absolute;top: 96%;left: 33.8%;color: #47A5FB;">
					今天
				</span>
				<span style="position: absolute;top: 96%;left: 37%;">
					昨天
				</span>
				<span style="position: absolute;top: 96%;left: 40.5%;">
					3天
				</span>
				<div id="bingtu2" style="height: 320px;width: 38%;position: absolute;left: 26%;margin-top: 3%;"></div>
			</div>

			<div style="display: inline-block;height: 400px;width: 38.7%;background:#FFFFFF; margin-left: 1%;border-radius: 10px;">
				<span class="line4"></span>
				<span style="position: absolute;top: 91%;right: 26.7%;font-weight: 800;">
					七天热点事件(TOP7)
				</span>
				<span style="position: absolute;top: 91%;right: 2.5%;color: #8f94a1;font-size: 17px;cursor: pointer;">
					更多
					<i class="layui-icon">&#xe65b;</i>
					<a href="javascript:void(0)" style="margin-left: 20px;">
					<i class="layui-icon">&#x1006;</i>
					</a>
				</span>
				<div style="border-bottom:1.5px dashed #8f94a1; height:50px;width:90%;margin: 6% auto;">
					<span style="position: absolute;font-size: 15px;bottom: 1.5%;">
						<a href="javascript:void:(0)"><img src="/yq_zl_0/public/static/index/images/huo.png" style="position: relative;top: -3px;"/></a>
						三岁女儿坐在沙发上吃...
						<span style="position: relative;font-size: 13px;right: -72%;color: #00a0e9;">
							相似文章11篇
						</span>
					</span>
				</div>
				<div style="border-bottom:1.5px dashed #8f94a1; height:50px;width:90%;margin: -7% auto;">
					<span style="position: absolute;font-size: 15px;bottom: -4.5%;">
						<a href="javascript:void:(0)"><img src="/yq_zl_0/public/static/index/images/huo.png" style="position: relative;top: -3px;"/></a>
						三岁女儿坐在沙发上吃...
						<span style="position: relative;font-size: 13px;right: -72%;color: #00a0e9;">
							相似文章9篇
						</span>
					</span>
				</div>
				<div style="border-bottom:1.5px dashed #8f94a1; height:50px;width:90%;margin: 6% auto;">
					<span style="position: absolute;font-size: 15px;bottom: -10.5%;">
						<a href="javascript:void:(0)"><img src="/yq_zl_0/public/static/index/images/huo.png" style="position: relative;top: -3px;"/></a>
						三岁女儿坐在沙发上吃...
						<span style="position: relative;font-size: 13px;right: -72%;color: #00a0e9;">
							相似文章8篇
						</span>
					</span>
				</div>
				<div style="border-bottom:1.5px dashed #8f94a1; height:50px;width:90%;margin: -7% auto;">
					<span style="position: absolute;font-size: 15px;bottom: -16.5%;">
						<a href="javascript:void:(0)"><img src="/yq_zl_0/public/static/index/images/huo.png" style="position: relative;top: -3px;"/></a>
						三岁女儿坐在沙发上吃...
						<span style="position: relative;font-size: 13px;right: -72%;color: #00a0e9;">
							相似文章4篇
						</span>
					</span>
				</div>
                <div style="border-bottom:1.5px dashed #8f94a1; height:50px;width:90%;margin: 6% auto;">
					<span style="position: absolute;font-size: 15px;bottom: -22.5%;">
						<a href="javascript:void:(0)"><img src="/yq_zl_0/public/static/index/images/huo.png" style="position: relative;top: -3px;"/></a>
						三岁女儿坐在沙发上吃...
						<span style="position: relative;font-size: 13px;right: -72%;color: #00a0e9;">
							相似文章4篇
						</span>
					</span>
				</div>
				<div style="border-bottom:1.5px dashed #8f94a1; height:50px;width:90%;margin: -7% auto;">
					<span style="position: absolute;font-size: 15px;bottom: -28.5%;">
						<a href="javascript:void:(0)"><img src="/yq_zl_0/public/static/index/images/huo.png" style="position: relative;top: -3px;"/></a>
						三岁女儿坐在沙发上吃...
						<span style="position: relative;font-size: 13px;right: -72%;color: #00a0e9;">
							相似文章4篇
						</span>
					</span>
				</div>
				<div style="border-bottom:1.5px dashed #8f94a1; height:50px;width:90%;margin: 6% auto;">
					<span style="position: absolute;font-size: 15px;bottom: -34.5%;">
						<a href="javascript:void:(0)"><img src="/yq_zl_0/public/static/index/images/huo.png" style="position: relative;top: -3px;"/></a>
						三岁女儿坐在沙发上吃...
						<span style="position: relative;font-size: 13px;right: -72%;color: #00a0e9;">
							相似文章4篇
						</span>
					</span>
				</div>
				
			</div>
			
			<div style="display: inline-block;margin-top: 1.2%;height: 400px;width: 58%;background: #FFFFFF;margin-left: 1%;border-radius: 10px;">
				<span class="line5"></span>
				<span style="position: absolute;top: 147%;left: 3.8%;font-weight: 800;">
					趋势分析
				</span>
				<div style="position: absolute;bottom: -95%;left: 2%;">
					<table class="layui-hide" id="table"></table>
				</div>
				<div id="map" style="height: 320px;width: 35%;position: absolute;left: 24%;margin-top: 3%;"></div>
			</div>
			<div style="display: inline-block;margin-top: 1.2%;height: 400px;width: 38.7%;background:#FFFFFF; margin-left: 1%;border-radius: 10px;">
				<span class="line6"></span>
				<span style="position: absolute;top: 147%;right: 28.8%;font-weight: 800;">
					舆情来源(TOP5)
				</span>
				<span style="position: absolute;top: 152%;right: 33.8%;color: #47A5FB;">
					今天
				</span>
				<span style="position: absolute;top: 152%;right: 30%;">
					昨天
				</span>
				<span style="position: absolute;top: 152%;right: 27%;">
					3天
				</span>
				<!--<div id="zhu" style="height: 400px;width: 38%;position: r;left: 62%;margin-top: 3%;"></div>-->
				<div id="zhu" style="height: 400px;width: 38%;position: absolute;left: 61.5%;margin-top: 3%;"></div>
			</div>
			<div style="height: 20px;">

			</div>

		</div>
	</body>
	<!--折线图-->
	<script src="/yq_zl_0/public/static/index/js/layui1.js"></script>
	<script src="/yq_zl_0/public/static/index/js/echarts.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts/map/js/china.js"></script>
	<script type="text/javascript">
	layui.use('table', function() {
		var table = layui.table;

		table.render({
			elem: '#table'
				//  ,url:'/demo/table/user/'
				//  ,cellMinWidth: 80 //全局定义常规单元格的最小宽度，layui 2.2.1 新增
				,
			width: 279,
			cols: [
				[{
					field: 'id',
					width: 80,
					align: 'center',
					title: '序号',
					size: '10'
				}, {
					field: 'sf',
					width: 80,
					align: 'center',
					title: '省份'
				}, {
					field: 'yq',
					width: 115,
					align: 'center',
					title: '今日舆情数量'
				}]
			],
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
				}, {
					"id": "1000",
					"sf": "内蒙古自治区",
					"yq": "255"
				},
			]
		});
	});
</script>
	<script type="text/javascript">
		var dom = document.getElementById("container");
		var myChart = echarts.init(dom);
		var app = {};
		option = null;
		option = {
			tooltip: {
				trigger: 'axis'
			},
			legend: {
				bottom: '-1%',
				data: ['正面', '中性', '负面']
			},
			grid: {
				left: '3%',
				right: '4%',
				bottom: '10%',
				containLabel: true
			},
			toolbox: {
				feature: {
					saveAsImage: {}
				}
			},
			xAxis: {
				type: 'category',
				boundaryGap: false,
				data: ['10-19', '10-20', '10-21', '10-22', '10-23', '10-24', '10-25']
			},
			yAxis: {
				type: 'value'
			},
			series: [{
					name: '正面',
					type: 'line',
					stack: '总量',
					data: [500, 132, 101, 134, 90, 230, 210]
				},
				{
					name: '中性',
					type: 'line',
					stack: '总量',
					data: [700, 500, 900, 1000, 1500, 600, 800]
				},
				{
					name: '负面',
					type: 'line',
					stack: '总量',
					data: [550, 600, 700, 530, 500, 560, 800]
				},
			]
		};;
		if(option && typeof option === "object") {
			myChart.setOption(option, true);
		}
	</script>
	<!--饼图-->
	<script type="text/javascript">
		var dom = document.getElementById("bingtu");
		var myChart = echarts.init(dom);
		var app = {};
		option = null;
		app.title = '嵌套环形图';

		option = {
			tooltip: {
				trigger: 'item',
				formatter: "{a} <br/>{b}: {c} ({d}%)"
			},
			legend: {
                bottom:'-1%',
				data: ['正面', '中性', '负面']
			},
			series: [{
				name: '负面分析',
				type: 'pie',
				radius: ['40%', '55%'],
				label: {
					normal: {
						formatter: '{b|{b}} {per|{d}%}  ',
						borderColor: '#aaa',
						rich: {

						}
					}
				},
				data: [{
						value: 335,
						name: '正面'
					},
					{
						value: 310,
						name: '中性'
					},
					{
						value: 234,
						name: '负面'
					}
				]
			}]
		};;
		if(option && typeof option === "object") {
			myChart.setOption(option, true);
		}
	</script>
	
	<!--饼图2-->
	<script type="text/javascript">
		var dom = document.getElementById("bingtu2");
		var myChart = echarts.init(dom);
		var app = {};
		option = null;
		app.title = '嵌套环形图';

		option = {
			tooltip: {
				trigger: 'item',
				formatter: "{a} <br/>{b}: {c} ({d}%)"
			},
			series: [{
				name: '负面分析',
				type: 'pie',
				radius: ['40%', '55%'],
				label: {
					normal: {
						formatter: '{b|{b}} {per|{d}%}  ',
						borderColor: '#aaa',
						rich: {
							
						}
					}
				},
				data: [
					{
						value: 122,
						name: '社会'
					},
					{
						value: 230,
						name: '教育'
					},
					{
						value: 165,
						name: '健康'
					},
					{
						value: 96,
						name: '时政'
					},
					{
						value: 86,
						name: '游戏'
					},
					{
						value: 76,
						name: '文学'
					},
					{
						value: 90,
						name: '时尚'
					},
					{
						value: 80,
						name: '军事'
					},
					{
						value: 106,
						name: '财经'
					},
					{
						value: 76,
						name: '育儿'
					},
					{
						value: 50,
						name: '房产'
					},
					{
						value: 60,
						name: '动漫'
					},
					{
						value: 30,
						name: '美食'
					},
					{
						value: 900,
						name: '其他'
					},
					{
						value: 500,
						name: '娱乐'
					}
				]
			}]
		};;
		if(option && typeof option === "object") {
			myChart.setOption(option, true);
		}
	</script>
	
	<!--地图-->
	<script type="text/javascript">
var dom = document.getElementById("map");
var myChart = echarts.init(dom);
var app = {};
option = null;
option = {
    title : {
//      text: 'iphone销量',
//      subtext: '纯属虚构',
        left: 'center'
    },
    tooltip : {
        trigger: 'item'
    },
    legend: {
        orient: 'vertical',
        left: 'left',
        data:['正面舆情','中性舆情','负面舆情']
    },
    visualMap: {
        min: 0,
        max: 2500,
        left: 'left',
        top: 'bottom',
        text:['高','低'],           // 文本，默认为数值文本
        calculable : true
    },
    toolbox: {
        show: true,
        orient : 'vertical',
        left: 'right',
        top: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    series : [
        {
            name: '正面舆情',
            type: 'map',
            mapType: 'china',
            roam: false,
            label: {
                normal: {
                    show: false
                },
                emphasis: {
                    show: true
                }
            },
            data:[
                {name: '北京',value: Math.round(Math.random()*1000)},
                {name: '天津',value: Math.round(Math.random()*1000)},
                {name: '上海',value: Math.round(Math.random()*1000)},
                {name: '重庆',value: Math.round(Math.random()*1000)},
                {name: '河北',value: Math.round(Math.random()*1000)},
                {name: '河南',value: Math.round(Math.random()*1000)},
                {name: '云南',value: Math.round(Math.random()*1000)},
                {name: '辽宁',value: Math.round(Math.random()*1000)},
                {name: '黑龙江',value: Math.round(Math.random()*1000)},
                {name: '湖南',value: Math.round(Math.random()*1000)},
                {name: '安徽',value: Math.round(Math.random()*1000)},
                {name: '山东',value: Math.round(Math.random()*1000)},
                {name: '新疆',value: Math.round(Math.random()*1000)},
                {name: '江苏',value: Math.round(Math.random()*1000)},
                {name: '浙江',value: Math.round(Math.random()*1000)},
                {name: '江西',value: Math.round(Math.random()*1000)},
                {name: '湖北',value: Math.round(Math.random()*1000)},
                {name: '广西',value: Math.round(Math.random()*1000)},
                {name: '甘肃',value: Math.round(Math.random()*1000)},
                {name: '山西',value: Math.round(Math.random()*1000)},
                {name: '内蒙古',value: Math.round(Math.random()*1000)},
                {name: '陕西',value: Math.round(Math.random()*1000)},
                {name: '吉林',value: Math.round(Math.random()*1000)},
                {name: '福建',value: Math.round(Math.random()*1000)},
                {name: '贵州',value: Math.round(Math.random()*1000)},
                {name: '广东',value: Math.round(Math.random()*1000)},
                {name: '青海',value: Math.round(Math.random()*1000)},
                {name: '西藏',value: Math.round(Math.random()*1000)},
                {name: '四川',value: Math.round(Math.random()*1000)},
                {name: '宁夏',value: Math.round(Math.random()*1000)},
                {name: '海南',value: Math.round(Math.random()*1000)},
                {name: '台湾',value: Math.round(Math.random()*1000)},
                {name: '香港',value: Math.round(Math.random()*1000)},
                {name: '澳门',value: Math.round(Math.random()*1000)}
            ]
        },
        {
            name: '中性舆情',
            type: 'map',
            mapType: 'china',
            label: {
                normal: {
                    show: false
                },
                emphasis: {
                    show: true
                }
            },
            data:[
                {name: '北京',value: Math.round(Math.random()*1000)},
                {name: '天津',value: Math.round(Math.random()*1000)},
                {name: '上海',value: Math.round(Math.random()*1000)},
                {name: '重庆',value: Math.round(Math.random()*1000)},
                {name: '河北',value: Math.round(Math.random()*1000)},
                {name: '安徽',value: Math.round(Math.random()*1000)},
                {name: '新疆',value: Math.round(Math.random()*1000)},
                {name: '浙江',value: Math.round(Math.random()*1000)},
                {name: '江西',value: Math.round(Math.random()*1000)},
                {name: '山西',value: Math.round(Math.random()*1000)},
                {name: '内蒙古',value: Math.round(Math.random()*1000)},
                {name: '吉林',value: Math.round(Math.random()*1000)},
                {name: '福建',value: Math.round(Math.random()*1000)},
                {name: '广东',value: Math.round(Math.random()*1000)},
                {name: '西藏',value: Math.round(Math.random()*1000)},
                {name: '四川',value: Math.round(Math.random()*1000)},
                {name: '宁夏',value: Math.round(Math.random()*1000)},
                {name: '香港',value: Math.round(Math.random()*1000)},
                {name: '澳门',value: Math.round(Math.random()*1000)}
            ]
        },
        {
            name: '负面舆情',
            type: 'map',
            mapType: 'china',
            label: {
                normal: {
                    show: false
                },
                emphasis: {
                    show: true
                }
            },
            data:[
                {name: '北京',value: Math.round(Math.random()*1000)},
                {name: '天津',value: Math.round(Math.random()*1000)},
                {name: '上海',value: Math.round(Math.random()*1000)},
                {name: '广东',value: Math.round(Math.random()*1000)},
                {name: '台湾',value: Math.round(Math.random()*1000)},
                {name: '香港',value: Math.round(Math.random()*1000)},
                {name: '澳门',value: Math.round(Math.random()*1000)}
            ]
        }
    ]
};;
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
       </script>
       
    <!--柱状图-->
    <script type="text/javascript">
var dom = document.getElementById("zhu");
var myChart = echarts.init(dom);
var app = {};
option = null;
var dataAxis = ['爱心网', '东方网', '新浪微博', '网易新闻', '大麦网'];
var data = [220, 182, 191, 234, 290];
var yMax = 500;
var dataShadow = [];

for (var i = 0; i < data.length; i++) {
    dataShadow.push(yMax);
}

option = {
//  title: {
//      text: '特性示例：渐变色 阴影 点击缩放',
//      subtext: 'Feature Sample: Gradient Color, Shadow, Click Zoom'
//  },
    xAxis: {
        data: dataAxis,
        axisLabel: {
            inside: true,
            textStyle: {
                color: '#fff'
            }
        },
        axisTick: {
            show: false
        },
        axisLine: {
            show: false
        },
        z: 10
    },
    yAxis: {
        axisLine: {
            show: false
        },
        axisTick: {
            show: false
        },
        axisLabel: {
            textStyle: {
                color: '#999'
            }
        }
    },
    dataZoom: [
        {
            type: 'inside'
        }
    ],
    series: [
        { // For shadow
            type: 'bar',
            itemStyle: {
                normal: {color: 'rgba(0,0,0,0.05)'}
            },
            barGap:'-100%',
            barCategoryGap:'40%',
            data: dataShadow,
            animation: false
        },
        {
            type: 'bar',
            itemStyle: {
                normal: {
                    color: new echarts.graphic.LinearGradient(
                        0, 0, 0, 1,
                        [
                            {offset: 0, color: '#83bff6'},
                            {offset: 0.5, color: '#188df0'},
                            {offset: 1, color: '#188df0'}
                        ]
                    )
                },
                emphasis: {
                    color: new echarts.graphic.LinearGradient(
                        0, 0, 0, 1,
                        [
                            {offset: 0, color: '#2378f7'},
                            {offset: 0.7, color: '#2378f7'},
                            {offset: 1, color: '#83bff6'}
                        ]
                    )
                }
            },
            data: data
        }
    ]
};

// Enable data zoom when user click bar.
var zoomSize = 6;
myChart.on('click', function (params) {
    console.log(dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)]);
    myChart.dispatchAction({
        type: 'dataZoom',
        startValue: dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)],
        endValue: dataAxis[Math.min(params.dataIndex + zoomSize / 2, data.length - 1)]
    });
});;
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
       </script>
       
</html>