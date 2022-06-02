# EmonsiteApi\SessionApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSessionCollection**](SessionApi.md#getsessioncollection) | **GET** /sessions | Retrieves the collection of SessionOutputDto resources.
[**getSessionItem**](SessionApi.md#getsessionitem) | **GET** /sessions/{id} | Retrieves a SessionOutputDto resource.

# **getSessionCollection**
> \EmonsiteApi\Models\InlineResponse20023 getSessionCollection($user_ip, $user, $user, $hit_before, $hit_strictly_before, $hit_after, $hit_strictly_after, $page, $items_per_page)

Retrieves the collection of SessionOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_ip = "user_ip_example"; // string | 
$user = "user_example"; // string | 
$user = array("user_example"); // string[] | 
$hit_before = "hit_before_example"; // string | 
$hit_strictly_before = "hit_strictly_before_example"; // string | 
$hit_after = "hit_after_example"; // string | 
$hit_strictly_after = "hit_strictly_after_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getSessionCollection($user_ip, $user, $user, $hit_before, $hit_strictly_before, $hit_after, $hit_strictly_after, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->getSessionCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_ip** | **string**|  | [optional]
 **user** | **string**|  | [optional]
 **user** | [**string[]**](../Model/string.md)|  | [optional]
 **hit_before** | **string**|  | [optional]
 **hit_strictly_before** | **string**|  | [optional]
 **hit_after** | **string**|  | [optional]
 **hit_strictly_after** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSessionItem**
> \EmonsiteApi\Models\Session1bc7a372e0caf630efd366b7299c4bd2Jsonld getSessionItem($id)

Retrieves a SessionOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getSessionItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->getSessionItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\Session1bc7a372e0caf630efd366b7299c4bd2Jsonld**](../Model/Session1bc7a372e0caf630efd366b7299c4bd2Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

