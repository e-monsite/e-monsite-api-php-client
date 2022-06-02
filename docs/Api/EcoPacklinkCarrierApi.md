# EmonsiteApi\EcoPacklinkCarrierApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEcoPacklinkCarrierItem()**](EcoPacklinkCarrierApi.md#getEcoPacklinkCarrierItem) | **GET** /eco_packlink_carriers/{id} | Retrieves a EcoPacklinkOutputDto resource.


## `getEcoPacklinkCarrierItem()`

```php
getEcoPacklinkCarrierItem($id): \EmonsiteApi\Models\EcoPacklinkCarrier36308a1b3d24cc804f1a513e820d895bJsonld
```

Retrieves a EcoPacklinkOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoPacklinkCarrierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getEcoPacklinkCarrierItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoPacklinkCarrierApi->getEcoPacklinkCarrierItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\EcoPacklinkCarrier36308a1b3d24cc804f1a513e820d895bJsonld**](../Model/EcoPacklinkCarrier36308a1b3d24cc804f1a513e820d895bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
