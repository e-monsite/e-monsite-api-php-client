# EmonsiteApi\BeginChoiceApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBeginChoiceItem()**](BeginChoiceApi.md#deleteBeginChoiceItem) | **DELETE** /begin_choices/{id} | Removes the BeginChoice resource.
[**getBeginChoiceCollection()**](BeginChoiceApi.md#getBeginChoiceCollection) | **GET** /begin_choices | Retrieves the collection of BeginChoiceOutputDto resources.
[**getBeginChoiceItem()**](BeginChoiceApi.md#getBeginChoiceItem) | **GET** /begin_choices/{id} | Retrieves a BeginChoiceOutputDto resource.
[**patchBeginChoiceItem()**](BeginChoiceApi.md#patchBeginChoiceItem) | **PATCH** /begin_choices/{id} | Updates the BeginChoice resource.
[**postBeginChoiceCollection()**](BeginChoiceApi.md#postBeginChoiceCollection) | **POST** /begin_choices | Creates a BeginChoice resource.


## `deleteBeginChoiceItem()`

```php
deleteBeginChoiceItem($id)
```

Removes the BeginChoice resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\BeginChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteBeginChoiceItem($id);
} catch (Exception $e) {
    echo 'Exception when calling BeginChoiceApi->deleteBeginChoiceItem: ', $e->getMessage(), PHP_EOL;
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

## `getBeginChoiceCollection()`

```php
getBeginChoiceCollection($page, $itemsPerPage): \EmonsiteApi\Models\GetBeginChoiceCollection200Response
```

Retrieves the collection of BeginChoiceOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\BeginChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getBeginChoiceCollection($page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginChoiceApi->getBeginChoiceCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetBeginChoiceCollection200Response**](../Model/GetBeginChoiceCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBeginChoiceItem()`

```php
getBeginChoiceItem($id): \EmonsiteApi\Models\BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld
```

Retrieves a BeginChoiceOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\BeginChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBeginChoiceItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginChoiceApi->getBeginChoiceItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld**](../Model/BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchBeginChoiceItem()`

```php
patchBeginChoiceItem($id, $beginChoiceBb182fb4fb9ff316bd0e48934d37505d): \EmonsiteApi\Models\BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld
```

Updates the BeginChoice resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\BeginChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$beginChoiceBb182fb4fb9ff316bd0e48934d37505d = new \EmonsiteApi\Models\BeginChoiceBb182fb4fb9ff316bd0e48934d37505d(); // \EmonsiteApi\Models\BeginChoiceBb182fb4fb9ff316bd0e48934d37505d | The updated BeginChoice resource

try {
    $result = $apiInstance->patchBeginChoiceItem($id, $beginChoiceBb182fb4fb9ff316bd0e48934d37505d);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginChoiceApi->patchBeginChoiceItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **beginChoiceBb182fb4fb9ff316bd0e48934d37505d** | [**\EmonsiteApi\Models\BeginChoiceBb182fb4fb9ff316bd0e48934d37505d**](../Model/BeginChoiceBb182fb4fb9ff316bd0e48934d37505d.md)| The updated BeginChoice resource | [optional]

### Return type

[**\EmonsiteApi\Models\BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld**](../Model/BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBeginChoiceCollection()`

```php
postBeginChoiceCollection($beginChoice6e2a40ac5a3e62cfe436bfdd79474c58Jsonld): \EmonsiteApi\Models\BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld
```

Creates a BeginChoice resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\BeginChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$beginChoice6e2a40ac5a3e62cfe436bfdd79474c58Jsonld = new \EmonsiteApi\Models\BeginChoice6e2a40ac5a3e62cfe436bfdd79474c58Jsonld(); // \EmonsiteApi\Models\BeginChoice6e2a40ac5a3e62cfe436bfdd79474c58Jsonld | The new BeginChoice resource

try {
    $result = $apiInstance->postBeginChoiceCollection($beginChoice6e2a40ac5a3e62cfe436bfdd79474c58Jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginChoiceApi->postBeginChoiceCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **beginChoice6e2a40ac5a3e62cfe436bfdd79474c58Jsonld** | [**\EmonsiteApi\Models\BeginChoice6e2a40ac5a3e62cfe436bfdd79474c58Jsonld**](../Model/BeginChoice6e2a40ac5a3e62cfe436bfdd79474c58Jsonld.md)| The new BeginChoice resource | [optional]

### Return type

[**\EmonsiteApi\Models\BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld**](../Model/BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
