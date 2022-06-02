# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**addDt** | **int** |  | [optional] [readonly]
**creator** | **string** |  | [optional] [readonly]
**addUserIp** | **string** |  | [optional]
**username** | **string** |  | [optional] [readonly]
**email** | **string** | TODO WARNING : des emails sont en chaine vide, probablement ems v1 - v3. Quid ? | [optional]
**shardId** | **string** |  | [optional] [readonly]
**name** | **string** |  | [optional]
**tel** | **string** |  | [optional]
**group** | **string** |  | [optional] [readonly]
**brand** | **string** |  | [optional] [readonly]
**displayrealname** | **bool** |  | [optional] [readonly]
**connectionToken** | **string** |  | [optional] [readonly]
**deleted** | **bool** |  | [optional]
**lastLogDt** | **int** | Timestamp de la dernière fois que le user à été vu sur le manager, MAJ 1x / jour | [optional]
**mailchimpEmail** | **string** |  | [optional] [readonly]
**remainingSms** | **int** |  | [optional] [readonly]
**emailValid** | **bool** |  | [optional] [readonly]
**emailValidationToken** | **string** |  | [optional] [readonly]
**emailValidationDt** | **int** |  | [optional] [readonly]
**nbReminderValidationMailSent** | **int** |  | [optional]
**chatbotActive** | **bool** |  | [optional] [readonly]
**siteUsers** | **string[]** |  | [optional] [readonly]
**domains** | [**\EmonsiteApi\Models\UserDomain[]**](UserDomain.md) |  | [optional] [readonly]
**recentUpdatedSitesUsers** | **string[]** | Les sites users ordered par last_log_dt | [optional] [readonly]
**recentCreatedSiteUser** | **string[]** | Le dernier Siteuser créé | [optional] [readonly]
**agencyCustomer** | **bool** |  | [optional] [readonly]
**userInValidationPeriod** | **bool** | Indique si le user est dans la \&quot;période de validation\&quot; de 30 jours après sa création | [optional] [readonly]
**emailVerified** | **bool** |  | [optional]
**siteUserMarketingSend** | **string** | Retourne le Siteuser dont le flag marketing_email_send | [optional] [readonly]
**authorName** | **string** |  | [optional] [readonly]
**sessions** | **string[]** |  | [optional] [readonly]
**ssoAccounts** | [**\EmonsiteApi\Models\UserSsoAccount[]**](UserSsoAccount.md) |  | [optional]
**userHasRole** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
