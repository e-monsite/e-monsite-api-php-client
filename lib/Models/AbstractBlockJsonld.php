<?php
/**
 * AbstractBlockJsonld
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
 * AbstractBlockJsonld Class Doc Comment
 *
 * @category Class
 * @package  Emonsite
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AbstractBlockJsonld implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AbstractBlock:jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
'id' => 'string',
'type' => 'string',
'lines' => '\Emonsite\Models\BlockLineInterfaceJsonld[]',
'rows' => '\Emonsite\Models\BlockLineInterfaceJsonld[]',
'line' => '\Emonsite\Models\BlockLineInterfaceJsonld[]',
'row' => '\Emonsite\Models\BlockLineInterfaceJsonld[]',
'line_class' => 'string',
'cell_class' => 'string',
'id' => 'string',
'site' => '\Emonsite\Models\SiteJsonld'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
'id' => null,
'type' => null,
'lines' => null,
'rows' => null,
'line' => null,
'row' => null,
'line_class' => null,
'cell_class' => null,
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
        'context' => '@context',
'id' => '@id',
'type' => '@type',
'lines' => 'lines',
'rows' => 'rows',
'line' => 'line',
'row' => 'row',
'line_class' => 'lineClass',
'cell_class' => 'cellClass',
'id' => 'id',
'site' => 'site'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
'id' => 'setId',
'type' => 'setType',
'lines' => 'setLines',
'rows' => 'setRows',
'line' => 'setLine',
'row' => 'setRow',
'line_class' => 'setLineClass',
'cell_class' => 'setCellClass',
'id' => 'setId',
'site' => 'setSite'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
'id' => 'getId',
'type' => 'getType',
'lines' => 'getLines',
'rows' => 'getRows',
'line' => 'getLine',
'row' => 'getRow',
'line_class' => 'getLineClass',
'cell_class' => 'getCellClass',
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
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['row'] = isset($data['row']) ? $data['row'] : null;
        $this->container['line_class'] = isset($data['line_class']) ? $data['line_class'] : null;
        $this->container['cell_class'] = isset($data['cell_class']) ? $data['cell_class'] : null;
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
     * Gets context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param string $context context
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \Emonsite\Models\BlockLineInterfaceJsonld[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \Emonsite\Models\BlockLineInterfaceJsonld[] $lines Faire mapping dans classe parent
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
     * @return \Emonsite\Models\BlockLineInterfaceJsonld[]
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param \Emonsite\Models\BlockLineInterfaceJsonld[] $rows rows
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
     * @return \Emonsite\Models\BlockLineInterfaceJsonld[]
     */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
     * Sets line
     *
     * @param \Emonsite\Models\BlockLineInterfaceJsonld[] $line line
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
     * @return \Emonsite\Models\BlockLineInterfaceJsonld[]
     */
    public function getRow()
    {
        return $this->container['row'];
    }

    /**
     * Sets row
     *
     * @param \Emonsite\Models\BlockLineInterfaceJsonld[] $row row
     *
     * @return $this
     */
    public function setRow($row)
    {
        $this->container['row'] = $row;

        return $this;
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
     * @return \Emonsite\Models\SiteJsonld
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param \Emonsite\Models\SiteJsonld $site site
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
