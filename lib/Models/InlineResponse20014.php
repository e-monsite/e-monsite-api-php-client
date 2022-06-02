<?php
/**
 * InlineResponse20014
 *
 * PHP version 5
 *
 * @category Class
 * @package  Emonsite
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API E-monsite
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: alpha
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Emonsite\Models;

use \ArrayAccess;
use \Emonsite\ObjectSerializer;

/**
 * InlineResponse20014 Class Doc Comment
 *
 * @category Class
 * @package  Emonsite
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20014 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_14';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'hydramember' => '\Emonsite\Models\EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld[]',
'hydratotal_items' => 'int',
'hydraview' => '\Emonsite\Models\InlineResponse200Hydraview',
'hydrasearch' => '\Emonsite\Models\InlineResponse200Hydrasearch'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'hydramember' => null,
'hydratotal_items' => null,
'hydraview' => null,
'hydrasearch' => null    ];

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
        'hydramember' => 'hydra:member',
'hydratotal_items' => 'hydra:totalItems',
'hydraview' => 'hydra:view',
'hydrasearch' => 'hydra:search'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hydramember' => 'setHydramember',
'hydratotal_items' => 'setHydratotalItems',
'hydraview' => 'setHydraview',
'hydrasearch' => 'setHydrasearch'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hydramember' => 'getHydramember',
'hydratotal_items' => 'getHydratotalItems',
'hydraview' => 'getHydraview',
'hydrasearch' => 'getHydrasearch'    ];

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
        $this->container['hydramember'] = isset($data['hydramember']) ? $data['hydramember'] : null;
        $this->container['hydratotal_items'] = isset($data['hydratotal_items']) ? $data['hydratotal_items'] : null;
        $this->container['hydraview'] = isset($data['hydraview']) ? $data['hydraview'] : null;
        $this->container['hydrasearch'] = isset($data['hydrasearch']) ? $data['hydrasearch'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['hydramember'] === null) {
            $invalidProperties[] = "'hydramember' can't be null";
        }
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
     * Gets hydramember
     *
     * @return \Emonsite\Models\EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld[]
     */
    public function getHydramember()
    {
        return $this->container['hydramember'];
    }

    /**
     * Sets hydramember
     *
     * @param \Emonsite\Models\EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld[] $hydramember hydramember
     *
     * @return $this
     */
    public function setHydramember($hydramember)
    {
        $this->container['hydramember'] = $hydramember;

        return $this;
    }

    /**
     * Gets hydratotal_items
     *
     * @return int
     */
    public function getHydratotalItems()
    {
        return $this->container['hydratotal_items'];
    }

    /**
     * Sets hydratotal_items
     *
     * @param int $hydratotal_items hydratotal_items
     *
     * @return $this
     */
    public function setHydratotalItems($hydratotal_items)
    {
        $this->container['hydratotal_items'] = $hydratotal_items;

        return $this;
    }

    /**
     * Gets hydraview
     *
     * @return \Emonsite\Models\InlineResponse200Hydraview
     */
    public function getHydraview()
    {
        return $this->container['hydraview'];
    }

    /**
     * Sets hydraview
     *
     * @param \Emonsite\Models\InlineResponse200Hydraview $hydraview hydraview
     *
     * @return $this
     */
    public function setHydraview($hydraview)
    {
        $this->container['hydraview'] = $hydraview;

        return $this;
    }

    /**
     * Gets hydrasearch
     *
     * @return \Emonsite\Models\InlineResponse200Hydrasearch
     */
    public function getHydrasearch()
    {
        return $this->container['hydrasearch'];
    }

    /**
     * Sets hydrasearch
     *
     * @param \Emonsite\Models\InlineResponse200Hydrasearch $hydrasearch hydrasearch
     *
     * @return $this
     */
    public function setHydrasearch($hydrasearch)
    {
        $this->container['hydrasearch'] = $hydrasearch;

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
