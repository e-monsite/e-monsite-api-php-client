# EmonsiteApi\CommandApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateCommandItem()**](CommandApi.md#activateCommandItem) | **GET** /commands/{id}/activate | Activate a command (payment received)
[**getCommandCollection()**](CommandApi.md#getCommandCollection) | **GET** /commands | Retrieves the collection of CommandOutputDto resources.
[**getCommandItem()**](CommandApi.md#getCommandItem) | **GET** /commands/{id} | Retrieves a CommandOutputDto resource.
[**patchCommandItem()**](CommandApi.md#patchCommandItem) | **PATCH** /commands/{id} | Updates the Command resource.


## `activateCommandItem()`

```php
activateCommandItem($id): \EmonsiteApi\Models\CommandEe5f35022d477654f1cddfdb02f77421Jsonld
```

Activate a command (payment received)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\CommandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->activateCommandItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->activateCommandItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\CommandEe5f35022d477654f1cddfdb02f77421Jsonld**](../Model/CommandEe5f35022d477654f1cddfdb02f77421Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommandCollection()`

```php
getCommandCollection($reference, $reference2, $brand, $brand2, $productsOfferId, $userUsername, $email, $productsSiteId, $productsSiteId2, $paymean, $paymean2, $status, $status2, $total, $total2, $addDtBefore, $addDtStrictlyBefore, $addDtAfter, $addDtStrictlyAfter, $paymentDtBefore, $paymentDtStrictlyBefore, $paymentDtAfter, $paymentDtStrictlyAfter, $orderAddDt, $page, $itemsPerPage): \EmonsiteApi\Models\GetCommandCollection200Response
```

Retrieves the collection of CommandOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\CommandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 'reference_example'; // string
$reference2 = array('reference_example'); // string[]
$brand = 'brand_example'; // string
$brand2 = array('brand_example'); // string[]
$productsOfferId = 'productsOfferId_example'; // string | - perso : Individual - pro : PRO - business : Business - eco : E-commerce - maindomain : Domain namePRO - secondarydomain : Secondary Domain namePRO - ssl_standard : SSL certificate - ndd_ssl : Domain Name + SSL - ndd_vpro_ssl : Version PRO + Domain Name + SSL certificate
$userUsername = 'userUsername_example'; // string
$email = 'email_example'; // string
$productsSiteId = 'productsSiteId_example'; // string
$productsSiteId2 = array('productsSiteId_example'); // string[]
$paymean = 'paymean_example'; // string | - cb : CB - check : Chèque - transfer : Virement - paypal : Paypal - credits : Crédits - stripe : Stripe - cash : Espèce
$paymean2 = array('paymean_example'); // string[]
$status = 'status_example'; // string | - cart : Pending - locked : Awaiting payment - paid : Paid - canceled : Canceled
$status2 = array('status_example'); // string[]
$total = 'total_example'; // string
$total2 = array('total_example'); // string[]
$addDtBefore = 'addDtBefore_example'; // string
$addDtStrictlyBefore = 'addDtStrictlyBefore_example'; // string
$addDtAfter = 'addDtAfter_example'; // string
$addDtStrictlyAfter = 'addDtStrictlyAfter_example'; // string
$paymentDtBefore = 'paymentDtBefore_example'; // string
$paymentDtStrictlyBefore = 'paymentDtStrictlyBefore_example'; // string
$paymentDtAfter = 'paymentDtAfter_example'; // string
$paymentDtStrictlyAfter = 'paymentDtStrictlyAfter_example'; // string
$orderAddDt = 'orderAddDt_example'; // string
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getCommandCollection($reference, $reference2, $brand, $brand2, $productsOfferId, $userUsername, $email, $productsSiteId, $productsSiteId2, $paymean, $paymean2, $status, $status2, $total, $total2, $addDtBefore, $addDtStrictlyBefore, $addDtAfter, $addDtStrictlyAfter, $paymentDtBefore, $paymentDtStrictlyBefore, $paymentDtAfter, $paymentDtStrictlyAfter, $orderAddDt, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->getCommandCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**|  | [optional]
 **reference2** | [**string[]**](../Model/string.md)|  | [optional]
 **brand** | **string**|  | [optional]
 **brand2** | [**string[]**](../Model/string.md)|  | [optional]
 **productsOfferId** | **string**| - perso : Individual - pro : PRO - business : Business - eco : E-commerce - maindomain : Domain namePRO - secondarydomain : Secondary Domain namePRO - ssl_standard : SSL certificate - ndd_ssl : Domain Name + SSL - ndd_vpro_ssl : Version PRO + Domain Name + SSL certificate | [optional]
 **userUsername** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **productsSiteId** | **string**|  | [optional]
 **productsSiteId2** | [**string[]**](../Model/string.md)|  | [optional]
 **paymean** | **string**| - cb : CB - check : Chèque - transfer : Virement - paypal : Paypal - credits : Crédits - stripe : Stripe - cash : Espèce | [optional]
 **paymean2** | [**string[]**](../Model/string.md)|  | [optional]
 **status** | **string**| - cart : Pending - locked : Awaiting payment - paid : Paid - canceled : Canceled | [optional]
 **status2** | [**string[]**](../Model/string.md)|  | [optional]
 **total** | **string**|  | [optional]
 **total2** | [**string[]**](../Model/string.md)|  | [optional]
 **addDtBefore** | **string**|  | [optional]
 **addDtStrictlyBefore** | **string**|  | [optional]
 **addDtAfter** | **string**|  | [optional]
 **addDtStrictlyAfter** | **string**|  | [optional]
 **paymentDtBefore** | **string**|  | [optional]
 **paymentDtStrictlyBefore** | **string**|  | [optional]
 **paymentDtAfter** | **string**|  | [optional]
 **paymentDtStrictlyAfter** | **string**|  | [optional]
 **orderAddDt** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetCommandCollection200Response**](../Model/GetCommandCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommandItem()`

```php
getCommandItem($id): \EmonsiteApi\Models\CommandEe5f35022d477654f1cddfdb02f77421Jsonld
```

Retrieves a CommandOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\CommandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getCommandItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->getCommandItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\CommandEe5f35022d477654f1cddfdb02f77421Jsonld**](../Model/CommandEe5f35022d477654f1cddfdb02f77421Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchCommandItem()`

```php
patchCommandItem($id, $command13659cedec6eacf2649cf892ab7577d0): \EmonsiteApi\Models\CommandEe5f35022d477654f1cddfdb02f77421Jsonld
```

Updates the Command resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\CommandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$command13659cedec6eacf2649cf892ab7577d0 = new \EmonsiteApi\Models\Command13659cedec6eacf2649cf892ab7577d0(); // \EmonsiteApi\Models\Command13659cedec6eacf2649cf892ab7577d0 | The updated Command resource

try {
    $result = $apiInstance->patchCommandItem($id, $command13659cedec6eacf2649cf892ab7577d0);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->patchCommandItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **command13659cedec6eacf2649cf892ab7577d0** | [**\EmonsiteApi\Models\Command13659cedec6eacf2649cf892ab7577d0**](../Model/Command13659cedec6eacf2649cf892ab7577d0.md)| The updated Command resource | [optional]

### Return type

[**\EmonsiteApi\Models\CommandEe5f35022d477654f1cddfdb02f77421Jsonld**](../Model/CommandEe5f35022d477654f1cddfdb02f77421Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
