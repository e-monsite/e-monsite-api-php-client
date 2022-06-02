# EmonsiteApi\CategoryApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategoryCollection**](CategoryApi.md#getcategorycollection) | **GET** /categories | Retrieves the collection of CategoryOutputDto resources.
[**getCategoryItem**](CategoryApi.md#getcategoryitem) | **GET** /categories/{id} | Retrieves a CategoryOutputDto resource.
[**postCategoryCollection**](CategoryApi.md#postcategorycollection) | **POST** /categories | Creates a Category resource.

# **getCategoryCollection**
> \EmonsiteApi\Models\InlineResponse2007 getCategoryCollection($site_id, $model_id, $model_id, $page, $items_per_page)

Retrieves the collection of CategoryOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | 
$model_id = "model_id_example"; // string | 
$model_id = array("model_id_example"); // string[] | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getCategoryCollection($site_id, $model_id, $model_id, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->getCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**|  |
 **model_id** | **string**|  | [optional]
 **model_id** | [**string[]**](../Model/string.md)|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategoryItem**
> \EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld getCategoryItem($id, $site_id)

Retrieves a CategoryOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$site_id = "site_id_example"; // string | 

try {
    $result = $apiInstance->getCategoryItem($id, $site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->getCategoryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **site_id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld**](../Model/Category1244f72848b2e9f4bc7039366e5cef3eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCategoryCollection**
> \EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld postCategoryCollection($body)

Creates a Category resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EmonsiteApi\Models\CategoryA72a7db8b7aeb918546eb332f4161205Jsonld(); // \EmonsiteApi\Models\CategoryA72a7db8b7aeb918546eb332f4161205Jsonld | The new Category resource

try {
    $result = $apiInstance->postCategoryCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->postCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EmonsiteApi\Models\CategoryA72a7db8b7aeb918546eb332f4161205Jsonld**](../Model/CategoryA72a7db8b7aeb918546eb332f4161205Jsonld.md)| The new Category resource | [optional]

### Return type

[**\EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld**](../Model/Category1244f72848b2e9f4bc7039366e5cef3eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCategoryCollection**
> \EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld postCategoryCollection($body)

Creates a Category resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EmonsiteApi\Models\CategoryA72a7db8b7aeb918546eb332f4161205Jsonld(); // \EmonsiteApi\Models\CategoryA72a7db8b7aeb918546eb332f4161205Jsonld | The new Category resource

try {
    $result = $apiInstance->postCategoryCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->postCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EmonsiteApi\Models\CategoryA72a7db8b7aeb918546eb332f4161205Jsonld**](../Model/CategoryA72a7db8b7aeb918546eb332f4161205Jsonld.md)| The new Category resource | [optional]

### Return type

[**\EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld**](../Model/Category1244f72848b2e9f4bc7039366e5cef3eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

