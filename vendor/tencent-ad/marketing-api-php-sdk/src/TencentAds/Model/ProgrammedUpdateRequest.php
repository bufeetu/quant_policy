<?php
/**
 * ProgrammedUpdateRequest
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
 * ProgrammedUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgrammedUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProgrammedUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'materialDeriveId' => 'int',
        'autoDerivedProgramCreativeSwitch' => 'bool',
        'updateMaterialGroups' => '\TencentAds\Model\MaterialGroupUpdateStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'materialDeriveId' => 'int64',
        'autoDerivedProgramCreativeSwitch' => null,
        'updateMaterialGroups' => null
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
        'materialDeriveId' => 'material_derive_id',
        'autoDerivedProgramCreativeSwitch' => 'auto_derived_program_creative_switch',
        'updateMaterialGroups' => 'update_material_groups'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'materialDeriveId' => 'setMaterialDeriveId',
        'autoDerivedProgramCreativeSwitch' => 'setAutoDerivedProgramCreativeSwitch',
        'updateMaterialGroups' => 'setUpdateMaterialGroups'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'materialDeriveId' => 'getMaterialDeriveId',
        'autoDerivedProgramCreativeSwitch' => 'getAutoDerivedProgramCreativeSwitch',
        'updateMaterialGroups' => 'getUpdateMaterialGroups'
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
        $this->container['materialDeriveId'] = isset($data['materialDeriveId']) ? $data['materialDeriveId'] : null;
        $this->container['autoDerivedProgramCreativeSwitch'] = isset($data['autoDerivedProgramCreativeSwitch']) ? $data['autoDerivedProgramCreativeSwitch'] : null;
        $this->container['updateMaterialGroups'] = isset($data['updateMaterialGroups']) ? $data['updateMaterialGroups'] : null;
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
     * Gets materialDeriveId
     *
     * @return int|mixed
     */
    public function getMaterialDeriveId()
    {
        return $this->container['materialDeriveId'];
    }

    /**
     * Sets materialDeriveId
     *
     * @param int|mixed $materialDeriveId materialDeriveId
     *
     * @return $this
     */
    public function setMaterialDeriveId($materialDeriveId)
    {
        $this->container['materialDeriveId'] = $materialDeriveId;

        return $this;
    }

    /**
     * Gets autoDerivedProgramCreativeSwitch
     *
     * @return bool|mixed
     */
    public function getAutoDerivedProgramCreativeSwitch()
    {
        return $this->container['autoDerivedProgramCreativeSwitch'];
    }

    /**
     * Sets autoDerivedProgramCreativeSwitch
     *
     * @param bool|mixed $autoDerivedProgramCreativeSwitch autoDerivedProgramCreativeSwitch
     *
     * @return $this
     */
    public function setAutoDerivedProgramCreativeSwitch($autoDerivedProgramCreativeSwitch)
    {
        $this->container['autoDerivedProgramCreativeSwitch'] = $autoDerivedProgramCreativeSwitch;

        return $this;
    }

    /**
     * Gets updateMaterialGroups
     *
     * @return \TencentAds\Model\MaterialGroupUpdateStruct[]|mixed
     */
    public function getUpdateMaterialGroups()
    {
        return $this->container['updateMaterialGroups'];
    }

    /**
     * Sets updateMaterialGroups
     *
     * @param \TencentAds\Model\MaterialGroupUpdateStruct[]|mixed $updateMaterialGroups updateMaterialGroups
     *
     * @return $this
     */
    public function setUpdateMaterialGroups($updateMaterialGroups)
    {
        $this->container['updateMaterialGroups'] = $updateMaterialGroups;

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


