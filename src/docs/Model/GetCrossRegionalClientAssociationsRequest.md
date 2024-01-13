# GetCrossRegionalClientAssociationsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | **string** | Looks up the cross regional associations by the client’s ID. Either &#x60;ClientId&#x60; or &#x60;Email&#x60; must be provided. If both are provided, the &#x60;ClientId&#x60; is used by default. | [optional] 
**Email** | **string** | Looks up the cross regional associations by the client’s email address. Either &#x60;ClientId&#x60; or &#x60;Email&#x60; must be provided. If both are provided, the &#x60;ClientId&#x60; is used by default. | [optional] 
**FirstName** | **string** | First name (used for email queries) | [optional] 
**LastName** | **string** | Last name (used for email queries) | [optional] 
**V2** | **bool** | Use newer method | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


