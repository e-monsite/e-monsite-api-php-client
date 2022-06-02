# # SiteEdirectoryOrderOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**orderEnabled** | **bool** |  | [optional]
**spotlightsEnabled** | **bool** |  | [optional]
**currencyPosition** | **string** |  | [optional]
**currency** | **string** |  | [optional]
**addUserId** | **string** |  | [optional]
**updUserId** | **string** |  | [optional]
**addDt** | **int** |  | [optional] [readonly]
**updDt** | **int** |  | [optional] [readonly]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**versions** | [**\EmonsiteApi\Models\EdirectoryOrderOptionsV[]**](EdirectoryOrderOptionsV.md) | IMPLEMENTEZ le mapping dans l&#39;entity TODO trouver comment le faire dynamiquement avec un listener doctrine | [optional]
**version** | [**\EmonsiteApi\Models\VersionInterface[]**](VersionInterface.md) |  | [optional]
**defaultLang** | **string** |  | [optional] [readonly]
**versionByLang** | **string[]** |  | [optional]
**site** | [**\EmonsiteApi\Models\Site**](Site.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
