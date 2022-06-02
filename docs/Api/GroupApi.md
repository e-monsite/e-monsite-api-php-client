# EmonsiteApi\GroupApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGroupCollection**](GroupApi.md#getgroupcollection) | **GET** /groups | Retrieves the collection of GroupOutputDto resources.
[**getGroupItem**](GroupApi.md#getgroupitem) | **GET** /groups/{id} | Retrieves a GroupOutputDto resource.
[**postGroupCollection**](GroupApi.md#postgroupcollection) | **POST** /groups | Creates a Group resource.

# **getGroupCollection**
> \EmonsiteApi\Models\InlineResponse20020 getGroupCollection($page, $items_per_page)

Retrieves the collection of GroupOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getGroupCollection($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupItem**
> \EmonsiteApi\Models\Group799b1bea2ff8730b1a1a5b188922b633Jsonld getGroupItem($id)

Retrieves a GroupOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getGroupItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\Group799b1bea2ff8730b1a1a5b188922b633Jsonld**](../Model/Group799b1bea2ff8730b1a1a5b188922b633Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGroupCollection**
> \EmonsiteApi\Models\Group799b1bea2ff8730b1a1a5b188922b633Jsonld postGroupCollection($body)

Creates a Group resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EmonsiteApi\Models\GroupDb47b4a609ad5ce5cda04f418c74eadeJsonld(); // \EmonsiteApi\Models\GroupDb47b4a609ad5ce5cda04f418c74eadeJsonld | The new Group resource

try {
    $result = $apiInstance->postGroupCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroupCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EmonsiteApi\Models\GroupDb47b4a609ad5ce5cda04f418c74eadeJsonld**](../Model/GroupDb47b4a609ad5ce5cda04f418c74eadeJsonld.md)| The new Group resource | [optional]

### Return type

[**\EmonsiteApi\Models\Group799b1bea2ff8730b1a1a5b188922b633Jsonld**](../Model/Group799b1bea2ff8730b1a1a5b188922b633Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGroupCollection**
> \EmonsiteApi\Models\Group799b1bea2ff8730b1a1a5b188922b633Jsonld postGroupCollection($body)

Creates a Group resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EmonsiteApi\Models\GroupDb47b4a609ad5ce5cda04f418c74eadeJsonld(); // \EmonsiteApi\Models\GroupDb47b4a609ad5ce5cda04f418c74eadeJsonld | The new Group resource

try {
    $result = $apiInstance->postGroupCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroupCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EmonsiteApi\Models\GroupDb47b4a609ad5ce5cda04f418c74eadeJsonld**](../Model/GroupDb47b4a609ad5ce5cda04f418c74eadeJsonld.md)| The new Group resource | [optional]

### Return type

[**\EmonsiteApi\Models\Group799b1bea2ff8730b1a1a5b188922b633Jsonld**](../Model/Group799b1bea2ff8730b1a1a5b188922b633Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

