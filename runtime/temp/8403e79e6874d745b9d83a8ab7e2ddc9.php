<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:99:"F:\xampp\htdocs\yq_zl_0\public/../application/index\view\real_time_monitoring\distributedgraph.html";i:1577003639;s:64:"F:\xampp\htdocs\yq_zl_0\application\index\view\public\_Left.html";i:1576995561;s:64:"F:\xampp\htdocs\yq_zl_0\application\index\view\public\_Menu.html";i:1571827967;}*/ ?>
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
<div class="row" style="height: 1100px">
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
    <div class="Div" style="height:350px;">
        <div class="layui-col-md12">
            <div class="layui-row" style="height:400px;">
                <div style="margin-left: 20px;">
                    <h3> 网络评分</h3>
                </div>
                <div class="layui-col-md3">
                    <div>
                        <h5 style="color: #721c24" align="center">IDC评分</h5>
                        <div id="myChart_idc" style="height:300px;width:100%;"></div>
                    </div>
                </div>
                <div class="layui-col-md3">
                    <h5 style="color: #721c24" align="center">CDN评分</h5>
                    <div id="myChart_cdn" style="height:300px;width:100%;"></div>
                </div>
                <div class="layui-col-md3">
                    <h5 style="color: #721c24" align="center">ISP评分</h5>
                    <div id="myChart_isp" style="height:300px;width:100%;"></div>
                </div>
                <div class="layui-col-md3">
                    <h5 style="color: #721c24" align="center">DNS评分</h5>
                    <div id="myChart_dns" style="height:300px;width:100%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="Div" style="height:300px;">
        <div class="layui-col-md12" >
            <div class="layui-col-md6" >
                <h3>IDC分布</h3>
                <div id="myChart_inc_dis" style="height:500px;width:100%;"></div>
            </div>
            <div class="layui-col-md6">
                <h3>CDN分布</h3>
                <div id="myChart_cdn_dis" style="height:500px;width:100%;"></div>
            </div>
        </div>
        <div class="layui-col-md12">
            <table>

            </table>
        </div>
    </div>
    <!--表格1-->
</div>
<script type="text/javascript" src="/yq_zl_0/public/static/index/js/jquery-3.3.1.js"></script>

<script src="/yq_zl_0/public/static/index/js/layui1.js" type="text/javascript" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script src="/yq_zl_0/public/static/index/js/echarts.js"></script>
<script src="/yq_zl_0/public/static/index/js/china.js"></script>
</body>
<script>
    var myChart_idc = echarts.init(document.getElementById("myChart_idc"), 'walden');
    var option_idc = {
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b}: {c} ({d}%)",

        },
        legend: {
            orient: 'vertical',
            x: 'left',
            data:['得分','扣分']
        },
        series: [
            {
                name:'分数',
                type:'pie',
                radius: ['50%', '70%'],
                avoidLabelOverlap: false,
                label: {
                    normal: {
                        show: false,
                        position: 'center'
                    },
                    emphasis: {
                        show: true,
                        textStyle: {
                            fontSize: '30',
                            fontWeight: 'bold'
                        }
                    }
                },
                labelLine: {
                    normal: {
                        show: false
                    }
                },
                data:[
                    {value:92, name:'得分92'},
                    {value:8, name:'扣分8'},
                ]
            }
        ]
    };
    myChart_idc.setOption(option_idc);
    var myChart_cdn = echarts.init(document.getElementById("myChart_cdn"), 'walden');
    var option_cdn = {
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b}: {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            x: 'left',
            data:['得分','扣分']
        },
        series: [
            {
                name:'分数',
                type:'pie',
                radius: ['50%', '70%'],
                avoidLabelOverlap: false,
                label: {
                    normal: {
                        show: false,
                        position: 'center'
                    },
                    emphasis: {
                        show: true,
                        textStyle: {
                            fontSize: '30',
                            fontWeight: 'bold'
                        }
                    }
                },
                labelLine: {
                    normal: {
                        show: false
                    }
                },
                data:[
                    {value:95, name:'得分95'},
                    {value:5, name:'扣分5'},

                ]
            }
        ]
    };
    myChart_cdn.setOption(option_cdn);
    var myChart_isp = echarts.init(document.getElementById("myChart_isp"), 'walden');
    var option_isp = {
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b}: {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            x: 'left',
            data:['得分','扣分']
        },
        series: [
            {
                name:'分数',
                type:'pie',
                radius: ['50%', '70%'],
                avoidLabelOverlap: false,
                label: {
                    normal: {
                        show: false,
                        position: 'center'
                    },
                    emphasis: {
                        show: true,
                        textStyle: {
                            fontSize: '30',
                            fontWeight: 'bold'
                        }
                    }
                },
                labelLine: {
                    normal: {
                        show: false
                    }
                },
                data:[
                    {value:85, name:'得分85'},
                    {value:15, name:'扣分15'},

                ]
            }
        ]
    };
    myChart_isp.setOption(option_isp);
    var myChart_dns = echarts.init(document.getElementById("myChart_dns"), 'walden');
    var option_dns = {
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b}: {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            x: 'left',
            data:['得分','扣分']
        },
        series: [
            {
                name:'分数',
                type:'pie',
                radius: ['50%', '70%'],
                avoidLabelOverlap: false,
                label: {
                    normal: {
                        show: false,
                        position: 'center'
                    },
                    emphasis: {
                        show: true,
                        textStyle: {
                            fontSize: '30',
                            fontWeight: 'bold'
                        }
                    }
                },
                labelLine: {
                    normal: {
                        show: false
                    }
                },
                data:[
                    {value:60, name:'得分60'},
                    {value:40, name:'扣分40'},

                ]
            }
        ]
    };
    myChart_dns.setOption(option_dns);
