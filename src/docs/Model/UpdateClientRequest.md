# UpdateClientRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Client** | [**\Nlocascio\Mindbody\Model\ClientWithSuspensionInfo**](ClientWithSuspensionInfo.md) | Contains information about the client to be updated. The client ID is used to look up the existing client to update and any specified values are updated. | 
**Test** | **bool** | When &#x60;true&#x60;, indicates that test mode is enabled. The method is validated, but no client data is added or updated.&lt;br /&gt;  Default: **false** | [optional] 
**CrossRegionalUpdate** | **bool** | When &#x60;true&#x60;, the updated information is propagated to all of the region’s sites where the client has a profile.&lt;br /&gt;  When &#x60;false&#x60;, only the local client is updated.&lt;br /&gt;  Default: **true** | [optional] 
**NewId** | **string** | The new RSSID to be used for the client. Use &#x60;NewId&#x60; to assign a specific number to be a client’s ID. If that number is not available, the call returns an error. This RSSID must be unique within the subscriber’s site. If this is a cross-regional update, the RSSID must be unique across the region. If the requested number is already in use, an error is returned. | [optional] 
**LeadChannelId** | **int** | The ID of the Lead Channel ID from lead management. If this is supplied then it will map lead channel on the lead management.  If this is not supplied then it will have Publicapi LeadChannelId.  This parameters required to track the lead channel if new client added to the location. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


