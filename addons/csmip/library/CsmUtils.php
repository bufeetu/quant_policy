<?php
// +----------------------------------------------------------------------
// Csmmeet [ CSM系列公共源码 ]
// Author: chensm <chenshiming0802@163.com>
// Create by chensm at 2020-02-26
// +----------------------------------------------------------------------
namespace addons\csmip\library;

class CsmUtils 
{
    public static function isNullOrBlank($str){
        if($str==null || $str==""){
            return true;
        }else{
            return false;
        }
    }
}