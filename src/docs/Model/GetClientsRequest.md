# GetClientsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientIDs** | **string[]** | The requested client IDs.  Default: **all IDs** that the authenticated user’s access level allows.&lt;br /&gt;  Note: You can fetch information for maximum 20 clients at once. | [optional] 
**SearchText** | **string** | Text to use in the search. Can include FirstName, LastName, and Email. Note that user credentials must be provided. | [optional] 
**IsProspect** | **bool** | When &#x60;true&#x60;, filters the results to include only those clients marked as prospects for the business.&lt;br /&gt;  When &#x60;false&#x60;, indicates that only those clients who are not marked prospects should be returned. | [optional] 
**LastModifiedDate** | [**\DateTime**](\DateTime.md) | Filters the results to include only the clients that have been modified on or after this date. | [optional] 
**UniqueIds** | **int[]** | Filters results to clients with these &#x60;UniqueIDs&#x60;. This parameter cannot be used with &#x60;ClientIDs&#x60; or &#x60;SearchText&#x60;.  Default: **all UniqueIDs** that the authenticated user’s access level allows. | [optional] 
**IncludeInactive** | **bool** | When &#x60;true&#x60;, indicates the results to include active and inactive clients.&lt;br /&gt;  When &#x60;false&#x60;, indicates that only those clients who are marked as active should be returned.  Default: **false** | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


