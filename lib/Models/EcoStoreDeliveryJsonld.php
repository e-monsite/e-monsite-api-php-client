<?php
/**
 * EcoStoreDeliveryJsonld
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
 * EcoStoreDeliveryJsonld Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcoStoreDeliveryJsonld implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EcoStoreDelivery:jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
'id' => 'string',
'type' => 'string',
'id' => '\EmonsiteApi\Models\SiteJsonld',
'site' => '\EmonsiteApi\Models\SiteJsonld',
'active_in_store_pickup' => 'bool',
'in_store_user_credit_sms' => 'string',
'in_store_sms_alert' => 'bool',
'in_store_active_payment' => 'bool'    ];

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
'site' => null,
'active_in_store_pickup' => null,
'in_store_user_credit_sms' => null,
'in_store_sms_alert' => null,
'in_store_active_payment' => null    ];

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
'site' => 'site',
'active_in_store_pickup' => 'activeInStorePickup',
'in_store_user_credit_sms' => 'inStoreUserCreditSms',
'in_store_sms_alert' => 'inStoreSmsAlert',
'in_store_active_payment' => 'inStoreActivePayment'    ];

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
'site' => 'setSite',
'active_in_store_pickup' => 'setActiveInStorePickup',
'in_store_user_credit_sms' => 'setInStoreUserCreditSms',
'in_store_sms_alert' => 'setInStoreSmsAlert',
'in_store_active_payment' => 'setInStoreActivePayment'    ];

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
'site' => 'getSite',
'active_in_store_pickup' => 'getActiveInStorePickup',
'in_store_user_credit_sms' => 'getInStoreUserCreditSms',
'in_store_sms_alert' => 'getInStoreSmsAlert',
'in_store_active_payment' => 'getInStoreActivePayment'    ];

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
        $this->container['site'] = isset($data['site']) ? $data['site'] : null;
        $this->container['active_in_store_pickup'] = isset($data['active_in_store_pickup']) ? $data['active_in_store_pickup'] : null;
        $this->container['in_store_user_credit_sms'] = isset($data['in_store_user_credit_sms']) ? $data['in_store_user_credit_sms'] : null;
        $this->container['in_store_sms_alert'] = isset($data['in_store_sms_alert']) ? $data['in_store_sms_alert'] : null;
        $this->container['in_store_active_payment'] = isset($data['in_store_active_payment']) ? $data['in_store_active_payment'] : null;
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
     * @return \EmonsiteApi\Models\SiteJsonld
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \EmonsiteApi\Models\SiteJsonld $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets site
     *
     * @return \EmonsiteApi\Models\SiteJsonld
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param \EmonsiteApi\Models\SiteJsonld $site site
     *
     * @return $this
     */
    public function setSite($site)
    {
        $this->container['site'] = $site;

        return $this;
    }

    /**
     * Gets active_in_store_pickup
     *
     * @return bool
     */
    public function getActiveInStorePickup()
    {
        return $this->container['active_in_store_pickup'];
    }

    /**
     * Sets active_in_store_pickup
     *
     * @param bool $active_in_store_pickup active_in_store_pickup
     *
     * @return $this
     */
    public function setActiveInStorePickup($active_in_store_pickup)
    {
        $this->container['active_in_store_pickup'] = $active_in_store_pickup;

        return $this;
    }

    /**
     * Gets in_store_user_credit_sms
     *
     * @return string
     */
    public function getInStoreUserCreditSms()
    {
        return $this->container['in_store_user_credit_sms'];
    }

    /**
     * Sets in_store_user_credit_sms
     *
     * @param string $in_store_user_credit_sms in_store_user_credit_sms
     *
     * @return $this
     */
    public function setInStoreUserCreditSms($in_store_user_credit_sms)
    {
        $this->container['in_store_user_credit_sms'] = $in_store_user_credit_sms;

        return $this;
    }

    /**
     * Gets in_store_sms_alert
     *
     * @return bool
     */
    public function getInStoreSmsAlert()
    {
        return $this->container['in_store_sms_alert'];
    }

    /**
     * Sets in_store_sms_alert
     *
     * @param bool $in_store_sms_alert in_store_sms_alert
     *
     * @return $this
     */
    public function setInStoreSmsAlert($in_store_sms_alert)
    {
        $this->container['in_store_sms_alert'] = $in_store_sms_alert;

        return $this;
    }

    /**
     * Gets in_store_active_payment
     *
     * @return bool
     */
    public function getInStoreActivePayment()
    {
        return $this->container['in_store_active_payment'];
    }

    /**
     * Sets in_store_active_payment
     *
     * @param bool $in_store_active_payment in_store_active_payment
     *
     * @return $this
     */
    public function setInStoreActivePayment($in_store_active_payment)
    {
        $this->container['in_store_active_payment'] = $in_store_active_payment;

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
