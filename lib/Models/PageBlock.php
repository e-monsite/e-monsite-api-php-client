<?php
/**
 * PageBlock
 *
 * PHP version 5
 *
 * @category Class
 * @package  EmonsiteApi
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

namespace EmonsiteApi\Models;

use \ArrayAccess;
use \EmonsiteApi\ObjectSerializer;

/**
 * PageBlock Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PageBlock implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PageBlock';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'line_class' => 'string',
'cell_class' => 'string',
'lines' => '\EmonsiteApi\Models\BlockPageLine[]',
'rows' => '\EmonsiteApi\Models\BlockLineInterface[]',
'line' => '\EmonsiteApi\Models\BlockLineInterface[]',
'row' => '\EmonsiteApi\Models\BlockLineInterface[]',
'id' => 'string',
'site' => '\EmonsiteApi\Models\Site'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'line_class' => null,
'cell_class' => null,
'lines' => null,
'rows' => null,
'line' => null,
'row' => null,
'id' => null,
'site' => null    ];

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
        'line_class' => 'lineClass',
'cell_class' => 'cellClass',
'lines' => 'lines',
'rows' => 'rows',
'line' => 'line',
'row' => 'row',
'id' => 'id',
'site' => 'site'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_class' => 'setLineClass',
'cell_class' => 'setCellClass',
'lines' => 'setLines',
'rows' => 'setRows',
'line' => 'setLine',
'row' => 'setRow',
'id' => 'setId',
'site' => 'setSite'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_class' => 'getLineClass',
'cell_class' => 'getCellClass',
'lines' => 'getLines',
'rows' => 'getRows',
'line' => 'getLine',
'row' => 'getRow',
'id' => 'getId',
'site' => 'getSite'    ];

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
        $this->container['line_class'] = isset($data['line_class']) ? $data['line_class'] : null;
        $this->container['cell_class'] = isset($data['cell_class']) ? $data['cell_class'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['row'] = isset($data['row']) ? $data['row'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['site'] = isset($data['site']) ? $data['site'] : null;
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
     * Gets line_class
     *
     * @return string
     */
    public function getLineClass()
    {
        return $this->container['line_class'];
    }

    /**
     * Sets line_class
     *
     * @param string $line_class line_class
     *
     * @return $this
     */
    public function setLineClass($line_class)
    {
        $this->container['line_class'] = $line_class;

        return $this;
    }

    /**
     * Gets cell_class
     *
     * @return string
     */
    public function getCellClass()
    {
        return $this->container['cell_class'];
    }

    /**
     * Sets cell_class
     *
     * @param string $cell_class cell_class
     *
     * @return $this
     */
    public function setCellClass($cell_class)
    {
        $this->container['cell_class'] = $cell_class;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \EmonsiteApi\Models\BlockPageLine[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \EmonsiteApi\Models\BlockPageLine[] $lines lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets rows
     *
     * @return \EmonsiteApi\Models\BlockLineInterface[]
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param \EmonsiteApi\Models\BlockLineInterface[] $rows rows
     *
     * @return $this
     */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;

        return $this;
    }

    /**
     * Gets line
     *
     * @return \EmonsiteApi\Models\BlockLineInterface[]
     */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
     * Sets line
     *
     * @param \EmonsiteApi\Models\BlockLineInterface[] $line line
     *
     * @return $this
     */
    public function setLine($line)
    {
        $this->container['line'] = $line;

        return $this;
    }

    /**
     * Gets row
     *
     * @return \EmonsiteApi\Models\BlockLineInterface[]
     */
    public function getRow()
    {
        return $this->container['row'];
    }

    /**
     * Sets row
     *
     * @param \EmonsiteApi\Models\BlockLineInterface[] $row row
     *
     * @return $this
     */
    public function setRow($row)
    {
        $this->container['row'] = $row;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets site
     *
     * @return \EmonsiteApi\Models\Site
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param \EmonsiteApi\Models\Site $site site
     *
     * @return $this
     */
    public function setSite($site)
    {
        $this->container['site'] = $site;

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
