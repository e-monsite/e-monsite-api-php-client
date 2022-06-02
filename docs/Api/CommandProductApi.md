# EmonsiteApi\CommandProductApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCommandProductCollection()**](CommandProductApi.md#getCommandProductCollection) | **GET** /command_products | Retrieves the collection of CommandProductOutputDto resources.
[**getCommandProductItem()**](CommandProductApi.md#getCommandProductItem) | **GET** /command_products/{id} | Retrieves a CommandProductOutputDto resource.
[**postCommandProductCollection()**](CommandProductApi.md#postCommandProductCollection) | **POST** /command_products | Creates a CommandProduct resource.


## `getCommandProductCollection()`

```php
getCommandProductCollection($commandId, $page, $itemsPerPage): \EmonsiteApi\Models\GetCommandProductCollection200Response
```

Retrieves the collection of CommandProductOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\CommandProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commandId = 'commandId_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getCommandProductCollection($commandId, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandProductApi->getCommandProductCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **commandId** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetCommandProductCollection200Response**](../Model/GetCommandProductCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommandProductItem()`

```php
getCommandProductItem($id): \EmonsiteApi\Models\CommandProductE9771de728231a75b73008fe2e6c0e5fJsonld
```

Retrieves a CommandProductOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\CommandProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getCommandProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandProductApi->getCommandProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\CommandProductE9771de728231a75b73008fe2e6c0e5fJsonld**](../Model/CommandProductE9771de728231a75b73008fe2e6c0e5fJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCommandProductCollection()`

```php
postCommandProductCollection($commandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld): \EmonsiteApi\Models\CommandProductE9771de728231a75b73008fe2e6c0e5fJsonld
```

Creates a CommandProduct resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\CommandProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld = new \EmonsiteApi\Models\CommandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld(); // \EmonsiteApi\Models\CommandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld | The new CommandProduct resource

try {
    $result = $apiInstance->postCommandProductCollection($commandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandProductApi->postCommandProductCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **commandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld** | [**\EmonsiteApi\Models\CommandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld**](../Model/CommandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld.md)| The new CommandProduct resource | [optional]

### Return type

[**\EmonsiteApi\Models\CommandProductE9771de728231a75b73008fe2e6c0e5fJsonld**](../Model/CommandProductE9771de728231a75b73008fe2e6c0e5fJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
