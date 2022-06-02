# # SiteJsonldMemberOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | **string** |  | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**type** | **string** |  | [optional] [readonly]
**memberSpaceEnabled** | **bool** |  | [optional]
**defaultMembergroupIds** | **string** | TODO qqch de plus propre genre type array | [optional]
**profileEnabled** | **bool** |  | [optional]
**displayToMemberOnly** | **bool** |  | [optional]
**profileMembergroup** | [**\EmonsiteApi\Models\MemberoptionsJsonldProfileMembergroup**](MemberoptionsJsonldProfileMembergroup.md) |  | [optional]
**displayEmail** | **bool** |  | [optional]
**displayRealName** | **bool** |  | [optional]
**registrationEnabled** | **bool** |  | [optional]
**registrationAutovalidate** | **bool** |  | [optional]
**hasActiveSubscription** | **bool** |  | [optional]
**subscriptionCurrency** | **string** |  | [optional]
**subscriptionCurrencyPosition** | **string** | TODO virer ça et faire en fonction de la langue ou que sais-je | [optional]
**membersSelfdelete** | **bool** | ? | [optional]
**redirectAfterLogin** | **bool** |  | [optional]
**redirectUrl** | **string** |  | [optional]
**redirectMethod** | **string** | TODO enum nullable | [optional]
**enableDisconnectMessage** | **bool** | serieusement ? c&#39;est quoi cette option à la con ? | [optional]
**redirectModuleId** | **string** |  | [optional]
**redirectModelId** | **string** |  | [optional]
**redirectCategoryId** | **string** | relation ? | [optional]
**redirectItemId** | **string** |  | [optional]
**id** | **string** |  | [optional] [readonly]
**site** | [**\EmonsiteApi\Models\SiteJsonld**](SiteJsonld.md) |  | [optional]
**versions** | [**\EmonsiteApi\Models\MemberoptionsVJsonld[]**](MemberoptionsVJsonld.md) | IMPLEMENTEZ le mapping dans l&#39;entity TODO trouver comment le faire dynamiquement avec un listener doctrine | [optional]
**version** | [**\EmonsiteApi\Models\VersionInterfaceJsonld[]**](VersionInterfaceJsonld.md) |  | [optional]
**defaultLang** | **string** |  | [optional] [readonly]
**versionByLang** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
