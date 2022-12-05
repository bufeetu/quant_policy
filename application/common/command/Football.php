<?php

namespace app\common\command;

use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\console\input\Option;
use think\Cache;
use think\Log;

/**
 php think football
 *
 */
class Football extends Command
{
    protected function configure()
    {
        $this->setName('football')
        ->addArgument('max_num')
        ->addArgument('rate_aim');
    }
    public function alert_info($code=0, $msg='success', $data=[])
    {
        return [
            'code'=>$code,
            'msg'=>$msg,
            'data'=>$data,
        ];
    }

    public function printlog($val, Output $output)
    {
        Log::write($val);
        $output->writeln($val);
    }
    /**
     * Undocumented function
     * @param [type] $arr_money 投资列表
     * @param [type] $arr_profit 赔率列表
     * @return void
     * @date: 2022/11/24  02:51
     */
    public function checkpolicy($arr_money, $arr_profit,$rate_aim)
    {
        //总投入金额
        $sum_arr_money=array_sum($arr_money);
        //总盈利
        $sum_money_win=0;
        //总损失
        $sum_money_lost=0;
        //损失记录
        $dict_lost=[];
        $num_dict_lost=0;
        //盈利比率列表
        $arr_rate_win_aver=[];
        for ($i=0; $i < 9; $i++) {
            $single_sum=$arr_money[$i]*$arr_profit[$i];
            $temp_rate_win=round($single_sum/$sum_arr_money-1,2);
            if ($temp_rate_win<$rate_aim) {
                $num_dict_lost+=1;
                if ($num_dict_lost>1) {
                    unset($dict_lost);
                    return $this->alert_info(1, 'err',[
                        'arr_money'=>$arr_money,
                        'num_dict_lost'=>$num_dict_lost,
                    ]);
                }else{
                    $dict_lost[]=[$arr_money[$i],$arr_profit[$i]];
                    $sum_money_lost+=abs($single_sum);
                }
            } else {
                $sum_money_win+=abs($single_sum);
            }
            $arr_rate_win_aver[]=$temp_rate_win;
        }
        sort($arr_rate_win_aver);
        //胜率
        $rate_win=round((9-$num_dict_lost)/9, 2);
        //平均单次盈利
        $aver_win=round($sum_money_win/(9-$num_dict_lost), 2);
        //平均单次亏损
        $aver_lost=round($sum_money_lost/$num_dict_lost, 2);
        //盈亏比
        $rate_win_lost=round($aver_win/$aver_lost, 2);
        //期望
        $qiwang=$rate_win/(1-$rate_win)*$rate_win_lost;

        $data=[
            //总投入金额
            'sum_arr_money'=>$sum_arr_money,
            //亏损组合
            'dict_lost'=>$dict_lost,
            //胜率
            'rate_win'=>$rate_win,
            // 'aver_win'=>$aver_win,
            // 'aver_lost'=>$aver_lost,
            //盈亏比
            'rate_win_lost'=>$rate_win_lost,
            //单笔盈利率目标
            'rate_aim'=>$rate_aim,
            //赔率组合
            'arr_profit'=>$arr_profit,
            //投资组合
            'arr_money'=>$arr_money,
            //单笔盈利率列表
            'arr_rate_win_aver'=>$arr_rate_win_aver,
            'arr_rate_win_each_eight'=>[
                //八种情况最小值
                'min'=>$arr_rate_win_aver[1],
                //八种情况中位数
                'mid'=>round(($arr_rate_win_aver[4]+$arr_rate_win_aver[5])/2,2),
                //八种情况平均值
                'aver'=>round((array_sum($arr_rate_win_aver)-$arr_rate_win_aver[0])/8,2),
            ],
            //期望
            'qiwang'=>round($qiwang, 2),
        ];
        return $this->alert_info(0, 'ok',$data);
    }

    protected function execute(Input $input, Output $output)
    {
        Log::clear();
        //最大尝试金额数值
        $max_num=$input->getArgument('max_num');
        if (empty($max_num)) {
             $this->printlog('need max_num', $output);
            exit;
        }

        $rate_aim=$input->getArgument('rate_aim');
        if (empty($rate_aim)) {
            $this->printlog('need rate_aim', $output);
            exit;
        }

        //赔率列表英格兰美国
        $arr_profit=[2.05,19,36,3.95,5.45,14,24,19,12];

$arr_profit=[1.95,20,50,3.85,5.85,14,25,20,12.5];//日本哥斯达


        $select_money=[];
        for ($i=1; $i <= $max_num; $i++) {
            $select_money[]=$i;
        }
        foreach ($select_money as $a1) {
            foreach ($select_money as $a2) {
                foreach ($select_money as $a3) {
                    foreach ($select_money as $a4) {
                        foreach ($select_money as $a5) {
                            foreach ($select_money as $a6) {
                                foreach ($select_money as $a7) {
                                    foreach ($select_money as $a8) {
                                        foreach ($select_money as $a9) {
                                            //投资列表
                                            $arr_money=[
                                                $a1,
                                                $a2,
                                                $a3,
                                                $a4,
                                                $a5,
                                                $a6,
                                                $a7,
                                                $a8,
                                                $a9,
                                            ];
                                            $res_data=$this->checkpolicy($arr_money, $arr_profit,$rate_aim);
                                            if ($res_data['code']!=0) {
                                                continue;
                                            }
                                            $this->printlog(json_encode($res_data['data'], 512), $output);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        $this->printlog('备选金额列表select_money', $output);
        $this->printlog($select_money, $output);
        $this->printlog("run end.", $output);
    }
}
