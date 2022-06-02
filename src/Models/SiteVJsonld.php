<?php
/**
 * SiteVJsonld
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
 * SiteVJsonld Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SiteVJsonld implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SiteV:jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'context' => 'string',
        'id' => 'string',
        'type' => 'string',
        'title' => 'string',
        'description' => 'string',
        'tagline' => 'string',
        'tagLine' => 'string',
        'zoneTop' => 'string',
        'splashscreenContent' => 'string',
        'splashscreenLinkText' => 'string',
        'notFoundPageTitle' => 'string',
        'dateformat' => 'string',
        'breadcrumb' => 'string',
        'sitemap' => 'string',
        'lang' => 'string',
        'item' => '\EmonsiteApi\Models\SiteJsonld',
        'active' => 'bool'
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
        'title' => null,
        'description' => null,
        'tagline' => null,
        'tagLine' => null,
        'zoneTop' => null,
        'splashscreenContent' => null,
        'splashscreenLinkText' => null,
        'notFoundPageTitle' => null,
        'dateformat' => null,
        'breadcrumb' => null,
        'sitemap' => null,
        'lang' => null,
        'item' => null,
        'active' => null
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
        'title' => 'title',
        'description' => 'description',
        'tagline' => 'tagline',
        'tagLine' => 'tagLine',
        'zoneTop' => 'zoneTop',
        'splashscreenContent' => 'splashscreenContent',
        'splashscreenLinkText' => 'splashscreenLinkText',
        'notFoundPageTitle' => 'notFoundPageTitle',
        'dateformat' => 'dateformat',
        'breadcrumb' => 'breadcrumb',
        'sitemap' => 'sitemap',
        'lang' => 'lang',
        'item' => 'item',
        'active' => 'active'
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
        'title' => 'setTitle',
        'description' => 'setDescription',
        'tagline' => 'setTagline',
        'tagLine' => 'setTagLine',
        'zoneTop' => 'setZoneTop',
        'splashscreenContent' => 'setSplashscreenContent',
        'splashscreenLinkText' => 'setSplashscreenLinkText',
        'notFoundPageTitle' => 'setNotFoundPageTitle',
        'dateformat' => 'setDateformat',
        'breadcrumb' => 'setBreadcrumb',
        'sitemap' => 'setSitemap',
        'lang' => 'setLang',
        'item' => 'setItem',
        'active' => 'setActive'
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
        'title' => 'getTitle',
        'description' => 'getDescription',
        'tagline' => 'getTagline',
        'tagLine' => 'getTagLine',
        'zoneTop' => 'getZoneTop',
        'splashscreenContent' => 'getSplashscreenContent',
        'splashscreenLinkText' => 'getSplashscreenLinkText',
        'notFoundPageTitle' => 'getNotFoundPageTitle',
        'dateformat' => 'getDateformat',
        'breadcrumb' => 'getBreadcrumb',
        'sitemap' => 'getSitemap',
        'lang' => 'getLang',
        'item' => 'getItem',
        'active' => 'getActive'
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['tagline'] = $data['tagline'] ?? null;
        $this->container['tagLine'] = $data['tagLine'] ?? null;
        $this->container['zoneTop'] = $data['zoneTop'] ?? null;
        $this->container['splashscreenContent'] = $data['splashscreenContent'] ?? null;
        $this->container['splashscreenLinkText'] = $data['splashscreenLinkText'] ?? null;
        $this->container['notFoundPageTitle'] = $data['notFoundPageTitle'] ?? null;
        $this->container['dateformat'] = $data['dateformat'] ?? null;
        $this->container['breadcrumb'] = $data['breadcrumb'] ?? null;
        $this->container['sitemap'] = $data['sitemap'] ?? null;
        $this->container['lang'] = $data['lang'] ?? null;
        $this->container['item'] = $data['item'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
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
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets tagline
     *
     * @return string|null
     */
    public function getTagline()
    {
        return $this->container['tagline'];
    }

    /**
     * Sets tagline
     *
     * @param string|null $tagline tagline
     *
     * @return self
     */
    public function setTagline($tagline)
    {
        $this->container['tagline'] = $tagline;

        return $this;
    }

    /**
     * Gets tagLine
     *
     * @return string|null
     */
    public function getTagLine()
    {
        return $this->container['tagLine'];
    }

    /**
     * Sets tagLine
     *
     * @param string|null $tagLine tagLine
     *
     * @return self
     */
    public function setTagLine($tagLine)
    {
        $this->container['tagLine'] = $tagLine;

        return $this;
    }

    /**
     * Gets zoneTop
     *
     * @return string|null
     */
    public function getZoneTop()
    {
        return $this->container['zoneTop'];
    }

    /**
     * Sets zoneTop
     *
     * @param string|null $zoneTop zoneTop
     *
     * @return self
     */
    public function setZoneTop($zoneTop)
    {
        $this->container['zoneTop'] = $zoneTop;

        return $this;
    }

    /**
     * Gets splashscreenContent
     *
     * @return string|null
     */
    public function getSplashscreenContent()
    {
        return $this->container['splashscreenContent'];
    }

    /**
     * Sets splashscreenContent
     *
     * @param string|null $splashscreenContent splashscreenContent
     *
     * @return self
     */
    public function setSplashscreenContent($splashscreenContent)
    {
        $this->container['splashscreenContent'] = $splashscreenContent;

        return $this;
    }

    /**
     * Gets splashscreenLinkText
     *
     * @return string|null
     */
    public function getSplashscreenLinkText()
    {
        return $this->container['splashscreenLinkText'];
    }

    /**
     * Sets splashscreenLinkText
     *
     * @param string|null $splashscreenLinkText splashscreenLinkText
     *
     * @return self
     */
    public function setSplashscreenLinkText($splashscreenLinkText)
    {
        $this->container['splashscreenLinkText'] = $splashscreenLinkText;

        return $this;
    }

    /**
     * Gets notFoundPageTitle
     *
     * @return string|null
     */
    public function getNotFoundPageTitle()
    {
        return $this->container['notFoundPageTitle'];
    }

    /**
     * Sets notFoundPageTitle
     *
     * @param string|null $notFoundPageTitle notFoundPageTitle
     *
     * @return self
     */
    public function setNotFoundPageTitle($notFoundPageTitle)
    {
        $this->container['notFoundPageTitle'] = $notFoundPageTitle;

        return $this;
    }

    /**
     * Gets dateformat
     *
     * @return string|null
     */
    public function getDateformat()
    {
        return $this->container['dateformat'];
    }

    /**
     * Sets dateformat
     *
     * @param string|null $dateformat dateformat
     *
     * @return self
     */
    public function setDateformat($dateformat)
    {
        $this->container['dateformat'] = $dateformat;

        return $this;
    }

    /**
     * Gets breadcrumb
     *
     * @return string|null
     */
    public function getBreadcrumb()
    {
        return $this->container['breadcrumb'];
    }

    /**
     * Sets breadcrumb
     *
     * @param string|null $breadcrumb breadcrumb
     *
     * @return self
     */
    public function setBreadcrumb($breadcrumb)
    {
        $this->container['breadcrumb'] = $breadcrumb;

        return $this;
    }

    /**
     * Gets sitemap
     *
     * @return string|null
     */
    public function getSitemap()
    {
        return $this->container['sitemap'];
    }

    /**
     * Sets sitemap
     *
     * @param string|null $sitemap sitemap
     *
     * @return self
     */
    public function setSitemap($sitemap)
    {
        $this->container['sitemap'] = $sitemap;

        return $this;
    }

    /**
     * Gets lang
     *
     * @return string|null
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param string|null $lang lang
     *
     * @return self
     */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;

        return $this;
    }

    /**
     * Gets item
     *
     * @return \EmonsiteApi\Models\SiteJsonld|null
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \EmonsiteApi\Models\SiteJsonld|null $item item
     *
     * @return self
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

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


