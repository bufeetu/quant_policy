<?php

namespace app\common\command;

use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\console\input\Argument;
use think\console\input\Option;

use Lin\Binance\Binance;

/**
 * php think test
 //'ethusdt','ltcusdt','eosusdt','etcusdt'
 */
class Test extends Command
{
    protected function configure()
    {
        $this->setName('test');
    }

    protected function execute(Input $input, Output $output)
    {

        $Binance=new Binance();

        $rows=$Binance->system()->get24hr([
            // 'symbol'=>'BTCUSDT',
            'symbols'=>'["BTCUSDT","BNBUSDT"]',
        ]);
        var_dump($rows);
        // $output->writeln($rows);
        $output->writeln("end.");
    }
}
