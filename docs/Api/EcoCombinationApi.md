# Emonsite\EcoCombinationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEcoCombinationItem**](EcoCombinationApi.md#deleteecocombinationitem) | **DELETE** /eco_combinations/{id} | Removes the EcoCombination resource.
[**getEcoCombinationCollection**](EcoCombinationApi.md#getecocombinationcollection) | **GET** /eco_combinations | Retrieves the collection of EcoCombinationOutputDto resources.
[**getEcoCombinationItem**](EcoCombinationApi.md#getecocombinationitem) | **GET** /eco_combinations/{id} | Retrieves a EcoCombinationOutputDto resource.
[**postEcoCombinationCollection**](EcoCombinationApi.md#postecocombinationcollection) | **POST** /eco_combinations | Creates a EcoCombination resource.

# **deleteEcoCombinationItem**
> deleteEcoCombinationItem($id, $site_id)

Removes the EcoCombination resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\EcoCombinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$site_id = "site_id_example"; // string | 

try {
    $apiInstance->deleteEcoCombinationItem($id, $site_id);
} catch (Exception $e) {
    echo 'Exception when calling EcoCombinationApi->deleteEcoCombinationItem: ', $e->getMessage(), PHP_EOL;
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

# **getEcoCombinationCollection**
> \Emonsite\Models\InlineResponse20013 getEcoCombinationCollection($site_id, $page, $items_per_page)

Retrieves the collection of EcoCombinationOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\EcoCombinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getEcoCombinationCollection($site_id, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoCombinationApi->getEcoCombinationCollection: ', $e->getMessage(), PHP_EOL;
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

[**\Emonsite\Models\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEcoCombinationItem**
> \Emonsite\Models\EcoCombination3bb0d34c5ea0c72f2026a57c27faba00Jsonld getEcoCombinationItem($id, $site_id)

Retrieves a EcoCombinationOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\EcoCombinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$site_id = "site_id_example"; // string | 

try {
    $result = $apiInstance->getEcoCombinationItem($id, $site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoCombinationApi->getEcoCombinationItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **site_id** | **string**|  |

### Return type

[**\Emonsite\Models\EcoCombination3bb0d34c5ea0c72f2026a57c27faba00Jsonld**](../Model/EcoCombination3bb0d34c5ea0c72f2026a57c27faba00Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEcoCombinationCollection**
> \Emonsite\Models\EcoCombination3bb0d34c5ea0c72f2026a57c27faba00Jsonld postEcoCombinationCollection($body)

Creates a EcoCombination resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\EcoCombinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\EcoCombinationA3c1a277fc6663e5ff2c6f85617980feJsonld(); // \Emonsite\Models\EcoCombinationA3c1a277fc6663e5ff2c6f85617980feJsonld | The new EcoCombination resource

try {
    $result = $apiInstance->postEcoCombinationCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoCombinationApi->postEcoCombinationCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\EcoCombinationA3c1a277fc6663e5ff2c6f85617980feJsonld**](../Model/EcoCombinationA3c1a277fc6663e5ff2c6f85617980feJsonld.md)| The new EcoCombination resource | [optional]

### Return type

[**\Emonsite\Models\EcoCombination3bb0d34c5ea0c72f2026a57c27faba00Jsonld**](../Model/EcoCombination3bb0d34c5ea0c72f2026a57c27faba00Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEcoCombinationCollection**
> \Emonsite\Models\EcoCombination3bb0d34c5ea0c72f2026a57c27faba00Jsonld postEcoCombinationCollection($body)

Creates a EcoCombination resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\EcoCombinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\EcoCombinationA3c1a277fc6663e5ff2c6f85617980feJsonld(); // \Emonsite\Models\EcoCombinationA3c1a277fc6663e5ff2c6f85617980feJsonld | The new EcoCombination resource

try {
    $result = $apiInstance->postEcoCombinationCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcoCombinationApi->postEcoCombinationCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\EcoCombinationA3c1a277fc6663e5ff2c6f85617980feJsonld**](../Model/EcoCombinationA3c1a277fc6663e5ff2c6f85617980feJsonld.md)| The new EcoCombination resource | [optional]

### Return type

[**\Emonsite\Models\EcoCombination3bb0d34c5ea0c72f2026a57c27faba00Jsonld**](../Model/EcoCombination3bb0d34c5ea0c72f2026a57c27faba00Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

