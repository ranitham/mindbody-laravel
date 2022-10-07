# RemoveClientsFromClassesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Details** | [**\Nlocascio\Mindbody\Model\ClassClientDetail[]**](ClassClientDetail.md) | List of Class Client detail object to remove | [optional] 
**Test** | **bool** | When &#x60;true&#x60;, the request ensures that its parameters are valid without affecting real data.&lt;br /&gt;  When &#x60;false&#x60;, the request performs as intended and may affect live client data.&lt;br /&gt;  Default: **false** | [optional] 
**SendEmail** | **bool** | When &#x60;true&#x60;, indicates that the client should be sent an email. Depending on the site and client settings, an email may or may not be sent.&lt;br /&gt;  Default: **false** | [optional] 
**LateCancel** | **bool** | When &#x60;true&#x60;, indicates that the client is to be late cancelled from the class.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the client is to be early cancelled from the class.&lt;br /&gt;  Default: **false** | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


