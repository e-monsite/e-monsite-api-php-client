# EmonsiteApi\DirectorySiteApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDirectorySiteItem**](DirectorySiteApi.md#deletedirectorysiteitem) | **DELETE** /directory_sites/{id} | Removes the DirectorySite resource.
[**getDirectorySiteCollection**](DirectorySiteApi.md#getdirectorysitecollection) | **GET** /directory_sites | Retrieves the collection of DirectorySiteOutputDto resources.
[**getDirectorySiteItem**](DirectorySiteApi.md#getdirectorysiteitem) | **GET** /directory_sites/{id} | Retrieves a DirectorySiteOutputDto resource.
[**patchDirectorySiteItem**](DirectorySiteApi.md#patchdirectorysiteitem) | **PATCH** /directory_sites/{id} | Updates the DirectorySite resource.
[**postDirectorySiteCollection**](DirectorySiteApi.md#postdirectorysitecollection) | **POST** /directory_sites | Creates a DirectorySite resource.

# **deleteDirectorySiteItem**
> deleteDirectorySiteItem($id)

Removes the DirectorySite resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\DirectorySiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteDirectorySiteItem($id);
} catch (Exception $e) {
    echo 'Exception when calling DirectorySiteApi->deleteDirectorySiteItem: ', $e->getMessage(), PHP_EOL;
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

# **getDirectorySiteCollection**
> \EmonsiteApi\Models\InlineResponse20012 getDirectorySiteCollection($category, $category, $site, $site, $page, $items_per_page)

Retrieves the collection of DirectorySiteOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\DirectorySiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = "category_example"; // string | 
$category = array("category_example"); // string[] | 
$site = "site_example"; // string | 
$site = array("site_example"); // string[] | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getDirectorySiteCollection($category, $category, $site, $site, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorySiteApi->getDirectorySiteCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**|  | [optional]
 **category** | [**string[]**](../Model/string.md)|  | [optional]
 **site** | **string**|  | [optional]
 **site** | [**string[]**](../Model/string.md)|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDirectorySiteItem**
> \EmonsiteApi\Models\DirectorySiteC4b6d694621fb452df0348553f6c643bJsonld getDirectorySiteItem($id)

Retrieves a DirectorySiteOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\DirectorySiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getDirectorySiteItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorySiteApi->getDirectorySiteItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\DirectorySiteC4b6d694621fb452df0348553f6c643bJsonld**](../Model/DirectorySiteC4b6d694621fb452df0348553f6c643bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchDirectorySiteItem**
> \EmonsiteApi\Models\DirectorySiteC4b6d694621fb452df0348553f6c643bJsonld patchDirectorySiteItem($id, $body)

Updates the DirectorySite resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\DirectorySiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \EmonsiteApi\Models\DirectorySite966bbe081a8f082ba358af25f71a3895(); // \EmonsiteApi\Models\DirectorySite966bbe081a8f082ba358af25f71a3895 | The updated DirectorySite resource

try {
    $result = $apiInstance->patchDirectorySiteItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorySiteApi->patchDirectorySiteItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\EmonsiteApi\Models\DirectorySite966bbe081a8f082ba358af25f71a3895**](../Model/DirectorySite966bbe081a8f082ba358af25f71a3895.md)| The updated DirectorySite resource | [optional]

### Return type

[**\EmonsiteApi\Models\DirectorySiteC4b6d694621fb452df0348553f6c643bJsonld**](../Model/DirectorySiteC4b6d694621fb452df0348553f6c643bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDirectorySiteCollection**
> \EmonsiteApi\Models\DirectorySiteC4b6d694621fb452df0348553f6c643bJsonld postDirectorySiteCollection($body)

Creates a DirectorySite resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\DirectorySiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EmonsiteApi\Models\DirectorySite9cb6adf6305292849b553106f66e2a8eJsonld(); // \EmonsiteApi\Models\DirectorySite9cb6adf6305292849b553106f66e2a8eJsonld | The new DirectorySite resource

try {
    $result = $apiInstance->postDirectorySiteCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorySiteApi->postDirectorySiteCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EmonsiteApi\Models\DirectorySite9cb6adf6305292849b553106f66e2a8eJsonld**](../Model/DirectorySite9cb6adf6305292849b553106f66e2a8eJsonld.md)| The new DirectorySite resource | [optional]

### Return type

[**\EmonsiteApi\Models\DirectorySiteC4b6d694621fb452df0348553f6c643bJsonld**](../Model/DirectorySiteC4b6d694621fb452df0348553f6c643bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDirectorySiteCollection**
> \EmonsiteApi\Models\DirectorySiteC4b6d694621fb452df0348553f6c643bJsonld postDirectorySiteCollection($body)

Creates a DirectorySite resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EmonsiteApi\Api\DirectorySiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EmonsiteApi\Models\DirectorySite9cb6adf6305292849b553106f66e2a8eJsonld(); // \EmonsiteApi\Models\DirectorySite9cb6adf6305292849b553106f66e2a8eJsonld | The new DirectorySite resource

try {
    $result = $apiInstance->postDirectorySiteCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorySiteApi->postDirectorySiteCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EmonsiteApi\Models\DirectorySite9cb6adf6305292849b553106f66e2a8eJsonld**](../Model/DirectorySite9cb6adf6305292849b553106f66e2a8eJsonld.md)| The new DirectorySite resource | [optional]

### Return type

[**\EmonsiteApi\Models\DirectorySiteC4b6d694621fb452df0348553f6c643bJsonld**](../Model/DirectorySiteC4b6d694621fb452df0348553f6c643bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

