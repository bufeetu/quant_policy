define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'csmip/dataline/index' + location.search,
                    add_url: 'csmip/dataline/add',
                    edit_url: 'csmip/dataline/edit',
                    del_url: 'csmip/dataline/del',
                    multi_url: 'csmip/dataline/multi',
                    import_url: 'csmip/dataline/import?parentid='+$("#indexpageparentid").val(),
                    testipform_url: 'csmip/dataline/testipform',
                    table: 'csmip_dataline',
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
                        // {field: 'csmip_data_id', title: __('Csmip_data_id')},
                        {field: 'ip', title: __('Ip')},
                        {field: 'country', title: __('Country')},
                        {field: 'region', title: __('Region')},
                        {field: 'province', title: __('Province')},
                        {field: 'city', title: __('City')},
                        {field: 'isp', title: __('Isp')},
                        // {field: 'ipregcityid', title: __('Ipregcityid')},
                        // {field: 'ipregregion', title: __('Ipregregion')},
                        // {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        // {field: 'updatetime', title: __('Updatetime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'status', title: __('Status'), searchList: {"normal":__('Normal'),"hidden":__('Hidden')}, formatter: Table.api.formatter.status},
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
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            $("#c-csmip_data_id").val($("#indexpageparentid", window.top.document).val());
            $("#addpageparentname").text($("#indexpageparentname", window.top.document).val());            
            Controller.api.bindevent();
        },
        edit: function () {
            $("#editpageparentname").text($("#indexpageparentname", window.top.document).val());
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
                    url: "csmip/dataline/testipform",
                    type: "post",
                    data:{ip:$("#c-ip").val()}
                }, function (data, ret) {
                    console.log(data);
                    $("#c-country").val(data.country);
                    $("#c-region").val(data.region);
                    $("#c-province").val(data.province);
                    $("#c-city").val(data.city);
                    $("#c-isp").val(data.isp);
                    $("#c-ipregregion").val(data.ipregregion);
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