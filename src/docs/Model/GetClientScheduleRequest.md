# GetClientScheduleRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | **string** | The ID of the requested client. | [optional] 
**UniqueClientId** | **int** | The unique ID of the requested client.  Note: you need to provide the &#39;UniqueClientId&#39; OR the &#39;ClientId&#39;. If both are provided, the &#39;UniqueClientId&#39; takes precedence. | [optional] 
**ClientAssociatedSitesOffset** | **int** | The number of sites to skip when returning the site associated with a client. | [optional] 
**CrossRegionalLookup** | **bool** | When &#x60;true&#x60;, indicates that past and scheduled client visits across all sites in the region are returned.  When &#x60;false&#x60;, indicates that only visits at the current site are returned. | [optional] 
**EndDate** | [**\DateTime**](\DateTime.md) | The date past which class visits are not returned.  Default is today’s date | [optional] 
**StartDate** | [**\DateTime**](\DateTime.md) | The date before which class visits are not returned.  Default is the end date | [optional] 
**IncludeWaitlistEntries** | **bool** | When &#x60;true&#x60;, waitlist entries are included in the response.  When &#x60;false&#x60;, waitlist entries are removed from the response.  Default: **false** | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


