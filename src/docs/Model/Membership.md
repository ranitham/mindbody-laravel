# Membership

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**MembershipId** | **int** | The membership id. | [optional] 
**MembershipName** | **string** | The membership name. | [optional] 
**Priority** | **int** | The priority/sort order. | [optional] 
**MemberRetailDiscount** | **double** | The membership discount for retail as a percentage. | [optional] 
**MemberServiceDiscount** | **double** | The membership discount for services as a percentage. | [optional] 
**AllowClientsToScheduleUnpaid** | **bool** | Allow clients in this membership to schedule unpaid. | [optional] 
**OnlineBookingRestrictedToMembersOnly** | [**\Nlocascio\Mindbody\Model\ProgramMembership[]**](ProgramMembership.md) | List of programs that are restricted to clients in this membership only. | [optional] 
**DayOfMonthSchedulingOpensForNextMonth** | **int** | Day of month scheduling opens for next month.  Unrestricted is a null value. | [optional] 
**RestrictSelfSignInToMembersOnly** | **bool** | Restrict self sign in to members only. | [optional] 
**AllowMembersToBookAppointmentsWithoutPaying** | **bool** | Allow members to book appointments without paying. | [optional] 
**AllowMembersToPurchaseNonMembersServices** | **bool** | Allow members to purchase non-members services. | [optional] 
**AllowMembersToPurchaseNonMembersProducts** | **bool** | Allow members to purchase non-members products. | [optional] 
**IsActive** | **bool** | Indicates if the membership is active. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


