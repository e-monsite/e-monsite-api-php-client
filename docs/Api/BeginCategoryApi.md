# EmonsiteApi\BeginCategoryApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBeginCategoryItem()**](BeginCategoryApi.md#deleteBeginCategoryItem) | **DELETE** /begin_categories/{id} | Removes the BeginCategory resource.
[**getBeginCategoryCollection()**](BeginCategoryApi.md#getBeginCategoryCollection) | **GET** /begin_categories | Retrieves the collection of BeginCategoryOutputDto resources.
[**getBeginCategoryItem()**](BeginCategoryApi.md#getBeginCategoryItem) | **GET** /begin_categories/{id} | Retrieves a BeginCategoryOutputDto resource.
[**patchBeginCategoryItem()**](BeginCategoryApi.md#patchBeginCategoryItem) | **PATCH** /begin_categories/{id} | Updates the BeginCategory resource.
[**postBeginCategoryCollection()**](BeginCategoryApi.md#postBeginCategoryCollection) | **POST** /begin_categories | Creates a BeginCategory resource.


## `deleteBeginCategoryItem()`

```php
deleteBeginCategoryItem($id)
```

Removes the BeginCategory resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\BeginCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteBeginCategoryItem($id);
} catch (Exception $e) {
    echo 'Exception when calling BeginCategoryApi->deleteBeginCategoryItem: ', $e->getMessage(), PHP_EOL;
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

## `getBeginCategoryCollection()`

```php
getBeginCategoryCollection($page, $itemsPerPage): \EmonsiteApi\Models\GetBeginCategoryCollection200Response
```

Retrieves the collection of BeginCategoryOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\BeginCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getBeginCategoryCollection($page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginCategoryApi->getBeginCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetBeginCategoryCollection200Response**](../Model/GetBeginCategoryCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBeginCategoryItem()`

```php
getBeginCategoryItem($id): \EmonsiteApi\Models\BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld
```

Retrieves a BeginCategoryOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\BeginCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBeginCategoryItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginCategoryApi->getBeginCategoryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld**](../Model/BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchBeginCategoryItem()`

```php
patchBeginCategoryItem($id, $beginCategoryF0c108203dccba65ff19d7e99e810cf3): \EmonsiteApi\Models\BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld
```

Updates the BeginCategory resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\BeginCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$beginCategoryF0c108203dccba65ff19d7e99e810cf3 = new \EmonsiteApi\Models\BeginCategoryF0c108203dccba65ff19d7e99e810cf3(); // \EmonsiteApi\Models\BeginCategoryF0c108203dccba65ff19d7e99e810cf3 | The updated BeginCategory resource

try {
    $result = $apiInstance->patchBeginCategoryItem($id, $beginCategoryF0c108203dccba65ff19d7e99e810cf3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginCategoryApi->patchBeginCategoryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **beginCategoryF0c108203dccba65ff19d7e99e810cf3** | [**\EmonsiteApi\Models\BeginCategoryF0c108203dccba65ff19d7e99e810cf3**](../Model/BeginCategoryF0c108203dccba65ff19d7e99e810cf3.md)| The updated BeginCategory resource | [optional]

### Return type

[**\EmonsiteApi\Models\BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld**](../Model/BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBeginCategoryCollection()`

```php
postBeginCategoryCollection($beginCategoryDc16a9bcc02b0a6b952ca856e741db30Jsonld): \EmonsiteApi\Models\BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld
```

Creates a BeginCategory resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\BeginCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$beginCategoryDc16a9bcc02b0a6b952ca856e741db30Jsonld = new \EmonsiteApi\Models\BeginCategoryDc16a9bcc02b0a6b952ca856e741db30Jsonld(); // \EmonsiteApi\Models\BeginCategoryDc16a9bcc02b0a6b952ca856e741db30Jsonld | The new BeginCategory resource

try {
    $result = $apiInstance->postBeginCategoryCollection($beginCategoryDc16a9bcc02b0a6b952ca856e741db30Jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginCategoryApi->postBeginCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **beginCategoryDc16a9bcc02b0a6b952ca856e741db30Jsonld** | [**\EmonsiteApi\Models\BeginCategoryDc16a9bcc02b0a6b952ca856e741db30Jsonld**](../Model/BeginCategoryDc16a9bcc02b0a6b952ca856e741db30Jsonld.md)| The new BeginCategory resource | [optional]

### Return type

[**\EmonsiteApi\Models\BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld**](../Model/BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
