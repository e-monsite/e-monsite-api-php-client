<?php
/**
 * EcoProductD02cf7d16e689640fac55c85a0d3ce3f
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
 * EcoProductD02cf7d16e689640fac55c85a0d3ce3f Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  EmonsiteApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EcoProductD02cf7d16e689640fac55c85a0d3ce3f implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EcoProduct:d02cf7d16e689640fac55c85a0d3ce3f';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'siteId' => 'string',
        'published' => 'bool',
        'categoryId' => 'string',
        'supplierId' => 'string',
        'manufacturerId' => 'string',
        'taxId' => 'string',
        'reference' => 'string',
        'supplierReference' => 'string',
        'ean13' => 'string',
        'quantity' => 'int',
        'price' => 'float',
        'ecotax' => 'float',
        'weight' => 'float',
        'pricePerKilo' => 'float',
        'pricePerLiter' => 'float',
        'pricePerUnit' => 'float',
        'condition' => 'string',
        'title' => 'string',
        'description' => 'string',
        'content' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'siteId' => null,
        'published' => null,
        'categoryId' => null,
        'supplierId' => null,
        'manufacturerId' => null,
        'taxId' => null,
        'reference' => null,
        'supplierReference' => null,
        'ean13' => null,
        'quantity' => null,
        'price' => null,
        'ecotax' => null,
        'weight' => null,
        'pricePerKilo' => null,
        'pricePerLiter' => null,
        'pricePerUnit' => null,
        'condition' => null,
        'title' => null,
        'description' => null,
        'content' => null
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
        'siteId' => 'siteId',
        'published' => 'published',
        'categoryId' => 'categoryId',
        'supplierId' => 'supplierId',
        'manufacturerId' => 'manufacturerId',
        'taxId' => 'taxId',
        'reference' => 'reference',
        'supplierReference' => 'supplierReference',
        'ean13' => 'ean13',
        'quantity' => 'quantity',
        'price' => 'price',
        'ecotax' => 'ecotax',
        'weight' => 'weight',
        'pricePerKilo' => 'pricePerKilo',
        'pricePerLiter' => 'pricePerLiter',
        'pricePerUnit' => 'pricePerUnit',
        'condition' => 'condition',
        'title' => 'title',
        'description' => 'description',
        'content' => 'content'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'siteId' => 'setSiteId',
        'published' => 'setPublished',
        'categoryId' => 'setCategoryId',
        'supplierId' => 'setSupplierId',
        'manufacturerId' => 'setManufacturerId',
        'taxId' => 'setTaxId',
        'reference' => 'setReference',
        'supplierReference' => 'setSupplierReference',
        'ean13' => 'setEan13',
        'quantity' => 'setQuantity',
        'price' => 'setPrice',
        'ecotax' => 'setEcotax',
        'weight' => 'setWeight',
        'pricePerKilo' => 'setPricePerKilo',
        'pricePerLiter' => 'setPricePerLiter',
        'pricePerUnit' => 'setPricePerUnit',
        'condition' => 'setCondition',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'content' => 'setContent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'siteId' => 'getSiteId',
        'published' => 'getPublished',
        'categoryId' => 'getCategoryId',
        'supplierId' => 'getSupplierId',
        'manufacturerId' => 'getManufacturerId',
        'taxId' => 'getTaxId',
        'reference' => 'getReference',
        'supplierReference' => 'getSupplierReference',
        'ean13' => 'getEan13',
        'quantity' => 'getQuantity',
        'price' => 'getPrice',
        'ecotax' => 'getEcotax',
        'weight' => 'getWeight',
        'pricePerKilo' => 'getPricePerKilo',
        'pricePerLiter' => 'getPricePerLiter',
        'pricePerUnit' => 'getPricePerUnit',
        'condition' => 'getCondition',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'content' => 'getContent'
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
        $this->container['siteId'] = $data['siteId'] ?? null;
        $this->container['published'] = $data['published'] ?? null;
        $this->container['categoryId'] = $data['categoryId'] ?? null;
        $this->container['supplierId'] = $data['supplierId'] ?? null;
        $this->container['manufacturerId'] = $data['manufacturerId'] ?? null;
        $this->container['taxId'] = $data['taxId'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['supplierReference'] = $data['supplierReference'] ?? null;
        $this->container['ean13'] = $data['ean13'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['ecotax'] = $data['ecotax'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['pricePerKilo'] = $data['pricePerKilo'] ?? null;
        $this->container['pricePerLiter'] = $data['pricePerLiter'] ?? null;
        $this->container['pricePerUnit'] = $data['pricePerUnit'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
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
     * Gets siteId
     *
     * @return string|null
     */
    public function getSiteId()
    {
        return $this->container['siteId'];
    }

    /**
     * Sets siteId
     *
     * @param string|null $siteId siteId
     *
     * @return self
     */
    public function setSiteId($siteId)
    {
        $this->container['siteId'] = $siteId;

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
     * Gets categoryId
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param string|null $categoryId categoryId
     *
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets supplierId
     *
     * @return string|null
     */
    public function getSupplierId()
    {
        return $this->container['supplierId'];
    }

    /**
     * Sets supplierId
     *
     * @param string|null $supplierId supplierId
     *
     * @return self
     */
    public function setSupplierId($supplierId)
    {
        $this->container['supplierId'] = $supplierId;

        return $this;
    }

    /**
     * Gets manufacturerId
     *
     * @return string|null
     */
    public function getManufacturerId()
    {
        return $this->container['manufacturerId'];
    }

    /**
     * Sets manufacturerId
     *
     * @param string|null $manufacturerId manufacturerId
     *
     * @return self
     */
    public function setManufacturerId($manufacturerId)
    {
        $this->container['manufacturerId'] = $manufacturerId;

        return $this;
    }

    /**
     * Gets taxId
     *
     * @return string|null
     */
    public function getTaxId()
    {
        return $this->container['taxId'];
    }

    /**
     * Sets taxId
     *
     * @param string|null $taxId taxId
     *
     * @return self
     */
    public function setTaxId($taxId)
    {
        $this->container['taxId'] = $taxId;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets supplierReference
     *
     * @return string|null
     */
    public function getSupplierReference()
    {
        return $this->container['supplierReference'];
    }

    /**
     * Sets supplierReference
     *
     * @param string|null $supplierReference supplierReference
     *
     * @return self
     */
    public function setSupplierReference($supplierReference)
    {
        $this->container['supplierReference'] = $supplierReference;

        return $this;
    }

    /**
     * Gets ean13
     *
     * @return string|null
     */
    public function getEan13()
    {
        return $this->container['ean13'];
    }

    /**
     * Sets ean13
     *
     * @param string|null $ean13 ean13
     *
     * @return self
     */
    public function setEan13($ean13)
    {
        $this->container['ean13'] = $ean13;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets ecotax
     *
     * @return float|null
     */
    public function getEcotax()
    {
        return $this->container['ecotax'];
    }

    /**
     * Sets ecotax
     *
     * @param float|null $ecotax ecotax
     *
     * @return self
     */
    public function setEcotax($ecotax)
    {
        $this->container['ecotax'] = $ecotax;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float|null $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets pricePerKilo
     *
     * @return float|null
     */
    public function getPricePerKilo()
    {
        return $this->container['pricePerKilo'];
    }

    /**
     * Sets pricePerKilo
     *
     * @param float|null $pricePerKilo pricePerKilo
     *
     * @return self
     */
    public function setPricePerKilo($pricePerKilo)
    {
        $this->container['pricePerKilo'] = $pricePerKilo;

        return $this;
    }

    /**
     * Gets pricePerLiter
     *
     * @return float|null
     */
    public function getPricePerLiter()
    {
        return $this->container['pricePerLiter'];
    }

    /**
     * Sets pricePerLiter
     *
     * @param float|null $pricePerLiter pricePerLiter
     *
     * @return self
     */
    public function setPricePerLiter($pricePerLiter)
    {
        $this->container['pricePerLiter'] = $pricePerLiter;

        return $this;
    }

    /**
     * Gets pricePerUnit
     *
     * @return float|null
     */
    public function getPricePerUnit()
    {
        return $this->container['pricePerUnit'];
    }

    /**
     * Sets pricePerUnit
     *
     * @param float|null $pricePerUnit pricePerUnit
     *
     * @return self
     */
    public function setPricePerUnit($pricePerUnit)
    {
        $this->container['pricePerUnit'] = $pricePerUnit;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string|null $condition condition
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content content
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

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


