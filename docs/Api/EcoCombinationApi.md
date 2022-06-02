# EmonsiteApi\EcoCombinationApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEcoCombinationItem()**](EcoCombinationApi.md#deleteEcoCombinationItem) | **DELETE** /eco_combinations/{id} | Removes the EcoCombination resource.
[**getEcoCombinationCollection()**](EcoCombinationApi.md#getEcoCombinationCollection) | **GET** /eco_combinations | Retrieves the collection of EcoCombinationOutputDto resources.
[**getEcoCombinationItem()**](EcoCombinationApi.md#getEcoCombinationItem) | **GET** /eco_combinations/{id} | Retrieves a EcoCombinationOutputDto resource.
[**postEcoCombinationCollection()**](EcoCombinationApi.md#postEcoCombinationCollection) | **POST** /eco_combinations | Creates a EcoCombination resource.


## `deleteEcoCombinationItem()`

```php
deleteEcoCombinationItem($id, $siteId)
```

Removes the EcoCombination resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoCombinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$siteId = 'siteId_example'; // string

try {
    $apiInstance->deleteEcoCombinationItem($id, $siteId);
} catch (Exception $e) {
    echo 'Exception when calling EcoCombinationApi->deleteEcoCombinationItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **siteId** | **string**|  |

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

## `getEcoCombinationCollection()`

```php
getEcoCombinationCollection($siteId, $page, $itemsPerPage): \EmonsiteApi\Models\GetEcoCombinationCollection200Response
```

Retrieves the collection of EcoCombinationOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoCombinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = 'siteId_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getEcoCombinationCollection($siteId, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoCombinationApi->getEcoCombinationCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**|  |
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetEcoCombinationCollection200Response**](../Model/GetEcoCombinationCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEcoCombinationItem()`

```php
getEcoCombinationItem($id, $siteId): \EmonsiteApi\Models\EcoCombination3bb0d34c5ea0c72f2026a57c27faba00Jsonld
```

Retrieves a EcoCombinationOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoCombinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$siteId = 'siteId_example'; // string

try {
    $result = $apiInstance->getEcoCombinationItem($id, $siteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoCombinationApi->getEcoCombinationItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **siteId** | **string**|  |

### Return type

[**\EmonsiteApi\Models\EcoCombination3bb0d34c5ea0c72f2026a57c27faba00Jsonld**](../Model/EcoCombination3bb0d34c5ea0c72f2026a57c27faba00Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEcoCombinationCollection()`

```php
postEcoCombinationCollection($ecoCombinationA3c1a277fc6663e5ff2c6f85617980feJsonld): \EmonsiteApi\Models\EcoCombination3bb0d34c5ea0c72f2026a57c27faba00Jsonld
```

Creates a EcoCombination resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\EcoCombinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ecoCombinationA3c1a277fc6663e5ff2c6f85617980feJsonld = new \EmonsiteApi\Models\EcoCombinationA3c1a277fc6663e5ff2c6f85617980feJsonld(); // \EmonsiteApi\Models\EcoCombinationA3c1a277fc6663e5ff2c6f85617980feJsonld | The new EcoCombination resource

try {
    $result = $apiInstance->postEcoCombinationCollection($ecoCombinationA3c1a277fc6663e5ff2c6f85617980feJsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoCombinationApi->postEcoCombinationCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ecoCombinationA3c1a277fc6663e5ff2c6f85617980feJsonld** | [**\EmonsiteApi\Models\EcoCombinationA3c1a277fc6663e5ff2c6f85617980feJsonld**](../Model/EcoCombinationA3c1a277fc6663e5ff2c6f85617980feJsonld.md)| The new EcoCombination resource | [optional]

### Return type

[**\EmonsiteApi\Models\EcoCombination3bb0d34c5ea0c72f2026a57c27faba00Jsonld**](../Model/EcoCombination3bb0d34c5ea0c72f2026a57c27faba00Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
