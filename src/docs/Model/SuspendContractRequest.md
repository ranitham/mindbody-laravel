# SuspendContractRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | **string** | The RSSID of the client for whom the contract is getting suspended. | 
**ClientContractId** | **int** | The unique ID of the sale of the contract | 
**SuspensionType** | **string** | The suspension type | [optional] 
**SuspensionStart** | [**\DateTime**](\DateTime.md) | The date to start contract suspension | [optional] 
**Duration** | **int** | The number of (DurationUnit) the suspension lasts | [optional] 
**DurationUnit** | **int** | The unit applied to duration | [optional] 
**OpenEnded** | **bool** | Indicates open ended suspension | [optional] 
**SuspensionNotes** | **string** | The suspension notes | [optional] 
**SuspensionFee** | **double** | charge to suspend a contract for a set period of time | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


