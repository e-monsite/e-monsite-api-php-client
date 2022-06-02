# EmonsiteApi\EcoManufacturerApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEcoManufacturerCollection()**](EcoManufacturerApi.md#getEcoManufacturerCollection) | **GET** /eco_manufacturers | Retrieves the collection of EcoManufacturerOutputDto resources.
[**getEcoManufacturerItem()**](EcoManufacturerApi.md#getEcoManufacturerItem) | **GET** /eco_manufacturers/{id} | Retrieves a EcoManufacturerOutputDto resource.


## `getEcoManufacturerCollection()`

```php
getEcoManufacturerCollection($siteId, $page, $itemsPerPage): \EmonsiteApi\Models\GetEcoManufacturerCollection200Response
```

Retrieves the collection of EcoManufacturerOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoManufacturerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = 'siteId_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getEcoManufacturerCollection($siteId, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoManufacturerApi->getEcoManufacturerCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**|  |
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetEcoManufacturerCollection200Response**](../Model/GetEcoManufacturerCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEcoManufacturerItem()`

```php
getEcoManufacturerItem($id, $siteId): \EmonsiteApi\Models\EcoManufacturer3fefe29d8db145737169803b5fde4d82Jsonld
```

Retrieves a EcoManufacturerOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoManufacturerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$siteId = 'siteId_example'; // string

try {
    $result = $apiInstance->getEcoManufacturerItem($id, $siteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoManufacturerApi->getEcoManufacturerItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **siteId** | **string**|  |

### Return type

[**\EmonsiteApi\Models\EcoManufacturer3fefe29d8db145737169803b5fde4d82Jsonld**](../Model/EcoManufacturer3fefe29d8db145737169803b5fde4d82Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
