# Emonsite\CommandApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateCommandItem**](CommandApi.md#activatecommanditem) | **GET** /commands/{id}/activate | Activate a command (payment received)
[**getCommandCollection**](CommandApi.md#getcommandcollection) | **GET** /commands | Retrieves the collection of CommandOutputDto resources.
[**getCommandItem**](CommandApi.md#getcommanditem) | **GET** /commands/{id} | Retrieves a CommandOutputDto resource.
[**patchCommandItem**](CommandApi.md#patchcommanditem) | **PATCH** /commands/{id} | Updates the Command resource.

# **activateCommandItem**
> \Emonsite\Models\CommandEe5f35022d477654f1cddfdb02f77421Jsonld activateCommandItem($id)

Activate a command (payment received)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\CommandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->activateCommandItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->activateCommandItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Emonsite\Models\CommandEe5f35022d477654f1cddfdb02f77421Jsonld**](../Model/CommandEe5f35022d477654f1cddfdb02f77421Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommandCollection**
> \Emonsite\Models\InlineResponse2009 getCommandCollection($reference, $reference, $brand, $brand, $products_offer_id, $user_username, $email, $products_site_id, $products_site_id, $paymean, $paymean, $status, $status, $total, $total, $add_dt_before, $add_dt_strictly_before, $add_dt_after, $add_dt_strictly_after, $payment_dt_before, $payment_dt_strictly_before, $payment_dt_after, $payment_dt_strictly_after, $order_add_dt, $page, $items_per_page)

Retrieves the collection of CommandOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\CommandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = "reference_example"; // string | 
$reference = array("reference_example"); // string[] | 
$brand = "brand_example"; // string | 
$brand = array("brand_example"); // string[] | 
$products_offer_id = "products_offer_id_example"; // string | - perso : Individual - pro : PRO - business : Business - eco : E-commerce - maindomain : Domain namePRO - secondarydomain : Secondary Domain namePRO - ssl_standard : SSL certificate - ndd_ssl : Domain Name + SSL - ndd_vpro_ssl : Version PRO + Domain Name + SSL certificate
$user_username = "user_username_example"; // string | 
$email = "email_example"; // string | 
$products_site_id = "products_site_id_example"; // string | 
$products_site_id = array("products_site_id_example"); // string[] | 
$paymean = "paymean_example"; // string | - cb : CB - check : Chèque - transfer : Virement - paypal : Paypal - credits : Crédits - stripe : Stripe - cash : Espèce
$paymean = array("paymean_example"); // string[] | 
$status = "status_example"; // string | - cart : Pending - locked : Awaiting payment - paid : Paid - canceled : Canceled
$status = array("status_example"); // string[] | 
$total = "total_example"; // string | 
$total = array("total_example"); // string[] | 
$add_dt_before = "add_dt_before_example"; // string | 
$add_dt_strictly_before = "add_dt_strictly_before_example"; // string | 
$add_dt_after = "add_dt_after_example"; // string | 
$add_dt_strictly_after = "add_dt_strictly_after_example"; // string | 
$payment_dt_before = "payment_dt_before_example"; // string | 
$payment_dt_strictly_before = "payment_dt_strictly_before_example"; // string | 
$payment_dt_after = "payment_dt_after_example"; // string | 
$payment_dt_strictly_after = "payment_dt_strictly_after_example"; // string | 
$order_add_dt = "order_add_dt_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getCommandCollection($reference, $reference, $brand, $brand, $products_offer_id, $user_username, $email, $products_site_id, $products_site_id, $paymean, $paymean, $status, $status, $total, $total, $add_dt_before, $add_dt_strictly_before, $add_dt_after, $add_dt_strictly_after, $payment_dt_before, $payment_dt_strictly_before, $payment_dt_after, $payment_dt_strictly_after, $order_add_dt, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->getCommandCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**|  | [optional]
 **reference** | [**string[]**](../Model/string.md)|  | [optional]
 **brand** | **string**|  | [optional]
 **brand** | [**string[]**](../Model/string.md)|  | [optional]
 **products_offer_id** | **string**| - perso : Individual - pro : PRO - business : Business - eco : E-commerce - maindomain : Domain namePRO - secondarydomain : Secondary Domain namePRO - ssl_standard : SSL certificate - ndd_ssl : Domain Name + SSL - ndd_vpro_ssl : Version PRO + Domain Name + SSL certificate | [optional]
 **user_username** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **products_site_id** | **string**|  | [optional]
 **products_site_id** | [**string[]**](../Model/string.md)|  | [optional]
 **paymean** | **string**| - cb : CB - check : Chèque - transfer : Virement - paypal : Paypal - credits : Crédits - stripe : Stripe - cash : Espèce | [optional]
 **paymean** | [**string[]**](../Model/string.md)|  | [optional]
 **status** | **string**| - cart : Pending - locked : Awaiting payment - paid : Paid - canceled : Canceled | [optional]
 **status** | [**string[]**](../Model/string.md)|  | [optional]
 **total** | **string**|  | [optional]
 **total** | [**string[]**](../Model/string.md)|  | [optional]
 **add_dt_before** | **string**|  | [optional]
 **add_dt_strictly_before** | **string**|  | [optional]
 **add_dt_after** | **string**|  | [optional]
 **add_dt_strictly_after** | **string**|  | [optional]
 **payment_dt_before** | **string**|  | [optional]
 **payment_dt_strictly_before** | **string**|  | [optional]
 **payment_dt_after** | **string**|  | [optional]
 **payment_dt_strictly_after** | **string**|  | [optional]
 **order_add_dt** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Emonsite\Models\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommandItem**
> \Emonsite\Models\CommandEe5f35022d477654f1cddfdb02f77421Jsonld getCommandItem($id)

Retrieves a CommandOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\CommandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getCommandItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->getCommandItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Emonsite\Models\CommandEe5f35022d477654f1cddfdb02f77421Jsonld**](../Model/CommandEe5f35022d477654f1cddfdb02f77421Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchCommandItem**
> \Emonsite\Models\CommandEe5f35022d477654f1cddfdb02f77421Jsonld patchCommandItem($id, $body)

Updates the Command resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\CommandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Emonsite\Models\Command13659cedec6eacf2649cf892ab7577d0(); // \Emonsite\Models\Command13659cedec6eacf2649cf892ab7577d0 | The updated Command resource

try {
    $result = $apiInstance->patchCommandItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->patchCommandItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Emonsite\Models\Command13659cedec6eacf2649cf892ab7577d0**](../Model/Command13659cedec6eacf2649cf892ab7577d0.md)| The updated Command resource | [optional]

### Return type

[**\Emonsite\Models\CommandEe5f35022d477654f1cddfdb02f77421Jsonld**](../Model/CommandEe5f35022d477654f1cddfdb02f77421Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

