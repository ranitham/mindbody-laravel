# UpdateClassEnrollmentScheduleRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClassId** | **int** | The class id, a block of schedules | [optional] 
**ClassDescriptionId** | **int** | Used only internally, overridden if sent | [optional] 
**LocationId** | **int** | The location where the class is taking place | [optional] 
**StartDate** | [**\DateTime**](\DateTime.md) | Class start time (use null for TBD) | [optional] 
**EndDate** | [**\DateTime**](\DateTime.md) | Class end time (ignored if StartTime is null) | [optional] 
**StartTime** | [**\DateTime**](\DateTime.md) | Class start time (use null for TBD) | [optional] 
**EndTime** | [**\DateTime**](\DateTime.md) | Class end time (ignored if StartTime is null) | [optional] 
**DaySunday** | **bool** | (optional) - If the class occurs on Sunday (ignored if EndDate is null) | [optional] 
**DayMonday** | **bool** | (optional) - If the class occurs on Monday (ignored if EndDate is null) | [optional] 
**DayTuesday** | **bool** | (optional) - If the class occurs on Tuesday (ignored if EndDate is null) | [optional] 
**DayWednesday** | **bool** | (optional) - If the class occurs on Wednesday (ignored if EndDate is null) | [optional] 
**DayThursday** | **bool** | (optional) - If the class occurs on Thursday (ignored if EndDate is null) | [optional] 
**DayFriday** | **bool** | (optional) - If the class occurs on Friday (ignored if EndDate is null) | [optional] 
**DaySaturday** | **bool** | (optional) - If the class occurs on Saturday (ignored if EndDate is null | [optional] 
**StaffId** | **int** | The staff member teaching the class | [optional] 
**StaffPayRate** | **int** | The staff pay rate | [optional] 
**ResourceId** | **int** | (optional) - The room where the class is taking place | [optional] 
**MaxCapacity** | **int** | How many people can attend | [optional] 
**WebCapacity** | **int** | How many people can signup online (if 0 clients cannot signup online) | [optional] 
**WaitlistCapacity** | **int** | One of: PaymentRequired, BookAndPayLater, Free | [optional] 
**BookingStatus** | **string** | One of: PaymentRequired, BookAndPayLater, Free | [optional] 
**AllowOpenEnrollment** | **bool** | Allow clients to choose which sessions they&#39;d like to sign up for | [optional] 
**AllowDateForwardEnrollment** | **bool** | Allow booking after the enrollment has started | [optional] 
**RetainScheduleChanges** | **bool** | Whether or not to retain manual schedule changes within the date range | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


