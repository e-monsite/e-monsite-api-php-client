# Memberoptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**member_space_enabled** | **bool** |  | [optional] 
**default_membergroup_ids** | **string** | TODO qqch de plus propre genre type array | [optional] 
**profile_enabled** | **bool** |  | [optional] 
**display_to_member_only** | **bool** |  | [optional] 
**profile_membergroup** | [**AnyOfMemberoptionsProfileMembergroup**](AnyOfMemberoptionsProfileMembergroup.md) | qui peut voir les profils utilisateurs | [optional] 
**display_email** | **bool** |  | [optional] 
**display_real_name** | **bool** |  | [optional] 
**registration_enabled** | **bool** |  | [optional] 
**registration_autovalidate** | **bool** |  | [optional] 
**has_active_subscription** | **bool** |  | [optional] 
**subscription_currency** | **string** |  | [optional] 
**subscription_currency_position** | **string** | TODO virer ça et faire en fonction de la langue ou que sais-je | [optional] 
**members_selfdelete** | **bool** | ? | [optional] 
**redirect_after_login** | **bool** |  | [optional] 
**redirect_url** | **string** |  | [optional] 
**redirect_method** | **string** | TODO enum nullable | [optional] 
**enable_disconnect_message** | **bool** | serieusement ? c&#x27;est quoi cette option à la con ? | [optional] 
**redirect_module_id** | **string** |  | [optional] 
**redirect_model_id** | **string** |  | [optional] 
**redirect_category_id** | **string** | relation ? | [optional] 
**redirect_item_id** | **string** |  | [optional] 
**id** | **string** |  | [optional] 
**site** | [**\EmonsiteApi\Models\Site**](Site.md) |  | [optional] 
**versions** | [**\EmonsiteApi\Models\MemberoptionsV[]**](MemberoptionsV.md) | IMPLEMENTEZ le mapping dans l&#x27;entity TODO trouver comment le faire dynamiquement avec un listener doctrine | [optional] 
**version** | [**\EmonsiteApi\Models\VersionInterface[]**](VersionInterface.md) |  | [optional] 
**default_lang** | **string** |  | [optional] 
**version_by_lang** | **string[]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

