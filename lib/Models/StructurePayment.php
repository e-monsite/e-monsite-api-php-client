<?php
/**
 * StructurePayment
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
 * StructurePayment Class Doc Comment
 *
 * @category Class
 * @package  Emonsite
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StructurePayment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StructurePayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'description' => 'string',
'paymeans' => '\Emonsite\Models\AssocStructurePayment[]',
'modules' => '\Emonsite\Models\AssocStructureModule[]',
'id' => 'string',
'site' => '\Emonsite\Models\Site',
'add_dt' => 'int',
'upd_dt' => 'int',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'add_user_id' => 'string',
'upd_user_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'description' => null,
'paymeans' => null,
'modules' => null,
'id' => null,
'site' => null,
'add_dt' => null,
'upd_dt' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'add_user_id' => null,
'upd_user_id' => null    ];

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
        'name' => 'name',
'description' => 'description',
'paymeans' => 'paymeans',
'modules' => 'modules',
'id' => 'id',
'site' => 'site',
'add_dt' => 'addDt',
'upd_dt' => 'updDt',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'add_user_id' => 'addUserId',
'upd_user_id' => 'updUserId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'description' => 'setDescription',
'paymeans' => 'setPaymeans',
'modules' => 'setModules',
'id' => 'setId',
'site' => 'setSite',
'add_dt' => 'setAddDt',
'upd_dt' => 'setUpdDt',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'add_user_id' => 'setAddUserId',
'upd_user_id' => 'setUpdUserId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'description' => 'getDescription',
'paymeans' => 'getPaymeans',
'modules' => 'getModules',
'id' => 'getId',
'site' => 'getSite',
'add_dt' => 'getAddDt',
'upd_dt' => 'getUpdDt',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'add_user_id' => 'getAddUserId',
'upd_user_id' => 'getUpdUserId'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['paymeans'] = isset($data['paymeans']) ? $data['paymeans'] : null;
        $this->container['modules'] = isset($data['modules']) ? $data['modules'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['site'] = isset($data['site']) ? $data['site'] : null;
        $this->container['add_dt'] = isset($data['add_dt']) ? $data['add_dt'] : null;
        $this->container['upd_dt'] = isset($data['upd_dt']) ? $data['upd_dt'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['add_user_id'] = isset($data['add_user_id']) ? $data['add_user_id'] : null;
        $this->container['upd_user_id'] = isset($data['upd_user_id']) ? $data['upd_user_id'] : null;
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets paymeans
     *
     * @return \Emonsite\Models\AssocStructurePayment[]
     */
    public function getPaymeans()
    {
        return $this->container['paymeans'];
    }

    /**
     * Sets paymeans
     *
     * @param \Emonsite\Models\AssocStructurePayment[] $paymeans paymeans
     *
     * @return $this
     */
    public function setPaymeans($paymeans)
    {
        $this->container['paymeans'] = $paymeans;

        return $this;
    }

    /**
     * Gets modules
     *
     * @return \Emonsite\Models\AssocStructureModule[]
     */
    public function getModules()
    {
        return $this->container['modules'];
    }

    /**
     * Sets modules
     *
     * @param \Emonsite\Models\AssocStructureModule[] $modules modules
     *
     * @return $this
     */
    public function setModules($modules)
    {
        $this->container['modules'] = $modules;

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
     * Gets site
     *
     * @return \Emonsite\Models\Site
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param \Emonsite\Models\Site $site site
     *
     * @return $this
     */
    public function setSite($site)
    {
        $this->container['site'] = $site;

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
     * Gets upd_dt
     *
     * @return int
     */
    public function getUpdDt()
    {
        return $this->container['upd_dt'];
    }

    /**
     * Sets upd_dt
     *
     * @param int $upd_dt upd_dt
     *
     * @return $this
     */
    public function setUpdDt($upd_dt)
    {
        $this->container['upd_dt'] = $upd_dt;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
     * Gets upd_user_id
     *
     * @return string
     */
    public function getUpdUserId()
    {
        return $this->container['upd_user_id'];
    }

    /**
     * Sets upd_user_id
     *
     * @param string $upd_user_id upd_user_id
     *
     * @return $this
     */
    public function setUpdUserId($upd_user_id)
    {
        $this->container['upd_user_id'] = $upd_user_id;

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
