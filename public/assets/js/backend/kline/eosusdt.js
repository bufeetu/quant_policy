define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'kline/eosusdt/index' + location.search,
                    add_url: 'kline/eosusdt/add',
                    edit_url: 'kline/eosusdt/edit',
                    del_url: 'kline/eosusdt/del',
                    multi_url: 'kline/eosusdt/multi',
                    import_url: 'kline/eosusdt/import',
                    table: 'kline_eosusdt',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                fixedColumns: true,
                fixedRightNumber: 1,
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'opentime', title: __('Opentime'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'open', title: __('Open'), operate:'BETWEEN'},
                        {field: 'high', title: __('High'), operate:'BETWEEN'},
                        {field: 'low', title: __('Low'), operate:'BETWEEN'},
                        {field: 'close', title: __('Close'), operate:'BETWEEN'},
                        {field: 'volume', title: __('Volume'), operate:'BETWEEN'},
                        {field: 'closetime', title: __('Closetime'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'amount', title: __('Amount'), operate:'BETWEEN'},
                        {field: 'num', title: __('Num')},
                        {field: 'volume_active', title: __('Volume_active'), operate:'BETWEEN'},
                        {field: 'amount_active', title: __('Amount_active'), operate:'BETWEEN'},
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
