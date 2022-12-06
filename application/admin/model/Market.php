<?php

namespace app\admin\model;

use think\Model;


class Market extends Model
{

    

    

    // 表名
    protected $name = 'market';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    protected $deleteTime = false;

    // 追加属性
    protected $append = [
        'openTime_text',
        'closeTime_text'
    ];
    

    protected static function init()
    {
        self::afterInsert(function ($row) {
            $pk = $row->getPk();
            $row->getQuery()->where($pk, $row[$pk])->update(['weigh' => $row[$pk]]);
        });
    }

    



    public function getOpentimeTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['openTime']) ? $data['openTime'] : '');
        return is_numeric($value) ? date("Y-m-d H:i:s", $value) : $value;
    }


    public function getClosetimeTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['closeTime']) ? $data['closeTime'] : '');
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
