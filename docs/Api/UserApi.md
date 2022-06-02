# EmonsiteApi\UserApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiUsersSiteUsersGetSubresource()**](UserApi.md#apiUsersSiteUsersGetSubresource) | **GET** /users/{id}/site_users | Retrieves the collection of Siteuser resources.
[**getMeUserItem()**](UserApi.md#getMeUserItem) | **GET** /me | Retrieve the logged user
[**getUserCollection()**](UserApi.md#getUserCollection) | **GET** /users | Retrieves the collection of UserOutputDto resources.
[**getUserItem()**](UserApi.md#getUserItem) | **GET** /users/{id} | Retrieves a UserOutputDto resource.
[**getValidationMailUserItem()**](UserApi.md#getValidationMailUserItem) | **GET** /me/validation_mail | Send the e-mail validation e-mail
[**patchUserItem()**](UserApi.md#patchUserItem) | **PATCH** /users/{id} | Updates the User resource.
[**postUserCollection()**](UserApi.md#postUserCollection) | **POST** /users | Creates a User resource.
[**pushNotifUserItem()**](UserApi.md#pushNotifUserItem) | **POST** /me/test-push-notif | Push a test notification on the user device


## `apiUsersSiteUsersGetSubresource()`

```php
apiUsersSiteUsersGetSubresource($id, $page, $itemsPerPage): \EmonsiteApi\Models\ApiSitesSiteUsersGetSubresource200Response
```

Retrieves the collection of Siteuser resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->apiUsersSiteUsersGetSubresource($id, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiUsersSiteUsersGetSubresource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\ApiSitesSiteUsersGetSubresource200Response**](../Model/ApiSitesSiteUsersGetSubresource200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMeUserItem()`

```php
getMeUserItem(): \EmonsiteApi\Models\User940d105763f3d1a848f991a4d326f00eJsonld
```

Retrieve the logged user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMeUserItem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getMeUserItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\EmonsiteApi\Models\User940d105763f3d1a848f991a4d326f00eJsonld**](../Model/User940d105763f3d1a848f991a4d326f00eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserCollection()`

```php
getUserCollection($id, $id2, $username, $email, $name, $group, $group2, $brand, $brand2, $addUserIp, $addUserIp2, $orderAddDt, $page, $itemsPerPage): \EmonsiteApi\Models\GetUserCollection200Response
```

Retrieves the collection of UserOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$id2 = array('id_example'); // string[]
$username = 'username_example'; // string
$email = 'email_example'; // string
$name = 'name_example'; // string
$group = 'group_example'; // string
$group2 = array('group_example'); // string[]
$brand = 'brand_example'; // string
$brand2 = array('brand_example'); // string[]
$addUserIp = 'addUserIp_example'; // string
$addUserIp2 = array('addUserIp_example'); // string[]
$orderAddDt = 'orderAddDt_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getUserCollection($id, $id2, $username, $email, $name, $group, $group2, $brand, $brand2, $addUserIp, $addUserIp2, $orderAddDt, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | [optional]
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **username** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **group** | **string**|  | [optional]
 **group2** | [**string[]**](../Model/string.md)|  | [optional]
 **brand** | **string**|  | [optional]
 **brand2** | [**string[]**](../Model/string.md)|  | [optional]
 **addUserIp** | **string**|  | [optional]
 **addUserIp2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderAddDt** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetUserCollection200Response**](../Model/GetUserCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserItem()`

```php
getUserItem($id): \EmonsiteApi\Models\User940d105763f3d1a848f991a4d326f00eJsonld
```

Retrieves a UserOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getUserItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\User940d105763f3d1a848f991a4d326f00eJsonld**](../Model/User940d105763f3d1a848f991a4d326f00eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getValidationMailUserItem()`

```php
getValidationMailUserItem(): \EmonsiteApi\Models\User940d105763f3d1a848f991a4d326f00eJsonld
```

Send the e-mail validation e-mail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getValidationMailUserItem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getValidationMailUserItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\EmonsiteApi\Models\User940d105763f3d1a848f991a4d326f00eJsonld**](../Model/User940d105763f3d1a848f991a4d326f00eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchUserItem()`

```php
patchUserItem($id, $user5b998e983cd83cb3333677d49ed1f14c): \EmonsiteApi\Models\User940d105763f3d1a848f991a4d326f00eJsonld
```

Updates the User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$user5b998e983cd83cb3333677d49ed1f14c = new \EmonsiteApi\Models\User5b998e983cd83cb3333677d49ed1f14c(); // \EmonsiteApi\Models\User5b998e983cd83cb3333677d49ed1f14c | The updated User resource

try {
    $result = $apiInstance->patchUserItem($id, $user5b998e983cd83cb3333677d49ed1f14c);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->patchUserItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **user5b998e983cd83cb3333677d49ed1f14c** | [**\EmonsiteApi\Models\User5b998e983cd83cb3333677d49ed1f14c**](../Model/User5b998e983cd83cb3333677d49ed1f14c.md)| The updated User resource | [optional]

### Return type

[**\EmonsiteApi\Models\User940d105763f3d1a848f991a4d326f00eJsonld**](../Model/User940d105763f3d1a848f991a4d326f00eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUserCollection()`

```php
postUserCollection($user4efa5659e91aca04a3152aef9f91ffc1Jsonld): \EmonsiteApi\Models\User940d105763f3d1a848f991a4d326f00eJsonld
```

Creates a User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user4efa5659e91aca04a3152aef9f91ffc1Jsonld = new \EmonsiteApi\Models\User4efa5659e91aca04a3152aef9f91ffc1Jsonld(); // \EmonsiteApi\Models\User4efa5659e91aca04a3152aef9f91ffc1Jsonld | The new User resource

try {
    $result = $apiInstance->postUserCollection($user4efa5659e91aca04a3152aef9f91ffc1Jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postUserCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user4efa5659e91aca04a3152aef9f91ffc1Jsonld** | [**\EmonsiteApi\Models\User4efa5659e91aca04a3152aef9f91ffc1Jsonld**](../Model/User4efa5659e91aca04a3152aef9f91ffc1Jsonld.md)| The new User resource | [optional]

### Return type

[**\EmonsiteApi\Models\User940d105763f3d1a848f991a4d326f00eJsonld**](../Model/User940d105763f3d1a848f991a4d326f00eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pushNotifUserItem()`

```php
pushNotifUserItem($userJsonld): \EmonsiteApi\Models\User940d105763f3d1a848f991a4d326f00eJsonld
```

Push a test notification on the user device

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userJsonld = new \EmonsiteApi\Models\UserJsonld(); // \EmonsiteApi\Models\UserJsonld | The new User resource

try {
    $result = $apiInstance->pushNotifUserItem($userJsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->pushNotifUserItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userJsonld** | [**\EmonsiteApi\Models\UserJsonld**](../Model/UserJsonld.md)| The new User resource | [optional]

### Return type

[**\EmonsiteApi\Models\User940d105763f3d1a848f991a4d326f00eJsonld**](../Model/User940d105763f3d1a848f991a4d326f00eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
