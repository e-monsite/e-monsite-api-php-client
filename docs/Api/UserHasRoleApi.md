# Emonsite\UserHasRoleApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUserHasRoleItem**](UserHasRoleApi.md#deleteuserhasroleitem) | **DELETE** /user_has_roles/{id} | Removes the UserHasRole resource.
[**getUserHasRoleCollection**](UserHasRoleApi.md#getuserhasrolecollection) | **GET** /user_has_roles | Retrieves the collection of UserHasRoleOutputDto resources.
[**getUserHasRoleItem**](UserHasRoleApi.md#getuserhasroleitem) | **GET** /user_has_roles/{id} | Retrieves a UserHasRoleOutputDto resource.
[**patchUserHasRoleItem**](UserHasRoleApi.md#patchuserhasroleitem) | **PATCH** /user_has_roles/{id} | Updates the UserHasRole resource.
[**postUserHasRoleCollection**](UserHasRoleApi.md#postuserhasrolecollection) | **POST** /user_has_roles | Creates a UserHasRole resource.

# **deleteUserHasRoleItem**
> deleteUserHasRoleItem($id)

Removes the UserHasRole resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\UserHasRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteUserHasRoleItem($id);
} catch (Exception $e) {
    echo 'Exception when calling UserHasRoleApi->deleteUserHasRoleItem: ', $e->getMessage(), PHP_EOL;
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

# **getUserHasRoleCollection**
> \Emonsite\Models\InlineResponse20027 getUserHasRoleCollection($page, $items_per_page)

Retrieves the collection of UserHasRoleOutputDto resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\UserHasRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->getUserHasRoleCollection($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHasRoleApi->getUserHasRoleCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Emonsite\Models\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserHasRoleItem**
> \Emonsite\Models\UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld getUserHasRoleItem($id)

Retrieves a UserHasRoleOutputDto resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\UserHasRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getUserHasRoleItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHasRoleApi->getUserHasRoleItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Emonsite\Models\UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld**](../Model/UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUserHasRoleItem**
> \Emonsite\Models\UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld patchUserHasRoleItem($id, $body)

Updates the UserHasRole resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\UserHasRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Emonsite\Models\UserHasRoleD91fd0c69421e5afa9bf303992483883(); // \Emonsite\Models\UserHasRoleD91fd0c69421e5afa9bf303992483883 | The updated UserHasRole resource

try {
    $result = $apiInstance->patchUserHasRoleItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHasRoleApi->patchUserHasRoleItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Emonsite\Models\UserHasRoleD91fd0c69421e5afa9bf303992483883**](../Model/UserHasRoleD91fd0c69421e5afa9bf303992483883.md)| The updated UserHasRole resource | [optional]

### Return type

[**\Emonsite\Models\UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld**](../Model/UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserHasRoleCollection**
> \Emonsite\Models\UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld postUserHasRoleCollection($body)

Creates a UserHasRole resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\UserHasRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\UserHasRole589632707daa9dd4818942897415b76bJsonld(); // \Emonsite\Models\UserHasRole589632707daa9dd4818942897415b76bJsonld | The new UserHasRole resource

try {
    $result = $apiInstance->postUserHasRoleCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHasRoleApi->postUserHasRoleCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\UserHasRole589632707daa9dd4818942897415b76bJsonld**](../Model/UserHasRole589632707daa9dd4818942897415b76bJsonld.md)| The new UserHasRole resource | [optional]

### Return type

[**\Emonsite\Models\UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld**](../Model/UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserHasRoleCollection**
> \Emonsite\Models\UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld postUserHasRoleCollection($body)

Creates a UserHasRole resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Emonsite\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Emonsite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Emonsite\Api\UserHasRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emonsite\Models\UserHasRole589632707daa9dd4818942897415b76bJsonld(); // \Emonsite\Models\UserHasRole589632707daa9dd4818942897415b76bJsonld | The new UserHasRole resource

try {
    $result = $apiInstance->postUserHasRoleCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHasRoleApi->postUserHasRoleCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emonsite\Models\UserHasRole589632707daa9dd4818942897415b76bJsonld**](../Model/UserHasRole589632707daa9dd4818942897415b76bJsonld.md)| The new UserHasRole resource | [optional]

### Return type

[**\Emonsite\Models\UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld**](../Model/UserHasRoleE0ac26c03ac9034d16aff17dd49124c2Jsonld.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

