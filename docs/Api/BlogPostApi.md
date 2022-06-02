# Emonsite\BlogPostApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBlogPostCollection**](BlogPostApi.md#getblogpostcollection) | **GET** /blog_posts | Retrieves the collection of BlogPostOutputDto resources.
[**getBlogPostItem**](BlogPostApi.md#getblogpostitem) | **GET** /blog_posts/{id} | Retrieves a BlogPostOutputDto resource.

# **getBlogPostCollection**
> \Emonsite\Models\InlineResponse2003 getBlogPostCollection($site_id, $published, $order_publish_from, $page, $items_per_page)

Retrieves the collection of BlogPostOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\BlogPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | 
$published = true; // bool | 
$order_publish_from = "order_publish_from_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getBlogPostCollection($site_id, $published, $order_publish_from, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostApi->getBlogPostCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**|  |
 **published** | **bool**|  | [optional]
 **order_publish_from** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Emonsite\Models\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBlogPostItem**
> \Emonsite\Models\BlogPostCfba0aa09261d831c83f1f9969814d18Jsonld getBlogPostItem($id, $site_id)

Retrieves a BlogPostOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\BlogPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$site_id = "site_id_example"; // string | 

try {
    $result = $apiInstance->getBlogPostItem($id, $site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogPostApi->getBlogPostItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **site_id** | **string**|  |

### Return type

[**\Emonsite\Models\BlogPostCfba0aa09261d831c83f1f9969814d18Jsonld**](../Model/BlogPostCfba0aa09261d831c83f1f9969814d18Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

