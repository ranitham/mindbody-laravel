# SuspendContractRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | **string** | The ID of the client. | 
**ClientContractId** | **int** | The unique ID of the sale of the contract. | 
**SuspensionType** | **string** | ex. Illness, Injury, Vacation. (Note this can be customized by each studio).  If provided, then Duration, DurationUnit, and SuspensionFee (if applicable) are automatically applied. Restrict Days are not supported. | [optional] 
**SuspensionStart** | [**\DateTime**](\DateTime.md) | The contract suspension start date.  Default: *today’s date* | [optional] 
**Duration** | **int** | The number of (DurationUnit) the suspension lasts. | [optional] 
**DurationUnit** | **int** | The unit applied to Duration. | [optional] 
**OpenEnded** | **bool** | When &#x60;true&#x60;, indicates that suspension is open ended. Also, when &#x60;true&#x60;, then Duration and DurationUnit are ignored.  Default: *false* | [optional] 
**SuspensionNotes** | **string** | The comments for suspending a contract. | [optional] 
**SuspensionFee** | **double** | An optional charge that clients who wish to pause a contract for a set period of time can be charged. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


