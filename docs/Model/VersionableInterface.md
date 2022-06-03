# # VersionableInterface

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | [**\EmonsiteApi\Models\VersionInterface[]**](VersionInterface.md) |  | [optional]
**versions** | [**\EmonsiteApi\Models\StorageImageV[]**](StorageImageV.md) | IMPLEMENTEZ le mapping dans l&#39;entity TODO trouver comment le faire dynamiquement avec un listener doctrine | [optional]
**defaultLang** | **string** |  | [optional] [readonly]
**versionByLang** | **string[]** |  | [optional]
**weight** | **int** |  | [optional]
**mimeType** | **string** |  | [optional]
**storageFolder** | [**\EmonsiteApi\Models\VersionableInterfaceStorageFolder**](VersionableInterfaceStorageFolder.md) |  | [optional]
**transactionId** | **string** |  | [optional]
**width** | **mixed** |  | [optional] [readonly]
**height** | **mixed** |  | [optional] [readonly]
**dimensions** | **int** |  | [optional]
**ordering** | **int** |  | [optional]
**folder** | [**\EmonsiteApi\Models\VersionableInterfaceFolder**](VersionableInterfaceFolder.md) |  | [optional]
**id** | **string** |  | [optional] [readonly]
**storageName** | **string** |  | [optional]
**storagePath** | **string** | TODO juste setter un champ. | [optional]
**publicPath** | **string** |  | [optional]
**privatefilepath** | **string** |  | [optional] [readonly]
**privateFilename** | **string** |  | [optional] [readonly]
**publicFilename** | **string** |  | [optional] [readonly]
**publicFilePath** | **string** |  | [optional] [readonly]
**site** | [**\EmonsiteApi\Models\Site**](Site.md) |  | [optional]
**addDt** | **int** |  | [optional] [readonly]
**updDt** | **int** |  | [optional] [readonly]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**addUserId** | **string** |  | [optional]
**updUserId** | **string** |  | [optional]
**trashed** | **bool** |  | [optional] [readonly]
**trashDt** | **int** |  | [optional] [readonly]
**trashUserId** | **string** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
