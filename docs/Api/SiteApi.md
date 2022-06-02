# EmonsiteApi\SiteApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiSitesSiteUsersGetSubresource()**](SiteApi.md#apiSitesSiteUsersGetSubresource) | **GET** /sites/{id}/site_users | Retrieves the collection of Siteuser resources.
[**getSiteCollection()**](SiteApi.md#getSiteCollection) | **GET** /sites | Retrieves the collection of SiteOutputDto resources.
[**getSiteItem()**](SiteApi.md#getSiteItem) | **GET** /sites/{id} | Retrieves a SiteOutputDto resource.
[**patchSiteItem()**](SiteApi.md#patchSiteItem) | **PATCH** /sites/{id} | Updates the Site resource.
[**postSiteCollection()**](SiteApi.md#postSiteCollection) | **POST** /sites | Creates a Site resource.


## `apiSitesSiteUsersGetSubresource()`

```php
apiSitesSiteUsersGetSubresource($id, $page, $itemsPerPage): \EmonsiteApi\Models\ApiSitesSiteUsersGetSubresource200Response
```

Retrieves the collection of Siteuser resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->apiSitesSiteUsersGetSubresource($id, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->apiSitesSiteUsersGetSubresource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\ApiSitesSiteUsersGetSubresource200Response**](../Model/ApiSitesSiteUsersGetSubresource200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSiteCollection()`

```php
getSiteCollection($sitename, $id, $id2, $host, $brand, $brand2, $addUserIp, $addUserIp2, $siteDeleted, $orderAddDt, $page, $itemsPerPage): \EmonsiteApi\Models\GetSiteCollection200Response
```

Retrieves the collection of SiteOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sitename = 'sitename_example'; // string
$id = 'id_example'; // string
$id2 = array('id_example'); // string[]
$host = 'host_example'; // string
$brand = 'brand_example'; // string
$brand2 = array('brand_example'); // string[]
$addUserIp = 'addUserIp_example'; // string
$addUserIp2 = array('addUserIp_example'); // string[]
$siteDeleted = True; // bool
$orderAddDt = 'orderAddDt_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getSiteCollection($sitename, $id, $id2, $host, $brand, $brand2, $addUserIp, $addUserIp2, $siteDeleted, $orderAddDt, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->getSiteCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sitename** | **string**|  | [optional]
 **id** | **string**|  | [optional]
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **host** | **string**|  | [optional]
 **brand** | **string**|  | [optional]
 **brand2** | [**string[]**](../Model/string.md)|  | [optional]
 **addUserIp** | **string**|  | [optional]
 **addUserIp2** | [**string[]**](../Model/string.md)|  | [optional]
 **siteDeleted** | **bool**|  | [optional]
 **orderAddDt** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetSiteCollection200Response**](../Model/GetSiteCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSiteItem()`

```php
getSiteItem($id): \EmonsiteApi\Models\Site0097c999ec7d3611ad5fec647120ea72Jsonld
```

Retrieves a SiteOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getSiteItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->getSiteItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\Site0097c999ec7d3611ad5fec647120ea72Jsonld**](../Model/Site0097c999ec7d3611ad5fec647120ea72Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchSiteItem()`

```php
patchSiteItem($id, $site7e8883c9b486869412701afd330abd48): \EmonsiteApi\Models\Site0097c999ec7d3611ad5fec647120ea72Jsonld
```

Updates the Site resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$site7e8883c9b486869412701afd330abd48 = new \EmonsiteApi\Models\Site7e8883c9b486869412701afd330abd48(); // \EmonsiteApi\Models\Site7e8883c9b486869412701afd330abd48 | The updated Site resource

try {
    $result = $apiInstance->patchSiteItem($id, $site7e8883c9b486869412701afd330abd48);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->patchSiteItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **site7e8883c9b486869412701afd330abd48** | [**\EmonsiteApi\Models\Site7e8883c9b486869412701afd330abd48**](../Model/Site7e8883c9b486869412701afd330abd48.md)| The updated Site resource | [optional]

### Return type

[**\EmonsiteApi\Models\Site0097c999ec7d3611ad5fec647120ea72Jsonld**](../Model/Site0097c999ec7d3611ad5fec647120ea72Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSiteCollection()`

```php
postSiteCollection($siteF8f2933682cb2687a860a3e01f671ed0Jsonld): \EmonsiteApi\Models\Site0097c999ec7d3611ad5fec647120ea72Jsonld
```

Creates a Site resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteF8f2933682cb2687a860a3e01f671ed0Jsonld = new \EmonsiteApi\Models\SiteF8f2933682cb2687a860a3e01f671ed0Jsonld(); // \EmonsiteApi\Models\SiteF8f2933682cb2687a860a3e01f671ed0Jsonld | The new Site resource

try {
    $result = $apiInstance->postSiteCollection($siteF8f2933682cb2687a860a3e01f671ed0Jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->postSiteCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteF8f2933682cb2687a860a3e01f671ed0Jsonld** | [**\EmonsiteApi\Models\SiteF8f2933682cb2687a860a3e01f671ed0Jsonld**](../Model/SiteF8f2933682cb2687a860a3e01f671ed0Jsonld.md)| The new Site resource | [optional]

### Return type

[**\EmonsiteApi\Models\Site0097c999ec7d3611ad5fec647120ea72Jsonld**](../Model/Site0097c999ec7d3611ad5fec647120ea72Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
