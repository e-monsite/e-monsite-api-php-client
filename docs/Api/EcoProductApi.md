# EmonsiteApi\EcoProductApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEcoProductItem**](EcoProductApi.md#deleteecoproductitem) | **DELETE** /eco_products/{id} | Removes the EcoProduct resource.
[**getEcoProductCollection**](EcoProductApi.md#getecoproductcollection) | **GET** /eco_products | Retrieves the collection of EcoProductOutputDto resources.
[**getEcoProductItem**](EcoProductApi.md#getecoproductitem) | **GET** /eco_products/{id} | Retrieves a EcoProductOutputDto resource.
[**patchEcoProductItem**](EcoProductApi.md#patchecoproductitem) | **PATCH** /eco_products/{id} | Updates the EcoProduct resource.
[**postEcoProductCollection**](EcoProductApi.md#postecoproductcollection) | **POST** /eco_products | Creates a EcoProduct resource.

# **deleteEcoProductItem**
> deleteEcoProductItem($id, $site_id)

Removes the EcoProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\EcoProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$site_id = "site_id_example"; // string | 

try {
    $apiInstance->deleteEcoProductItem($id, $site_id);
} catch (Exception $e) {
    echo 'Exception when calling EcoProductApi->deleteEcoProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **site_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEcoProductCollection**
> \EmonsiteApi\Models\InlineResponse20017 getEcoProductCollection($site_id, $ean13, $ean13, $order_upd_dt, $upd_dt_before, $upd_dt_strictly_before, $upd_dt_after, $upd_dt_strictly_after, $page, $items_per_page)

Retrieves the collection of EcoProductOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\EcoProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | 
$ean13 = "ean13_example"; // string | 
$ean13 = array("ean13_example"); // string[] | 
$order_upd_dt = "order_upd_dt_example"; // string | 
$upd_dt_before = "upd_dt_before_example"; // string | 
$upd_dt_strictly_before = "upd_dt_strictly_before_example"; // string | 
$upd_dt_after = "upd_dt_after_example"; // string | 
$upd_dt_strictly_after = "upd_dt_strictly_after_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getEcoProductCollection($site_id, $ean13, $ean13, $order_upd_dt, $upd_dt_before, $upd_dt_strictly_before, $upd_dt_after, $upd_dt_strictly_after, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoProductApi->getEcoProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**|  |
 **ean13** | **string**|  | [optional]
 **ean13** | [**string[]**](../Model/string.md)|  | [optional]
 **order_upd_dt** | **string**|  | [optional]
 **upd_dt_before** | **string**|  | [optional]
 **upd_dt_strictly_before** | **string**|  | [optional]
 **upd_dt_after** | **string**|  | [optional]
 **upd_dt_strictly_after** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEcoProductItem**
> \EmonsiteApi\Models\EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld getEcoProductItem($id, $site_id)

Retrieves a EcoProductOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\EcoProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$site_id = "site_id_example"; // string | 

try {
    $result = $apiInstance->getEcoProductItem($id, $site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoProductApi->getEcoProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **site_id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld**](../Model/EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchEcoProductItem**
> \EmonsiteApi\Models\EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld patchEcoProductItem($site_id, $id, $body)

Updates the EcoProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\EcoProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | 
$id = "id_example"; // string | 
$body = new \EmonsiteApi\Models\EcoProduct91429ff1a736cfe91b412a9d5d2f8bd1(); // \EmonsiteApi\Models\EcoProduct91429ff1a736cfe91b412a9d5d2f8bd1 | The updated EcoProduct resource

try {
    $result = $apiInstance->patchEcoProductItem($site_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoProductApi->patchEcoProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**|  |
 **id** | **string**|  |
 **body** | [**\EmonsiteApi\Models\EcoProduct91429ff1a736cfe91b412a9d5d2f8bd1**](../Model/EcoProduct91429ff1a736cfe91b412a9d5d2f8bd1.md)| The updated EcoProduct resource | [optional]

### Return type

[**\EmonsiteApi\Models\EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld**](../Model/EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEcoProductCollection**
> \EmonsiteApi\Models\EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld postEcoProductCollection($body)

Creates a EcoProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\EcoProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EmonsiteApi\Models\EcoProductD02cf7d16e689640fac55c85a0d3ce3fJsonld(); // \EmonsiteApi\Models\EcoProductD02cf7d16e689640fac55c85a0d3ce3fJsonld | The new EcoProduct resource

try {
    $result = $apiInstance->postEcoProductCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoProductApi->postEcoProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EmonsiteApi\Models\EcoProductD02cf7d16e689640fac55c85a0d3ce3fJsonld**](../Model/EcoProductD02cf7d16e689640fac55c85a0d3ce3fJsonld.md)| The new EcoProduct resource | [optional]

### Return type

[**\EmonsiteApi\Models\EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld**](../Model/EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEcoProductCollection**
> \EmonsiteApi\Models\EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld postEcoProductCollection($body)

Creates a EcoProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\EcoProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EmonsiteApi\Models\EcoProductD02cf7d16e689640fac55c85a0d3ce3fJsonld(); // \EmonsiteApi\Models\EcoProductD02cf7d16e689640fac55c85a0d3ce3fJsonld | The new EcoProduct resource

try {
    $result = $apiInstance->postEcoProductCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoProductApi->postEcoProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EmonsiteApi\Models\EcoProductD02cf7d16e689640fac55c85a0d3ce3fJsonld**](../Model/EcoProductD02cf7d16e689640fac55c85a0d3ce3fJsonld.md)| The new EcoProduct resource | [optional]

### Return type

[**\EmonsiteApi\Models\EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld**](../Model/EcoProduct598f8229d42c1ae36352f3a2f993e71aJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

