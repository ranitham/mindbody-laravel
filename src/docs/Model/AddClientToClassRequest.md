# AddClientToClassRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | **string** | The ID of the client who is being booked into the class | 
**ClassId** | **int** | The ID of the class into which the client is being booked | 
**Test** | **bool** | When &#x60;true&#x60;, indicates that input information is validated, but not committed.&lt;br /&gt;  When &#x60;false&#x60;, the information is committed and the database is affected.&lt;br /&gt;  Default: **false** | [optional] 
**RequirePayment** | **bool** | When &#x60;true&#x60;, the client must have an active, usable pricing option on their account.&lt;br /&gt;  When &#x60;false&#x60; or omitted, an active pricing option is not required to complete the client’s booking. | [optional] 
**Waitlist** | **bool** | When &#x60;true&#x60;, indicates that the client should be added to a specific class waiting list.&lt;br /&gt;  When &#x60;false&#x60;, the client should not be added to the waiting list. | [optional] 
**SendEmail** | **bool** | When &#x60;true&#x60;, the subscriber’s configured Booking Confirmation automatic email is sent to the client. Note that an email is sent only if the client has an email address and automatic emails have been set up.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the client does not receive emails.&lt;br /&gt;  Default: **false** | [optional] 
**WaitlistEntryId** | **int** | The ID of the waiting list entry from which you are moving a client into a class. | [optional] 
**ClientServiceId** | **int** | The ID of the pricing option on the client’s account that you want to use to pay for this booking, if payment is required at the time of the update. | [optional] 
**CrossRegionalBooking** | **bool** | When &#x60;true&#x60;, cross regional series are checked and used if applicable. | [optional] 
**CrossRegionalBookingClientServiceSiteId** | **int** | If the request is cross regional, use a purchased pricing option from this specified site. If omitted, an attempt is made to use an applicable pricing option from the local site. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


