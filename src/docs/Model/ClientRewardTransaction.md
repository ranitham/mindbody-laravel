# ClientRewardTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ActionDateTime** | [**\DateTime**](\DateTime.md) | The date and time when the points were earned or redeemed in the site local time zone. | [optional] 
**Action** | **string** | Indicates if rewards were earned or redeemed. | [optional] 
**Source** | **string** | The source of the reward transaction. | [optional] 
**SourceID** | **int** | The unique identifier in the MINDBODY system for the **Source**. | [optional] 
**ExpirationDateTime** | [**\DateTime**](\DateTime.md) | The date and time when earned points expire. This is calculated based on site and client rewards settings. This date will be in the site local time zone and may be **null**. | [optional] 
**Points** | **int** | The amount of points the client earned or redeemed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


