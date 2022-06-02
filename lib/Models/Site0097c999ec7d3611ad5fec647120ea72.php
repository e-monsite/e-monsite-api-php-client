<?php
/**
 * Site0097c999ec7d3611ad5fec647120ea72
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
 * Site0097c999ec7d3611ad5fec647120ea72 Class Doc Comment
 *
 * @category Class
 * @package  Emonsite
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Site0097c999ec7d3611ad5fec647120ea72 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Site:0097c999ec7d3611ad5fec647120ea72';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'created_at' => '\DateTime',
'created_by_ip' => 'string',
'country' => 'string',
'brand' => '',
'sitename' => 'string',
'host' => 'string',
'url' => 'string',
'shard_id' => 'string',
'storage_quota_used' => 'int',
'deleted' => 'bool',
'site_suspend' => 'bool',
'manager_suspend' => 'bool',
'reason_suspend' => 'string',
'whitelist' => 'string',
'last_log_at' => '\DateTime',
'site_users' => '',
'plan' => 'string[]',
'products' => 'string',
'modules' => '',
'title' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'created_at' => 'date-time',
'created_by_ip' => null,
'country' => null,
'brand' => null,
'sitename' => null,
'host' => null,
'url' => null,
'shard_id' => null,
'storage_quota_used' => null,
'deleted' => null,
'site_suspend' => null,
'manager_suspend' => null,
'reason_suspend' => null,
'whitelist' => null,
'last_log_at' => 'date-time',
'site_users' => null,
'plan' => null,
'products' => null,
'modules' => null,
'title' => null    ];

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
'created_by_ip' => 'createdByIp',
'country' => 'country',
'brand' => 'brand',
'sitename' => 'sitename',
'host' => 'host',
'url' => 'url',
'shard_id' => 'shardId',
'storage_quota_used' => 'storageQuotaUsed',
'deleted' => 'deleted',
'site_suspend' => 'siteSuspend',
'manager_suspend' => 'managerSuspend',
'reason_suspend' => 'reasonSuspend',
'whitelist' => 'whitelist',
'last_log_at' => 'lastLogAt',
'site_users' => 'siteUsers',
'plan' => 'plan',
'products' => 'products',
'modules' => 'modules',
'title' => 'title'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'created_at' => 'setCreatedAt',
'created_by_ip' => 'setCreatedByIp',
'country' => 'setCountry',
'brand' => 'setBrand',
'sitename' => 'setSitename',
'host' => 'setHost',
'url' => 'setUrl',
'shard_id' => 'setShardId',
'storage_quota_used' => 'setStorageQuotaUsed',
'deleted' => 'setDeleted',
'site_suspend' => 'setSiteSuspend',
'manager_suspend' => 'setManagerSuspend',
'reason_suspend' => 'setReasonSuspend',
'whitelist' => 'setWhitelist',
'last_log_at' => 'setLastLogAt',
'site_users' => 'setSiteUsers',
'plan' => 'setPlan',
'products' => 'setProducts',
'modules' => 'setModules',
'title' => 'setTitle'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'created_at' => 'getCreatedAt',
'created_by_ip' => 'getCreatedByIp',
'country' => 'getCountry',
'brand' => 'getBrand',
'sitename' => 'getSitename',
'host' => 'getHost',
'url' => 'getUrl',
'shard_id' => 'getShardId',
'storage_quota_used' => 'getStorageQuotaUsed',
'deleted' => 'getDeleted',
'site_suspend' => 'getSiteSuspend',
'manager_suspend' => 'getManagerSuspend',
'reason_suspend' => 'getReasonSuspend',
'whitelist' => 'getWhitelist',
'last_log_at' => 'getLastLogAt',
'site_users' => 'getSiteUsers',
'plan' => 'getPlan',
'products' => 'getProducts',
'modules' => 'getModules',
'title' => 'getTitle'    ];

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
        $this->container['created_by_ip'] = isset($data['created_by_ip']) ? $data['created_by_ip'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['sitename'] = isset($data['sitename']) ? $data['sitename'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['shard_id'] = isset($data['shard_id']) ? $data['shard_id'] : null;
        $this->container['storage_quota_used'] = isset($data['storage_quota_used']) ? $data['storage_quota_used'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['site_suspend'] = isset($data['site_suspend']) ? $data['site_suspend'] : null;
        $this->container['manager_suspend'] = isset($data['manager_suspend']) ? $data['manager_suspend'] : null;
        $this->container['reason_suspend'] = isset($data['reason_suspend']) ? $data['reason_suspend'] : null;
        $this->container['whitelist'] = isset($data['whitelist']) ? $data['whitelist'] : null;
        $this->container['last_log_at'] = isset($data['last_log_at']) ? $data['last_log_at'] : null;
        $this->container['site_users'] = isset($data['site_users']) ? $data['site_users'] : null;
        $this->container['plan'] = isset($data['plan']) ? $data['plan'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['modules'] = isset($data['modules']) ? $data['modules'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
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
     * Gets created_by_ip
     *
     * @return string
     */
    public function getCreatedByIp()
    {
        return $this->container['created_by_ip'];
    }

    /**
     * Sets created_by_ip
     *
     * @param string $created_by_ip created_by_ip
     *
     * @return $this
     */
    public function setCreatedByIp($created_by_ip)
    {
        $this->container['created_by_ip'] = $created_by_ip;

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
     * Gets brand
     *
     * @return 
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param  $brand brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets sitename
     *
     * @return string
     */
    public function getSitename()
    {
        return $this->container['sitename'];
    }

    /**
     * Sets sitename
     *
     * @param string $sitename sitename
     *
     * @return $this
     */
    public function setSitename($sitename)
    {
        $this->container['sitename'] = $sitename;

        return $this;
    }

    /**
     * Gets host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string $host host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets shard_id
     *
     * @return string
     */
    public function getShardId()
    {
        return $this->container['shard_id'];
    }

    /**
     * Sets shard_id
     *
     * @param string $shard_id shard_id
     *
     * @return $this
     */
    public function setShardId($shard_id)
    {
        $this->container['shard_id'] = $shard_id;

        return $this;
    }

    /**
     * Gets storage_quota_used
     *
     * @return int
     */
    public function getStorageQuotaUsed()
    {
        return $this->container['storage_quota_used'];
    }

    /**
     * Sets storage_quota_used
     *
     * @param int $storage_quota_used storage_quota_used
     *
     * @return $this
     */
    public function setStorageQuotaUsed($storage_quota_used)
    {
        $this->container['storage_quota_used'] = $storage_quota_used;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets site_suspend
     *
     * @return bool
     */
    public function getSiteSuspend()
    {
        return $this->container['site_suspend'];
    }

    /**
     * Sets site_suspend
     *
     * @param bool $site_suspend site_suspend
     *
     * @return $this
     */
    public function setSiteSuspend($site_suspend)
    {
        $this->container['site_suspend'] = $site_suspend;

        return $this;
    }

    /**
     * Gets manager_suspend
     *
     * @return bool
     */
    public function getManagerSuspend()
    {
        return $this->container['manager_suspend'];
    }

    /**
     * Sets manager_suspend
     *
     * @param bool $manager_suspend manager_suspend
     *
     * @return $this
     */
    public function setManagerSuspend($manager_suspend)
    {
        $this->container['manager_suspend'] = $manager_suspend;

        return $this;
    }

    /**
     * Gets reason_suspend
     *
     * @return string
     */
    public function getReasonSuspend()
    {
        return $this->container['reason_suspend'];
    }

    /**
     * Sets reason_suspend
     *
     * @param string $reason_suspend reason_suspend
     *
     * @return $this
     */
    public function setReasonSuspend($reason_suspend)
    {
        $this->container['reason_suspend'] = $reason_suspend;

        return $this;
    }

    /**
     * Gets whitelist
     *
     * @return string
     */
    public function getWhitelist()
    {
        return $this->container['whitelist'];
    }

    /**
     * Sets whitelist
     *
     * @param string $whitelist whitelist
     *
     * @return $this
     */
    public function setWhitelist($whitelist)
    {
        $this->container['whitelist'] = $whitelist;

        return $this;
    }

    /**
     * Gets last_log_at
     *
     * @return \DateTime
     */
    public function getLastLogAt()
    {
        return $this->container['last_log_at'];
    }

    /**
     * Sets last_log_at
     *
     * @param \DateTime $last_log_at last_log_at
     *
     * @return $this
     */
    public function setLastLogAt($last_log_at)
    {
        $this->container['last_log_at'] = $last_log_at;

        return $this;
    }

    /**
     * Gets site_users
     *
     * @return 
     */
    public function getSiteUsers()
    {
        return $this->container['site_users'];
    }

    /**
     * Sets site_users
     *
     * @param  $site_users site_users
     *
     * @return $this
     */
    public function setSiteUsers($site_users)
    {
        $this->container['site_users'] = $site_users;

        return $this;
    }

    /**
     * Gets plan
     *
     * @return string[]
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     *
     * @param string[] $plan Le plan en cours (perso, pro, business, eco)
     *
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->container['plan'] = $plan;

        return $this;
    }

    /**
     * Gets products
     *
     * @return string
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param string $products products
     *
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets modules
     *
     * @return 
     */
    public function getModules()
    {
        return $this->container['modules'];
    }

    /**
     * Sets modules
     *
     * @param  $modules modules
     *
     * @return $this
     */
    public function setModules($modules)
    {
        $this->container['modules'] = $modules;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
