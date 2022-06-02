# EmonsiteApi\BrandApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiBrandsBrandDomainsGetSubresource**](BrandApi.md#apibrandsbranddomainsgetsubresource) | **GET** /brands/{id}/brand_domains | Retrieves the collection of Branddomain resources.
[**getBrandCollection**](BrandApi.md#getbrandcollection) | **GET** /brands | Retrieves the collection of BrandOutputDto resources.
[**getBrandItem**](BrandApi.md#getbranditem) | **GET** /brands/{id} | Retrieves a BrandOutputDto resource.
[**patchBrandItem**](BrandApi.md#patchbranditem) | **PATCH** /brands/{id} | Updates the Brand resource.

# **apiBrandsBrandDomainsGetSubresource**
> \EmonsiteApi\Models\InlineResponse2005 apiBrandsBrandDomainsGetSubresource($id, $page, $items_per_page)

Retrieves the collection of Branddomain resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\BrandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->apiBrandsBrandDomainsGetSubresource($id, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->apiBrandsBrandDomainsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBrandCollection**
> \EmonsiteApi\Models\InlineResponse2006 getBrandCollection($order_add_dt, $page, $items_per_page)

Retrieves the collection of BrandOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\BrandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_add_dt = "order_add_dt_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getBrandCollection($order_add_dt, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->getBrandCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_add_dt** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBrandItem**
> \EmonsiteApi\Models\Brand2fb1a13c6cb9d850d673a6831c427f00Jsonld getBrandItem($id)

Retrieves a BrandOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\BrandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getBrandItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->getBrandItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\Brand2fb1a13c6cb9d850d673a6831c427f00Jsonld**](../Model/Brand2fb1a13c6cb9d850d673a6831c427f00Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchBrandItem**
> \EmonsiteApi\Models\Brand2fb1a13c6cb9d850d673a6831c427f00Jsonld patchBrandItem($id, $body)

Updates the Brand resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\BrandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \EmonsiteApi\Models\Brand962c5489a05f3ff6192cd4c630d8abd7(); // \EmonsiteApi\Models\Brand962c5489a05f3ff6192cd4c630d8abd7 | The updated Brand resource

try {
    $result = $apiInstance->patchBrandItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->patchBrandItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\EmonsiteApi\Models\Brand962c5489a05f3ff6192cd4c630d8abd7**](../Model/Brand962c5489a05f3ff6192cd4c630d8abd7.md)| The updated Brand resource | [optional]

### Return type

[**\EmonsiteApi\Models\Brand2fb1a13c6cb9d850d673a6831c427f00Jsonld**](../Model/Brand2fb1a13c6cb9d850d673a6831c427f00Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

