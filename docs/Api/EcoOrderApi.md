# EmonsiteApi\EcoOrderApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEcoOrderCollection()**](EcoOrderApi.md#getEcoOrderCollection) | **GET** /eco_orders | Retrieves the collection of EcoOrderOutputDto resources.
[**getEcoOrderItem()**](EcoOrderApi.md#getEcoOrderItem) | **GET** /eco_orders/{id} | Retrieves a EcoOrderOutputDto resource.
[**patchEcoOrderItem()**](EcoOrderApi.md#patchEcoOrderItem) | **PATCH** /eco_orders/{id} | Updates the EcoOrder resource.


## `getEcoOrderCollection()`

```php
getEcoOrderCollection($siteId, $orderAddDt, $addDtBefore, $addDtStrictlyBefore, $addDtAfter, $addDtStrictlyAfter, $page, $itemsPerPage): \EmonsiteApi\Models\GetEcoOrderCollection200Response
```

Retrieves the collection of EcoOrderOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = 'siteId_example'; // string
$orderAddDt = 'orderAddDt_example'; // string
$addDtBefore = 'addDtBefore_example'; // string
$addDtStrictlyBefore = 'addDtStrictlyBefore_example'; // string
$addDtAfter = 'addDtAfter_example'; // string
$addDtStrictlyAfter = 'addDtStrictlyAfter_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getEcoOrderCollection($siteId, $orderAddDt, $addDtBefore, $addDtStrictlyBefore, $addDtAfter, $addDtStrictlyAfter, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoOrderApi->getEcoOrderCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**|  |
 **orderAddDt** | **string**|  | [optional]
 **addDtBefore** | **string**|  | [optional]
 **addDtStrictlyBefore** | **string**|  | [optional]
 **addDtAfter** | **string**|  | [optional]
 **addDtStrictlyAfter** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetEcoOrderCollection200Response**](../Model/GetEcoOrderCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEcoOrderItem()`

```php
getEcoOrderItem($id, $siteId): \EmonsiteApi\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld
```

Retrieves a EcoOrderOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$siteId = 'siteId_example'; // string

try {
    $result = $apiInstance->getEcoOrderItem($id, $siteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoOrderApi->getEcoOrderItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **siteId** | **string**|  |

### Return type

[**\EmonsiteApi\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld**](../Model/EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchEcoOrderItem()`

```php
patchEcoOrderItem($id, $siteId, $ecoOrder93bd0f9e3377e379cb5585eb311ed117): \EmonsiteApi\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld
```

Updates the EcoOrder resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$siteId = 'siteId_example'; // string
$ecoOrder93bd0f9e3377e379cb5585eb311ed117 = new \EmonsiteApi\Models\EcoOrder93bd0f9e3377e379cb5585eb311ed117(); // \EmonsiteApi\Models\EcoOrder93bd0f9e3377e379cb5585eb311ed117 | The updated EcoOrder resource

try {
    $result = $apiInstance->patchEcoOrderItem($id, $siteId, $ecoOrder93bd0f9e3377e379cb5585eb311ed117);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoOrderApi->patchEcoOrderItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **siteId** | **string**|  |
 **ecoOrder93bd0f9e3377e379cb5585eb311ed117** | [**\EmonsiteApi\Models\EcoOrder93bd0f9e3377e379cb5585eb311ed117**](../Model/EcoOrder93bd0f9e3377e379cb5585eb311ed117.md)| The updated EcoOrder resource | [optional]

### Return type

[**\EmonsiteApi\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld**](../Model/EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
