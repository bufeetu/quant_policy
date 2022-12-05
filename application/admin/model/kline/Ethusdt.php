<?php

namespace app\admin\model\kline;

use app\common\model\BaseModel;

class Ethusdt extends BaseModel
{

    // 表名
    protected $name = 'kline_ethusdt';

    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    protected $deleteTime = false;

    // 追加属性
    protected $append = [
        'opentime_text',
        'closetime_text'
    ];






    public function getOpentimeTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['opentime']) ? $data['opentime'] : '');
        return is_numeric($value) ? date("Y-m-d H:i:s", $value) : $value;
    }


    public function getClosetimeTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['closetime']) ? $data['closetime'] : '');
        return is_numeric($value) ? date("Y-m-d H:i:s", $value) : $value;
    }

    protected function setOpentimeAttr($value)
    {
        return $value === '' ? null : ($value && !is_numeric($value) ? strtotime($value) : $value);
    }

    protected function setClosetimeAttr($value)
    {
        return $value === '' ? null : ($value && !is_numeric($value) ? strtotime($value) : $value);
    }


}
