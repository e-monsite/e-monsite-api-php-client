<?php
/**
 * WebhookCall
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
 * WebhookCall Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WebhookCall implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookCall';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'webhook' => '\EmonsiteApi\Models\Webhook',
        'addDt' => 'int',
        'addUserId' => 'string',
        'status' => 'string',
        'event' => 'string',
        'startedAt' => '\DateTime',
        'finishedAt' => '\DateTime',
        'payloadContentType' => 'string',
        'requestHeaders' => 'string',
        'requestPayload' => 'string[]',
        'responseStatusCode' => 'int',
        'responseHeaders' => 'string',
        'responseBody' => 'string',
        'error' => 'string',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'webhook' => null,
        'addDt' => null,
        'addUserId' => null,
        'status' => null,
        'event' => null,
        'startedAt' => 'date-time',
        'finishedAt' => 'date-time',
        'payloadContentType' => null,
        'requestHeaders' => null,
        'requestPayload' => null,
        'responseStatusCode' => null,
        'responseHeaders' => null,
        'responseBody' => null,
        'error' => null,
        'id' => null
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
        'webhook' => 'webhook',
        'addDt' => 'addDt',
        'addUserId' => 'addUserId',
        'status' => 'status',
        'event' => 'event',
        'startedAt' => 'startedAt',
        'finishedAt' => 'finishedAt',
        'payloadContentType' => 'payloadContentType',
        'requestHeaders' => 'requestHeaders',
        'requestPayload' => 'requestPayload',
        'responseStatusCode' => 'responseStatusCode',
        'responseHeaders' => 'responseHeaders',
        'responseBody' => 'responseBody',
        'error' => 'error',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'webhook' => 'setWebhook',
        'addDt' => 'setAddDt',
        'addUserId' => 'setAddUserId',
        'status' => 'setStatus',
        'event' => 'setEvent',
        'startedAt' => 'setStartedAt',
        'finishedAt' => 'setFinishedAt',
        'payloadContentType' => 'setPayloadContentType',
        'requestHeaders' => 'setRequestHeaders',
        'requestPayload' => 'setRequestPayload',
        'responseStatusCode' => 'setResponseStatusCode',
        'responseHeaders' => 'setResponseHeaders',
        'responseBody' => 'setResponseBody',
        'error' => 'setError',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'webhook' => 'getWebhook',
        'addDt' => 'getAddDt',
        'addUserId' => 'getAddUserId',
        'status' => 'getStatus',
        'event' => 'getEvent',
        'startedAt' => 'getStartedAt',
        'finishedAt' => 'getFinishedAt',
        'payloadContentType' => 'getPayloadContentType',
        'requestHeaders' => 'getRequestHeaders',
        'requestPayload' => 'getRequestPayload',
        'responseStatusCode' => 'getResponseStatusCode',
        'responseHeaders' => 'getResponseHeaders',
        'responseBody' => 'getResponseBody',
        'error' => 'getError',
        'id' => 'getId'
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
        $this->container['webhook'] = $data['webhook'] ?? null;
        $this->container['addDt'] = $data['addDt'] ?? null;
        $this->container['addUserId'] = $data['addUserId'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['event'] = $data['event'] ?? null;
        $this->container['startedAt'] = $data['startedAt'] ?? null;
        $this->container['finishedAt'] = $data['finishedAt'] ?? null;
        $this->container['payloadContentType'] = $data['payloadContentType'] ?? null;
        $this->container['requestHeaders'] = $data['requestHeaders'] ?? null;
        $this->container['requestPayload'] = $data['requestPayload'] ?? null;
        $this->container['responseStatusCode'] = $data['responseStatusCode'] ?? null;
        $this->container['responseHeaders'] = $data['responseHeaders'] ?? null;
        $this->container['responseBody'] = $data['responseBody'] ?? null;
        $this->container['error'] = $data['error'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
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
     * Gets webhook
     *
     * @return \EmonsiteApi\Models\Webhook|null
     */
    public function getWebhook()
    {
        return $this->container['webhook'];
    }

    /**
     * Sets webhook
     *
     * @param \EmonsiteApi\Models\Webhook|null $webhook webhook
     *
     * @return self
     */
    public function setWebhook($webhook)
    {
        $this->container['webhook'] = $webhook;

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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets event
     *
     * @return string|null
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param string|null $event event
     *
     * @return self
     */
    public function setEvent($event)
    {
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets startedAt
     *
     * @return \DateTime|null
     */
    public function getStartedAt()
    {
        return $this->container['startedAt'];
    }

    /**
     * Sets startedAt
     *
     * @param \DateTime|null $startedAt startedAt
     *
     * @return self
     */
    public function setStartedAt($startedAt)
    {
        $this->container['startedAt'] = $startedAt;

        return $this;
    }

    /**
     * Gets finishedAt
     *
     * @return \DateTime|null
     */
    public function getFinishedAt()
    {
        return $this->container['finishedAt'];
    }

    /**
     * Sets finishedAt
     *
     * @param \DateTime|null $finishedAt finishedAt
     *
     * @return self
     */
    public function setFinishedAt($finishedAt)
    {
        $this->container['finishedAt'] = $finishedAt;

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
     * Gets requestHeaders
     *
     * @return string|null
     */
    public function getRequestHeaders()
    {
        return $this->container['requestHeaders'];
    }

    /**
     * Sets requestHeaders
     *
     * @param string|null $requestHeaders requestHeaders
     *
     * @return self
     */
    public function setRequestHeaders($requestHeaders)
    {
        $this->container['requestHeaders'] = $requestHeaders;

        return $this;
    }

    /**
     * Gets requestPayload
     *
     * @return string[]|null
     */
    public function getRequestPayload()
    {
        return $this->container['requestPayload'];
    }

    /**
     * Sets requestPayload
     *
     * @param string[]|null $requestPayload requestPayload
     *
     * @return self
     */
    public function setRequestPayload($requestPayload)
    {
        $this->container['requestPayload'] = $requestPayload;

        return $this;
    }

    /**
     * Gets responseStatusCode
     *
     * @return int|null
     */
    public function getResponseStatusCode()
    {
        return $this->container['responseStatusCode'];
    }

    /**
     * Sets responseStatusCode
     *
     * @param int|null $responseStatusCode responseStatusCode
     *
     * @return self
     */
    public function setResponseStatusCode($responseStatusCode)
    {
        $this->container['responseStatusCode'] = $responseStatusCode;

        return $this;
    }

    /**
     * Gets responseHeaders
     *
     * @return string|null
     */
    public function getResponseHeaders()
    {
        return $this->container['responseHeaders'];
    }

    /**
     * Sets responseHeaders
     *
     * @param string|null $responseHeaders responseHeaders
     *
     * @return self
     */
    public function setResponseHeaders($responseHeaders)
    {
        $this->container['responseHeaders'] = $responseHeaders;

        return $this;
    }

    /**
     * Gets responseBody
     *
     * @return string|null
     */
    public function getResponseBody()
    {
        return $this->container['responseBody'];
    }

    /**
     * Sets responseBody
     *
     * @param string|null $responseBody responseBody
     *
     * @return self
     */
    public function setResponseBody($responseBody)
    {
        $this->container['responseBody'] = $responseBody;

        return $this;
    }

    /**
     * Gets error
     *
     * @return string|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string|null $error error
     *
     * @return self
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

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


