<?php
/**
 * EcoProduct91429ff1a736cfe91b412a9d5d2f8bd1
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
 * EcoProduct91429ff1a736cfe91b412a9d5d2f8bd1 Class Doc Comment
 *
 * @category Class
 * @package  Emonsite
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcoProduct91429ff1a736cfe91b412a9d5d2f8bd1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EcoProduct:91429ff1a736cfe91b412a9d5d2f8bd1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'published' => 'bool',
'category_id' => 'string',
'supplier_id' => 'string',
'manufacturer_id' => 'string',
'tax_id' => 'string',
'reference' => 'string',
'supplier_reference' => 'string',
'ean13' => 'string',
'quantity' => 'int',
'num_sales' => 'int',
'out_of_stock' => 'int',
'price' => 'float',
'ecotax' => 'float',
'has_reduction' => 'bool',
'reduction_by_category_id' => 'string',
'has_reduction_by_quantity' => 'bool',
'reduction_price' => 'float',
'reduction_percent' => 'float',
'reduction_from' => '\DateTime',
'reduction_to' => '\DateTime',
'on_sale' => 'bool',
'weight' => 'float',
'price_per_kilo' => 'float',
'price_per_liter' => 'float',
'price_per_unit' => 'float',
'condition' => 'string',
'title' => 'string',
'description' => 'string',
'content' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'published' => null,
'category_id' => null,
'supplier_id' => null,
'manufacturer_id' => null,
'tax_id' => null,
'reference' => null,
'supplier_reference' => null,
'ean13' => null,
'quantity' => null,
'num_sales' => null,
'out_of_stock' => null,
'price' => null,
'ecotax' => null,
'has_reduction' => null,
'reduction_by_category_id' => null,
'has_reduction_by_quantity' => null,
'reduction_price' => null,
'reduction_percent' => null,
'reduction_from' => 'date-time',
'reduction_to' => 'date-time',
'on_sale' => null,
'weight' => null,
'price_per_kilo' => null,
'price_per_liter' => null,
'price_per_unit' => null,
'condition' => null,
'title' => null,
'description' => null,
'content' => null    ];

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
        'published' => 'published',
'category_id' => 'categoryId',
'supplier_id' => 'supplierId',
'manufacturer_id' => 'manufacturerId',
'tax_id' => 'taxId',
'reference' => 'reference',
'supplier_reference' => 'supplierReference',
'ean13' => 'ean13',
'quantity' => 'quantity',
'num_sales' => 'numSales',
'out_of_stock' => 'outOfStock',
'price' => 'price',
'ecotax' => 'ecotax',
'has_reduction' => 'hasReduction',
'reduction_by_category_id' => 'reductionByCategoryId',
'has_reduction_by_quantity' => 'hasReductionByQuantity',
'reduction_price' => 'reductionPrice',
'reduction_percent' => 'reductionPercent',
'reduction_from' => 'reductionFrom',
'reduction_to' => 'reductionTo',
'on_sale' => 'onSale',
'weight' => 'weight',
'price_per_kilo' => 'pricePerKilo',
'price_per_liter' => 'pricePerLiter',
'price_per_unit' => 'pricePerUnit',
'condition' => 'condition',
'title' => 'title',
'description' => 'description',
'content' => 'content'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'published' => 'setPublished',
'category_id' => 'setCategoryId',
'supplier_id' => 'setSupplierId',
'manufacturer_id' => 'setManufacturerId',
'tax_id' => 'setTaxId',
'reference' => 'setReference',
'supplier_reference' => 'setSupplierReference',
'ean13' => 'setEan13',
'quantity' => 'setQuantity',
'num_sales' => 'setNumSales',
'out_of_stock' => 'setOutOfStock',
'price' => 'setPrice',
'ecotax' => 'setEcotax',
'has_reduction' => 'setHasReduction',
'reduction_by_category_id' => 'setReductionByCategoryId',
'has_reduction_by_quantity' => 'setHasReductionByQuantity',
'reduction_price' => 'setReductionPrice',
'reduction_percent' => 'setReductionPercent',
'reduction_from' => 'setReductionFrom',
'reduction_to' => 'setReductionTo',
'on_sale' => 'setOnSale',
'weight' => 'setWeight',
'price_per_kilo' => 'setPricePerKilo',
'price_per_liter' => 'setPricePerLiter',
'price_per_unit' => 'setPricePerUnit',
'condition' => 'setCondition',
'title' => 'setTitle',
'description' => 'setDescription',
'content' => 'setContent'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'published' => 'getPublished',
'category_id' => 'getCategoryId',
'supplier_id' => 'getSupplierId',
'manufacturer_id' => 'getManufacturerId',
'tax_id' => 'getTaxId',
'reference' => 'getReference',
'supplier_reference' => 'getSupplierReference',
'ean13' => 'getEan13',
'quantity' => 'getQuantity',
'num_sales' => 'getNumSales',
'out_of_stock' => 'getOutOfStock',
'price' => 'getPrice',
'ecotax' => 'getEcotax',
'has_reduction' => 'getHasReduction',
'reduction_by_category_id' => 'getReductionByCategoryId',
'has_reduction_by_quantity' => 'getHasReductionByQuantity',
'reduction_price' => 'getReductionPrice',
'reduction_percent' => 'getReductionPercent',
'reduction_from' => 'getReductionFrom',
'reduction_to' => 'getReductionTo',
'on_sale' => 'getOnSale',
'weight' => 'getWeight',
'price_per_kilo' => 'getPricePerKilo',
'price_per_liter' => 'getPricePerLiter',
'price_per_unit' => 'getPricePerUnit',
'condition' => 'getCondition',
'title' => 'getTitle',
'description' => 'getDescription',
'content' => 'getContent'    ];

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
        $this->container['published'] = isset($data['published']) ? $data['published'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['supplier_id'] = isset($data['supplier_id']) ? $data['supplier_id'] : null;
        $this->container['manufacturer_id'] = isset($data['manufacturer_id']) ? $data['manufacturer_id'] : null;
        $this->container['tax_id'] = isset($data['tax_id']) ? $data['tax_id'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['supplier_reference'] = isset($data['supplier_reference']) ? $data['supplier_reference'] : null;
        $this->container['ean13'] = isset($data['ean13']) ? $data['ean13'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['num_sales'] = isset($data['num_sales']) ? $data['num_sales'] : null;
        $this->container['out_of_stock'] = isset($data['out_of_stock']) ? $data['out_of_stock'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['ecotax'] = isset($data['ecotax']) ? $data['ecotax'] : null;
        $this->container['has_reduction'] = isset($data['has_reduction']) ? $data['has_reduction'] : null;
        $this->container['reduction_by_category_id'] = isset($data['reduction_by_category_id']) ? $data['reduction_by_category_id'] : null;
        $this->container['has_reduction_by_quantity'] = isset($data['has_reduction_by_quantity']) ? $data['has_reduction_by_quantity'] : null;
        $this->container['reduction_price'] = isset($data['reduction_price']) ? $data['reduction_price'] : null;
        $this->container['reduction_percent'] = isset($data['reduction_percent']) ? $data['reduction_percent'] : null;
        $this->container['reduction_from'] = isset($data['reduction_from']) ? $data['reduction_from'] : null;
        $this->container['reduction_to'] = isset($data['reduction_to']) ? $data['reduction_to'] : null;
        $this->container['on_sale'] = isset($data['on_sale']) ? $data['on_sale'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['price_per_kilo'] = isset($data['price_per_kilo']) ? $data['price_per_kilo'] : null;
        $this->container['price_per_liter'] = isset($data['price_per_liter']) ? $data['price_per_liter'] : null;
        $this->container['price_per_unit'] = isset($data['price_per_unit']) ? $data['price_per_unit'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
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
     * Gets published
     *
     * @return bool
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool $published published
     *
     * @return $this
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string $category_id category_id
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets supplier_id
     *
     * @return string
     */
    public function getSupplierId()
    {
        return $this->container['supplier_id'];
    }

    /**
     * Sets supplier_id
     *
     * @param string $supplier_id supplier_id
     *
     * @return $this
     */
    public function setSupplierId($supplier_id)
    {
        $this->container['supplier_id'] = $supplier_id;

        return $this;
    }

    /**
     * Gets manufacturer_id
     *
     * @return string
     */
    public function getManufacturerId()
    {
        return $this->container['manufacturer_id'];
    }

    /**
     * Sets manufacturer_id
     *
     * @param string $manufacturer_id manufacturer_id
     *
     * @return $this
     */
    public function setManufacturerId($manufacturer_id)
    {
        $this->container['manufacturer_id'] = $manufacturer_id;

        return $this;
    }

    /**
     * Gets tax_id
     *
     * @return string
     */
    public function getTaxId()
    {
        return $this->container['tax_id'];
    }

    /**
     * Sets tax_id
     *
     * @param string $tax_id tax_id
     *
     * @return $this
     */
    public function setTaxId($tax_id)
    {
        $this->container['tax_id'] = $tax_id;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets supplier_reference
     *
     * @return string
     */
    public function getSupplierReference()
    {
        return $this->container['supplier_reference'];
    }

    /**
     * Sets supplier_reference
     *
     * @param string $supplier_reference supplier_reference
     *
     * @return $this
     */
    public function setSupplierReference($supplier_reference)
    {
        $this->container['supplier_reference'] = $supplier_reference;

        return $this;
    }

    /**
     * Gets ean13
     *
     * @return string
     */
    public function getEan13()
    {
        return $this->container['ean13'];
    }

    /**
     * Sets ean13
     *
     * @param string $ean13 ean13
     *
     * @return $this
     */
    public function setEan13($ean13)
    {
        $this->container['ean13'] = $ean13;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets num_sales
     *
     * @return int
     */
    public function getNumSales()
    {
        return $this->container['num_sales'];
    }

    /**
     * Sets num_sales
     *
     * @param int $num_sales num_sales
     *
     * @return $this
     */
    public function setNumSales($num_sales)
    {
        $this->container['num_sales'] = $num_sales;

        return $this;
    }

    /**
     * Gets out_of_stock
     *
     * @return int
     */
    public function getOutOfStock()
    {
        return $this->container['out_of_stock'];
    }

    /**
     * Sets out_of_stock
     *
     * @param int $out_of_stock out_of_stock
     *
     * @return $this
     */
    public function setOutOfStock($out_of_stock)
    {
        $this->container['out_of_stock'] = $out_of_stock;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets ecotax
     *
     * @return float
     */
    public function getEcotax()
    {
        return $this->container['ecotax'];
    }

    /**
     * Sets ecotax
     *
     * @param float $ecotax ecotax
     *
     * @return $this
     */
    public function setEcotax($ecotax)
    {
        $this->container['ecotax'] = $ecotax;

        return $this;
    }

    /**
     * Gets has_reduction
     *
     * @return bool
     */
    public function getHasReduction()
    {
        return $this->container['has_reduction'];
    }

    /**
     * Sets has_reduction
     *
     * @param bool $has_reduction has_reduction
     *
     * @return $this
     */
    public function setHasReduction($has_reduction)
    {
        $this->container['has_reduction'] = $has_reduction;

        return $this;
    }

    /**
     * Gets reduction_by_category_id
     *
     * @return string
     */
    public function getReductionByCategoryId()
    {
        return $this->container['reduction_by_category_id'];
    }

    /**
     * Sets reduction_by_category_id
     *
     * @param string $reduction_by_category_id reduction_by_category_id
     *
     * @return $this
     */
    public function setReductionByCategoryId($reduction_by_category_id)
    {
        $this->container['reduction_by_category_id'] = $reduction_by_category_id;

        return $this;
    }

    /**
     * Gets has_reduction_by_quantity
     *
     * @return bool
     */
    public function getHasReductionByQuantity()
    {
        return $this->container['has_reduction_by_quantity'];
    }

    /**
     * Sets has_reduction_by_quantity
     *
     * @param bool $has_reduction_by_quantity has_reduction_by_quantity
     *
     * @return $this
     */
    public function setHasReductionByQuantity($has_reduction_by_quantity)
    {
        $this->container['has_reduction_by_quantity'] = $has_reduction_by_quantity;

        return $this;
    }

    /**
     * Gets reduction_price
     *
     * @return float
     */
    public function getReductionPrice()
    {
        return $this->container['reduction_price'];
    }

    /**
     * Sets reduction_price
     *
     * @param float $reduction_price reduction_price
     *
     * @return $this
     */
    public function setReductionPrice($reduction_price)
    {
        $this->container['reduction_price'] = $reduction_price;

        return $this;
    }

    /**
     * Gets reduction_percent
     *
     * @return float
     */
    public function getReductionPercent()
    {
        return $this->container['reduction_percent'];
    }

    /**
     * Sets reduction_percent
     *
     * @param float $reduction_percent reduction_percent
     *
     * @return $this
     */
    public function setReductionPercent($reduction_percent)
    {
        $this->container['reduction_percent'] = $reduction_percent;

        return $this;
    }

    /**
     * Gets reduction_from
     *
     * @return \DateTime
     */
    public function getReductionFrom()
    {
        return $this->container['reduction_from'];
    }

    /**
     * Sets reduction_from
     *
     * @param \DateTime $reduction_from reduction_from
     *
     * @return $this
     */
    public function setReductionFrom($reduction_from)
    {
        $this->container['reduction_from'] = $reduction_from;

        return $this;
    }

    /**
     * Gets reduction_to
     *
     * @return \DateTime
     */
    public function getReductionTo()
    {
        return $this->container['reduction_to'];
    }

    /**
     * Sets reduction_to
     *
     * @param \DateTime $reduction_to reduction_to
     *
     * @return $this
     */
    public function setReductionTo($reduction_to)
    {
        $this->container['reduction_to'] = $reduction_to;

        return $this;
    }

    /**
     * Gets on_sale
     *
     * @return bool
     */
    public function getOnSale()
    {
        return $this->container['on_sale'];
    }

    /**
     * Sets on_sale
     *
     * @param bool $on_sale on_sale
     *
     * @return $this
     */
    public function setOnSale($on_sale)
    {
        $this->container['on_sale'] = $on_sale;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets price_per_kilo
     *
     * @return float
     */
    public function getPricePerKilo()
    {
        return $this->container['price_per_kilo'];
    }

    /**
     * Sets price_per_kilo
     *
     * @param float $price_per_kilo price_per_kilo
     *
     * @return $this
     */
    public function setPricePerKilo($price_per_kilo)
    {
        $this->container['price_per_kilo'] = $price_per_kilo;

        return $this;
    }

    /**
     * Gets price_per_liter
     *
     * @return float
     */
    public function getPricePerLiter()
    {
        return $this->container['price_per_liter'];
    }

    /**
     * Sets price_per_liter
     *
     * @param float $price_per_liter price_per_liter
     *
     * @return $this
     */
    public function setPricePerLiter($price_per_liter)
    {
        $this->container['price_per_liter'] = $price_per_liter;

        return $this;
    }

    /**
     * Gets price_per_unit
     *
     * @return float
     */
    public function getPricePerUnit()
    {
        return $this->container['price_per_unit'];
    }

    /**
     * Sets price_per_unit
     *
     * @param float $price_per_unit price_per_unit
     *
     * @return $this
     */
    public function setPricePerUnit($price_per_unit)
    {
        $this->container['price_per_unit'] = $price_per_unit;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content content
     *
     * @return $this
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