<?php
/**
 * DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld
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
 * DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld Class Doc Comment
 *
 * @category Class
 * @package  Emonsite
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DirectoryCategory:31fbbfdd88806b77396d71a17314e994:jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
'id' => 'string',
'type' => 'string',
'id' => 'string',
'parent' => 'string',
'children' => 'string[]',
'trad_name' => 'string',
'name' => 'string',
'uri' => 'string',
'ordering' => 'int',
'edito' => 'string',
'h1' => 'string',
'meta_description' => 'string',
'how_to_make_h2' => 'string',
'how_to_make' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
'id' => null,
'type' => null,
'id' => null,
'parent' => 'iri-reference',
'children' => null,
'trad_name' => null,
'name' => null,
'uri' => null,
'ordering' => null,
'edito' => null,
'h1' => null,
'meta_description' => null,
'how_to_make_h2' => null,
'how_to_make' => null    ];

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
'id' => 'id',
'parent' => 'parent',
'children' => 'children',
'trad_name' => 'tradName',
'name' => 'name',
'uri' => 'uri',
'ordering' => 'ordering',
'edito' => 'edito',
'h1' => 'h1',
'meta_description' => 'metaDescription',
'how_to_make_h2' => 'howToMakeH2',
'how_to_make' => 'howToMake'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
'id' => 'setId',
'type' => 'setType',
'id' => 'setId',
'parent' => 'setParent',
'children' => 'setChildren',
'trad_name' => 'setTradName',
'name' => 'setName',
'uri' => 'setUri',
'ordering' => 'setOrdering',
'edito' => 'setEdito',
'h1' => 'setH1',
'meta_description' => 'setMetaDescription',
'how_to_make_h2' => 'setHowToMakeH2',
'how_to_make' => 'setHowToMake'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
'id' => 'getId',
'type' => 'getType',
'id' => 'getId',
'parent' => 'getParent',
'children' => 'getChildren',
'trad_name' => 'getTradName',
'name' => 'getName',
'uri' => 'getUri',
'ordering' => 'getOrdering',
'edito' => 'getEdito',
'h1' => 'getH1',
'meta_description' => 'getMetaDescription',
'how_to_make_h2' => 'getHowToMakeH2',
'how_to_make' => 'getHowToMake'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['trad_name'] = isset($data['trad_name']) ? $data['trad_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['ordering'] = isset($data['ordering']) ? $data['ordering'] : null;
        $this->container['edito'] = isset($data['edito']) ? $data['edito'] : null;
        $this->container['h1'] = isset($data['h1']) ? $data['h1'] : null;
        $this->container['meta_description'] = isset($data['meta_description']) ? $data['meta_description'] : null;
        $this->container['how_to_make_h2'] = isset($data['how_to_make_h2']) ? $data['how_to_make_h2'] : null;
        $this->container['how_to_make'] = isset($data['how_to_make']) ? $data['how_to_make'] : null;
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
     * Gets parent
     *
     * @return string
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param string $parent parent
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets children
     *
     * @return string[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param string[] $children children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets trad_name
     *
     * @return string
     */
    public function getTradName()
    {
        return $this->container['trad_name'];
    }

    /**
     * Sets trad_name
     *
     * @param string $trad_name trad_name
     *
     * @return $this
     */
    public function setTradName($trad_name)
    {
        $this->container['trad_name'] = $trad_name;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string $uri uri
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets ordering
     *
     * @return int
     */
    public function getOrdering()
    {
        return $this->container['ordering'];
    }

    /**
     * Sets ordering
     *
     * @param int $ordering ordering
     *
     * @return $this
     */
    public function setOrdering($ordering)
    {
        $this->container['ordering'] = $ordering;

        return $this;
    }

    /**
     * Gets edito
     *
     * @return string
     */
    public function getEdito()
    {
        return $this->container['edito'];
    }

    /**
     * Sets edito
     *
     * @param string $edito edito
     *
     * @return $this
     */
    public function setEdito($edito)
    {
        $this->container['edito'] = $edito;

        return $this;
    }

    /**
     * Gets h1
     *
     * @return string
     */
    public function getH1()
    {
        return $this->container['h1'];
    }

    /**
     * Sets h1
     *
     * @param string $h1 h1
     *
     * @return $this
     */
    public function setH1($h1)
    {
        $this->container['h1'] = $h1;

        return $this;
    }

    /**
     * Gets meta_description
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->container['meta_description'];
    }

    /**
     * Sets meta_description
     *
     * @param string $meta_description meta_description
     *
     * @return $this
     */
    public function setMetaDescription($meta_description)
    {
        $this->container['meta_description'] = $meta_description;

        return $this;
    }

    /**
     * Gets how_to_make_h2
     *
     * @return string
     */
    public function getHowToMakeH2()
    {
        return $this->container['how_to_make_h2'];
    }

    /**
     * Sets how_to_make_h2
     *
     * @param string $how_to_make_h2 how_to_make_h2
     *
     * @return $this
     */
    public function setHowToMakeH2($how_to_make_h2)
    {
        $this->container['how_to_make_h2'] = $how_to_make_h2;

        return $this;
    }

    /**
     * Gets how_to_make
     *
     * @return string
     */
    public function getHowToMake()
    {
        return $this->container['how_to_make'];
    }

    /**
     * Sets how_to_make
     *
     * @param string $how_to_make how_to_make
     *
     * @return $this
     */
    public function setHowToMake($how_to_make)
    {
        $this->container['how_to_make'] = $how_to_make;

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