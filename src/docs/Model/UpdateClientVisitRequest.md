# UpdateClientVisitRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**VisitId** | **int** | The ID of the visit to be updated. | 
**Makeup** | **bool** | When &#x60;true&#x60;, indicates that the visit is eligible to be made up. | [optional] 
**SignedIn** | **bool** | When &#x60;true&#x60;, indicates that the client has signed in for the visit. | [optional] 
**ClientServiceId** | **int** | The ID of the service to assign to the visit. | [optional] 
**Execute** | **string** | The execute code used to update this visit. Possible values are:  * Cancel  * Latecancel  * Unlatecancel | [optional] 
**Test** | **bool** | When &#x60;true&#x60;, indicates that test mode is enabled. When test mode is enabled, input information is validated, but not committed.&lt;br /&gt;  Default: **false** | [optional] 
**SendEmail** | **bool** | When &#x60;true&#x60;, indicates that the client should be sent an email for cancellations. Note that email is not sent unless the client has an email address and automatic emails have been set up correctly.&lt;br /&gt;  Default: **false** | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


