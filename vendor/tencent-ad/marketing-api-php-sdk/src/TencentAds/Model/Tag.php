<?php
/**
 * Tag
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
 * Tag Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Tag implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'tag';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tagId' => 'int',
        'parentTagId' => 'int',
        'name' => 'string',
        'description' => 'string',
        'tagCode' => 'string',
        'userCount' => 'int',
        'createdTime' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tagId' => 'int64',
        'parentTagId' => 'int64',
        'name' => null,
        'description' => null,
        'tagCode' => null,
        'userCount' => 'int64',
        'createdTime' => null
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
        'tagId' => 'tag_id',
        'parentTagId' => 'parent_tag_id',
        'name' => 'name',
        'description' => 'description',
        'tagCode' => 'tag_code',
        'userCount' => 'user_count',
        'createdTime' => 'created_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tagId' => 'setTagId',
        'parentTagId' => 'setParentTagId',
        'name' => 'setName',
        'description' => 'setDescription',
        'tagCode' => 'setTagCode',
        'userCount' => 'setUserCount',
        'createdTime' => 'setCreatedTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tagId' => 'getTagId',
        'parentTagId' => 'getParentTagId',
        'name' => 'getName',
        'description' => 'getDescription',
        'tagCode' => 'getTagCode',
        'userCount' => 'getUserCount',
        'createdTime' => 'getCreatedTime'
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
        $this->container['tagId'] = isset($data['tagId']) ? $data['tagId'] : null;
        $this->container['parentTagId'] = isset($data['parentTagId']) ? $data['parentTagId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tagCode'] = isset($data['tagCode']) ? $data['tagCode'] : null;
        $this->container['userCount'] = isset($data['userCount']) ? $data['userCount'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
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
     * Gets tagId
     *
     * @return int|mixed
     */
    public function getTagId()
    {
        return $this->container['tagId'];
    }

    /**
     * Sets tagId
     *
     * @param int|mixed $tagId tagId
     *
     * @return $this
     */
    public function setTagId($tagId)
    {
        $this->container['tagId'] = $tagId;

        return $this;
    }

    /**
     * Gets parentTagId
     *
     * @return int|mixed
     */
    public function getParentTagId()
    {
        return $this->container['parentTagId'];
    }

    /**
     * Sets parentTagId
     *
     * @param int|mixed $parentTagId parentTagId
     *
     * @return $this
     */
    public function setParentTagId($parentTagId)
    {
        $this->container['parentTagId'] = $parentTagId;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|mixed
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|mixed $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|mixed
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|mixed $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets tagCode
     *
     * @return string|mixed
     */
    public function getTagCode()
    {
        return $this->container['tagCode'];
    }

    /**
     * Sets tagCode
     *
     * @param string|mixed $tagCode tagCode
     *
     * @return $this
     */
    public function setTagCode($tagCode)
    {
        $this->container['tagCode'] = $tagCode;

        return $this;
    }

    /**
     * Gets userCount
     *
     * @return int|mixed
     */
    public function getUserCount()
    {
        return $this->container['userCount'];
    }

    /**
     * Sets userCount
     *
     * @param int|mixed $userCount userCount
     *
     * @return $this
     */
    public function setUserCount($userCount)
    {
        $this->container['userCount'] = $userCount;

        return $this;
    }

    /**
     * Gets createdTime
     *
     * @return string|mixed
     */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
     * Sets createdTime
     *
     * @param string|mixed $createdTime createdTime
     *
     * @return $this
     */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;

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


