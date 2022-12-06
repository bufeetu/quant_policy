<?php

namespace addons\csmip\controller;

use addons\csmip\library\Csmip;
use think\addons\Controller;
use fast\Random;

//http://127.0.0.1/fastadmin_plugin_csmmeet/public/addons/csmip/index/test2
class Index extends Controller
{

    public function index()
    {
        $this->error("当前插件暂无前台页面");
    }

    public function demo1()
    {
        //IP转省区代码
        $csmip = \addons\csmip\library\Csmip::getInstance();
        $region = $csmip->getRegion("110.110.110.110");

        echo $region->country;//打印国家
        echo $region->region;//打印区域
        echo $region->province;//打印省区
        echo $region->city;//打印城市
    }

    public function demo2()
    {
        $csmip = Csmip::getInstance();
        $region = $csmip->getRegion("114.55.110.90");

        var_dump($region);
    }

    public function demo3()
    {
        $csmip = Csmip::getInstance();
        $ips = ["114.55.110.90", "114.55.110.91"];
        $chart = $csmip->drawchart("访问率", $ips);////中国|0|浙江省|杭州市|阿里云
        var_dump($chart->chartchinaurl);
    }

    public function demo4()
    {
        $csmip = Csmip::getInstance();
        $ips = [];
        for ($i = 0; $i < 1000; $i++) {
            $ips[] = Random::numeric(3) % 254 . '.' . Random::numeric(3) % 254 . '.' . Random::numeric(3) % 254 . '.' . Random::numeric(3) % 254;
        }
        $chartconfig = [];
        $chartconfig['chartchina']['pieces'] = [
            ["gt" => 100, "label" => "> 100 人", "color" => "#7f1100"],
            ["gte" => 10, "lte" => 99, "label" => "10 - 99 人", "color" => "#ff5428"],
            ["gte" => 2, "lte" => 9, "label" => "2 - 9 人", "color" => "#ff8c71"],
            ["gte" => 1, "lte" => 2, "label" => "1 - 2 人", "color" => "#ffd768"],
            ["value" => 0, "label" => "0人", "color" => "#f4f4f4"]
        ];
        $chart = $csmip->drawchart("2020年3月期间访问率", $ips, 'N', $chartconfig);
        var_dump($chart->chartchinaurl);
    }


}
