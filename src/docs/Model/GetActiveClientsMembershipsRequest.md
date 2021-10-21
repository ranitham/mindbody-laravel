# GetActiveClientsMembershipsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientIds** | **string[]** | The ID&#39;s of the clients whose membership was requested. | 
**LocationId** | **int** | The ID of the location where the requested membership was created. | [optional] 
**CrossRegionalLookup** | **bool** | Used to retrieve a client’s memberships from multiple sites within an organization. When included and set to &#x60;true&#x60;, it searches a maximum of ten sites with which this client is associated. When a client is associated with more than ten sites, use &#x60;ClientAssociatedSitesOffset&#x60; as many times as needed to search the additional sites with which the client is associated. You can use the &#x60;CrossRegionalClientAssociations&#x60; value from &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites the client is associated with. Note that a &#x60;SiteID&#x60; is returned and populated in the &#x60;ClientServices&#x60; response when &#x60;CrossRegionalLookup&#x60; is set to &#x60;true&#x60;.  Default: **false** | [optional] 
**ClientAssociatedSitesOffset** | **int** | Used to retrieve a client’s memberships from multiple sites within an organization when the client is associated with more than ten sites. To change which ten sites are searched, change this offset value. A value of 0 means that no sites are skipped and the first ten sites are returned. You can use the &#x60;CrossRegionalClientAssociations&#x60; value from &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites the client is associated with. Note that you must always have &#x60;CrossRegionalLookup&#x60; set to &#x60;true&#x60; to use this parameter.&lt;br /&gt;  Default: **0**    For example, if a client is associated with 25 sites, you need to call &#x60;GetClientServices&#x60; three times, as follows:  * Use &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites a client is associated with, which tells you how many additional calls you need to make.  * Either omit &#x60;ClientAssociatedSitesOffset&#x60; or set it to 0 to return the client’s services (pricing options) from sites 1-10.  * Set &#x60;ClientAssociatedSitesOffset&#x60; to 10 to return the client pricing options from sites 11-20  * Set &#x60;ClientAssociatedSitesOffset&#x60; to 20 to return the client pricing options from sites 21-25 | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


