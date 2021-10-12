# GetClassDescriptionsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClassDescriptionId** | **int** | Filters to the single result with the given ID. | [optional] 
**ProgramIds** | **int[]** | Filters results to class descriptions belonging to the given programs. | [optional] 
**StartClassDateTime** | [**\DateTime**](\DateTime.md) | Filters the results to class descriptions for scheduled classes that happen on or after the given date and time. | [optional] 
**EndClassDateTime** | [**\DateTime**](\DateTime.md) | Filters the results to class descriptions for scheduled classes that happen before the given date and time. | [optional] 
**StaffId** | **int** | Filters results to class descriptions for scheduled classes taught by the given staff member. | [optional] 
**LocationId** | **int** | Filters results to classes descriptions for schedule classes as the given location. | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


