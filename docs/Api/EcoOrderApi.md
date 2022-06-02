# EmonsiteApi\EcoOrderApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEcoOrderCollection**](EcoOrderApi.md#getecoordercollection) | **GET** /eco_orders | Retrieves the collection of EcoOrderOutputDto resources.
[**getEcoOrderItem**](EcoOrderApi.md#getecoorderitem) | **GET** /eco_orders/{id} | Retrieves a EcoOrderOutputDto resource.
[**patchEcoOrderItem**](EcoOrderApi.md#patchecoorderitem) | **PATCH** /eco_orders/{id} | Updates the EcoOrder resource.

# **getEcoOrderCollection**
> \EmonsiteApi\Models\InlineResponse20016 getEcoOrderCollection($site_id, $order_add_dt, $add_dt_before, $add_dt_strictly_before, $add_dt_after, $add_dt_strictly_after, $page, $items_per_page)

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
$site_id = "site_id_example"; // string | 
$order_add_dt = "order_add_dt_example"; // string | 
$add_dt_before = "add_dt_before_example"; // string | 
$add_dt_strictly_before = "add_dt_strictly_before_example"; // string | 
$add_dt_after = "add_dt_after_example"; // string | 
$add_dt_strictly_after = "add_dt_strictly_after_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getEcoOrderCollection($site_id, $order_add_dt, $add_dt_before, $add_dt_strictly_before, $add_dt_after, $add_dt_strictly_after, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoOrderApi->getEcoOrderCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**|  |
 **order_add_dt** | **string**|  | [optional]
 **add_dt_before** | **string**|  | [optional]
 **add_dt_strictly_before** | **string**|  | [optional]
 **add_dt_after** | **string**|  | [optional]
 **add_dt_strictly_after** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEcoOrderItem**
> \EmonsiteApi\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld getEcoOrderItem($id, $site_id)

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
$id = "id_example"; // string | 
$site_id = "site_id_example"; // string | 

try {
    $result = $apiInstance->getEcoOrderItem($id, $site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoOrderApi->getEcoOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **site_id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld**](../Model/EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchEcoOrderItem**
> \EmonsiteApi\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld patchEcoOrderItem($site_id, $id, $body)

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
$site_id = "site_id_example"; // string | 
$id = "id_example"; // string | 
$body = new \EmonsiteApi\Models\EcoOrder93bd0f9e3377e379cb5585eb311ed117(); // \EmonsiteApi\Models\EcoOrder93bd0f9e3377e379cb5585eb311ed117 | The updated EcoOrder resource

try {
    $result = $apiInstance->patchEcoOrderItem($site_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoOrderApi->patchEcoOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**|  |
 **id** | **string**|  |
 **body** | [**\EmonsiteApi\Models\EcoOrder93bd0f9e3377e379cb5585eb311ed117**](../Model/EcoOrder93bd0f9e3377e379cb5585eb311ed117.md)| The updated EcoOrder resource | [optional]

### Return type

[**\EmonsiteApi\Models\EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld**](../Model/EcoOrder06eb27d89b43dc4782ed8913cc65bcf1Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

