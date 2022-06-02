<?php
/**
 * EcoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld
 *
 * PHP version 5
 *
 * @category Class
 * @package  EmonsiteApi
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

namespace EmonsiteApi\Models;

use \ArrayAccess;
use \EmonsiteApi\ObjectSerializer;

/**
 * EcoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EcoDiscount:d3d9b67a56fd84ba8bd9bd07a15bcf49:jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
'id' => 'string',
'type' => 'string',
'site_id' => 'string',
'code' => 'string',
'reduction_price' => 'float',
'reduction_percent' => 'float',
'free_shipping' => 'bool',
'free_wrapping' => 'bool',
'reduction_from' => 'int',
'reduction_to' => 'int',
'reduction_purchase_minimum' => 'float',
'quantity' => 'int',
'active' => 'bool',
'one_by_user' => 'bool',
'display' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
'id' => null,
'type' => null,
'site_id' => null,
'code' => null,
'reduction_price' => null,
'reduction_percent' => null,
'free_shipping' => null,
'free_wrapping' => null,
'reduction_from' => null,
'reduction_to' => null,
'reduction_purchase_minimum' => null,
'quantity' => null,
'active' => null,
'one_by_user' => null,
'display' => null    ];

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
'site_id' => 'siteId',
'code' => 'code',
'reduction_price' => 'reductionPrice',
'reduction_percent' => 'reductionPercent',
'free_shipping' => 'freeShipping',
'free_wrapping' => 'freeWrapping',
'reduction_from' => 'reductionFrom',
'reduction_to' => 'reductionTo',
'reduction_purchase_minimum' => 'reductionPurchaseMinimum',
'quantity' => 'quantity',
'active' => 'active',
'one_by_user' => 'oneByUser',
'display' => 'display'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
'id' => 'setId',
'type' => 'setType',
'site_id' => 'setSiteId',
'code' => 'setCode',
'reduction_price' => 'setReductionPrice',
'reduction_percent' => 'setReductionPercent',
'free_shipping' => 'setFreeShipping',
'free_wrapping' => 'setFreeWrapping',
'reduction_from' => 'setReductionFrom',
'reduction_to' => 'setReductionTo',
'reduction_purchase_minimum' => 'setReductionPurchaseMinimum',
'quantity' => 'setQuantity',
'active' => 'setActive',
'one_by_user' => 'setOneByUser',
'display' => 'setDisplay'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
'id' => 'getId',
'type' => 'getType',
'site_id' => 'getSiteId',
'code' => 'getCode',
'reduction_price' => 'getReductionPrice',
'reduction_percent' => 'getReductionPercent',
'free_shipping' => 'getFreeShipping',
'free_wrapping' => 'getFreeWrapping',
'reduction_from' => 'getReductionFrom',
'reduction_to' => 'getReductionTo',
'reduction_purchase_minimum' => 'getReductionPurchaseMinimum',
'quantity' => 'getQuantity',
'active' => 'getActive',
'one_by_user' => 'getOneByUser',
'display' => 'getDisplay'    ];

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
        $this->container['site_id'] = isset($data['site_id']) ? $data['site_id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['reduction_price'] = isset($data['reduction_price']) ? $data['reduction_price'] : null;
        $this->container['reduction_percent'] = isset($data['reduction_percent']) ? $data['reduction_percent'] : null;
        $this->container['free_shipping'] = isset($data['free_shipping']) ? $data['free_shipping'] : null;
        $this->container['free_wrapping'] = isset($data['free_wrapping']) ? $data['free_wrapping'] : null;
        $this->container['reduction_from'] = isset($data['reduction_from']) ? $data['reduction_from'] : null;
        $this->container['reduction_to'] = isset($data['reduction_to']) ? $data['reduction_to'] : null;
        $this->container['reduction_purchase_minimum'] = isset($data['reduction_purchase_minimum']) ? $data['reduction_purchase_minimum'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['one_by_user'] = isset($data['one_by_user']) ? $data['one_by_user'] : null;
        $this->container['display'] = isset($data['display']) ? $data['display'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['site_id'] === null) {
            $invalidProperties[] = "'site_id' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
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
     * Gets site_id
     *
     * @return string
     */
    public function getSiteId()
    {
        return $this->container['site_id'];
    }

    /**
     * Sets site_id
     *
     * @param string $site_id site_id
     *
     * @return $this
     */
    public function setSiteId($site_id)
    {
        $this->container['site_id'] = $site_id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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
     * Gets free_shipping
     *
     * @return bool
     */
    public function getFreeShipping()
    {
        return $this->container['free_shipping'];
    }

    /**
     * Sets free_shipping
     *
     * @param bool $free_shipping free_shipping
     *
     * @return $this
     */
    public function setFreeShipping($free_shipping)
    {
        $this->container['free_shipping'] = $free_shipping;

        return $this;
    }

    /**
     * Gets free_wrapping
     *
     * @return bool
     */
    public function getFreeWrapping()
    {
        return $this->container['free_wrapping'];
    }

    /**
     * Sets free_wrapping
     *
     * @param bool $free_wrapping free_wrapping
     *
     * @return $this
     */
    public function setFreeWrapping($free_wrapping)
    {
        $this->container['free_wrapping'] = $free_wrapping;

        return $this;
    }

    /**
     * Gets reduction_from
     *
     * @return int
     */
    public function getReductionFrom()
    {
        return $this->container['reduction_from'];
    }

    /**
     * Sets reduction_from
     *
     * @param int $reduction_from reduction_from
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
     * @return int
     */
    public function getReductionTo()
    {
        return $this->container['reduction_to'];
    }

    /**
     * Sets reduction_to
     *
     * @param int $reduction_to reduction_to
     *
     * @return $this
     */
    public function setReductionTo($reduction_to)
    {
        $this->container['reduction_to'] = $reduction_to;

        return $this;
    }

    /**
     * Gets reduction_purchase_minimum
     *
     * @return float
     */
    public function getReductionPurchaseMinimum()
    {
        return $this->container['reduction_purchase_minimum'];
    }

    /**
     * Sets reduction_purchase_minimum
     *
     * @param float $reduction_purchase_minimum reduction_purchase_minimum
     *
     * @return $this
     */
    public function setReductionPurchaseMinimum($reduction_purchase_minimum)
    {
        $this->container['reduction_purchase_minimum'] = $reduction_purchase_minimum;

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
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets one_by_user
     *
     * @return bool
     */
    public function getOneByUser()
    {
        return $this->container['one_by_user'];
    }

    /**
     * Sets one_by_user
     *
     * @param bool $one_by_user one_by_user
     *
     * @return $this
     */
    public function setOneByUser($one_by_user)
    {
        $this->container['one_by_user'] = $one_by_user;

        return $this;
    }

    /**
     * Gets display
     *
     * @return bool
     */
    public function getDisplay()
    {
        return $this->container['display'];
    }

    /**
     * Sets display
     *
     * @param bool $display display
     *
     * @return $this
     */
    public function setDisplay($display)
    {
        $this->container['display'] = $display;

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
