<?php
/**
 * WebhookJsonld
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
 * WebhookJsonld Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WebhookJsonld implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Webhook:jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'context' => 'string',
        'id' => 'string',
        'type' => 'string',
        'name' => 'string',
        'active' => 'bool',
        'url' => 'string',
        'payloadContentType' => 'string',
        'webhookHasEvents' => '\EmonsiteApi\Models\WebhookHasEventJsonld[]',
        'calls' => '\EmonsiteApi\Models\WebhookCallJsonld[]',
        'id' => 'string',
        'site' => '\EmonsiteApi\Models\SiteJsonld',
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
        'context' => null,
        'id' => null,
        'type' => null,
        'name' => null,
        'active' => null,
        'url' => null,
        'payloadContentType' => null,
        'webhookHasEvents' => null,
        'calls' => null,
        'id' => null,
        'site' => null,
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
        'context' => '@context',
        'id' => '@id',
        'type' => '@type',
        'name' => 'name',
        'active' => 'active',
        'url' => 'url',
        'payloadContentType' => 'payloadContentType',
        'webhookHasEvents' => 'webhookHasEvents',
        'calls' => 'calls',
        'id' => 'id',
        'site' => 'site',
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
        'context' => 'setContext',
        'id' => 'setId',
        'type' => 'setType',
        'name' => 'setName',
        'active' => 'setActive',
        'url' => 'setUrl',
        'payloadContentType' => 'setPayloadContentType',
        'webhookHasEvents' => 'setWebhookHasEvents',
        'calls' => 'setCalls',
        'id' => 'setId',
        'site' => 'setSite',
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
        'context' => 'getContext',
        'id' => 'getId',
        'type' => 'getType',
        'name' => 'getName',
        'active' => 'getActive',
        'url' => 'getUrl',
        'payloadContentType' => 'getPayloadContentType',
        'webhookHasEvents' => 'getWebhookHasEvents',
        'calls' => 'getCalls',
        'id' => 'getId',
        'site' => 'getSite',
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
        $this->container['context'] = $data['context'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['payloadContentType'] = $data['payloadContentType'] ?? null;
        $this->container['webhookHasEvents'] = $data['webhookHasEvents'] ?? null;
        $this->container['calls'] = $data['calls'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['site'] = $data['site'] ?? null;
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
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets payloadContentType
     *
     * @return string|null
     */
    public function getPayloadContentType()
    {
        return $this->container['payloadContentType'];
    }

    /**
     * Sets payloadContentType
     *
     * @param string|null $payloadContentType payloadContentType
     *
     * @return self
     */
    public function setPayloadContentType($payloadContentType)
    {
        $this->container['payloadContentType'] = $payloadContentType;

        return $this;
    }

    /**
     * Gets webhookHasEvents
     *
     * @return \EmonsiteApi\Models\WebhookHasEventJsonld[]|null
     */
    public function getWebhookHasEvents()
    {
        return $this->container['webhookHasEvents'];
    }

    /**
     * Sets webhookHasEvents
     *
     * @param \EmonsiteApi\Models\WebhookHasEventJsonld[]|null $webhookHasEvents webhookHasEvents
     *
     * @return self
     */
    public function setWebhookHasEvents($webhookHasEvents)
    {
        $this->container['webhookHasEvents'] = $webhookHasEvents;

        return $this;
    }

    /**
     * Gets calls
     *
     * @return \EmonsiteApi\Models\WebhookCallJsonld[]|null
     */
    public function getCalls()
    {
        return $this->container['calls'];
    }

    /**
     * Sets calls
     *
     * @param \EmonsiteApi\Models\WebhookCallJsonld[]|null $calls calls
     *
     * @return self
     */
    public function setCalls($calls)
    {
        $this->container['calls'] = $calls;

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
     * Gets site
     *
     * @return \EmonsiteApi\Models\SiteJsonld|null
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param \EmonsiteApi\Models\SiteJsonld|null $site site
     *
     * @return self
     */
    public function setSite($site)
    {
        $this->container['site'] = $site;

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


