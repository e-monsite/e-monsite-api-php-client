<?php
/**
 * EcoSiteVJsonld
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
 * EcoSiteVJsonld Class Doc Comment
 *
 * @category Class
 * @package  Emonsite
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcoSiteVJsonld implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EcoSiteV:jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
'id' => 'string',
'type' => 'string',
'shop_name' => 'string',
'status_text_stock' => 'string',
'status_text_replenishment' => 'string',
'status_text_break' => 'string',
'status_text_breaking_soon' => 'string',
'breadcrumb' => 'string',
'text_discounts' => 'string',
'special_annotations' => 'string',
'lang' => 'string',
'item' => '\Emonsite\Models\EcoSiteJsonld',
'active' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
'id' => null,
'type' => null,
'shop_name' => null,
'status_text_stock' => null,
'status_text_replenishment' => null,
'status_text_break' => null,
'status_text_breaking_soon' => null,
'breadcrumb' => null,
'text_discounts' => null,
'special_annotations' => null,
'lang' => null,
'item' => null,
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
        'context' => '@context',
'id' => '@id',
'type' => '@type',
'shop_name' => 'shopName',
'status_text_stock' => 'statusTextStock',
'status_text_replenishment' => 'statusTextReplenishment',
'status_text_break' => 'statusTextBreak',
'status_text_breaking_soon' => 'statusTextBreakingSoon',
'breadcrumb' => 'breadcrumb',
'text_discounts' => 'textDiscounts',
'special_annotations' => 'specialAnnotations',
'lang' => 'lang',
'item' => 'item',
'active' => 'active'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
'id' => 'setId',
'type' => 'setType',
'shop_name' => 'setShopName',
'status_text_stock' => 'setStatusTextStock',
'status_text_replenishment' => 'setStatusTextReplenishment',
'status_text_break' => 'setStatusTextBreak',
'status_text_breaking_soon' => 'setStatusTextBreakingSoon',
'breadcrumb' => 'setBreadcrumb',
'text_discounts' => 'setTextDiscounts',
'special_annotations' => 'setSpecialAnnotations',
'lang' => 'setLang',
'item' => 'setItem',
'active' => 'setActive'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
'id' => 'getId',
'type' => 'getType',
'shop_name' => 'getShopName',
'status_text_stock' => 'getStatusTextStock',
'status_text_replenishment' => 'getStatusTextReplenishment',
'status_text_break' => 'getStatusTextBreak',
'status_text_breaking_soon' => 'getStatusTextBreakingSoon',
'breadcrumb' => 'getBreadcrumb',
'text_discounts' => 'getTextDiscounts',
'special_annotations' => 'getSpecialAnnotations',
'lang' => 'getLang',
'item' => 'getItem',
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
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['shop_name'] = isset($data['shop_name']) ? $data['shop_name'] : null;
        $this->container['status_text_stock'] = isset($data['status_text_stock']) ? $data['status_text_stock'] : null;
        $this->container['status_text_replenishment'] = isset($data['status_text_replenishment']) ? $data['status_text_replenishment'] : null;
        $this->container['status_text_break'] = isset($data['status_text_break']) ? $data['status_text_break'] : null;
        $this->container['status_text_breaking_soon'] = isset($data['status_text_breaking_soon']) ? $data['status_text_breaking_soon'] : null;
        $this->container['breadcrumb'] = isset($data['breadcrumb']) ? $data['breadcrumb'] : null;
        $this->container['text_discounts'] = isset($data['text_discounts']) ? $data['text_discounts'] : null;
        $this->container['special_annotations'] = isset($data['special_annotations']) ? $data['special_annotations'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
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
     * Gets shop_name
     *
     * @return string
     */
    public function getShopName()
    {
        return $this->container['shop_name'];
    }

    /**
     * Sets shop_name
     *
     * @param string $shop_name shop_name
     *
     * @return $this
     */
    public function setShopName($shop_name)
    {
        $this->container['shop_name'] = $shop_name;

        return $this;
    }

    /**
     * Gets status_text_stock
     *
     * @return string
     */
    public function getStatusTextStock()
    {
        return $this->container['status_text_stock'];
    }

    /**
     * Sets status_text_stock
     *
     * @param string $status_text_stock status_text_stock
     *
     * @return $this
     */
    public function setStatusTextStock($status_text_stock)
    {
        $this->container['status_text_stock'] = $status_text_stock;

        return $this;
    }

    /**
     * Gets status_text_replenishment
     *
     * @return string
     */
    public function getStatusTextReplenishment()
    {
        return $this->container['status_text_replenishment'];
    }

    /**
     * Sets status_text_replenishment
     *
     * @param string $status_text_replenishment status_text_replenishment
     *
     * @return $this
     */
    public function setStatusTextReplenishment($status_text_replenishment)
    {
        $this->container['status_text_replenishment'] = $status_text_replenishment;

        return $this;
    }

    /**
     * Gets status_text_break
     *
     * @return string
     */
    public function getStatusTextBreak()
    {
        return $this->container['status_text_break'];
    }

    /**
     * Sets status_text_break
     *
     * @param string $status_text_break status_text_break
     *
     * @return $this
     */
    public function setStatusTextBreak($status_text_break)
    {
        $this->container['status_text_break'] = $status_text_break;

        return $this;
    }

    /**
     * Gets status_text_breaking_soon
     *
     * @return string
     */
    public function getStatusTextBreakingSoon()
    {
        return $this->container['status_text_breaking_soon'];
    }

    /**
     * Sets status_text_breaking_soon
     *
     * @param string $status_text_breaking_soon status_text_breaking_soon
     *
     * @return $this
     */
    public function setStatusTextBreakingSoon($status_text_breaking_soon)
    {
        $this->container['status_text_breaking_soon'] = $status_text_breaking_soon;

        return $this;
    }

    /**
     * Gets breadcrumb
     *
     * @return string
     */
    public function getBreadcrumb()
    {
        return $this->container['breadcrumb'];
    }

    /**
     * Sets breadcrumb
     *
     * @param string $breadcrumb pas utilisé apparemment TODO remove
     *
     * @return $this
     */
    public function setBreadcrumb($breadcrumb)
    {
        $this->container['breadcrumb'] = $breadcrumb;

        return $this;
    }

    /**
     * Gets text_discounts
     *
     * @return string
     */
    public function getTextDiscounts()
    {
        return $this->container['text_discounts'];
    }

    /**
     * Sets text_discounts
     *
     * @param string $text_discounts text_discounts
     *
     * @return $this
     */
    public function setTextDiscounts($text_discounts)
    {
        $this->container['text_discounts'] = $text_discounts;

        return $this;
    }

    /**
     * Gets special_annotations
     *
     * @return string
     */
    public function getSpecialAnnotations()
    {
        return $this->container['special_annotations'];
    }

    /**
     * Sets special_annotations
     *
     * @param string $special_annotations special_annotations
     *
     * @return $this
     */
    public function setSpecialAnnotations($special_annotations)
    {
        $this->container['special_annotations'] = $special_annotations;

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
     * Gets item
     *
     * @return \Emonsite\Models\EcoSiteJsonld
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \Emonsite\Models\EcoSiteJsonld $item item
     *
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

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
