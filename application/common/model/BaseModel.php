<?php
namespace app\common\model;

use think\Model;
use think\Db;

class BaseModel extends Model
{
    // 数据表名称
    protected $table;
    protected $name;
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';
    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    protected $deleteTime = false;
    // 追加属性
    protected $append = [

    ];


    public static function getList(array $where, array $between = [], array $order = [])
    {
        if (empty($order)) {
            $order=['id','desc'];
        }
        return self::all(function ($query) use ($where, $between, $order) {
            $query->where($where)->order($order[0].' '.$order[1]);
            if (!empty($between) && !empty($between[0]) && !empty($between[1])) {
                $query->whereBetween("createtime", strtotime($between[0]).",".strtotime($between[1]));
            }
        });
    }
    public static function getRandId(array $where)
    {
        $list=self::all($where);
        $key=array_rand($list);
        $id=$list[$key]['id'];
        return $id;
    }

    public static function getOne(array $where, string $field='')
    {
        $row=self::get($where);
        if (!empty($field)) {
            return $row[$field];
        }
        return $row;
    }
    public static function exists(array $where)
    {
        $row=self::get($where);

        return !empty($row);
    }
    public static function addOne(array $data)
    {
        $row=self::get($data);

        if (!empty($row)) {
            return $row;
        }
        return self::create($data);
    }
    public static function updateOne(array $data, array $where)
    {
        $row=self::getOne($where);
        if (!$row) {
            return false;
        }

        return self::update($data, $where);
    }
    public static function deleteByWhere(array $where)
    {
        return self::destroy(function ($query) use ($where) {
            $query->where($where);
        });
    }
    public static function countByWhere(array $where, array $between = [])
    {
        $list=self::getList($where, $between);
        return count($list);
    }
    public function getName()
    {
        return $this->name;
    }
    public function getTable()
    {
        return 'fa_'.$this->name;
    }
}
