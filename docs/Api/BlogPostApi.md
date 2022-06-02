# EmonsiteApi\BlogPostApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBlogPostCollection()**](BlogPostApi.md#getBlogPostCollection) | **GET** /blog_posts | Retrieves the collection of BlogPostOutputDto resources.
[**getBlogPostItem()**](BlogPostApi.md#getBlogPostItem) | **GET** /blog_posts/{id} | Retrieves a BlogPostOutputDto resource.


## `getBlogPostCollection()`

```php
getBlogPostCollection($siteId, $published, $orderPublishFrom, $page, $itemsPerPage): \EmonsiteApi\Models\GetBlogPostCollection200Response
```

Retrieves the collection of BlogPostOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\BlogPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = 'siteId_example'; // string
$published = True; // bool
$orderPublishFrom = 'orderPublishFrom_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getBlogPostCollection($siteId, $published, $orderPublishFrom, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostApi->getBlogPostCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**|  |
 **published** | **bool**|  | [optional]
 **orderPublishFrom** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetBlogPostCollection200Response**](../Model/GetBlogPostCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlogPostItem()`

```php
getBlogPostItem($id, $siteId): \EmonsiteApi\Models\BlogPostCfba0aa09261d831c83f1f9969814d18Jsonld
```

Retrieves a BlogPostOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\BlogPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$siteId = 'siteId_example'; // string

try {
    $result = $apiInstance->getBlogPostItem($id, $siteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostApi->getBlogPostItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **siteId** | **string**|  |

### Return type

[**\EmonsiteApi\Models\BlogPostCfba0aa09261d831c83f1f9969814d18Jsonld**](../Model/BlogPostCfba0aa09261d831c83f1f9969814d18Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
