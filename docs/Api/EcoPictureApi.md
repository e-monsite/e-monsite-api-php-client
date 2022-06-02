# Emonsite\EcoPictureApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEcoPictureItem**](EcoPictureApi.md#getecopictureitem) | **GET** /eco_pictures/{id} | Retrieves a EcoPictureOutputDto resource.
[**postEcoPictureCollection**](EcoPictureApi.md#postecopicturecollection) | **POST** /eco_pictures | Creates a EcoPicture resource.

# **getEcoPictureItem**
> \Emonsite\Models\EcoPictureDb02d0aaad5f8444eaf8f3e058d9affeJsonld getEcoPictureItem($id)

Retrieves a EcoPictureOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\EcoPictureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getEcoPictureItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoPictureApi->getEcoPictureItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Emonsite\Models\EcoPictureDb02d0aaad5f8444eaf8f3e058d9affeJsonld**](../Model/EcoPictureDb02d0aaad5f8444eaf8f3e058d9affeJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEcoPictureCollection**
> \Emonsite\Models\EcoPictureDb02d0aaad5f8444eaf8f3e058d9affeJsonld postEcoPictureCollection($body)

Creates a EcoPicture resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\EcoPictureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\EcoPicture79ef563d06537e846c283ccecbecc002Jsonld(); // \Emonsite\Models\EcoPicture79ef563d06537e846c283ccecbecc002Jsonld | The new EcoPicture resource

try {
    $result = $apiInstance->postEcoPictureCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoPictureApi->postEcoPictureCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\EcoPicture79ef563d06537e846c283ccecbecc002Jsonld**](../Model/EcoPicture79ef563d06537e846c283ccecbecc002Jsonld.md)| The new EcoPicture resource | [optional]

### Return type

[**\Emonsite\Models\EcoPictureDb02d0aaad5f8444eaf8f3e058d9affeJsonld**](../Model/EcoPictureDb02d0aaad5f8444eaf8f3e058d9affeJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEcoPictureCollection**
> \Emonsite\Models\EcoPictureDb02d0aaad5f8444eaf8f3e058d9affeJsonld postEcoPictureCollection($body)

Creates a EcoPicture resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\EcoPictureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\EcoPicture79ef563d06537e846c283ccecbecc002Jsonld(); // \Emonsite\Models\EcoPicture79ef563d06537e846c283ccecbecc002Jsonld | The new EcoPicture resource

try {
    $result = $apiInstance->postEcoPictureCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoPictureApi->postEcoPictureCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\EcoPicture79ef563d06537e846c283ccecbecc002Jsonld**](../Model/EcoPicture79ef563d06537e846c283ccecbecc002Jsonld.md)| The new EcoPicture resource | [optional]

### Return type

[**\Emonsite\Models\EcoPictureDb02d0aaad5f8444eaf8f3e058d9affeJsonld**](../Model/EcoPictureDb02d0aaad5f8444eaf8f3e058d9affeJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

