<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:98:"F:\xampp\htdocs\yq_zl_0\public/../application/index\view\real_time_monitoring\mainframes_view.html";i:1576998578;s:64:"F:\xampp\htdocs\yq_zl_0\application\index\view\public\_Left.html";i:1576995561;s:64:"F:\xampp\htdocs\yq_zl_0\application\index\view\public\_Menu.html";i:1571827967;}*/ ?>
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
<div class="row" style="height: 100%">
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
    <div class="Div">
        <div class="col-md-12">
            <h3>主机视图</h3>
        </div>
    </div>
    <div class="Div">
        <div class="layui-col-md12">
            <div class="layui-col-md6">
                <h3>瓶颈&速度分析</h3>
                <!--part1-1-->
                <div id="part1-1" style="height:400px;width:100%;">
                </div>
            </div>
            <div class="layui-col-md6">
                <div id="part1-2" style="height:400px;width:100%;"></div>
            </div>
        </div>
    </div>
    <!--<div class="Div">
        <div class="layui-col-md6">
            <h3>分段&运营商分析</h3>
            <div class="layui-col-md6">
                <div id="part2-1-1" style="height:150px;width:100%;"></div>
            </div>
            <div class="layui-col-md6">
                <div id="part2-1-2" style="height:150px;width:100%;"></div>
            </div>
        </div>
        <div class="layui-col-md6">
            <div id="three_in_one" style="height:300px;width:100%;"></div>
        </div>
    </div>-->
    <div class="Div">
        <div class="layui-col-md6">
            <h3>浏览器&元素分析</h3>
            <div class="layui-col-md4">
                <div id="ie" style="height:300px;width:100%;"></div>
            </div>
            <div class="layui-col-md4">
                <div id="firefox" style="height:300px;width:100%;"></div>
            </div>
            <div class="layui-col-md4">
                <div id="chrome" style="height:300px;width:100%;"></div>
            </div>
        </div>
        <div class="layui-col-md6">
            <div id="part3-2" style="height:300px;width:100%;"></div>
        </div>
        <div class="layui-col-md12">
            <h3>终端&分辨率分析</h3>
            <div id="part4" style="height:300px;width:100%;"></div>
        </div>
    </div>
    <!--表格1-->
</div>
<script type="text/javascript" src="/yq_zl_0/public/static/index/js/jquery-3.3.1.js"></script>

