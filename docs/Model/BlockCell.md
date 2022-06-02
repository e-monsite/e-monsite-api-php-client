# # BlockCell

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line** | [**\EmonsiteApi\Models\BlockLine**](BlockLine.md) |  | [optional]
**width** | **string** |  | [optional]
**contentType** | **string** |  | [optional]
**widgetId** | **string** |  | [optional]
**widgetVariant** | **string** |  | [optional]
**cssClass** | **string** |  | [optional]
**cssId** | **string** |  | [optional]
**cssStyle** | **string** |  | [optional]
**position** | **int** |  | [optional]
**designOptions** | **string** | TODO type json pour avoir un array direct | [optional]
**id** | **string** |  | [optional] [readonly]
**versions** | [**\EmonsiteApi\Models\BlockCellV[]**](BlockCellV.md) | IMPLEMENTEZ le mapping dans l&#39;entity TODO trouver comment le faire dynamiquement avec un listener doctrine | [optional]
**version** | [**\EmonsiteApi\Models\VersionInterface[]**](VersionInterface.md) |  | [optional]
**defaultLang** | **string** |  | [optional] [readonly]
**versionByLang** | **string[]** |  | [optional]
**site** | [**\EmonsiteApi\Models\Site**](Site.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
