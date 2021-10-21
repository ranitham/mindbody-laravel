# AssignStaffSessionTypeRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**StaffId** | **int** | Id of the staff memeber | 
**SessionTypeId** | **int** | Id of the session type to assign to the staff | 
**Active** | **bool** | Whether the the staff members association to this session type is active. | 
**TimeLength** | **int** |  | [optional] 
**PrepTime** | **int** | Prep time in minutes | [optional] 
**FinishTime** | **int** | Finish time in minutes | [optional] 
**PayRateType** | **string** | The pay rate type. Can be one of the following (case insensitive):     Percent     Flat     No Pay | [optional] 
**PayRateAmount** | **double** | The pay rate amount. It&#39;s units are based on the PayRateType | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


