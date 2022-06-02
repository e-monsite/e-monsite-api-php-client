<?php
/**
 * EcoProduct598f8229d42c1ae36352f3a2f993e71a
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
 * EcoProduct598f8229d42c1ae36352f3a2f993e71a Class Doc Comment
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
class EcoProduct598f8229d42c1ae36352f3a2f993e71a implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EcoProduct:598f8229d42c1ae36352f3a2f993e71a';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'name' => 'string',
        'trashed' => 'bool',
        'category' => 'string',
        'published' => 'bool',
        'publishFrom' => '\DateTime',
        'supplier' => 'string',
        'manufacturer' => 'string',
        'tax' => 'string',
        'reference' => 'string',
        'supplierReference' => 'string',
        'ean13' => 'string',
        'quantity' => 'int',
        'numSales' => 'int',
        'outOfStock' => 'string',
        'wholesalePrice' => 'float',
        'price' => 'float',
        'ecotax' => 'float',
        'hasReduction' => 'bool',
        'weight' => 'float',
        'pricePerKilo' => 'float',
        'pricePerLiter' => 'float',
        'pricePerUnit' => 'float',
        'condition' => 'string',
        'dlProduct' => 'bool',
        'dlFilepath' => 'string',
        'defaultPicture' => 'string',
        'pictures' => 'string[]'
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
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'name' => null,
        'trashed' => null,
        'category' => 'iri-reference',
        'published' => null,
        'publishFrom' => 'date-time',
        'supplier' => 'iri-reference',
        'manufacturer' => 'iri-reference',
        'tax' => 'iri-reference',
        'reference' => null,
        'supplierReference' => null,
        'ean13' => null,
        'quantity' => null,
        'numSales' => null,
        'outOfStock' => null,
        'wholesalePrice' => null,
        'price' => null,
        'ecotax' => null,
        'hasReduction' => null,
        'weight' => null,
        'pricePerKilo' => null,
        'pricePerLiter' => null,
        'pricePerUnit' => null,
        'condition' => null,
        'dlProduct' => null,
        'dlFilepath' => null,
        'defaultPicture' => 'iri-reference',
        'pictures' => null
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
        'createdAt' => 'createdAt',
        'updatedAt' => 'updatedAt',
        'name' => 'name',
        'trashed' => 'trashed',
        'category' => 'category',
        'published' => 'published',
        'publishFrom' => 'publishFrom',
        'supplier' => 'supplier',
        'manufacturer' => 'manufacturer',
        'tax' => 'tax',
        'reference' => 'reference',
        'supplierReference' => 'supplierReference',
        'ean13' => 'ean13',
        'quantity' => 'quantity',
        'numSales' => 'numSales',
        'outOfStock' => 'outOfStock',
        'wholesalePrice' => 'wholesalePrice',
        'price' => 'price',
        'ecotax' => 'ecotax',
        'hasReduction' => 'hasReduction',
        'weight' => 'weight',
        'pricePerKilo' => 'pricePerKilo',
        'pricePerLiter' => 'pricePerLiter',
        'pricePerUnit' => 'pricePerUnit',
        'condition' => 'condition',
        'dlProduct' => 'dlProduct',
        'dlFilepath' => 'dlFilepath',
        'defaultPicture' => 'defaultPicture',
        'pictures' => 'pictures'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'name' => 'setName',
        'trashed' => 'setTrashed',
        'category' => 'setCategory',
        'published' => 'setPublished',
        'publishFrom' => 'setPublishFrom',
        'supplier' => 'setSupplier',
        'manufacturer' => 'setManufacturer',
        'tax' => 'setTax',
        'reference' => 'setReference',
        'supplierReference' => 'setSupplierReference',
        'ean13' => 'setEan13',
        'quantity' => 'setQuantity',
        'numSales' => 'setNumSales',
        'outOfStock' => 'setOutOfStock',
        'wholesalePrice' => 'setWholesalePrice',
        'price' => 'setPrice',
        'ecotax' => 'setEcotax',
        'hasReduction' => 'setHasReduction',
        'weight' => 'setWeight',
        'pricePerKilo' => 'setPricePerKilo',
        'pricePerLiter' => 'setPricePerLiter',
        'pricePerUnit' => 'setPricePerUnit',
        'condition' => 'setCondition',
        'dlProduct' => 'setDlProduct',
        'dlFilepath' => 'setDlFilepath',
        'defaultPicture' => 'setDefaultPicture',
        'pictures' => 'setPictures'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'name' => 'getName',
        'trashed' => 'getTrashed',
        'category' => 'getCategory',
        'published' => 'getPublished',
        'publishFrom' => 'getPublishFrom',
        'supplier' => 'getSupplier',
        'manufacturer' => 'getManufacturer',
        'tax' => 'getTax',
        'reference' => 'getReference',
        'supplierReference' => 'getSupplierReference',
        'ean13' => 'getEan13',
        'quantity' => 'getQuantity',
        'numSales' => 'getNumSales',
        'outOfStock' => 'getOutOfStock',
        'wholesalePrice' => 'getWholesalePrice',
        'price' => 'getPrice',
        'ecotax' => 'getEcotax',
        'hasReduction' => 'getHasReduction',
        'weight' => 'getWeight',
        'pricePerKilo' => 'getPricePerKilo',
        'pricePerLiter' => 'getPricePerLiter',
        'pricePerUnit' => 'getPricePerUnit',
        'condition' => 'getCondition',
        'dlProduct' => 'getDlProduct',
        'dlFilepath' => 'getDlFilepath',
        'defaultPicture' => 'getDefaultPicture',
        'pictures' => 'getPictures'
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
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['updatedAt'] = $data['updatedAt'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['trashed'] = $data['trashed'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['published'] = $data['published'] ?? null;
        $this->container['publishFrom'] = $data['publishFrom'] ?? null;
        $this->container['supplier'] = $data['supplier'] ?? null;
        $this->container['manufacturer'] = $data['manufacturer'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['supplierReference'] = $data['supplierReference'] ?? null;
        $this->container['ean13'] = $data['ean13'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['numSales'] = $data['numSales'] ?? null;
        $this->container['outOfStock'] = $data['outOfStock'] ?? null;
        $this->container['wholesalePrice'] = $data['wholesalePrice'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['ecotax'] = $data['ecotax'] ?? null;
        $this->container['hasReduction'] = $data['hasReduction'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['pricePerKilo'] = $data['pricePerKilo'] ?? null;
        $this->container['pricePerLiter'] = $data['pricePerLiter'] ?? null;
        $this->container['pricePerUnit'] = $data['pricePerUnit'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['dlProduct'] = $data['dlProduct'] ?? null;
        $this->container['dlFilepath'] = $data['dlFilepath'] ?? null;
        $this->container['defaultPicture'] = $data['defaultPicture'] ?? null;
        $this->container['pictures'] = $data['pictures'] ?? null;
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
     * @return \DateTime|null
     */
    public function getPublishFrom()
    {
        return $this->container['publishFrom'];
    }

    /**
     * Sets publishFrom
     *
     * @param \DateTime|null $publishFrom publishFrom
     *
     * @return self
     */
    public function setPublishFrom($publishFrom)
    {
        $this->container['publishFrom'] = $publishFrom;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return string|null
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param string|null $supplier supplier
     *
     * @return self
     */
    public function setSupplier($supplier)
    {
        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string|null
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string|null $manufacturer manufacturer
     *
     * @return self
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return string|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param string|null $tax tax
     *
     * @return self
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

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
     * Gets numSales
     *
     * @return int|null
     */
    public function getNumSales()
    {
        return $this->container['numSales'];
    }

    /**
     * Sets numSales
     *
     * @param int|null $numSales numSales
     *
     * @return self
     */
    public function setNumSales($numSales)
    {
        $this->container['numSales'] = $numSales;

        return $this;
    }

    /**
     * Gets outOfStock
     *
     * @return string|null
     */
    public function getOutOfStock()
    {
        return $this->container['outOfStock'];
    }

    /**
     * Sets outOfStock
     *
     * @param string|null $outOfStock outOfStock
     *
     * @return self
     */
    public function setOutOfStock($outOfStock)
    {
        $this->container['outOfStock'] = $outOfStock;

        return $this;
    }

    /**
     * Gets wholesalePrice
     *
     * @return float|null
     */
    public function getWholesalePrice()
    {
        return $this->container['wholesalePrice'];
    }

    /**
     * Sets wholesalePrice
     *
     * @param float|null $wholesalePrice wholesalePrice
     *
     * @return self
     */
    public function setWholesalePrice($wholesalePrice)
    {
        $this->container['wholesalePrice'] = $wholesalePrice;

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
     * Gets hasReduction
     *
     * @return bool|null
     */
    public function getHasReduction()
    {
        return $this->container['hasReduction'];
    }

    /**
     * Sets hasReduction
     *
     * @param bool|null $hasReduction hasReduction
     *
     * @return self
     */
    public function setHasReduction($hasReduction)
    {
        $this->container['hasReduction'] = $hasReduction;

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
     * Gets dlProduct
     *
     * @return bool|null
     */
    public function getDlProduct()
    {
        return $this->container['dlProduct'];
    }

    /**
     * Sets dlProduct
     *
     * @param bool|null $dlProduct dlProduct
     *
     * @return self
     */
    public function setDlProduct($dlProduct)
    {
        $this->container['dlProduct'] = $dlProduct;

        return $this;
    }

    /**
     * Gets dlFilepath
     *
     * @return string|null
     */
    public function getDlFilepath()
    {
        return $this->container['dlFilepath'];
    }

    /**
     * Sets dlFilepath
     *
     * @param string|null $dlFilepath dlFilepath
     *
     * @return self
     */
    public function setDlFilepath($dlFilepath)
    {
        $this->container['dlFilepath'] = $dlFilepath;

        return $this;
    }

    /**
     * Gets defaultPicture
     *
     * @return string|null
     */
    public function getDefaultPicture()
    {
        return $this->container['defaultPicture'];
    }

    /**
     * Sets defaultPicture
     *
     * @param string|null $defaultPicture defaultPicture
     *
     * @return self
     */
    public function setDefaultPicture($defaultPicture)
    {
        $this->container['defaultPicture'] = $defaultPicture;

        return $this;
    }

    /**
     * Gets pictures
     *
     * @return string[]|null
     */
    public function getPictures()
    {
        return $this->container['pictures'];
    }

    /**
     * Sets pictures
     *
     * @param string[]|null $pictures pictures
     *
     * @return self
     */
    public function setPictures($pictures)
    {
        $this->container['pictures'] = $pictures;

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


