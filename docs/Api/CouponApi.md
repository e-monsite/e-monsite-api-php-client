# EmonsiteApi\CouponApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCouponItem**](CouponApi.md#deletecouponitem) | **DELETE** /coupons/{id} | Removes the Coupon resource.
[**getCouponCollection**](CouponApi.md#getcouponcollection) | **GET** /coupons | Retrieves the collection of CouponOutputDto resources.
[**getCouponItem**](CouponApi.md#getcouponitem) | **GET** /coupons/{id} | Retrieves a CouponOutputDto resource.
[**postCouponCollection**](CouponApi.md#postcouponcollection) | **POST** /coupons | Creates a Coupon resource.
[**putCouponItem**](CouponApi.md#putcouponitem) | **PUT** /coupons/{id} | Replaces the Coupon resource.

# **deleteCouponItem**
> deleteCouponItem($id)

Removes the Coupon resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteCouponItem($id);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->deleteCouponItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponCollection**
> \EmonsiteApi\Models\InlineResponse20010 getCouponCollection($code, $order_add_dt, $page, $items_per_page)

Retrieves the collection of CouponOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | 
$order_add_dt = "order_add_dt_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getCouponCollection($code, $order_add_dt, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCouponCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  | [optional]
 **order_add_dt** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponItem**
> \EmonsiteApi\Models\Coupon56c6e2889ced52899ea604222e3c8c36Jsonld getCouponItem($id)

Retrieves a CouponOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getCouponItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCouponItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\Coupon56c6e2889ced52899ea604222e3c8c36Jsonld**](../Model/Coupon56c6e2889ced52899ea604222e3c8c36Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCouponCollection**
> \EmonsiteApi\Models\Coupon56c6e2889ced52899ea604222e3c8c36Jsonld postCouponCollection($body)

Creates a Coupon resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld(); // \EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld | The new Coupon resource

try {
    $result = $apiInstance->postCouponCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->postCouponCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld**](../Model/Coupon118a7fb412c704381e027860fe8a9169Jsonld.md)| The new Coupon resource | [optional]

### Return type

[**\EmonsiteApi\Models\Coupon56c6e2889ced52899ea604222e3c8c36Jsonld**](../Model/Coupon56c6e2889ced52899ea604222e3c8c36Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCouponCollection**
> \EmonsiteApi\Models\Coupon56c6e2889ced52899ea604222e3c8c36Jsonld postCouponCollection($body)

Creates a Coupon resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld(); // \EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld | The new Coupon resource

try {
    $result = $apiInstance->postCouponCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->postCouponCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld**](../Model/Coupon118a7fb412c704381e027860fe8a9169Jsonld.md)| The new Coupon resource | [optional]

### Return type

[**\EmonsiteApi\Models\Coupon56c6e2889ced52899ea604222e3c8c36Jsonld**](../Model/Coupon56c6e2889ced52899ea604222e3c8c36Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCouponItem**
> \EmonsiteApi\Models\Coupon56c6e2889ced52899ea604222e3c8c36Jsonld putCouponItem($id, $body)

Replaces the Coupon resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld(); // \EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld | The updated Coupon resource

try {
    $result = $apiInstance->putCouponItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->putCouponItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld**](../Model/Coupon118a7fb412c704381e027860fe8a9169Jsonld.md)| The updated Coupon resource | [optional]

### Return type

[**\EmonsiteApi\Models\Coupon56c6e2889ced52899ea604222e3c8c36Jsonld**](../Model/Coupon56c6e2889ced52899ea604222e3c8c36Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCouponItem**
> \EmonsiteApi\Models\Coupon56c6e2889ced52899ea604222e3c8c36Jsonld putCouponItem($id, $body)

Replaces the Coupon resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld(); // \EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld | The updated Coupon resource

try {
    $result = $apiInstance->putCouponItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->putCouponItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld**](../Model/Coupon118a7fb412c704381e027860fe8a9169Jsonld.md)| The updated Coupon resource | [optional]

### Return type

[**\EmonsiteApi\Models\Coupon56c6e2889ced52899ea604222e3c8c36Jsonld**](../Model/Coupon56c6e2889ced52899ea604222e3c8c36Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

