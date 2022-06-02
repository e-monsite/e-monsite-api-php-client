# Emonsite\SiteuserApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiSitesSiteUsersGetSubresource**](SiteuserApi.md#apisitessiteusersgetsubresource) | **GET** /sites/{id}/site_users | Retrieves the collection of Siteuser resources.
[**apiUsersSiteUsersGetSubresource**](SiteuserApi.md#apiuserssiteusersgetsubresource) | **GET** /users/{id}/site_users | Retrieves the collection of Siteuser resources.
[**deleteSiteuserItem**](SiteuserApi.md#deletesiteuseritem) | **DELETE** /siteusers/{id} | Removes the Siteuser resource.
[**postSiteuserCollection**](SiteuserApi.md#postsiteusercollection) | **POST** /siteusers | Creates a Siteuser resource.

# **apiSitesSiteUsersGetSubresource**
> \Emonsite\Models\InlineResponse20025 apiSitesSiteUsersGetSubresource($id, $page, $items_per_page)

Retrieves the collection of Siteuser resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\SiteuserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->apiSitesSiteUsersGetSubresource($id, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteuserApi->apiSitesSiteUsersGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Emonsite\Models\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiUsersSiteUsersGetSubresource**
> \Emonsite\Models\InlineResponse20025 apiUsersSiteUsersGetSubresource($id, $page, $items_per_page)

Retrieves the collection of Siteuser resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\SiteuserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->apiUsersSiteUsersGetSubresource($id, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteuserApi->apiUsersSiteUsersGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Emonsite\Models\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSiteuserItem**
> deleteSiteuserItem($id)

Removes the Siteuser resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\SiteuserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteSiteuserItem($id);
} catch (Exception $e) {
    echo 'Exception when calling SiteuserApi->deleteSiteuserItem: ', $e->getMessage(), PHP_EOL;
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

# **postSiteuserCollection**
> \Emonsite\Models\Siteuser7fc182df899df5888744e3f43c9c8f05Jsonld postSiteuserCollection($body)

Creates a Siteuser resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\SiteuserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\Siteuser57c801516c2b5b79ccf4541b195da432Jsonld(); // \Emonsite\Models\Siteuser57c801516c2b5b79ccf4541b195da432Jsonld | The new Siteuser resource

try {
    $result = $apiInstance->postSiteuserCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteuserApi->postSiteuserCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\Siteuser57c801516c2b5b79ccf4541b195da432Jsonld**](../Model/Siteuser57c801516c2b5b79ccf4541b195da432Jsonld.md)| The new Siteuser resource | [optional]

### Return type

[**\Emonsite\Models\Siteuser7fc182df899df5888744e3f43c9c8f05Jsonld**](../Model/Siteuser7fc182df899df5888744e3f43c9c8f05Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSiteuserCollection**
> \Emonsite\Models\Siteuser7fc182df899df5888744e3f43c9c8f05Jsonld postSiteuserCollection($body)

Creates a Siteuser resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\SiteuserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\Siteuser57c801516c2b5b79ccf4541b195da432Jsonld(); // \Emonsite\Models\Siteuser57c801516c2b5b79ccf4541b195da432Jsonld | The new Siteuser resource

try {
    $result = $apiInstance->postSiteuserCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteuserApi->postSiteuserCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\Siteuser57c801516c2b5b79ccf4541b195da432Jsonld**](../Model/Siteuser57c801516c2b5b79ccf4541b195da432Jsonld.md)| The new Siteuser resource | [optional]

### Return type

[**\Emonsite\Models\Siteuser7fc182df899df5888744e3f43c9c8f05Jsonld**](../Model/Siteuser7fc182df899df5888744e3f43c9c8f05Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

