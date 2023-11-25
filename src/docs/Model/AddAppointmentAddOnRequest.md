# AddAppointmentAddOnRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ApplyPayment** | **bool** | When &#x60;true&#x60;, indicates that a payment should be applied to the appointment. Currently only ApplyPayment&#x3D;false is implemented.  Default: **true** | [optional] 
**AppointmentId** | **int** | The appointment ID the add-on is getting added to. | [optional] 
**SessionTypeId** | **int** | The session type associated with the new appointment add-on. | [optional] 
**StaffId** | **int** | The ID of the staff member who is adding the new appointment add-on.  Default: staff member performing the appointment. | [optional] 
**Test** | **bool** | When &#x60;true&#x60;, indicates that the method is to be validated, but no new appointment add-on data is added.  Default: **false** | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


