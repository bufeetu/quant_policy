<?php
/**
 * CompeteAttribution
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
 * CompeteAttribution Class Doc Comment
 *
 * @category Class
 * @description 归因CODE
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompeteAttribution
{
    /**
     * Possible values of this enum
     */
    const ECPM = 'ATTRIBUTE_ECPM';
    const BID = 'ATTRIBUTE_BID';
    const PCTR = 'ATTRIBUTE_PCTR';
    const TARGETING = 'ATTRIBUTE_TARGETING';
    const COLD_START = 'ATTRIBUTE_COLD_START';
    const EXPERIMENT = 'ATTRIBUTE_EXPERIMENT';
    const CAMPAIGN = 'ATTRIBUTE_CAMPAIGN';
    const EXPERIENCE_OTHERS = 'ATTRIBUTE_EXPERIENCE_OTHERS';
    const OTHERS = 'ATTRIBUTE_OTHERS';
    const EXPERIENCE_PRODUCT = 'ATTRIBUTE_EXPERIENCE_PRODUCT';
    const EXPERIENCE_CREATIVE = 'ATTRIBUTE_EXPERIENCE_CREATIVE';
    const LEARNING_FAILED = 'ATTRIBUTE_LEARNING_FAILED';
    const EXPERIENCE_FEEDBACK = 'ATTRIBUTE_EXPERIENCE_FEEDBACK';
    const EXPERIENCE_FRESHNESS = 'ATTRIBUTE_EXPERIENCE_FRESHNESS';
    const BUDGET = 'ATTRIBUTE_BUDGET';
    const INNER_COMPETE = 'ATTRIBUTE_INNER_COMPETE';
    const PCVR = 'ATTRIBUTE_PCVR';
    const OPT_KNOCK_OUT = 'ATTRIBUTE_OPT_KNOCK_OUT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ECPM,
            self::BID,
            self::PCTR,
            self::TARGETING,
            self::COLD_START,
            self::EXPERIMENT,
            self::CAMPAIGN,
            self::EXPERIENCE_OTHERS,
            self::OTHERS,
            self::EXPERIENCE_PRODUCT,
            self::EXPERIENCE_CREATIVE,
            self::LEARNING_FAILED,
            self::EXPERIENCE_FEEDBACK,
            self::EXPERIENCE_FRESHNESS,
            self::BUDGET,
            self::INNER_COMPETE,
            self::PCVR,
            self::OPT_KNOCK_OUT,
        ];
    }
}


