# EmonsiteApi\StorageImageApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStorageImageCollection**](StorageImageApi.md#getstorageimagecollection) | **GET** /storage_images | Retrieves the collection of StorageImageOutputDto resources.
[**getStorageImageItem**](StorageImageApi.md#getstorageimageitem) | **GET** /storage_images/{id} | Retrieves a StorageImageOutputDto resource.
[**patchStorageImageItem**](StorageImageApi.md#patchstorageimageitem) | **PATCH** /storage_images/{id} | Updates the StorageImage resource.
[**postStorageImageCollection**](StorageImageApi.md#poststorageimagecollection) | **POST** /storage_images | Creates a StorageImage resource.

# **getStorageImageCollection**
> \EmonsiteApi\Models\InlineResponse20026 getStorageImageCollection($site_id, $order_add_dt, $page, $items_per_page)

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
$site_id = "site_id_example"; // string | 
$order_add_dt = "order_add_dt_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getStorageImageCollection($site_id, $order_add_dt, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageImageApi->getStorageImageCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**|  |
 **order_add_dt** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStorageImageItem**
> \EmonsiteApi\Models\StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld getStorageImageItem($id, $site_id)

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
$id = "id_example"; // string | 
$site_id = "site_id_example"; // string | 

try {
    $result = $apiInstance->getStorageImageItem($id, $site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageImageApi->getStorageImageItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **site_id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld**](../Model/StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchStorageImageItem**
> \EmonsiteApi\Models\StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld patchStorageImageItem($site_id, $id, $body)

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
$site_id = "site_id_example"; // string | 
$id = "id_example"; // string | 
$body = new \EmonsiteApi\Models\StorageImage292cb7fe7e2c3f669075bf385747b767(); // \EmonsiteApi\Models\StorageImage292cb7fe7e2c3f669075bf385747b767 | The updated StorageImage resource

try {
    $result = $apiInstance->patchStorageImageItem($site_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageImageApi->patchStorageImageItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**|  |
 **id** | **string**|  |
 **body** | [**\EmonsiteApi\Models\StorageImage292cb7fe7e2c3f669075bf385747b767**](../Model/StorageImage292cb7fe7e2c3f669075bf385747b767.md)| The updated StorageImage resource | [optional]

### Return type

[**\EmonsiteApi\Models\StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld**](../Model/StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStorageImageCollection**
> \EmonsiteApi\Models\StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld postStorageImageCollection($image_site_id, $image_file)

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
$image_site_id = "image_site_id_example"; // string | 
$image_file = "image_file_example"; // string | 

try {
    $result = $apiInstance->postStorageImageCollection($image_site_id, $image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageImageApi->postStorageImageCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_site_id** | **string**|  | [optional]
 **image_file** | **string****string**|  | [optional]

### Return type

[**\EmonsiteApi\Models\StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld**](../Model/StorageImage64ebe0c84f35c94c053ca1a666bfce79Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

