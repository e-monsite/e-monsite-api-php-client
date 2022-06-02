# Emonsite\CommandProductApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCommandProductCollection**](CommandProductApi.md#getcommandproductcollection) | **GET** /command_products | Retrieves the collection of CommandProductOutputDto resources.
[**getCommandProductItem**](CommandProductApi.md#getcommandproductitem) | **GET** /command_products/{id} | Retrieves a CommandProductOutputDto resource.
[**postCommandProductCollection**](CommandProductApi.md#postcommandproductcollection) | **POST** /command_products | Creates a CommandProduct resource.

# **getCommandProductCollection**
> \Emonsite\Models\InlineResponse2008 getCommandProductCollection($command_id, $page, $items_per_page)

Retrieves the collection of CommandProductOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\CommandProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = "command_id_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getCommandProductCollection($command_id, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandProductApi->getCommandProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Emonsite\Models\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommandProductItem**
> \Emonsite\Models\CommandProductE9771de728231a75b73008fe2e6c0e5fJsonld getCommandProductItem($id)

Retrieves a CommandProductOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\CommandProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getCommandProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandProductApi->getCommandProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Emonsite\Models\CommandProductE9771de728231a75b73008fe2e6c0e5fJsonld**](../Model/CommandProductE9771de728231a75b73008fe2e6c0e5fJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCommandProductCollection**
> \Emonsite\Models\CommandProductE9771de728231a75b73008fe2e6c0e5fJsonld postCommandProductCollection($body)

Creates a CommandProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\CommandProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\CommandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld(); // \Emonsite\Models\CommandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld | The new CommandProduct resource

try {
    $result = $apiInstance->postCommandProductCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandProductApi->postCommandProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\CommandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld**](../Model/CommandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld.md)| The new CommandProduct resource | [optional]

### Return type

[**\Emonsite\Models\CommandProductE9771de728231a75b73008fe2e6c0e5fJsonld**](../Model/CommandProductE9771de728231a75b73008fe2e6c0e5fJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCommandProductCollection**
> \Emonsite\Models\CommandProductE9771de728231a75b73008fe2e6c0e5fJsonld postCommandProductCollection($body)

Creates a CommandProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\CommandProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\CommandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld(); // \Emonsite\Models\CommandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld | The new CommandProduct resource

try {
    $result = $apiInstance->postCommandProductCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandProductApi->postCommandProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\CommandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld**](../Model/CommandProductE6648ceda3fb8628d90f7e34797db5f5Jsonld.md)| The new CommandProduct resource | [optional]

### Return type

[**\Emonsite\Models\CommandProductE9771de728231a75b73008fe2e6c0e5fJsonld**](../Model/CommandProductE9771de728231a75b73008fe2e6c0e5fJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

