# AddContactLogRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | **string** | The ID of the client whose contact log is being added. | 
**AssignedToStaffId** | **int** | The ID of the staff member to whom the contact log is assigned. | [optional] 
**Text** | **string** | The body of the contact log. | [optional] 
**FollowupByDate** | [**\DateTime**](\DateTime.md) | The date by which the assigned staff member should complete this contact log. | [optional] 
**ContactMethod** | **string** | How the client wants to be contacted. | 
**ContactName** | **string** | The name of the person to be contacted by the assigned staff member. | [optional] 
**IsComplete** | **bool** | When &#x60;true&#x60;, indicates that the contact log is complete.  When &#x60;false&#x60;, indicates the contact log isn’t complete. | [optional] 
**Comments** | **string[]** | Any comments on the contact log. | [optional] 
**Types** | [**\Nlocascio\Mindbody\Model\AddContactLogType[]**](AddContactLogType.md) | The contact log types used to tag this contact log. | [optional] 
**Test** | **bool** | When &#x60;true&#x60;, indicates that this is a test request and no data is inserted into the subscriber’s database.&lt;br /&gt;  When &#x60;false&#x60;, the database is updated. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


