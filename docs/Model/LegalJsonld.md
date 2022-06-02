# LegalJsonld

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | **string** |  | [optional] 
**id** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**legal_mention_active** | **bool** |  | [optional] 
**legalform** | **string** | TODO enum | [optional] 
**headquarter** | **string** |  | [optional] 
**capital** | **string** |  | [optional] 
**legalname** | **string** |  | [optional] 
**boss_legalname** | **string** |  | [optional] 
**firstname** | **string** |  | [optional] 
**lastname** | **string** |  | [optional] 
**address** | **string** |  | [optional] 
**country** | **string** |  | [optional] 
**phone** | **string** |  | [optional] 
**rcs** | **string** |  | [optional] 
**cgu_active** | **bool** |  | [optional] 
**retraction_active** | **bool** |  | [optional] 
**cookie_active** | **bool** |  | [optional] 
**privacy_policy_active** | **bool** |  | [optional] 
**cookies** | [**\Emonsite\Models\LegalCookieJsonld[]**](LegalCookieJsonld.md) |  | [optional] 
**custom_cookies** | [**\Emonsite\Models\LegalCookieJsonld[]**](LegalCookieJsonld.md) |  | [optional] 
**cookie** | [**\Emonsite\Models\LegalCookieJsonld[]**](LegalCookieJsonld.md) |  | [optional] 
**cgu_page** | [**AnyOfLegalJsonldCguPage**](AnyOfLegalJsonldCguPage.md) |  | [optional] 
**cgv_page** | [**AnyOfLegalJsonldCgvPage**](AnyOfLegalJsonldCgvPage.md) |  | [optional] 
**id** | **string** |  | [optional] 
**site** | [**\Emonsite\Models\SiteJsonld**](SiteJsonld.md) |  | [optional] 
**add_dt** | **int** |  | [optional] 
**upd_dt** | **int** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**add_user_id** | **string** |  | [optional] 
**upd_user_id** | **string** |  | [optional] 
**versions** | [**\Emonsite\Models\LegalVJsonld[]**](LegalVJsonld.md) | IMPLEMENTEZ le mapping dans l&#x27;entity TODO trouver comment le faire dynamiquement avec un listener doctrine | [optional] 
**version** | [**\Emonsite\Models\VersionInterfaceJsonld[]**](VersionInterfaceJsonld.md) |  | [optional] 
**default_lang** | **string** |  | [optional] 
**version_by_lang** | **string[]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

