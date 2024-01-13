# AddClassEnrollmentScheduleRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClassDescriptionId** | **int** | The Id of the class/enrollment description. This can be found in GetClassDescriptions. | [optional] 
**LocationId** | **int** | The Location Id of the enrollment schedule. | [optional] 
**StartDate** | [**\DateTime**](\DateTime.md) | The start date of the enrollment schedule. | [optional] 
**EndDate** | [**\DateTime**](\DateTime.md) | The end date of the enrollment schedule. | [optional] 
**StartTime** | [**\DateTime**](\DateTime.md) | Enrollment start time (use null or omit for TBD). | [optional] 
**EndTime** | [**\DateTime**](\DateTime.md) | Enrollment end time (ignored if StartTime is null or omitted). | [optional] 
**DaySunday** | **bool** | If the enrollment occurs on Sunday(s). | [optional] 
**DayMonday** | **bool** | If the enrollment occurs on Monday(s). | [optional] 
**DayTuesday** | **bool** | If the enrollment occurs on Tuesday(s). | [optional] 
**DayWednesday** | **bool** | If the enrollment occurs on Wednesday(s). | [optional] 
**DayThursday** | **bool** | If the enrollment occurs on Thursday(s). | [optional] 
**DayFriday** | **bool** | If the enrollment occurs on Friday(s). | [optional] 
**DaySaturday** | **bool** | If the enrollment occurs on Saturday(s). | [optional] 
**StaffId** | **int** | The staff member teaching the enrollment. | [optional] 
**StaffPayRate** | **int** | The staff pay rate. Must be between 1-21. | [optional] 
**ResourceId** | **int** | The room where the enrollment is taking place. | [optional] 
**MaxCapacity** | **int** | How many people can attend. | [optional] 
**WebCapacity** | **int** | How many people can signup online.  Default: **0** | [optional] 
**WaitlistCapacity** | **int** | How many people can waitlist.  Default:**0** | [optional] 
**BookingStatus** | **string** | One of: PaymentRequired, BookAndPayLater, Free | [optional] 
**AllowOpenEnrollment** | **bool** | Allow clients to choose which sessions they’d like to sign up for.  Default: **false** | [optional] 
**AllowDateForwardEnrollment** | **bool** | Allow booking after the enrollment has started.  Default: **false** | [optional] 
**PricingOptionsProductIds** | **int[]** | Pricing Options for this schedule | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


