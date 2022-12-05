<?php

namespace app\common\command;

use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\console\input\Argument;
use think\console\input\Option;
use app\common\service\Test as Service;

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
        $res=(new Service())
            ->setParams('symbol', 'btcusdt')
            ->run();
        if ($res['code']!=0) {
            $output->writeln($res['msg']);
            return;
        }
        $output->writeln($res['msg']);
        $output->writeln("end.");
    }
}
