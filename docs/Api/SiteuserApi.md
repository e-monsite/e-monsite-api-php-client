# EmonsiteApi\SiteuserApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiSitesSiteUsersGetSubresource()**](SiteuserApi.md#apiSitesSiteUsersGetSubresource) | **GET** /sites/{id}/site_users | Retrieves the collection of Siteuser resources.
[**apiUsersSiteUsersGetSubresource()**](SiteuserApi.md#apiUsersSiteUsersGetSubresource) | **GET** /users/{id}/site_users | Retrieves the collection of Siteuser resources.
[**deleteSiteuserItem()**](SiteuserApi.md#deleteSiteuserItem) | **DELETE** /siteusers/{id} | Removes the Siteuser resource.
[**postSiteuserCollection()**](SiteuserApi.md#postSiteuserCollection) | **POST** /siteusers | Creates a Siteuser resource.


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


$apiInstance = new EmonsiteApi\Api\SiteuserApi(
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
    echo 'Exception when calling SiteuserApi->apiSitesSiteUsersGetSubresource: ', $e->getMessage(), PHP_EOL;
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

## `apiUsersSiteUsersGetSubresource()`

```php
apiUsersSiteUsersGetSubresource($id, $page, $itemsPerPage): \EmonsiteApi\Models\ApiSitesSiteUsersGetSubresource200Response
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


$apiInstance = new EmonsiteApi\Api\SiteuserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->apiUsersSiteUsersGetSubresource($id, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteuserApi->apiUsersSiteUsersGetSubresource: ', $e->getMessage(), PHP_EOL;
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

## `deleteSiteuserItem()`

```php
deleteSiteuserItem($id)
```

Removes the Siteuser resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\SiteuserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteSiteuserItem($id);
} catch (Exception $e) {
    echo 'Exception when calling SiteuserApi->deleteSiteuserItem: ', $e->getMessage(), PHP_EOL;
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

## `postSiteuserCollection()`

```php
postSiteuserCollection($siteuser57c801516c2b5b79ccf4541b195da432Jsonld): \EmonsiteApi\Models\Siteuser7fc182df899df5888744e3f43c9c8f05Jsonld
```

Creates a Siteuser resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\SiteuserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteuser57c801516c2b5b79ccf4541b195da432Jsonld = new \EmonsiteApi\Models\Siteuser57c801516c2b5b79ccf4541b195da432Jsonld(); // \EmonsiteApi\Models\Siteuser57c801516c2b5b79ccf4541b195da432Jsonld | The new Siteuser resource

try {
    $result = $apiInstance->postSiteuserCollection($siteuser57c801516c2b5b79ccf4541b195da432Jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteuserApi->postSiteuserCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteuser57c801516c2b5b79ccf4541b195da432Jsonld** | [**\EmonsiteApi\Models\Siteuser57c801516c2b5b79ccf4541b195da432Jsonld**](../Model/Siteuser57c801516c2b5b79ccf4541b195da432Jsonld.md)| The new Siteuser resource | [optional]

### Return type

[**\EmonsiteApi\Models\Siteuser7fc182df899df5888744e3f43c9c8f05Jsonld**](../Model/Siteuser7fc182df899df5888744e3f43c9c8f05Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
