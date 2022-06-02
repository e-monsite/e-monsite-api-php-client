<?php
/**
 * BlockCellJsonld
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
 * BlockCellJsonld Class Doc Comment
 *
 * @category Class
 * @package  Emonsite
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BlockCellJsonld implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BlockCell:jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
'id' => 'string',
'type' => 'string',
'line' => '\Emonsite\Models\BlockLineJsonld',
'width' => 'string',
'content_type' => 'string',
'widget_id' => 'string',
'widget_variant' => 'string',
'css_class' => 'string',
'css_id' => 'string',
'css_style' => 'string',
'position' => 'int',
'design_options' => 'string',
'id' => 'string',
'versions' => '\Emonsite\Models\BlockCellVJsonld[]',
'version' => '\Emonsite\Models\VersionInterfaceJsonld[]',
'default_lang' => 'string',
'version_by_lang' => 'string[]',
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
'line' => null,
'width' => null,
'content_type' => null,
'widget_id' => null,
'widget_variant' => null,
'css_class' => null,
'css_id' => null,
'css_style' => null,
'position' => null,
'design_options' => null,
'id' => null,
'versions' => null,
'version' => null,
'default_lang' => null,
'version_by_lang' => null,
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
'line' => 'line',
'width' => 'width',
'content_type' => 'contentType',
'widget_id' => 'widgetId',
'widget_variant' => 'widgetVariant',
'css_class' => 'cssClass',
'css_id' => 'cssId',
'css_style' => 'cssStyle',
'position' => 'position',
'design_options' => 'designOptions',
'id' => 'id',
'versions' => 'versions',
'version' => 'version',
'default_lang' => 'defaultLang',
'version_by_lang' => 'versionByLang',
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
'line' => 'setLine',
'width' => 'setWidth',
'content_type' => 'setContentType',
'widget_id' => 'setWidgetId',
'widget_variant' => 'setWidgetVariant',
'css_class' => 'setCssClass',
'css_id' => 'setCssId',
'css_style' => 'setCssStyle',
'position' => 'setPosition',
'design_options' => 'setDesignOptions',
'id' => 'setId',
'versions' => 'setVersions',
'version' => 'setVersion',
'default_lang' => 'setDefaultLang',
'version_by_lang' => 'setVersionByLang',
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
'line' => 'getLine',
'width' => 'getWidth',
'content_type' => 'getContentType',
'widget_id' => 'getWidgetId',
'widget_variant' => 'getWidgetVariant',
'css_class' => 'getCssClass',
'css_id' => 'getCssId',
'css_style' => 'getCssStyle',
'position' => 'getPosition',
'design_options' => 'getDesignOptions',
'id' => 'getId',
'versions' => 'getVersions',
'version' => 'getVersion',
'default_lang' => 'getDefaultLang',
'version_by_lang' => 'getVersionByLang',
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
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['widget_id'] = isset($data['widget_id']) ? $data['widget_id'] : null;
        $this->container['widget_variant'] = isset($data['widget_variant']) ? $data['widget_variant'] : null;
        $this->container['css_class'] = isset($data['css_class']) ? $data['css_class'] : null;
        $this->container['css_id'] = isset($data['css_id']) ? $data['css_id'] : null;
        $this->container['css_style'] = isset($data['css_style']) ? $data['css_style'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['design_options'] = isset($data['design_options']) ? $data['design_options'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['default_lang'] = isset($data['default_lang']) ? $data['default_lang'] : null;
        $this->container['version_by_lang'] = isset($data['version_by_lang']) ? $data['version_by_lang'] : null;
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
     * Gets line
     *
     * @return \Emonsite\Models\BlockLineJsonld
     */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
     * Sets line
     *
     * @param \Emonsite\Models\BlockLineJsonld $line line
     *
     * @return $this
     */
    public function setLine($line)
    {
        $this->container['line'] = $line;

        return $this;
    }

    /**
     * Gets width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param string $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string $content_type content_type
     *
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets widget_id
     *
     * @return string
     */
    public function getWidgetId()
    {
        return $this->container['widget_id'];
    }

    /**
     * Sets widget_id
     *
     * @param string $widget_id widget_id
     *
     * @return $this
     */
    public function setWidgetId($widget_id)
    {
        $this->container['widget_id'] = $widget_id;

        return $this;
    }

    /**
     * Gets widget_variant
     *
     * @return string
     */
    public function getWidgetVariant()
    {
        return $this->container['widget_variant'];
    }

    /**
     * Sets widget_variant
     *
     * @param string $widget_variant widget_variant
     *
     * @return $this
     */
    public function setWidgetVariant($widget_variant)
    {
        $this->container['widget_variant'] = $widget_variant;

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
     * Gets design_options
     *
     * @return string
     */
    public function getDesignOptions()
    {
        return $this->container['design_options'];
    }

    /**
     * Sets design_options
     *
     * @param string $design_options TODO type json pour avoir un array direct
     *
     * @return $this
     */
    public function setDesignOptions($design_options)
    {
        $this->container['design_options'] = $design_options;

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
     * Gets versions
     *
     * @return \Emonsite\Models\BlockCellVJsonld[]
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     *
     * @param \Emonsite\Models\BlockCellVJsonld[] $versions IMPLEMENTEZ le mapping dans l'entity TODO trouver comment le faire dynamiquement avec un listener doctrine
     *
     * @return $this
     */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;

        return $this;
    }

    /**
     * Gets version
     *
     * @return \Emonsite\Models\VersionInterfaceJsonld[]
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param \Emonsite\Models\VersionInterfaceJsonld[] $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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