# PageJsonld

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | **string** |  | [optional] 
**id** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**alias_class** | **string** |  | [optional] 
**pageindex** | **bool** |  | [optional] 
**is_pageindex** | **bool** |  | [optional] 
**model_id** | **string** |  | [optional] 
**site_url** | **string** |  | [optional] 
**id** | **string** |  | [optional] 
**versions** | [**\EmonsiteApi\Models\PageVJsonld[]**](PageVJsonld.md) | IMPLEMENTEZ le mapping dans l&#x27;entity TODO trouver comment le faire dynamiquement avec un listener doctrine | [optional] 
**version** | [**\EmonsiteApi\Models\VersionInterfaceJsonld[]**](VersionInterfaceJsonld.md) |  | [optional] 
**default_lang** | **string** |  | [optional] 
**version_by_lang** | **string[]** |  | [optional] 
**site** | [**\EmonsiteApi\Models\SiteJsonld**](SiteJsonld.md) |  | [optional] 
**add_dt** | **int** |  | [optional] 
**upd_dt** | **int** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**add_user_id** | **string** |  | [optional] 
**upd_user_id** | **string** |  | [optional] 
**trashed** | **bool** |  | [optional] 
**trash_dt** | **int** |  | [optional] 
**trash_user_id** | **string** |  | [optional] 
**published** | **bool** |  | [optional] 
**publish_from** | **int** | Date de publication, passé ou future | [optional] 
**category** | **string** |  | [optional] 
**aliases** | [**\EmonsiteApi\Models\PageAliasJsonld[]**](PageAliasJsonld.md) | Faire la mapping dans l&#x27;entity | [optional] 
**alias** | **string[]** |  | [optional] 
**block** | [**AnyOfPageJsonldBlock**](AnyOfPageJsonldBlock.md) | FAIRE MAPPING DANS ENTITY | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

