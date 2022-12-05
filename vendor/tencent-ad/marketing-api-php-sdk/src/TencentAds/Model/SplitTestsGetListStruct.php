<?php
/**
 * SplitTestsGetListStruct
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

use \ArrayAccess;
use \TencentAds\ObjectSerializer;

/**
 * SplitTestsGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SplitTestsGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SplitTestsGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'splitTestId' => 'int',
        'splitTestStatus' => '\TencentAds\Model\SplitTestStatus',
        'splitTestName' => 'string',
        'beginTime' => 'int',
        'endTime' => 'int',
        'smartExpandEnabled' => 'bool',
        'adgroupIdList' => 'int[]',
        'recommendedRating' => '\TencentAds\Model\RecommendedRating',
        'recommendedAdgroupIdList' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'splitTestId' => 'int64',
        'splitTestStatus' => null,
        'splitTestName' => null,
        'beginTime' => 'int64',
        'endTime' => 'int64',
        'smartExpandEnabled' => null,
        'adgroupIdList' => 'int64',
        'recommendedRating' => null,
        'recommendedAdgroupIdList' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'accountId' => 'account_id',
        'splitTestId' => 'split_test_id',
        'splitTestStatus' => 'split_test_status',
        'splitTestName' => 'split_test_name',
        'beginTime' => 'begin_time',
        'endTime' => 'end_time',
        'smartExpandEnabled' => 'smart_expand_enabled',
        'adgroupIdList' => 'adgroup_id_list',
        'recommendedRating' => 'recommended_rating',
        'recommendedAdgroupIdList' => 'recommended_adgroup_id_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'splitTestId' => 'setSplitTestId',
        'splitTestStatus' => 'setSplitTestStatus',
        'splitTestName' => 'setSplitTestName',
        'beginTime' => 'setBeginTime',
        'endTime' => 'setEndTime',
        'smartExpandEnabled' => 'setSmartExpandEnabled',
        'adgroupIdList' => 'setAdgroupIdList',
        'recommendedRating' => 'setRecommendedRating',
        'recommendedAdgroupIdList' => 'setRecommendedAdgroupIdList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'splitTestId' => 'getSplitTestId',
        'splitTestStatus' => 'getSplitTestStatus',
        'splitTestName' => 'getSplitTestName',
        'beginTime' => 'getBeginTime',
        'endTime' => 'getEndTime',
        'smartExpandEnabled' => 'getSmartExpandEnabled',
        'adgroupIdList' => 'getAdgroupIdList',
        'recommendedRating' => 'getRecommendedRating',
        'recommendedAdgroupIdList' => 'getRecommendedAdgroupIdList'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['splitTestId'] = isset($data['splitTestId']) ? $data['splitTestId'] : null;
        $this->container['splitTestStatus'] = isset($data['splitTestStatus']) ? $data['splitTestStatus'] : null;
        $this->container['splitTestName'] = isset($data['splitTestName']) ? $data['splitTestName'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['smartExpandEnabled'] = isset($data['smartExpandEnabled']) ? $data['smartExpandEnabled'] : null;
        $this->container['adgroupIdList'] = isset($data['adgroupIdList']) ? $data['adgroupIdList'] : null;
        $this->container['recommendedRating'] = isset($data['recommendedRating']) ? $data['recommendedRating'] : null;
        $this->container['recommendedAdgroupIdList'] = isset($data['recommendedAdgroupIdList']) ? $data['recommendedAdgroupIdList'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets accountId
     *
     * @return int|mixed
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int|mixed $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets splitTestId
     *
     * @return int|mixed
     */
    public function getSplitTestId()
    {
        return $this->container['splitTestId'];
    }

    /**
     * Sets splitTestId
     *
     * @param int|mixed $splitTestId splitTestId
     *
     * @return $this
     */
    public function setSplitTestId($splitTestId)
    {
        $this->container['splitTestId'] = $splitTestId;

        return $this;
    }

    /**
     * Gets splitTestStatus
     *
     * @return \TencentAds\Model\SplitTestStatus|mixed
     */
    public function getSplitTestStatus()
    {
        return $this->container['splitTestStatus'];
    }

    /**
     * Sets splitTestStatus
     *
     * @param \TencentAds\Model\SplitTestStatus|mixed $splitTestStatus splitTestStatus
     *
     * @return $this
     */
    public function setSplitTestStatus($splitTestStatus)
    {
        $this->container['splitTestStatus'] = $splitTestStatus;

        return $this;
    }

    /**
     * Gets splitTestName
     *
     * @return string|mixed
     */
    public function getSplitTestName()
    {
        return $this->container['splitTestName'];
    }

    /**
     * Sets splitTestName
     *
     * @param string|mixed $splitTestName splitTestName
     *
     * @return $this
     */
    public function setSplitTestName($splitTestName)
    {
        $this->container['splitTestName'] = $splitTestName;

        return $this;
    }

    /**
     * Gets beginTime
     *
     * @return int|mixed
     */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
     * Sets beginTime
     *
     * @param int|mixed $beginTime beginTime
     *
     * @return $this
     */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return int|mixed
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param int|mixed $endTime endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets smartExpandEnabled
     *
     * @return bool|mixed
     */
    public function getSmartExpandEnabled()
    {
        return $this->container['smartExpandEnabled'];
    }

    /**
     * Sets smartExpandEnabled
     *
     * @param bool|mixed $smartExpandEnabled smartExpandEnabled
     *
     * @return $this
     */
    public function setSmartExpandEnabled($smartExpandEnabled)
    {
        $this->container['smartExpandEnabled'] = $smartExpandEnabled;

        return $this;
    }

    /**
     * Gets adgroupIdList
     *
     * @return int[]|mixed
     */
    public function getAdgroupIdList()
    {
        return $this->container['adgroupIdList'];
    }

    /**
     * Sets adgroupIdList
     *
     * @param int[]|mixed $adgroupIdList adgroupIdList
     *
     * @return $this
     */
    public function setAdgroupIdList($adgroupIdList)
    {
        $this->container['adgroupIdList'] = $adgroupIdList;

        return $this;
    }

    /**
     * Gets recommendedRating
     *
     * @return \TencentAds\Model\RecommendedRating|mixed
     */
    public function getRecommendedRating()
    {
        return $this->container['recommendedRating'];
    }

    /**
     * Sets recommendedRating
     *
     * @param \TencentAds\Model\RecommendedRating|mixed $recommendedRating recommendedRating
     *
     * @return $this
     */
    public function setRecommendedRating($recommendedRating)
    {
        $this->container['recommendedRating'] = $recommendedRating;

        return $this;
    }

    /**
     * Gets recommendedAdgroupIdList
     *
     * @return int[]|mixed
     */
    public function getRecommendedAdgroupIdList()
    {
        return $this->container['recommendedAdgroupIdList'];
    }

    /**
     * Sets recommendedAdgroupIdList
     *
     * @param int[]|mixed $recommendedAdgroupIdList recommendedAdgroupIdList
     *
     * @return $this
     */
    public function setRecommendedAdgroupIdList($recommendedAdgroupIdList)
    {
        $this->container['recommendedAdgroupIdList'] = $recommendedAdgroupIdList;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


