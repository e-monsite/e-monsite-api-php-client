# # AssocStructurePayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**structure** | [**\EmonsiteApi\Models\StructurePayment**](StructurePayment.md) |  | [optional]
**paymentId** | **string** |  | [optional] [readonly]
**params** | **string** |  | [optional] [readonly]
**impact** | **string** |  | [optional] [readonly]
**impactPercent** | **string** |  | [optional] [readonly]
**amountDisplay** | **string** |  | [optional] [readonly]
**active** | **bool** |  | [optional]
**ordering** | **int** |  | [optional] [readonly]
**type** | **string** |  | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**addUserId** | **string** |  | [optional]
**updUserId** | **string** |  | [optional]
**addDt** | **int** |  | [optional] [readonly]
**updDt** | **int** |  | [optional] [readonly]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**site** | [**\EmonsiteApi\Models\Site**](Site.md) |  | [optional]
**versions** | [**\EmonsiteApi\Models\AssocStructurePaymentV[]**](AssocStructurePaymentV.md) | IMPLEMENTEZ le mapping dans l&#39;entity TODO trouver comment le faire dynamiquement avec un listener doctrine | [optional]
**version** | [**\EmonsiteApi\Models\VersionInterface[]**](VersionInterface.md) |  | [optional]
**defaultLang** | **string** |  | [optional] [readonly]
**versionByLang** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
