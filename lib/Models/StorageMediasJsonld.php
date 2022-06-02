<?php
/**
 * StorageMediasJsonld
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
 * StorageMediasJsonld Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StorageMediasJsonld implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StorageMedias:jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
'id' => 'string',
'type' => 'string',
'id' => 'string',
'add_dt' => 'int',
'add_user_id' => 'string',
'filesize' => 'int',
'filemime' => 'string',
'trash' => 'bool',
'storage_name' => 'string',
'storage_path' => 'string',
'public_path' => 'string',
'privatefilepath' => 'string',
'private_filename' => 'string',
'public_filename' => 'string',
'public_file_path' => 'string',
'site' => '\EmonsiteApi\Models\SiteJsonld'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
'id' => null,
'type' => null,
'id' => null,
'add_dt' => null,
'add_user_id' => null,
'filesize' => null,
'filemime' => null,
'trash' => null,
'storage_name' => null,
'storage_path' => null,
'public_path' => null,
'privatefilepath' => null,
'private_filename' => null,
'public_filename' => null,
'public_file_path' => null,
'site' => null    ];

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
'id' => 'id',
'add_dt' => 'addDt',
'add_user_id' => 'addUserId',
'filesize' => 'filesize',
'filemime' => 'filemime',
'trash' => 'trash',
'storage_name' => 'storageName',
'storage_path' => 'storagePath',
'public_path' => 'publicPath',
'privatefilepath' => 'privatefilepath',
'private_filename' => 'privateFilename',
'public_filename' => 'publicFilename',
'public_file_path' => 'publicFilePath',
'site' => 'site'    ];

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
'add_dt' => 'setAddDt',
'add_user_id' => 'setAddUserId',
'filesize' => 'setFilesize',
'filemime' => 'setFilemime',
'trash' => 'setTrash',
'storage_name' => 'setStorageName',
'storage_path' => 'setStoragePath',
'public_path' => 'setPublicPath',
'privatefilepath' => 'setPrivatefilepath',
'private_filename' => 'setPrivateFilename',
'public_filename' => 'setPublicFilename',
'public_file_path' => 'setPublicFilePath',
'site' => 'setSite'    ];

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
'add_dt' => 'getAddDt',
'add_user_id' => 'getAddUserId',
'filesize' => 'getFilesize',
'filemime' => 'getFilemime',
'trash' => 'getTrash',
'storage_name' => 'getStorageName',
'storage_path' => 'getStoragePath',
'public_path' => 'getPublicPath',
'privatefilepath' => 'getPrivatefilepath',
'private_filename' => 'getPrivateFilename',
'public_filename' => 'getPublicFilename',
'public_file_path' => 'getPublicFilePath',
'site' => 'getSite'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['add_dt'] = isset($data['add_dt']) ? $data['add_dt'] : null;
        $this->container['add_user_id'] = isset($data['add_user_id']) ? $data['add_user_id'] : null;
        $this->container['filesize'] = isset($data['filesize']) ? $data['filesize'] : null;
        $this->container['filemime'] = isset($data['filemime']) ? $data['filemime'] : null;
        $this->container['trash'] = isset($data['trash']) ? $data['trash'] : null;
        $this->container['storage_name'] = isset($data['storage_name']) ? $data['storage_name'] : null;
        $this->container['storage_path'] = isset($data['storage_path']) ? $data['storage_path'] : null;
        $this->container['public_path'] = isset($data['public_path']) ? $data['public_path'] : null;
        $this->container['privatefilepath'] = isset($data['privatefilepath']) ? $data['privatefilepath'] : null;
        $this->container['private_filename'] = isset($data['private_filename']) ? $data['private_filename'] : null;
        $this->container['public_filename'] = isset($data['public_filename']) ? $data['public_filename'] : null;
        $this->container['public_file_path'] = isset($data['public_file_path']) ? $data['public_file_path'] : null;
        $this->container['site'] = isset($data['site']) ? $data['site'] : null;
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
     * Gets filesize
     *
     * @return int
     */
    public function getFilesize()
    {
        return $this->container['filesize'];
    }

    /**
     * Sets filesize
     *
     * @param int $filesize filesize
     *
     * @return $this
     */
    public function setFilesize($filesize)
    {
        $this->container['filesize'] = $filesize;

        return $this;
    }

    /**
     * Gets filemime
     *
     * @return string
     */
    public function getFilemime()
    {
        return $this->container['filemime'];
    }

    /**
     * Sets filemime
     *
     * @param string $filemime filemime
     *
     * @return $this
     */
    public function setFilemime($filemime)
    {
        $this->container['filemime'] = $filemime;

        return $this;
    }

    /**
     * Gets trash
     *
     * @return bool
     */
    public function getTrash()
    {
        return $this->container['trash'];
    }

    /**
     * Sets trash
     *
     * @param bool $trash trash
     *
     * @return $this
     */
    public function setTrash($trash)
    {
        $this->container['trash'] = $trash;

        return $this;
    }

    /**
     * Gets storage_name
     *
     * @return string
     */
    public function getStorageName()
    {
        return $this->container['storage_name'];
    }

    /**
     * Sets storage_name
     *
     * @param string $storage_name storage_name
     *
     * @return $this
     */
    public function setStorageName($storage_name)
    {
        $this->container['storage_name'] = $storage_name;

        return $this;
    }

    /**
     * Gets storage_path
     *
     * @return string
     */
    public function getStoragePath()
    {
        return $this->container['storage_path'];
    }

    /**
     * Sets storage_path
     *
     * @param string $storage_path TODO juste setter un champ.
     *
     * @return $this
     */
    public function setStoragePath($storage_path)
    {
        $this->container['storage_path'] = $storage_path;

        return $this;
    }

    /**
     * Gets public_path
     *
     * @return string
     */
    public function getPublicPath()
    {
        return $this->container['public_path'];
    }

    /**
     * Sets public_path
     *
     * @param string $public_path public_path
     *
     * @return $this
     */
    public function setPublicPath($public_path)
    {
        $this->container['public_path'] = $public_path;

        return $this;
    }

    /**
     * Gets privatefilepath
     *
     * @return string
     */
    public function getPrivatefilepath()
    {
        return $this->container['privatefilepath'];
    }

    /**
     * Sets privatefilepath
     *
     * @param string $privatefilepath privatefilepath
     *
     * @return $this
     */
    public function setPrivatefilepath($privatefilepath)
    {
        $this->container['privatefilepath'] = $privatefilepath;

        return $this;
    }

    /**
     * Gets private_filename
     *
     * @return string
     */
    public function getPrivateFilename()
    {
        return $this->container['private_filename'];
    }

    /**
     * Sets private_filename
     *
     * @param string $private_filename private_filename
     *
     * @return $this
     */
    public function setPrivateFilename($private_filename)
    {
        $this->container['private_filename'] = $private_filename;

        return $this;
    }

    /**
     * Gets public_filename
     *
     * @return string
     */
    public function getPublicFilename()
    {
        return $this->container['public_filename'];
    }

    /**
     * Sets public_filename
     *
     * @param string $public_filename public_filename
     *
     * @return $this
     */
    public function setPublicFilename($public_filename)
    {
        $this->container['public_filename'] = $public_filename;

        return $this;
    }

    /**
     * Gets public_file_path
     *
     * @return string
     */
    public function getPublicFilePath()
    {
        return $this->container['public_file_path'];
    }

    /**
     * Sets public_file_path
     *
     * @param string $public_file_path public_file_path
     *
     * @return $this
     */
    public function setPublicFilePath($public_file_path)
    {
        $this->container['public_file_path'] = $public_file_path;

        return $this;
    }

    /**
     * Gets site
     *
     * @return \EmonsiteApi\Models\SiteJsonld
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param \EmonsiteApi\Models\SiteJsonld $site site
     *
     * @return $this
     */
    public function setSite($site)
    {
        $this->container['site'] = $site;

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
