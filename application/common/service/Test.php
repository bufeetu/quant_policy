<?php

namespace app\common\service;

use think\Exception;
use Lin\Binance\Binance;
use think\Db;
use app\common\service\BaseService;

class Test extends BaseService
{
    protected $params=[];
    protected $account=[];
    protected $orders=[];
    protected $result=[];
    public function __construct()
    {
    }

    public function setParams($field, $val)
    {
        $this->params[$field]=$val;
        return $this;
    }


    public function run()
    {
        // return alert_info(1, 'error');
        return alert_info(0, 'success'.$this->params['symbol']);
    }
}
