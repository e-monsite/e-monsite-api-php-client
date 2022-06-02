# Emonsite\UserApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiUsersSiteUsersGetSubresource**](UserApi.md#apiuserssiteusersgetsubresource) | **GET** /users/{id}/site_users | Retrieves the collection of Siteuser resources.
[**getMeUserItem**](UserApi.md#getmeuseritem) | **GET** /me | Retrieve the logged user
[**getUserCollection**](UserApi.md#getusercollection) | **GET** /users | Retrieves the collection of UserOutputDto resources.
[**getUserItem**](UserApi.md#getuseritem) | **GET** /users/{id} | Retrieves a UserOutputDto resource.
[**getValidationMailUserItem**](UserApi.md#getvalidationmailuseritem) | **GET** /me/validation_mail | Send the e-mail validation e-mail
[**patchUserItem**](UserApi.md#patchuseritem) | **PATCH** /users/{id} | Updates the User resource.
[**postUserCollection**](UserApi.md#postusercollection) | **POST** /users | Creates a User resource.
[**pushNotifUserItem**](UserApi.md#pushnotifuseritem) | **POST** /me/test-push-notif | Push a test notification on the user device

# **apiUsersSiteUsersGetSubresource**
> \Emonsite\Models\InlineResponse20025 apiUsersSiteUsersGetSubresource($id, $page, $items_per_page)

Retrieves the collection of Siteuser resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->apiUsersSiteUsersGetSubresource($id, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiUsersSiteUsersGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Emonsite\Models\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeUserItem**
> \Emonsite\Models\User940d105763f3d1a848f991a4d326f00eJsonld getMeUserItem()

Retrieve the logged user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\UserApi(
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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Emonsite\Models\User940d105763f3d1a848f991a4d326f00eJsonld**](../Model/User940d105763f3d1a848f991a4d326f00eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserCollection**
> \Emonsite\Models\InlineResponse20028 getUserCollection($id, $id, $username, $email, $name, $group, $group, $brand, $brand, $add_user_ip, $add_user_ip, $order_add_dt, $page, $items_per_page)

Retrieves the collection of UserOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$id = array("id_example"); // string[] | 
$username = "username_example"; // string | 
$email = "email_example"; // string | 
$name = "name_example"; // string | 
$group = "group_example"; // string | 
$group = array("group_example"); // string[] | 
$brand = "brand_example"; // string | 
$brand = array("brand_example"); // string[] | 
$add_user_ip = "add_user_ip_example"; // string | 
$add_user_ip = array("add_user_ip_example"); // string[] | 
$order_add_dt = "order_add_dt_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getUserCollection($id, $id, $username, $email, $name, $group, $group, $brand, $brand, $add_user_ip, $add_user_ip, $order_add_dt, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | [optional]
 **id** | [**string[]**](../Model/string.md)|  | [optional]
 **username** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **group** | **string**|  | [optional]
 **group** | [**string[]**](../Model/string.md)|  | [optional]
 **brand** | **string**|  | [optional]
 **brand** | [**string[]**](../Model/string.md)|  | [optional]
 **add_user_ip** | **string**|  | [optional]
 **add_user_ip** | [**string[]**](../Model/string.md)|  | [optional]
 **order_add_dt** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Emonsite\Models\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserItem**
> \Emonsite\Models\User940d105763f3d1a848f991a4d326f00eJsonld getUserItem($id)

Retrieves a UserOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getUserItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Emonsite\Models\User940d105763f3d1a848f991a4d326f00eJsonld**](../Model/User940d105763f3d1a848f991a4d326f00eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getValidationMailUserItem**
> \Emonsite\Models\User940d105763f3d1a848f991a4d326f00eJsonld getValidationMailUserItem()

Send the e-mail validation e-mail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\UserApi(
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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Emonsite\Models\User940d105763f3d1a848f991a4d326f00eJsonld**](../Model/User940d105763f3d1a848f991a4d326f00eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUserItem**
> \Emonsite\Models\User940d105763f3d1a848f991a4d326f00eJsonld patchUserItem($id, $body)

Updates the User resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Emonsite\Models\User5b998e983cd83cb3333677d49ed1f14c(); // \Emonsite\Models\User5b998e983cd83cb3333677d49ed1f14c | The updated User resource

try {
    $result = $apiInstance->patchUserItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->patchUserItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Emonsite\Models\User5b998e983cd83cb3333677d49ed1f14c**](../Model/User5b998e983cd83cb3333677d49ed1f14c.md)| The updated User resource | [optional]

### Return type

[**\Emonsite\Models\User940d105763f3d1a848f991a4d326f00eJsonld**](../Model/User940d105763f3d1a848f991a4d326f00eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserCollection**
> \Emonsite\Models\User940d105763f3d1a848f991a4d326f00eJsonld postUserCollection($body)

Creates a User resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\User4efa5659e91aca04a3152aef9f91ffc1Jsonld(); // \Emonsite\Models\User4efa5659e91aca04a3152aef9f91ffc1Jsonld | The new User resource

try {
    $result = $apiInstance->postUserCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postUserCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\User4efa5659e91aca04a3152aef9f91ffc1Jsonld**](../Model/User4efa5659e91aca04a3152aef9f91ffc1Jsonld.md)| The new User resource | [optional]

### Return type

[**\Emonsite\Models\User940d105763f3d1a848f991a4d326f00eJsonld**](../Model/User940d105763f3d1a848f991a4d326f00eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserCollection**
> \Emonsite\Models\User940d105763f3d1a848f991a4d326f00eJsonld postUserCollection($body)

Creates a User resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\User4efa5659e91aca04a3152aef9f91ffc1Jsonld(); // \Emonsite\Models\User4efa5659e91aca04a3152aef9f91ffc1Jsonld | The new User resource

try {
    $result = $apiInstance->postUserCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postUserCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\User4efa5659e91aca04a3152aef9f91ffc1Jsonld**](../Model/User4efa5659e91aca04a3152aef9f91ffc1Jsonld.md)| The new User resource | [optional]

### Return type

[**\Emonsite\Models\User940d105763f3d1a848f991a4d326f00eJsonld**](../Model/User940d105763f3d1a848f991a4d326f00eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pushNotifUserItem**
> \Emonsite\Models\User940d105763f3d1a848f991a4d326f00eJsonld pushNotifUserItem($body)

Push a test notification on the user device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\UserJsonld(); // \Emonsite\Models\UserJsonld | The new User resource

try {
    $result = $apiInstance->pushNotifUserItem($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->pushNotifUserItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\UserJsonld**](../Model/UserJsonld.md)| The new User resource | [optional]

### Return type

[**\Emonsite\Models\User940d105763f3d1a848f991a4d326f00eJsonld**](../Model/User940d105763f3d1a848f991a4d326f00eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pushNotifUserItem**
> \Emonsite\Models\User940d105763f3d1a848f991a4d326f00eJsonld pushNotifUserItem($body)

Push a test notification on the user device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\UserJsonld(); // \Emonsite\Models\UserJsonld | The new User resource

try {
    $result = $apiInstance->pushNotifUserItem($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->pushNotifUserItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\UserJsonld**](../Model/UserJsonld.md)| The new User resource | [optional]

### Return type

[**\Emonsite\Models\User940d105763f3d1a848f991a4d326f00eJsonld**](../Model/User940d105763f3d1a848f991a4d326f00eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