</script>
<!--idc_dis-->
<script>
    function randomData() {
        return Math.round(Math.random()*500);
    }
    var mydata = [
        {name: '北京',value: '100' },{name: '天津',value: randomData() },
        {name: '上海',value: randomData() },{name: '重庆',value: randomData() },
        {name: '河北',value: randomData() },{name: '河南',value: randomData() },
        {name: '云南',value: randomData() },{name: '辽宁',value: randomData() },
        {name: '黑龙江',value: randomData() },{name: '湖南',value: randomData() },
        {name: '安徽',value: randomData() },{name: '山东',value: randomData() },
        {name: '新疆',value: randomData() },{name: '江苏',value: randomData() },
        {name: '浙江',value: randomData() },{name: '江西',value: randomData() },
        {name: '湖北',value: randomData() },{name: '广西',value: randomData() },
        {name: '甘肃',value: randomData() },{name: '山西',value: randomData() },
        {name: '内蒙古',value: randomData() },{name: '陕西',value: randomData() },
        {name: '吉林',value: randomData() },{name: '福建',value: randomData() },
        {name: '贵州',value: randomData() },{name: '广东',value: randomData() },
        {name: '青海',value: randomData() },{name: '西藏',value: randomData() },
        {name: '四川',value: randomData() },{name: '宁夏',value: randomData() },
        {name: '海南',value: randomData() },{name: '台湾',value: randomData() },
        {name: '香港',value: randomData() },{name: '澳门',value: randomData() }
    ];
    var option_inc_dis = {
        backgroundColor: '#FFFFFF',
        title: {
            text: '',
            subtext: '',
            x:'center'
        },
        tooltip : {
            trigger: 'item'
        },

        //左侧小导航图标
        visualMap: {
            show : true,
            x: 'left',
            y: 'center',
            splitList: [
                {start: 500, end:600},{start: 400, end: 500},
                {start: 300, end: 400},{start: 200, end: 300},
                {start: 100, end: 200},{start: 0, end: 100},
            ],
            color: ['#5475f5', '#9feaa5', '#85daef','#74e2ca', '#e6ac53', '#9fb5ea']
        },

        //配置属性
        series: [{
            name: '数据',
            type: 'map',
            mapType: 'china',
            roam: true,
            label: {
                normal: {
                    show: true  //省份名称
                },
                emphasis: {
                    show: false
                }
            },
            data:mydata  //数据
        }]
    };
    var myChart_inc_dis = echarts.init(document.getElementById("myChart_inc_dis"), 'walden');

    myChart_inc_dis.setOption(option_inc_dis);
</script>
<!--cdn_dis-->
<script>
    function randomData() {
        return Math.round(Math.random()*500);
    }
    var mydata = [
        {name: '北京',value: '100' },{name: '天津',value: randomData() },
        {name: '上海',value: randomData() },{name: '重庆',value: randomData() },
        {name: '河北',value: randomData() },{name: '河南',value: randomData() },
        {name: '云南',value: randomData() },{name: '辽宁',value: randomData() },
        {name: '黑龙江',value: randomData() },{name: '湖南',value: randomData() },
        {name: '安徽',value: randomData() },{name: '山东',value: randomData() },
        {name: '新疆',value: randomData() },{name: '江苏',value: randomData() },
        {name: '浙江',value: randomData() },{name: '江西',value: randomData() },
        {name: '湖北',value: randomData() },{name: '广西',value: randomData() },
        {name: '甘肃',value: randomData() },{name: '山西',value: randomData() },
        {name: '内蒙古',value: randomData() },{name: '陕西',value: randomData() },
        {name: '吉林',value: randomData() },{name: '福建',value: randomData() },
        {name: '贵州',value: randomData() },{name: '广东',value: randomData() },
        {name: '青海',value: randomData() },{name: '西藏',value: randomData() },
        {name: '四川',value: randomData() },{name: '宁夏',value: randomData() },
        {name: '海南',value: randomData() },{name: '台湾',value: randomData() },
        {name: '香港',value: randomData() },{name: '澳门',value: randomData() }
    ];
    var option_cdn_dis = {
        backgroundColor: '#FFFFFF',
        title: {
            text: '',
            subtext: '',
            x:'center'
        },
        tooltip : {
            trigger: 'item'
        },

        //左侧小导航图标
        visualMap: {
            show : true,
            x: 'left',
            y: 'center',
            splitList: [
                {start: 500, end:600},{start: 400, end: 500},
                {start: 300, end: 400},{start: 200, end: 300},
                {start: 100, end: 200},{start: 0, end: 100},
            ],
            color: ['#5475f5', '#9feaa5', '#85daef','#74e2ca', '#e6ac53', '#9fb5ea']
        },

        //配置属性
        series: [{
            name: '数据',
            type: 'map',
            mapType: 'china',
            roam: true,
            label: {
                normal: {
                    show: true  //省份名称
                },
                emphasis: {
                    show: false
                }
            },
            data:mydata  //数据
        }]
    };
    var myChart_cdn_dis = echarts.init(document.getElementById("myChart_cdn_dis"), 'walden');

    myChart_cdn_dis.setOption(option_cdn_dis);
</script>
<script type="text/javascript" src="/yq_zl_0/public/static/index/js/jquery-3.3.1.js"></script>
<script src="/yq_zl_0/public/static/index/js/layui1.js" type="text/javascript" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script src="/yq_zl_0/public/static/index/js/echarts.js"></script>
<script src="/yq_zl_0/public/static/index/js/china.js"></script>
</html>
