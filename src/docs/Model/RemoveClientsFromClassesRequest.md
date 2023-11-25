# RemoveClientsFromClassesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Details** | [**\Nlocascio\Mindbody\Model\ClassClientDetail[]**](ClassClientDetail.md) | This object includes  &#x60;ClientIds&#x60;: List of the RSSID(string) of the clients to remove from the specified class.   &#x60;ClassId&#x60;: The ID(number) of the class that you want to remove the clients from. | [optional] 
**Test** | **bool** | When &#x60;true&#x60;, the request ensures that its parameters are valid without affecting real data.&lt;br /&gt;  When &#x60;false&#x60;, the request performs as intended and may affect live client data.&lt;br /&gt;  Default: **false** | [optional] 
**SendEmail** | **bool** | When &#x60;true&#x60;, indicates that the client should be sent an email. Depending on the site and client settings, an email may or may not be sent.&lt;br /&gt;  Default: **false**  **Note**: When the Authorization header is passed and the SendEmail is set to &#x60;true&#x60;, then an email will be sent.  When the Authorization header is passed and the SendEmail is set to &#x60;false&#x60;, then an email will not be sent.  When the Authorization header is not passed and the SendEmail is set to either &#x60;true&#x60; or &#x60;false&#x60;, then an email will not be sent. | [optional] 
**LateCancel** | **bool** | When &#x60;true&#x60;, indicates that the client is to be late cancelled from the class.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the client is to be early cancelled from the class.&lt;br /&gt;  Default: **false** | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


