# # SiteLegal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legalMentionActive** | **bool** |  | [optional]
**legalform** | **string** | TODO enum | [optional]
**headquarter** | **string** |  | [optional]
**capital** | **string** |  | [optional]
**legalname** | **string** |  | [optional]
**bossLegalname** | **string** |  | [optional]
**firstname** | **string** |  | [optional]
**lastname** | **string** |  | [optional]
**address** | **string** |  | [optional]
**country** | **string** |  | [optional]
**phone** | **string** |  | [optional]
**rcs** | **string** |  | [optional]
**cguActive** | **bool** |  | [optional]
**retractionActive** | **bool** |  | [optional]
**cookieActive** | **bool** |  | [optional]
**privacyPolicyActive** | **bool** |  | [optional]
**cookies** | [**\EmonsiteApi\Models\LegalCookie[]**](LegalCookie.md) |  | [optional]
**customCookies** | [**\EmonsiteApi\Models\LegalCookie[]**](LegalCookie.md) |  | [optional] [readonly]
**cookie** | [**\EmonsiteApi\Models\LegalCookie[]**](LegalCookie.md) |  | [optional]
**cguPage** | [**\EmonsiteApi\Models\LegalCguPage**](LegalCguPage.md) |  | [optional]
**cgvPage** | [**\EmonsiteApi\Models\LegalCguPage**](LegalCguPage.md) |  | [optional]
**id** | **string** |  | [optional] [readonly]
**site** | [**\EmonsiteApi\Models\Site**](Site.md) |  | [optional]
**addDt** | **int** |  | [optional] [readonly]
**updDt** | **int** |  | [optional] [readonly]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**addUserId** | **string** |  | [optional]
**updUserId** | **string** |  | [optional]
**versions** | [**\EmonsiteApi\Models\LegalV[]**](LegalV.md) | IMPLEMENTEZ le mapping dans l&#39;entity TODO trouver comment le faire dynamiquement avec un listener doctrine | [optional]
**version** | [**\EmonsiteApi\Models\VersionInterface[]**](VersionInterface.md) |  | [optional]
**defaultLang** | **string** |  | [optional] [readonly]
**versionByLang** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
