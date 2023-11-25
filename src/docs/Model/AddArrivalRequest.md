# AddArrivalRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | **string** | The ID of the requested client. | 
**LocationId** | **int** | The ID of the location for the requested arrival. | 
**ArrivalTypeId** | **int** | The ID of the arrival program (service category) under which this arrival is to be logged. If this is not provided, the program ID of the first arrival pricing option found will be used.  OPTIONAL: will take first payment found if not provided | [optional] 
**LeadChannelId** | **int** | The ID of the Lead Channel ID from lead management. If this is supplied then it will map lead channel on the lead management.  If this is not supplied then it wont save anything.  This parameters required to track the lead channel if new client added while adding arrival of client on non home location. | [optional] 
**Test** | **bool** | When &#x60;true&#x60;, indicates that the arrival log is to be validated, but no new arrival data is added. When &#x60;false&#x60;, the arrival is logged and the database is affected.  Default: **false** | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


