define(['jquery', 'bootstrap', 'frontend', 'template', 'form','echarts'],function ($, undefined, Frontend, Template, Form,echarts) {
    var country1 = {
        country1left: function () {
            alert('x');
            var myChart = echarts.init(document.getElementById('mainleft'));
            var data = [
                [5000, 10000, 6785.71],
                [4000, 10000, 6825],
                [3000, 6500, 4463.33],
                [2500, 5600, 3793.83],
                [2000, 4000, 3060],
                [2000, 4000, 3222.33],
                [2500, 4000, 3133.33],
                [1800, 4000, 3100],
                [2000, 3500, 2750],
                [2000, 3000, 2500],
                [1800, 3000, 2433.33],
                [2000, 2700, 2375],
                [1500, 2800, 2150],
                [1500, 2300, 2100],
                [1600, 3500, 2057.14],
                [1500, 2600, 2037.5],
                [1500, 2417.54, 1905.85],
                [1500, 2000, 1775],
                [1500, 1800, 1650]
            ];
            var cities = ['北京', '上海', '深圳', '广州', '苏州', '杭州', '南京', '福州', '青岛', '济南', '长春', '大连', '温州', '郑州', '武汉', '成都', '东莞', '沈阳', '烟台'];
            var barHeight =
            option = {
                title: {
                    text: '',
                    subtext: ''
                },
                legend: {
                    show: true,
                    data: ['价格范围', '均值']
                },
                grid: {
                    top: 100
                },
                angleAxis: {
                    type: 'category',
                    data: cities
                },
                tooltip: {
                    show: true,
                    formatter: function (params) {
                        var id = params.dataIndex;
                        return cities[id] + '<br>最低：' + data[id][0] + '<br>最高：' + data[id][1] + '<br>平均：' + data[id][2];
                    }
                },
                radiusAxis: {
                },
                polar: {
                },
                series: [{
                    type: 'bar',
                    itemStyle: {
                        color: 'transparent'
                    },
                    data: data.map(function (d) {
                        return d[0];
                    }),
                    coordinateSystem: 'polar',
                    stack: '最大最小值',
                    silent: true
                }, {
                    type: 'bar',
                    data: data.map(function (d) {
                        return d[1] - d[0];
                    }),
                    coordinateSystem: 'polar',
                    name: '价格范围',
                    stack: '最大最小值'
                }, {
                    type: 'bar',
                    itemStyle: {
                        color: 'transparent'
                    },
                    data: data.map(function (d) {
                        return d[2] - barHeight;
                    }),
                    coordinateSystem: 'polar',
                    stack: '均值',
                    silent: true,
                    z: 10
                }, {
                    type: 'bar',
                    data: data.map(function (d) {
                        return barHeight * 2;
                    }),
                    coordinateSystem: 'polar',
                    name: '均值',
                    stack: '均值',
                    barGap: '-100%',
                    z: 10
                }]
            };
            myChart.setOption(option);
        },
        country1right:function(){
            //TODO
        },        
    };


    var china1 = {
        left:function(){
            var myChart = echarts.init(document.getElementById('mainleft'));
            window.dataList = [{
                    name: "南海诸岛",
                    value: 0
                },
                {
                    name: '北京',
                    value: 54
                },
                {
                    name: '天津',
                    value: 13
                },
                {
                    name: '上海',
                    value: 40
                },
                {
                    name: '重庆',
                    value: 75
                },
                {
                    name: '河北',
                    value: 13
                },
                {
                    name: '河南',
                    value: 83
                },
                {
                    name: '云南',
                    value: 11
                },
                {
                    name: '辽宁',
                    value: 19
                },
                {
                    name: '黑龙江',
                    value: 15
                },
                {
                    name: '湖南',
                    value: 69
                },
                {
                    name: '安徽',
                    value: 60
                },
                {
                    name: '山东',
                    value: 39
                },
                {
                    name: '新疆',
                    value: 4
                },
                {
                    name: '江苏',
                    value: 31
                },
                {
                    name: '浙江',
                    value: 104
                },
                {
                    name: '江西',
                    value: 36
                },
                {
                    name: '湖北',
                    value: 1052
                },
                {
                    name: '广西',
                    value: 33
                },
                {
                    name: '甘肃',
                    value: 7
                },
                {
                    name: '山西',
                    value: 9
                },
                {
                    name: '内蒙古',
                    value: 7
                },
                {
                    name: '陕西',
                    value: 22
                },
                {
                    name: '吉林',
                    value: 4
                },
                {
                    name: '福建',
                    value: 18
                },
                {
                    name: '贵州',
                    value: 5
                },
                {
                    name: '广东',
                    value: 98
                },
                {
                    name: '青海',
                    value: 1
                },
                {
                    name: '西藏',
                    value: 0
                },
                {
                    name: '四川',
                    value: 44
                },
                {
                    name: '宁夏',
                    value: 4
                },
                {
                    name: '海南',
                    value: 22
                },
                {
                    name: '台湾',
                    value: 3
                },
                {
                    name: '香港',
                    value: 5
                },
                {
                    name: '澳门',
                    value: 5
                }
            ];
            option = {
                tooltip: {
                    triggerOn: "click",
                    formatter: function(e, t, n) {
                        return .5 == e.value ? e.name + "：有疑似病例" : e.seriesName + "<br />" + e.name + "：" + e.value
                    }
                },
                visualMap: {
                    min: 0,
                    max: 1000,
                    left: 26,
                    bottom: 40,
                    showLabel: !0,
                    text: ["高", "低"],
                    pieces: [{
                        gt: 100,
                        label: "> 100 人",
                        color: "#7f1100"
                    }, {
                        gte: 10,
                        lte: 100,
                        label: "10 - 100 人",
                        color: "#ff5428"
                    }, {
                        gte: 1,
                        lt: 10,
                        label: "1 - 9 人",
                        color: "#ff8c71"
                    }, {
                        gt: 0,
                        lt: 1,
                        label: "疑似",
                        color: "#ffd768"
                    }, {
                        value: 0,
                        color: "#ffffff"
                    }],
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
                    top: 120,
                    label: {
                        normal: {
                            show: !0,
                            fontSize: "14",
                            color: "rgba(0,0,0,0.7)"
                        }
                    },
                    itemStyle: {
                        normal: {
                            //shadowBlur: 50,
                            //shadowColor: 'rgba(0, 0, 0, 0.2)',
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
                    name: "确诊病例",
                    type: "map",
                    geoIndex: 0,
                    data: window.dataList
                }]
            };
            myChart.setOption(option);           
        }
    };

    var Controller = {
        country1:function(){
            var that = this;
            country1.country1left();
            country1.country1right();
        },
        china1:function(){
            var that = this;
            china1.left();
        }
    };
    return Controller;
});