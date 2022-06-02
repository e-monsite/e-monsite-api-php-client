# Emonsite\SslLeApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSslleValidationSslLeItem**](SslLeApi.md#getssllevalidationsslleitem) | **GET** /.well-known/acme-challenge/{certbotToken} | Retrieve certbot validation challenge matching token

# **getSslleValidationSslLeItem**
> getSslleValidationSslLeItem($)

Retrieve certbot validation challenge matching token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\SslLeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ = new \Emonsite\Models\null(); //  | 

try {
    $apiInstance->getSslleValidationSslLeItem($);
} catch (Exception $e) {
    echo 'Exception when calling SslLeApi->getSslleValidationSslLeItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **** | [****](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

