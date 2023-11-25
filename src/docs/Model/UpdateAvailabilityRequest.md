# UpdateAvailabilityRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**AvailabilityIds** | **int[]** | Unique IDs for the availabilities or unavailabilities. | [optional] 
**PublicDisplay** | **string** | Choice that decides whether the availablity should be publicly visible, masked or hidden. | [optional] 
**DaysOfWeek** | **string[]** | The days of week to update the availabilities or unavailabilities.&lt;br /&gt;  Default: **All** | [optional] 
**ProgramIds** | **int[]** | The program Id to be set for the availabilities.  Default: **All** | [optional] 
**StartDateTime** | [**\DateTime**](\DateTime.md) | The start date and time for the availabilities or unavailabilities. | [optional] 
**EndDateTime** | [**\DateTime**](\DateTime.md) | The end date and time for the availabilities or unavailabilities. | [optional] 
**LocationId** | **int** | The location Id to be updated for the provided availability Ids. | [optional] 
**UnavailableDescription** | **string** | The description for unavailability. | [optional] 
**Test** | **bool** | When &#x60;true&#x60;, the request ensures that its parameters are valid without affecting real data.  When &#x60;&#x60;false&#x60;, the request performs as intended and may affect live client data.  Default: **false** | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


