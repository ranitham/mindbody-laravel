# GetClientVisitsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | **string** | The ID of the requested client. | 
**ClientAssociatedSitesOffset** | **int** | The number of sites to skip when returning the site associated with a client. | [optional] 
**CrossRegionalLookup** | **bool** | When &#x60;true&#x60;, indicates that past and scheduled client visits across all sites in the region are returned.&lt;br /&gt;  When &#x60;false&#x60;, indicates that only visits at the current site are returned. | [optional] 
**EndDate** | [**\DateTime**](\DateTime.md) | The date past which class visits are not returned.  Default: **today’s date** | [optional] 
**StartDate** | [**\DateTime**](\DateTime.md) | The date before which class visits are not returned.  Default: **the end date** | [optional] 
**UnpaidsOnly** | **bool** | When &#x60;true&#x60;, indicates that only visits that have not been paid for are returned.&lt;br /&gt;  When &#x60;false&#x60;, indicates that all visits are returned, regardless of whether they have been paid for.&lt;br /&gt;  Default: **false** | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


