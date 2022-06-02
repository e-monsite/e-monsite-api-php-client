<?php
/**
 * EcoLoyaltyPoints
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
 * EcoLoyaltyPoints Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EcoLoyaltyPoints implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EcoLoyaltyPoints';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'site' => '\EmonsiteApi\Models\Site',
        'active' => 'bool',
        'activeTopaidOrder' => 'bool',
        'name' => 'string',
        'type' => 'int',
        'seuil' => 'float',
        'palier' => 'float',
        'tauxAttribution' => 'int',
        'tauxRedemption' => 'float',
        'showProduct' => 'bool',
        'startPoints' => 'int',
        'showTauxRedemption' => 'bool',
        'showTauxRedemptionCart' => 'bool',
        'accessRights' => 'int',
        'categoriesRights' => 'int',
        'categories' => 'string[]',
        'groups' => '\EmonsiteApi\Models\Membergroup[]',
        'addUserId' => 'string',
        'updUserId' => 'string',
        'addDt' => 'int',
        'updDt' => 'int',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'site' => null,
        'active' => null,
        'activeTopaidOrder' => null,
        'name' => null,
        'type' => null,
        'seuil' => null,
        'palier' => null,
        'tauxAttribution' => null,
        'tauxRedemption' => null,
        'showProduct' => null,
        'startPoints' => null,
        'showTauxRedemption' => null,
        'showTauxRedemptionCart' => null,
        'accessRights' => null,
        'categoriesRights' => null,
        'categories' => 'iri-reference',
        'groups' => null,
        'addUserId' => null,
        'updUserId' => null,
        'addDt' => null,
        'updDt' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
        'id' => 'id',
        'site' => 'site',
        'active' => 'active',
        'activeTopaidOrder' => 'activeTopaidOrder',
        'name' => 'name',
        'type' => 'type',
        'seuil' => 'seuil',
        'palier' => 'palier',
        'tauxAttribution' => 'tauxAttribution',
        'tauxRedemption' => 'tauxRedemption',
        'showProduct' => 'showProduct',
        'startPoints' => 'startPoints',
        'showTauxRedemption' => 'showTauxRedemption',
        'showTauxRedemptionCart' => 'showTauxRedemptionCart',
        'accessRights' => 'accessRights',
        'categoriesRights' => 'categoriesRights',
        'categories' => 'categories',
        'groups' => 'groups',
        'addUserId' => 'addUserId',
        'updUserId' => 'updUserId',
        'addDt' => 'addDt',
        'updDt' => 'updDt',
        'createdAt' => 'createdAt',
        'updatedAt' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'site' => 'setSite',
        'active' => 'setActive',
        'activeTopaidOrder' => 'setActiveTopaidOrder',
        'name' => 'setName',
        'type' => 'setType',
        'seuil' => 'setSeuil',
        'palier' => 'setPalier',
        'tauxAttribution' => 'setTauxAttribution',
        'tauxRedemption' => 'setTauxRedemption',
        'showProduct' => 'setShowProduct',
        'startPoints' => 'setStartPoints',
        'showTauxRedemption' => 'setShowTauxRedemption',
        'showTauxRedemptionCart' => 'setShowTauxRedemptionCart',
        'accessRights' => 'setAccessRights',
        'categoriesRights' => 'setCategoriesRights',
        'categories' => 'setCategories',
        'groups' => 'setGroups',
        'addUserId' => 'setAddUserId',
        'updUserId' => 'setUpdUserId',
        'addDt' => 'setAddDt',
        'updDt' => 'setUpdDt',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'site' => 'getSite',
        'active' => 'getActive',
        'activeTopaidOrder' => 'getActiveTopaidOrder',
        'name' => 'getName',
        'type' => 'getType',
        'seuil' => 'getSeuil',
        'palier' => 'getPalier',
        'tauxAttribution' => 'getTauxAttribution',
        'tauxRedemption' => 'getTauxRedemption',
        'showProduct' => 'getShowProduct',
        'startPoints' => 'getStartPoints',
        'showTauxRedemption' => 'getShowTauxRedemption',
        'showTauxRedemptionCart' => 'getShowTauxRedemptionCart',
        'accessRights' => 'getAccessRights',
        'categoriesRights' => 'getCategoriesRights',
        'categories' => 'getCategories',
        'groups' => 'getGroups',
        'addUserId' => 'getAddUserId',
        'updUserId' => 'getUpdUserId',
        'addDt' => 'getAddDt',
        'updDt' => 'getUpdDt',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['site'] = $data['site'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['activeTopaidOrder'] = $data['activeTopaidOrder'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['seuil'] = $data['seuil'] ?? null;
        $this->container['palier'] = $data['palier'] ?? null;
        $this->container['tauxAttribution'] = $data['tauxAttribution'] ?? null;
        $this->container['tauxRedemption'] = $data['tauxRedemption'] ?? null;
        $this->container['showProduct'] = $data['showProduct'] ?? null;
        $this->container['startPoints'] = $data['startPoints'] ?? null;
        $this->container['showTauxRedemption'] = $data['showTauxRedemption'] ?? null;
        $this->container['showTauxRedemptionCart'] = $data['showTauxRedemptionCart'] ?? null;
        $this->container['accessRights'] = $data['accessRights'] ?? null;
        $this->container['categoriesRights'] = $data['categoriesRights'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['groups'] = $data['groups'] ?? null;
        $this->container['addUserId'] = $data['addUserId'] ?? null;
        $this->container['updUserId'] = $data['updUserId'] ?? null;
        $this->container['addDt'] = $data['addDt'] ?? null;
        $this->container['updDt'] = $data['updDt'] ?? null;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['updatedAt'] = $data['updatedAt'] ?? null;
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
     * @return \EmonsiteApi\Models\Site|null
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param \EmonsiteApi\Models\Site|null $site site
     *
     * @return self
     */
    public function setSite($site)
    {
        $this->container['site'] = $site;

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
     * Gets activeTopaidOrder
     *
     * @return bool|null
     */
    public function getActiveTopaidOrder()
    {
        return $this->container['activeTopaidOrder'];
    }

    /**
     * Sets activeTopaidOrder
     *
     * @param bool|null $activeTopaidOrder activeTopaidOrder
     *
     * @return self
     */
    public function setActiveTopaidOrder($activeTopaidOrder)
    {
        $this->container['activeTopaidOrder'] = $activeTopaidOrder;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets seuil
     *
     * @return float|null
     */
    public function getSeuil()
    {
        return $this->container['seuil'];
    }

    /**
     * Sets seuil
     *
     * @param float|null $seuil seuil
     *
     * @return self
     */
    public function setSeuil($seuil)
    {
        $this->container['seuil'] = $seuil;

        return $this;
    }

    /**
     * Gets palier
     *
     * @return float|null
     */
    public function getPalier()
    {
        return $this->container['palier'];
    }

    /**
     * Sets palier
     *
     * @param float|null $palier palier
     *
     * @return self
     */
    public function setPalier($palier)
    {
        $this->container['palier'] = $palier;

        return $this;
    }

    /**
     * Gets tauxAttribution
     *
     * @return int|null
     */
    public function getTauxAttribution()
    {
        return $this->container['tauxAttribution'];
    }

    /**
     * Sets tauxAttribution
     *
     * @param int|null $tauxAttribution tauxAttribution
     *
     * @return self
     */
    public function setTauxAttribution($tauxAttribution)
    {
        $this->container['tauxAttribution'] = $tauxAttribution;

        return $this;
    }

    /**
     * Gets tauxRedemption
     *
     * @return float|null
     */
    public function getTauxRedemption()
    {
        return $this->container['tauxRedemption'];
    }

    /**
     * Sets tauxRedemption
     *
     * @param float|null $tauxRedemption tauxRedemption
     *
     * @return self
     */
    public function setTauxRedemption($tauxRedemption)
    {
        $this->container['tauxRedemption'] = $tauxRedemption;

        return $this;
    }

    /**
     * Gets showProduct
     *
     * @return bool|null
     */
    public function getShowProduct()
    {
        return $this->container['showProduct'];
    }

    /**
     * Sets showProduct
     *
     * @param bool|null $showProduct showProduct
     *
     * @return self
     */
    public function setShowProduct($showProduct)
    {
        $this->container['showProduct'] = $showProduct;

        return $this;
    }

    /**
     * Gets startPoints
     *
     * @return int|null
     */
    public function getStartPoints()
    {
        return $this->container['startPoints'];
    }

    /**
     * Sets startPoints
     *
     * @param int|null $startPoints startPoints
     *
     * @return self
     */
    public function setStartPoints($startPoints)
    {
        $this->container['startPoints'] = $startPoints;

        return $this;
    }

    /**
     * Gets showTauxRedemption
     *
     * @return bool|null
     */
    public function getShowTauxRedemption()
    {
        return $this->container['showTauxRedemption'];
    }

    /**
     * Sets showTauxRedemption
     *
     * @param bool|null $showTauxRedemption showTauxRedemption
     *
     * @return self
     */
    public function setShowTauxRedemption($showTauxRedemption)
    {
        $this->container['showTauxRedemption'] = $showTauxRedemption;

        return $this;
    }

    /**
     * Gets showTauxRedemptionCart
     *
     * @return bool|null
     */
    public function getShowTauxRedemptionCart()
    {
        return $this->container['showTauxRedemptionCart'];
    }

    /**
     * Sets showTauxRedemptionCart
     *
     * @param bool|null $showTauxRedemptionCart showTauxRedemptionCart
     *
     * @return self
     */
    public function setShowTauxRedemptionCart($showTauxRedemptionCart)
    {
        $this->container['showTauxRedemptionCart'] = $showTauxRedemptionCart;

        return $this;
    }

    /**
     * Gets accessRights
     *
     * @return int|null
     */
    public function getAccessRights()
    {
        return $this->container['accessRights'];
    }

    /**
     * Sets accessRights
     *
     * @param int|null $accessRights accessRights
     *
     * @return self
     */
    public function setAccessRights($accessRights)
    {
        $this->container['accessRights'] = $accessRights;

        return $this;
    }

    /**
     * Gets categoriesRights
     *
     * @return int|null
     */
    public function getCategoriesRights()
    {
        return $this->container['categoriesRights'];
    }

    /**
     * Sets categoriesRights
     *
     * @param int|null $categoriesRights categoriesRights
     *
     * @return self
     */
    public function setCategoriesRights($categoriesRights)
    {
        $this->container['categoriesRights'] = $categoriesRights;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return string[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[]|null $categories categories
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \EmonsiteApi\Models\Membergroup[]|null
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \EmonsiteApi\Models\Membergroup[]|null $groups groups
     *
     * @return self
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

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


