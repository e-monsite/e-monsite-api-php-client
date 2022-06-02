# EmonsiteApi\StorageImageApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStorageImageCollection()**](StorageImageApi.md#getStorageImageCollection) | **GET** /storage_images | Retrieves the collection of StorageImageOutputDto resources.
[**getStorageImageItem()**](StorageImageApi.md#getStorageImageItem) | **GET** /storage_images/{id} | Retrieves a StorageImageOutputDto resource.
[**patchStorageImageItem()**](StorageImageApi.md#patchStorageImageItem) | **PATCH** /storage_images/{id} | Updates the StorageImage resource.
[**postStorageImageCollection()**](StorageImageApi.md#postStorageImageCollection) | **POST** /storage_images | Creates a StorageImage resource.


## `getStorageImageCollection()`

```php
getStorageImageCollection($siteId, $orderAddDt, $page, $itemsPerPage): \EmonsiteApi\Models\GetStorageImageCollection200Response
```

Retrieves the collection of StorageImageOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\StorageImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = 'siteId_example'; // string
$orderAddDt = 'orderAddDt_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getStorageImageCollection($siteId, $orderAddDt, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageImageApi->getStorageImageCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**|  |
 **orderAddDt** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetStorageImageCollection200Response**](../Model/GetStorageImageCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStorageImageItem()`

```php
getStorageImageItem($id, $siteId): \EmonsiteApi\Models\StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld
```

Retrieves a StorageImageOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\StorageImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$siteId = 'siteId_example'; // string

try {
    $result = $apiInstance->getStorageImageItem($id, $siteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageImageApi->getStorageImageItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **siteId** | **string**|  |

### Return type

[**\EmonsiteApi\Models\StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld**](../Model/StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchStorageImageItem()`

```php
patchStorageImageItem($id, $siteId, $storageImage292cb7fe7e2c3f669075bf385747b767): \EmonsiteApi\Models\StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld
```

Updates the StorageImage resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\StorageImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$siteId = 'siteId_example'; // string
$storageImage292cb7fe7e2c3f669075bf385747b767 = new \EmonsiteApi\Models\StorageImage292cb7fe7e2c3f669075bf385747b767(); // \EmonsiteApi\Models\StorageImage292cb7fe7e2c3f669075bf385747b767 | The updated StorageImage resource

try {
    $result = $apiInstance->patchStorageImageItem($id, $siteId, $storageImage292cb7fe7e2c3f669075bf385747b767);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageImageApi->patchStorageImageItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **siteId** | **string**|  |
 **storageImage292cb7fe7e2c3f669075bf385747b767** | [**\EmonsiteApi\Models\StorageImage292cb7fe7e2c3f669075bf385747b767**](../Model/StorageImage292cb7fe7e2c3f669075bf385747b767.md)| The updated StorageImage resource | [optional]

### Return type

[**\EmonsiteApi\Models\StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld**](../Model/StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStorageImageCollection()`

```php
postStorageImageCollection($imageSiteId, $imageFile): \EmonsiteApi\Models\StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld
```

Creates a StorageImage resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\StorageImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$imageSiteId = 'imageSiteId_example'; // string
$imageFile = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->postStorageImageCollection($imageSiteId, $imageFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageImageApi->postStorageImageCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **imageSiteId** | **string**|  | [optional]
 **imageFile** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\EmonsiteApi\Models\StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld**](../Model/StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
