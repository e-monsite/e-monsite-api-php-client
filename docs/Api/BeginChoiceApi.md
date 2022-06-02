# Emonsite\BeginChoiceApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBeginChoiceItem**](BeginChoiceApi.md#deletebeginchoiceitem) | **DELETE** /begin_choices/{id} | Removes the BeginChoice resource.
[**getBeginChoiceCollection**](BeginChoiceApi.md#getbeginchoicecollection) | **GET** /begin_choices | Retrieves the collection of BeginChoiceOutputDto resources.
[**getBeginChoiceItem**](BeginChoiceApi.md#getbeginchoiceitem) | **GET** /begin_choices/{id} | Retrieves a BeginChoiceOutputDto resource.
[**patchBeginChoiceItem**](BeginChoiceApi.md#patchbeginchoiceitem) | **PATCH** /begin_choices/{id} | Updates the BeginChoice resource.
[**postBeginChoiceCollection**](BeginChoiceApi.md#postbeginchoicecollection) | **POST** /begin_choices | Creates a BeginChoice resource.

# **deleteBeginChoiceItem**
> deleteBeginChoiceItem($id)

Removes the BeginChoice resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\BeginChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteBeginChoiceItem($id);
} catch (Exception $e) {
    echo 'Exception when calling BeginChoiceApi->deleteBeginChoiceItem: ', $e->getMessage(), PHP_EOL;
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

# **getBeginChoiceCollection**
> \Emonsite\Models\InlineResponse2002 getBeginChoiceCollection($page, $items_per_page)

Retrieves the collection of BeginChoiceOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\BeginChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getBeginChoiceCollection($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginChoiceApi->getBeginChoiceCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Emonsite\Models\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBeginChoiceItem**
> \Emonsite\Models\BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld getBeginChoiceItem($id)

Retrieves a BeginChoiceOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\BeginChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getBeginChoiceItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginChoiceApi->getBeginChoiceItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Emonsite\Models\BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld**](../Model/BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchBeginChoiceItem**
> \Emonsite\Models\BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld patchBeginChoiceItem($id, $body)

Updates the BeginChoice resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\BeginChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Emonsite\Models\BeginChoiceBb182fb4fb9ff316bd0e48934d37505d(); // \Emonsite\Models\BeginChoiceBb182fb4fb9ff316bd0e48934d37505d | The updated BeginChoice resource

try {
    $result = $apiInstance->patchBeginChoiceItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginChoiceApi->patchBeginChoiceItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Emonsite\Models\BeginChoiceBb182fb4fb9ff316bd0e48934d37505d**](../Model/BeginChoiceBb182fb4fb9ff316bd0e48934d37505d.md)| The updated BeginChoice resource | [optional]

### Return type

[**\Emonsite\Models\BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld**](../Model/BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBeginChoiceCollection**
> \Emonsite\Models\BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld postBeginChoiceCollection($body)

Creates a BeginChoice resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\BeginChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\BeginChoice6e2a40ac5a3e62cfe436bfdd79474c58Jsonld(); // \Emonsite\Models\BeginChoice6e2a40ac5a3e62cfe436bfdd79474c58Jsonld | The new BeginChoice resource

try {
    $result = $apiInstance->postBeginChoiceCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginChoiceApi->postBeginChoiceCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\BeginChoice6e2a40ac5a3e62cfe436bfdd79474c58Jsonld**](../Model/BeginChoice6e2a40ac5a3e62cfe436bfdd79474c58Jsonld.md)| The new BeginChoice resource | [optional]

### Return type

[**\Emonsite\Models\BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld**](../Model/BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBeginChoiceCollection**
> \Emonsite\Models\BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld postBeginChoiceCollection($body)

Creates a BeginChoice resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\BeginChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\BeginChoice6e2a40ac5a3e62cfe436bfdd79474c58Jsonld(); // \Emonsite\Models\BeginChoice6e2a40ac5a3e62cfe436bfdd79474c58Jsonld | The new BeginChoice resource

try {
    $result = $apiInstance->postBeginChoiceCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeginChoiceApi->postBeginChoiceCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\BeginChoice6e2a40ac5a3e62cfe436bfdd79474c58Jsonld**](../Model/BeginChoice6e2a40ac5a3e62cfe436bfdd79474c58Jsonld.md)| The new BeginChoice resource | [optional]

### Return type

[**\Emonsite\Models\BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld**](../Model/BeginChoiceE3028f4ebfb2c48645a56fd863368df3Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
