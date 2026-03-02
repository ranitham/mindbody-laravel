# ApiError

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Message** | **string** | The text of the message. Each message is specific to the error that caused it.  For example, if the the error type is &#x60;InvalidFileFormat&#x60;,   the message could say \&quot;The photo you attempted to upload is not a supported file type.\&quot; | [optional] 
**Code** | **string** | The type of error that occurred, for example, &#x60;ClientNotFound&#x60; or &#x60;InvalidClassId&#x60;. | [optional] 
**ReasonCode** | **string** | An optional reason code that provides additional context for the error.  For example, when Code is \&quot;ClassRequiresPayment\&quot;, ReasonCode may be \&quot;UnpaidLimitExceeded\&quot;  to indicate the booking failed because the client exceeded their unpaid booking limit.  This field is only present for specific error scenarios and should be safely ignored  if not recognized by the client. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


