# Emonsite\DirectoryCategoryApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDirectoryCategoryItem**](DirectoryCategoryApi.md#deletedirectorycategoryitem) | **DELETE** /directory_categories/{id} | Removes the DirectoryCategory resource.
[**getDirectoryCategoryCollection**](DirectoryCategoryApi.md#getdirectorycategorycollection) | **GET** /directory_categories | Retrieves the collection of DirectoryCategoryOutputDto resources.
[**getDirectoryCategoryItem**](DirectoryCategoryApi.md#getdirectorycategoryitem) | **GET** /directory_categories/{id} | Retrieves a DirectoryCategoryOutputDto resource.
[**patchDirectoryCategoryItem**](DirectoryCategoryApi.md#patchdirectorycategoryitem) | **PATCH** /directory_categories/{id} | Updates the DirectoryCategory resource.
[**postDirectoryCategoryCollection**](DirectoryCategoryApi.md#postdirectorycategorycollection) | **POST** /directory_categories | Creates a DirectoryCategory resource.

# **deleteDirectoryCategoryItem**
> deleteDirectoryCategoryItem($id)

Removes the DirectoryCategory resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\DirectoryCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteDirectoryCategoryItem($id);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryCategoryApi->deleteDirectoryCategoryItem: ', $e->getMessage(), PHP_EOL;
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

# **getDirectoryCategoryCollection**
> \Emonsite\Models\InlineResponse20011 getDirectoryCategoryCollection($parent, $parent, $page, $items_per_page)

Retrieves the collection of DirectoryCategoryOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\DirectoryCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent = "parent_example"; // string | 
$parent = array("parent_example"); // string[] | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getDirectoryCategoryCollection($parent, $parent, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryCategoryApi->getDirectoryCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent** | **string**|  | [optional]
 **parent** | [**string[]**](../Model/string.md)|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Emonsite\Models\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDirectoryCategoryItem**
> \Emonsite\Models\DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld getDirectoryCategoryItem($id)

Retrieves a DirectoryCategoryOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\DirectoryCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getDirectoryCategoryItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryCategoryApi->getDirectoryCategoryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Emonsite\Models\DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld**](../Model/DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchDirectoryCategoryItem**
> \Emonsite\Models\DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld patchDirectoryCategoryItem($id, $body)

Updates the DirectoryCategory resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\DirectoryCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Emonsite\Models\DirectoryCategory866944aa50655fd7df7140606ff983e5(); // \Emonsite\Models\DirectoryCategory866944aa50655fd7df7140606ff983e5 | The updated DirectoryCategory resource

try {
    $result = $apiInstance->patchDirectoryCategoryItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryCategoryApi->patchDirectoryCategoryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Emonsite\Models\DirectoryCategory866944aa50655fd7df7140606ff983e5**](../Model/DirectoryCategory866944aa50655fd7df7140606ff983e5.md)| The updated DirectoryCategory resource | [optional]

### Return type

[**\Emonsite\Models\DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld**](../Model/DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDirectoryCategoryCollection**
> \Emonsite\Models\DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld postDirectoryCategoryCollection($body)

Creates a DirectoryCategory resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\DirectoryCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\DirectoryCategory88821a0000ba036256fd388bd5e0b115Jsonld(); // \Emonsite\Models\DirectoryCategory88821a0000ba036256fd388bd5e0b115Jsonld | The new DirectoryCategory resource

try {
    $result = $apiInstance->postDirectoryCategoryCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryCategoryApi->postDirectoryCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\DirectoryCategory88821a0000ba036256fd388bd5e0b115Jsonld**](../Model/DirectoryCategory88821a0000ba036256fd388bd5e0b115Jsonld.md)| The new DirectoryCategory resource | [optional]

### Return type

[**\Emonsite\Models\DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld**](../Model/DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDirectoryCategoryCollection**
> \Emonsite\Models\DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld postDirectoryCategoryCollection($body)

Creates a DirectoryCategory resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\DirectoryCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\DirectoryCategory88821a0000ba036256fd388bd5e0b115Jsonld(); // \Emonsite\Models\DirectoryCategory88821a0000ba036256fd388bd5e0b115Jsonld | The new DirectoryCategory resource

try {
    $result = $apiInstance->postDirectoryCategoryCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryCategoryApi->postDirectoryCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\DirectoryCategory88821a0000ba036256fd388bd5e0b115Jsonld**](../Model/DirectoryCategory88821a0000ba036256fd388bd5e0b115Jsonld.md)| The new DirectoryCategory resource | [optional]

### Return type

[**\Emonsite\Models\DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld**](../Model/DirectoryCategory31fbbfdd88806b77396d71a17314e994Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

