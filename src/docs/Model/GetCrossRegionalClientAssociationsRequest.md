# GetCrossRegionalClientAssociationsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**UniqueClientId** | **int** | Looks up the cross regional associations by the unique client’s ID.  Note: you need to provide the &#39;UniqueClientId&#39; OR the &#39;ClientId&#39; OR the &#39;Email&#39;.   &#39;UniqueClientId&#39; takes precedence when provided. If not, but both &#39;ClientId&#39; and &#39;Email&#39; are provided, &#39;ClientId&#39; is used by default. | [optional] 
**ClientId** | **string** | Looks up the cross regional associations by the client’s ID. | [optional] 
**Email** | **string** | Looks up the cross regional associations by the client’s email address. | [optional] 
**FirstName** | **string** | First name (used for email queries) | [optional] 
**LastName** | **string** | Last name (used for email queries) | [optional] 
**V2** | **bool** | Use newer method | [optional] 
**ExcludeInactiveSites** | **bool** | Used to exclude inactive and deleted sites from the results.  When this flag is set to &#x60;true&#x60;, client profiles associated with inactive and deleted sites are not getting returned.  When this flag is set to &#x60;false&#x60;,client profiles associated with inactive and deleted sites are getting returned.  Default: **true** | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


