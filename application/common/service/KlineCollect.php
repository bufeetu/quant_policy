<?php

namespace app\common\service;

use Lin\Binance\Binance;
use app\common\service\BaseService;
use think\Queue;
use think\Log;
use think\Cache;

class KlineCollect extends BaseService
{
    protected $Binance;


    public function __construct()
    {
        $this->Binance=new Binance();
    }

    public function collect($symbol, $interval, $startDate, $dir, $key_cache_count)
    {
        try {
            //清空目录
            if (is_dir($dir)) {
                deldir($dir);
            }
            //准备前缀
            $prefix=$symbol.'_'.$interval.'_'.date('Ymd', strtotime($startDate));
            //按时间循环遍历
            $startTime=strtotime($startDate);
            $endTime=strtotime(date('Y-m-d'));
            while ($startTime < $endTime) {
                //采集数据
                $params=[
                    'symbol'=>strtoupper($symbol),
                    'interval'=>$interval,
                    'startTime'=>$startTime.'000',
                    'limit'=>1000,
                ];
                $rows=$this->Binance->system()->getKlines($params);

                if (empty($rows) ||count($rows)<=0) {
                    $startTime=$endTime;
                    continue;
                }
                //数据加工
                $data=[];
                foreach ($rows as $row) {
                    $temp=[
                        'opentime'=>substr($row[0], 0, 10),
                        'open'=>$row[1],
                        'high'=>$row[2],
                        'low'=>$row[3],
                        'close'=>$row[4],
                        'volume'=>$row[5],
                        'closetime'=>substr($row[6], 0, 10),
                        'amount'=>$row[7],
                        'num'=>$row[8],
                        'volume_active'=>$row[9],
                        'amount_active'=>$row[10],
                    ];
                    $data[]=$temp;
                    unset($temp);
                }
                //推送导出数据队列
                while (Cache::get($key_cache_count) >=20) {
                    sleep(1);
                }
                $filename=$prefix.'_'.date('YmdHi', substr($rows[0][0], 0, 10));
                Queue::push('app\job\ExportKlineDataToExcelJob', [
                    'data'=>$data,
                    'dir'=>$dir,
                    'filename'=>$filename,
                    'key_cache_count'=>$key_cache_count,
                ]);
                //计数和记录日志
                Cache::inc($key_cache_count, 1);
                $msg='推送excel保存任务成功,文件名'.$filename.',队列数量'.Cache::get($key_cache_count);
                echo($msg."\n");
                //准备下次时间
                $startTime=substr(end($rows)[0], 0, 10)+60;
            }
            return alert_info(0, 'success');
        } catch (\Exception $e) {
            return alert_info(1, $e->getMessage());
        }
    }
}
