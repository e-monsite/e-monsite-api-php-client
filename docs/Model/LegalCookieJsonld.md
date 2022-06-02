# # LegalCookieJsonld

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | **string** |  | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**type** | **string** |  | [optional] [readonly]
**faviconUrl** | **string** |  | [optional]
**enabled** | **bool** |  | [optional]
**model** | **string** | TODO enum | [optional]
**site** | [**\EmonsiteApi\Models\SiteJsonld**](SiteJsonld.md) |  | [optional]
**id** | **string** |  | [optional] [readonly]
**versions** | [**\EmonsiteApi\Models\LegalCookieVJsonld[]**](LegalCookieVJsonld.md) | IMPLEMENTEZ le mapping dans l&#39;entity TODO trouver comment le faire dynamiquement avec un listener doctrine | [optional]
**version** | [**\EmonsiteApi\Models\VersionInterfaceJsonld[]**](VersionInterfaceJsonld.md) |  | [optional]
**defaultLang** | **string** |  | [optional] [readonly]
**versionByLang** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
