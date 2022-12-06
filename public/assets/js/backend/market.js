define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'market/index' + location.search,
                    add_url: 'market/add',
                    del_url: 'market/del',
                    multi_url: 'market/multi',
                    import_url: 'market/import',
                    table: 'market',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'weigh',
                fixedColumns: true,
                fixedNumber: 2,
                // fixedRightNumber: 1,
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id'),visible:false},
                        {field: 'symbol', title: __('Symbol'), operate: 'LIKE'},
                        {field: 'priceChange', title: __('Pricechange'), operate:'BETWEEN'},
                        {field: 'priceChangePercent', title: __('Pricechangepercent'), operate:'BETWEEN'},
                        {field: 'weightedAvgPrice', title: __('Weightedavgprice'), operate:'BETWEEN'},
                        {field: 'prevClosePrice', title: __('Prevcloseprice'), operate:'BETWEEN'},
                        {field: 'lastPrice', title: __('Lastprice'), operate:'BETWEEN'},
                        {field: 'lastQty', title: __('Lastqty'), operate:'BETWEEN'},
                        {field: 'bidPrice', title: __('Bidprice'), operate:'BETWEEN'},
                        {field: 'bidQty', title: __('Bidqty'), operate:'BETWEEN'},
                        {field: 'askPrice', title: __('Askprice'), operate:'BETWEEN'},
                        {field: 'askQty', title: __('Askqty'), operate:'BETWEEN'},
                        {field: 'openPrice', title: __('Openprice'), operate:'BETWEEN'},
                        {field: 'highPrice', title: __('Highprice'), operate:'BETWEEN'},
                        {field: 'lowPrice', title: __('Lowprice'), operate:'BETWEEN'},
                        {field: 'volume', title: __('Volume'), operate:'BETWEEN'},
                        {field: 'quoteVolume', title: __('Quotevolume'), operate:'BETWEEN'},
                        {
                            field: 'openTime_text',
                            title: __('OpentimeText'),
                        },
                        {
                            field: 'closeTime_text',
                            title: __('ClosetimeText'),
                        },
                        {field: 'firstId', title: __('Firstid')},
                        {field: 'lastId', title: __('Lastid')},
                        {field: 'count', title: __('Count')},
                        {field: 'weigh', title: __('Weigh'), operate: false},
                        {field: 'switch', title: __('Switch'), searchList: {"1":__('Yes'),"0":__('No')}, table: table, formatter: Table.api.formatter.toggle},
                        {
                            field: 'createtime',
                            title: __('Createtime'),
                            formatter: Table.api.formatter.datetime
                        },
                        {
                            field: 'updatetime',
                            title: __('Updatetime'),
                            formatter: Table.api.formatter.datetime
                        },
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
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});
