# EmonsiteApi\AlbumImageApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAlbumImageCollection**](AlbumImageApi.md#getalbumimagecollection) | **GET** /album_images | Retrieves the collection of AlbumImage resources.
[**getAlbumImageItem**](AlbumImageApi.md#getalbumimageitem) | **GET** /album_images/{id} | Retrieves a AlbumImage resource.
[**postAlbumImageCollection**](AlbumImageApi.md#postalbumimagecollection) | **POST** /album_images | Creates a AlbumImage resource.

# **getAlbumImageCollection**
> \EmonsiteApi\Models\InlineResponse200 getAlbumImageCollection($site_id, $page, $items_per_page)

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
$site_id = "site_id_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getAlbumImageCollection($site_id, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlbumImageApi->getAlbumImageCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**|  |
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlbumImageItem**
> \EmonsiteApi\Models\AlbumImage4147e3b456efec88633ecd0377e3d39bJsonld getAlbumImageItem($id, $site_id)

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
$id = "id_example"; // string | 
$site_id = "site_id_example"; // string | 

try {
    $result = $apiInstance->getAlbumImageItem($id, $site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlbumImageApi->getAlbumImageItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **site_id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\AlbumImage4147e3b456efec88633ecd0377e3d39bJsonld**](../Model/AlbumImage4147e3b456efec88633ecd0377e3d39bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAlbumImageCollection**
> \EmonsiteApi\Models\AlbumImage4147e3b456efec88633ecd0377e3d39bJsonld postAlbumImageCollection($image_site_id, $image_file)

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
$image_site_id = "image_site_id_example"; // string | 
$image_file = "image_file_example"; // string | 

try {
    $result = $apiInstance->postAlbumImageCollection($image_site_id, $image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlbumImageApi->postAlbumImageCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_site_id** | **string**|  | [optional]
 **image_file** | **string****string**|  | [optional]

### Return type

[**\EmonsiteApi\Models\AlbumImage4147e3b456efec88633ecd0377e3d39bJsonld**](../Model/AlbumImage4147e3b456efec88633ecd0377e3d39bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

