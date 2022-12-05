<?php

namespace app\common\command;

use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\console\input\Option;
use app\common\service\KlineCollect as Service;
use think\Cache;

/**
 php think kline_collect btcusdt 2018-06-15
 *
 */
class KlineCollect extends Command
{
    protected function configure()
    {
        $this->setName('kline_collect')
        ->addArgument('symbols')//btcusdt,ethusdt,ltcusdt,eosusdt,etcusdt
        ->addArgument('intervals')//1w,1d,12h,4h,2h,1h,30m,15m,5m,1m
        ->addArgument('startDate');//2018-06-15
    }

    protected function execute(Input $input, Output $output)
    {
        $symbols=$input->getArgument('symbols');
        $list_symbol=explode(',',$symbols);
        $intervals=$input->getArgument('intervals');
        $list_interval=explode(',',$intervals);
        $startDate=$input->getArgument('startDate');
        foreach ($list_symbol as $symbol) {
            //初始化计次
            $key_cache_count='count_queue_kline_collect_'.$symbol;
            Cache::set($key_cache_count, 0);
            //遍历调用server
            foreach ($list_interval as $interval) {
                $dir='./runtime/kline/'.$symbol.'/'.$interval.'/';
                $res=(new Service())->collect($symbol, $interval, $startDate, $dir, $key_cache_count);
                if ($res['code']!=0) {
                    $output->writeln($res['msg']);
                }
            }
        }



        $output->writeln("run end.");
    }
}
