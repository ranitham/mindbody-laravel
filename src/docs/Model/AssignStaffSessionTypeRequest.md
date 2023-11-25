# AssignStaffSessionTypeRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**StaffId** | **int** | The ID of the staff member session type is getting assigned to. The staff member must be assignable to appointments or already be assigned to the session type in the request. | 
**SessionTypeId** | **int** | The ID of the session type that is getting assigned to the staff member. The session type must be an appointment. | 
**Active** | **bool** | Indicates if assignment is active. Passing &#x60;false&#x60; is equivalent to deleting the assignment. | 
**TimeLength** | **int** | The staff specific amount of time that a session of this type typically lasts. | [optional] 
**PrepTime** | **int** | Prep time in minutes | [optional] 
**FinishTime** | **int** | Finish time in minutes | [optional] 
**PayRateType** | **string** | The pay rate type. Can be one of the following (case insensitive):     Percent     Flat     No Pay     If PayRateType is not provided in the request and the request is creating a completely new assignment (not editing an existing active or inactive assignment), then the staff member default pay rate and pay rate amount are used to create the assignment. Otherwise, the existing assignment values are used for any optional request parameters not included in the request. | [optional] 
**PayRateAmount** | **double** | The pay rate amount for the specific staff member. It is parsed according to the PayRateType. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


