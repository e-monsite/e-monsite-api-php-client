# # BlockCellInterface

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**width** | **float** | largeur de la cellule en pourcentage TODO pk nullable ? Si null, c&#39;est 100 ? | [optional]
**contentType** | **string** | Type de contenu de la cellule nullable car la cellule peut ne pas être configuré mais quand même être enregistré TODO constantes pour chaque types | [optional]
**widgetId** | **string** | Identifiant du widget si la cellule est de ce type TODO ? Ca peut etre quoi d&#39;autre ? Tout est censé être un widget | [optional]
**widgetVariant** | **string** | Identifiant de la variation du widget (je sais pas ce que c&#39;est) | [optional]
**cssClass** | **string** |  | [optional]
**cssId** | **string** |  | [optional]
**cssStyle** | **string** | Preset CSS de la cellule (quid ?) | [optional]
**position** | **int** |  | [optional]
**designOptions** | **string** | Pour sauvegarder les options de design | [optional]
**line** | [**\EmonsiteApi\Models\BlockLineInterface**](BlockLineInterface.md) |  | [optional]
**version** | [**\EmonsiteApi\Models\VersionInterface[]**](VersionInterface.md) | La version dans la langue demandé ou la langue par défault | [optional]
**versions** | [**\EmonsiteApi\Models\VersionInterface[]**](VersionInterface.md) |  | [optional]
**defaultLang** | **string** |  | [optional] [readonly]
**versionByLang** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
