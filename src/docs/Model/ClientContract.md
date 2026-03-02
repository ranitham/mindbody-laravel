# ClientContract

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**PayerClientId** | **int** | The ID of the client who holds the contract. | [optional] 
**AgreementDate** | [**\DateTime**](\DateTime.md) | The date on which the contract was signed. | [optional] 
**AutopayStatus** | **string** | The status of the client’s autopay. | [optional] 
**AutoRenewing** | **bool** | Determines if the contract is auto-renewing. | [optional] 
**FirstAutoPay** | **double** | The amount of the first autopay transaction. | [optional] 
**LastAutoPay** | **double** | The amount of the last autopay transaction. | [optional] 
**NormalAutoPay** | **double** | The amount of the normal recurring autopay transaction. | [optional] 
**IsMonthToMonth** | **bool** | Indicates if the contract renews on a month-to-month basis. | [optional] 
**AutoRenewClientContractID** | **int** | The ID of the contract that this one auto-renews from. | [optional] 
**ContractText** | **string** | The full text of the contract. | [optional] 
**ContractAutoRenewed** | **bool** | Indicates whether the contract was auto-renewed from a previous one. | [optional] 
**ContractName** | **string** | The name of the contract. | [optional] 
**EndDate** | [**\DateTime**](\DateTime.md) | The date that the contract expires. | [optional] 
**Id** | **int** | The unique ID of the sale of the contract. Each time a contract is sold, this ID increases sequentially. | [optional] 
**OriginationLocationId** | **int** | The ID of the location where the contract was issued. | [optional] 
**StartDate** | [**\DateTime**](\DateTime.md) | The date that the contract became active. | [optional] 
**SiteId** | **int** | The ID of the site where the contract was issued. | [optional] 
**UpcomingAutopayEvents** | [**\Nlocascio\Mindbody\Model\UpcomingAutopayEvent[]**](UpcomingAutopayEvent.md) | Contains details of the autopay events. | [optional] 
**ContractID** | **int** | The ID of the contract. | [optional] 
**TerminationDate** | [**\DateTime**](\DateTime.md) | The date that the contract was terminated. | [optional] 
**MinimumCommitmentValue** | **int** | Minimum commitment value. | [optional] 
**MinimumCommitmentUnit** | **string** | Minimum commitment unit type. | [optional] 
**MinimumCommitmentEndDate** | [**\DateTime**](\DateTime.md) | The earliest date a contract termination can take effect if a minimum commitment applies.  This represents the last day the client is obligated to remain on the contract.  Returned even if the commitment has already been fulfilled. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


