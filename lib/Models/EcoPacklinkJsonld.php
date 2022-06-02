<?php
/**
 * EcoPacklinkJsonld
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
 * EcoPacklinkJsonld Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcoPacklinkJsonld implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EcoPacklink:jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
'id' => 'string',
'type' => 'string',
'eco_config' => '\EmonsiteApi\Models\EcoSiteJsonld',
'api_key' => 'string',
'active_carriers' => 'string[]',
'firstname' => 'string',
'lastname' => 'string',
'company' => 'string',
'email' => 'string',
'address' => 'string',
'city' => 'string',
'zip' => 'string',
'country' => 'string',
'phone' => 'string',
'packages' => 'string[]',
'package_defined' => 'bool',
'sender_defined' => 'bool',
'zones' => '\EmonsiteApi\Models\EcoPacklinkHasZoneJsonld[]',
'tax' => 'string',
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
'eco_config' => null,
'api_key' => null,
'active_carriers' => 'iri-reference',
'firstname' => null,
'lastname' => null,
'company' => null,
'email' => null,
'address' => null,
'city' => null,
'zip' => null,
'country' => null,
'phone' => null,
'packages' => null,
'package_defined' => null,
'sender_defined' => null,
'zones' => null,
'tax' => 'iri-reference',
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
'eco_config' => 'ecoConfig',
'api_key' => 'apiKey',
'active_carriers' => 'activeCarriers',
'firstname' => 'firstname',
'lastname' => 'lastname',
'company' => 'company',
'email' => 'email',
'address' => 'address',
'city' => 'city',
'zip' => 'zip',
'country' => 'country',
'phone' => 'phone',
'packages' => 'packages',
'package_defined' => 'packageDefined',
'sender_defined' => 'senderDefined',
'zones' => 'zones',
'tax' => 'tax',
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
'eco_config' => 'setEcoConfig',
'api_key' => 'setApiKey',
'active_carriers' => 'setActiveCarriers',
'firstname' => 'setFirstname',
'lastname' => 'setLastname',
'company' => 'setCompany',
'email' => 'setEmail',
'address' => 'setAddress',
'city' => 'setCity',
'zip' => 'setZip',
'country' => 'setCountry',
'phone' => 'setPhone',
'packages' => 'setPackages',
'package_defined' => 'setPackageDefined',
'sender_defined' => 'setSenderDefined',
'zones' => 'setZones',
'tax' => 'setTax',
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
'eco_config' => 'getEcoConfig',
'api_key' => 'getApiKey',
'active_carriers' => 'getActiveCarriers',
'firstname' => 'getFirstname',
'lastname' => 'getLastname',
'company' => 'getCompany',
'email' => 'getEmail',
'address' => 'getAddress',
'city' => 'getCity',
'zip' => 'getZip',
'country' => 'getCountry',
'phone' => 'getPhone',
'packages' => 'getPackages',
'package_defined' => 'getPackageDefined',
'sender_defined' => 'getSenderDefined',
'zones' => 'getZones',
'tax' => 'getTax',
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
        $this->container['eco_config'] = isset($data['eco_config']) ? $data['eco_config'] : null;
        $this->container['api_key'] = isset($data['api_key']) ? $data['api_key'] : null;
        $this->container['active_carriers'] = isset($data['active_carriers']) ? $data['active_carriers'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['packages'] = isset($data['packages']) ? $data['packages'] : null;
        $this->container['package_defined'] = isset($data['package_defined']) ? $data['package_defined'] : null;
        $this->container['sender_defined'] = isset($data['sender_defined']) ? $data['sender_defined'] : null;
        $this->container['zones'] = isset($data['zones']) ? $data['zones'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
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
     * Gets eco_config
     *
     * @return \EmonsiteApi\Models\EcoSiteJsonld
     */
    public function getEcoConfig()
    {
        return $this->container['eco_config'];
    }

    /**
     * Sets eco_config
     *
     * @param \EmonsiteApi\Models\EcoSiteJsonld $eco_config eco_config
     *
     * @return $this
     */
    public function setEcoConfig($eco_config)
    {
        $this->container['eco_config'] = $eco_config;

        return $this;
    }

    /**
     * Gets api_key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string $api_key api_key
     *
     * @return $this
     */
    public function setApiKey($api_key)
    {
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets active_carriers
     *
     * @return string[]
     */
    public function getActiveCarriers()
    {
        return $this->container['active_carriers'];
    }

    /**
     * Sets active_carriers
     *
     * @param string[] $active_carriers active_carriers
     *
     * @return $this
     */
    public function setActiveCarriers($active_carriers)
    {
        $this->container['active_carriers'] = $active_carriers;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string $firstname firstname
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

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
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

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
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string $zip zip
     *
     * @return $this
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets packages
     *
     * @return string[]
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param string[] $packages packages
     *
     * @return $this
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets package_defined
     *
     * @return bool
     */
    public function getPackageDefined()
    {
        return $this->container['package_defined'];
    }

    /**
     * Sets package_defined
     *
     * @param bool $package_defined Détermine si un colis type a été renseigné
     *
     * @return $this
     */
    public function setPackageDefined($package_defined)
    {
        $this->container['package_defined'] = $package_defined;

        return $this;
    }

    /**
     * Gets sender_defined
     *
     * @return bool
     */
    public function getSenderDefined()
    {
        return $this->container['sender_defined'];
    }

    /**
     * Sets sender_defined
     *
     * @param bool $sender_defined Détermine si les coordonnées d'expéditeurs ont été renseignés
     *
     * @return $this
     */
    public function setSenderDefined($sender_defined)
    {
        $this->container['sender_defined'] = $sender_defined;

        return $this;
    }

    /**
     * Gets zones
     *
     * @return \EmonsiteApi\Models\EcoPacklinkHasZoneJsonld[]
     */
    public function getZones()
    {
        return $this->container['zones'];
    }

    /**
     * Sets zones
     *
     * @param \EmonsiteApi\Models\EcoPacklinkHasZoneJsonld[] $zones zones
     *
     * @return $this
     */
    public function setZones($zones)
    {
        $this->container['zones'] = $zones;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return string
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param string $tax tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

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
