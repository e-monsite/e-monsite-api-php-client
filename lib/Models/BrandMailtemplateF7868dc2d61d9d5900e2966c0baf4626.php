<?php
/**
 * BrandMailtemplateF7868dc2d61d9d5900e2966c0baf4626
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
 * BrandMailtemplateF7868dc2d61d9d5900e2966c0baf4626 Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BrandMailtemplateF7868dc2d61d9d5900e2966c0baf4626 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BrandMailtemplate:f7868dc2d61d9d5900e2966c0baf4626';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'add_user_id' => 'string',
'add_dt' => 'int',
'upd_user_id' => 'string',
'upd_dt' => 'int',
'brand' => 'string',
'name' => 'string',
'description' => 'string',
'lang' => 'string',
'template' => 'string',
'active' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'add_user_id' => null,
'add_dt' => null,
'upd_user_id' => null,
'upd_dt' => null,
'brand' => 'iri-reference',
'name' => null,
'description' => null,
'lang' => null,
'template' => null,
'active' => null    ];

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
        'id' => 'id',
'add_user_id' => 'addUserId',
'add_dt' => 'addDt',
'upd_user_id' => 'updUserId',
'upd_dt' => 'updDt',
'brand' => 'brand',
'name' => 'name',
'description' => 'description',
'lang' => 'lang',
'template' => 'template',
'active' => 'active'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'add_user_id' => 'setAddUserId',
'add_dt' => 'setAddDt',
'upd_user_id' => 'setUpdUserId',
'upd_dt' => 'setUpdDt',
'brand' => 'setBrand',
'name' => 'setName',
'description' => 'setDescription',
'lang' => 'setLang',
'template' => 'setTemplate',
'active' => 'setActive'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'add_user_id' => 'getAddUserId',
'add_dt' => 'getAddDt',
'upd_user_id' => 'getUpdUserId',
'upd_dt' => 'getUpdDt',
'brand' => 'getBrand',
'name' => 'getName',
'description' => 'getDescription',
'lang' => 'getLang',
'template' => 'getTemplate',
'active' => 'getActive'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['add_user_id'] = isset($data['add_user_id']) ? $data['add_user_id'] : null;
        $this->container['add_dt'] = isset($data['add_dt']) ? $data['add_dt'] : null;
        $this->container['upd_user_id'] = isset($data['upd_user_id']) ? $data['upd_user_id'] : null;
        $this->container['upd_dt'] = isset($data['upd_dt']) ? $data['upd_dt'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
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
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
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
     * Gets lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param string $lang lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;

        return $this;
    }

    /**
     * Gets template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param string $template template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

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
