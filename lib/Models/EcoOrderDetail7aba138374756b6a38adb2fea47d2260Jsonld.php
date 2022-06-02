<?php
/**
 * EcoOrderDetail7aba138374756b6a38adb2fea47d2260Jsonld
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
 * EcoOrderDetail7aba138374756b6a38adb2fea47d2260Jsonld Class Doc Comment
 *
 * @category Class
 * @package  Emonsite
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcoOrderDetail7aba138374756b6a38adb2fea47d2260Jsonld implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EcoOrderDetail:7aba138374756b6a38adb2fea47d2260:jsonld';

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
'product' => '',
'combination' => '',
'name' => 'string',
'url' => 'string',
'picture_url' => 'string',
'quantity' => 'int',
'tax_id' => 'string',
'reference' => 'string',
'weight' => 'float',
'reduction_price' => 'float',
'reduction_percent' => 'float',
'pu_ht' => 'float',
'pu_ttc' => 'float',
'downloadable_product' => 'bool',
'ean13' => 'string',
'custom_field' => 'string[]'    ];

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
'product' => null,
'combination' => null,
'name' => null,
'url' => null,
'picture_url' => null,
'quantity' => null,
'tax_id' => null,
'reference' => null,
'weight' => null,
'reduction_price' => null,
'reduction_percent' => null,
'pu_ht' => null,
'pu_ttc' => null,
'downloadable_product' => null,
'ean13' => null,
'custom_field' => null    ];

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
'product' => 'product',
'combination' => 'combination',
'name' => 'name',
'url' => 'url',
'picture_url' => 'pictureUrl',
'quantity' => 'quantity',
'tax_id' => 'taxId',
'reference' => 'reference',
'weight' => 'weight',
'reduction_price' => 'reductionPrice',
'reduction_percent' => 'reductionPercent',
'pu_ht' => 'puHt',
'pu_ttc' => 'puTtc',
'downloadable_product' => 'downloadableProduct',
'ean13' => 'ean13',
'custom_field' => 'customField'    ];

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
'product' => 'setProduct',
'combination' => 'setCombination',
'name' => 'setName',
'url' => 'setUrl',
'picture_url' => 'setPictureUrl',
'quantity' => 'setQuantity',
'tax_id' => 'setTaxId',
'reference' => 'setReference',
'weight' => 'setWeight',
'reduction_price' => 'setReductionPrice',
'reduction_percent' => 'setReductionPercent',
'pu_ht' => 'setPuHt',
'pu_ttc' => 'setPuTtc',
'downloadable_product' => 'setDownloadableProduct',
'ean13' => 'setEan13',
'custom_field' => 'setCustomField'    ];

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
'product' => 'getProduct',
'combination' => 'getCombination',
'name' => 'getName',
'url' => 'getUrl',
'picture_url' => 'getPictureUrl',
'quantity' => 'getQuantity',
'tax_id' => 'getTaxId',
'reference' => 'getReference',
'weight' => 'getWeight',
'reduction_price' => 'getReductionPrice',
'reduction_percent' => 'getReductionPercent',
'pu_ht' => 'getPuHt',
'pu_ttc' => 'getPuTtc',
'downloadable_product' => 'getDownloadableProduct',
'ean13' => 'getEan13',
'custom_field' => 'getCustomField'    ];

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
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['combination'] = isset($data['combination']) ? $data['combination'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['picture_url'] = isset($data['picture_url']) ? $data['picture_url'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['tax_id'] = isset($data['tax_id']) ? $data['tax_id'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['reduction_price'] = isset($data['reduction_price']) ? $data['reduction_price'] : null;
        $this->container['reduction_percent'] = isset($data['reduction_percent']) ? $data['reduction_percent'] : null;
        $this->container['pu_ht'] = isset($data['pu_ht']) ? $data['pu_ht'] : null;
        $this->container['pu_ttc'] = isset($data['pu_ttc']) ? $data['pu_ttc'] : null;
        $this->container['downloadable_product'] = isset($data['downloadable_product']) ? $data['downloadable_product'] : null;
        $this->container['ean13'] = isset($data['ean13']) ? $data['ean13'] : null;
        $this->container['custom_field'] = isset($data['custom_field']) ? $data['custom_field'] : null;
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
     * Gets product
     *
     * @return 
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param  $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets combination
     *
     * @return 
     */
    public function getCombination()
    {
        return $this->container['combination'];
    }

    /**
     * Sets combination
     *
     * @param  $combination combination
     *
     * @return $this
     */
    public function setCombination($combination)
    {
        $this->container['combination'] = $combination;

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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets picture_url
     *
     * @return string
     */
    public function getPictureUrl()
    {
        return $this->container['picture_url'];
    }

    /**
     * Sets picture_url
     *
     * @param string $picture_url picture_url
     *
     * @return $this
     */
    public function setPictureUrl($picture_url)
    {
        $this->container['picture_url'] = $picture_url;

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
     * Gets pu_ht
     *
     * @return float
     */
    public function getPuHt()
    {
        return $this->container['pu_ht'];
    }

    /**
     * Sets pu_ht
     *
     * @param float $pu_ht pu_ht
     *
     * @return $this
     */
    public function setPuHt($pu_ht)
    {
        $this->container['pu_ht'] = $pu_ht;

        return $this;
    }

    /**
     * Gets pu_ttc
     *
     * @return float
     */
    public function getPuTtc()
    {
        return $this->container['pu_ttc'];
    }

    /**
     * Sets pu_ttc
     *
     * @param float $pu_ttc pu_ttc
     *
     * @return $this
     */
    public function setPuTtc($pu_ttc)
    {
        $this->container['pu_ttc'] = $pu_ttc;

        return $this;
    }

    /**
     * Gets downloadable_product
     *
     * @return bool
     */
    public function getDownloadableProduct()
    {
        return $this->container['downloadable_product'];
    }

    /**
     * Sets downloadable_product
     *
     * @param bool $downloadable_product downloadable_product
     *
     * @return $this
     */
    public function setDownloadableProduct($downloadable_product)
    {
        $this->container['downloadable_product'] = $downloadable_product;

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
     * Gets custom_field
     *
     * @return string[]
     */
    public function getCustomField()
    {
        return $this->container['custom_field'];
    }

    /**
     * Sets custom_field
     *
     * @param string[] $custom_field custom_field
     *
     * @return $this
     */
    public function setCustomField($custom_field)
    {
        $this->container['custom_field'] = $custom_field;

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
