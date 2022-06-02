# EmonsiteApi\CategoryApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategoryCollection()**](CategoryApi.md#getCategoryCollection) | **GET** /categories | Retrieves the collection of CategoryOutputDto resources.
[**getCategoryItem()**](CategoryApi.md#getCategoryItem) | **GET** /categories/{id} | Retrieves a CategoryOutputDto resource.
[**postCategoryCollection()**](CategoryApi.md#postCategoryCollection) | **POST** /categories | Creates a Category resource.


## `getCategoryCollection()`

```php
getCategoryCollection($siteId, $modelId, $modelId2, $page, $itemsPerPage): \EmonsiteApi\Models\GetCategoryCollection200Response
```

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
$siteId = 'siteId_example'; // string
$modelId = 'modelId_example'; // string
$modelId2 = array('modelId_example'); // string[]
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getCategoryCollection($siteId, $modelId, $modelId2, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->getCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**|  |
 **modelId** | **string**|  | [optional]
 **modelId2** | [**string[]**](../Model/string.md)|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetCategoryCollection200Response**](../Model/GetCategoryCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoryItem()`

```php
getCategoryItem($id, $siteId): \EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld
```

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
$id = 'id_example'; // string
$siteId = 'siteId_example'; // string

try {
    $result = $apiInstance->getCategoryItem($id, $siteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->getCategoryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **siteId** | **string**|  |

### Return type

[**\EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld**](../Model/Category1244f72848b2e9f4bc7039366e5cef3eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCategoryCollection()`

```php
postCategoryCollection($categoryA72a7db8b7aeb918546eb332f4161205Jsonld): \EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld
```

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
$categoryA72a7db8b7aeb918546eb332f4161205Jsonld = new \EmonsiteApi\Models\CategoryA72a7db8b7aeb918546eb332f4161205Jsonld(); // \EmonsiteApi\Models\CategoryA72a7db8b7aeb918546eb332f4161205Jsonld | The new Category resource

try {
    $result = $apiInstance->postCategoryCollection($categoryA72a7db8b7aeb918546eb332f4161205Jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->postCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryA72a7db8b7aeb918546eb332f4161205Jsonld** | [**\EmonsiteApi\Models\CategoryA72a7db8b7aeb918546eb332f4161205Jsonld**](../Model/CategoryA72a7db8b7aeb918546eb332f4161205Jsonld.md)| The new Category resource | [optional]

### Return type

[**\EmonsiteApi\Models\Category1244f72848b2e9f4bc7039366e5cef3eJsonld**](../Model/Category1244f72848b2e9f4bc7039366e5cef3eJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
