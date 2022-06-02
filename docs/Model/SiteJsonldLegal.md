# # SiteJsonldLegal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | **string** |  | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**type** | **string** |  | [optional] [readonly]
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
**cookies** | [**\EmonsiteApi\Models\LegalCookieJsonld[]**](LegalCookieJsonld.md) |  | [optional]
**customCookies** | [**\EmonsiteApi\Models\LegalCookieJsonld[]**](LegalCookieJsonld.md) |  | [optional] [readonly]
**cookie** | [**\EmonsiteApi\Models\LegalCookieJsonld[]**](LegalCookieJsonld.md) |  | [optional]
**cguPage** | [**\EmonsiteApi\Models\LegalJsonldCguPage**](LegalJsonldCguPage.md) |  | [optional]
**cgvPage** | [**\EmonsiteApi\Models\LegalJsonldCguPage**](LegalJsonldCguPage.md) |  | [optional]
**id** | **string** |  | [optional] [readonly]
**site** | [**\EmonsiteApi\Models\SiteJsonld**](SiteJsonld.md) |  | [optional]
**addDt** | **int** |  | [optional] [readonly]
**updDt** | **int** |  | [optional] [readonly]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**addUserId** | **string** |  | [optional]
**updUserId** | **string** |  | [optional]
**versions** | [**\EmonsiteApi\Models\LegalVJsonld[]**](LegalVJsonld.md) | IMPLEMENTEZ le mapping dans l&#39;entity TODO trouver comment le faire dynamiquement avec un listener doctrine | [optional]
**version** | [**\EmonsiteApi\Models\VersionInterfaceJsonld[]**](VersionInterfaceJsonld.md) |  | [optional]
**defaultLang** | **string** |  | [optional] [readonly]
**versionByLang** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
