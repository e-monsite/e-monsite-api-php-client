# EmonsiteApi\UserDomainMailboxApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserDomainMailboxCollection()**](UserDomainMailboxApi.md#getUserDomainMailboxCollection) | **GET** /user_domain_mailboxes | Retrieves the collection of UserDomainMailboxOutputDto resources.
[**getUserDomainMailboxItem()**](UserDomainMailboxApi.md#getUserDomainMailboxItem) | **GET** /user_domain_mailboxes/{id} | Retrieves a UserDomainMailboxOutputDto resource.
[**postUserDomainMailboxCollection()**](UserDomainMailboxApi.md#postUserDomainMailboxCollection) | **POST** /user_domain_mailboxes | Creates a UserDomainMailbox resource.


## `getUserDomainMailboxCollection()`

```php
getUserDomainMailboxCollection($id, $id2, $domain, $domain2, $username, $username2, $page, $itemsPerPage): \EmonsiteApi\Models\GetUserDomainMailboxCollection200Response
```

Retrieves the collection of UserDomainMailboxOutputDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\UserDomainMailboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$id2 = array('id_example'); // string[]
$domain = 'domain_example'; // string
$domain2 = array('domain_example'); // string[]
$username = 'username_example'; // string
$username2 = array('username_example'); // string[]
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page

try {
    $result = $apiInstance->getUserDomainMailboxCollection($id, $id2, $domain, $domain2, $username, $username2, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDomainMailboxApi->getUserDomainMailboxCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | [optional]
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **domain** | **string**|  | [optional]
 **domain2** | [**string[]**](../Model/string.md)|  | [optional]
 **username** | **string**|  | [optional]
 **username2** | [**string[]**](../Model/string.md)|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\EmonsiteApi\Models\GetUserDomainMailboxCollection200Response**](../Model/GetUserDomainMailboxCollection200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserDomainMailboxItem()`

```php
getUserDomainMailboxItem($id): \EmonsiteApi\Models\UserDomainMailboxB24869693c225df47103d00fd93b91e9Jsonld
```

Retrieves a UserDomainMailboxOutputDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\UserDomainMailboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getUserDomainMailboxItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDomainMailboxApi->getUserDomainMailboxItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\EmonsiteApi\Models\UserDomainMailboxB24869693c225df47103d00fd93b91e9Jsonld**](../Model/UserDomainMailboxB24869693c225df47103d00fd93b91e9Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUserDomainMailboxCollection()`

```php
postUserDomainMailboxCollection($userDomainMailbox26e994f28120c4b51733f4efd1c6a999Jsonld): \EmonsiteApi\Models\UserDomainMailboxB24869693c225df47103d00fd93b91e9Jsonld
```

Creates a UserDomainMailbox resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\UserDomainMailboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userDomainMailbox26e994f28120c4b51733f4efd1c6a999Jsonld = new \EmonsiteApi\Models\UserDomainMailbox26e994f28120c4b51733f4efd1c6a999Jsonld(); // \EmonsiteApi\Models\UserDomainMailbox26e994f28120c4b51733f4efd1c6a999Jsonld | The new UserDomainMailbox resource

try {
    $result = $apiInstance->postUserDomainMailboxCollection($userDomainMailbox26e994f28120c4b51733f4efd1c6a999Jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDomainMailboxApi->postUserDomainMailboxCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userDomainMailbox26e994f28120c4b51733f4efd1c6a999Jsonld** | [**\EmonsiteApi\Models\UserDomainMailbox26e994f28120c4b51733f4efd1c6a999Jsonld**](../Model/UserDomainMailbox26e994f28120c4b51733f4efd1c6a999Jsonld.md)| The new UserDomainMailbox resource | [optional]

### Return type

[**\EmonsiteApi\Models\UserDomainMailboxB24869693c225df47103d00fd93b91e9Jsonld**](../Model/UserDomainMailboxB24869693c225df47103d00fd93b91e9Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
