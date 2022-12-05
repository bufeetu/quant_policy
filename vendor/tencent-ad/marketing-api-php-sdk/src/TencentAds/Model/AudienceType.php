<?php
/**
 * AudienceType
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
 * AudienceType Class Doc Comment
 *
 * @category Class
 * @description 人群类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AudienceType
{
    /**
     * Possible values of this enum
     */
    const AUDIENCE_TYPE_UNKNOWN = 'AUDIENCE_TYPE_UNKNOWN';
    const AUDIENCE_TYPE_META = 'AUDIENCE_TYPE_META';
    const AUDIENCE_TYPE_COMBINE = 'AUDIENCE_TYPE_COMBINE';
    const AUDIENCE_TYPE_LOOKALIKE = 'AUDIENCE_TYPE_LOOKALIKE';
    const AUDIENCE_TYPE_PACKAGE = 'AUDIENCE_TYPE_PACKAGE';
    const CUSTOMER_FILE = 'CUSTOMER_FILE';
    const LOOKALIKE = 'LOOKALIKE';
    const USER_ACTION = 'USER_ACTION';
    const LBS = 'LBS';
    const KEYWORD = 'KEYWORD';
    const AD = 'AD';
    const COMBINE = 'COMBINE';
    const LABEL = 'LABEL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUDIENCE_TYPE_UNKNOWN,
            self::AUDIENCE_TYPE_META,
            self::AUDIENCE_TYPE_COMBINE,
            self::AUDIENCE_TYPE_LOOKALIKE,
            self::AUDIENCE_TYPE_PACKAGE,
            self::CUSTOMER_FILE,
            self::LOOKALIKE,
            self::USER_ACTION,
            self::LBS,
            self::KEYWORD,
            self::AD,
            self::COMBINE,
            self::LABEL,
        ];
    }
}


