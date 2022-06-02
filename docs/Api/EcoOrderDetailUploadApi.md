# EmonsiteApi\EcoOrderDetailUploadApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadEcoOrderDetailUploadItem()**](EcoOrderDetailUploadApi.md#downloadEcoOrderDetailUploadItem) | **GET** /eco_order_detail_uploads/{id}/download | download the file


## `downloadEcoOrderDetailUploadItem()`

```php
downloadEcoOrderDetailUploadItem($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2): \EmonsiteApi\Models\EcoOrderDetailUploadJsonld
```

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
$UNKNOWN_PARAMETER_NAME = new \EmonsiteApi\Models\null(); // 
$UNKNOWN_PARAMETER_NAME2 = new \EmonsiteApi\Models\null(); // 

try {
    $result = $apiInstance->downloadEcoOrderDetailUploadItem($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoOrderDetailUploadApi->downloadEcoOrderDetailUploadItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **UNKNOWN_PARAMETER_NAME** | [****](../Model/.md)|  |
 **UNKNOWN_PARAMETER_NAME2** | [****](../Model/.md)|  |

### Return type

[**\EmonsiteApi\Models\EcoOrderDetailUploadJsonld**](../Model/EcoOrderDetailUploadJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
