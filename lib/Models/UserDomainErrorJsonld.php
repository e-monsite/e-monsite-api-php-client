<?php
/**
 * UserDomainErrorJsonld
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
 * UserDomainErrorJsonld Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserDomainErrorJsonld implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserDomainError:jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
'id' => 'string',
'type' => 'string',
'user_domain' => 'AnyOfUserDomainErrorJsonldUserDomain',
'add_dt' => 'int',
'add_user_id' => 'string',
'registrar' => 'string',
'error_code' => 'string',
'error_message' => 'string',
'context' => 'string',
'id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
'id' => null,
'type' => null,
'user_domain' => null,
'add_dt' => null,
'add_user_id' => null,
'registrar' => null,
'error_code' => null,
'error_message' => null,
'context' => null,
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
        'context' => '@context',
'id' => '@id',
'type' => '@type',
'user_domain' => 'userDomain',
'add_dt' => 'addDt',
'add_user_id' => 'addUserId',
'registrar' => 'registrar',
'error_code' => 'errorCode',
'error_message' => 'errorMessage',
'context' => 'context',
'id' => 'id'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
'id' => 'setId',
'type' => 'setType',
'user_domain' => 'setUserDomain',
'add_dt' => 'setAddDt',
'add_user_id' => 'setAddUserId',
'registrar' => 'setRegistrar',
'error_code' => 'setErrorCode',
'error_message' => 'setErrorMessage',
'context' => 'setContext',
'id' => 'setId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
'id' => 'getId',
'type' => 'getType',
'user_domain' => 'getUserDomain',
'add_dt' => 'getAddDt',
'add_user_id' => 'getAddUserId',
'registrar' => 'getRegistrar',
'error_code' => 'getErrorCode',
'error_message' => 'getErrorMessage',
'context' => 'getContext',
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
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['user_domain'] = isset($data['user_domain']) ? $data['user_domain'] : null;
        $this->container['add_dt'] = isset($data['add_dt']) ? $data['add_dt'] : null;
        $this->container['add_user_id'] = isset($data['add_user_id']) ? $data['add_user_id'] : null;
        $this->container['registrar'] = isset($data['registrar']) ? $data['registrar'] : null;
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
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
     * Gets user_domain
     *
     * @return AnyOfUserDomainErrorJsonldUserDomain
     */
    public function getUserDomain()
    {
        return $this->container['user_domain'];
    }

    /**
     * Sets user_domain
     *
     * @param AnyOfUserDomainErrorJsonldUserDomain $user_domain user_domain
     *
     * @return $this
     */
    public function setUserDomain($user_domain)
    {
        $this->container['user_domain'] = $user_domain;

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
     * Gets registrar
     *
     * @return string
     */
    public function getRegistrar()
    {
        return $this->container['registrar'];
    }

    /**
     * Sets registrar
     *
     * @param string $registrar registrar
     *
     * @return $this
     */
    public function setRegistrar($registrar)
    {
        $this->container['registrar'] = $registrar;

        return $this;
    }

    /**
     * Gets error_code
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param string $error_code error_code
     *
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string $error_message error_message
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
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
