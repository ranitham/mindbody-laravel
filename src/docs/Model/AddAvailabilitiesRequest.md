# AddAvailabilitiesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Test** | **bool** | Whether to use test mode. When test mode is enabled, the method will be validated,   but no availability data will be added or updated.&lt;br /&gt;  (optional) Defaults to false. | [optional] 
**LocationID** | **int** | Location of availability.  &lt;br /&gt;Not used when IsUnavailable is true. | [optional] 
**StaffIDs** | **int[]** | A list of requested staff IDs.&lt;br /&gt;  (optional) Defaults to staff ID of user credentials. Use 0 for all. | [optional] 
**ProgramIDs** | **int[]** | A list of program IDs.&lt;br /&gt;  (optional) Defaults to all.  &lt;br /&gt;Not used when IsUnavailable is true. | [optional] 
**StartDateTime** | [**\DateTime**](\DateTime.md) | The start date and time of the requested date range. | [optional] 
**EndDateTime** | [**\DateTime**](\DateTime.md) | The end date and time of the requested date range. | [optional] 
**DaysOfWeek** | **string[]** | The days of the week to set.&lt;br /&gt;  (optional) Defaults to all. | [optional] 
**UnavailableDescription** | **string** | Description of unavalability.  &lt;br /&gt;Only used when IsUnavailable is true. | [optional] 
**IsUnavailable** | **bool** | If the create is for an unavailability.&lt;br /&gt;  (optional) Defaults to false. | [optional] 
**PublicDisplay** | **string** | Sets the public display of the availability.&lt;br /&gt;&lt;ul&gt;&lt;li&gt;Show&lt;/li&gt;&lt;li&gt;Mask&lt;/li&gt;&lt;li&gt;Hide&lt;/li&gt;&lt;/ul&gt;  (optional) Defaults to Show. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


