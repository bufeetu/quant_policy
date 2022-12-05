define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'csmip/chartbind/index' + location.search,
                    add_url: 'csmip/chartbind/add',
                    edit_url: 'csmip/chartbind/edit',
                    del_url: 'csmip/chartbind/del',
                    multi_url: 'csmip/chartbind/multi',
                    table: 'csmip_chartbind',
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
                        {field: 'charttype', title: __('Charttype')},
                        {field: 'chartkey', title: __('Chartkey')},
                        {field: 'ip2regionkey', title: __('Ip2regionkey')},
                        {field: 'b1', title: __('B1')},
                        {field: 'status', title: __('Status'), searchList: {"normal":__('Normal'),"hidden":__('Hidden')}, formatter: Table.api.formatter.status},
                        // {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        // {field: 'updatetime', title: __('Updatetime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                         
                        // {field: 'b2', title: __('B2')},
                        // {field: 'b3', title: __('B3')},
                        // {field: 'b4', title: __('B4')},
                        // {field: 'b5', title: __('B5')},
                        // {field: 'b6', title: __('B6')},
                        // {field: 'b7', title: __('B7')},
                        // {field: 'b8', title: __('B8')},
                        // {field: 'b9', title: __('B9')},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
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
        }
    };
    return Controller;
});