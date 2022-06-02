<?php
/**
 * Collection
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
 * Collection Class Doc Comment
 *
 * @category Class
 * @package  Emonsite
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Collection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Collection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'empty' => 'bool',
'element' => '',
'keys' => 'int[]',
'values' => 'string[]',
'iterator' => ''    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'empty' => null,
'element' => null,
'keys' => null,
'values' => null,
'iterator' => null    ];

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
        'empty' => 'empty',
'element' => 'element',
'keys' => 'keys',
'values' => 'values',
'iterator' => 'iterator'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'empty' => 'setEmpty',
'element' => 'setElement',
'keys' => 'setKeys',
'values' => 'setValues',
'iterator' => 'setIterator'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'empty' => 'getEmpty',
'element' => 'getElement',
'keys' => 'getKeys',
'values' => 'getValues',
'iterator' => 'getIterator'    ];

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
        $this->container['empty'] = isset($data['empty']) ? $data['empty'] : null;
        $this->container['element'] = isset($data['element']) ? $data['element'] : null;
        $this->container['keys'] = isset($data['keys']) ? $data['keys'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['iterator'] = isset($data['iterator']) ? $data['iterator'] : null;
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
     * Gets empty
     *
     * @return bool
     */
    public function getEmpty()
    {
        return $this->container['empty'];
    }

    /**
     * Sets empty
     *
     * @param bool $empty Checks whether the collection is empty (contains no elements).
     *
     * @return $this
     */
    public function setEmpty($empty)
    {
        $this->container['empty'] = $empty;

        return $this;
    }

    /**
     * Gets element
     *
     * @return 
     */
    public function getElement()
    {
        return $this->container['element'];
    }

    /**
     * Sets element
     *
     * @param  $element Removes the specified element from the collection, if it is found.
     *
     * @return $this
     */
    public function setElement($element)
    {
        $this->container['element'] = $element;

        return $this;
    }

    /**
     * Gets keys
     *
     * @return int[]
     */
    public function getKeys()
    {
        return $this->container['keys'];
    }

    /**
     * Sets keys
     *
     * @param int[] $keys Gets all keys/indices of the collection.
     *
     * @return $this
     */
    public function setKeys($keys)
    {
        $this->container['keys'] = $keys;

        return $this;
    }

    /**
     * Gets values
     *
     * @return string[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param string[] $values Gets all values of the collection.
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets iterator
     *
     * @return 
     */
    public function getIterator()
    {
        return $this->container['iterator'];
    }

    /**
     * Sets iterator
     *
     * @param  $iterator iterator
     *
     * @return $this
     */
    public function setIterator($iterator)
    {
        $this->container['iterator'] = $iterator;

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
