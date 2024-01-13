# PurchaseContractResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | **string** | The ID of the client who is purchasing the contract. | [optional] 
**LocationId** | **int** | The ID of the location where the contract is being purchased. | [optional] 
**ContractId** | **int** | The ID of the general contract being purchased. | [optional] 
**ClientContractId** | **int** | The ID of the specific contract being purchased by this specific client, not to be confused with the &#x60;ContractId&#x60;, which refers to a general contract that the business offers. | [optional] 
**Totals** | [**\Nlocascio\Mindbody\Model\PurchaseContractResponseTotals**](PurchaseContractResponseTotals.md) | Purchase totals | [optional] 
**PaymentProcessingFailures** | [**\Nlocascio\Mindbody\Model\PaymentProcessingFailure[]**](PaymentProcessingFailure.md) | Contains information only if SCA challenge is indicated. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


