# # VersionableInterface

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | [**\EmonsiteApi\Models\VersionInterface[]**](VersionInterface.md) |  | [optional]
**versions** | [**\EmonsiteApi\Models\BrandMailtemplateV[]**](BrandMailtemplateV.md) | IMPLEMENTEZ le mapping dans l&#39;entity TODO trouver comment le faire dynamiquement avec un listener doctrine | [optional]
**defaultLang** | **string** |  | [optional] [readonly]
**versionByLang** | **string[]** |  | [optional]
**brand** | **string** |  | [optional] [readonly]
**name** | **string** | a l&#39;air d&#39;être useless vu que c&#39;est le nom de la brand qui est repris en fait. | [optional] [readonly]
**description** | **string** | encore plus useless | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**creator** | **string** |  | [optional]
**updator** | **string** |  | [optional]
**addDt** | **int** |  | [optional] [readonly]
**updDt** | **int** |  | [optional] [readonly]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
