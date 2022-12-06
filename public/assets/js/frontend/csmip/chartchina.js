define(['jquery', 'bootstrap', 'frontend', 'template', 'form','echarts','frontend/csmip/china'],
function ($, undefined, Frontend, Template, Form,echarts,china) {
   
    var chart = {
        left:function(){
            var myChart = echarts.init(document.getElementById('mainleft'));
            //var dataList = [{name: "南海诸岛",value: 0}];
            option = {
                tooltip: {
                    triggerOn: "click",
                    formatter: function(e, t, n) {
                        return .5 == e.value ? e.name + "：人数" : e.seriesName + "<br />" + e.name + "：" + e.value
                    }
                },
                visualMap: {
                    min: 0,
                    max: 1000,
                    left: 26,
                    bottom: 120,
                    showLabel: !0,
                    text: [],
                    pieces:chartconfig.chartchina.pieces,
                    /*
                    pieces: [{
                        gt: 1000,
                        label: "> 1000 人",
                        color: "#7f1100"
                    }, {
                        gte: 100,
                        lte: 1000,
                        label: "100 - 1000 人",
                        color: "#ff5428"
                    }, {
                        gte: 11,
                        lt: 100,
                        label: "10 - 99 人",
                        color: "#ff8c71"
                    }, {
                        gt: 1,
                        lt: 10,
                        label: "1 - 9 人",
                        color: "#ffd768"
                    }, {
                        value: 0,
                        color: "#9c9c9c"
                    }],
                    */
                    show: !0
                },
                geo: {
                    map: "china",
                    roam: !1,
                    scaleLimit: {
                        min: 1,
                        max: 2
                    },
                    zoom: 1.23,
                    top: 80,
                    label: {
                        normal: {
                            show: 0,
                            fontSize: "14",
                            color: "rgba(0,0,0,0.7)"
                        }
                    },
                    itemStyle: {
                        normal: {
                            shadowBlur: 50,
                            shadowColor: 'rgba(0, 0, 0, 0.2)',
                            borderColor: "rgba(0, 0, 0, 0.2)"
                        },
                        emphasis: {
                            areaColor: "#f2d5ad",
                            shadowOffsetX: 0,
                            shadowOffsetY: 0,
                            borderWidth: 0
                        }
                    }
                },
                series: [{
                    name: "访问统计",
                    type: "map",
                    geoIndex: 0,
                    data: dataList
                }]
            };
            myChart.setOption(option);           
        }
    };

    var Controller = {
        index:function(){
            var that = this;
            chart.left();
            //chart.right();
        }
    };
    return Controller;
});