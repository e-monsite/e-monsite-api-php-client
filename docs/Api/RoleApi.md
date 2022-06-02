# Emonsite\RoleApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteRoleItem**](RoleApi.md#deleteroleitem) | **DELETE** /roles/{id} | Removes the Role resource.
[**getRoleCollection**](RoleApi.md#getrolecollection) | **GET** /roles | Retrieves the collection of RoleOutputDto resources.
[**getRoleItem**](RoleApi.md#getroleitem) | **GET** /roles/{id} | Retrieves a RoleOutputDto resource.
[**patchRoleItem**](RoleApi.md#patchroleitem) | **PATCH** /roles/{id} | Updates the Role resource.
[**postRoleCollection**](RoleApi.md#postrolecollection) | **POST** /roles | Creates a Role resource.
[**resourcesRoleItem**](RoleApi.md#resourcesroleitem) | **GET** /roles-resources | Get all role resources

# **deleteRoleItem**
> deleteRoleItem($id)

Removes the Role resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteRoleItem($id);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->deleteRoleItem: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoleCollection**
> \Emonsite\Models\InlineResponse20022 getRoleCollection($page, $items_per_page)

Retrieves the collection of RoleOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getRoleCollection($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->getRoleCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Emonsite\Models\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoleItem**
> \Emonsite\Models\Role41c793592002936a9986d67e92f37a9bJsonld getRoleItem($id)

Retrieves a RoleOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getRoleItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->getRoleItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Emonsite\Models\Role41c793592002936a9986d67e92f37a9bJsonld**](../Model/Role41c793592002936a9986d67e92f37a9bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRoleItem**
> \Emonsite\Models\Role41c793592002936a9986d67e92f37a9bJsonld patchRoleItem($id, $body)

Updates the Role resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Emonsite\Models\Role8335fa6e7449daa5d9298e9ce37ab462(); // \Emonsite\Models\Role8335fa6e7449daa5d9298e9ce37ab462 | The updated Role resource

try {
    $result = $apiInstance->patchRoleItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->patchRoleItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Emonsite\Models\Role8335fa6e7449daa5d9298e9ce37ab462**](../Model/Role8335fa6e7449daa5d9298e9ce37ab462.md)| The updated Role resource | [optional]

### Return type

[**\Emonsite\Models\Role41c793592002936a9986d67e92f37a9bJsonld**](../Model/Role41c793592002936a9986d67e92f37a9bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRoleCollection**
> \Emonsite\Models\Role41c793592002936a9986d67e92f37a9bJsonld postRoleCollection($body)

Creates a Role resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\Role398f80f76f54ad7f04b1f3d6647c661aJsonld(); // \Emonsite\Models\Role398f80f76f54ad7f04b1f3d6647c661aJsonld | The new Role resource

try {
    $result = $apiInstance->postRoleCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->postRoleCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\Role398f80f76f54ad7f04b1f3d6647c661aJsonld**](../Model/Role398f80f76f54ad7f04b1f3d6647c661aJsonld.md)| The new Role resource | [optional]

### Return type

[**\Emonsite\Models\Role41c793592002936a9986d67e92f37a9bJsonld**](../Model/Role41c793592002936a9986d67e92f37a9bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRoleCollection**
> \Emonsite\Models\Role41c793592002936a9986d67e92f37a9bJsonld postRoleCollection($body)

Creates a Role resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\Role398f80f76f54ad7f04b1f3d6647c661aJsonld(); // \Emonsite\Models\Role398f80f76f54ad7f04b1f3d6647c661aJsonld | The new Role resource

try {
    $result = $apiInstance->postRoleCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->postRoleCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\Role398f80f76f54ad7f04b1f3d6647c661aJsonld**](../Model/Role398f80f76f54ad7f04b1f3d6647c661aJsonld.md)| The new Role resource | [optional]

### Return type

[**\Emonsite\Models\Role41c793592002936a9986d67e92f37a9bJsonld**](../Model/Role41c793592002936a9986d67e92f37a9bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resourcesRoleItem**
> \Emonsite\Models\Role41c793592002936a9986d67e92f37a9bJsonld resourcesRoleItem()

Get all role resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->resourcesRoleItem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->resourcesRoleItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Emonsite\Models\Role41c793592002936a9986d67e92f37a9bJsonld**](../Model/Role41c793592002936a9986d67e92f37a9bJsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

