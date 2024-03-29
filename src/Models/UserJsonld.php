<?php
/**
 * UserJsonld
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
 * UserJsonld Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  EmonsiteApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UserJsonld implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User:jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'context' => 'string',
        'id' => 'string',
        'type' => 'string',
        'id' => 'string',
        'addDt' => 'int',
        'creator' => 'string',
        'addUserIp' => 'string',
        'username' => 'string',
        'email' => 'string',
        'shardId' => 'string',
        'name' => 'string',
        'tel' => 'string',
        'group' => 'string',
        'brand' => 'string',
        'displayrealname' => 'bool',
        'connectionToken' => 'string',
        'deleted' => 'bool',
        'lastLogDt' => 'int',
        'mailchimpEmail' => 'string',
        'remainingSms' => 'int',
        'emailValid' => 'bool',
        'emailValidationToken' => 'string',
        'emailValidationDt' => 'int',
        'nbReminderValidationMailSent' => 'int',
        'chatbotActive' => 'bool',
        'siteUsers' => 'string[]',
        'domains' => '\EmonsiteApi\Models\UserDomainJsonld[]',
        'recentUpdatedSitesUsers' => 'string[]',
        'recentCreatedSiteUser' => 'string[]',
        'agencyCustomer' => 'bool',
        'userInValidationPeriod' => 'bool',
        'emailVerified' => 'bool',
        'siteUserMarketingSend' => 'string',
        'authorName' => 'string',
        'sessions' => 'string[]',
        'ssoAccounts' => '\EmonsiteApi\Models\UserSsoAccountJsonld[]',
        'userHasRole' => 'string'
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
        'id' => null,
        'addDt' => null,
        'creator' => 'iri-reference',
        'addUserIp' => null,
        'username' => null,
        'email' => null,
        'shardId' => null,
        'name' => null,
        'tel' => null,
        'group' => 'iri-reference',
        'brand' => 'iri-reference',
        'displayrealname' => null,
        'connectionToken' => null,
        'deleted' => null,
        'lastLogDt' => null,
        'mailchimpEmail' => null,
        'remainingSms' => null,
        'emailValid' => null,
        'emailValidationToken' => null,
        'emailValidationDt' => null,
        'nbReminderValidationMailSent' => null,
        'chatbotActive' => null,
        'siteUsers' => 'iri-reference',
        'domains' => null,
        'recentUpdatedSitesUsers' => 'iri-reference',
        'recentCreatedSiteUser' => 'iri-reference',
        'agencyCustomer' => null,
        'userInValidationPeriod' => null,
        'emailVerified' => null,
        'siteUserMarketingSend' => 'iri-reference',
        'authorName' => null,
        'sessions' => 'iri-reference',
        'ssoAccounts' => null,
        'userHasRole' => 'iri-reference'
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
        'id' => 'id',
        'addDt' => 'addDt',
        'creator' => 'creator',
        'addUserIp' => 'addUserIp',
        'username' => 'username',
        'email' => 'email',
        'shardId' => 'shardId',
        'name' => 'name',
        'tel' => 'tel',
        'group' => 'group',
        'brand' => 'brand',
        'displayrealname' => 'displayrealname',
        'connectionToken' => 'connectionToken',
        'deleted' => 'deleted',
        'lastLogDt' => 'lastLogDt',
        'mailchimpEmail' => 'mailchimpEmail',
        'remainingSms' => 'remainingSms',
        'emailValid' => 'emailValid',
        'emailValidationToken' => 'emailValidationToken',
        'emailValidationDt' => 'emailValidationDt',
        'nbReminderValidationMailSent' => 'nbReminderValidationMailSent',
        'chatbotActive' => 'chatbotActive',
        'siteUsers' => 'siteUsers',
        'domains' => 'domains',
        'recentUpdatedSitesUsers' => 'recentUpdatedSitesUsers',
        'recentCreatedSiteUser' => 'recentCreatedSiteUser',
        'agencyCustomer' => 'agencyCustomer',
        'userInValidationPeriod' => 'userInValidationPeriod',
        'emailVerified' => 'emailVerified',
        'siteUserMarketingSend' => 'siteUserMarketingSend',
        'authorName' => 'authorName',
        'sessions' => 'sessions',
        'ssoAccounts' => 'ssoAccounts',
        'userHasRole' => 'userHasRole'
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
        'id' => 'setId',
        'addDt' => 'setAddDt',
        'creator' => 'setCreator',
        'addUserIp' => 'setAddUserIp',
        'username' => 'setUsername',
        'email' => 'setEmail',
        'shardId' => 'setShardId',
        'name' => 'setName',
        'tel' => 'setTel',
        'group' => 'setGroup',
        'brand' => 'setBrand',
        'displayrealname' => 'setDisplayrealname',
        'connectionToken' => 'setConnectionToken',
        'deleted' => 'setDeleted',
        'lastLogDt' => 'setLastLogDt',
        'mailchimpEmail' => 'setMailchimpEmail',
        'remainingSms' => 'setRemainingSms',
        'emailValid' => 'setEmailValid',
        'emailValidationToken' => 'setEmailValidationToken',
        'emailValidationDt' => 'setEmailValidationDt',
        'nbReminderValidationMailSent' => 'setNbReminderValidationMailSent',
        'chatbotActive' => 'setChatbotActive',
        'siteUsers' => 'setSiteUsers',
        'domains' => 'setDomains',
        'recentUpdatedSitesUsers' => 'setRecentUpdatedSitesUsers',
        'recentCreatedSiteUser' => 'setRecentCreatedSiteUser',
        'agencyCustomer' => 'setAgencyCustomer',
        'userInValidationPeriod' => 'setUserInValidationPeriod',
        'emailVerified' => 'setEmailVerified',
        'siteUserMarketingSend' => 'setSiteUserMarketingSend',
        'authorName' => 'setAuthorName',
        'sessions' => 'setSessions',
        'ssoAccounts' => 'setSsoAccounts',
        'userHasRole' => 'setUserHasRole'
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
        'id' => 'getId',
        'addDt' => 'getAddDt',
        'creator' => 'getCreator',
        'addUserIp' => 'getAddUserIp',
        'username' => 'getUsername',
        'email' => 'getEmail',
        'shardId' => 'getShardId',
        'name' => 'getName',
        'tel' => 'getTel',
        'group' => 'getGroup',
        'brand' => 'getBrand',
        'displayrealname' => 'getDisplayrealname',
        'connectionToken' => 'getConnectionToken',
        'deleted' => 'getDeleted',
        'lastLogDt' => 'getLastLogDt',
        'mailchimpEmail' => 'getMailchimpEmail',
        'remainingSms' => 'getRemainingSms',
        'emailValid' => 'getEmailValid',
        'emailValidationToken' => 'getEmailValidationToken',
        'emailValidationDt' => 'getEmailValidationDt',
        'nbReminderValidationMailSent' => 'getNbReminderValidationMailSent',
        'chatbotActive' => 'getChatbotActive',
        'siteUsers' => 'getSiteUsers',
        'domains' => 'getDomains',
        'recentUpdatedSitesUsers' => 'getRecentUpdatedSitesUsers',
        'recentCreatedSiteUser' => 'getRecentCreatedSiteUser',
        'agencyCustomer' => 'getAgencyCustomer',
        'userInValidationPeriod' => 'getUserInValidationPeriod',
        'emailVerified' => 'getEmailVerified',
        'siteUserMarketingSend' => 'getSiteUserMarketingSend',
        'authorName' => 'getAuthorName',
        'sessions' => 'getSessions',
        'ssoAccounts' => 'getSsoAccounts',
        'userHasRole' => 'getUserHasRole'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['addDt'] = $data['addDt'] ?? null;
        $this->container['creator'] = $data['creator'] ?? null;
        $this->container['addUserIp'] = $data['addUserIp'] ?? null;
        $this->container['username'] = $data['username'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['shardId'] = $data['shardId'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['tel'] = $data['tel'] ?? null;
        $this->container['group'] = $data['group'] ?? null;
        $this->container['brand'] = $data['brand'] ?? null;
        $this->container['displayrealname'] = $data['displayrealname'] ?? null;
        $this->container['connectionToken'] = $data['connectionToken'] ?? null;
        $this->container['deleted'] = $data['deleted'] ?? null;
        $this->container['lastLogDt'] = $data['lastLogDt'] ?? null;
        $this->container['mailchimpEmail'] = $data['mailchimpEmail'] ?? null;
        $this->container['remainingSms'] = $data['remainingSms'] ?? null;
        $this->container['emailValid'] = $data['emailValid'] ?? null;
        $this->container['emailValidationToken'] = $data['emailValidationToken'] ?? null;
        $this->container['emailValidationDt'] = $data['emailValidationDt'] ?? null;
        $this->container['nbReminderValidationMailSent'] = $data['nbReminderValidationMailSent'] ?? null;
        $this->container['chatbotActive'] = $data['chatbotActive'] ?? null;
        $this->container['siteUsers'] = $data['siteUsers'] ?? null;
        $this->container['domains'] = $data['domains'] ?? null;
        $this->container['recentUpdatedSitesUsers'] = $data['recentUpdatedSitesUsers'] ?? null;
        $this->container['recentCreatedSiteUser'] = $data['recentCreatedSiteUser'] ?? null;
        $this->container['agencyCustomer'] = $data['agencyCustomer'] ?? null;
        $this->container['userInValidationPeriod'] = $data['userInValidationPeriod'] ?? null;
        $this->container['emailVerified'] = $data['emailVerified'] ?? null;
        $this->container['siteUserMarketingSend'] = $data['siteUserMarketingSend'] ?? null;
        $this->container['authorName'] = $data['authorName'] ?? null;
        $this->container['sessions'] = $data['sessions'] ?? null;
        $this->container['ssoAccounts'] = $data['ssoAccounts'] ?? null;
        $this->container['userHasRole'] = $data['userHasRole'] ?? null;
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
     * Gets creator
     *
     * @return string|null
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param string|null $creator creator
     *
     * @return self
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets addUserIp
     *
     * @return string|null
     */
    public function getAddUserIp()
    {
        return $this->container['addUserIp'];
    }

    /**
     * Sets addUserIp
     *
     * @param string|null $addUserIp addUserIp
     *
     * @return self
     */
    public function setAddUserIp($addUserIp)
    {
        $this->container['addUserIp'] = $addUserIp;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email TODO WARNING : des emails sont en chaine vide, probablement ems v1 - v3. Quid ?
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets shardId
     *
     * @return string|null
     */
    public function getShardId()
    {
        return $this->container['shardId'];
    }

    /**
     * Sets shardId
     *
     * @param string|null $shardId shardId
     *
     * @return self
     */
    public function setShardId($shardId)
    {
        $this->container['shardId'] = $shardId;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets tel
     *
     * @return string|null
     */
    public function getTel()
    {
        return $this->container['tel'];
    }

    /**
     * Sets tel
     *
     * @param string|null $tel tel
     *
     * @return self
     */
    public function setTel($tel)
    {
        $this->container['tel'] = $tel;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string|null $group group
     *
     * @return self
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand brand
     *
     * @return self
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets displayrealname
     *
     * @return bool|null
     */
    public function getDisplayrealname()
    {
        return $this->container['displayrealname'];
    }

    /**
     * Sets displayrealname
     *
     * @param bool|null $displayrealname displayrealname
     *
     * @return self
     */
    public function setDisplayrealname($displayrealname)
    {
        $this->container['displayrealname'] = $displayrealname;

        return $this;
    }

    /**
     * Gets connectionToken
     *
     * @return string|null
     */
    public function getConnectionToken()
    {
        return $this->container['connectionToken'];
    }

    /**
     * Sets connectionToken
     *
     * @param string|null $connectionToken connectionToken
     *
     * @return self
     */
    public function setConnectionToken($connectionToken)
    {
        $this->container['connectionToken'] = $connectionToken;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool|null
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool|null $deleted deleted
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets lastLogDt
     *
     * @return int|null
     */
    public function getLastLogDt()
    {
        return $this->container['lastLogDt'];
    }

    /**
     * Sets lastLogDt
     *
     * @param int|null $lastLogDt Timestamp de la dernière fois que le user à été vu sur le manager, MAJ 1x / jour
     *
     * @return self
     */
    public function setLastLogDt($lastLogDt)
    {
        $this->container['lastLogDt'] = $lastLogDt;

        return $this;
    }

    /**
     * Gets mailchimpEmail
     *
     * @return string|null
     */
    public function getMailchimpEmail()
    {
        return $this->container['mailchimpEmail'];
    }

    /**
     * Sets mailchimpEmail
     *
     * @param string|null $mailchimpEmail mailchimpEmail
     *
     * @return self
     */
    public function setMailchimpEmail($mailchimpEmail)
    {
        $this->container['mailchimpEmail'] = $mailchimpEmail;

        return $this;
    }

    /**
     * Gets remainingSms
     *
     * @return int|null
     */
    public function getRemainingSms()
    {
        return $this->container['remainingSms'];
    }

    /**
     * Sets remainingSms
     *
     * @param int|null $remainingSms remainingSms
     *
     * @return self
     */
    public function setRemainingSms($remainingSms)
    {
        $this->container['remainingSms'] = $remainingSms;

        return $this;
    }

    /**
     * Gets emailValid
     *
     * @return bool|null
     */
    public function getEmailValid()
    {
        return $this->container['emailValid'];
    }

    /**
     * Sets emailValid
     *
     * @param bool|null $emailValid emailValid
     *
     * @return self
     */
    public function setEmailValid($emailValid)
    {
        $this->container['emailValid'] = $emailValid;

        return $this;
    }

    /**
     * Gets emailValidationToken
     *
     * @return string|null
     */
    public function getEmailValidationToken()
    {
        return $this->container['emailValidationToken'];
    }

    /**
     * Sets emailValidationToken
     *
     * @param string|null $emailValidationToken emailValidationToken
     *
     * @return self
     */
    public function setEmailValidationToken($emailValidationToken)
    {
        $this->container['emailValidationToken'] = $emailValidationToken;

        return $this;
    }

    /**
     * Gets emailValidationDt
     *
     * @return int|null
     */
    public function getEmailValidationDt()
    {
        return $this->container['emailValidationDt'];
    }

    /**
     * Sets emailValidationDt
     *
     * @param int|null $emailValidationDt emailValidationDt
     *
     * @return self
     */
    public function setEmailValidationDt($emailValidationDt)
    {
        $this->container['emailValidationDt'] = $emailValidationDt;

        return $this;
    }

    /**
     * Gets nbReminderValidationMailSent
     *
     * @return int|null
     */
    public function getNbReminderValidationMailSent()
    {
        return $this->container['nbReminderValidationMailSent'];
    }

    /**
     * Sets nbReminderValidationMailSent
     *
     * @param int|null $nbReminderValidationMailSent nbReminderValidationMailSent
     *
     * @return self
     */
    public function setNbReminderValidationMailSent($nbReminderValidationMailSent)
    {
        $this->container['nbReminderValidationMailSent'] = $nbReminderValidationMailSent;

        return $this;
    }

    /**
     * Gets chatbotActive
     *
     * @return bool|null
     */
    public function getChatbotActive()
    {
        return $this->container['chatbotActive'];
    }

    /**
     * Sets chatbotActive
     *
     * @param bool|null $chatbotActive chatbotActive
     *
     * @return self
     */
    public function setChatbotActive($chatbotActive)
    {
        $this->container['chatbotActive'] = $chatbotActive;

        return $this;
    }

    /**
     * Gets siteUsers
     *
     * @return string[]|null
     */
    public function getSiteUsers()
    {
        return $this->container['siteUsers'];
    }

    /**
     * Sets siteUsers
     *
     * @param string[]|null $siteUsers siteUsers
     *
     * @return self
     */
    public function setSiteUsers($siteUsers)
    {
        $this->container['siteUsers'] = $siteUsers;

        return $this;
    }

    /**
     * Gets domains
     *
     * @return \EmonsiteApi\Models\UserDomainJsonld[]|null
     */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
     * Sets domains
     *
     * @param \EmonsiteApi\Models\UserDomainJsonld[]|null $domains domains
     *
     * @return self
     */
    public function setDomains($domains)
    {
        $this->container['domains'] = $domains;

        return $this;
    }

    /**
     * Gets recentUpdatedSitesUsers
     *
     * @return string[]|null
     */
    public function getRecentUpdatedSitesUsers()
    {
        return $this->container['recentUpdatedSitesUsers'];
    }

    /**
     * Sets recentUpdatedSitesUsers
     *
     * @param string[]|null $recentUpdatedSitesUsers Les sites users ordered par last_log_dt
     *
     * @return self
     */
    public function setRecentUpdatedSitesUsers($recentUpdatedSitesUsers)
    {
        $this->container['recentUpdatedSitesUsers'] = $recentUpdatedSitesUsers;

        return $this;
    }

    /**
     * Gets recentCreatedSiteUser
     *
     * @return string[]|null
     */
    public function getRecentCreatedSiteUser()
    {
        return $this->container['recentCreatedSiteUser'];
    }

    /**
     * Sets recentCreatedSiteUser
     *
     * @param string[]|null $recentCreatedSiteUser Le dernier Siteuser créé
     *
     * @return self
     */
    public function setRecentCreatedSiteUser($recentCreatedSiteUser)
    {
        $this->container['recentCreatedSiteUser'] = $recentCreatedSiteUser;

        return $this;
    }

    /**
     * Gets agencyCustomer
     *
     * @return bool|null
     */
    public function getAgencyCustomer()
    {
        return $this->container['agencyCustomer'];
    }

    /**
     * Sets agencyCustomer
     *
     * @param bool|null $agencyCustomer agencyCustomer
     *
     * @return self
     */
    public function setAgencyCustomer($agencyCustomer)
    {
        $this->container['agencyCustomer'] = $agencyCustomer;

        return $this;
    }

    /**
     * Gets userInValidationPeriod
     *
     * @return bool|null
     */
    public function getUserInValidationPeriod()
    {
        return $this->container['userInValidationPeriod'];
    }

    /**
     * Sets userInValidationPeriod
     *
     * @param bool|null $userInValidationPeriod Indique si le user est dans la \"période de validation\" de 30 jours après sa création
     *
     * @return self
     */
    public function setUserInValidationPeriod($userInValidationPeriod)
    {
        $this->container['userInValidationPeriod'] = $userInValidationPeriod;

        return $this;
    }

    /**
     * Gets emailVerified
     *
     * @return bool|null
     */
    public function getEmailVerified()
    {
        return $this->container['emailVerified'];
    }

    /**
     * Sets emailVerified
     *
     * @param bool|null $emailVerified emailVerified
     *
     * @return self
     */
    public function setEmailVerified($emailVerified)
    {
        $this->container['emailVerified'] = $emailVerified;

        return $this;
    }

    /**
     * Gets siteUserMarketingSend
     *
     * @return string|null
     */
    public function getSiteUserMarketingSend()
    {
        return $this->container['siteUserMarketingSend'];
    }

    /**
     * Sets siteUserMarketingSend
     *
     * @param string|null $siteUserMarketingSend Retourne le Siteuser dont le flag marketing_email_send
     *
     * @return self
     */
    public function setSiteUserMarketingSend($siteUserMarketingSend)
    {
        $this->container['siteUserMarketingSend'] = $siteUserMarketingSend;

        return $this;
    }

    /**
     * Gets authorName
     *
     * @return string|null
     */
    public function getAuthorName()
    {
        return $this->container['authorName'];
    }

    /**
     * Sets authorName
     *
     * @param string|null $authorName authorName
     *
     * @return self
     */
    public function setAuthorName($authorName)
    {
        $this->container['authorName'] = $authorName;

        return $this;
    }

    /**
     * Gets sessions
     *
     * @return string[]|null
     */
    public function getSessions()
    {
        return $this->container['sessions'];
    }

    /**
     * Sets sessions
     *
     * @param string[]|null $sessions sessions
     *
     * @return self
     */
    public function setSessions($sessions)
    {
        $this->container['sessions'] = $sessions;

        return $this;
    }

    /**
     * Gets ssoAccounts
     *
     * @return \EmonsiteApi\Models\UserSsoAccountJsonld[]|null
     */
    public function getSsoAccounts()
    {
        return $this->container['ssoAccounts'];
    }

    /**
     * Sets ssoAccounts
     *
     * @param \EmonsiteApi\Models\UserSsoAccountJsonld[]|null $ssoAccounts ssoAccounts
     *
     * @return self
     */
    public function setSsoAccounts($ssoAccounts)
    {
        $this->container['ssoAccounts'] = $ssoAccounts;

        return $this;
    }

    /**
     * Gets userHasRole
     *
     * @return string|null
     */
    public function getUserHasRole()
    {
        return $this->container['userHasRole'];
    }

    /**
     * Sets userHasRole
     *
     * @param string|null $userHasRole userHasRole
     *
     * @return self
     */
    public function setUserHasRole($userHasRole)
    {
        $this->container['userHasRole'] = $userHasRole;

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


