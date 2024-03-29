<?php
/**
 * SiteJsonldDefaultMenuHWidget
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
 * SiteJsonldDefaultMenuHWidget Class Doc Comment
 *
 * @category Class
 * @description return le widget menu H par défaut
 * @package  EmonsiteApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SiteJsonldDefaultMenuHWidget implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Site_jsonld_defaultMenuHWidget';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'context' => 'string',
        'id' => 'string',
        'type' => 'string',
        'structure' => '\EmonsiteApi\Models\StructureWidgetsJsonldStructure',
        'addDt' => 'int',
        'addUserId' => 'string',
        'widgetId' => 'string',
        'widgetVariant' => 'string',
        'zoneNumber' => 'int',
        'zoneCodename' => 'string',
        'zoneType' => 'string',
        'ordering' => 'int',
        'active' => 'bool',
        'cssClass' => 'string',
        'cssId' => 'string',
        'menuId' => 'string',
        'id' => 'string',
        'site' => '\EmonsiteApi\Models\SiteJsonld',
        'versions' => '\EmonsiteApi\Models\StructureWidgetsVJsonld[]',
        'version' => '\EmonsiteApi\Models\VersionInterfaceJsonld[]',
        'defaultLang' => 'string',
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
        'context' => null,
        'id' => null,
        'type' => null,
        'structure' => null,
        'addDt' => null,
        'addUserId' => null,
        'widgetId' => null,
        'widgetVariant' => null,
        'zoneNumber' => null,
        'zoneCodename' => null,
        'zoneType' => null,
        'ordering' => null,
        'active' => null,
        'cssClass' => null,
        'cssId' => null,
        'menuId' => null,
        'id' => null,
        'site' => null,
        'versions' => null,
        'version' => null,
        'defaultLang' => null,
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
        'context' => '@context',
        'id' => '@id',
        'type' => '@type',
        'structure' => 'structure',
        'addDt' => 'addDt',
        'addUserId' => 'addUserId',
        'widgetId' => 'widgetId',
        'widgetVariant' => 'widgetVariant',
        'zoneNumber' => 'zoneNumber',
        'zoneCodename' => 'zoneCodename',
        'zoneType' => 'zoneType',
        'ordering' => 'ordering',
        'active' => 'active',
        'cssClass' => 'cssClass',
        'cssId' => 'cssId',
        'menuId' => 'menuId',
        'id' => 'id',
        'site' => 'site',
        'versions' => 'versions',
        'version' => 'version',
        'defaultLang' => 'defaultLang',
        'versionByLang' => 'versionByLang'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
        'id' => 'setId',
        'type' => 'setType',
        'structure' => 'setStructure',
        'addDt' => 'setAddDt',
        'addUserId' => 'setAddUserId',
        'widgetId' => 'setWidgetId',
        'widgetVariant' => 'setWidgetVariant',
        'zoneNumber' => 'setZoneNumber',
        'zoneCodename' => 'setZoneCodename',
        'zoneType' => 'setZoneType',
        'ordering' => 'setOrdering',
        'active' => 'setActive',
        'cssClass' => 'setCssClass',
        'cssId' => 'setCssId',
        'menuId' => 'setMenuId',
        'id' => 'setId',
        'site' => 'setSite',
        'versions' => 'setVersions',
        'version' => 'setVersion',
        'defaultLang' => 'setDefaultLang',
        'versionByLang' => 'setVersionByLang'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
        'id' => 'getId',
        'type' => 'getType',
        'structure' => 'getStructure',
        'addDt' => 'getAddDt',
        'addUserId' => 'getAddUserId',
        'widgetId' => 'getWidgetId',
        'widgetVariant' => 'getWidgetVariant',
        'zoneNumber' => 'getZoneNumber',
        'zoneCodename' => 'getZoneCodename',
        'zoneType' => 'getZoneType',
        'ordering' => 'getOrdering',
        'active' => 'getActive',
        'cssClass' => 'getCssClass',
        'cssId' => 'getCssId',
        'menuId' => 'getMenuId',
        'id' => 'getId',
        'site' => 'getSite',
        'versions' => 'getVersions',
        'version' => 'getVersion',
        'defaultLang' => 'getDefaultLang',
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
        $this->container['context'] = $data['context'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['structure'] = $data['structure'] ?? null;
        $this->container['addDt'] = $data['addDt'] ?? null;
        $this->container['addUserId'] = $data['addUserId'] ?? null;
        $this->container['widgetId'] = $data['widgetId'] ?? null;
        $this->container['widgetVariant'] = $data['widgetVariant'] ?? null;
        $this->container['zoneNumber'] = $data['zoneNumber'] ?? null;
        $this->container['zoneCodename'] = $data['zoneCodename'] ?? null;
        $this->container['zoneType'] = $data['zoneType'] ?? null;
        $this->container['ordering'] = $data['ordering'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['cssClass'] = $data['cssClass'] ?? null;
        $this->container['cssId'] = $data['cssId'] ?? null;
        $this->container['menuId'] = $data['menuId'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['site'] = $data['site'] ?? null;
        $this->container['versions'] = $data['versions'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['defaultLang'] = $data['defaultLang'] ?? null;
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
     * Gets context
     *
     * @return string|null
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param string|null $context context
     *
     * @return self
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets structure
     *
     * @return \EmonsiteApi\Models\StructureWidgetsJsonldStructure|null
     */
    public function getStructure()
    {
        return $this->container['structure'];
    }

    /**
     * Sets structure
     *
     * @param \EmonsiteApi\Models\StructureWidgetsJsonldStructure|null $structure structure
     *
     * @return self
     */
    public function setStructure($structure)
    {
        $this->container['structure'] = $structure;

        return $this;
    }

    /**
     * Gets addDt
     *
     * @return int|null
     */
    public function getAddDt()
    {
        return $this->container['addDt'];
    }

    /**
     * Sets addDt
     *
     * @param int|null $addDt addDt
     *
     * @return self
     */
    public function setAddDt($addDt)
    {
        $this->container['addDt'] = $addDt;

        return $this;
    }

    /**
     * Gets addUserId
     *
     * @return string|null
     */
    public function getAddUserId()
    {
        return $this->container['addUserId'];
    }

    /**
     * Sets addUserId
     *
     * @param string|null $addUserId addUserId
     *
     * @return self
     */
    public function setAddUserId($addUserId)
    {
        $this->container['addUserId'] = $addUserId;

        return $this;
    }

    /**
     * Gets widgetId
     *
     * @return string|null
     */
    public function getWidgetId()
    {
        return $this->container['widgetId'];
    }

    /**
     * Sets widgetId
     *
     * @param string|null $widgetId widgetId
     *
     * @return self
     */
    public function setWidgetId($widgetId)
    {
        $this->container['widgetId'] = $widgetId;

        return $this;
    }

    /**
     * Gets widgetVariant
     *
     * @return string|null
     */
    public function getWidgetVariant()
    {
        return $this->container['widgetVariant'];
    }

    /**
     * Sets widgetVariant
     *
     * @param string|null $widgetVariant widgetVariant
     *
     * @return self
     */
    public function setWidgetVariant($widgetVariant)
    {
        $this->container['widgetVariant'] = $widgetVariant;

        return $this;
    }

    /**
     * Gets zoneNumber
     *
     * @return int|null
     */
    public function getZoneNumber()
    {
        return $this->container['zoneNumber'];
    }

    /**
     * Sets zoneNumber
     *
     * @param int|null $zoneNumber zoneNumber
     *
     * @return self
     */
    public function setZoneNumber($zoneNumber)
    {
        $this->container['zoneNumber'] = $zoneNumber;

        return $this;
    }

    /**
     * Gets zoneCodename
     *
     * @return string|null
     */
    public function getZoneCodename()
    {
        return $this->container['zoneCodename'];
    }

    /**
     * Sets zoneCodename
     *
     * @param string|null $zoneCodename zoneCodename
     *
     * @return self
     */
    public function setZoneCodename($zoneCodename)
    {
        $this->container['zoneCodename'] = $zoneCodename;

        return $this;
    }

    /**
     * Gets zoneType
     *
     * @return string|null
     */
    public function getZoneType()
    {
        return $this->container['zoneType'];
    }

    /**
     * Sets zoneType
     *
     * @param string|null $zoneType TODO enum
     *
     * @return self
     */
    public function setZoneType($zoneType)
    {
        $this->container['zoneType'] = $zoneType;

        return $this;
    }

    /**
     * Gets ordering
     *
     * @return int|null
     */
    public function getOrdering()
    {
        return $this->container['ordering'];
    }

    /**
     * Sets ordering
     *
     * @param int|null $ordering ordering
     *
     * @return self
     */
    public function setOrdering($ordering)
    {
        $this->container['ordering'] = $ordering;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * Gets menuId
     *
     * @return string|null
     */
    public function getMenuId()
    {
        return $this->container['menuId'];
    }

    /**
     * Sets menuId
     *
     * @param string|null $menuId menuId
     *
     * @return self
     */
    public function setMenuId($menuId)
    {
        $this->container['menuId'] = $menuId;

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
     * Gets site
     *
     * @return \EmonsiteApi\Models\SiteJsonld|null
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param \EmonsiteApi\Models\SiteJsonld|null $site site
     *
     * @return self
     */
    public function setSite($site)
    {
        $this->container['site'] = $site;

        return $this;
    }

    /**
     * Gets versions
     *
     * @return \EmonsiteApi\Models\StructureWidgetsVJsonld[]|null
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     *
     * @param \EmonsiteApi\Models\StructureWidgetsVJsonld[]|null $versions IMPLEMENTEZ le mapping dans l'entity TODO trouver comment le faire dynamiquement avec un listener doctrine
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
     * @return \EmonsiteApi\Models\VersionInterfaceJsonld[]|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param \EmonsiteApi\Models\VersionInterfaceJsonld[]|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


