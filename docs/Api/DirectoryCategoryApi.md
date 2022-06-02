# EmonsiteApi\DirectoryCategoryApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDirectoryCategoryItem()**](DirectoryCategoryApi.md#deleteDirectoryCategoryItem) | **DELETE** /directory_categories/{id} | Removes the DirectoryCategory resource.
[**getDirectoryCategoryCollection()**](DirectoryCategoryApi.md#getDirectoryCategoryCollection) | **GET** /directory_categories | Retrieves the collection of DirectoryCategoryOutputDto resources.
[**getDirectoryCategoryItem()**](DirectoryCategoryApi.md#getDirectoryCategoryItem) | **GET** /directory_categories/{id} | Retrieves a DirectoryCategoryOutputDto resource.
[**patchDirectoryCategoryItem()**](DirectoryCategoryApi.md#patchDirectoryCategoryItem) | **PATCH** /directory_categories/{id} | Updates the DirectoryCategory resource.
[**postDirectoryCategoryCollection()**](DirectoryCategoryApi.md#postDirectoryCategoryCollection) | **POST** /directory_categories | Creates a DirectoryCategory resource.


## `deleteDirectoryCategoryItem()`

```php
deleteDirectoryCategoryItem($id)
```

Removes the DirectoryCategory resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\DirectoryCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteDirectoryCategoryItem($id);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryCategoryApi->deleteDirectoryCategoryItem: ', $e->getMessage(), PHP_EOL;
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

## `getDirectoryCategoryCollection()`

```php
getDirectoryCategoryCollection($parent, $parent2, $page, $itemsPerPage): \EmonsiteApi\Models\GetDirectoryCategoryCollection200Response
```

Retrieves the collection of DirectoryCategoryOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\DirectoryCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent = 'parent_example'; // string
$parent2 = array('parent_example'); // string[]
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getDirectoryCategoryCollection($parent, $parent2, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryCategoryApi->getDirectoryCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent** | **string**|  | [optional]
 **parent2** | [**string[]**](../Model/string.md)|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetDirectoryCategoryCollection200Response**](../Model/GetDirectoryCategoryCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDirectoryCategoryItem()`

```php
getDirectoryCategoryItem($id): \EmonsiteApi\Models\DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld
```

Retrieves a DirectoryCategoryOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\DirectoryCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getDirectoryCategoryItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryCategoryApi->getDirectoryCategoryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld**](../Model/DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchDirectoryCategoryItem()`

```php
patchDirectoryCategoryItem($id, $directoryCategory866944aa50655fd7df7140606ff983e5): \EmonsiteApi\Models\DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld
```

Updates the DirectoryCategory resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\DirectoryCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$directoryCategory866944aa50655fd7df7140606ff983e5 = new \EmonsiteApi\Models\DirectoryCategory866944aa50655fd7df7140606ff983e5(); // \EmonsiteApi\Models\DirectoryCategory866944aa50655fd7df7140606ff983e5 | The updated DirectoryCategory resource

try {
    $result = $apiInstance->patchDirectoryCategoryItem($id, $directoryCategory866944aa50655fd7df7140606ff983e5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryCategoryApi->patchDirectoryCategoryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **directoryCategory866944aa50655fd7df7140606ff983e5** | [**\EmonsiteApi\Models\DirectoryCategory866944aa50655fd7df7140606ff983e5**](../Model/DirectoryCategory866944aa50655fd7df7140606ff983e5.md)| The updated DirectoryCategory resource | [optional]

### Return type

[**\EmonsiteApi\Models\DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld**](../Model/DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDirectoryCategoryCollection()`

```php
postDirectoryCategoryCollection($directoryCategory88821a0000ba036256fd388bd5e0b115Jsonld): \EmonsiteApi\Models\DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld
```

Creates a DirectoryCategory resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\DirectoryCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$directoryCategory88821a0000ba036256fd388bd5e0b115Jsonld = new \EmonsiteApi\Models\DirectoryCategory88821a0000ba036256fd388bd5e0b115Jsonld(); // \EmonsiteApi\Models\DirectoryCategory88821a0000ba036256fd388bd5e0b115Jsonld | The new DirectoryCategory resource

try {
    $result = $apiInstance->postDirectoryCategoryCollection($directoryCategory88821a0000ba036256fd388bd5e0b115Jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryCategoryApi->postDirectoryCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **directoryCategory88821a0000ba036256fd388bd5e0b115Jsonld** | [**\EmonsiteApi\Models\DirectoryCategory88821a0000ba036256fd388bd5e0b115Jsonld**](../Model/DirectoryCategory88821a0000ba036256fd388bd5e0b115Jsonld.md)| The new DirectoryCategory resource | [optional]

### Return type

[**\EmonsiteApi\Models\DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld**](../Model/DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
