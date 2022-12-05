<?php
/**
 * CompititionDiagnosisConclusionSpec
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
 * CompititionDiagnosisConclusionSpec Class Doc Comment
 *
 * @category Class
 * @description 竞争表现维度的曝光评估结果
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompititionDiagnosisConclusionSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'compitition_diagnosis_conclusion_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'compititionDiagnosisScore' => 'int',
        'compititionDiagnosisResult' => 'string',
        'bidAmountDiagnosisScore' => 'int',
        'bidAmountDiagnosisConclusion' => 'string',
        'clickDiagnosisScore' => 'int',
        'clickDiagnosisConclusion' => 'string',
        'conversionDiagnosisScore' => 'int',
        'conversionDiagnosisConclusion' => 'string',
        'userAcceptanceDiagnosisScore' => 'int',
        'userAcceptanceDiagnosisConclusion' => 'string',
        'compititionAnalysisDetailSpecList' => '\TencentAds\Model\CompititionAnalysisDetailSpec[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'compititionDiagnosisScore' => 'int64',
        'compititionDiagnosisResult' => null,
        'bidAmountDiagnosisScore' => 'int64',
        'bidAmountDiagnosisConclusion' => null,
        'clickDiagnosisScore' => 'int64',
        'clickDiagnosisConclusion' => null,
        'conversionDiagnosisScore' => 'int64',
        'conversionDiagnosisConclusion' => null,
        'userAcceptanceDiagnosisScore' => 'int64',
        'userAcceptanceDiagnosisConclusion' => null,
        'compititionAnalysisDetailSpecList' => null
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
        'compititionDiagnosisScore' => 'compitition_diagnosis_score',
        'compititionDiagnosisResult' => 'compitition_diagnosis_result',
        'bidAmountDiagnosisScore' => 'bid_amount_diagnosis_score',
        'bidAmountDiagnosisConclusion' => 'bid_amount_diagnosis_conclusion',
        'clickDiagnosisScore' => 'click_diagnosis_score',
        'clickDiagnosisConclusion' => 'click_diagnosis_conclusion',
        'conversionDiagnosisScore' => 'conversion_diagnosis_score',
        'conversionDiagnosisConclusion' => 'conversion_diagnosis_conclusion',
        'userAcceptanceDiagnosisScore' => 'user_acceptance_diagnosis_score',
        'userAcceptanceDiagnosisConclusion' => 'user_acceptance_diagnosis_conclusion',
        'compititionAnalysisDetailSpecList' => 'compitition_analysis_detail_spec_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'compititionDiagnosisScore' => 'setCompititionDiagnosisScore',
        'compititionDiagnosisResult' => 'setCompititionDiagnosisResult',
        'bidAmountDiagnosisScore' => 'setBidAmountDiagnosisScore',
        'bidAmountDiagnosisConclusion' => 'setBidAmountDiagnosisConclusion',
        'clickDiagnosisScore' => 'setClickDiagnosisScore',
        'clickDiagnosisConclusion' => 'setClickDiagnosisConclusion',
        'conversionDiagnosisScore' => 'setConversionDiagnosisScore',
        'conversionDiagnosisConclusion' => 'setConversionDiagnosisConclusion',
        'userAcceptanceDiagnosisScore' => 'setUserAcceptanceDiagnosisScore',
        'userAcceptanceDiagnosisConclusion' => 'setUserAcceptanceDiagnosisConclusion',
        'compititionAnalysisDetailSpecList' => 'setCompititionAnalysisDetailSpecList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'compititionDiagnosisScore' => 'getCompititionDiagnosisScore',
        'compititionDiagnosisResult' => 'getCompititionDiagnosisResult',
        'bidAmountDiagnosisScore' => 'getBidAmountDiagnosisScore',
        'bidAmountDiagnosisConclusion' => 'getBidAmountDiagnosisConclusion',
        'clickDiagnosisScore' => 'getClickDiagnosisScore',
        'clickDiagnosisConclusion' => 'getClickDiagnosisConclusion',
        'conversionDiagnosisScore' => 'getConversionDiagnosisScore',
        'conversionDiagnosisConclusion' => 'getConversionDiagnosisConclusion',
        'userAcceptanceDiagnosisScore' => 'getUserAcceptanceDiagnosisScore',
        'userAcceptanceDiagnosisConclusion' => 'getUserAcceptanceDiagnosisConclusion',
        'compititionAnalysisDetailSpecList' => 'getCompititionAnalysisDetailSpecList'
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
        $this->container['compititionDiagnosisScore'] = isset($data['compititionDiagnosisScore']) ? $data['compititionDiagnosisScore'] : null;
        $this->container['compititionDiagnosisResult'] = isset($data['compititionDiagnosisResult']) ? $data['compititionDiagnosisResult'] : null;
        $this->container['bidAmountDiagnosisScore'] = isset($data['bidAmountDiagnosisScore']) ? $data['bidAmountDiagnosisScore'] : null;
        $this->container['bidAmountDiagnosisConclusion'] = isset($data['bidAmountDiagnosisConclusion']) ? $data['bidAmountDiagnosisConclusion'] : null;
        $this->container['clickDiagnosisScore'] = isset($data['clickDiagnosisScore']) ? $data['clickDiagnosisScore'] : null;
        $this->container['clickDiagnosisConclusion'] = isset($data['clickDiagnosisConclusion']) ? $data['clickDiagnosisConclusion'] : null;
        $this->container['conversionDiagnosisScore'] = isset($data['conversionDiagnosisScore']) ? $data['conversionDiagnosisScore'] : null;
        $this->container['conversionDiagnosisConclusion'] = isset($data['conversionDiagnosisConclusion']) ? $data['conversionDiagnosisConclusion'] : null;
        $this->container['userAcceptanceDiagnosisScore'] = isset($data['userAcceptanceDiagnosisScore']) ? $data['userAcceptanceDiagnosisScore'] : null;
        $this->container['userAcceptanceDiagnosisConclusion'] = isset($data['userAcceptanceDiagnosisConclusion']) ? $data['userAcceptanceDiagnosisConclusion'] : null;
        $this->container['compititionAnalysisDetailSpecList'] = isset($data['compititionAnalysisDetailSpecList']) ? $data['compititionAnalysisDetailSpecList'] : null;
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
     * Gets compititionDiagnosisScore
     *
     * @return int|mixed
     */
    public function getCompititionDiagnosisScore()
    {
        return $this->container['compititionDiagnosisScore'];
    }

    /**
     * Sets compititionDiagnosisScore
     *
     * @param int|mixed $compititionDiagnosisScore compititionDiagnosisScore
     *
     * @return $this
     */
    public function setCompititionDiagnosisScore($compititionDiagnosisScore)
    {
        $this->container['compititionDiagnosisScore'] = $compititionDiagnosisScore;

        return $this;
    }

    /**
     * Gets compititionDiagnosisResult
     *
     * @return string|mixed
     */
    public function getCompititionDiagnosisResult()
    {
        return $this->container['compititionDiagnosisResult'];
    }

    /**
     * Sets compititionDiagnosisResult
     *
     * @param string|mixed $compititionDiagnosisResult compititionDiagnosisResult
     *
     * @return $this
     */
    public function setCompititionDiagnosisResult($compititionDiagnosisResult)
    {
        $this->container['compititionDiagnosisResult'] = $compititionDiagnosisResult;

        return $this;
    }

    /**
     * Gets bidAmountDiagnosisScore
     *
     * @return int|mixed
     */
    public function getBidAmountDiagnosisScore()
    {
        return $this->container['bidAmountDiagnosisScore'];
    }

    /**
     * Sets bidAmountDiagnosisScore
     *
     * @param int|mixed $bidAmountDiagnosisScore bidAmountDiagnosisScore
     *
     * @return $this
     */
    public function setBidAmountDiagnosisScore($bidAmountDiagnosisScore)
    {
        $this->container['bidAmountDiagnosisScore'] = $bidAmountDiagnosisScore;

        return $this;
    }

    /**
     * Gets bidAmountDiagnosisConclusion
     *
     * @return string|mixed
     */
    public function getBidAmountDiagnosisConclusion()
    {
        return $this->container['bidAmountDiagnosisConclusion'];
    }

    /**
     * Sets bidAmountDiagnosisConclusion
     *
     * @param string|mixed $bidAmountDiagnosisConclusion bidAmountDiagnosisConclusion
     *
     * @return $this
     */
    public function setBidAmountDiagnosisConclusion($bidAmountDiagnosisConclusion)
    {
        $this->container['bidAmountDiagnosisConclusion'] = $bidAmountDiagnosisConclusion;

        return $this;
    }

    /**
     * Gets clickDiagnosisScore
     *
     * @return int|mixed
     */
    public function getClickDiagnosisScore()
    {
        return $this->container['clickDiagnosisScore'];
    }

    /**
     * Sets clickDiagnosisScore
     *
     * @param int|mixed $clickDiagnosisScore clickDiagnosisScore
     *
     * @return $this
     */
    public function setClickDiagnosisScore($clickDiagnosisScore)
    {
        $this->container['clickDiagnosisScore'] = $clickDiagnosisScore;

        return $this;
    }

    /**
     * Gets clickDiagnosisConclusion
     *
     * @return string|mixed
     */
    public function getClickDiagnosisConclusion()
    {
        return $this->container['clickDiagnosisConclusion'];
    }

    /**
     * Sets clickDiagnosisConclusion
     *
     * @param string|mixed $clickDiagnosisConclusion clickDiagnosisConclusion
     *
     * @return $this
     */
    public function setClickDiagnosisConclusion($clickDiagnosisConclusion)
    {
        $this->container['clickDiagnosisConclusion'] = $clickDiagnosisConclusion;

        return $this;
    }

    /**
     * Gets conversionDiagnosisScore
     *
     * @return int|mixed
     */
    public function getConversionDiagnosisScore()
    {
        return $this->container['conversionDiagnosisScore'];
    }

    /**
     * Sets conversionDiagnosisScore
     *
     * @param int|mixed $conversionDiagnosisScore conversionDiagnosisScore
     *
     * @return $this
     */
    public function setConversionDiagnosisScore($conversionDiagnosisScore)
    {
        $this->container['conversionDiagnosisScore'] = $conversionDiagnosisScore;

        return $this;
    }

    /**
     * Gets conversionDiagnosisConclusion
     *
     * @return string|mixed
     */
    public function getConversionDiagnosisConclusion()
    {
        return $this->container['conversionDiagnosisConclusion'];
    }

    /**
     * Sets conversionDiagnosisConclusion
     *
     * @param string|mixed $conversionDiagnosisConclusion conversionDiagnosisConclusion
     *
     * @return $this
     */
    public function setConversionDiagnosisConclusion($conversionDiagnosisConclusion)
    {
        $this->container['conversionDiagnosisConclusion'] = $conversionDiagnosisConclusion;

        return $this;
    }

    /**
     * Gets userAcceptanceDiagnosisScore
     *
     * @return int|mixed
     */
    public function getUserAcceptanceDiagnosisScore()
    {
        return $this->container['userAcceptanceDiagnosisScore'];
    }

    /**
     * Sets userAcceptanceDiagnosisScore
     *
     * @param int|mixed $userAcceptanceDiagnosisScore userAcceptanceDiagnosisScore
     *
     * @return $this
     */
    public function setUserAcceptanceDiagnosisScore($userAcceptanceDiagnosisScore)
    {
        $this->container['userAcceptanceDiagnosisScore'] = $userAcceptanceDiagnosisScore;

        return $this;
    }

    /**
     * Gets userAcceptanceDiagnosisConclusion
     *
     * @return string|mixed
     */
    public function getUserAcceptanceDiagnosisConclusion()
    {
        return $this->container['userAcceptanceDiagnosisConclusion'];
    }

    /**
     * Sets userAcceptanceDiagnosisConclusion
     *
     * @param string|mixed $userAcceptanceDiagnosisConclusion userAcceptanceDiagnosisConclusion
     *
     * @return $this
     */
    public function setUserAcceptanceDiagnosisConclusion($userAcceptanceDiagnosisConclusion)
    {
        $this->container['userAcceptanceDiagnosisConclusion'] = $userAcceptanceDiagnosisConclusion;

        return $this;
    }

    /**
     * Gets compititionAnalysisDetailSpecList
     *
     * @return \TencentAds\Model\CompititionAnalysisDetailSpec[]|mixed
     */
    public function getCompititionAnalysisDetailSpecList()
    {
        return $this->container['compititionAnalysisDetailSpecList'];
    }

    /**
     * Sets compititionAnalysisDetailSpecList
     *
     * @param \TencentAds\Model\CompititionAnalysisDetailSpec[]|mixed $compititionAnalysisDetailSpecList compititionAnalysisDetailSpecList
     *
     * @return $this
     */
    public function setCompititionAnalysisDetailSpecList($compititionAnalysisDetailSpecList)
    {
        $this->container['compititionAnalysisDetailSpecList'] = $compititionAnalysisDetailSpecList;

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


