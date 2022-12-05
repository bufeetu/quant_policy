<?php
/**
 * HeadClickType
 *
 * PHP version 5
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * Marketing API
 *
 * OpenAPI spec version: 1.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TencentAds\Model;
use \TencentAds\ObjectSerializer;

/**
 * HeadClickType Class Doc Comment
 *
 * @category Class
 * @description 头像点击跳转信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HeadClickType
{
    /**
     * Possible values of this enum
     */
    const _DEFAULT = 'HEAD_CLICK_TYPE_DEFAULT';
    const CUSTOMIZED = 'HEAD_CLICK_TYPE_CUSTOMIZED';
    const CELEBRITY_ACCOUNT = 'HEAD_CLICK_TYPE_CELEBRITY_ACCOUNT';
    const VIRTUAL_ACCOUNT = 'HEAD_CLICK_TYPE_VIRTUAL_ACCOUNT';
    const LIVE_PROFILE = 'HEAD_CLICK_TYPE_LIVE_PROFILE';
    const LIVE_EVENT = 'HEAD_CLICK_TYPE_LIVE_EVENT';
    const BRAND_PROGRAM = 'HEAD_CLICK_TYPE_BRAND_PROGRAM';
    const CNY_PROFILE = 'HEAD_CLICK_TYPE_CNY_PROFILE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::CUSTOMIZED,
            self::CELEBRITY_ACCOUNT,
            self::VIRTUAL_ACCOUNT,
            self::LIVE_PROFILE,
            self::LIVE_EVENT,
            self::BRAND_PROGRAM,
            self::CNY_PROFILE,
        ];
    }
}


