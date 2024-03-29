<?php
/**
 * EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld
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
 * EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld Class Doc Comment
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
class EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EcoDiscount:9b4a1b3cb469f303a66926f3d9bc3ad0:jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'context' => 'string',
        'id' => 'string',
        'type' => 'string',
        'id' => 'string',
        'code' => 'string',
        'reductionPrice' => 'float',
        'reductionPercent' => 'float',
        'freeShipping' => 'bool',
        'freeWrapping' => 'bool',
        'reductionFrom' => '\DateTime',
        'reductionTo' => '\DateTime',
        'reductionPurchaseMinimum' => 'float',
        'quantity' => 'int',
        'active' => 'bool',
        'oneByUser' => 'bool',
        'display' => 'bool'
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
        'id' => null,
        'code' => null,
        'reductionPrice' => null,
        'reductionPercent' => null,
        'freeShipping' => null,
        'freeWrapping' => null,
        'reductionFrom' => 'date-time',
        'reductionTo' => 'date-time',
        'reductionPurchaseMinimum' => null,
        'quantity' => null,
        'active' => null,
        'oneByUser' => null,
        'display' => null
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
        'id' => 'id',
        'code' => 'code',
        'reductionPrice' => 'reductionPrice',
        'reductionPercent' => 'reductionPercent',
        'freeShipping' => 'freeShipping',
        'freeWrapping' => 'freeWrapping',
        'reductionFrom' => 'reductionFrom',
        'reductionTo' => 'reductionTo',
        'reductionPurchaseMinimum' => 'reductionPurchaseMinimum',
        'quantity' => 'quantity',
        'active' => 'active',
        'oneByUser' => 'oneByUser',
        'display' => 'display'
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
        'id' => 'setId',
        'code' => 'setCode',
        'reductionPrice' => 'setReductionPrice',
        'reductionPercent' => 'setReductionPercent',
        'freeShipping' => 'setFreeShipping',
        'freeWrapping' => 'setFreeWrapping',
        'reductionFrom' => 'setReductionFrom',
        'reductionTo' => 'setReductionTo',
        'reductionPurchaseMinimum' => 'setReductionPurchaseMinimum',
        'quantity' => 'setQuantity',
        'active' => 'setActive',
        'oneByUser' => 'setOneByUser',
        'display' => 'setDisplay'
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
        'id' => 'getId',
        'code' => 'getCode',
        'reductionPrice' => 'getReductionPrice',
        'reductionPercent' => 'getReductionPercent',
        'freeShipping' => 'getFreeShipping',
        'freeWrapping' => 'getFreeWrapping',
        'reductionFrom' => 'getReductionFrom',
        'reductionTo' => 'getReductionTo',
        'reductionPurchaseMinimum' => 'getReductionPurchaseMinimum',
        'quantity' => 'getQuantity',
        'active' => 'getActive',
        'oneByUser' => 'getOneByUser',
        'display' => 'getDisplay'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['reductionPrice'] = $data['reductionPrice'] ?? null;
        $this->container['reductionPercent'] = $data['reductionPercent'] ?? null;
        $this->container['freeShipping'] = $data['freeShipping'] ?? null;
        $this->container['freeWrapping'] = $data['freeWrapping'] ?? null;
        $this->container['reductionFrom'] = $data['reductionFrom'] ?? null;
        $this->container['reductionTo'] = $data['reductionTo'] ?? null;
        $this->container['reductionPurchaseMinimum'] = $data['reductionPurchaseMinimum'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['oneByUser'] = $data['oneByUser'] ?? null;
        $this->container['display'] = $data['display'] ?? null;
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
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets reductionPrice
     *
     * @return float|null
     */
    public function getReductionPrice()
    {
        return $this->container['reductionPrice'];
    }

    /**
     * Sets reductionPrice
     *
     * @param float|null $reductionPrice reductionPrice
     *
     * @return self
     */
    public function setReductionPrice($reductionPrice)
    {
        $this->container['reductionPrice'] = $reductionPrice;

        return $this;
    }

    /**
     * Gets reductionPercent
     *
     * @return float|null
     */
    public function getReductionPercent()
    {
        return $this->container['reductionPercent'];
    }

    /**
     * Sets reductionPercent
     *
     * @param float|null $reductionPercent reductionPercent
     *
     * @return self
     */
    public function setReductionPercent($reductionPercent)
    {
        $this->container['reductionPercent'] = $reductionPercent;

        return $this;
    }

    /**
     * Gets freeShipping
     *
     * @return bool|null
     */
    public function getFreeShipping()
    {
        return $this->container['freeShipping'];
    }

    /**
     * Sets freeShipping
     *
     * @param bool|null $freeShipping freeShipping
     *
     * @return self
     */
    public function setFreeShipping($freeShipping)
    {
        $this->container['freeShipping'] = $freeShipping;

        return $this;
    }

    /**
     * Gets freeWrapping
     *
     * @return bool|null
     */
    public function getFreeWrapping()
    {
        return $this->container['freeWrapping'];
    }

    /**
     * Sets freeWrapping
     *
     * @param bool|null $freeWrapping freeWrapping
     *
     * @return self
     */
    public function setFreeWrapping($freeWrapping)
    {
        $this->container['freeWrapping'] = $freeWrapping;

        return $this;
    }

    /**
     * Gets reductionFrom
     *
     * @return \DateTime|null
     */
    public function getReductionFrom()
    {
        return $this->container['reductionFrom'];
    }

    /**
     * Sets reductionFrom
     *
     * @param \DateTime|null $reductionFrom reductionFrom
     *
     * @return self
     */
    public function setReductionFrom($reductionFrom)
    {
        $this->container['reductionFrom'] = $reductionFrom;

        return $this;
    }

    /**
     * Gets reductionTo
     *
     * @return \DateTime|null
     */
    public function getReductionTo()
    {
        return $this->container['reductionTo'];
    }

    /**
     * Sets reductionTo
     *
     * @param \DateTime|null $reductionTo reductionTo
     *
     * @return self
     */
    public function setReductionTo($reductionTo)
    {
        $this->container['reductionTo'] = $reductionTo;

        return $this;
    }

    /**
     * Gets reductionPurchaseMinimum
     *
     * @return float|null
     */
    public function getReductionPurchaseMinimum()
    {
        return $this->container['reductionPurchaseMinimum'];
    }

    /**
     * Sets reductionPurchaseMinimum
     *
     * @param float|null $reductionPurchaseMinimum reductionPurchaseMinimum
     *
     * @return self
     */
    public function setReductionPurchaseMinimum($reductionPurchaseMinimum)
    {
        $this->container['reductionPurchaseMinimum'] = $reductionPurchaseMinimum;

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
     * Gets oneByUser
     *
     * @return bool|null
     */
    public function getOneByUser()
    {
        return $this->container['oneByUser'];
    }

    /**
     * Sets oneByUser
     *
     * @param bool|null $oneByUser oneByUser
     *
     * @return self
     */
    public function setOneByUser($oneByUser)
    {
        $this->container['oneByUser'] = $oneByUser;

        return $this;
    }

    /**
     * Gets display
     *
     * @return bool|null
     */
    public function getDisplay()
    {
        return $this->container['display'];
    }

    /**
     * Sets display
     *
     * @param bool|null $display display
     *
     * @return self
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


