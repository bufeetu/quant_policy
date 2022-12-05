<?php
namespace addons\csmip\library;

class Csmip
{
    private $ip2regionObj = null;
    
    private static $_instance = null;
    private function __construct(){
        $dbFile = dirname(__FILE__) . "/ip2region.db";
        $this->ip2regionObj = new Ip2Region($dbFile);
    }
    public static function getInstance(){
        if (!(self::$_instance instanceof Csmip)){
            self::$_instance = new Csmip();
        }
        return self::$_instance;
    }
 
    /**
     * IP转成成地址
     * @param $ip
     * @return \addons\csmip\library\RegionModel
     */
    public function getRegion($ip)
    {    
        $vv = $this->ip2regionObj->btreeSearch($ip);
        if ($vv == null || $vv['region'] == null || $vv['region'] == "") {
            return null;
        }
        list ($country, $region, $province, $city, $isp) = explode("|", $vv['region']);
        $country = ($country!="0")?$country:"其他";
        $region = ($region!="0")?$region:"其他";
        $province = ($province!="0")?$province:"其他";
        $city = ($city!="0")?$city:"其他";
        $isp = ($isp!="0")?$isp:"其他";
        
        
        $mm = new RegionModel();
        $mm->ip = $ip;
        $mm->country = $country;
        $mm->region = $region;
        $mm->province = $province;
        $mm->city = $city;
        $mm->isp = $isp;
        $mm->ipregcityid = $vv['city_id'];
        $mm->ipregregion = $vv['region'];
        
        //v1.0.2 如果是国内，查找对应的省区@2021/1/17 chensm
        if($mm->country=="中国"){
            $dao = new \app\admin\model\csmip\Chartbind();
            $chartbird = $dao->where('ip2regionkey','=',$mm->province)->find();
            if($chartbird){
                $mm->region = $chartbird->b1;
            }
        }
        
        return $mm;
    }
    
    /**
            *  生成图统计分布画
     * @param $ips
     */
    public static function drawchart($name,$ips,$needuserlogin='Y',$chartconfig=[])
    {
        Csmip::_defaultChartconfig($chartconfig);
        
        $csmip = Csmip::getInstance();
        $dao = new \app\admin\model\csmip\Data();
        $daoline = new \app\admin\model\csmip\Dataline();
        $params = [
            "name"=>$name,
            "needuserlogin"=>$needuserlogin,
            "chartconfig"=>json_encode($chartconfig),
            "status"=>'normal',
            'createtime'=>time()
        ];
        $dao->create($params);
        $dataid = $dao->getLastInsID();
        
        foreach($ips as  $ip){            
            $rr = $csmip->getRegion($ip);
            $params = [
                'csmip_data_id'=>$dataid,
                'ip'=>$ip,
                'country'=>$rr->country,
                "region" => $rr->region,
                "province" => $rr->province,
                "city" => $rr->city,
                "isp" => $rr->isp,
                "ipregcityid" => $rr->ipregcityid,
                "ipregregion" => $rr->ipregregion
            ];
            $daoline->create($params);
        }
        $charturl = Csmip::_getChartUrl($dataid);
        return $charturl;
        
    }
    
    
    private static function _defaultChartconfig(&$chartconfig){
        if(!array_key_exists('chartchina', $chartconfig)){
            $chartconfig['chartchina'] = [];
        }
        if(!array_key_exists('pieces', $chartconfig['chartchina'])){
            $chartconfig['chartchina']['pieces'] = [
                ["gt"=>1000,"label"=>"> 1000 人","color"=>"#7f1100"],
                ["gte"=>100,"lte"=>1000,"label"=>"100 - 1000 人","color"=>"#ff5428"],
                ["gte"=>10,"lte"=>99,"label"=>"10 - 99 人","color"=>"#ff8c71"],
                ["gte"=>1,"lte"=>9,"label"=>"1 - 9 人","color"=>"#ffd768"],
                ["value"=>0,"label"=>"0人","color"=>"#f4f4f4"]
            ];
        }
    }
    
    /**
            *   获取图表的地址信息
     * @param $id
     * @return \addons\csmip\library\Chart
     */
    public static function _getChartUrl($id){
        $baseurl = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . config('view_replace_str.__PUBLIC__');
        $chart = new Chart();
        $chart->chartchinaurl = $baseurl."index/csmip.chartchina/index?id=".$id;
        return $chart;
    }
}

//图标的地址信息
class Chart{
    var $chartchinaurl;
}

//IP信息
class RegionModel{
    var $ip;
    var $country;
    var $region;
    var $province;
    var $city;
    var $isp;
    var $ipregcityid;
    var $ipregregion;
}