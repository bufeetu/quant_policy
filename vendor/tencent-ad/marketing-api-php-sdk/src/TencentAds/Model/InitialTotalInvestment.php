<?php
/**
 * InitialTotalInvestment
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
 * InitialTotalInvestment Class Doc Comment
 *
 * @category Class
 * @description 首次投资总额
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InitialTotalInvestment
{
    /**
     * Possible values of this enum
     */
    const FREE = 'INITIAL_TOTAL_INVESTMENT_FREE';
    const IN_10_W = 'INITIAL_TOTAL_INVESTMENT_IN_10W';
    const _10_W_TO_30_W = 'INITIAL_TOTAL_INVESTMENT_10W_TO_30W';
    const _30_W_TO_50_W = 'INITIAL_TOTAL_INVESTMENT_30W_TO_50W';
    const _50_W_TO_100_W = 'INITIAL_TOTAL_INVESTMENT_50W_TO_100W';
    const OUT_100_W = 'INITIAL_TOTAL_INVESTMENT_OUT_100W';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FREE,
            self::IN_10_W,
            self::_10_W_TO_30_W,
            self::_30_W_TO_50_W,
            self::_50_W_TO_100_W,
            self::OUT_100_W,
        ];
    }
}


