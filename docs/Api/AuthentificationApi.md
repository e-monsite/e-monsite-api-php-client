# EmonsiteApi\AuthentificationApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postCredentialsItem()**](AuthentificationApi.md#postCredentialsItem) | **POST** /auth | Get a JWT token to login.


## `postCredentialsItem()`

```php
postCredentialsItem($credentials): \EmonsiteApi\Models\Tokens
```

Get a JWT token to login.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EmonsiteApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new EmonsiteApi\Api\AuthentificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credentials = new \EmonsiteApi\Models\Credentials(); // \EmonsiteApi\Models\Credentials | Create new JWT Token

try {
    $result = $apiInstance->postCredentialsItem($credentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthentificationApi->postCredentialsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentials** | [**\EmonsiteApi\Models\Credentials**](../Model/Credentials.md)| Create new JWT Token | [optional]

### Return type

[**\EmonsiteApi\Models\Tokens**](../Model/Tokens.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
