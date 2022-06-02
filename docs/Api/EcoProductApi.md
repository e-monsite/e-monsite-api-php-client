# EmonsiteApi\EcoProductApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEcoProductItem()**](EcoProductApi.md#deleteEcoProductItem) | **DELETE** /eco_products/{id} | Removes the EcoProduct resource.
[**getEcoProductCollection()**](EcoProductApi.md#getEcoProductCollection) | **GET** /eco_products | Retrieves the collection of EcoProductOutputDto resources.
[**getEcoProductItem()**](EcoProductApi.md#getEcoProductItem) | **GET** /eco_products/{id} | Retrieves a EcoProductOutputDto resource.
[**patchEcoProductItem()**](EcoProductApi.md#patchEcoProductItem) | **PATCH** /eco_products/{id} | Updates the EcoProduct resource.
[**postEcoProductCollection()**](EcoProductApi.md#postEcoProductCollection) | **POST** /eco_products | Creates a EcoProduct resource.


## `deleteEcoProductItem()`

```php
deleteEcoProductItem($id, $siteId)
```

Removes the EcoProduct resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$siteId = 'siteId_example'; // string

try {
    $apiInstance->deleteEcoProductItem($id, $siteId);
} catch (Exception $e) {
    echo 'Exception when calling EcoProductApi->deleteEcoProductItem: ', $e->getMessage(), PHP_EOL;
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

## `getEcoProductCollection()`

```php
getEcoProductCollection($siteId, $ean13, $ean14, $orderUpdDt, $updDtBefore, $updDtStrictlyBefore, $updDtAfter, $updDtStrictlyAfter, $page, $itemsPerPage): \EmonsiteApi\Models\GetEcoProductCollection200Response
```

Retrieves the collection of EcoProductOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = 'siteId_example'; // string
$ean13 = 'ean13_example'; // string
$ean14 = array('ean13_example'); // string[]
$orderUpdDt = 'orderUpdDt_example'; // string
$updDtBefore = 'updDtBefore_example'; // string
$updDtStrictlyBefore = 'updDtStrictlyBefore_example'; // string
$updDtAfter = 'updDtAfter_example'; // string
$updDtStrictlyAfter = 'updDtStrictlyAfter_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getEcoProductCollection($siteId, $ean13, $ean14, $orderUpdDt, $updDtBefore, $updDtStrictlyBefore, $updDtAfter, $updDtStrictlyAfter, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoProductApi->getEcoProductCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**|  |
 **ean13** | **string**|  | [optional]
 **ean14** | [**string[]**](../Model/string.md)|  | [optional]
 **orderUpdDt** | **string**|  | [optional]
 **updDtBefore** | **string**|  | [optional]
 **updDtStrictlyBefore** | **string**|  | [optional]
 **updDtAfter** | **string**|  | [optional]
 **updDtStrictlyAfter** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetEcoProductCollection200Response**](../Model/GetEcoProductCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEcoProductItem()`

```php
getEcoProductItem($id, $siteId): \EmonsiteApi\Models\EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld
```

Retrieves a EcoProductOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$siteId = 'siteId_example'; // string

try {
    $result = $apiInstance->getEcoProductItem($id, $siteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoProductApi->getEcoProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **siteId** | **string**|  |

### Return type

[**\EmonsiteApi\Models\EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld**](../Model/EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchEcoProductItem()`

```php
patchEcoProductItem($id, $siteId, $ecoProduct91429ff1a736cfe91b412a9d5d2f8bd1): \EmonsiteApi\Models\EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld
```

Updates the EcoProduct resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$siteId = 'siteId_example'; // string
$ecoProduct91429ff1a736cfe91b412a9d5d2f8bd1 = new \EmonsiteApi\Models\EcoProduct91429ff1a736cfe91b412a9d5d2f8bd1(); // \EmonsiteApi\Models\EcoProduct91429ff1a736cfe91b412a9d5d2f8bd1 | The updated EcoProduct resource

try {
    $result = $apiInstance->patchEcoProductItem($id, $siteId, $ecoProduct91429ff1a736cfe91b412a9d5d2f8bd1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoProductApi->patchEcoProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **siteId** | **string**|  |
 **ecoProduct91429ff1a736cfe91b412a9d5d2f8bd1** | [**\EmonsiteApi\Models\EcoProduct91429ff1a736cfe91b412a9d5d2f8bd1**](../Model/EcoProduct91429ff1a736cfe91b412a9d5d2f8bd1.md)| The updated EcoProduct resource | [optional]

### Return type

[**\EmonsiteApi\Models\EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld**](../Model/EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEcoProductCollection()`

```php
postEcoProductCollection($ecoProductD02cf7d16e689640fac55c85a0d3ce3fJsonld): \EmonsiteApi\Models\EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld
```

Creates a EcoProduct resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ecoProductD02cf7d16e689640fac55c85a0d3ce3fJsonld = new \EmonsiteApi\Models\EcoProductD02cf7d16e689640fac55c85a0d3ce3fJsonld(); // \EmonsiteApi\Models\EcoProductD02cf7d16e689640fac55c85a0d3ce3fJsonld | The new EcoProduct resource

try {
    $result = $apiInstance->postEcoProductCollection($ecoProductD02cf7d16e689640fac55c85a0d3ce3fJsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoProductApi->postEcoProductCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ecoProductD02cf7d16e689640fac55c85a0d3ce3fJsonld** | [**\EmonsiteApi\Models\EcoProductD02cf7d16e689640fac55c85a0d3ce3fJsonld**](../Model/EcoProductD02cf7d16e689640fac55c85a0d3ce3fJsonld.md)| The new EcoProduct resource | [optional]

### Return type

[**\EmonsiteApi\Models\EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld**](../Model/EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
