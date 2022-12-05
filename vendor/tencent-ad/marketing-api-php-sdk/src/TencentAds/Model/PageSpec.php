<?php
/**
 * PageSpec
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
 * PageSpec Class Doc Comment
 *
 * @category Class
 * @description 落地页信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PageSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'page_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pageId' => 'int',
        'pageUrl' => 'string',
        'miniProgramSpec' => '\TencentAds\Model\AdcreativeMiniProgramSpec',
        'miniGameSpec' => '\TencentAds\Model\MiniGameSpec',
        'overrideCanvasHeadOption' => '\TencentAds\Model\OverrideCanvasHeadOption',
        'dynamicProductSpec' => '\TencentAds\Model\DynamicProductSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pageId' => 'int64',
        'pageUrl' => null,
        'miniProgramSpec' => null,
        'miniGameSpec' => null,
        'overrideCanvasHeadOption' => null,
        'dynamicProductSpec' => null
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
        'pageId' => 'page_id',
        'pageUrl' => 'page_url',
        'miniProgramSpec' => 'mini_program_spec',
        'miniGameSpec' => 'mini_game_spec',
        'overrideCanvasHeadOption' => 'override_canvas_head_option',
        'dynamicProductSpec' => 'dynamic_product_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pageId' => 'setPageId',
        'pageUrl' => 'setPageUrl',
        'miniProgramSpec' => 'setMiniProgramSpec',
        'miniGameSpec' => 'setMiniGameSpec',
        'overrideCanvasHeadOption' => 'setOverrideCanvasHeadOption',
        'dynamicProductSpec' => 'setDynamicProductSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pageId' => 'getPageId',
        'pageUrl' => 'getPageUrl',
        'miniProgramSpec' => 'getMiniProgramSpec',
        'miniGameSpec' => 'getMiniGameSpec',
        'overrideCanvasHeadOption' => 'getOverrideCanvasHeadOption',
        'dynamicProductSpec' => 'getDynamicProductSpec'
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
        $this->container['pageId'] = isset($data['pageId']) ? $data['pageId'] : null;
        $this->container['pageUrl'] = isset($data['pageUrl']) ? $data['pageUrl'] : null;
        $this->container['miniProgramSpec'] = isset($data['miniProgramSpec']) ? $data['miniProgramSpec'] : null;
        $this->container['miniGameSpec'] = isset($data['miniGameSpec']) ? $data['miniGameSpec'] : null;
        $this->container['overrideCanvasHeadOption'] = isset($data['overrideCanvasHeadOption']) ? $data['overrideCanvasHeadOption'] : null;
        $this->container['dynamicProductSpec'] = isset($data['dynamicProductSpec']) ? $data['dynamicProductSpec'] : null;
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
     * Gets pageId
     *
     * @return int|mixed
     */
    public function getPageId()
    {
        return $this->container['pageId'];
    }

    /**
     * Sets pageId
     *
     * @param int|mixed $pageId pageId
     *
     * @return $this
     */
    public function setPageId($pageId)
    {
        $this->container['pageId'] = $pageId;

        return $this;
    }

    /**
     * Gets pageUrl
     *
     * @return string|mixed
     */
    public function getPageUrl()
    {
        return $this->container['pageUrl'];
    }

    /**
     * Sets pageUrl
     *
     * @param string|mixed $pageUrl pageUrl
     *
     * @return $this
     */
    public function setPageUrl($pageUrl)
    {
        $this->container['pageUrl'] = $pageUrl;

        return $this;
    }

    /**
     * Gets miniProgramSpec
     *
     * @return \TencentAds\Model\AdcreativeMiniProgramSpec|mixed
     */
    public function getMiniProgramSpec()
    {
        return $this->container['miniProgramSpec'];
    }

    /**
     * Sets miniProgramSpec
     *
     * @param \TencentAds\Model\AdcreativeMiniProgramSpec|mixed $miniProgramSpec miniProgramSpec
     *
     * @return $this
     */
    public function setMiniProgramSpec($miniProgramSpec)
    {
        $this->container['miniProgramSpec'] = $miniProgramSpec;

        return $this;
    }

    /**
     * Gets miniGameSpec
     *
     * @return \TencentAds\Model\MiniGameSpec|mixed
     */
    public function getMiniGameSpec()
    {
        return $this->container['miniGameSpec'];
    }

    /**
     * Sets miniGameSpec
     *
     * @param \TencentAds\Model\MiniGameSpec|mixed $miniGameSpec miniGameSpec
     *
     * @return $this
     */
    public function setMiniGameSpec($miniGameSpec)
    {
        $this->container['miniGameSpec'] = $miniGameSpec;

        return $this;
    }

    /**
     * Gets overrideCanvasHeadOption
     *
     * @return \TencentAds\Model\OverrideCanvasHeadOption|mixed
     */
    public function getOverrideCanvasHeadOption()
    {
        return $this->container['overrideCanvasHeadOption'];
    }

    /**
     * Sets overrideCanvasHeadOption
     *
     * @param \TencentAds\Model\OverrideCanvasHeadOption|mixed $overrideCanvasHeadOption overrideCanvasHeadOption
     *
     * @return $this
     */
    public function setOverrideCanvasHeadOption($overrideCanvasHeadOption)
    {
        $this->container['overrideCanvasHeadOption'] = $overrideCanvasHeadOption;

        return $this;
    }

    /**
     * Gets dynamicProductSpec
     *
     * @return \TencentAds\Model\DynamicProductSpec|mixed
     */
    public function getDynamicProductSpec()
    {
        return $this->container['dynamicProductSpec'];
    }

    /**
     * Sets dynamicProductSpec
     *
     * @param \TencentAds\Model\DynamicProductSpec|mixed $dynamicProductSpec dynamicProductSpec
     *
     * @return $this
     */
    public function setDynamicProductSpec($dynamicProductSpec)
    {
        $this->container['dynamicProductSpec'] = $dynamicProductSpec;

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


