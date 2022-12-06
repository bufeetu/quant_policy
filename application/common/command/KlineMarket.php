<?php

namespace app\common\command;

use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\console\input\Argument;
use think\console\input\Option;
use app\admin\model\Market as Model;
use think\Db;
use Lin\Binance\Binance;

/**
 * php think klineMarket
 */
class KlineMarket extends Command
{
    protected function configure()
    {
        $this->setName('klineMarket');
    }

    protected function execute(Input $input, Output $output)
    {
        //获取交易对
        $symbols=Model::where([
            'switch'=>1
        ])->column('symbol');
        $count=count($symbols);
        $str_symbols='[';
        foreach ($symbols as $k=>$symbol) {
            $str_symbols.='"'.$symbol.'"';
            if ($k<$count-1) {
                $str_symbols.=',';
            } else {
                $str_symbols.=']';
            }
        }
        //采集数据
        $Binance=new Binance();
        $rows=$Binance->system()->get24hr([
            'symbols'=>$str_symbols,
        ]);
        //写入数据库
        Db::startTrans();
        try {
            foreach ($rows as $row) {
                $res=Model::where(['symbol'=>$row['symbol']])->update($row);
                if (!$res) {
                    exception('保存失败'.$row['symbol']);
                }
            }
            Db::commit();
            $output->writeln('success');
        } catch (\Exception $e) {
            $output->writeln($e->getMessage());
        }
        //end
        $output->writeln("end.");
    }
}
