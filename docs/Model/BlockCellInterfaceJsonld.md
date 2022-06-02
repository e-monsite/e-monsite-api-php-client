# BlockCellInterfaceJsonld

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | **string** |  | [optional] 
**id** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**id** | **string** |  | [optional] 
**width** | **float** | largeur de la cellule en pourcentage TODO pk nullable ? Si null, c&#x27;est 100 ? | [optional] 
**content_type** | **string** | Type de contenu de la cellule nullable car la cellule peut ne pas être configuré mais quand même être enregistré TODO constantes pour chaque types | [optional] 
**widget_id** | **string** | Identifiant du widget si la cellule est de ce type TODO ? Ca peut etre quoi d&#x27;autre ? Tout est censé être un widget | [optional] 
**widget_variant** | **string** | Identifiant de la variation du widget (je sais pas ce que c&#x27;est) | [optional] 
**css_class** | **string** |  | [optional] 
**css_id** | **string** |  | [optional] 
**css_style** | **string** | Preset CSS de la cellule (quid ?) | [optional] 
**position** | **int** |  | [optional] 
**design_options** | **string** | Pour sauvegarder les options de design | [optional] 
**line** | [**\EmonsiteApi\Models\BlockLineInterfaceJsonld**](BlockLineInterfaceJsonld.md) |  | [optional] 
**version** | [**\EmonsiteApi\Models\VersionInterfaceJsonld[]**](VersionInterfaceJsonld.md) | La version dans la langue demandé ou la langue par défault | [optional] 
**versions** | [**\EmonsiteApi\Models\VersionInterfaceJsonld[]**](VersionInterfaceJsonld.md) |  | [optional] 
**default_lang** | **string** |  | [optional] 
**version_by_lang** | **string[]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

