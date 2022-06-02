<?php
/**
 * SiteLegal
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
 * SiteLegal Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SiteLegal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Site_legal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'legalMentionActive' => 'bool',
        'legalform' => 'string',
        'headquarter' => 'string',
        'capital' => 'string',
        'legalname' => 'string',
        'bossLegalname' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'address' => 'string',
        'country' => 'string',
        'phone' => 'string',
        'rcs' => 'string',
        'cguActive' => 'bool',
        'retractionActive' => 'bool',
        'cookieActive' => 'bool',
        'privacyPolicyActive' => 'bool',
        'cookies' => '\EmonsiteApi\Models\LegalCookie[]',
        'customCookies' => '\EmonsiteApi\Models\LegalCookie[]',
        'cookie' => '\EmonsiteApi\Models\LegalCookie[]',
        'cguPage' => '\EmonsiteApi\Models\LegalCguPage',
        'cgvPage' => '\EmonsiteApi\Models\LegalCguPage',
        'id' => 'string',
        'site' => '\EmonsiteApi\Models\Site',
        'addDt' => 'int',
        'updDt' => 'int',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'addUserId' => 'string',
        'updUserId' => 'string',
        'versions' => '\EmonsiteApi\Models\LegalV[]',
        'version' => '\EmonsiteApi\Models\VersionInterface[]',
        'defaultLang' => 'string',
        'versionByLang' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'legalMentionActive' => null,
        'legalform' => null,
        'headquarter' => null,
        'capital' => null,
        'legalname' => null,
        'bossLegalname' => null,
        'firstname' => null,
        'lastname' => null,
        'address' => null,
        'country' => null,
        'phone' => null,
        'rcs' => null,
        'cguActive' => null,
        'retractionActive' => null,
        'cookieActive' => null,
        'privacyPolicyActive' => null,
        'cookies' => null,
        'customCookies' => null,
        'cookie' => null,
        'cguPage' => null,
        'cgvPage' => null,
        'id' => null,
        'site' => null,
        'addDt' => null,
        'updDt' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'addUserId' => null,
        'updUserId' => null,
        'versions' => null,
        'version' => null,
        'defaultLang' => null,
        'versionByLang' => null
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
        'legalMentionActive' => 'legalMentionActive',
        'legalform' => 'legalform',
        'headquarter' => 'headquarter',
        'capital' => 'capital',
        'legalname' => 'legalname',
        'bossLegalname' => 'bossLegalname',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'address' => 'address',
        'country' => 'country',
        'phone' => 'phone',
        'rcs' => 'rcs',
        'cguActive' => 'cguActive',
        'retractionActive' => 'retractionActive',
        'cookieActive' => 'cookieActive',
        'privacyPolicyActive' => 'privacyPolicyActive',
        'cookies' => 'cookies',
        'customCookies' => 'customCookies',
        'cookie' => 'cookie',
        'cguPage' => 'cguPage',
        'cgvPage' => 'cgvPage',
        'id' => 'id',
        'site' => 'site',
        'addDt' => 'addDt',
        'updDt' => 'updDt',
        'createdAt' => 'createdAt',
        'updatedAt' => 'updatedAt',
        'addUserId' => 'addUserId',
        'updUserId' => 'updUserId',
        'versions' => 'versions',
        'version' => 'version',
        'defaultLang' => 'defaultLang',
        'versionByLang' => 'versionByLang'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'legalMentionActive' => 'setLegalMentionActive',
        'legalform' => 'setLegalform',
        'headquarter' => 'setHeadquarter',
        'capital' => 'setCapital',
        'legalname' => 'setLegalname',
        'bossLegalname' => 'setBossLegalname',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'address' => 'setAddress',
        'country' => 'setCountry',
        'phone' => 'setPhone',
        'rcs' => 'setRcs',
        'cguActive' => 'setCguActive',
        'retractionActive' => 'setRetractionActive',
        'cookieActive' => 'setCookieActive',
        'privacyPolicyActive' => 'setPrivacyPolicyActive',
        'cookies' => 'setCookies',
        'customCookies' => 'setCustomCookies',
        'cookie' => 'setCookie',
        'cguPage' => 'setCguPage',
        'cgvPage' => 'setCgvPage',
        'id' => 'setId',
        'site' => 'setSite',
        'addDt' => 'setAddDt',
        'updDt' => 'setUpdDt',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'addUserId' => 'setAddUserId',
        'updUserId' => 'setUpdUserId',
        'versions' => 'setVersions',
        'version' => 'setVersion',
        'defaultLang' => 'setDefaultLang',
        'versionByLang' => 'setVersionByLang'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'legalMentionActive' => 'getLegalMentionActive',
        'legalform' => 'getLegalform',
        'headquarter' => 'getHeadquarter',
        'capital' => 'getCapital',
        'legalname' => 'getLegalname',
        'bossLegalname' => 'getBossLegalname',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'address' => 'getAddress',
        'country' => 'getCountry',
        'phone' => 'getPhone',
        'rcs' => 'getRcs',
        'cguActive' => 'getCguActive',
        'retractionActive' => 'getRetractionActive',
        'cookieActive' => 'getCookieActive',
        'privacyPolicyActive' => 'getPrivacyPolicyActive',
        'cookies' => 'getCookies',
        'customCookies' => 'getCustomCookies',
        'cookie' => 'getCookie',
        'cguPage' => 'getCguPage',
        'cgvPage' => 'getCgvPage',
        'id' => 'getId',
        'site' => 'getSite',
        'addDt' => 'getAddDt',
        'updDt' => 'getUpdDt',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'addUserId' => 'getAddUserId',
        'updUserId' => 'getUpdUserId',
        'versions' => 'getVersions',
        'version' => 'getVersion',
        'defaultLang' => 'getDefaultLang',
        'versionByLang' => 'getVersionByLang'
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
        $this->container['legalMentionActive'] = $data['legalMentionActive'] ?? null;
        $this->container['legalform'] = $data['legalform'] ?? null;
        $this->container['headquarter'] = $data['headquarter'] ?? null;
        $this->container['capital'] = $data['capital'] ?? null;
        $this->container['legalname'] = $data['legalname'] ?? null;
        $this->container['bossLegalname'] = $data['bossLegalname'] ?? null;
        $this->container['firstname'] = $data['firstname'] ?? null;
        $this->container['lastname'] = $data['lastname'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['rcs'] = $data['rcs'] ?? null;
        $this->container['cguActive'] = $data['cguActive'] ?? null;
        $this->container['retractionActive'] = $data['retractionActive'] ?? null;
        $this->container['cookieActive'] = $data['cookieActive'] ?? null;
        $this->container['privacyPolicyActive'] = $data['privacyPolicyActive'] ?? null;
        $this->container['cookies'] = $data['cookies'] ?? null;
        $this->container['customCookies'] = $data['customCookies'] ?? null;
        $this->container['cookie'] = $data['cookie'] ?? null;
        $this->container['cguPage'] = $data['cguPage'] ?? null;
        $this->container['cgvPage'] = $data['cgvPage'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['site'] = $data['site'] ?? null;
        $this->container['addDt'] = $data['addDt'] ?? null;
        $this->container['updDt'] = $data['updDt'] ?? null;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['updatedAt'] = $data['updatedAt'] ?? null;
        $this->container['addUserId'] = $data['addUserId'] ?? null;
        $this->container['updUserId'] = $data['updUserId'] ?? null;
        $this->container['versions'] = $data['versions'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['defaultLang'] = $data['defaultLang'] ?? null;
        $this->container['versionByLang'] = $data['versionByLang'] ?? null;
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
     * Gets legalMentionActive
     *
     * @return bool|null
     */
    public function getLegalMentionActive()
    {
        return $this->container['legalMentionActive'];
    }

    /**
     * Sets legalMentionActive
     *
     * @param bool|null $legalMentionActive legalMentionActive
     *
     * @return self
     */
    public function setLegalMentionActive($legalMentionActive)
    {
        $this->container['legalMentionActive'] = $legalMentionActive;

        return $this;
    }

    /**
     * Gets legalform
     *
     * @return string|null
     */
    public function getLegalform()
    {
        return $this->container['legalform'];
    }

    /**
     * Sets legalform
     *
     * @param string|null $legalform TODO enum
     *
     * @return self
     */
    public function setLegalform($legalform)
    {
        $this->container['legalform'] = $legalform;

        return $this;
    }

    /**
     * Gets headquarter
     *
     * @return string|null
     */
    public function getHeadquarter()
    {
        return $this->container['headquarter'];
    }

    /**
     * Sets headquarter
     *
     * @param string|null $headquarter headquarter
     *
     * @return self
     */
    public function setHeadquarter($headquarter)
    {
        $this->container['headquarter'] = $headquarter;

        return $this;
    }

    /**
     * Gets capital
     *
     * @return string|null
     */
    public function getCapital()
    {
        return $this->container['capital'];
    }

    /**
     * Sets capital
     *
     * @param string|null $capital capital
     *
     * @return self
     */
    public function setCapital($capital)
    {
        $this->container['capital'] = $capital;

        return $this;
    }

    /**
     * Gets legalname
     *
     * @return string|null
     */
    public function getLegalname()
    {
        return $this->container['legalname'];
    }

    /**
     * Sets legalname
     *
     * @param string|null $legalname legalname
     *
     * @return self
     */
    public function setLegalname($legalname)
    {
        $this->container['legalname'] = $legalname;

        return $this;
    }

    /**
     * Gets bossLegalname
     *
     * @return string|null
     */
    public function getBossLegalname()
    {
        return $this->container['bossLegalname'];
    }

    /**
     * Sets bossLegalname
     *
     * @param string|null $bossLegalname bossLegalname
     *
     * @return self
     */
    public function setBossLegalname($bossLegalname)
    {
        $this->container['bossLegalname'] = $bossLegalname;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string|null $firstname firstname
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string|null $lastname lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets rcs
     *
     * @return string|null
     */
    public function getRcs()
    {
        return $this->container['rcs'];
    }

    /**
     * Sets rcs
     *
     * @param string|null $rcs rcs
     *
     * @return self
     */
    public function setRcs($rcs)
    {
        $this->container['rcs'] = $rcs;

        return $this;
    }

    /**
     * Gets cguActive
     *
     * @return bool|null
     */
    public function getCguActive()
    {
        return $this->container['cguActive'];
    }

    /**
     * Sets cguActive
     *
     * @param bool|null $cguActive cguActive
     *
     * @return self
     */
    public function setCguActive($cguActive)
    {
        $this->container['cguActive'] = $cguActive;

        return $this;
    }

    /**
     * Gets retractionActive
     *
     * @return bool|null
     */
    public function getRetractionActive()
    {
        return $this->container['retractionActive'];
    }

    /**
     * Sets retractionActive
     *
     * @param bool|null $retractionActive retractionActive
     *
     * @return self
     */
    public function setRetractionActive($retractionActive)
    {
        $this->container['retractionActive'] = $retractionActive;

        return $this;
    }

    /**
     * Gets cookieActive
     *
     * @return bool|null
     */
    public function getCookieActive()
    {
        return $this->container['cookieActive'];
    }

    /**
     * Sets cookieActive
     *
     * @param bool|null $cookieActive cookieActive
     *
     * @return self
     */
    public function setCookieActive($cookieActive)
    {
        $this->container['cookieActive'] = $cookieActive;

        return $this;
    }

    /**
     * Gets privacyPolicyActive
     *
     * @return bool|null
     */
    public function getPrivacyPolicyActive()
    {
        return $this->container['privacyPolicyActive'];
    }

    /**
     * Sets privacyPolicyActive
     *
     * @param bool|null $privacyPolicyActive privacyPolicyActive
     *
     * @return self
     */
    public function setPrivacyPolicyActive($privacyPolicyActive)
    {
        $this->container['privacyPolicyActive'] = $privacyPolicyActive;

        return $this;
    }

    /**
     * Gets cookies
     *
     * @return \EmonsiteApi\Models\LegalCookie[]|null
     */
    public function getCookies()
    {
        return $this->container['cookies'];
    }

    /**
     * Sets cookies
     *
     * @param \EmonsiteApi\Models\LegalCookie[]|null $cookies cookies
     *
     * @return self
     */
    public function setCookies($cookies)
    {
        $this->container['cookies'] = $cookies;

        return $this;
    }

    /**
     * Gets customCookies
     *
     * @return \EmonsiteApi\Models\LegalCookie[]|null
     */
    public function getCustomCookies()
    {
        return $this->container['customCookies'];
    }

    /**
     * Sets customCookies
     *
     * @param \EmonsiteApi\Models\LegalCookie[]|null $customCookies customCookies
     *
     * @return self
     */
    public function setCustomCookies($customCookies)
    {
        $this->container['customCookies'] = $customCookies;

        return $this;
    }

    /**
     * Gets cookie
     *
     * @return \EmonsiteApi\Models\LegalCookie[]|null
     */
    public function getCookie()
    {
        return $this->container['cookie'];
    }

    /**
     * Sets cookie
     *
     * @param \EmonsiteApi\Models\LegalCookie[]|null $cookie cookie
     *
     * @return self
     */
    public function setCookie($cookie)
    {
        $this->container['cookie'] = $cookie;

        return $this;
    }

    /**
     * Gets cguPage
     *
     * @return \EmonsiteApi\Models\LegalCguPage|null
     */
    public function getCguPage()
    {
        return $this->container['cguPage'];
    }

    /**
     * Sets cguPage
     *
     * @param \EmonsiteApi\Models\LegalCguPage|null $cguPage cguPage
     *
     * @return self
     */
    public function setCguPage($cguPage)
    {
        $this->container['cguPage'] = $cguPage;

        return $this;
    }

    /**
     * Gets cgvPage
     *
     * @return \EmonsiteApi\Models\LegalCguPage|null
     */
    public function getCgvPage()
    {
        return $this->container['cgvPage'];
    }

    /**
     * Sets cgvPage
     *
     * @param \EmonsiteApi\Models\LegalCguPage|null $cgvPage cgvPage
     *
     * @return self
     */
    public function setCgvPage($cgvPage)
    {
        $this->container['cgvPage'] = $cgvPage;

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
     * Gets site
     *
     * @return \EmonsiteApi\Models\Site|null
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param \EmonsiteApi\Models\Site|null $site site
     *
     * @return self
     */
    public function setSite($site)
    {
        $this->container['site'] = $site;

        return $this;
    }

    /**
     * Gets addDt
     *
     * @return int|null
     */
    public function getAddDt()
    {
        return $this->container['addDt'];
    }

    /**
     * Sets addDt
     *
     * @param int|null $addDt addDt
     *
     * @return self
     */
    public function setAddDt($addDt)
    {
        $this->container['addDt'] = $addDt;

        return $this;
    }

    /**
     * Gets updDt
     *
     * @return int|null
     */
    public function getUpdDt()
    {
        return $this->container['updDt'];
    }

    /**
     * Sets updDt
     *
     * @param int|null $updDt updDt
     *
     * @return self
     */
    public function setUpdDt($updDt)
    {
        $this->container['updDt'] = $updDt;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets addUserId
     *
     * @return string|null
     */
    public function getAddUserId()
    {
        return $this->container['addUserId'];
    }

    /**
     * Sets addUserId
     *
     * @param string|null $addUserId addUserId
     *
     * @return self
     */
    public function setAddUserId($addUserId)
    {
        $this->container['addUserId'] = $addUserId;

        return $this;
    }

    /**
     * Gets updUserId
     *
     * @return string|null
     */
    public function getUpdUserId()
    {
        return $this->container['updUserId'];
    }

    /**
     * Sets updUserId
     *
     * @param string|null $updUserId updUserId
     *
     * @return self
     */
    public function setUpdUserId($updUserId)
    {
        $this->container['updUserId'] = $updUserId;

        return $this;
    }

    /**
     * Gets versions
     *
     * @return \EmonsiteApi\Models\LegalV[]|null
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     *
     * @param \EmonsiteApi\Models\LegalV[]|null $versions IMPLEMENTEZ le mapping dans l'entity TODO trouver comment le faire dynamiquement avec un listener doctrine
     *
     * @return self
     */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;

        return $this;
    }

    /**
     * Gets version
     *
     * @return \EmonsiteApi\Models\VersionInterface[]|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param \EmonsiteApi\Models\VersionInterface[]|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets defaultLang
     *
     * @return string|null
     */
    public function getDefaultLang()
    {
        return $this->container['defaultLang'];
    }

    /**
     * Sets defaultLang
     *
     * @param string|null $defaultLang defaultLang
     *
     * @return self
     */
    public function setDefaultLang($defaultLang)
    {
        $this->container['defaultLang'] = $defaultLang;

        return $this;
    }

    /**
     * Gets versionByLang
     *
     * @return string[]|null
     */
    public function getVersionByLang()
    {
        return $this->container['versionByLang'];
    }

    /**
     * Sets versionByLang
     *
     * @param string[]|null $versionByLang versionByLang
     *
     * @return self
     */
    public function setVersionByLang($versionByLang)
    {
        $this->container['versionByLang'] = $versionByLang;

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


