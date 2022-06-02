# Emonsite\EcoDiscountApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEcoDiscountItem**](EcoDiscountApi.md#deleteecodiscountitem) | **DELETE** /eco_discounts/{id} | Removes the EcoDiscount resource.
[**getEcoDiscountCollection**](EcoDiscountApi.md#getecodiscountcollection) | **GET** /eco_discounts | Retrieves the collection of EcoDiscountOutputDto resources.
[**getEcoDiscountItem**](EcoDiscountApi.md#getecodiscountitem) | **GET** /eco_discounts/{id} | Retrieves a EcoDiscountOutputDto resource.
[**patchEcoDiscountItem**](EcoDiscountApi.md#patchecodiscountitem) | **PATCH** /eco_discounts/{id} | Updates the EcoDiscount resource.
[**postEcoDiscountCollection**](EcoDiscountApi.md#postecodiscountcollection) | **POST** /eco_discounts | Creates a EcoDiscount resource.

# **deleteEcoDiscountItem**
> deleteEcoDiscountItem($id, $site_id)

Removes the EcoDiscount resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\EcoDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$site_id = "site_id_example"; // string | 

try {
    $apiInstance->deleteEcoDiscountItem($id, $site_id);
} catch (Exception $e) {
    echo 'Exception when calling EcoDiscountApi->deleteEcoDiscountItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **site_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEcoDiscountCollection**
> \Emonsite\Models\InlineResponse20014 getEcoDiscountCollection($site_id, $page, $items_per_page)

Retrieves the collection of EcoDiscountOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\EcoDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getEcoDiscountCollection($site_id, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoDiscountApi->getEcoDiscountCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**|  |
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Emonsite\Models\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEcoDiscountItem**
> \Emonsite\Models\EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld getEcoDiscountItem($id, $site_id)

Retrieves a EcoDiscountOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\EcoDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$site_id = "site_id_example"; // string | 

try {
    $result = $apiInstance->getEcoDiscountItem($id, $site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoDiscountApi->getEcoDiscountItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **site_id** | **string**|  |

### Return type

[**\Emonsite\Models\EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld**](../Model/EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchEcoDiscountItem**
> \Emonsite\Models\EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld patchEcoDiscountItem($site_id, $id, $body)

Updates the EcoDiscount resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\EcoDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | 
$id = "id_example"; // string | 
$body = new \Emonsite\Models\EcoDiscountB3d1155ab8f4c317b0b03ea010998010(); // \Emonsite\Models\EcoDiscountB3d1155ab8f4c317b0b03ea010998010 | The updated EcoDiscount resource

try {
    $result = $apiInstance->patchEcoDiscountItem($site_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoDiscountApi->patchEcoDiscountItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**|  |
 **id** | **string**|  |
 **body** | [**\Emonsite\Models\EcoDiscountB3d1155ab8f4c317b0b03ea010998010**](../Model/EcoDiscountB3d1155ab8f4c317b0b03ea010998010.md)| The updated EcoDiscount resource | [optional]

### Return type

[**\Emonsite\Models\EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld**](../Model/EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEcoDiscountCollection**
> \Emonsite\Models\EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld postEcoDiscountCollection($body)

Creates a EcoDiscount resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\EcoDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\EcoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld(); // \Emonsite\Models\EcoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld | The new EcoDiscount resource

try {
    $result = $apiInstance->postEcoDiscountCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoDiscountApi->postEcoDiscountCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\EcoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld**](../Model/EcoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld.md)| The new EcoDiscount resource | [optional]

### Return type

[**\Emonsite\Models\EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld**](../Model/EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEcoDiscountCollection**
> \Emonsite\Models\EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld postEcoDiscountCollection($body)

Creates a EcoDiscount resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\EcoDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\EcoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld(); // \Emonsite\Models\EcoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld | The new EcoDiscount resource

try {
    $result = $apiInstance->postEcoDiscountCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoDiscountApi->postEcoDiscountCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\EcoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld**](../Model/EcoDiscountD3d9b67a56fd84ba8bd9bd07a15bcf49Jsonld.md)| The new EcoDiscount resource | [optional]

### Return type

[**\Emonsite\Models\EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld**](../Model/EcoDiscount9b4a1b3cb469f303a66926f3d9bc3ad0Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

