# AssignStaffSessionTypeResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**StaffId** | **int** | Staff member assigned to the session type | [optional] 
**SessionTypeId** | **int** | The session type the staff member is assigned to | [optional] 
**PayRateType** | **string** | The pay rate type name  Can be: \&quot;Flat\&quot;, \&quot;Percent\&quot;, or \&quot;No Pay\&quot; | [optional] 
**PayRateAmount** | **double** | The pay rate amount. It is interpreted based on the value of PayRateTypeId | [optional] 
**TimeLength** | **int** | The staff specific amount of time that a session of this type typically lasts. | [optional] 
**PrepTime** | **int** | Prep time in minutes | [optional] 
**FinishTime** | **int** | Finish time in minutes | [optional] 
**Active** | **bool** | Whether this association is active | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


