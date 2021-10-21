# ContactLog

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Id** | **int** | The contact log’s ID. | [optional] 
**Text** | **string** | The contact log’s body text. | [optional] 
**CreatedDateTime** | [**\DateTime**](\DateTime.md) | The local date and time when the contact log was created. | [optional] 
**FollowupByDate** | [**\DateTime**](\DateTime.md) | The date by which the assigned staff member should close or follow up on this contact log. | [optional] 
**ContactMethod** | **string** | The method by which the client wants to be contacted. | [optional] 
**ContactName** | **string** | The name of the client to contact. | [optional] 
**Client** | [**\Nlocascio\Mindbody\Model\Client**](Client.md) | Information about the client to whom the contact log belongs. | [optional] 
**CreatedBy** | [**\Nlocascio\Mindbody\Model\Staff**](Staff.md) | Information about the staff member who created the contact log. | [optional] 
**AssignedTo** | [**\Nlocascio\Mindbody\Model\Staff**](Staff.md) | Information about the staff member to whom the contact log is assigned for follow up. | [optional] 
**Comments** | [**\Nlocascio\Mindbody\Model\ContactLogComment[]**](ContactLogComment.md) | The contact log’s comments. | [optional] 
**Types** | [**\Nlocascio\Mindbody\Model\ContactLogType[]**](ContactLogType.md) | Contains information about contact log types. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


