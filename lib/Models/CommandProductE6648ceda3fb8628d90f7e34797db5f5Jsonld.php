<?php
/**
 * CommandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld
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
 * CommandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CommandProduct:e6648ceda3fb8628d90f7e34797db5f5:jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
'id' => 'string',
'type' => 'string',
'command' => 'string',
'offer' => 'string',
'site' => 'string',
'quantity' => 'int',
'price' => 'float',
'renew' => 'bool',
'active' => 'bool',
'domain' => 'string',
'domain_infos' => 'string',
'ssl_infos' => 'string',
'currency' => 'string',
'currency_price' => 'float',
'coupon' => 'string',
'option_id' => 'string',
'option_qty' => 'int',
'information' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
'id' => null,
'type' => null,
'command' => 'iri-reference',
'offer' => 'iri-reference',
'site' => 'iri-reference',
'quantity' => null,
'price' => null,
'renew' => null,
'active' => null,
'domain' => null,
'domain_infos' => null,
'ssl_infos' => null,
'currency' => null,
'currency_price' => null,
'coupon' => null,
'option_id' => null,
'option_qty' => null,
'information' => null    ];

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
'command' => 'command',
'offer' => 'offer',
'site' => 'site',
'quantity' => 'quantity',
'price' => 'price',
'renew' => 'renew',
'active' => 'active',
'domain' => 'domain',
'domain_infos' => 'domainInfos',
'ssl_infos' => 'sslInfos',
'currency' => 'currency',
'currency_price' => 'currencyPrice',
'coupon' => 'coupon',
'option_id' => 'optionId',
'option_qty' => 'optionQty',
'information' => 'information'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
'id' => 'setId',
'type' => 'setType',
'command' => 'setCommand',
'offer' => 'setOffer',
'site' => 'setSite',
'quantity' => 'setQuantity',
'price' => 'setPrice',
'renew' => 'setRenew',
'active' => 'setActive',
'domain' => 'setDomain',
'domain_infos' => 'setDomainInfos',
'ssl_infos' => 'setSslInfos',
'currency' => 'setCurrency',
'currency_price' => 'setCurrencyPrice',
'coupon' => 'setCoupon',
'option_id' => 'setOptionId',
'option_qty' => 'setOptionQty',
'information' => 'setInformation'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
'id' => 'getId',
'type' => 'getType',
'command' => 'getCommand',
'offer' => 'getOffer',
'site' => 'getSite',
'quantity' => 'getQuantity',
'price' => 'getPrice',
'renew' => 'getRenew',
'active' => 'getActive',
'domain' => 'getDomain',
'domain_infos' => 'getDomainInfos',
'ssl_infos' => 'getSslInfos',
'currency' => 'getCurrency',
'currency_price' => 'getCurrencyPrice',
'coupon' => 'getCoupon',
'option_id' => 'getOptionId',
'option_qty' => 'getOptionQty',
'information' => 'getInformation'    ];

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
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['offer'] = isset($data['offer']) ? $data['offer'] : null;
        $this->container['site'] = isset($data['site']) ? $data['site'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['renew'] = isset($data['renew']) ? $data['renew'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['domain_infos'] = isset($data['domain_infos']) ? $data['domain_infos'] : null;
        $this->container['ssl_infos'] = isset($data['ssl_infos']) ? $data['ssl_infos'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['currency_price'] = isset($data['currency_price']) ? $data['currency_price'] : null;
        $this->container['coupon'] = isset($data['coupon']) ? $data['coupon'] : null;
        $this->container['option_id'] = isset($data['option_id']) ? $data['option_id'] : null;
        $this->container['option_qty'] = isset($data['option_qty']) ? $data['option_qty'] : null;
        $this->container['information'] = isset($data['information']) ? $data['information'] : null;
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
     * Gets command
     *
     * @return string
     */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
     * Sets command
     *
     * @param string $command command
     *
     * @return $this
     */
    public function setCommand($command)
    {
        $this->container['command'] = $command;

        return $this;
    }

    /**
     * Gets offer
     *
     * @return string
     */
    public function getOffer()
    {
        return $this->container['offer'];
    }

    /**
     * Sets offer
     *
     * @param string $offer offer
     *
     * @return $this
     */
    public function setOffer($offer)
    {
        $this->container['offer'] = $offer;

        return $this;
    }

    /**
     * Gets site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param string $site site
     *
     * @return $this
     */
    public function setSite($site)
    {
        $this->container['site'] = $site;

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
     * Gets renew
     *
     * @return bool
     */
    public function getRenew()
    {
        return $this->container['renew'];
    }

    /**
     * Sets renew
     *
     * @param bool $renew renew
     *
     * @return $this
     */
    public function setRenew($renew)
    {
        $this->container['renew'] = $renew;

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
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets domain_infos
     *
     * @return string
     */
    public function getDomainInfos()
    {
        return $this->container['domain_infos'];
    }

    /**
     * Sets domain_infos
     *
     * @param string $domain_infos domain_infos
     *
     * @return $this
     */
    public function setDomainInfos($domain_infos)
    {
        $this->container['domain_infos'] = $domain_infos;

        return $this;
    }

    /**
     * Gets ssl_infos
     *
     * @return string
     */
    public function getSslInfos()
    {
        return $this->container['ssl_infos'];
    }

    /**
     * Sets ssl_infos
     *
     * @param string $ssl_infos ssl_infos
     *
     * @return $this
     */
    public function setSslInfos($ssl_infos)
    {
        $this->container['ssl_infos'] = $ssl_infos;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets currency_price
     *
     * @return float
     */
    public function getCurrencyPrice()
    {
        return $this->container['currency_price'];
    }

    /**
     * Sets currency_price
     *
     * @param float $currency_price currency_price
     *
     * @return $this
     */
    public function setCurrencyPrice($currency_price)
    {
        $this->container['currency_price'] = $currency_price;

        return $this;
    }

    /**
     * Gets coupon
     *
     * @return string
     */
    public function getCoupon()
    {
        return $this->container['coupon'];
    }

    /**
     * Sets coupon
     *
     * @param string $coupon coupon
     *
     * @return $this
     */
    public function setCoupon($coupon)
    {
        $this->container['coupon'] = $coupon;

        return $this;
    }

    /**
     * Gets option_id
     *
     * @return string
     */
    public function getOptionId()
    {
        return $this->container['option_id'];
    }

    /**
     * Sets option_id
     *
     * @param string $option_id option_id
     *
     * @return $this
     */
    public function setOptionId($option_id)
    {
        $this->container['option_id'] = $option_id;

        return $this;
    }

    /**
     * Gets option_qty
     *
     * @return int
     */
    public function getOptionQty()
    {
        return $this->container['option_qty'];
    }

    /**
     * Sets option_qty
     *
     * @param int $option_qty option_qty
     *
     * @return $this
     */
    public function setOptionQty($option_qty)
    {
        $this->container['option_qty'] = $option_qty;

        return $this;
    }

    /**
     * Gets information
     *
     * @return string
     */
    public function getInformation()
    {
        return $this->container['information'];
    }

    /**
     * Sets information
     *
     * @param string $information information
     *
     * @return $this
     */
    public function setInformation($information)
    {
        $this->container['information'] = $information;

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
