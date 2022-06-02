# EmonsiteApi\GroupApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGroupCollection()**](GroupApi.md#getGroupCollection) | **GET** /groups | Retrieves the collection of GroupOutputDto resources.
[**getGroupItem()**](GroupApi.md#getGroupItem) | **GET** /groups/{id} | Retrieves a GroupOutputDto resource.
[**postGroupCollection()**](GroupApi.md#postGroupCollection) | **POST** /groups | Creates a Group resource.


## `getGroupCollection()`

```php
getGroupCollection($page, $itemsPerPage): \EmonsiteApi\Models\GetGroupCollection200Response
```

Retrieves the collection of GroupOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getGroupCollection($page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetGroupCollection200Response**](../Model/GetGroupCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupItem()`

```php
getGroupItem($id): \EmonsiteApi\Models\Group799b1bea2ff8730b1a1a5b188922b633Jsonld
```

Retrieves a GroupOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getGroupItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\Group799b1bea2ff8730b1a1a5b188922b633Jsonld**](../Model/Group799b1bea2ff8730b1a1a5b188922b633Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGroupCollection()`

```php
postGroupCollection($groupDb47b4a609ad5ce5cda04f418c74eadeJsonld): \EmonsiteApi\Models\Group799b1bea2ff8730b1a1a5b188922b633Jsonld
```

Creates a Group resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupDb47b4a609ad5ce5cda04f418c74eadeJsonld = new \EmonsiteApi\Models\GroupDb47b4a609ad5ce5cda04f418c74eadeJsonld(); // \EmonsiteApi\Models\GroupDb47b4a609ad5ce5cda04f418c74eadeJsonld | The new Group resource

try {
    $result = $apiInstance->postGroupCollection($groupDb47b4a609ad5ce5cda04f418c74eadeJsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroupCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupDb47b4a609ad5ce5cda04f418c74eadeJsonld** | [**\EmonsiteApi\Models\GroupDb47b4a609ad5ce5cda04f418c74eadeJsonld**](../Model/GroupDb47b4a609ad5ce5cda04f418c74eadeJsonld.md)| The new Group resource | [optional]

### Return type

[**\EmonsiteApi\Models\Group799b1bea2ff8730b1a1a5b188922b633Jsonld**](../Model/Group799b1bea2ff8730b1a1a5b188922b633Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
