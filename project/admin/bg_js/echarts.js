var myChart_submit = echarts.init(document.getElementById('echarts-submit'));
var myChart_accept = echarts.init(document.getElementById('echarts-accept'));
// myChart.showLoading();
// window.onresize = myChart_accept.resize;
//ECharts没有绑定resize事件，显示区域大小发生改变内部并不知道，使用方可以根据自己的需求绑定关心的事件，
//主动调用resize达到自适应的效果，常见如window.onresize = myChart.resize。

window.addEventListener("resize", () => { 
	this.myChart_submit.resize();
	this.myChart_accept.resize();
});

myChart_submit.setOption({
	baseOption: {
	    title: {
	        text:''
	    },
	    color: ['#2B90E7'],
	    tooltip: {},
	    legend: {
	        data:['提交数'],
	        left:"right"
	    },
	    xAxis: {
	    	data: []
	    },
	    yAxis: {},
	    series: [{
	        name: '提交数',
	        type: 'bar'
	    }]
	},
	media: [
		{
			query: {
				maxWidth: 737
			},
			option: {
				title: {
			        text: '最近一周提交数据'
			    },
				series: [{
					data: [501,405,50,345,150,264,88]
				}],
				xAxis: {
					data: ["data","data","data","data","data","data","data"]
				}
			}
		},
		{
			query: {
				minWidth: 738
			},
			option: {
				title: {
			        text: '最近两周提交数据'
			    },
				series: [{
					data: [5, 20, 36, 10, 10, 20,5, 20, 36, 10, 10, 20,90,3]
				}],
				xAxis: {
	        		data: ["data","data","data","data","data","data","data","data","data","data","data","data","data","data"]
				}
			}
		}
	]
});

myChart_accept.setOption({
	baseOption: {
	    title: {
	        text:''
	    },
	    color: ['#8888FF'],
	    tooltip: {},
	    legend: {
	        data:['提交数'],
	        left:"right"
	    },
	    xAxis: {
	    	data: []
	    },
	    yAxis: {},
	    series: [{
	        name: '提交数',
	        type: 'bar'
	    }]
	},
	media: [
		{
			query: {
				maxWidth: 737
			},
			option: {
				title: {
			        text: '最近一周通过数据'
			    },
				series: [{
					data: [159,212,22,130,80,34,96]
				}],
				xAxis: {
					data: ["data","data","data","data","data","data","data"]
				}
			}
		},
		{
			query: {
				minWidth: 738
			},
			option: {
				title: {
			        text: '最近两周提交数据'
			    },
				series: [{
					data: [5, 20, 36, 10, 10, 20,5, 20, 36, 10, 10, 20,90,3]
				}],
				xAxis: {
	        		data: ["data","data","data","data","data","data","data","data","data","data","data","data","data","data"]
				}
			}
		}
	]
});