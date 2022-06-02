<?php
/**
 * BlockPageLine
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API E-monsite
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: alpha
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EmonsiteApi\Models;

use \ArrayAccess;
use \EmonsiteApi\ObjectSerializer;

/**
 * BlockPageLine Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BlockPageLine implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BlockPageLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'block' => '\EmonsiteApi\Models\BlockPageLineBlock',
        'cssClass' => 'string',
        'cssId' => 'string',
        'cssStyle' => 'string',
        'height' => 'int',
        'position' => 'int',
        'pagination' => 'bool',
        'options' => 'string[]',
        'cells' => '\EmonsiteApi\Models\BlockPageCell[]',
        'cell' => '\EmonsiteApi\Models\BlockCellInterface[]',
        'defaultLang' => 'string',
        'id' => 'string',
        'versions' => '\EmonsiteApi\Models\BlockPageLineV[]',
        'version' => '\EmonsiteApi\Models\VersionInterface[]',
        'versionByLang' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'block' => null,
        'cssClass' => null,
        'cssId' => null,
        'cssStyle' => null,
        'height' => null,
        'position' => null,
        'pagination' => null,
        'options' => null,
        'cells' => null,
        'cell' => null,
        'defaultLang' => null,
        'id' => null,
        'versions' => null,
        'version' => null,
        'versionByLang' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'block' => 'block',
        'cssClass' => 'cssClass',
        'cssId' => 'cssId',
        'cssStyle' => 'cssStyle',
        'height' => 'height',
        'position' => 'position',
        'pagination' => 'pagination',
        'options' => 'options',
        'cells' => 'cells',
        'cell' => 'cell',
        'defaultLang' => 'defaultLang',
        'id' => 'id',
        'versions' => 'versions',
        'version' => 'version',
        'versionByLang' => 'versionByLang'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'block' => 'setBlock',
        'cssClass' => 'setCssClass',
        'cssId' => 'setCssId',
        'cssStyle' => 'setCssStyle',
        'height' => 'setHeight',
        'position' => 'setPosition',
        'pagination' => 'setPagination',
        'options' => 'setOptions',
        'cells' => 'setCells',
        'cell' => 'setCell',
        'defaultLang' => 'setDefaultLang',
        'id' => 'setId',
        'versions' => 'setVersions',
        'version' => 'setVersion',
        'versionByLang' => 'setVersionByLang'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'block' => 'getBlock',
        'cssClass' => 'getCssClass',
        'cssId' => 'getCssId',
        'cssStyle' => 'getCssStyle',
        'height' => 'getHeight',
        'position' => 'getPosition',
        'pagination' => 'getPagination',
        'options' => 'getOptions',
        'cells' => 'getCells',
        'cell' => 'getCell',
        'defaultLang' => 'getDefaultLang',
        'id' => 'getId',
        'versions' => 'getVersions',
        'version' => 'getVersion',
        'versionByLang' => 'getVersionByLang'
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
        return self::$openAPIModelName;
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
        $this->container['block'] = $data['block'] ?? null;
        $this->container['cssClass'] = $data['cssClass'] ?? null;
        $this->container['cssId'] = $data['cssId'] ?? null;
        $this->container['cssStyle'] = $data['cssStyle'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['position'] = $data['position'] ?? null;
        $this->container['pagination'] = $data['pagination'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
        $this->container['cells'] = $data['cells'] ?? null;
        $this->container['cell'] = $data['cell'] ?? null;
        $this->container['defaultLang'] = $data['defaultLang'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['versions'] = $data['versions'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['versionByLang'] = $data['versionByLang'] ?? null;
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
     * Gets block
     *
     * @return \EmonsiteApi\Models\BlockPageLineBlock|null
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param \EmonsiteApi\Models\BlockPageLineBlock|null $block block
     *
     * @return self
     */
    public function setBlock($block)
    {
        $this->container['block'] = $block;

        return $this;
    }

    /**
     * Gets cssClass
     *
     * @return string|null
     */
    public function getCssClass()
    {
        return $this->container['cssClass'];
    }

    /**
     * Sets cssClass
     *
     * @param string|null $cssClass cssClass
     *
     * @return self
     */
    public function setCssClass($cssClass)
    {
        $this->container['cssClass'] = $cssClass;

        return $this;
    }

    /**
     * Gets cssId
     *
     * @return string|null
     */
    public function getCssId()
    {
        return $this->container['cssId'];
    }

    /**
     * Sets cssId
     *
     * @param string|null $cssId cssId
     *
     * @return self
     */
    public function setCssId($cssId)
    {
        $this->container['cssId'] = $cssId;

        return $this;
    }

    /**
     * Gets cssStyle
     *
     * @return string|null
     */
    public function getCssStyle()
    {
        return $this->container['cssStyle'];
    }

    /**
     * Sets cssStyle
     *
     * @param string|null $cssStyle cssStyle
     *
     * @return self
     */
    public function setCssStyle($cssStyle)
    {
        $this->container['cssStyle'] = $cssStyle;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height height
     *
     * @return self
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int|null $position position
     *
     * @return self
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets pagination
     *
     * @return bool|null
     */
    public function getPagination()
    {
        return $this->container['pagination'];
    }

    /**
     * Sets pagination
     *
     * @param bool|null $pagination pagination
     *
     * @return self
     */
    public function setPagination($pagination)
    {
        $this->container['pagination'] = $pagination;

        return $this;
    }

    /**
     * Gets options
     *
     * @return string[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param string[]|null $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets cells
     *
     * @return \EmonsiteApi\Models\BlockPageCell[]|null
     */
    public function getCells()
    {
        return $this->container['cells'];
    }

    /**
     * Sets cells
     *
     * @param \EmonsiteApi\Models\BlockPageCell[]|null $cells FAIRE LE MAPPING DANS L'ENTITY
     *
     * @return self
     */
    public function setCells($cells)
    {
        $this->container['cells'] = $cells;

        return $this;
    }

    /**
     * Gets cell
     *
     * @return \EmonsiteApi\Models\BlockCellInterface[]|null
     */
    public function getCell()
    {
        return $this->container['cell'];
    }

    /**
     * Sets cell
     *
     * @param \EmonsiteApi\Models\BlockCellInterface[]|null $cell cell
     *
     * @return self
     */
    public function setCell($cell)
    {
        $this->container['cell'] = $cell;

        return $this;
    }

    /**
     * Gets defaultLang
     *
     * @return string|null
     */
    public function getDefaultLang()
    {
        return $this->container['defaultLang'];
    }

    /**
     * Sets defaultLang
     *
     * @param string|null $defaultLang defaultLang
     *
     * @return self
     */
    public function setDefaultLang($defaultLang)
    {
        $this->container['defaultLang'] = $defaultLang;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets versions
     *
     * @return \EmonsiteApi\Models\BlockPageLineV[]|null
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     *
     * @param \EmonsiteApi\Models\BlockPageLineV[]|null $versions IMPLEMENTEZ le mapping dans l'entity TODO trouver comment le faire dynamiquement avec un listener doctrine
     *
     * @return self
     */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;

        return $this;
    }

    /**
     * Gets version
     *
     * @return \EmonsiteApi\Models\VersionInterface[]|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param \EmonsiteApi\Models\VersionInterface[]|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets versionByLang
     *
     * @return string[]|null
     */
    public function getVersionByLang()
    {
        return $this->container['versionByLang'];
    }

    /**
     * Sets versionByLang
     *
     * @param string[]|null $versionByLang versionByLang
     *
     * @return self
     */
    public function setVersionByLang($versionByLang)
    {
        $this->container['versionByLang'] = $versionByLang;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


