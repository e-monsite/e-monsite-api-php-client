<?php
/**
 * LegalJsonldCguPage
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
 * LegalJsonldCguPage Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LegalJsonldCguPage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Legal_jsonld_cguPage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'context' => 'string',
        'id' => 'string',
        'type' => 'string',
        'aliasClass' => 'string',
        'pageindex' => 'bool',
        'isPageindex' => 'bool',
        'modelId' => 'string',
        'siteUrl' => 'string',
        'id' => 'string',
        'versions' => '\EmonsiteApi\Models\PageVJsonld[]',
        'version' => '\EmonsiteApi\Models\VersionInterfaceJsonld[]',
        'defaultLang' => 'string',
        'versionByLang' => 'string[]',
        'site' => '\EmonsiteApi\Models\SiteJsonld',
        'addDt' => 'int',
        'updDt' => 'int',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'addUserId' => 'string',
        'updUserId' => 'string',
        'trashed' => 'bool',
        'trashDt' => 'int',
        'trashUserId' => 'string',
        'published' => 'bool',
        'publishFrom' => 'int',
        'category' => 'string',
        'aliases' => '\EmonsiteApi\Models\PageAliasJsonld[]',
        'alias' => 'string[]',
        'block' => '\EmonsiteApi\Models\PageJsonldBlock'
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
        'aliasClass' => null,
        'pageindex' => null,
        'isPageindex' => null,
        'modelId' => null,
        'siteUrl' => null,
        'id' => null,
        'versions' => null,
        'version' => null,
        'defaultLang' => null,
        'versionByLang' => null,
        'site' => null,
        'addDt' => null,
        'updDt' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'addUserId' => null,
        'updUserId' => null,
        'trashed' => null,
        'trashDt' => null,
        'trashUserId' => null,
        'published' => null,
        'publishFrom' => null,
        'category' => 'iri-reference',
        'aliases' => null,
        'alias' => 'iri-reference',
        'block' => null
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
        'aliasClass' => 'aliasClass',
        'pageindex' => 'pageindex',
        'isPageindex' => 'isPageindex',
        'modelId' => 'modelId',
        'siteUrl' => 'siteUrl',
        'id' => 'id',
        'versions' => 'versions',
        'version' => 'version',
        'defaultLang' => 'defaultLang',
        'versionByLang' => 'versionByLang',
        'site' => 'site',
        'addDt' => 'addDt',
        'updDt' => 'updDt',
        'createdAt' => 'createdAt',
        'updatedAt' => 'updatedAt',
        'addUserId' => 'addUserId',
        'updUserId' => 'updUserId',
        'trashed' => 'trashed',
        'trashDt' => 'trashDt',
        'trashUserId' => 'trashUserId',
        'published' => 'published',
        'publishFrom' => 'publishFrom',
        'category' => 'category',
        'aliases' => 'aliases',
        'alias' => 'alias',
        'block' => 'block'
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
        'aliasClass' => 'setAliasClass',
        'pageindex' => 'setPageindex',
        'isPageindex' => 'setIsPageindex',
        'modelId' => 'setModelId',
        'siteUrl' => 'setSiteUrl',
        'id' => 'setId',
        'versions' => 'setVersions',
        'version' => 'setVersion',
        'defaultLang' => 'setDefaultLang',
        'versionByLang' => 'setVersionByLang',
        'site' => 'setSite',
        'addDt' => 'setAddDt',
        'updDt' => 'setUpdDt',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'addUserId' => 'setAddUserId',
        'updUserId' => 'setUpdUserId',
        'trashed' => 'setTrashed',
        'trashDt' => 'setTrashDt',
        'trashUserId' => 'setTrashUserId',
        'published' => 'setPublished',
        'publishFrom' => 'setPublishFrom',
        'category' => 'setCategory',
        'aliases' => 'setAliases',
        'alias' => 'setAlias',
        'block' => 'setBlock'
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
        'aliasClass' => 'getAliasClass',
        'pageindex' => 'getPageindex',
        'isPageindex' => 'getIsPageindex',
        'modelId' => 'getModelId',
        'siteUrl' => 'getSiteUrl',
        'id' => 'getId',
        'versions' => 'getVersions',
        'version' => 'getVersion',
        'defaultLang' => 'getDefaultLang',
        'versionByLang' => 'getVersionByLang',
        'site' => 'getSite',
        'addDt' => 'getAddDt',
        'updDt' => 'getUpdDt',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'addUserId' => 'getAddUserId',
        'updUserId' => 'getUpdUserId',
        'trashed' => 'getTrashed',
        'trashDt' => 'getTrashDt',
        'trashUserId' => 'getTrashUserId',
        'published' => 'getPublished',
        'publishFrom' => 'getPublishFrom',
        'category' => 'getCategory',
        'aliases' => 'getAliases',
        'alias' => 'getAlias',
        'block' => 'getBlock'
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
        $this->container['aliasClass'] = $data['aliasClass'] ?? null;
        $this->container['pageindex'] = $data['pageindex'] ?? null;
        $this->container['isPageindex'] = $data['isPageindex'] ?? null;
        $this->container['modelId'] = $data['modelId'] ?? null;
        $this->container['siteUrl'] = $data['siteUrl'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['versions'] = $data['versions'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['defaultLang'] = $data['defaultLang'] ?? null;
        $this->container['versionByLang'] = $data['versionByLang'] ?? null;
        $this->container['site'] = $data['site'] ?? null;
        $this->container['addDt'] = $data['addDt'] ?? null;
        $this->container['updDt'] = $data['updDt'] ?? null;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['updatedAt'] = $data['updatedAt'] ?? null;
        $this->container['addUserId'] = $data['addUserId'] ?? null;
        $this->container['updUserId'] = $data['updUserId'] ?? null;
        $this->container['trashed'] = $data['trashed'] ?? null;
        $this->container['trashDt'] = $data['trashDt'] ?? null;
        $this->container['trashUserId'] = $data['trashUserId'] ?? null;
        $this->container['published'] = $data['published'] ?? null;
        $this->container['publishFrom'] = $data['publishFrom'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['aliases'] = $data['aliases'] ?? null;
        $this->container['alias'] = $data['alias'] ?? null;
        $this->container['block'] = $data['block'] ?? null;
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
     * Gets aliasClass
     *
     * @return string|null
     */
    public function getAliasClass()
    {
        return $this->container['aliasClass'];
    }

    /**
     * Sets aliasClass
     *
     * @param string|null $aliasClass aliasClass
     *
     * @return self
     */
    public function setAliasClass($aliasClass)
    {
        $this->container['aliasClass'] = $aliasClass;

        return $this;
    }

    /**
     * Gets pageindex
     *
     * @return bool|null
     */
    public function getPageindex()
    {
        return $this->container['pageindex'];
    }

    /**
     * Sets pageindex
     *
     * @param bool|null $pageindex pageindex
     *
     * @return self
     */
    public function setPageindex($pageindex)
    {
        $this->container['pageindex'] = $pageindex;

        return $this;
    }

    /**
     * Gets isPageindex
     *
     * @return bool|null
     */
    public function getIsPageindex()
    {
        return $this->container['isPageindex'];
    }

    /**
     * Sets isPageindex
     *
     * @param bool|null $isPageindex isPageindex
     *
     * @return self
     */
    public function setIsPageindex($isPageindex)
    {
        $this->container['isPageindex'] = $isPageindex;

        return $this;
    }

    /**
     * Gets modelId
     *
     * @return string|null
     */
    public function getModelId()
    {
        return $this->container['modelId'];
    }

    /**
     * Sets modelId
     *
     * @param string|null $modelId modelId
     *
     * @return self
     */
    public function setModelId($modelId)
    {
        $this->container['modelId'] = $modelId;

        return $this;
    }

    /**
     * Gets siteUrl
     *
     * @return string|null
     */
    public function getSiteUrl()
    {
        return $this->container['siteUrl'];
    }

    /**
     * Sets siteUrl
     *
     * @param string|null $siteUrl siteUrl
     *
     * @return self
     */
    public function setSiteUrl($siteUrl)
    {
        $this->container['siteUrl'] = $siteUrl;

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
     * @return \EmonsiteApi\Models\PageVJsonld[]|null
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     *
     * @param \EmonsiteApi\Models\PageVJsonld[]|null $versions IMPLEMENTEZ le mapping dans l'entity TODO trouver comment le faire dynamiquement avec un listener doctrine
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
     * Gets updDt
     *
     * @return int|null
     */
    public function getUpdDt()
    {
        return $this->container['updDt'];
    }

    /**
     * Sets updDt
     *
     * @param int|null $updDt updDt
     *
     * @return self
     */
    public function setUpdDt($updDt)
    {
        $this->container['updDt'] = $updDt;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

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
     * Gets updUserId
     *
     * @return string|null
     */
    public function getUpdUserId()
    {
        return $this->container['updUserId'];
    }

    /**
     * Sets updUserId
     *
     * @param string|null $updUserId updUserId
     *
     * @return self
     */
    public function setUpdUserId($updUserId)
    {
        $this->container['updUserId'] = $updUserId;

        return $this;
    }

    /**
     * Gets trashed
     *
     * @return bool|null
     */
    public function getTrashed()
    {
        return $this->container['trashed'];
    }

    /**
     * Sets trashed
     *
     * @param bool|null $trashed trashed
     *
     * @return self
     */
    public function setTrashed($trashed)
    {
        $this->container['trashed'] = $trashed;

        return $this;
    }

    /**
     * Gets trashDt
     *
     * @return int|null
     */
    public function getTrashDt()
    {
        return $this->container['trashDt'];
    }

    /**
     * Sets trashDt
     *
     * @param int|null $trashDt trashDt
     *
     * @return self
     */
    public function setTrashDt($trashDt)
    {
        $this->container['trashDt'] = $trashDt;

        return $this;
    }

    /**
     * Gets trashUserId
     *
     * @return string|null
     */
    public function getTrashUserId()
    {
        return $this->container['trashUserId'];
    }

    /**
     * Sets trashUserId
     *
     * @param string|null $trashUserId trashUserId
     *
     * @return self
     */
    public function setTrashUserId($trashUserId)
    {
        $this->container['trashUserId'] = $trashUserId;

        return $this;
    }

    /**
     * Gets published
     *
     * @return bool|null
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool|null $published published
     *
     * @return self
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets publishFrom
     *
     * @return int|null
     */
    public function getPublishFrom()
    {
        return $this->container['publishFrom'];
    }

    /**
     * Sets publishFrom
     *
     * @param int|null $publishFrom Date de publication, passé ou future
     *
     * @return self
     */
    public function setPublishFrom($publishFrom)
    {
        $this->container['publishFrom'] = $publishFrom;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets aliases
     *
     * @return \EmonsiteApi\Models\PageAliasJsonld[]|null
     */
    public function getAliases()
    {
        return $this->container['aliases'];
    }

    /**
     * Sets aliases
     *
     * @param \EmonsiteApi\Models\PageAliasJsonld[]|null $aliases Faire la mapping dans l'entity
     *
     * @return self
     */
    public function setAliases($aliases)
    {
        $this->container['aliases'] = $aliases;

        return $this;
    }

    /**
     * Gets alias
     *
     * @return string[]|null
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param string[]|null $alias alias
     *
     * @return self
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets block
     *
     * @return \EmonsiteApi\Models\PageJsonldBlock|null
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param \EmonsiteApi\Models\PageJsonldBlock|null $block block
     *
     * @return self
     */
    public function setBlock($block)
    {
        $this->container['block'] = $block;

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


