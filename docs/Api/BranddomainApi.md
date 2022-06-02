# EmonsiteApi\BranddomainApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiBrandsBrandDomainsGetSubresource**](BranddomainApi.md#apibrandsbranddomainsgetsubresource) | **GET** /brands/{id}/brand_domains | Retrieves the collection of Branddomain resources.
[**getBranddomainCollection**](BranddomainApi.md#getbranddomaincollection) | **GET** /branddomains | Retrieves the collection of BranddomainOutputDto resources.
[**getBranddomainItem**](BranddomainApi.md#getbranddomainitem) | **GET** /branddomains/{id} | Retrieves a BranddomainOutputDto resource.

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

$apiInstance = new EmonsiteApi\Api\BranddomainApi(
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
    echo 'Exception when calling BranddomainApi->apiBrandsBrandDomainsGetSubresource: ', $e->getMessage(), PHP_EOL;
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

# **getBranddomainCollection**
> \EmonsiteApi\Models\InlineResponse2005 getBranddomainCollection($page, $items_per_page)

Retrieves the collection of BranddomainOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\BranddomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getBranddomainCollection($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranddomainApi->getBranddomainCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **getBranddomainItem**
> \EmonsiteApi\Models\Branddomain5a892977f4b30fe6e5d02bbae1dcc678Jsonld getBranddomainItem($id)

Retrieves a BranddomainOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\BranddomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getBranddomainItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranddomainApi->getBranddomainItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\Branddomain5a892977f4b30fe6e5d02bbae1dcc678Jsonld**](../Model/Branddomain5a892977f4b30fe6e5d02bbae1dcc678Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

