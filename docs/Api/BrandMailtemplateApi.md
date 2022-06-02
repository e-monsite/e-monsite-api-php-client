# EmonsiteApi\BrandMailtemplateApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBrandMailtemplateCollection**](BrandMailtemplateApi.md#getbrandmailtemplatecollection) | **GET** /brand_mailtemplates | Retrieves the collection of BrandMailtemplateOutputDto resources.
[**getBrandMailtemplateItem**](BrandMailtemplateApi.md#getbrandmailtemplateitem) | **GET** /brand_mailtemplates/{id} | Retrieves a BrandMailtemplateOutputDto resource.

# **getBrandMailtemplateCollection**
> \EmonsiteApi\Models\InlineResponse2004 getBrandMailtemplateCollection($page, $items_per_page)

Retrieves the collection of BrandMailtemplateOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\BrandMailtemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getBrandMailtemplateCollection($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandMailtemplateApi->getBrandMailtemplateCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBrandMailtemplateItem**
> \EmonsiteApi\Models\BrandMailtemplateF7868dc2d61d9d5900e2966c0baf4626Jsonld getBrandMailtemplateItem($id)

Retrieves a BrandMailtemplateOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\BrandMailtemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getBrandMailtemplateItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandMailtemplateApi->getBrandMailtemplateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\BrandMailtemplateF7868dc2d61d9d5900e2966c0baf4626Jsonld**](../Model/BrandMailtemplateF7868dc2d61d9d5900e2966c0baf4626Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

