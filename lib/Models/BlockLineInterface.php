<?php
/**
 * BlockLineInterface
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
 * BlockLineInterface Class Doc Comment
 *
 * @category Class
 * @package  Emonsite
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BlockLineInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BlockLineInterface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'css_class' => 'string',
'css_id' => 'string',
'css_style' => 'string',
'height' => 'int',
'position' => 'int',
'pagination' => 'bool',
'options' => 'string[]',
'block' => '\Emonsite\Models\AbstractBlock',
'cells' => '\Emonsite\Models\BlockCellInterface[]',
'cell' => '\Emonsite\Models\BlockCellInterface[]',
'version' => '\Emonsite\Models\VersionInterface[]',
'versions' => '\Emonsite\Models\VersionInterface[]',
'default_lang' => 'string',
'version_by_lang' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'css_class' => null,
'css_id' => null,
'css_style' => null,
'height' => null,
'position' => null,
'pagination' => null,
'options' => null,
'block' => null,
'cells' => null,
'cell' => null,
'version' => null,
'versions' => null,
'default_lang' => null,
'version_by_lang' => null    ];

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
        'id' => 'id',
'css_class' => 'cssClass',
'css_id' => 'cssId',
'css_style' => 'cssStyle',
'height' => 'height',
'position' => 'position',
'pagination' => 'pagination',
'options' => 'options',
'block' => 'block',
'cells' => 'cells',
'cell' => 'cell',
'version' => 'version',
'versions' => 'versions',
'default_lang' => 'defaultLang',
'version_by_lang' => 'versionByLang'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'css_class' => 'setCssClass',
'css_id' => 'setCssId',
'css_style' => 'setCssStyle',
'height' => 'setHeight',
'position' => 'setPosition',
'pagination' => 'setPagination',
'options' => 'setOptions',
'block' => 'setBlock',
'cells' => 'setCells',
'cell' => 'setCell',
'version' => 'setVersion',
'versions' => 'setVersions',
'default_lang' => 'setDefaultLang',
'version_by_lang' => 'setVersionByLang'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'css_class' => 'getCssClass',
'css_id' => 'getCssId',
'css_style' => 'getCssStyle',
'height' => 'getHeight',
'position' => 'getPosition',
'pagination' => 'getPagination',
'options' => 'getOptions',
'block' => 'getBlock',
'cells' => 'getCells',
'cell' => 'getCell',
'version' => 'getVersion',
'versions' => 'getVersions',
'default_lang' => 'getDefaultLang',
'version_by_lang' => 'getVersionByLang'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['css_class'] = isset($data['css_class']) ? $data['css_class'] : null;
        $this->container['css_id'] = isset($data['css_id']) ? $data['css_id'] : null;
        $this->container['css_style'] = isset($data['css_style']) ? $data['css_style'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['pagination'] = isset($data['pagination']) ? $data['pagination'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['block'] = isset($data['block']) ? $data['block'] : null;
        $this->container['cells'] = isset($data['cells']) ? $data['cells'] : null;
        $this->container['cell'] = isset($data['cell']) ? $data['cell'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
        $this->container['default_lang'] = isset($data['default_lang']) ? $data['default_lang'] : null;
        $this->container['version_by_lang'] = isset($data['version_by_lang']) ? $data['version_by_lang'] : null;
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
     * Gets css_class
     *
     * @return string
     */
    public function getCssClass()
    {
        return $this->container['css_class'];
    }

    /**
     * Sets css_class
     *
     * @param string $css_class css_class
     *
     * @return $this
     */
    public function setCssClass($css_class)
    {
        $this->container['css_class'] = $css_class;

        return $this;
    }

    /**
     * Gets css_id
     *
     * @return string
     */
    public function getCssId()
    {
        return $this->container['css_id'];
    }

    /**
     * Sets css_id
     *
     * @param string $css_id css_id
     *
     * @return $this
     */
    public function setCssId($css_id)
    {
        $this->container['css_id'] = $css_id;

        return $this;
    }

    /**
     * Gets css_style
     *
     * @return string
     */
    public function getCssStyle()
    {
        return $this->container['css_style'];
    }

    /**
     * Sets css_style
     *
     * @param string $css_style css_style
     *
     * @return $this
     */
    public function setCssStyle($css_style)
    {
        $this->container['css_style'] = $css_style;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets pagination
     *
     * @return bool
     */
    public function getPagination()
    {
        return $this->container['pagination'];
    }

    /**
     * Sets pagination
     *
     * @param bool $pagination pagination
     *
     * @return $this
     */
    public function setPagination($pagination)
    {
        $this->container['pagination'] = $pagination;

        return $this;
    }

    /**
     * Gets options
     *
     * @return string[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param string[] $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets block
     *
     * @return \Emonsite\Models\AbstractBlock
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param \Emonsite\Models\AbstractBlock $block block
     *
     * @return $this
     */
    public function setBlock($block)
    {
        $this->container['block'] = $block;

        return $this;
    }

    /**
     * Gets cells
     *
     * @return \Emonsite\Models\BlockCellInterface[]
     */
    public function getCells()
    {
        return $this->container['cells'];
    }

    /**
     * Sets cells
     *
     * @param \Emonsite\Models\BlockCellInterface[] $cells cells
     *
     * @return $this
     */
    public function setCells($cells)
    {
        $this->container['cells'] = $cells;

        return $this;
    }

    /**
     * Gets cell
     *
     * @return \Emonsite\Models\BlockCellInterface[]
     */
    public function getCell()
    {
        return $this->container['cell'];
    }

    /**
     * Sets cell
     *
     * @param \Emonsite\Models\BlockCellInterface[] $cell cell
     *
     * @return $this
     */
    public function setCell($cell)
    {
        $this->container['cell'] = $cell;

        return $this;
    }

    /**
     * Gets version
     *
     * @return \Emonsite\Models\VersionInterface[]
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param \Emonsite\Models\VersionInterface[] $version La version dans la langue demandé ou la langue par défault
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets versions
     *
     * @return \Emonsite\Models\VersionInterface[]
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     *
     * @param \Emonsite\Models\VersionInterface[] $versions versions
     *
     * @return $this
     */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;

        return $this;
    }

    /**
     * Gets default_lang
     *
     * @return string
     */
    public function getDefaultLang()
    {
        return $this->container['default_lang'];
    }

    /**
     * Sets default_lang
     *
     * @param string $default_lang default_lang
     *
     * @return $this
     */
    public function setDefaultLang($default_lang)
    {
        $this->container['default_lang'] = $default_lang;

        return $this;
    }

    /**
     * Gets version_by_lang
     *
     * @return string[]
     */
    public function getVersionByLang()
    {
        return $this->container['version_by_lang'];
    }

    /**
     * Sets version_by_lang
     *
     * @param string[] $version_by_lang version_by_lang
     *
     * @return $this
     */
    public function setVersionByLang($version_by_lang)
    {
        $this->container['version_by_lang'] = $version_by_lang;

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
