# EmonsiteApi\EcoSupplierApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEcoSupplierCollection**](EcoSupplierApi.md#getecosuppliercollection) | **GET** /eco_suppliers | Retrieves the collection of EcoSupplierOutputDto resources.
[**getEcoSupplierItem**](EcoSupplierApi.md#getecosupplieritem) | **GET** /eco_suppliers/{id} | Retrieves a EcoSupplierOutputDto resource.

# **getEcoSupplierCollection**
> \EmonsiteApi\Models\InlineResponse20018 getEcoSupplierCollection($site_id, $page, $items_per_page)

Retrieves the collection of EcoSupplierOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\EcoSupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getEcoSupplierCollection($site_id, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoSupplierApi->getEcoSupplierCollection: ', $e->getMessage(), PHP_EOL;
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

[**\EmonsiteApi\Models\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEcoSupplierItem**
> \EmonsiteApi\Models\EcoSupplier48593f7d78d0bb92230e457adf84f3f9Jsonld getEcoSupplierItem($id, $site_id)

Retrieves a EcoSupplierOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\EcoSupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$site_id = "site_id_example"; // string | 

try {
    $result = $apiInstance->getEcoSupplierItem($id, $site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoSupplierApi->getEcoSupplierItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **site_id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\EcoSupplier48593f7d78d0bb92230e457adf84f3f9Jsonld**](../Model/EcoSupplier48593f7d78d0bb92230e457adf84f3f9Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

