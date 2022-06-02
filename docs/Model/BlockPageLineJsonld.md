# # BlockPageLineJsonld

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | **string** |  | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**type** | **string** |  | [optional] [readonly]
**block** | [**\EmonsiteApi\Models\BlockPageLineJsonldBlock**](BlockPageLineJsonldBlock.md) |  | [optional]
**cssClass** | **string** |  | [optional]
**cssId** | **string** |  | [optional]
**cssStyle** | **string** |  | [optional]
**height** | **int** |  | [optional]
**position** | **int** |  | [optional]
**pagination** | **bool** |  | [optional]
**options** | **string[]** |  | [optional]
**cells** | [**\EmonsiteApi\Models\BlockPageCellJsonld[]**](BlockPageCellJsonld.md) | FAIRE LE MAPPING DANS L&#39;ENTITY | [optional]
**cell** | [**\EmonsiteApi\Models\BlockCellInterfaceJsonld[]**](BlockCellInterfaceJsonld.md) |  | [optional]
**defaultLang** | **string** |  | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**versions** | [**\EmonsiteApi\Models\BlockPageLineVJsonld[]**](BlockPageLineVJsonld.md) | IMPLEMENTEZ le mapping dans l&#39;entity TODO trouver comment le faire dynamiquement avec un listener doctrine | [optional]
**version** | [**\EmonsiteApi\Models\VersionInterfaceJsonld[]**](VersionInterfaceJsonld.md) |  | [optional]
**versionByLang** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
