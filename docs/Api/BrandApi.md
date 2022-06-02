# EmonsiteApi\BrandApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiBrandsBrandDomainsGetSubresource()**](BrandApi.md#apiBrandsBrandDomainsGetSubresource) | **GET** /brands/{id}/brand_domains | Retrieves the collection of Branddomain resources.
[**getBrandCollection()**](BrandApi.md#getBrandCollection) | **GET** /brands | Retrieves the collection of BrandOutputDto resources.
[**getBrandItem()**](BrandApi.md#getBrandItem) | **GET** /brands/{id} | Retrieves a BrandOutputDto resource.
[**patchBrandItem()**](BrandApi.md#patchBrandItem) | **PATCH** /brands/{id} | Updates the Brand resource.


## `apiBrandsBrandDomainsGetSubresource()`

```php
apiBrandsBrandDomainsGetSubresource($id, $page, $itemsPerPage): \EmonsiteApi\Models\GetBranddomainCollection200Response
```

Retrieves the collection of Branddomain resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\BrandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->apiBrandsBrandDomainsGetSubresource($id, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->apiBrandsBrandDomainsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetBranddomainCollection200Response**](../Model/GetBranddomainCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBrandCollection()`

```php
getBrandCollection($orderAddDt, $page, $itemsPerPage): \EmonsiteApi\Models\GetBrandCollection200Response
```

Retrieves the collection of BrandOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\BrandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderAddDt = 'orderAddDt_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getBrandCollection($orderAddDt, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->getBrandCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderAddDt** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetBrandCollection200Response**](../Model/GetBrandCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBrandItem()`

```php
getBrandItem($id): \EmonsiteApi\Models\Brand2fb1a13c6cb9d850d673a6831c427f00Jsonld
```

Retrieves a BrandOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\BrandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBrandItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->getBrandItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\Brand2fb1a13c6cb9d850d673a6831c427f00Jsonld**](../Model/Brand2fb1a13c6cb9d850d673a6831c427f00Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchBrandItem()`

```php
patchBrandItem($id, $brand962c5489a05f3ff6192cd4c630d8abd7): \EmonsiteApi\Models\Brand2fb1a13c6cb9d850d673a6831c427f00Jsonld
```

Updates the Brand resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\BrandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$brand962c5489a05f3ff6192cd4c630d8abd7 = new \EmonsiteApi\Models\Brand962c5489a05f3ff6192cd4c630d8abd7(); // \EmonsiteApi\Models\Brand962c5489a05f3ff6192cd4c630d8abd7 | The updated Brand resource

try {
    $result = $apiInstance->patchBrandItem($id, $brand962c5489a05f3ff6192cd4c630d8abd7);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->patchBrandItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **brand962c5489a05f3ff6192cd4c630d8abd7** | [**\EmonsiteApi\Models\Brand962c5489a05f3ff6192cd4c630d8abd7**](../Model/Brand962c5489a05f3ff6192cd4c630d8abd7.md)| The updated Brand resource | [optional]

### Return type

[**\EmonsiteApi\Models\Brand2fb1a13c6cb9d850d673a6831c427f00Jsonld**](../Model/Brand2fb1a13c6cb9d850d673a6831c427f00Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
