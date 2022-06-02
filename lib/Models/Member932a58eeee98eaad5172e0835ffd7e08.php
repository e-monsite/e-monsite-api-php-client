<?php
/**
 * Member932a58eeee98eaad5172e0835ffd7e08
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
 * Member932a58eeee98eaad5172e0835ffd7e08 Class Doc Comment
 *
 * @category Class
 * @package  Emonsite
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Member932a58eeee98eaad5172e0835ffd7e08 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Member:932a58eeee98eaad5172e0835ffd7e08';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'created_at' => '\DateTime',
'username' => 'string',
'email' => 'string',
'gender' => 'string',
'fistrname' => 'string',
'lastname' => 'string',
'birthdate' => '\DateTime',
'newsletter' => 'bool',
'aboutme' => 'string',
'sign' => 'string',
'avatar' => 'string',
'website' => 'string',
'active' => 'bool',
'lang' => 'string',
'loyalty_points' => 'int',
'eco_orders' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'created_at' => 'date-time',
'username' => null,
'email' => null,
'gender' => null,
'fistrname' => null,
'lastname' => null,
'birthdate' => 'date-time',
'newsletter' => null,
'aboutme' => null,
'sign' => null,
'avatar' => null,
'website' => null,
'active' => null,
'lang' => null,
'loyalty_points' => null,
'eco_orders' => null    ];

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
'created_at' => 'createdAt',
'username' => 'username',
'email' => 'email',
'gender' => 'gender',
'fistrname' => 'fistrname',
'lastname' => 'lastname',
'birthdate' => 'birthdate',
'newsletter' => 'newsletter',
'aboutme' => 'aboutme',
'sign' => 'sign',
'avatar' => 'avatar',
'website' => 'website',
'active' => 'active',
'lang' => 'lang',
'loyalty_points' => 'loyaltyPoints',
'eco_orders' => 'ecoOrders'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'created_at' => 'setCreatedAt',
'username' => 'setUsername',
'email' => 'setEmail',
'gender' => 'setGender',
'fistrname' => 'setFistrname',
'lastname' => 'setLastname',
'birthdate' => 'setBirthdate',
'newsletter' => 'setNewsletter',
'aboutme' => 'setAboutme',
'sign' => 'setSign',
'avatar' => 'setAvatar',
'website' => 'setWebsite',
'active' => 'setActive',
'lang' => 'setLang',
'loyalty_points' => 'setLoyaltyPoints',
'eco_orders' => 'setEcoOrders'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'created_at' => 'getCreatedAt',
'username' => 'getUsername',
'email' => 'getEmail',
'gender' => 'getGender',
'fistrname' => 'getFistrname',
'lastname' => 'getLastname',
'birthdate' => 'getBirthdate',
'newsletter' => 'getNewsletter',
'aboutme' => 'getAboutme',
'sign' => 'getSign',
'avatar' => 'getAvatar',
'website' => 'getWebsite',
'active' => 'getActive',
'lang' => 'getLang',
'loyalty_points' => 'getLoyaltyPoints',
'eco_orders' => 'getEcoOrders'    ];

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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['fistrname'] = isset($data['fistrname']) ? $data['fistrname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['birthdate'] = isset($data['birthdate']) ? $data['birthdate'] : null;
        $this->container['newsletter'] = isset($data['newsletter']) ? $data['newsletter'] : null;
        $this->container['aboutme'] = isset($data['aboutme']) ? $data['aboutme'] : null;
        $this->container['sign'] = isset($data['sign']) ? $data['sign'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['loyalty_points'] = isset($data['loyalty_points']) ? $data['loyalty_points'] : null;
        $this->container['eco_orders'] = isset($data['eco_orders']) ? $data['eco_orders'] : null;
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
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender male|female
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets fistrname
     *
     * @return string
     */
    public function getFistrname()
    {
        return $this->container['fistrname'];
    }

    /**
     * Sets fistrname
     *
     * @param string $fistrname fistrname
     *
     * @return $this
     */
    public function setFistrname($fistrname)
    {
        $this->container['fistrname'] = $fistrname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->container['birthdate'];
    }

    /**
     * Sets birthdate
     *
     * @param \DateTime $birthdate birthdate
     *
     * @return $this
     */
    public function setBirthdate($birthdate)
    {
        $this->container['birthdate'] = $birthdate;

        return $this;
    }

    /**
     * Gets newsletter
     *
     * @return bool
     */
    public function getNewsletter()
    {
        return $this->container['newsletter'];
    }

    /**
     * Sets newsletter
     *
     * @param bool $newsletter newsletter
     *
     * @return $this
     */
    public function setNewsletter($newsletter)
    {
        $this->container['newsletter'] = $newsletter;

        return $this;
    }

    /**
     * Gets aboutme
     *
     * @return string
     */
    public function getAboutme()
    {
        return $this->container['aboutme'];
    }

    /**
     * Sets aboutme
     *
     * @param string $aboutme aboutme
     *
     * @return $this
     */
    public function setAboutme($aboutme)
    {
        $this->container['aboutme'] = $aboutme;

        return $this;
    }

    /**
     * Gets sign
     *
     * @return string
     */
    public function getSign()
    {
        return $this->container['sign'];
    }

    /**
     * Sets sign
     *
     * @param string $sign sign
     *
     * @return $this
     */
    public function setSign($sign)
    {
        $this->container['sign'] = $sign;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string $avatar avatar
     *
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string $website website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

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
     * Gets loyalty_points
     *
     * @return int
     */
    public function getLoyaltyPoints()
    {
        return $this->container['loyalty_points'];
    }

    /**
     * Sets loyalty_points
     *
     * @param int $loyalty_points loyalty_points
     *
     * @return $this
     */
    public function setLoyaltyPoints($loyalty_points)
    {
        $this->container['loyalty_points'] = $loyalty_points;

        return $this;
    }

    /**
     * Gets eco_orders
     *
     * @return string[]
     */
    public function getEcoOrders()
    {
        return $this->container['eco_orders'];
    }

    /**
     * Sets eco_orders
     *
     * @param string[] $eco_orders eco_orders
     *
     * @return $this
     */
    public function setEcoOrders($eco_orders)
    {
        $this->container['eco_orders'] = $eco_orders;

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
