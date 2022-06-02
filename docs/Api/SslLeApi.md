# EmonsiteApi\SslLeApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSslleValidationSslLeItem()**](SslLeApi.md#getSslleValidationSslLeItem) | **GET** /.well-known/acme-challenge/{certbotToken} | Retrieve certbot validation challenge matching token


## `getSslleValidationSslLeItem()`

```php
getSslleValidationSslLeItem($UNKNOWN_PARAMETER_NAME)
```

Retrieve certbot validation challenge matching token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\SslLeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$UNKNOWN_PARAMETER_NAME = new \EmonsiteApi\Models\null(); // 

try {
    $apiInstance->getSslleValidationSslLeItem($UNKNOWN_PARAMETER_NAME);
} catch (Exception $e) {
    echo 'Exception when calling SslLeApi->getSslleValidationSslLeItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **UNKNOWN_PARAMETER_NAME** | [****](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
