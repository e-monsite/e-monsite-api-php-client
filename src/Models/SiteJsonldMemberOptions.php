<?php
/**
 * SiteJsonldMemberOptions
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
 * SiteJsonldMemberOptions Class Doc Comment
 *
 * @category Class
 * @package  EmonsiteApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SiteJsonldMemberOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Site_jsonld_memberOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'context' => 'string',
        'id' => 'string',
        'type' => 'string',
        'memberSpaceEnabled' => 'bool',
        'defaultMembergroupIds' => 'string',
        'profileEnabled' => 'bool',
        'displayToMemberOnly' => 'bool',
        'profileMembergroup' => '\EmonsiteApi\Models\MemberoptionsJsonldProfileMembergroup',
        'displayEmail' => 'bool',
        'displayRealName' => 'bool',
        'registrationEnabled' => 'bool',
        'registrationAutovalidate' => 'bool',
        'hasActiveSubscription' => 'bool',
        'subscriptionCurrency' => 'string',
        'subscriptionCurrencyPosition' => 'string',
        'membersSelfdelete' => 'bool',
        'redirectAfterLogin' => 'bool',
        'redirectUrl' => 'string',
        'redirectMethod' => 'string',
        'enableDisconnectMessage' => 'bool',
        'redirectModuleId' => 'string',
        'redirectModelId' => 'string',
        'redirectCategoryId' => 'string',
        'redirectItemId' => 'string',
        'id' => 'string',
        'site' => '\EmonsiteApi\Models\SiteJsonld',
        'versions' => '\EmonsiteApi\Models\MemberoptionsVJsonld[]',
        'version' => '\EmonsiteApi\Models\VersionInterfaceJsonld[]',
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
        'context' => null,
        'id' => null,
        'type' => null,
        'memberSpaceEnabled' => null,
        'defaultMembergroupIds' => null,
        'profileEnabled' => null,
        'displayToMemberOnly' => null,
        'profileMembergroup' => null,
        'displayEmail' => null,
        'displayRealName' => null,
        'registrationEnabled' => null,
        'registrationAutovalidate' => null,
        'hasActiveSubscription' => null,
        'subscriptionCurrency' => null,
        'subscriptionCurrencyPosition' => null,
        'membersSelfdelete' => null,
        'redirectAfterLogin' => null,
        'redirectUrl' => null,
        'redirectMethod' => null,
        'enableDisconnectMessage' => null,
        'redirectModuleId' => null,
        'redirectModelId' => null,
        'redirectCategoryId' => null,
        'redirectItemId' => null,
        'id' => null,
        'site' => null,
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
        'context' => '@context',
        'id' => '@id',
        'type' => '@type',
        'memberSpaceEnabled' => 'memberSpaceEnabled',
        'defaultMembergroupIds' => 'defaultMembergroupIds',
        'profileEnabled' => 'profileEnabled',
        'displayToMemberOnly' => 'displayToMemberOnly',
        'profileMembergroup' => 'profileMembergroup',
        'displayEmail' => 'displayEmail',
        'displayRealName' => 'displayRealName',
        'registrationEnabled' => 'registrationEnabled',
        'registrationAutovalidate' => 'registrationAutovalidate',
        'hasActiveSubscription' => 'hasActiveSubscription',
        'subscriptionCurrency' => 'subscriptionCurrency',
        'subscriptionCurrencyPosition' => 'subscriptionCurrencyPosition',
        'membersSelfdelete' => 'membersSelfdelete',
        'redirectAfterLogin' => 'redirectAfterLogin',
        'redirectUrl' => 'redirectUrl',
        'redirectMethod' => 'redirectMethod',
        'enableDisconnectMessage' => 'enableDisconnectMessage',
        'redirectModuleId' => 'redirectModuleId',
        'redirectModelId' => 'redirectModelId',
        'redirectCategoryId' => 'redirectCategoryId',
        'redirectItemId' => 'redirectItemId',
        'id' => 'id',
        'site' => 'site',
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
        'context' => 'setContext',
        'id' => 'setId',
        'type' => 'setType',
        'memberSpaceEnabled' => 'setMemberSpaceEnabled',
        'defaultMembergroupIds' => 'setDefaultMembergroupIds',
        'profileEnabled' => 'setProfileEnabled',
        'displayToMemberOnly' => 'setDisplayToMemberOnly',
        'profileMembergroup' => 'setProfileMembergroup',
        'displayEmail' => 'setDisplayEmail',
        'displayRealName' => 'setDisplayRealName',
        'registrationEnabled' => 'setRegistrationEnabled',
        'registrationAutovalidate' => 'setRegistrationAutovalidate',
        'hasActiveSubscription' => 'setHasActiveSubscription',
        'subscriptionCurrency' => 'setSubscriptionCurrency',
        'subscriptionCurrencyPosition' => 'setSubscriptionCurrencyPosition',
        'membersSelfdelete' => 'setMembersSelfdelete',
        'redirectAfterLogin' => 'setRedirectAfterLogin',
        'redirectUrl' => 'setRedirectUrl',
        'redirectMethod' => 'setRedirectMethod',
        'enableDisconnectMessage' => 'setEnableDisconnectMessage',
        'redirectModuleId' => 'setRedirectModuleId',
        'redirectModelId' => 'setRedirectModelId',
        'redirectCategoryId' => 'setRedirectCategoryId',
        'redirectItemId' => 'setRedirectItemId',
        'id' => 'setId',
        'site' => 'setSite',
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
        'context' => 'getContext',
        'id' => 'getId',
        'type' => 'getType',
        'memberSpaceEnabled' => 'getMemberSpaceEnabled',
        'defaultMembergroupIds' => 'getDefaultMembergroupIds',
        'profileEnabled' => 'getProfileEnabled',
        'displayToMemberOnly' => 'getDisplayToMemberOnly',
        'profileMembergroup' => 'getProfileMembergroup',
        'displayEmail' => 'getDisplayEmail',
        'displayRealName' => 'getDisplayRealName',
        'registrationEnabled' => 'getRegistrationEnabled',
        'registrationAutovalidate' => 'getRegistrationAutovalidate',
        'hasActiveSubscription' => 'getHasActiveSubscription',
        'subscriptionCurrency' => 'getSubscriptionCurrency',
        'subscriptionCurrencyPosition' => 'getSubscriptionCurrencyPosition',
        'membersSelfdelete' => 'getMembersSelfdelete',
        'redirectAfterLogin' => 'getRedirectAfterLogin',
        'redirectUrl' => 'getRedirectUrl',
        'redirectMethod' => 'getRedirectMethod',
        'enableDisconnectMessage' => 'getEnableDisconnectMessage',
        'redirectModuleId' => 'getRedirectModuleId',
        'redirectModelId' => 'getRedirectModelId',
        'redirectCategoryId' => 'getRedirectCategoryId',
        'redirectItemId' => 'getRedirectItemId',
        'id' => 'getId',
        'site' => 'getSite',
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
        $this->container['context'] = $data['context'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['memberSpaceEnabled'] = $data['memberSpaceEnabled'] ?? null;
        $this->container['defaultMembergroupIds'] = $data['defaultMembergroupIds'] ?? null;
        $this->container['profileEnabled'] = $data['profileEnabled'] ?? null;
        $this->container['displayToMemberOnly'] = $data['displayToMemberOnly'] ?? null;
        $this->container['profileMembergroup'] = $data['profileMembergroup'] ?? null;
        $this->container['displayEmail'] = $data['displayEmail'] ?? null;
        $this->container['displayRealName'] = $data['displayRealName'] ?? null;
        $this->container['registrationEnabled'] = $data['registrationEnabled'] ?? null;
        $this->container['registrationAutovalidate'] = $data['registrationAutovalidate'] ?? null;
        $this->container['hasActiveSubscription'] = $data['hasActiveSubscription'] ?? null;
        $this->container['subscriptionCurrency'] = $data['subscriptionCurrency'] ?? null;
        $this->container['subscriptionCurrencyPosition'] = $data['subscriptionCurrencyPosition'] ?? null;
        $this->container['membersSelfdelete'] = $data['membersSelfdelete'] ?? null;
        $this->container['redirectAfterLogin'] = $data['redirectAfterLogin'] ?? null;
        $this->container['redirectUrl'] = $data['redirectUrl'] ?? null;
        $this->container['redirectMethod'] = $data['redirectMethod'] ?? null;
        $this->container['enableDisconnectMessage'] = $data['enableDisconnectMessage'] ?? null;
        $this->container['redirectModuleId'] = $data['redirectModuleId'] ?? null;
        $this->container['redirectModelId'] = $data['redirectModelId'] ?? null;
        $this->container['redirectCategoryId'] = $data['redirectCategoryId'] ?? null;
        $this->container['redirectItemId'] = $data['redirectItemId'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['site'] = $data['site'] ?? null;
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
     * Gets memberSpaceEnabled
     *
     * @return bool|null
     */
    public function getMemberSpaceEnabled()
    {
        return $this->container['memberSpaceEnabled'];
    }

    /**
     * Sets memberSpaceEnabled
     *
     * @param bool|null $memberSpaceEnabled memberSpaceEnabled
     *
     * @return self
     */
    public function setMemberSpaceEnabled($memberSpaceEnabled)
    {
        $this->container['memberSpaceEnabled'] = $memberSpaceEnabled;

        return $this;
    }

    /**
     * Gets defaultMembergroupIds
     *
     * @return string|null
     */
    public function getDefaultMembergroupIds()
    {
        return $this->container['defaultMembergroupIds'];
    }

    /**
     * Sets defaultMembergroupIds
     *
     * @param string|null $defaultMembergroupIds TODO qqch de plus propre genre type array
     *
     * @return self
     */
    public function setDefaultMembergroupIds($defaultMembergroupIds)
    {
        $this->container['defaultMembergroupIds'] = $defaultMembergroupIds;

        return $this;
    }

    /**
     * Gets profileEnabled
     *
     * @return bool|null
     */
    public function getProfileEnabled()
    {
        return $this->container['profileEnabled'];
    }

    /**
     * Sets profileEnabled
     *
     * @param bool|null $profileEnabled profileEnabled
     *
     * @return self
     */
    public function setProfileEnabled($profileEnabled)
    {
        $this->container['profileEnabled'] = $profileEnabled;

        return $this;
    }

    /**
     * Gets displayToMemberOnly
     *
     * @return bool|null
     */
    public function getDisplayToMemberOnly()
    {
        return $this->container['displayToMemberOnly'];
    }

    /**
     * Sets displayToMemberOnly
     *
     * @param bool|null $displayToMemberOnly displayToMemberOnly
     *
     * @return self
     */
    public function setDisplayToMemberOnly($displayToMemberOnly)
    {
        $this->container['displayToMemberOnly'] = $displayToMemberOnly;

        return $this;
    }

    /**
     * Gets profileMembergroup
     *
     * @return \EmonsiteApi\Models\MemberoptionsJsonldProfileMembergroup|null
     */
    public function getProfileMembergroup()
    {
        return $this->container['profileMembergroup'];
    }

    /**
     * Sets profileMembergroup
     *
     * @param \EmonsiteApi\Models\MemberoptionsJsonldProfileMembergroup|null $profileMembergroup profileMembergroup
     *
     * @return self
     */
    public function setProfileMembergroup($profileMembergroup)
    {
        $this->container['profileMembergroup'] = $profileMembergroup;

        return $this;
    }

    /**
     * Gets displayEmail
     *
     * @return bool|null
     */
    public function getDisplayEmail()
    {
        return $this->container['displayEmail'];
    }

    /**
     * Sets displayEmail
     *
     * @param bool|null $displayEmail displayEmail
     *
     * @return self
     */
    public function setDisplayEmail($displayEmail)
    {
        $this->container['displayEmail'] = $displayEmail;

        return $this;
    }

    /**
     * Gets displayRealName
     *
     * @return bool|null
     */
    public function getDisplayRealName()
    {
        return $this->container['displayRealName'];
    }

    /**
     * Sets displayRealName
     *
     * @param bool|null $displayRealName displayRealName
     *
     * @return self
     */
    public function setDisplayRealName($displayRealName)
    {
        $this->container['displayRealName'] = $displayRealName;

        return $this;
    }

    /**
     * Gets registrationEnabled
     *
     * @return bool|null
     */
    public function getRegistrationEnabled()
    {
        return $this->container['registrationEnabled'];
    }

    /**
     * Sets registrationEnabled
     *
     * @param bool|null $registrationEnabled registrationEnabled
     *
     * @return self
     */
    public function setRegistrationEnabled($registrationEnabled)
    {
        $this->container['registrationEnabled'] = $registrationEnabled;

        return $this;
    }

    /**
     * Gets registrationAutovalidate
     *
     * @return bool|null
     */
    public function getRegistrationAutovalidate()
    {
        return $this->container['registrationAutovalidate'];
    }

    /**
     * Sets registrationAutovalidate
     *
     * @param bool|null $registrationAutovalidate registrationAutovalidate
     *
     * @return self
     */
    public function setRegistrationAutovalidate($registrationAutovalidate)
    {
        $this->container['registrationAutovalidate'] = $registrationAutovalidate;

        return $this;
    }

    /**
     * Gets hasActiveSubscription
     *
     * @return bool|null
     */
    public function getHasActiveSubscription()
    {
        return $this->container['hasActiveSubscription'];
    }

    /**
     * Sets hasActiveSubscription
     *
     * @param bool|null $hasActiveSubscription hasActiveSubscription
     *
     * @return self
     */
    public function setHasActiveSubscription($hasActiveSubscription)
    {
        $this->container['hasActiveSubscription'] = $hasActiveSubscription;

        return $this;
    }

    /**
     * Gets subscriptionCurrency
     *
     * @return string|null
     */
    public function getSubscriptionCurrency()
    {
        return $this->container['subscriptionCurrency'];
    }

    /**
     * Sets subscriptionCurrency
     *
     * @param string|null $subscriptionCurrency subscriptionCurrency
     *
     * @return self
     */
    public function setSubscriptionCurrency($subscriptionCurrency)
    {
        $this->container['subscriptionCurrency'] = $subscriptionCurrency;

        return $this;
    }

    /**
     * Gets subscriptionCurrencyPosition
     *
     * @return string|null
     */
    public function getSubscriptionCurrencyPosition()
    {
        return $this->container['subscriptionCurrencyPosition'];
    }

    /**
     * Sets subscriptionCurrencyPosition
     *
     * @param string|null $subscriptionCurrencyPosition TODO virer ça et faire en fonction de la langue ou que sais-je
     *
     * @return self
     */
    public function setSubscriptionCurrencyPosition($subscriptionCurrencyPosition)
    {
        $this->container['subscriptionCurrencyPosition'] = $subscriptionCurrencyPosition;

        return $this;
    }

    /**
     * Gets membersSelfdelete
     *
     * @return bool|null
     */
    public function getMembersSelfdelete()
    {
        return $this->container['membersSelfdelete'];
    }

    /**
     * Sets membersSelfdelete
     *
     * @param bool|null $membersSelfdelete ?
     *
     * @return self
     */
    public function setMembersSelfdelete($membersSelfdelete)
    {
        $this->container['membersSelfdelete'] = $membersSelfdelete;

        return $this;
    }

    /**
     * Gets redirectAfterLogin
     *
     * @return bool|null
     */
    public function getRedirectAfterLogin()
    {
        return $this->container['redirectAfterLogin'];
    }

    /**
     * Sets redirectAfterLogin
     *
     * @param bool|null $redirectAfterLogin redirectAfterLogin
     *
     * @return self
     */
    public function setRedirectAfterLogin($redirectAfterLogin)
    {
        $this->container['redirectAfterLogin'] = $redirectAfterLogin;

        return $this;
    }

    /**
     * Gets redirectUrl
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirectUrl'];
    }

    /**
     * Sets redirectUrl
     *
     * @param string|null $redirectUrl redirectUrl
     *
     * @return self
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->container['redirectUrl'] = $redirectUrl;

        return $this;
    }

    /**
     * Gets redirectMethod
     *
     * @return string|null
     */
    public function getRedirectMethod()
    {
        return $this->container['redirectMethod'];
    }

    /**
     * Sets redirectMethod
     *
     * @param string|null $redirectMethod TODO enum nullable
     *
     * @return self
     */
    public function setRedirectMethod($redirectMethod)
    {
        $this->container['redirectMethod'] = $redirectMethod;

        return $this;
    }

    /**
     * Gets enableDisconnectMessage
     *
     * @return bool|null
     */
    public function getEnableDisconnectMessage()
    {
        return $this->container['enableDisconnectMessage'];
    }

    /**
     * Sets enableDisconnectMessage
     *
     * @param bool|null $enableDisconnectMessage serieusement ? c'est quoi cette option à la con ?
     *
     * @return self
     */
    public function setEnableDisconnectMessage($enableDisconnectMessage)
    {
        $this->container['enableDisconnectMessage'] = $enableDisconnectMessage;

        return $this;
    }

    /**
     * Gets redirectModuleId
     *
     * @return string|null
     */
    public function getRedirectModuleId()
    {
        return $this->container['redirectModuleId'];
    }

    /**
     * Sets redirectModuleId
     *
     * @param string|null $redirectModuleId redirectModuleId
     *
     * @return self
     */
    public function setRedirectModuleId($redirectModuleId)
    {
        $this->container['redirectModuleId'] = $redirectModuleId;

        return $this;
    }

    /**
     * Gets redirectModelId
     *
     * @return string|null
     */
    public function getRedirectModelId()
    {
        return $this->container['redirectModelId'];
    }

    /**
     * Sets redirectModelId
     *
     * @param string|null $redirectModelId redirectModelId
     *
     * @return self
     */
    public function setRedirectModelId($redirectModelId)
    {
        $this->container['redirectModelId'] = $redirectModelId;

        return $this;
    }

    /**
     * Gets redirectCategoryId
     *
     * @return string|null
     */
    public function getRedirectCategoryId()
    {
        return $this->container['redirectCategoryId'];
    }

    /**
     * Sets redirectCategoryId
     *
     * @param string|null $redirectCategoryId relation ?
     *
     * @return self
     */
    public function setRedirectCategoryId($redirectCategoryId)
    {
        $this->container['redirectCategoryId'] = $redirectCategoryId;

        return $this;
    }

    /**
     * Gets redirectItemId
     *
     * @return string|null
     */
    public function getRedirectItemId()
    {
        return $this->container['redirectItemId'];
    }

    /**
     * Sets redirectItemId
     *
     * @param string|null $redirectItemId redirectItemId
     *
     * @return self
     */
    public function setRedirectItemId($redirectItemId)
    {
        $this->container['redirectItemId'] = $redirectItemId;

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
     * @return \EmonsiteApi\Models\SiteJsonld|null
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param \EmonsiteApi\Models\SiteJsonld|null $site site
     *
     * @return self
     */
    public function setSite($site)
    {
        $this->container['site'] = $site;

        return $this;
    }

    /**
     * Gets versions
     *
     * @return \EmonsiteApi\Models\MemberoptionsVJsonld[]|null
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     *
     * @param \EmonsiteApi\Models\MemberoptionsVJsonld[]|null $versions IMPLEMENTEZ le mapping dans l'entity TODO trouver comment le faire dynamiquement avec un listener doctrine
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
     * @return \EmonsiteApi\Models\VersionInterfaceJsonld[]|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param \EmonsiteApi\Models\VersionInterfaceJsonld[]|null $version version
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


