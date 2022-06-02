# EmonsiteApi\EcoOrderDetailUploadApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadEcoOrderDetailUploadItem**](EcoOrderDetailUploadApi.md#downloadecoorderdetailuploaditem) | **GET** /eco_order_detail_uploads/{id}/download | download the file

# **downloadEcoOrderDetailUploadItem**
> \EmonsiteApi\Models\EcoOrderDetailUploadJsonld downloadEcoOrderDetailUploadItem($, $)

download the file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\EcoOrderDetailUploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ = new \EmonsiteApi\Models\null(); //  | 
$ = new \EmonsiteApi\Models\null(); //  | 

try {
    $result = $apiInstance->downloadEcoOrderDetailUploadItem($, $);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoOrderDetailUploadApi->downloadEcoOrderDetailUploadItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **** | [****](../Model/.md)|  |
 **** | [****](../Model/.md)|  |

### Return type

[**\EmonsiteApi\Models\EcoOrderDetailUploadJsonld**](../Model/EcoOrderDetailUploadJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

