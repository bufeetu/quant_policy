define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {
    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'csmip/data/index' + location.search,
                    add_url: 'csmip/data/add',
                    edit_url: 'csmip/data/edit',
                    del_url: 'csmip/data/del',
                    multi_url: 'csmip/data/multi',
                    table: 'csmip_data',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'name', title: __('Name')},
                        {field: 'needuserlogin', title: __('Needuserlogin'), searchList: {"Y":__('Needuserlogin y'),"N":__('Needuserlogin n')}, formatter: Table.api.formatter.normal},
                        {field: 'status', title: __('Status'), searchList: {"normal":__('Normal'),"hidden":__('Hidden')}, formatter: Table.api.formatter.status},
                        // {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        // {field: 'updatetime', title: __('Updatetime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        // {field: 'admin_id', title: __('Admin_id')},
                        // {field: 'b1', title: __('B1')},
                        // {field: 'b2', title: __('B2')},
                        // {field: 'b3', title: __('B3')},
                        // {field: 'b4', title: __('B4')},
                        // {field: 'b5', title: __('B5')},
                        // {field: 'b6', title: __('B6')},
                        // {field: 'b7', title: __('B7')},
                        // {field: 'b8', title: __('B8')},
                        // {field: 'b9', title: __('B9')},
                        {
                            field: 'operate',
                            title: __('Operate'),
                            table: table, events: Table.api.events.operate,
                            formatter: Table.api.formatter.operate,
                            //formatter: Table.api.formatter.buttons,
                            buttons: [
                                {
                                    name: 'confinfos',
                                    text: __('IP清单'),
                                    classname: 'btn btn-xs btn-success btn-click',
                                    icon: 'fa fa-file',
                                    click: function (res, row) {
                                        window.open("../csmip/dataline?parentid=" + row.id);
                                    },
                                },
                                 {
                                    name: 'confinfos2',
                                    text: __('图表'),
                                    classname: 'btn btn-xs btn-success btn-click',
                                    icon: 'fa fa-file',
                                    click: function (res, row) {
                                        window.open(Fast.api.cdnurl('/index/csmip.chartchina/index?id=')+ row.id);
                                    },
                                },                                                       
                            ]
                        }   
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        },
        testipform:function(){
            $("#testipformbtn").click(function(){
                Fast.api.ajax({
                    url: "csmip/data/testipform",
                    type: "post",
                    data:{
                        name:$("#c-name").val(),
                        needuserlogin:$("#c-needuserlogin").val(),
                        ips:$("#c-ips").val()
                    }
                }, function (data, ret) {
                    console.log(data);
                    $("#c-chart").html("<a href='"+data.chart+"' target='_blank'>"+data.chart+"</a>");
                    $("#c-code").text(data.code);               
                    return false;
                }, function (data, ret) {
                    return false;
                });                
            });
        }        
    };
    return Controller;
});