# EmonsiteApi\UserHasRoleApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUserHasRoleItem()**](UserHasRoleApi.md#deleteUserHasRoleItem) | **DELETE** /user_has_roles/{id} | Removes the UserHasRole resource.
[**getUserHasRoleCollection()**](UserHasRoleApi.md#getUserHasRoleCollection) | **GET** /user_has_roles | Retrieves the collection of UserHasRoleOutputDto resources.
[**getUserHasRoleItem()**](UserHasRoleApi.md#getUserHasRoleItem) | **GET** /user_has_roles/{id} | Retrieves a UserHasRoleOutputDto resource.
[**patchUserHasRoleItem()**](UserHasRoleApi.md#patchUserHasRoleItem) | **PATCH** /user_has_roles/{id} | Updates the UserHasRole resource.
[**postUserHasRoleCollection()**](UserHasRoleApi.md#postUserHasRoleCollection) | **POST** /user_has_roles | Creates a UserHasRole resource.


## `deleteUserHasRoleItem()`

```php
deleteUserHasRoleItem($id)
```

Removes the UserHasRole resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\UserHasRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteUserHasRoleItem($id);
} catch (Exception $e) {
    echo 'Exception when calling UserHasRoleApi->deleteUserHasRoleItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserHasRoleCollection()`

```php
getUserHasRoleCollection($page, $itemsPerPage): \EmonsiteApi\Models\GetUserHasRoleCollection200Response
```

Retrieves the collection of UserHasRoleOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\UserHasRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getUserHasRoleCollection($page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHasRoleApi->getUserHasRoleCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetUserHasRoleCollection200Response**](../Model/GetUserHasRoleCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserHasRoleItem()`

```php
getUserHasRoleItem($id): \EmonsiteApi\Models\UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld
```

Retrieves a UserHasRoleOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\UserHasRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getUserHasRoleItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHasRoleApi->getUserHasRoleItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld**](../Model/UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchUserHasRoleItem()`

```php
patchUserHasRoleItem($id, $userHasRoleD91fd0c69421e5afa9bf303992483883): \EmonsiteApi\Models\UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld
```

Updates the UserHasRole resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\UserHasRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$userHasRoleD91fd0c69421e5afa9bf303992483883 = new \EmonsiteApi\Models\UserHasRoleD91fd0c69421e5afa9bf303992483883(); // \EmonsiteApi\Models\UserHasRoleD91fd0c69421e5afa9bf303992483883 | The updated UserHasRole resource

try {
    $result = $apiInstance->patchUserHasRoleItem($id, $userHasRoleD91fd0c69421e5afa9bf303992483883);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHasRoleApi->patchUserHasRoleItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **userHasRoleD91fd0c69421e5afa9bf303992483883** | [**\EmonsiteApi\Models\UserHasRoleD91fd0c69421e5afa9bf303992483883**](../Model/UserHasRoleD91fd0c69421e5afa9bf303992483883.md)| The updated UserHasRole resource | [optional]

### Return type

[**\EmonsiteApi\Models\UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld**](../Model/UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUserHasRoleCollection()`

```php
postUserHasRoleCollection($userHasRole589632707daa9dd4818942897415b76bJsonld): \EmonsiteApi\Models\UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld
```

Creates a UserHasRole resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\UserHasRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userHasRole589632707daa9dd4818942897415b76bJsonld = new \EmonsiteApi\Models\UserHasRole589632707daa9dd4818942897415b76bJsonld(); // \EmonsiteApi\Models\UserHasRole589632707daa9dd4818942897415b76bJsonld | The new UserHasRole resource

try {
    $result = $apiInstance->postUserHasRoleCollection($userHasRole589632707daa9dd4818942897415b76bJsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHasRoleApi->postUserHasRoleCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userHasRole589632707daa9dd4818942897415b76bJsonld** | [**\EmonsiteApi\Models\UserHasRole589632707daa9dd4818942897415b76bJsonld**](../Model/UserHasRole589632707daa9dd4818942897415b76bJsonld.md)| The new UserHasRole resource | [optional]

### Return type

[**\EmonsiteApi\Models\UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld**](../Model/UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
