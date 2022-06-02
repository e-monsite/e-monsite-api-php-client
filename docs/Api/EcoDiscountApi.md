# EmonsiteApi\EcoDiscountApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEcoDiscountItem()**](EcoDiscountApi.md#deleteEcoDiscountItem) | **DELETE** /eco_discounts/{id} | Removes the EcoDiscount resource.
[**getEcoDiscountCollection()**](EcoDiscountApi.md#getEcoDiscountCollection) | **GET** /eco_discounts | Retrieves the collection of EcoDiscountOutputDto resources.
[**getEcoDiscountItem()**](EcoDiscountApi.md#getEcoDiscountItem) | **GET** /eco_discounts/{id} | Retrieves a EcoDiscountOutputDto resource.
[**patchEcoDiscountItem()**](EcoDiscountApi.md#patchEcoDiscountItem) | **PATCH** /eco_discounts/{id} | Updates the EcoDiscount resource.
[**postEcoDiscountCollection()**](EcoDiscountApi.md#postEcoDiscountCollection) | **POST** /eco_discounts | Creates a EcoDiscount resource.


## `deleteEcoDiscountItem()`

```php
deleteEcoDiscountItem($id, $siteId)
```

Removes the EcoDiscount resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$siteId = 'siteId_example'; // string

try {
    $apiInstance->deleteEcoDiscountItem($id, $siteId);
} catch (Exception $e) {
    echo 'Exception when calling EcoDiscountApi->deleteEcoDiscountItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **siteId** | **string**|  |

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

## `getEcoDiscountCollection()`

```php
getEcoDiscountCollection($siteId, $page, $itemsPerPage): \EmonsiteApi\Models\GetEcoDiscountCollection200Response
```

Retrieves the collection of EcoDiscountOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = 'siteId_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getEcoDiscountCollection($siteId, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoDiscountApi->getEcoDiscountCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**|  |
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetEcoDiscountCollection200Response**](../Model/GetEcoDiscountCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEcoDiscountItem()`

```php
getEcoDiscountItem($id, $siteId): \EmonsiteApi\Models\EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld
```

Retrieves a EcoDiscountOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$siteId = 'siteId_example'; // string

try {
    $result = $apiInstance->getEcoDiscountItem($id, $siteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoDiscountApi->getEcoDiscountItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **siteId** | **string**|  |

### Return type

[**\EmonsiteApi\Models\EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld**](../Model/EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchEcoDiscountItem()`

```php
patchEcoDiscountItem($id, $siteId, $ecoDiscountB3d1155ab8f4c317b0b03ea010998010): \EmonsiteApi\Models\EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld
```

Updates the EcoDiscount resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$siteId = 'siteId_example'; // string
$ecoDiscountB3d1155ab8f4c317b0b03ea010998010 = new \EmonsiteApi\Models\EcoDiscountB3d1155ab8f4c317b0b03ea010998010(); // \EmonsiteApi\Models\EcoDiscountB3d1155ab8f4c317b0b03ea010998010 | The updated EcoDiscount resource

try {
    $result = $apiInstance->patchEcoDiscountItem($id, $siteId, $ecoDiscountB3d1155ab8f4c317b0b03ea010998010);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoDiscountApi->patchEcoDiscountItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **siteId** | **string**|  |
 **ecoDiscountB3d1155ab8f4c317b0b03ea010998010** | [**\EmonsiteApi\Models\EcoDiscountB3d1155ab8f4c317b0b03ea010998010**](../Model/EcoDiscountB3d1155ab8f4c317b0b03ea010998010.md)| The updated EcoDiscount resource | [optional]

### Return type

[**\EmonsiteApi\Models\EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld**](../Model/EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEcoDiscountCollection()`

```php
postEcoDiscountCollection($ecoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld): \EmonsiteApi\Models\EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld
```

Creates a EcoDiscount resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ecoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld = new \EmonsiteApi\Models\EcoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld(); // \EmonsiteApi\Models\EcoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld | The new EcoDiscount resource

try {
    $result = $apiInstance->postEcoDiscountCollection($ecoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoDiscountApi->postEcoDiscountCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ecoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld** | [**\EmonsiteApi\Models\EcoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld**](../Model/EcoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld.md)| The new EcoDiscount resource | [optional]

### Return type

[**\EmonsiteApi\Models\EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld**](../Model/EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
