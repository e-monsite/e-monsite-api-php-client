# Emonsite\SiteApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiSitesSiteUsersGetSubresource**](SiteApi.md#apisitessiteusersgetsubresource) | **GET** /sites/{id}/site_users | Retrieves the collection of Siteuser resources.
[**getSiteCollection**](SiteApi.md#getsitecollection) | **GET** /sites | Retrieves the collection of SiteOutputDto resources.
[**getSiteItem**](SiteApi.md#getsiteitem) | **GET** /sites/{id} | Retrieves a SiteOutputDto resource.
[**patchSiteItem**](SiteApi.md#patchsiteitem) | **PATCH** /sites/{id} | Updates the Site resource.
[**postSiteCollection**](SiteApi.md#postsitecollection) | **POST** /sites | Creates a Site resource.

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

$apiInstance = new Emonsite\Api\SiteApi(
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
    echo 'Exception when calling SiteApi->apiSitesSiteUsersGetSubresource: ', $e->getMessage(), PHP_EOL;
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

# **getSiteCollection**
> \Emonsite\Models\InlineResponse20024 getSiteCollection($sitename, $id, $id, $host, $brand, $brand, $add_user_ip, $add_user_ip, $site_deleted, $order_add_dt, $page, $items_per_page)

Retrieves the collection of SiteOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sitename = "sitename_example"; // string | 
$id = "id_example"; // string | 
$id = array("id_example"); // string[] | 
$host = "host_example"; // string | 
$brand = "brand_example"; // string | 
$brand = array("brand_example"); // string[] | 
$add_user_ip = "add_user_ip_example"; // string | 
$add_user_ip = array("add_user_ip_example"); // string[] | 
$site_deleted = true; // bool | 
$order_add_dt = "order_add_dt_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getSiteCollection($sitename, $id, $id, $host, $brand, $brand, $add_user_ip, $add_user_ip, $site_deleted, $order_add_dt, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->getSiteCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sitename** | **string**|  | [optional]
 **id** | **string**|  | [optional]
 **id** | [**string[]**](../Model/string.md)|  | [optional]
 **host** | **string**|  | [optional]
 **brand** | **string**|  | [optional]
 **brand** | [**string[]**](../Model/string.md)|  | [optional]
 **add_user_ip** | **string**|  | [optional]
 **add_user_ip** | [**string[]**](../Model/string.md)|  | [optional]
 **site_deleted** | **bool**|  | [optional]
 **order_add_dt** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Emonsite\Models\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSiteItem**
> \Emonsite\Models\Site0097c999ec7d3611ad5fec647120ea72Jsonld getSiteItem($id)

Retrieves a SiteOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getSiteItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->getSiteItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Emonsite\Models\Site0097c999ec7d3611ad5fec647120ea72Jsonld**](../Model/Site0097c999ec7d3611ad5fec647120ea72Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchSiteItem**
> \Emonsite\Models\Site0097c999ec7d3611ad5fec647120ea72Jsonld patchSiteItem($id, $body)

Updates the Site resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Emonsite\Models\Site7e8883c9b486869412701afd330abd48(); // \Emonsite\Models\Site7e8883c9b486869412701afd330abd48 | The updated Site resource

try {
    $result = $apiInstance->patchSiteItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->patchSiteItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Emonsite\Models\Site7e8883c9b486869412701afd330abd48**](../Model/Site7e8883c9b486869412701afd330abd48.md)| The updated Site resource | [optional]

### Return type

[**\Emonsite\Models\Site0097c999ec7d3611ad5fec647120ea72Jsonld**](../Model/Site0097c999ec7d3611ad5fec647120ea72Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSiteCollection**
> \Emonsite\Models\Site0097c999ec7d3611ad5fec647120ea72Jsonld postSiteCollection($body)

Creates a Site resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\SiteF8f2933682cb2687a860a3e01f671ed0Jsonld(); // \Emonsite\Models\SiteF8f2933682cb2687a860a3e01f671ed0Jsonld | The new Site resource

try {
    $result = $apiInstance->postSiteCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->postSiteCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\SiteF8f2933682cb2687a860a3e01f671ed0Jsonld**](../Model/SiteF8f2933682cb2687a860a3e01f671ed0Jsonld.md)| The new Site resource | [optional]

### Return type

[**\Emonsite\Models\Site0097c999ec7d3611ad5fec647120ea72Jsonld**](../Model/Site0097c999ec7d3611ad5fec647120ea72Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSiteCollection**
> \Emonsite\Models\Site0097c999ec7d3611ad5fec647120ea72Jsonld postSiteCollection($body)

Creates a Site resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\SiteF8f2933682cb2687a860a3e01f671ed0Jsonld(); // \Emonsite\Models\SiteF8f2933682cb2687a860a3e01f671ed0Jsonld | The new Site resource

try {
    $result = $apiInstance->postSiteCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->postSiteCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\SiteF8f2933682cb2687a860a3e01f671ed0Jsonld**](../Model/SiteF8f2933682cb2687a860a3e01f671ed0Jsonld.md)| The new Site resource | [optional]

### Return type

[**\Emonsite\Models\Site0097c999ec7d3611ad5fec647120ea72Jsonld**](../Model/Site0097c999ec7d3611ad5fec647120ea72Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

