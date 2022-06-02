<?php
/**
 * EcoCollectionPoint563c4b10d21b54db780227488e899fa5Jsonld
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
 * EcoCollectionPoint563c4b10d21b54db780227488e899fa5Jsonld Class Doc Comment
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
class EcoCollectionPoint563c4b10d21b54db780227488e899fa5Jsonld implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EcoCollectionPoint:563c4b10d21b54db780227488e899fa5:jsonld';

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
        'name' => 'string',
        'address' => 'string',
        'latitude' => 'float',
        'longitude' => 'float',
        'code' => 'string',
        'cost' => 'float',
        'schedule' => 'string[]',
        'availableForInStorePickUp' => 'bool',
        'availableForDrive' => 'bool',
        'availableForClickAndCollect' => 'bool',
        'retentionTime' => 'int',
        'availabilityDelay' => 'string',
        'email' => 'string'
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
        'name' => null,
        'address' => null,
        'latitude' => null,
        'longitude' => null,
        'code' => null,
        'cost' => null,
        'schedule' => null,
        'availableForInStorePickUp' => null,
        'availableForDrive' => null,
        'availableForClickAndCollect' => null,
        'retentionTime' => null,
        'availabilityDelay' => null,
        'email' => null
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
        'name' => 'name',
        'address' => 'address',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'code' => 'code',
        'cost' => 'cost',
        'schedule' => 'schedule',
        'availableForInStorePickUp' => 'availableForInStorePickUp',
        'availableForDrive' => 'availableForDrive',
        'availableForClickAndCollect' => 'availableForClickAndCollect',
        'retentionTime' => 'retentionTime',
        'availabilityDelay' => 'availabilityDelay',
        'email' => 'email'
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
        'name' => 'setName',
        'address' => 'setAddress',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'code' => 'setCode',
        'cost' => 'setCost',
        'schedule' => 'setSchedule',
        'availableForInStorePickUp' => 'setAvailableForInStorePickUp',
        'availableForDrive' => 'setAvailableForDrive',
        'availableForClickAndCollect' => 'setAvailableForClickAndCollect',
        'retentionTime' => 'setRetentionTime',
        'availabilityDelay' => 'setAvailabilityDelay',
        'email' => 'setEmail'
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
        'name' => 'getName',
        'address' => 'getAddress',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'code' => 'getCode',
        'cost' => 'getCost',
        'schedule' => 'getSchedule',
        'availableForInStorePickUp' => 'getAvailableForInStorePickUp',
        'availableForDrive' => 'getAvailableForDrive',
        'availableForClickAndCollect' => 'getAvailableForClickAndCollect',
        'retentionTime' => 'getRetentionTime',
        'availabilityDelay' => 'getAvailabilityDelay',
        'email' => 'getEmail'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['latitude'] = $data['latitude'] ?? null;
        $this->container['longitude'] = $data['longitude'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['cost'] = $data['cost'] ?? null;
        $this->container['schedule'] = $data['schedule'] ?? null;
        $this->container['availableForInStorePickUp'] = $data['availableForInStorePickUp'] ?? null;
        $this->container['availableForDrive'] = $data['availableForDrive'] ?? null;
        $this->container['availableForClickAndCollect'] = $data['availableForClickAndCollect'] ?? null;
        $this->container['retentionTime'] = $data['retentionTime'] ?? null;
        $this->container['availabilityDelay'] = $data['availabilityDelay'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float|null $latitude latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float|null $longitude longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

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
     * Gets cost
     *
     * @return float|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float|null $cost cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return string[]|null
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param string[]|null $schedule schedule
     *
     * @return self
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets availableForInStorePickUp
     *
     * @return bool|null
     */
    public function getAvailableForInStorePickUp()
    {
        return $this->container['availableForInStorePickUp'];
    }

    /**
     * Sets availableForInStorePickUp
     *
     * @param bool|null $availableForInStorePickUp availableForInStorePickUp
     *
     * @return self
     */
    public function setAvailableForInStorePickUp($availableForInStorePickUp)
    {
        $this->container['availableForInStorePickUp'] = $availableForInStorePickUp;

        return $this;
    }

    /**
     * Gets availableForDrive
     *
     * @return bool|null
     */
    public function getAvailableForDrive()
    {
        return $this->container['availableForDrive'];
    }

    /**
     * Sets availableForDrive
     *
     * @param bool|null $availableForDrive availableForDrive
     *
     * @return self
     */
    public function setAvailableForDrive($availableForDrive)
    {
        $this->container['availableForDrive'] = $availableForDrive;

        return $this;
    }

    /**
     * Gets availableForClickAndCollect
     *
     * @return bool|null
     */
    public function getAvailableForClickAndCollect()
    {
        return $this->container['availableForClickAndCollect'];
    }

    /**
     * Sets availableForClickAndCollect
     *
     * @param bool|null $availableForClickAndCollect availableForClickAndCollect
     *
     * @return self
     */
    public function setAvailableForClickAndCollect($availableForClickAndCollect)
    {
        $this->container['availableForClickAndCollect'] = $availableForClickAndCollect;

        return $this;
    }

    /**
     * Gets retentionTime
     *
     * @return int|null
     */
    public function getRetentionTime()
    {
        return $this->container['retentionTime'];
    }

    /**
     * Sets retentionTime
     *
     * @param int|null $retentionTime retentionTime
     *
     * @return self
     */
    public function setRetentionTime($retentionTime)
    {
        $this->container['retentionTime'] = $retentionTime;

        return $this;
    }

    /**
     * Gets availabilityDelay
     *
     * @return string|null
     */
    public function getAvailabilityDelay()
    {
        return $this->container['availabilityDelay'];
    }

    /**
     * Sets availabilityDelay
     *
     * @param string|null $availabilityDelay availabilityDelay
     *
     * @return self
     */
    public function setAvailabilityDelay($availabilityDelay)
    {
        $this->container['availabilityDelay'] = $availabilityDelay;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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


