# EmonsiteApi\AlbumImageApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAlbumImageCollection()**](AlbumImageApi.md#getAlbumImageCollection) | **GET** /album_images | Retrieves the collection of AlbumImage resources.
[**getAlbumImageItem()**](AlbumImageApi.md#getAlbumImageItem) | **GET** /album_images/{id} | Retrieves a AlbumImage resource.
[**postAlbumImageCollection()**](AlbumImageApi.md#postAlbumImageCollection) | **POST** /album_images | Creates a AlbumImage resource.


## `getAlbumImageCollection()`

```php
getAlbumImageCollection($siteId, $page, $itemsPerPage): \EmonsiteApi\Models\GetAlbumImageCollection200Response
```

Retrieves the collection of AlbumImage resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\AlbumImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = 'siteId_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getAlbumImageCollection($siteId, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlbumImageApi->getAlbumImageCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**|  |
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetAlbumImageCollection200Response**](../Model/GetAlbumImageCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAlbumImageItem()`

```php
getAlbumImageItem($id, $siteId): \EmonsiteApi\Models\AlbumImage4147e3b456efec88633ecd0377e3d39bJsonld
```

Retrieves a AlbumImage resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\AlbumImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$siteId = 'siteId_example'; // string

try {
    $result = $apiInstance->getAlbumImageItem($id, $siteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlbumImageApi->getAlbumImageItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **siteId** | **string**|  |

### Return type

[**\EmonsiteApi\Models\AlbumImage4147e3b456efec88633ecd0377e3d39bJsonld**](../Model/AlbumImage4147e3b456efec88633ecd0377e3d39bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAlbumImageCollection()`

```php
postAlbumImageCollection($imageSiteId, $imageFile): \EmonsiteApi\Models\AlbumImage4147e3b456efec88633ecd0377e3d39bJsonld
```

Creates a AlbumImage resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\AlbumImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$imageSiteId = 'imageSiteId_example'; // string
$imageFile = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->postAlbumImageCollection($imageSiteId, $imageFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlbumImageApi->postAlbumImageCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **imageSiteId** | **string**|  | [optional]
 **imageFile** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\EmonsiteApi\Models\AlbumImage4147e3b456efec88633ecd0377e3d39bJsonld**](../Model/AlbumImage4147e3b456efec88633ecd0377e3d39bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
