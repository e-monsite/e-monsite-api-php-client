# User

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**add_dt** | **int** |  | [optional] 
**creator** | **string** |  | [optional] 
**add_user_ip** | **string** |  | [optional] 
**username** | **string** |  | [optional] 
**email** | **string** | TODO WARNING : des emails sont en chaine vide, probablement ems v1 - v3. Quid ? | [optional] 
**shard_id** | **string** |  | [optional] 
**name** | **string** |  | [optional] 
**tel** | **string** |  | [optional] 
**group** | **string** |  | [optional] 
**brand** | **string** |  | [optional] 
**displayrealname** | **bool** |  | [optional] 
**connection_token** | **string** |  | [optional] 
**deleted** | **bool** |  | [optional] 
**last_log_dt** | **int** | Timestamp de la dernière fois que le user à été vu sur le manager, MAJ 1x / jour | [optional] 
**mailchimp_email** | **string** |  | [optional] 
**remaining_sms** | **int** |  | [optional] 
**email_valid** | **bool** |  | [optional] 
**email_validation_token** | **string** |  | [optional] 
**email_validation_dt** | **int** |  | [optional] 
**nb_reminder_validation_mail_sent** | **int** |  | [optional] 
**chatbot_active** | **bool** |  | [optional] 
**site_users** | **string[]** |  | [optional] 
**domains** | [**\EmonsiteApi\Models\UserDomain[]**](UserDomain.md) |  | [optional] 
**recent_updated_sites_users** | **string[]** | Les sites users ordered par last_log_dt | [optional] 
**recent_created_site_user** | **string[]** | Le dernier Siteuser créé | [optional] 
**agency_customer** | **bool** |  | [optional] 
**user_in_validation_period** | **bool** | Indique si le user est dans la \&quot;période de validation\&quot; de 30 jours après sa création | [optional] 
**email_verified** | **bool** |  | [optional] 
**site_user_marketing_send** | **string** | Retourne le Siteuser dont le flag marketing_email_send | [optional] 
**author_name** | **string** |  | [optional] 
**sessions** | **string[]** |  | [optional] 
**sso_accounts** | [**\EmonsiteApi\Models\UserSsoAccount[]**](UserSsoAccount.md) |  | [optional] 
**user_has_role** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

