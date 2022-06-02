# EmonsiteApi\CouponApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCouponItem()**](CouponApi.md#deleteCouponItem) | **DELETE** /coupons/{id} | Removes the Coupon resource.
[**getCouponCollection()**](CouponApi.md#getCouponCollection) | **GET** /coupons | Retrieves the collection of CouponOutputDto resources.
[**getCouponItem()**](CouponApi.md#getCouponItem) | **GET** /coupons/{id} | Retrieves a CouponOutputDto resource.
[**postCouponCollection()**](CouponApi.md#postCouponCollection) | **POST** /coupons | Creates a Coupon resource.
[**putCouponItem()**](CouponApi.md#putCouponItem) | **PUT** /coupons/{id} | Replaces the Coupon resource.


## `deleteCouponItem()`

```php
deleteCouponItem($id)
```

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
$id = 'id_example'; // string

try {
    $apiInstance->deleteCouponItem($id);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->deleteCouponItem: ', $e->getMessage(), PHP_EOL;
}
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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCouponCollection()`

```php
getCouponCollection($code, $orderAddDt, $page, $itemsPerPage): \EmonsiteApi\Models\GetCouponCollection200Response
```

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
$code = 'code_example'; // string
$orderAddDt = 'orderAddDt_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getCouponCollection($code, $orderAddDt, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCouponCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  | [optional]
 **orderAddDt** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetCouponCollection200Response**](../Model/GetCouponCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCouponItem()`

```php
getCouponItem($id): \EmonsiteApi\Models\Coupon56c6e2889ced52899ea604222e3c8c36Jsonld
```

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->getCouponItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCouponItem: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCouponCollection()`

```php
postCouponCollection($coupon118a7fb412c704381e027860fe8a9169Jsonld): \EmonsiteApi\Models\Coupon56c6e2889ced52899ea604222e3c8c36Jsonld
```

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
$coupon118a7fb412c704381e027860fe8a9169Jsonld = new \EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld(); // \EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld | The new Coupon resource

try {
    $result = $apiInstance->postCouponCollection($coupon118a7fb412c704381e027860fe8a9169Jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->postCouponCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon118a7fb412c704381e027860fe8a9169Jsonld** | [**\EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld**](../Model/Coupon118a7fb412c704381e027860fe8a9169Jsonld.md)| The new Coupon resource | [optional]

### Return type

[**\EmonsiteApi\Models\Coupon56c6e2889ced52899ea604222e3c8c36Jsonld**](../Model/Coupon56c6e2889ced52899ea604222e3c8c36Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCouponItem()`

```php
putCouponItem($id, $coupon118a7fb412c704381e027860fe8a9169Jsonld): \EmonsiteApi\Models\Coupon56c6e2889ced52899ea604222e3c8c36Jsonld
```

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
$id = 'id_example'; // string
$coupon118a7fb412c704381e027860fe8a9169Jsonld = new \EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld(); // \EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld | The updated Coupon resource

try {
    $result = $apiInstance->putCouponItem($id, $coupon118a7fb412c704381e027860fe8a9169Jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->putCouponItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **coupon118a7fb412c704381e027860fe8a9169Jsonld** | [**\EmonsiteApi\Models\Coupon118a7fb412c704381e027860fe8a9169Jsonld**](../Model/Coupon118a7fb412c704381e027860fe8a9169Jsonld.md)| The updated Coupon resource | [optional]

### Return type

[**\EmonsiteApi\Models\Coupon56c6e2889ced52899ea604222e3c8c36Jsonld**](../Model/Coupon56c6e2889ced52899ea604222e3c8c36Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
