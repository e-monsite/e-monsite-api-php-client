<?php
/**
 * WebhookCall
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
 * WebhookCall Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebhookCall implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebhookCall';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'webhook' => '\EmonsiteApi\Models\Webhook',
'add_dt' => 'int',
'add_user_id' => 'string',
'status' => 'string',
'event' => 'string',
'started_at' => '\DateTime',
'finished_at' => '\DateTime',
'payload_content_type' => 'string',
'request_headers' => 'string',
'request_payload' => 'string[]',
'response_status_code' => 'int',
'response_headers' => 'string',
'response_body' => 'string',
'error' => 'string',
'id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'webhook' => null,
'add_dt' => null,
'add_user_id' => null,
'status' => null,
'event' => null,
'started_at' => 'date-time',
'finished_at' => 'date-time',
'payload_content_type' => null,
'request_headers' => null,
'request_payload' => null,
'response_status_code' => null,
'response_headers' => null,
'response_body' => null,
'error' => null,
'id' => null    ];

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
        'webhook' => 'webhook',
'add_dt' => 'addDt',
'add_user_id' => 'addUserId',
'status' => 'status',
'event' => 'event',
'started_at' => 'startedAt',
'finished_at' => 'finishedAt',
'payload_content_type' => 'payloadContentType',
'request_headers' => 'requestHeaders',
'request_payload' => 'requestPayload',
'response_status_code' => 'responseStatusCode',
'response_headers' => 'responseHeaders',
'response_body' => 'responseBody',
'error' => 'error',
'id' => 'id'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'webhook' => 'setWebhook',
'add_dt' => 'setAddDt',
'add_user_id' => 'setAddUserId',
'status' => 'setStatus',
'event' => 'setEvent',
'started_at' => 'setStartedAt',
'finished_at' => 'setFinishedAt',
'payload_content_type' => 'setPayloadContentType',
'request_headers' => 'setRequestHeaders',
'request_payload' => 'setRequestPayload',
'response_status_code' => 'setResponseStatusCode',
'response_headers' => 'setResponseHeaders',
'response_body' => 'setResponseBody',
'error' => 'setError',
'id' => 'setId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'webhook' => 'getWebhook',
'add_dt' => 'getAddDt',
'add_user_id' => 'getAddUserId',
'status' => 'getStatus',
'event' => 'getEvent',
'started_at' => 'getStartedAt',
'finished_at' => 'getFinishedAt',
'payload_content_type' => 'getPayloadContentType',
'request_headers' => 'getRequestHeaders',
'request_payload' => 'getRequestPayload',
'response_status_code' => 'getResponseStatusCode',
'response_headers' => 'getResponseHeaders',
'response_body' => 'getResponseBody',
'error' => 'getError',
'id' => 'getId'    ];

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
        $this->container['webhook'] = isset($data['webhook']) ? $data['webhook'] : null;
        $this->container['add_dt'] = isset($data['add_dt']) ? $data['add_dt'] : null;
        $this->container['add_user_id'] = isset($data['add_user_id']) ? $data['add_user_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['started_at'] = isset($data['started_at']) ? $data['started_at'] : null;
        $this->container['finished_at'] = isset($data['finished_at']) ? $data['finished_at'] : null;
        $this->container['payload_content_type'] = isset($data['payload_content_type']) ? $data['payload_content_type'] : null;
        $this->container['request_headers'] = isset($data['request_headers']) ? $data['request_headers'] : null;
        $this->container['request_payload'] = isset($data['request_payload']) ? $data['request_payload'] : null;
        $this->container['response_status_code'] = isset($data['response_status_code']) ? $data['response_status_code'] : null;
        $this->container['response_headers'] = isset($data['response_headers']) ? $data['response_headers'] : null;
        $this->container['response_body'] = isset($data['response_body']) ? $data['response_body'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
     * @return \EmonsiteApi\Models\Webhook
     */
    public function getWebhook()
    {
        return $this->container['webhook'];
    }

    /**
     * Sets webhook
     *
     * @param \EmonsiteApi\Models\Webhook $webhook webhook
     *
     * @return $this
     */
    public function setWebhook($webhook)
    {
        $this->container['webhook'] = $webhook;

        return $this;
    }

    /**
     * Gets add_dt
     *
     * @return int
     */
    public function getAddDt()
    {
        return $this->container['add_dt'];
    }

    /**
     * Sets add_dt
     *
     * @param int $add_dt add_dt
     *
     * @return $this
     */
    public function setAddDt($add_dt)
    {
        $this->container['add_dt'] = $add_dt;

        return $this;
    }

    /**
     * Gets add_user_id
     *
     * @return string
     */
    public function getAddUserId()
    {
        return $this->container['add_user_id'];
    }

    /**
     * Sets add_user_id
     *
     * @param string $add_user_id add_user_id
     *
     * @return $this
     */
    public function setAddUserId($add_user_id)
    {
        $this->container['add_user_id'] = $add_user_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets event
     *
     * @return string
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param string $event event
     *
     * @return $this
     */
    public function setEvent($event)
    {
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets started_at
     *
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param \DateTime $started_at started_at
     *
     * @return $this
     */
    public function setStartedAt($started_at)
    {
        $this->container['started_at'] = $started_at;

        return $this;
    }

    /**
     * Gets finished_at
     *
     * @return \DateTime
     */
    public function getFinishedAt()
    {
        return $this->container['finished_at'];
    }

    /**
     * Sets finished_at
     *
     * @param \DateTime $finished_at finished_at
     *
     * @return $this
     */
    public function setFinishedAt($finished_at)
    {
        $this->container['finished_at'] = $finished_at;

        return $this;
    }

    /**
     * Gets payload_content_type
     *
     * @return string
     */
    public function getPayloadContentType()
    {
        return $this->container['payload_content_type'];
    }

    /**
     * Sets payload_content_type
     *
     * @param string $payload_content_type payload_content_type
     *
     * @return $this
     */
    public function setPayloadContentType($payload_content_type)
    {
        $this->container['payload_content_type'] = $payload_content_type;

        return $this;
    }

    /**
     * Gets request_headers
     *
     * @return string
     */
    public function getRequestHeaders()
    {
        return $this->container['request_headers'];
    }

    /**
     * Sets request_headers
     *
     * @param string $request_headers request_headers
     *
     * @return $this
     */
    public function setRequestHeaders($request_headers)
    {
        $this->container['request_headers'] = $request_headers;

        return $this;
    }

    /**
     * Gets request_payload
     *
     * @return string[]
     */
    public function getRequestPayload()
    {
        return $this->container['request_payload'];
    }

    /**
     * Sets request_payload
     *
     * @param string[] $request_payload request_payload
     *
     * @return $this
     */
    public function setRequestPayload($request_payload)
    {
        $this->container['request_payload'] = $request_payload;

        return $this;
    }

    /**
     * Gets response_status_code
     *
     * @return int
     */
    public function getResponseStatusCode()
    {
        return $this->container['response_status_code'];
    }

    /**
     * Sets response_status_code
     *
     * @param int $response_status_code response_status_code
     *
     * @return $this
     */
    public function setResponseStatusCode($response_status_code)
    {
        $this->container['response_status_code'] = $response_status_code;

        return $this;
    }

    /**
     * Gets response_headers
     *
     * @return string
     */
    public function getResponseHeaders()
    {
        return $this->container['response_headers'];
    }

    /**
     * Sets response_headers
     *
     * @param string $response_headers response_headers
     *
     * @return $this
     */
    public function setResponseHeaders($response_headers)
    {
        $this->container['response_headers'] = $response_headers;

        return $this;
    }

    /**
     * Gets response_body
     *
     * @return string
     */
    public function getResponseBody()
    {
        return $this->container['response_body'];
    }

    /**
     * Sets response_body
     *
     * @param string $response_body response_body
     *
     * @return $this
     */
    public function setResponseBody($response_body)
    {
        $this->container['response_body'] = $response_body;

        return $this;
    }

    /**
     * Gets error
     *
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string $error error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

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
