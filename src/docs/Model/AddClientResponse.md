# AddClientResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Client** | [**\Nlocascio\Mindbody\Model\Client**](Client.md) | Contains information about the client.  Several properties in the returned Client object were deprecated in the AddClient request and were never persisted to the database.  The API previously echoed request values back as if they had been stored; it now returns the actual stored state (typically defaults such as null, 0, or empty).  Affected properties include: PhotoUrl, ProspectStage, AccountBalance, Action, Active, ApptGenderPrefMale, CreationDate, FirstAppointmentDate, LastFormulaNotes, LastModifiedDateTime, MembershipIcon, Status, UniqueId.  Additionally, post-creation operations (ClientCreditCard, ClientIndexes, ClientRelationships, SalesReps) are performed after the client is created and may not be included in the immediate response; use GetClient or GetClientCompleteInfo to retrieve the current state. | [optional] 
**Status** | **string** | The overall status of the operation.  \&quot;Success\&quot; indicates the client was created and all non-critical operations completed successfully.  \&quot;PartialSuccess\&quot; indicates the client was created but one or more non-critical operations failed.  When status is \&quot;PartialSuccess\&quot;, retry only the failed operations, not the client creation itself. | [optional] 
**Errors** | [**\Nlocascio\Mindbody\Model\OperationErrorResponse[]**](OperationErrorResponse.md) | List of errors from non-critical operations that failed.  Only populated when Status is \&quot;PartialSuccess\&quot;.  Each error includes the operation name and a message suitable for logging or retry decisions. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


