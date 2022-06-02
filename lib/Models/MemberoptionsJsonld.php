<?php
/**
 * MemberoptionsJsonld
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
 * MemberoptionsJsonld Class Doc Comment
 *
 * @category Class
 * @package  Emonsite
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MemberoptionsJsonld implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Memberoptions:jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
'id' => 'string',
'type' => 'string',
'member_space_enabled' => 'bool',
'default_membergroup_ids' => 'string',
'profile_enabled' => 'bool',
'display_to_member_only' => 'bool',
'profile_membergroup' => 'AnyOfMemberoptionsJsonldProfileMembergroup',
'display_email' => 'bool',
'display_real_name' => 'bool',
'registration_enabled' => 'bool',
'registration_autovalidate' => 'bool',
'has_active_subscription' => 'bool',
'subscription_currency' => 'string',
'subscription_currency_position' => 'string',
'members_selfdelete' => 'bool',
'redirect_after_login' => 'bool',
'redirect_url' => 'string',
'redirect_method' => 'string',
'enable_disconnect_message' => 'bool',
'redirect_module_id' => 'string',
'redirect_model_id' => 'string',
'redirect_category_id' => 'string',
'redirect_item_id' => 'string',
'id' => 'string',
'site' => '\Emonsite\Models\SiteJsonld',
'versions' => '\Emonsite\Models\MemberoptionsVJsonld[]',
'version' => '\Emonsite\Models\VersionInterfaceJsonld[]',
'default_lang' => 'string',
'version_by_lang' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
'id' => null,
'type' => null,
'member_space_enabled' => null,
'default_membergroup_ids' => null,
'profile_enabled' => null,
'display_to_member_only' => null,
'profile_membergroup' => null,
'display_email' => null,
'display_real_name' => null,
'registration_enabled' => null,
'registration_autovalidate' => null,
'has_active_subscription' => null,
'subscription_currency' => null,
'subscription_currency_position' => null,
'members_selfdelete' => null,
'redirect_after_login' => null,
'redirect_url' => null,
'redirect_method' => null,
'enable_disconnect_message' => null,
'redirect_module_id' => null,
'redirect_model_id' => null,
'redirect_category_id' => null,
'redirect_item_id' => null,
'id' => null,
'site' => null,
'versions' => null,
'version' => null,
'default_lang' => null,
'version_by_lang' => null    ];

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
'member_space_enabled' => 'memberSpaceEnabled',
'default_membergroup_ids' => 'defaultMembergroupIds',
'profile_enabled' => 'profileEnabled',
'display_to_member_only' => 'displayToMemberOnly',
'profile_membergroup' => 'profileMembergroup',
'display_email' => 'displayEmail',
'display_real_name' => 'displayRealName',
'registration_enabled' => 'registrationEnabled',
'registration_autovalidate' => 'registrationAutovalidate',
'has_active_subscription' => 'hasActiveSubscription',
'subscription_currency' => 'subscriptionCurrency',
'subscription_currency_position' => 'subscriptionCurrencyPosition',
'members_selfdelete' => 'membersSelfdelete',
'redirect_after_login' => 'redirectAfterLogin',
'redirect_url' => 'redirectUrl',
'redirect_method' => 'redirectMethod',
'enable_disconnect_message' => 'enableDisconnectMessage',
'redirect_module_id' => 'redirectModuleId',
'redirect_model_id' => 'redirectModelId',
'redirect_category_id' => 'redirectCategoryId',
'redirect_item_id' => 'redirectItemId',
'id' => 'id',
'site' => 'site',
'versions' => 'versions',
'version' => 'version',
'default_lang' => 'defaultLang',
'version_by_lang' => 'versionByLang'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
'id' => 'setId',
'type' => 'setType',
'member_space_enabled' => 'setMemberSpaceEnabled',
'default_membergroup_ids' => 'setDefaultMembergroupIds',
'profile_enabled' => 'setProfileEnabled',
'display_to_member_only' => 'setDisplayToMemberOnly',
'profile_membergroup' => 'setProfileMembergroup',
'display_email' => 'setDisplayEmail',
'display_real_name' => 'setDisplayRealName',
'registration_enabled' => 'setRegistrationEnabled',
'registration_autovalidate' => 'setRegistrationAutovalidate',
'has_active_subscription' => 'setHasActiveSubscription',
'subscription_currency' => 'setSubscriptionCurrency',
'subscription_currency_position' => 'setSubscriptionCurrencyPosition',
'members_selfdelete' => 'setMembersSelfdelete',
'redirect_after_login' => 'setRedirectAfterLogin',
'redirect_url' => 'setRedirectUrl',
'redirect_method' => 'setRedirectMethod',
'enable_disconnect_message' => 'setEnableDisconnectMessage',
'redirect_module_id' => 'setRedirectModuleId',
'redirect_model_id' => 'setRedirectModelId',
'redirect_category_id' => 'setRedirectCategoryId',
'redirect_item_id' => 'setRedirectItemId',
'id' => 'setId',
'site' => 'setSite',
'versions' => 'setVersions',
'version' => 'setVersion',
'default_lang' => 'setDefaultLang',
'version_by_lang' => 'setVersionByLang'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
'id' => 'getId',
'type' => 'getType',
'member_space_enabled' => 'getMemberSpaceEnabled',
'default_membergroup_ids' => 'getDefaultMembergroupIds',
'profile_enabled' => 'getProfileEnabled',
'display_to_member_only' => 'getDisplayToMemberOnly',
'profile_membergroup' => 'getProfileMembergroup',
'display_email' => 'getDisplayEmail',
'display_real_name' => 'getDisplayRealName',
'registration_enabled' => 'getRegistrationEnabled',
'registration_autovalidate' => 'getRegistrationAutovalidate',
'has_active_subscription' => 'getHasActiveSubscription',
'subscription_currency' => 'getSubscriptionCurrency',
'subscription_currency_position' => 'getSubscriptionCurrencyPosition',
'members_selfdelete' => 'getMembersSelfdelete',
'redirect_after_login' => 'getRedirectAfterLogin',
'redirect_url' => 'getRedirectUrl',
'redirect_method' => 'getRedirectMethod',
'enable_disconnect_message' => 'getEnableDisconnectMessage',
'redirect_module_id' => 'getRedirectModuleId',
'redirect_model_id' => 'getRedirectModelId',
'redirect_category_id' => 'getRedirectCategoryId',
'redirect_item_id' => 'getRedirectItemId',
'id' => 'getId',
'site' => 'getSite',
'versions' => 'getVersions',
'version' => 'getVersion',
'default_lang' => 'getDefaultLang',
'version_by_lang' => 'getVersionByLang'    ];

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
        $this->container['member_space_enabled'] = isset($data['member_space_enabled']) ? $data['member_space_enabled'] : null;
        $this->container['default_membergroup_ids'] = isset($data['default_membergroup_ids']) ? $data['default_membergroup_ids'] : null;
        $this->container['profile_enabled'] = isset($data['profile_enabled']) ? $data['profile_enabled'] : null;
        $this->container['display_to_member_only'] = isset($data['display_to_member_only']) ? $data['display_to_member_only'] : null;
        $this->container['profile_membergroup'] = isset($data['profile_membergroup']) ? $data['profile_membergroup'] : null;
        $this->container['display_email'] = isset($data['display_email']) ? $data['display_email'] : null;
        $this->container['display_real_name'] = isset($data['display_real_name']) ? $data['display_real_name'] : null;
        $this->container['registration_enabled'] = isset($data['registration_enabled']) ? $data['registration_enabled'] : null;
        $this->container['registration_autovalidate'] = isset($data['registration_autovalidate']) ? $data['registration_autovalidate'] : null;
        $this->container['has_active_subscription'] = isset($data['has_active_subscription']) ? $data['has_active_subscription'] : null;
        $this->container['subscription_currency'] = isset($data['subscription_currency']) ? $data['subscription_currency'] : null;
        $this->container['subscription_currency_position'] = isset($data['subscription_currency_position']) ? $data['subscription_currency_position'] : null;
        $this->container['members_selfdelete'] = isset($data['members_selfdelete']) ? $data['members_selfdelete'] : null;
        $this->container['redirect_after_login'] = isset($data['redirect_after_login']) ? $data['redirect_after_login'] : null;
        $this->container['redirect_url'] = isset($data['redirect_url']) ? $data['redirect_url'] : null;
        $this->container['redirect_method'] = isset($data['redirect_method']) ? $data['redirect_method'] : null;
        $this->container['enable_disconnect_message'] = isset($data['enable_disconnect_message']) ? $data['enable_disconnect_message'] : null;
        $this->container['redirect_module_id'] = isset($data['redirect_module_id']) ? $data['redirect_module_id'] : null;
        $this->container['redirect_model_id'] = isset($data['redirect_model_id']) ? $data['redirect_model_id'] : null;
        $this->container['redirect_category_id'] = isset($data['redirect_category_id']) ? $data['redirect_category_id'] : null;
        $this->container['redirect_item_id'] = isset($data['redirect_item_id']) ? $data['redirect_item_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['site'] = isset($data['site']) ? $data['site'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['default_lang'] = isset($data['default_lang']) ? $data['default_lang'] : null;
        $this->container['version_by_lang'] = isset($data['version_by_lang']) ? $data['version_by_lang'] : null;
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
     * Gets member_space_enabled
     *
     * @return bool
     */
    public function getMemberSpaceEnabled()
    {
        return $this->container['member_space_enabled'];
    }

    /**
     * Sets member_space_enabled
     *
     * @param bool $member_space_enabled member_space_enabled
     *
     * @return $this
     */
    public function setMemberSpaceEnabled($member_space_enabled)
    {
        $this->container['member_space_enabled'] = $member_space_enabled;

        return $this;
    }

    /**
     * Gets default_membergroup_ids
     *
     * @return string
     */
    public function getDefaultMembergroupIds()
    {
        return $this->container['default_membergroup_ids'];
    }

    /**
     * Sets default_membergroup_ids
     *
     * @param string $default_membergroup_ids TODO qqch de plus propre genre type array
     *
     * @return $this
     */
    public function setDefaultMembergroupIds($default_membergroup_ids)
    {
        $this->container['default_membergroup_ids'] = $default_membergroup_ids;

        return $this;
    }

    /**
     * Gets profile_enabled
     *
     * @return bool
     */
    public function getProfileEnabled()
    {
        return $this->container['profile_enabled'];
    }

    /**
     * Sets profile_enabled
     *
     * @param bool $profile_enabled profile_enabled
     *
     * @return $this
     */
    public function setProfileEnabled($profile_enabled)
    {
        $this->container['profile_enabled'] = $profile_enabled;

        return $this;
    }

    /**
     * Gets display_to_member_only
     *
     * @return bool
     */
    public function getDisplayToMemberOnly()
    {
        return $this->container['display_to_member_only'];
    }

    /**
     * Sets display_to_member_only
     *
     * @param bool $display_to_member_only display_to_member_only
     *
     * @return $this
     */
    public function setDisplayToMemberOnly($display_to_member_only)
    {
        $this->container['display_to_member_only'] = $display_to_member_only;

        return $this;
    }

    /**
     * Gets profile_membergroup
     *
     * @return AnyOfMemberoptionsJsonldProfileMembergroup
     */
    public function getProfileMembergroup()
    {
        return $this->container['profile_membergroup'];
    }

    /**
     * Sets profile_membergroup
     *
     * @param AnyOfMemberoptionsJsonldProfileMembergroup $profile_membergroup qui peut voir les profils utilisateurs
     *
     * @return $this
     */
    public function setProfileMembergroup($profile_membergroup)
    {
        $this->container['profile_membergroup'] = $profile_membergroup;

        return $this;
    }

    /**
     * Gets display_email
     *
     * @return bool
     */
    public function getDisplayEmail()
    {
        return $this->container['display_email'];
    }

    /**
     * Sets display_email
     *
     * @param bool $display_email display_email
     *
     * @return $this
     */
    public function setDisplayEmail($display_email)
    {
        $this->container['display_email'] = $display_email;

        return $this;
    }

    /**
     * Gets display_real_name
     *
     * @return bool
     */
    public function getDisplayRealName()
    {
        return $this->container['display_real_name'];
    }

    /**
     * Sets display_real_name
     *
     * @param bool $display_real_name display_real_name
     *
     * @return $this
     */
    public function setDisplayRealName($display_real_name)
    {
        $this->container['display_real_name'] = $display_real_name;

        return $this;
    }

    /**
     * Gets registration_enabled
     *
     * @return bool
     */
    public function getRegistrationEnabled()
    {
        return $this->container['registration_enabled'];
    }

    /**
     * Sets registration_enabled
     *
     * @param bool $registration_enabled registration_enabled
     *
     * @return $this
     */
    public function setRegistrationEnabled($registration_enabled)
    {
        $this->container['registration_enabled'] = $registration_enabled;

        return $this;
    }

    /**
     * Gets registration_autovalidate
     *
     * @return bool
     */
    public function getRegistrationAutovalidate()
    {
        return $this->container['registration_autovalidate'];
    }

    /**
     * Sets registration_autovalidate
     *
     * @param bool $registration_autovalidate registration_autovalidate
     *
     * @return $this
     */
    public function setRegistrationAutovalidate($registration_autovalidate)
    {
        $this->container['registration_autovalidate'] = $registration_autovalidate;

        return $this;
    }

    /**
     * Gets has_active_subscription
     *
     * @return bool
     */
    public function getHasActiveSubscription()
    {
        return $this->container['has_active_subscription'];
    }

    /**
     * Sets has_active_subscription
     *
     * @param bool $has_active_subscription has_active_subscription
     *
     * @return $this
     */
    public function setHasActiveSubscription($has_active_subscription)
    {
        $this->container['has_active_subscription'] = $has_active_subscription;

        return $this;
    }

    /**
     * Gets subscription_currency
     *
     * @return string
     */
    public function getSubscriptionCurrency()
    {
        return $this->container['subscription_currency'];
    }

    /**
     * Sets subscription_currency
     *
     * @param string $subscription_currency subscription_currency
     *
     * @return $this
     */
    public function setSubscriptionCurrency($subscription_currency)
    {
        $this->container['subscription_currency'] = $subscription_currency;

        return $this;
    }

    /**
     * Gets subscription_currency_position
     *
     * @return string
     */
    public function getSubscriptionCurrencyPosition()
    {
        return $this->container['subscription_currency_position'];
    }

    /**
     * Sets subscription_currency_position
     *
     * @param string $subscription_currency_position TODO virer ça et faire en fonction de la langue ou que sais-je
     *
     * @return $this
     */
    public function setSubscriptionCurrencyPosition($subscription_currency_position)
    {
        $this->container['subscription_currency_position'] = $subscription_currency_position;

        return $this;
    }

    /**
     * Gets members_selfdelete
     *
     * @return bool
     */
    public function getMembersSelfdelete()
    {
        return $this->container['members_selfdelete'];
    }

    /**
     * Sets members_selfdelete
     *
     * @param bool $members_selfdelete ?
     *
     * @return $this
     */
    public function setMembersSelfdelete($members_selfdelete)
    {
        $this->container['members_selfdelete'] = $members_selfdelete;

        return $this;
    }

    /**
     * Gets redirect_after_login
     *
     * @return bool
     */
    public function getRedirectAfterLogin()
    {
        return $this->container['redirect_after_login'];
    }

    /**
     * Sets redirect_after_login
     *
     * @param bool $redirect_after_login redirect_after_login
     *
     * @return $this
     */
    public function setRedirectAfterLogin($redirect_after_login)
    {
        $this->container['redirect_after_login'] = $redirect_after_login;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string $redirect_url redirect_url
     *
     * @return $this
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets redirect_method
     *
     * @return string
     */
    public function getRedirectMethod()
    {
        return $this->container['redirect_method'];
    }

    /**
     * Sets redirect_method
     *
     * @param string $redirect_method TODO enum nullable
     *
     * @return $this
     */
    public function setRedirectMethod($redirect_method)
    {
        $this->container['redirect_method'] = $redirect_method;

        return $this;
    }

    /**
     * Gets enable_disconnect_message
     *
     * @return bool
     */
    public function getEnableDisconnectMessage()
    {
        return $this->container['enable_disconnect_message'];
    }

    /**
     * Sets enable_disconnect_message
     *
     * @param bool $enable_disconnect_message serieusement ? c'est quoi cette option à la con ?
     *
     * @return $this
     */
    public function setEnableDisconnectMessage($enable_disconnect_message)
    {
        $this->container['enable_disconnect_message'] = $enable_disconnect_message;

        return $this;
    }

    /**
     * Gets redirect_module_id
     *
     * @return string
     */
    public function getRedirectModuleId()
    {
        return $this->container['redirect_module_id'];
    }

    /**
     * Sets redirect_module_id
     *
     * @param string $redirect_module_id redirect_module_id
     *
     * @return $this
     */
    public function setRedirectModuleId($redirect_module_id)
    {
        $this->container['redirect_module_id'] = $redirect_module_id;

        return $this;
    }

    /**
     * Gets redirect_model_id
     *
     * @return string
     */
    public function getRedirectModelId()
    {
        return $this->container['redirect_model_id'];
    }

    /**
     * Sets redirect_model_id
     *
     * @param string $redirect_model_id redirect_model_id
     *
     * @return $this
     */
    public function setRedirectModelId($redirect_model_id)
    {
        $this->container['redirect_model_id'] = $redirect_model_id;

        return $this;
    }

    /**
     * Gets redirect_category_id
     *
     * @return string
     */
    public function getRedirectCategoryId()
    {
        return $this->container['redirect_category_id'];
    }

    /**
     * Sets redirect_category_id
     *
     * @param string $redirect_category_id relation ?
     *
     * @return $this
     */
    public function setRedirectCategoryId($redirect_category_id)
    {
        $this->container['redirect_category_id'] = $redirect_category_id;

        return $this;
    }

    /**
     * Gets redirect_item_id
     *
     * @return string
     */
    public function getRedirectItemId()
    {
        return $this->container['redirect_item_id'];
    }

    /**
     * Sets redirect_item_id
     *
     * @param string $redirect_item_id redirect_item_id
     *
     * @return $this
     */
    public function setRedirectItemId($redirect_item_id)
    {
        $this->container['redirect_item_id'] = $redirect_item_id;

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
     * Gets site
     *
     * @return \Emonsite\Models\SiteJsonld
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param \Emonsite\Models\SiteJsonld $site site
     *
     * @return $this
     */
    public function setSite($site)
    {
        $this->container['site'] = $site;

        return $this;
    }

    /**
     * Gets versions
     *
     * @return \Emonsite\Models\MemberoptionsVJsonld[]
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     *
     * @param \Emonsite\Models\MemberoptionsVJsonld[] $versions IMPLEMENTEZ le mapping dans l'entity TODO trouver comment le faire dynamiquement avec un listener doctrine
     *
     * @return $this
     */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;

        return $this;
    }

    /**
     * Gets version
     *
     * @return \Emonsite\Models\VersionInterfaceJsonld[]
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param \Emonsite\Models\VersionInterfaceJsonld[] $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets default_lang
     *
     * @return string
     */
    public function getDefaultLang()
    {
        return $this->container['default_lang'];
    }

    /**
     * Sets default_lang
     *
     * @param string $default_lang default_lang
     *
     * @return $this
     */
    public function setDefaultLang($default_lang)
    {
        $this->container['default_lang'] = $default_lang;

        return $this;
    }

    /**
     * Gets version_by_lang
     *
     * @return string[]
     */
    public function getVersionByLang()
    {
        return $this->container['version_by_lang'];
    }

    /**
     * Sets version_by_lang
     *
     * @param string[] $version_by_lang version_by_lang
     *
     * @return $this
     */
    public function setVersionByLang($version_by_lang)
    {
        $this->container['version_by_lang'] = $version_by_lang;

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
