# UpdateClientServiceRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ServiceId** | **int** | The ID of the service to update. | 
**ActiveDate** | [**\DateTime**](\DateTime.md) | The date that the service became active. | [optional] 
**ExpirationDate** | [**\DateTime**](\DateTime.md) | The date that the service is to expire. | [optional] 
**Count** | **int** | The number of client service sessions to update. | [optional] 
**Test** | **bool** | When &#x60;true&#x60;, indicates that input information is to be validated, but not committed.&lt;br /&gt;  When &#x60;false&#x60; or omitted, the database is affected.&lt;br /&gt;  Default: **false** | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


