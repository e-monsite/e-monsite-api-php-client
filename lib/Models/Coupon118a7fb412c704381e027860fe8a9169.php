<?php
/**
 * Coupon118a7fb412c704381e027860fe8a9169
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
 * Coupon118a7fb412c704381e027860fe8a9169 Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Coupon118a7fb412c704381e027860fe8a9169 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Coupon:118a7fb412c704381e027860fe8a9169';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
'offers' => 'string[]',
'available_on_renew' => 'bool',
'available_on_newbuy' => 'bool',
'max_used_nb' => 'int',
'freetime' => 'bool',
'min_dt' => 'int',
'max_dt' => 'int',
'user_id' => 'string',
'site_id' => 'string',
'brand_id' => 'string',
'paymean' => 'string',
'value_eur' => 'float',
'value_usd' => 'float',
'value_aud' => 'float',
'value_cad' => 'float',
'value_gbp' => 'float',
'value_percent' => 'int',
'applicable_on' => 'string',
'min_price_eur' => 'float',
'min_price_usd' => 'float',
'min_price_aud' => 'float',
'min_price_cad' => 'float',
'min_price_gbp' => 'float',
'reduction_on' => 'string',
'active_offers' => 'string[]',
'versions' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
'offers' => null,
'available_on_renew' => null,
'available_on_newbuy' => null,
'max_used_nb' => null,
'freetime' => null,
'min_dt' => null,
'max_dt' => null,
'user_id' => null,
'site_id' => null,
'brand_id' => null,
'paymean' => null,
'value_eur' => null,
'value_usd' => null,
'value_aud' => null,
'value_cad' => null,
'value_gbp' => null,
'value_percent' => null,
'applicable_on' => null,
'min_price_eur' => null,
'min_price_usd' => null,
'min_price_aud' => null,
'min_price_cad' => null,
'min_price_gbp' => null,
'reduction_on' => null,
'active_offers' => null,
'versions' => null    ];

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
        'code' => 'code',
'offers' => 'offers',
'available_on_renew' => 'availableOnRenew',
'available_on_newbuy' => 'availableOnNewbuy',
'max_used_nb' => 'maxUsedNb',
'freetime' => 'freetime',
'min_dt' => 'minDt',
'max_dt' => 'maxDt',
'user_id' => 'userId',
'site_id' => 'siteId',
'brand_id' => 'brandId',
'paymean' => 'paymean',
'value_eur' => 'valueEur',
'value_usd' => 'valueUsd',
'value_aud' => 'valueAud',
'value_cad' => 'valueCad',
'value_gbp' => 'valueGbp',
'value_percent' => 'valuePercent',
'applicable_on' => 'applicableOn',
'min_price_eur' => 'minPriceEur',
'min_price_usd' => 'minPriceUsd',
'min_price_aud' => 'minPriceAud',
'min_price_cad' => 'minPriceCad',
'min_price_gbp' => 'minPriceGbp',
'reduction_on' => 'reductionOn',
'active_offers' => 'activeOffers',
'versions' => 'versions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
'offers' => 'setOffers',
'available_on_renew' => 'setAvailableOnRenew',
'available_on_newbuy' => 'setAvailableOnNewbuy',
'max_used_nb' => 'setMaxUsedNb',
'freetime' => 'setFreetime',
'min_dt' => 'setMinDt',
'max_dt' => 'setMaxDt',
'user_id' => 'setUserId',
'site_id' => 'setSiteId',
'brand_id' => 'setBrandId',
'paymean' => 'setPaymean',
'value_eur' => 'setValueEur',
'value_usd' => 'setValueUsd',
'value_aud' => 'setValueAud',
'value_cad' => 'setValueCad',
'value_gbp' => 'setValueGbp',
'value_percent' => 'setValuePercent',
'applicable_on' => 'setApplicableOn',
'min_price_eur' => 'setMinPriceEur',
'min_price_usd' => 'setMinPriceUsd',
'min_price_aud' => 'setMinPriceAud',
'min_price_cad' => 'setMinPriceCad',
'min_price_gbp' => 'setMinPriceGbp',
'reduction_on' => 'setReductionOn',
'active_offers' => 'setActiveOffers',
'versions' => 'setVersions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
'offers' => 'getOffers',
'available_on_renew' => 'getAvailableOnRenew',
'available_on_newbuy' => 'getAvailableOnNewbuy',
'max_used_nb' => 'getMaxUsedNb',
'freetime' => 'getFreetime',
'min_dt' => 'getMinDt',
'max_dt' => 'getMaxDt',
'user_id' => 'getUserId',
'site_id' => 'getSiteId',
'brand_id' => 'getBrandId',
'paymean' => 'getPaymean',
'value_eur' => 'getValueEur',
'value_usd' => 'getValueUsd',
'value_aud' => 'getValueAud',
'value_cad' => 'getValueCad',
'value_gbp' => 'getValueGbp',
'value_percent' => 'getValuePercent',
'applicable_on' => 'getApplicableOn',
'min_price_eur' => 'getMinPriceEur',
'min_price_usd' => 'getMinPriceUsd',
'min_price_aud' => 'getMinPriceAud',
'min_price_cad' => 'getMinPriceCad',
'min_price_gbp' => 'getMinPriceGbp',
'reduction_on' => 'getReductionOn',
'active_offers' => 'getActiveOffers',
'versions' => 'getVersions'    ];

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

    const APPLICABLE_ON_CURRENCY = 'currency';
const APPLICABLE_ON_PERCENT = 'percent';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApplicableOnAllowableValues()
    {
        return [
            self::APPLICABLE_ON_CURRENCY,
self::APPLICABLE_ON_PERCENT,        ];
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['offers'] = isset($data['offers']) ? $data['offers'] : null;
        $this->container['available_on_renew'] = isset($data['available_on_renew']) ? $data['available_on_renew'] : null;
        $this->container['available_on_newbuy'] = isset($data['available_on_newbuy']) ? $data['available_on_newbuy'] : null;
        $this->container['max_used_nb'] = isset($data['max_used_nb']) ? $data['max_used_nb'] : null;
        $this->container['freetime'] = isset($data['freetime']) ? $data['freetime'] : null;
        $this->container['min_dt'] = isset($data['min_dt']) ? $data['min_dt'] : null;
        $this->container['max_dt'] = isset($data['max_dt']) ? $data['max_dt'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['site_id'] = isset($data['site_id']) ? $data['site_id'] : null;
        $this->container['brand_id'] = isset($data['brand_id']) ? $data['brand_id'] : null;
        $this->container['paymean'] = isset($data['paymean']) ? $data['paymean'] : null;
        $this->container['value_eur'] = isset($data['value_eur']) ? $data['value_eur'] : null;
        $this->container['value_usd'] = isset($data['value_usd']) ? $data['value_usd'] : null;
        $this->container['value_aud'] = isset($data['value_aud']) ? $data['value_aud'] : null;
        $this->container['value_cad'] = isset($data['value_cad']) ? $data['value_cad'] : null;
        $this->container['value_gbp'] = isset($data['value_gbp']) ? $data['value_gbp'] : null;
        $this->container['value_percent'] = isset($data['value_percent']) ? $data['value_percent'] : null;
        $this->container['applicable_on'] = isset($data['applicable_on']) ? $data['applicable_on'] : null;
        $this->container['min_price_eur'] = isset($data['min_price_eur']) ? $data['min_price_eur'] : null;
        $this->container['min_price_usd'] = isset($data['min_price_usd']) ? $data['min_price_usd'] : null;
        $this->container['min_price_aud'] = isset($data['min_price_aud']) ? $data['min_price_aud'] : null;
        $this->container['min_price_cad'] = isset($data['min_price_cad']) ? $data['min_price_cad'] : null;
        $this->container['min_price_gbp'] = isset($data['min_price_gbp']) ? $data['min_price_gbp'] : null;
        $this->container['reduction_on'] = isset($data['reduction_on']) ? $data['reduction_on'] : null;
        $this->container['active_offers'] = isset($data['active_offers']) ? $data['active_offers'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['applicable_on'] === null) {
            $invalidProperties[] = "'applicable_on' can't be null";
        }
        $allowedValues = $this->getApplicableOnAllowableValues();
        if (!is_null($this->container['applicable_on']) && !in_array($this->container['applicable_on'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'applicable_on', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets offers
     *
     * @return string[]
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     *
     * @param string[] $offers offers
     *
     * @return $this
     */
    public function setOffers($offers)
    {
        $this->container['offers'] = $offers;

        return $this;
    }

    /**
     * Gets available_on_renew
     *
     * @return bool
     */
    public function getAvailableOnRenew()
    {
        return $this->container['available_on_renew'];
    }

    /**
     * Sets available_on_renew
     *
     * @param bool $available_on_renew available_on_renew
     *
     * @return $this
     */
    public function setAvailableOnRenew($available_on_renew)
    {
        $this->container['available_on_renew'] = $available_on_renew;

        return $this;
    }

    /**
     * Gets available_on_newbuy
     *
     * @return bool
     */
    public function getAvailableOnNewbuy()
    {
        return $this->container['available_on_newbuy'];
    }

    /**
     * Sets available_on_newbuy
     *
     * @param bool $available_on_newbuy available_on_newbuy
     *
     * @return $this
     */
    public function setAvailableOnNewbuy($available_on_newbuy)
    {
        $this->container['available_on_newbuy'] = $available_on_newbuy;

        return $this;
    }

    /**
     * Gets max_used_nb
     *
     * @return int
     */
    public function getMaxUsedNb()
    {
        return $this->container['max_used_nb'];
    }

    /**
     * Sets max_used_nb
     *
     * @param int $max_used_nb max_used_nb
     *
     * @return $this
     */
    public function setMaxUsedNb($max_used_nb)
    {
        $this->container['max_used_nb'] = $max_used_nb;

        return $this;
    }

    /**
     * Gets freetime
     *
     * @return bool
     */
    public function getFreetime()
    {
        return $this->container['freetime'];
    }

    /**
     * Sets freetime
     *
     * @param bool $freetime freetime
     *
     * @return $this
     */
    public function setFreetime($freetime)
    {
        $this->container['freetime'] = $freetime;

        return $this;
    }

    /**
     * Gets min_dt
     *
     * @return int
     */
    public function getMinDt()
    {
        return $this->container['min_dt'];
    }

    /**
     * Sets min_dt
     *
     * @param int $min_dt min_dt
     *
     * @return $this
     */
    public function setMinDt($min_dt)
    {
        $this->container['min_dt'] = $min_dt;

        return $this;
    }

    /**
     * Gets max_dt
     *
     * @return int
     */
    public function getMaxDt()
    {
        return $this->container['max_dt'];
    }

    /**
     * Sets max_dt
     *
     * @param int $max_dt max_dt
     *
     * @return $this
     */
    public function setMaxDt($max_dt)
    {
        $this->container['max_dt'] = $max_dt;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets site_id
     *
     * @return string
     */
    public function getSiteId()
    {
        return $this->container['site_id'];
    }

    /**
     * Sets site_id
     *
     * @param string $site_id site_id
     *
     * @return $this
     */
    public function setSiteId($site_id)
    {
        $this->container['site_id'] = $site_id;

        return $this;
    }

    /**
     * Gets brand_id
     *
     * @return string
     */
    public function getBrandId()
    {
        return $this->container['brand_id'];
    }

    /**
     * Sets brand_id
     *
     * @param string $brand_id brand_id
     *
     * @return $this
     */
    public function setBrandId($brand_id)
    {
        $this->container['brand_id'] = $brand_id;

        return $this;
    }

    /**
     * Gets paymean
     *
     * @return string
     */
    public function getPaymean()
    {
        return $this->container['paymean'];
    }

    /**
     * Sets paymean
     *
     * @param string $paymean paymean
     *
     * @return $this
     */
    public function setPaymean($paymean)
    {
        $this->container['paymean'] = $paymean;

        return $this;
    }

    /**
     * Gets value_eur
     *
     * @return float
     */
    public function getValueEur()
    {
        return $this->container['value_eur'];
    }

    /**
     * Sets value_eur
     *
     * @param float $value_eur value_eur
     *
     * @return $this
     */
    public function setValueEur($value_eur)
    {
        $this->container['value_eur'] = $value_eur;

        return $this;
    }

    /**
     * Gets value_usd
     *
     * @return float
     */
    public function getValueUsd()
    {
        return $this->container['value_usd'];
    }

    /**
     * Sets value_usd
     *
     * @param float $value_usd value_usd
     *
     * @return $this
     */
    public function setValueUsd($value_usd)
    {
        $this->container['value_usd'] = $value_usd;

        return $this;
    }

    /**
     * Gets value_aud
     *
     * @return float
     */
    public function getValueAud()
    {
        return $this->container['value_aud'];
    }

    /**
     * Sets value_aud
     *
     * @param float $value_aud value_aud
     *
     * @return $this
     */
    public function setValueAud($value_aud)
    {
        $this->container['value_aud'] = $value_aud;

        return $this;
    }

    /**
     * Gets value_cad
     *
     * @return float
     */
    public function getValueCad()
    {
        return $this->container['value_cad'];
    }

    /**
     * Sets value_cad
     *
     * @param float $value_cad value_cad
     *
     * @return $this
     */
    public function setValueCad($value_cad)
    {
        $this->container['value_cad'] = $value_cad;

        return $this;
    }

    /**
     * Gets value_gbp
     *
     * @return float
     */
    public function getValueGbp()
    {
        return $this->container['value_gbp'];
    }

    /**
     * Sets value_gbp
     *
     * @param float $value_gbp value_gbp
     *
     * @return $this
     */
    public function setValueGbp($value_gbp)
    {
        $this->container['value_gbp'] = $value_gbp;

        return $this;
    }

    /**
     * Gets value_percent
     *
     * @return int
     */
    public function getValuePercent()
    {
        return $this->container['value_percent'];
    }

    /**
     * Sets value_percent
     *
     * @param int $value_percent value_percent
     *
     * @return $this
     */
    public function setValuePercent($value_percent)
    {
        $this->container['value_percent'] = $value_percent;

        return $this;
    }

    /**
     * Gets applicable_on
     *
     * @return string
     */
    public function getApplicableOn()
    {
        return $this->container['applicable_on'];
    }

    /**
     * Sets applicable_on
     *
     * @param string $applicable_on applicable_on
     *
     * @return $this
     */
    public function setApplicableOn($applicable_on)
    {
        $allowedValues = $this->getApplicableOnAllowableValues();
        if (!in_array($applicable_on, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'applicable_on', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['applicable_on'] = $applicable_on;

        return $this;
    }

    /**
     * Gets min_price_eur
     *
     * @return float
     */
    public function getMinPriceEur()
    {
        return $this->container['min_price_eur'];
    }

    /**
     * Sets min_price_eur
     *
     * @param float $min_price_eur min_price_eur
     *
     * @return $this
     */
    public function setMinPriceEur($min_price_eur)
    {
        $this->container['min_price_eur'] = $min_price_eur;

        return $this;
    }

    /**
     * Gets min_price_usd
     *
     * @return float
     */
    public function getMinPriceUsd()
    {
        return $this->container['min_price_usd'];
    }

    /**
     * Sets min_price_usd
     *
     * @param float $min_price_usd min_price_usd
     *
     * @return $this
     */
    public function setMinPriceUsd($min_price_usd)
    {
        $this->container['min_price_usd'] = $min_price_usd;

        return $this;
    }

    /**
     * Gets min_price_aud
     *
     * @return float
     */
    public function getMinPriceAud()
    {
        return $this->container['min_price_aud'];
    }

    /**
     * Sets min_price_aud
     *
     * @param float $min_price_aud min_price_aud
     *
     * @return $this
     */
    public function setMinPriceAud($min_price_aud)
    {
        $this->container['min_price_aud'] = $min_price_aud;

        return $this;
    }

    /**
     * Gets min_price_cad
     *
     * @return float
     */
    public function getMinPriceCad()
    {
        return $this->container['min_price_cad'];
    }

    /**
     * Sets min_price_cad
     *
     * @param float $min_price_cad min_price_cad
     *
     * @return $this
     */
    public function setMinPriceCad($min_price_cad)
    {
        $this->container['min_price_cad'] = $min_price_cad;

        return $this;
    }

    /**
     * Gets min_price_gbp
     *
     * @return float
     */
    public function getMinPriceGbp()
    {
        return $this->container['min_price_gbp'];
    }

    /**
     * Sets min_price_gbp
     *
     * @param float $min_price_gbp min_price_gbp
     *
     * @return $this
     */
    public function setMinPriceGbp($min_price_gbp)
    {
        $this->container['min_price_gbp'] = $min_price_gbp;

        return $this;
    }

    /**
     * Gets reduction_on
     *
     * @return string
     */
    public function getReductionOn()
    {
        return $this->container['reduction_on'];
    }

    /**
     * Sets reduction_on
     *
     * @param string $reduction_on reduction_on
     *
     * @return $this
     */
    public function setReductionOn($reduction_on)
    {
        $this->container['reduction_on'] = $reduction_on;

        return $this;
    }

    /**
     * Gets active_offers
     *
     * @return string[]
     */
    public function getActiveOffers()
    {
        return $this->container['active_offers'];
    }

    /**
     * Sets active_offers
     *
     * @param string[] $active_offers active_offers
     *
     * @return $this
     */
    public function setActiveOffers($active_offers)
    {
        $this->container['active_offers'] = $active_offers;

        return $this;
    }

    /**
     * Gets versions
     *
     * @return string[]
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     *
     * @param string[] $versions versions
     *
     * @return $this
     */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;

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
