# # LegalJsonldCguPage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | **string** |  | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**type** | **string** |  | [optional] [readonly]
**aliasClass** | **string** |  | [optional] [readonly]
**pageindex** | **bool** |  | [optional] [readonly]
**isPageindex** | **bool** |  | [optional]
**modelId** | **string** |  | [optional] [readonly]
**siteUrl** | **string** |  | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**versions** | [**\EmonsiteApi\Models\PageVJsonld[]**](PageVJsonld.md) | IMPLEMENTEZ le mapping dans l&#39;entity TODO trouver comment le faire dynamiquement avec un listener doctrine | [optional]
**version** | [**\EmonsiteApi\Models\VersionInterfaceJsonld[]**](VersionInterfaceJsonld.md) |  | [optional]
**defaultLang** | **string** |  | [optional] [readonly]
**versionByLang** | **string[]** |  | [optional]
**site** | [**\EmonsiteApi\Models\SiteJsonld**](SiteJsonld.md) |  | [optional]
**addDt** | **int** |  | [optional] [readonly]
**updDt** | **int** |  | [optional] [readonly]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**addUserId** | **string** |  | [optional]
**updUserId** | **string** |  | [optional]
**trashed** | **bool** |  | [optional] [readonly]
**trashDt** | **int** |  | [optional] [readonly]
**trashUserId** | **string** |  | [optional] [readonly]
**published** | **bool** |  | [optional]
**publishFrom** | **int** | Date de publication, passé ou future | [optional]
**category** | **string** |  | [optional]
**aliases** | [**\EmonsiteApi\Models\PageAliasJsonld[]**](PageAliasJsonld.md) | Faire la mapping dans l&#39;entity | [optional]
**alias** | **string[]** |  | [optional]
**block** | [**\EmonsiteApi\Models\PageJsonldBlock**](PageJsonldBlock.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
