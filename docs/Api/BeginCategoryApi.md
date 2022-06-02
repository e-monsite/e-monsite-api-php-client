# EmonsiteApi\BeginCategoryApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBeginCategoryItem**](BeginCategoryApi.md#deletebegincategoryitem) | **DELETE** /begin_categories/{id} | Removes the BeginCategory resource.
[**getBeginCategoryCollection**](BeginCategoryApi.md#getbegincategorycollection) | **GET** /begin_categories | Retrieves the collection of BeginCategoryOutputDto resources.
[**getBeginCategoryItem**](BeginCategoryApi.md#getbegincategoryitem) | **GET** /begin_categories/{id} | Retrieves a BeginCategoryOutputDto resource.
[**patchBeginCategoryItem**](BeginCategoryApi.md#patchbegincategoryitem) | **PATCH** /begin_categories/{id} | Updates the BeginCategory resource.
[**postBeginCategoryCollection**](BeginCategoryApi.md#postbegincategorycollection) | **POST** /begin_categories | Creates a BeginCategory resource.

# **deleteBeginCategoryItem**
> deleteBeginCategoryItem($id)

Removes the BeginCategory resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\BeginCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteBeginCategoryItem($id);
} catch (Exception $e) {
    echo 'Exception when calling BeginCategoryApi->deleteBeginCategoryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBeginCategoryCollection**
> \EmonsiteApi\Models\InlineResponse2001 getBeginCategoryCollection($page, $items_per_page)

Retrieves the collection of BeginCategoryOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\BeginCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getBeginCategoryCollection($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginCategoryApi->getBeginCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBeginCategoryItem**
> \EmonsiteApi\Models\BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld getBeginCategoryItem($id)

Retrieves a BeginCategoryOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\BeginCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getBeginCategoryItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginCategoryApi->getBeginCategoryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld**](../Model/BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchBeginCategoryItem**
> \EmonsiteApi\Models\BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld patchBeginCategoryItem($id, $body)

Updates the BeginCategory resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\BeginCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \EmonsiteApi\Models\BeginCategoryF0c108203dccba65ff19d7e99e810cf3(); // \EmonsiteApi\Models\BeginCategoryF0c108203dccba65ff19d7e99e810cf3 | The updated BeginCategory resource

try {
    $result = $apiInstance->patchBeginCategoryItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginCategoryApi->patchBeginCategoryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\EmonsiteApi\Models\BeginCategoryF0c108203dccba65ff19d7e99e810cf3**](../Model/BeginCategoryF0c108203dccba65ff19d7e99e810cf3.md)| The updated BeginCategory resource | [optional]

### Return type

[**\EmonsiteApi\Models\BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld**](../Model/BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBeginCategoryCollection**
> \EmonsiteApi\Models\BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld postBeginCategoryCollection($body)

Creates a BeginCategory resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\BeginCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EmonsiteApi\Models\BeginCategoryDc16a9bcc02b0a6b952ca856e741db30Jsonld(); // \EmonsiteApi\Models\BeginCategoryDc16a9bcc02b0a6b952ca856e741db30Jsonld | The new BeginCategory resource

try {
    $result = $apiInstance->postBeginCategoryCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginCategoryApi->postBeginCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EmonsiteApi\Models\BeginCategoryDc16a9bcc02b0a6b952ca856e741db30Jsonld**](../Model/BeginCategoryDc16a9bcc02b0a6b952ca856e741db30Jsonld.md)| The new BeginCategory resource | [optional]

### Return type

[**\EmonsiteApi\Models\BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld**](../Model/BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBeginCategoryCollection**
> \EmonsiteApi\Models\BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld postBeginCategoryCollection($body)

Creates a BeginCategory resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\BeginCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EmonsiteApi\Models\BeginCategoryDc16a9bcc02b0a6b952ca856e741db30Jsonld(); // \EmonsiteApi\Models\BeginCategoryDc16a9bcc02b0a6b952ca856e741db30Jsonld | The new BeginCategory resource

try {
    $result = $apiInstance->postBeginCategoryCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginCategoryApi->postBeginCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EmonsiteApi\Models\BeginCategoryDc16a9bcc02b0a6b952ca856e741db30Jsonld**](../Model/BeginCategoryDc16a9bcc02b0a6b952ca856e741db30Jsonld.md)| The new BeginCategory resource | [optional]

### Return type

[**\EmonsiteApi\Models\BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld**](../Model/BeginCategoryB425d7ae39b0fe04f80380a5489db196Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

