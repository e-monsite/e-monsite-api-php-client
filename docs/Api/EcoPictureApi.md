# EmonsiteApi\EcoPictureApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEcoPictureItem()**](EcoPictureApi.md#getEcoPictureItem) | **GET** /eco_pictures/{id} | Retrieves a EcoPictureOutputDto resource.
[**postEcoPictureCollection()**](EcoPictureApi.md#postEcoPictureCollection) | **POST** /eco_pictures | Creates a EcoPicture resource.


## `getEcoPictureItem()`

```php
getEcoPictureItem($id): \EmonsiteApi\Models\EcoPictureDb02d0aaad5f8444eaf8f3e058d9affeJsonld
```

Retrieves a EcoPictureOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoPictureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getEcoPictureItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoPictureApi->getEcoPictureItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\EcoPictureDb02d0aaad5f8444eaf8f3e058d9affeJsonld**](../Model/EcoPictureDb02d0aaad5f8444eaf8f3e058d9affeJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEcoPictureCollection()`

```php
postEcoPictureCollection($ecoPicture79ef563d06537e846c283ccecbecc002Jsonld): \EmonsiteApi\Models\EcoPictureDb02d0aaad5f8444eaf8f3e058d9affeJsonld
```

Creates a EcoPicture resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoPictureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ecoPicture79ef563d06537e846c283ccecbecc002Jsonld = new \EmonsiteApi\Models\EcoPicture79ef563d06537e846c283ccecbecc002Jsonld(); // \EmonsiteApi\Models\EcoPicture79ef563d06537e846c283ccecbecc002Jsonld | The new EcoPicture resource

try {
    $result = $apiInstance->postEcoPictureCollection($ecoPicture79ef563d06537e846c283ccecbecc002Jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoPictureApi->postEcoPictureCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ecoPicture79ef563d06537e846c283ccecbecc002Jsonld** | [**\EmonsiteApi\Models\EcoPicture79ef563d06537e846c283ccecbecc002Jsonld**](../Model/EcoPicture79ef563d06537e846c283ccecbecc002Jsonld.md)| The new EcoPicture resource | [optional]

### Return type

[**\EmonsiteApi\Models\EcoPictureDb02d0aaad5f8444eaf8f3e058d9affeJsonld**](../Model/EcoPictureDb02d0aaad5f8444eaf8f3e058d9affeJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
