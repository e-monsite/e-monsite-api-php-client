# EmonsiteApi\RoleApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteRoleItem()**](RoleApi.md#deleteRoleItem) | **DELETE** /roles/{id} | Removes the Role resource.
[**getRoleCollection()**](RoleApi.md#getRoleCollection) | **GET** /roles | Retrieves the collection of RoleOutputDto resources.
[**getRoleItem()**](RoleApi.md#getRoleItem) | **GET** /roles/{id} | Retrieves a RoleOutputDto resource.
[**patchRoleItem()**](RoleApi.md#patchRoleItem) | **PATCH** /roles/{id} | Updates the Role resource.
[**postRoleCollection()**](RoleApi.md#postRoleCollection) | **POST** /roles | Creates a Role resource.
[**resourcesRoleItem()**](RoleApi.md#resourcesRoleItem) | **GET** /roles-resources | Get all role resources


## `deleteRoleItem()`

```php
deleteRoleItem($id)
```

Removes the Role resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteRoleItem($id);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->deleteRoleItem: ', $e->getMessage(), PHP_EOL;
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

## `getRoleCollection()`

```php
getRoleCollection($page, $itemsPerPage): \EmonsiteApi\Models\GetRoleCollection200Response
```

Retrieves the collection of RoleOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getRoleCollection($page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->getRoleCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetRoleCollection200Response**](../Model/GetRoleCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoleItem()`

```php
getRoleItem($id): \EmonsiteApi\Models\Role41c793592002936a9986d67e92f37a9bJsonld
```

Retrieves a RoleOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getRoleItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->getRoleItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\Role41c793592002936a9986d67e92f37a9bJsonld**](../Model/Role41c793592002936a9986d67e92f37a9bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchRoleItem()`

```php
patchRoleItem($id, $role8335fa6e7449daa5d9298e9ce37ab462): \EmonsiteApi\Models\Role41c793592002936a9986d67e92f37a9bJsonld
```

Updates the Role resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$role8335fa6e7449daa5d9298e9ce37ab462 = new \EmonsiteApi\Models\Role8335fa6e7449daa5d9298e9ce37ab462(); // \EmonsiteApi\Models\Role8335fa6e7449daa5d9298e9ce37ab462 | The updated Role resource

try {
    $result = $apiInstance->patchRoleItem($id, $role8335fa6e7449daa5d9298e9ce37ab462);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->patchRoleItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **role8335fa6e7449daa5d9298e9ce37ab462** | [**\EmonsiteApi\Models\Role8335fa6e7449daa5d9298e9ce37ab462**](../Model/Role8335fa6e7449daa5d9298e9ce37ab462.md)| The updated Role resource | [optional]

### Return type

[**\EmonsiteApi\Models\Role41c793592002936a9986d67e92f37a9bJsonld**](../Model/Role41c793592002936a9986d67e92f37a9bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRoleCollection()`

```php
postRoleCollection($role398f80f76f54ad7f04b1f3d6647c661aJsonld): \EmonsiteApi\Models\Role41c793592002936a9986d67e92f37a9bJsonld
```

Creates a Role resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role398f80f76f54ad7f04b1f3d6647c661aJsonld = new \EmonsiteApi\Models\Role398f80f76f54ad7f04b1f3d6647c661aJsonld(); // \EmonsiteApi\Models\Role398f80f76f54ad7f04b1f3d6647c661aJsonld | The new Role resource

try {
    $result = $apiInstance->postRoleCollection($role398f80f76f54ad7f04b1f3d6647c661aJsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->postRoleCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role398f80f76f54ad7f04b1f3d6647c661aJsonld** | [**\EmonsiteApi\Models\Role398f80f76f54ad7f04b1f3d6647c661aJsonld**](../Model/Role398f80f76f54ad7f04b1f3d6647c661aJsonld.md)| The new Role resource | [optional]

### Return type

[**\EmonsiteApi\Models\Role41c793592002936a9986d67e92f37a9bJsonld**](../Model/Role41c793592002936a9986d67e92f37a9bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resourcesRoleItem()`

```php
resourcesRoleItem(): \EmonsiteApi\Models\Role41c793592002936a9986d67e92f37a9bJsonld
```

Get all role resources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->resourcesRoleItem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->resourcesRoleItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\EmonsiteApi\Models\Role41c793592002936a9986d67e92f37a9bJsonld**](../Model/Role41c793592002936a9986d67e92f37a9bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
