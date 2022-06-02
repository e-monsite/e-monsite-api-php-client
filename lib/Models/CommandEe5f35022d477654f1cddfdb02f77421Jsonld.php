<?php
/**
 * CommandEe5f35022d477654f1cddfdb02f77421Jsonld
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
 * CommandEe5f35022d477654f1cddfdb02f77421Jsonld Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommandEe5f35022d477654f1cddfdb02f77421Jsonld implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Command:ee5f35022d477654f1cddfdb02f77421:jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'type' => 'string',
'context' => 'string',
'id' => 'string',
'created_at' => '\DateTime',
'user' => '',
'payment_dt' => 'int',
'brand' => '',
'reference' => 'string',
'legalform' => 'string',
'total' => 'float',
'paymean' => 'string',
'invoice_url' => 'string',
'firstname' => 'string',
'lastname' => 'string',
'organisation' => 'string',
'addr1' => 'string',
'addr2' => 'string',
'zipcode' => 'string',
'city' => 'string',
'country' => 'string',
'email' => 'string',
'tva_intra' => 'string',
'status' => 'string',
'status_detail' => 'string',
'promo' => 'int',
'currency' => 'string',
'currency_total' => 'float',
'price_without_promos' => 'float',
'currency_price_without_promos' => 'float',
'currency_monthly_total' => 'float',
'monthly_active' => 'bool',
'products' => '',
'invoices' => ''    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'type' => null,
'context' => null,
'id' => null,
'created_at' => 'date-time',
'user' => null,
'payment_dt' => null,
'brand' => null,
'reference' => null,
'legalform' => null,
'total' => null,
'paymean' => null,
'invoice_url' => null,
'firstname' => null,
'lastname' => null,
'organisation' => null,
'addr1' => null,
'addr2' => null,
'zipcode' => null,
'city' => null,
'country' => null,
'email' => null,
'tva_intra' => null,
'status' => null,
'status_detail' => null,
'promo' => null,
'currency' => null,
'currency_total' => null,
'price_without_promos' => null,
'currency_price_without_promos' => null,
'currency_monthly_total' => null,
'monthly_active' => null,
'products' => null,
'invoices' => null    ];

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
        'id' => '@id',
'type' => '@type',
'context' => '@context',
'id' => 'id',
'created_at' => 'createdAt',
'user' => 'user',
'payment_dt' => 'paymentDt',
'brand' => 'brand',
'reference' => 'reference',
'legalform' => 'legalform',
'total' => 'total',
'paymean' => 'paymean',
'invoice_url' => 'invoiceUrl',
'firstname' => 'firstname',
'lastname' => 'lastname',
'organisation' => 'organisation',
'addr1' => 'addr1',
'addr2' => 'addr2',
'zipcode' => 'zipcode',
'city' => 'city',
'country' => 'country',
'email' => 'email',
'tva_intra' => 'tvaIntra',
'status' => 'status',
'status_detail' => 'statusDetail',
'promo' => 'promo',
'currency' => 'currency',
'currency_total' => 'currencyTotal',
'price_without_promos' => 'priceWithoutPromos',
'currency_price_without_promos' => 'currencyPriceWithoutPromos',
'currency_monthly_total' => 'currencyMonthlyTotal',
'monthly_active' => 'monthlyActive',
'products' => 'products',
'invoices' => 'invoices'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'type' => 'setType',
'context' => 'setContext',
'id' => 'setId',
'created_at' => 'setCreatedAt',
'user' => 'setUser',
'payment_dt' => 'setPaymentDt',
'brand' => 'setBrand',
'reference' => 'setReference',
'legalform' => 'setLegalform',
'total' => 'setTotal',
'paymean' => 'setPaymean',
'invoice_url' => 'setInvoiceUrl',
'firstname' => 'setFirstname',
'lastname' => 'setLastname',
'organisation' => 'setOrganisation',
'addr1' => 'setAddr1',
'addr2' => 'setAddr2',
'zipcode' => 'setZipcode',
'city' => 'setCity',
'country' => 'setCountry',
'email' => 'setEmail',
'tva_intra' => 'setTvaIntra',
'status' => 'setStatus',
'status_detail' => 'setStatusDetail',
'promo' => 'setPromo',
'currency' => 'setCurrency',
'currency_total' => 'setCurrencyTotal',
'price_without_promos' => 'setPriceWithoutPromos',
'currency_price_without_promos' => 'setCurrencyPriceWithoutPromos',
'currency_monthly_total' => 'setCurrencyMonthlyTotal',
'monthly_active' => 'setMonthlyActive',
'products' => 'setProducts',
'invoices' => 'setInvoices'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'type' => 'getType',
'context' => 'getContext',
'id' => 'getId',
'created_at' => 'getCreatedAt',
'user' => 'getUser',
'payment_dt' => 'getPaymentDt',
'brand' => 'getBrand',
'reference' => 'getReference',
'legalform' => 'getLegalform',
'total' => 'getTotal',
'paymean' => 'getPaymean',
'invoice_url' => 'getInvoiceUrl',
'firstname' => 'getFirstname',
'lastname' => 'getLastname',
'organisation' => 'getOrganisation',
'addr1' => 'getAddr1',
'addr2' => 'getAddr2',
'zipcode' => 'getZipcode',
'city' => 'getCity',
'country' => 'getCountry',
'email' => 'getEmail',
'tva_intra' => 'getTvaIntra',
'status' => 'getStatus',
'status_detail' => 'getStatusDetail',
'promo' => 'getPromo',
'currency' => 'getCurrency',
'currency_total' => 'getCurrencyTotal',
'price_without_promos' => 'getPriceWithoutPromos',
'currency_price_without_promos' => 'getCurrencyPriceWithoutPromos',
'currency_monthly_total' => 'getCurrencyMonthlyTotal',
'monthly_active' => 'getMonthlyActive',
'products' => 'getProducts',
'invoices' => 'getInvoices'    ];

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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['payment_dt'] = isset($data['payment_dt']) ? $data['payment_dt'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['legalform'] = isset($data['legalform']) ? $data['legalform'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['paymean'] = isset($data['paymean']) ? $data['paymean'] : null;
        $this->container['invoice_url'] = isset($data['invoice_url']) ? $data['invoice_url'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['organisation'] = isset($data['organisation']) ? $data['organisation'] : null;
        $this->container['addr1'] = isset($data['addr1']) ? $data['addr1'] : null;
        $this->container['addr2'] = isset($data['addr2']) ? $data['addr2'] : null;
        $this->container['zipcode'] = isset($data['zipcode']) ? $data['zipcode'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['tva_intra'] = isset($data['tva_intra']) ? $data['tva_intra'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_detail'] = isset($data['status_detail']) ? $data['status_detail'] : null;
        $this->container['promo'] = isset($data['promo']) ? $data['promo'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['currency_total'] = isset($data['currency_total']) ? $data['currency_total'] : null;
        $this->container['price_without_promos'] = isset($data['price_without_promos']) ? $data['price_without_promos'] : null;
        $this->container['currency_price_without_promos'] = isset($data['currency_price_without_promos']) ? $data['currency_price_without_promos'] : null;
        $this->container['currency_monthly_total'] = isset($data['currency_monthly_total']) ? $data['currency_monthly_total'] : null;
        $this->container['monthly_active'] = isset($data['monthly_active']) ? $data['monthly_active'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['invoices'] = isset($data['invoices']) ? $data['invoices'] : null;
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
     * Gets user
     *
     * @return 
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param  $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets payment_dt
     *
     * @return int
     */
    public function getPaymentDt()
    {
        return $this->container['payment_dt'];
    }

    /**
     * Sets payment_dt
     *
     * @param int $payment_dt payment_dt
     *
     * @return $this
     */
    public function setPaymentDt($payment_dt)
    {
        $this->container['payment_dt'] = $payment_dt;

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
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets legalform
     *
     * @return string
     */
    public function getLegalform()
    {
        return $this->container['legalform'];
    }

    /**
     * Sets legalform
     *
     * @param string $legalform legalform
     *
     * @return $this
     */
    public function setLegalform($legalform)
    {
        $this->container['legalform'] = $legalform;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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
     * @param string $paymean cb : CB, check : Chèque, transfer : Virement, paypal : Paypal, credits : Crédits, stripe : Stripe, case : Espèce
     *
     * @return $this
     */
    public function setPaymean($paymean)
    {
        $this->container['paymean'] = $paymean;

        return $this;
    }

    /**
     * Gets invoice_url
     *
     * @return string
     */
    public function getInvoiceUrl()
    {
        return $this->container['invoice_url'];
    }

    /**
     * Sets invoice_url
     *
     * @param string $invoice_url invoice_url
     *
     * @return $this
     */
    public function setInvoiceUrl($invoice_url)
    {
        $this->container['invoice_url'] = $invoice_url;

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
     * Gets organisation
     *
     * @return string
     */
    public function getOrganisation()
    {
        return $this->container['organisation'];
    }

    /**
     * Sets organisation
     *
     * @param string $organisation organisation
     *
     * @return $this
     */
    public function setOrganisation($organisation)
    {
        $this->container['organisation'] = $organisation;

        return $this;
    }

    /**
     * Gets addr1
     *
     * @return string
     */
    public function getAddr1()
    {
        return $this->container['addr1'];
    }

    /**
     * Sets addr1
     *
     * @param string $addr1 addr1
     *
     * @return $this
     */
    public function setAddr1($addr1)
    {
        $this->container['addr1'] = $addr1;

        return $this;
    }

    /**
     * Gets addr2
     *
     * @return string
     */
    public function getAddr2()
    {
        return $this->container['addr2'];
    }

    /**
     * Sets addr2
     *
     * @param string $addr2 addr2
     *
     * @return $this
     */
    public function setAddr2($addr2)
    {
        $this->container['addr2'] = $addr2;

        return $this;
    }

    /**
     * Gets zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     *
     * @param string $zipcode zipcode
     *
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->container['zipcode'] = $zipcode;

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
     * Gets tva_intra
     *
     * @return string
     */
    public function getTvaIntra()
    {
        return $this->container['tva_intra'];
    }

    /**
     * Sets tva_intra
     *
     * @param string $tva_intra tva_intra
     *
     * @return $this
     */
    public function setTvaIntra($tva_intra)
    {
        $this->container['tva_intra'] = $tva_intra;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status cart : Panier, locked : En attente de paiement, paid : Payée, canceled : annulée
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_detail
     *
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->container['status_detail'];
    }

    /**
     * Sets status_detail
     *
     * @param string $status_detail status_detail
     *
     * @return $this
     */
    public function setStatusDetail($status_detail)
    {
        $this->container['status_detail'] = $status_detail;

        return $this;
    }

    /**
     * Gets promo
     *
     * @return int
     */
    public function getPromo()
    {
        return $this->container['promo'];
    }

    /**
     * Sets promo
     *
     * @param int $promo promo
     *
     * @return $this
     */
    public function setPromo($promo)
    {
        $this->container['promo'] = $promo;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets currency_total
     *
     * @return float
     */
    public function getCurrencyTotal()
    {
        return $this->container['currency_total'];
    }

    /**
     * Sets currency_total
     *
     * @param float $currency_total currency_total
     *
     * @return $this
     */
    public function setCurrencyTotal($currency_total)
    {
        $this->container['currency_total'] = $currency_total;

        return $this;
    }

    /**
     * Gets price_without_promos
     *
     * @return float
     */
    public function getPriceWithoutPromos()
    {
        return $this->container['price_without_promos'];
    }

    /**
     * Sets price_without_promos
     *
     * @param float $price_without_promos price_without_promos
     *
     * @return $this
     */
    public function setPriceWithoutPromos($price_without_promos)
    {
        $this->container['price_without_promos'] = $price_without_promos;

        return $this;
    }

    /**
     * Gets currency_price_without_promos
     *
     * @return float
     */
    public function getCurrencyPriceWithoutPromos()
    {
        return $this->container['currency_price_without_promos'];
    }

    /**
     * Sets currency_price_without_promos
     *
     * @param float $currency_price_without_promos currency_price_without_promos
     *
     * @return $this
     */
    public function setCurrencyPriceWithoutPromos($currency_price_without_promos)
    {
        $this->container['currency_price_without_promos'] = $currency_price_without_promos;

        return $this;
    }

    /**
     * Gets currency_monthly_total
     *
     * @return float
     */
    public function getCurrencyMonthlyTotal()
    {
        return $this->container['currency_monthly_total'];
    }

    /**
     * Sets currency_monthly_total
     *
     * @param float $currency_monthly_total currency_monthly_total
     *
     * @return $this
     */
    public function setCurrencyMonthlyTotal($currency_monthly_total)
    {
        $this->container['currency_monthly_total'] = $currency_monthly_total;

        return $this;
    }

    /**
     * Gets monthly_active
     *
     * @return bool
     */
    public function getMonthlyActive()
    {
        return $this->container['monthly_active'];
    }

    /**
     * Sets monthly_active
     *
     * @param bool $monthly_active monthly_active
     *
     * @return $this
     */
    public function setMonthlyActive($monthly_active)
    {
        $this->container['monthly_active'] = $monthly_active;

        return $this;
    }

    /**
     * Gets products
     *
     * @return 
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param  $products products
     *
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets invoices
     *
     * @return 
     */
    public function getInvoices()
    {
        return $this->container['invoices'];
    }

    /**
     * Sets invoices
     *
     * @param  $invoices invoices
     *
     * @return $this
     */
    public function setInvoices($invoices)
    {
        $this->container['invoices'] = $invoices;

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
