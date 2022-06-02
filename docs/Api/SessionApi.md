# EmonsiteApi\SessionApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSessionCollection()**](SessionApi.md#getSessionCollection) | **GET** /sessions | Retrieves the collection of SessionOutputDto resources.
[**getSessionItem()**](SessionApi.md#getSessionItem) | **GET** /sessions/{id} | Retrieves a SessionOutputDto resource.


## `getSessionCollection()`

```php
getSessionCollection($userIp, $user, $user2, $hitBefore, $hitStrictlyBefore, $hitAfter, $hitStrictlyAfter, $page, $itemsPerPage): \EmonsiteApi\Models\GetSessionCollection200Response
```

Retrieves the collection of SessionOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userIp = 'userIp_example'; // string
$user = 'user_example'; // string
$user2 = array('user_example'); // string[]
$hitBefore = 'hitBefore_example'; // string
$hitStrictlyBefore = 'hitStrictlyBefore_example'; // string
$hitAfter = 'hitAfter_example'; // string
$hitStrictlyAfter = 'hitStrictlyAfter_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getSessionCollection($userIp, $user, $user2, $hitBefore, $hitStrictlyBefore, $hitAfter, $hitStrictlyAfter, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->getSessionCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userIp** | **string**|  | [optional]
 **user** | **string**|  | [optional]
 **user2** | [**string[]**](../Model/string.md)|  | [optional]
 **hitBefore** | **string**|  | [optional]
 **hitStrictlyBefore** | **string**|  | [optional]
 **hitAfter** | **string**|  | [optional]
 **hitStrictlyAfter** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetSessionCollection200Response**](../Model/GetSessionCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSessionItem()`

```php
getSessionItem($id): \EmonsiteApi\Models\Session1bc7a372e0caf630efd366b7299c4bd2Jsonld
```

Retrieves a SessionOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getSessionItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->getSessionItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\Session1bc7a372e0caf630efd366b7299c4bd2Jsonld**](../Model/Session1bc7a372e0caf630efd366b7299c4bd2Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
