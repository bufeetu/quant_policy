<?php

namespace app\job;

use think\queue\Job;
use app\common\traits\ExcelTrait;
use think\Log;
use think\Cache;

class ExportKlineDataToExcelJob
{
    use ExcelTrait;
    public function fire(Job $job, $params)
    {
        $list_head=[
                    'A'=>'opentime',
                    'B'=>'open',
                    'C'=>'high',
                    'D'=>'low',
                    'E'=>'close',
                    'F'=>'volume',
                    'G'=>'closetime',
                    'H'=>'amount',
                    'I'=>'num',
                    'J'=>'volume_active',
                    'K'=>'amount_active',
            ];

        $this->traitExportExcel(array_values($list_head), $params['data'], $params['dir'], $params['filename'],array_keys($list_head));
        if ($job->attempts() > 3) {
            $job->delete();
        }
        $job->delete();
        Cache::inc($params['key_cache_count'], -1);
        $msg='导出excel成功,文件名'.$params['filename'].',剩余队列数量'.Cache::get($params['key_cache_count']);
        echo($msg."\n");
    }

    public function failed($data)
    {
    }
}
