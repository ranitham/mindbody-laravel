# RemoveClientFromClassRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | **string** | The RSSID of the client to remove from the specified class. | 
**ClassId** | **int** | The ID of the class that you want to remove the client from. | 
**Test** | **bool** | When &#x60;true&#x60;, the request ensures that its parameters are valid without affecting real data.&lt;br /&gt;  When &#x60;false&#x60;, the request performs as intended and may affect live client data.&lt;br /&gt;  Default: **false** | [optional] 
**SendEmail** | **bool** | When &#x60;true&#x60;, indicates that the client should be sent an email. Depending on the site and client settings, an email may or may not be sent.&lt;br /&gt;  Default: **false**  Note: When the Authorization header is passed and the SendEmail is set to &#x60;true&#x60;, then an email will be sent.  When the Authorization header is passed and the SendEmail is set to &#x60;false&#x60;, then an email will not be sent.  When the Authorization header is not passed and the SendEmail is set to either &#x60;true&#x60; or &#x60;false&#x60;, then an email will not be sent. | [optional] 
**LateCancel** | **bool** | When &#x60;true&#x60;, indicates that the client is to be late cancelled from the class.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the client is to be early cancelled from the class.&lt;br /&gt;  Default: **false** | [optional] 
**VisitId** | **int** | The ID of the client visit that you want to remove from the class.  Default: **0** | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