<script src="/yq_zl_0/public/static/index/js/layui1.js" type="text/javascript" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script src="/yq_zl_0/public/static/index/js/echarts.js"></script>
</body>
<!--3in1-->
<script>
    var myChart_3in1 = echarts.init(document.getElementById("three_in_one"), 'walden');
    var option_3in1 = {
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        legend: {
            data:['整页时间','首屏时间','白屏时间',]
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis : [
            {
                type : 'category',
                data : ['移动','电信','联通']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'白屏时间',
                type:'bar',
                data:[320, 332, 301]
            },
            {
                name:'首屏时间',
                type:'bar',
                stack: '广告',
                data:[120, 132, 101]
            },
            {
                name:'整页时间',
                type:'bar',
                stack: '广告',
                data:[220, 182, 191]
            },

        ]
    };
    myChart_3in1.setOption(option_3in1);
</script>
<script>
    var myChart_ie = echarts.init(document.getElementById("ie"), 'walden');
    option_ie = {
        angleAxis: {
        },
        radiusAxis: {
            type: 'category',
            data: ['', '', ''],
            z: 10
        },
        polar: {
        },
        series: [{
            type: 'bar',
            data: [1, 2, 3],
            coordinateSystem: 'polar',
            name: 'A',
            stack: 'a'
        }, {
            type: 'bar',
            data: [2, 4, 6],
            coordinateSystem: 'polar',
            name: 'B',
            stack: 'a'
        }, {
            type: 'bar',
            data: [1, 2, 3],
            coordinateSystem: 'polar',
            name: 'C',
            stack: 'a'
        }],
        legend: {
            show: true,
            data: ['A', 'B', 'C']
        }
    };

    myChart_ie.setOption(option_ie);
</script>
<script>
    var myChart_chrome = echarts.init(document.getElementById("chrome"), 'walden');
    option_chrome = {
        angleAxis: {
        },
        radiusAxis: {
            type: 'category',
            data: ['', '', ''],
            z: 10
        },
        polar: {
        },
        series: [{
            type: 'bar',
            data: [1, 2, 3],
            coordinateSystem: 'polar',
            name: 'A',
            stack: 'a'
        }, {
            type: 'bar',
            data: [2, 4, 6],
            coordinateSystem: 'polar',
            name: 'B',
            stack: 'a'
        }, {
            type: 'bar',
            data: [1, 2, 3],
            coordinateSystem: 'polar',
            name: 'C',
            stack: 'a'
        }],
        legend: {
            show: true,
            data: ['A', 'B', 'C']
        }
    };

    myChart_chrome.setOption(option_chrome);
</script>
<script>
    var myChart_firefox = echarts.init(document.getElementById("firefox"), 'walden');
    option_firefox = {
        angleAxis: {
        },
        radiusAxis: {
            type: 'category',
            data: ['', '', ''],
            z: 10
        },
        polar: {
        },
        series: [{
            type: 'bar',
            data: [1, 2, 3],
            coordinateSystem: 'polar',
            name: 'A',
            stack: 'a'
        }, {
            type: 'bar',
            data: [2, 4, 6],
            coordinateSystem: 'polar',
            name: 'B',
            stack: 'a'
        }, {
            type: 'bar',
            data: [1, 2, 3],
            coordinateSystem: 'polar',
            name: 'C',
            stack: 'a'
        }],
        legend: {
            show: true,
            data: ['A', 'B', 'C']
        }
    };

    myChart_firefox.setOption(option_firefox);
</script>
<!--part1-1-->
<script type="text/javascript">
    // 基于准备好的容器(这里的容器是id为chart1的div)，初始化echarts实例
    var chart1 = echarts.init(document.getElementById("part1-1"));

    // 指定图表的配置项和数据
    var option = {
        backgroundColor: 'rgba(255,255,255,0.5)',         // 背景色，默认无背景	rgba(51,255,255,0.7)

        title: {
            text: '',
            target: 'blank',
            top: '5%',
            left: '3%',
            textStyle: {
                color: '#fff',
                fontSize: 20,
            }
        },

        legend: {                        // 图例组件
            show: true,
            icon: 'rect',                   // 图例项的 icon。ECharts 提供的标记类型包括 'circle', 'rect', 'roundRect', 'triangle', 'diamond', 'pin', 'arrow'也可以通过 'image://url' 设置为图片，其中 url 为图片的链接，或者 dataURI。可以通过 'path://' 将图标设置为任意的矢量路径。
            top : '40%',                    // 图例距离顶部边距
            left : '15%',                   // 图例距离左侧边距
            itemWidth: 10,                  // 图例标记的图形宽度。[ default: 25 ]
            itemHeight: 10,                 // 图例标记的图形高度。[ default: 14 ]
            itemGap: 30,                	// 图例每项之间的间隔。[ default: 10 ]横向布局时为水平间隔，纵向布局时为纵向间隔。
            orient: 'vertical',             // 图例列表的布局朝向,'horizontal'为横向,''为纵向.
            textStyle: {                    // 图例的公用文本样式。
                fontSize: 15,
                color: '#fff'
            },
            data: [{                    // 图例的数据数组。数组项通常为一个字符串，每一项代表一个系列的 name（如果是饼图，也可以是饼图单个数据的 name）。图例组件会自动根据对应系列的图形标记（symbol）来绘制自己的颜色和标记，特殊字符串 ''（空字符串）或者 '\n'（换行字符串）用于图例的换行。
                // 图例项的名称，应等于某系列的name值（如果是饼图，也可以是饼图单个数据的 name）。
                icon: 'rect',               // 图例项的 icon。
                textStyle: {                // 图例项的文本样式。
                    color: 'rgba(51,0,255,1)',
                    fontWeight: 'bold'		// 文字字体的粗细，可选'normal'，'bold'，'bolder'，'lighter'
                }
            }],
        },

        radar: [{                       // 雷达图坐标系组件，只适用于雷达图。
            center: ['50%', '50%'],             // 圆中心坐标，数组的第一项是横坐标，第二项是纵坐标。[ default: ['50%', '50%'] ]
            radius: 160,                        // 圆的半径，数组的第一项是内半径，第二项是外半径。
            startAngle: 90,                     // 坐标系起始角度，也就是第一个指示器轴的角度。[ default: 90 ]
            name: {                             // (圆外的标签)雷达图每个指示器名称的配置项。
                formatter: '{value}',
                textStyle: {
                    fontSize: 15,
                    color: '#000'
                }
            },
            nameGap: 15,                        // 指示器名称和指示器轴的距离。[ default: 15 ]
            splitNumber: 5,                     // (这里是圆的环数)指示器轴的分割段数。[ default: 5 ]
            shape: 'polygon',                    // 雷达图绘制类型，支持 'polygon'(多边形) 和 'circle'(圆)。[ default: 'polygon' ]
            axisLine: {                         // (圆内的几条直线)坐标轴轴线相关设置
                lineStyle: {
                    color: '#fff',                   // 坐标轴线线的颜色。
                    width: 1,                      	 // 坐标轴线线宽。
                    type: 'solid',                   // 坐标轴线线的类型。
                }
            },
            splitLine: {                        // (这里是指所有圆环)坐标轴在 grid 区域中的分隔线。
                lineStyle: {
                    color: '#fff',                       // 分隔线颜色
                    width: 2, 							 // 分隔线线宽
                }
            },
            splitArea: {                        // 坐标轴在 grid 区域中的分隔区域，默认不显示。
                show: true,
                areaStyle: {                            // 分隔区域的样式设置。
                    color: ['rgba(250,250,250,0.3)','rgba(200,200,200,0.3)'],       // 分隔区域颜色。分隔区域会按数组中颜色的顺序依次循环设置颜色。默认是一个深浅的间隔色。
                }
            },
            indicator: [{               // 雷达图的指示器，用来指定雷达图中的多个变量（维度）,跟data中 value 对应
                name: '系统',                           // 指示器名称
                max: 100,                               // 指示器的最大值，可选，建议设置
                //color: '#fff'                           // 标签特定的颜色。
            }, {
                name: '网络',
                max: 100
            }, {
                name: '安全',
                max: 100
            }, {
                name: '速度',
                max: 100
            }, {
                name: '后端',
                max: 100
            }, {
                name: '前端',
                max: 100
            }]
        }],
        series: [{
            name: '雷达图',             // 系列名称,用于tooltip的显示，legend 的图例筛选，在 setOption 更新数据和配置项时用于指定对应的系列。
            type: 'radar',              // 系列类型: 雷达图
            itemStyle: {                // 折线拐点标志的样式。
                normal: {                   // 普通状态时的样式
                    lineStyle: {
                        width: 1
                    },
                    opacity: 0.2
                },
                emphasis: {                 // 高亮时的样式
                    lineStyle: {
                        width: 6
                    },
                    opacity: 1
                }
            },
            data: [ {
                name: '',
                value: [95, 89, 85, 92, 95,97],
                symbol: 'circle',
                symbolSize: 5,
                label: {
                    normal: {
                        show: true,
                        position: 'top',
                        distance: 5,
                        color: 'rgba(51,0,255,1)',
                        fontSize: 14,
                        formatter:function(params) {
                            return params.value;
                        }
                    }
                },
                itemStyle: {
                    normal: {
                        borderColor: 'rgba(51,0,255,1)',
                        borderWidth: 3,
                    }
                },
                lineStyle: {
                    normal: {
                        opacity: 0.5
                    }
                },
                areaStyle: {
                    normal: {
                        color: 'rgba(51,0,255,0.5)'
                    }
                }
            }]
        }, ]
    };

    // 使用刚指定的配置项和数据显示图表
    chart1.setOption(option)
</script>
<!--part1-2-->
<script>
    var myChart_1_2 = echarts.init(document.getElementById("part1-2"), 'walden');
    option_1_2 = {
        title: {
            text: ''
        },
        tooltip : {
            trigger: 'axis',
            axisPointer: {
                type: 'cross',
                label: {
                    backgroundColor: '#6a7985'
                }
            }
        },
        legend: {
            data:['白屏时间','首屏时间','整页时间']
        },
        toolbox: {
            feature: {
                saveAsImage: {}
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                data : ['周一','周二','周三','周四','周五','周六','周日']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'白屏时间',
                type:'line',
                stack: '总量',
                areaStyle: {},
                data:[120, 132, 101, 134, 90, 230, 210]
            },
            {
                name:'首屏时间',
                type:'line',
                stack: '总量',
                areaStyle: {},
                data:[220, 182, 191, 234, 290, 330, 310]
            },
            {
                name:'整页时间',
                type:'line',
                stack: '总量',
                areaStyle: {},
                data:[150, 232, 201, 154, 190, 330, 410]
            },
        ]
    };

    myChart_1_2.setOption(option_1_2);
</script>
<!--part2-1-1-->
<script>
    var myChart_2_1_1 = echarts.init(document.getElementById("part2-1-1"), 'walden');
    myChart_2_1_1.setOption(option_2_1_1);
</script>
<!--part2-1-2-->
<script>
    var myChart_2_1_2 = echarts.init(document.getElementById("part2-1-2"), 'walden');
    myChart_2_1_2.setOption(option_2_1_2);
</script>
<!--part3-2-->
<script>
    var myChart_3_2 = echarts.init(document.getElementById("part3-2"), 'walden');
    option_3_2 = {
        backgroundColor: '',

        title: {
            text: '',
            left: 'center',
            top: 20,
            textStyle: {
                color: '#ccc'
            }
        },

        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },

        visualMap: {
            show: false,
            min: 80,
            max: 600,
            inRange: {
                colorLightness: [0, 1]
            }
        },
        series : [
            {
                name:'访问来源',
                type:'pie',
                radius : '55%',
                center: ['50%', '50%'],
                data:[
                    {value:335, name:'直接访问'},
                    {value:310, name:'邮件营销'},
                    {value:274, name:'联盟广告'},
                    {value:235, name:'视频广告'},
                    {value:400, name:'搜索引擎'}
                ].sort(function (a, b) { return a.value - b.value; }),
                roseType: 'radius',
                label: {
                    normal: {
                        textStyle: {
                            color: 'rgba(255, 255, 255, 0.3)'
                        }
                    }
                },
                labelLine: {
                    normal: {
                        lineStyle: {
                            color: 'rgba(255, 255, 255, 0.3)'
                        },
                        smooth: 0.2,
                        length: 10,
                        length2: 20
                    }
                },
                itemStyle: {
                    normal: {
                        color: '#c23531',
                        shadowBlur: 200,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                },

                animationType: 'scale',
                animationEasing: 'elasticOut',
                animationDelay: function (idx) {
                    return Math.random() * 200;
                }
            }
        ]
    };
    myChart_3_2.setOption(option_3_2);
</script>
<!--part4-->
<script>
    var myChart_part4 = echarts.init(document.getElementById("part4"), 'walden');
    option_part4 = {
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        legend: {
            data: ['直接访问', '邮件营销','联盟广告','视频广告','搜索引擎']
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        yAxis:  {
            type: 'value'
        },
        xAxis: {
            type: 'category',
            data: ['720*1280','1536*2048','1366*768','1536*2048','768*1024','1366*768']
        },
        series: [
            {
                name: '直接访问',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [320, 302, 301, 334, 390, 330]
            },
            {
                name: '邮件营销',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [120, 132, 101, 134, 90, 230]
            },
            {
                name: '联盟广告',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [220, 182, 191, 234, 290, 330]
            },
            {
                name: '视频广告',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [150, 212, 201, 154, 190, 330]
            },
            {
                name: '搜索引擎',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [820, 832, 901, 934, 1290, 1330]
            }
        ]
    };
    myChart_part4.setOption(option_part4);
</script>
<!--part2-1-->
<script>
    var myChart_firefox = echarts.init(document.getElementById("firefox"), 'walden');
    myChart_firefox.setOption(option_firefox);
</script>
<script src="../..//yq_zl_0/public/static/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="../..//yq_zl_0/public/static/js/echarts.min.js"></script>

</html>
