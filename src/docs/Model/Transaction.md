# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**TransactionId** | **int** | The transaction ID. | [optional] 
**SaleId** | **int** | The sale ID. | [optional] 
**ClientId** | **int** | The ID of the client who made the purchase. | [optional] 
**Amount** | **double** | The amount charged on the card | [optional] 
**Settled** | **bool** | Whether it is settled or not | [optional] 
**Status** | **string** | Status of the transaction | [optional] 
**TransactionTime** | [**\DateTime**](\DateTime.md) | Time of card swiped | [optional] 
**AuthTime** | [**\DateTime**](\DateTime.md) | Time of card authorized | [optional] 
**LocationId** | **int** | The ID of the location where the sale takes place. | [optional] 
**MerchantId** | **string** | Merchant ID of the studio | [optional] 
**TerminalId** | **string** | Terminal ID used for payment. Not applicable for CNP/Bank | [optional] 
**CardExpirationMonth** | **string** | Expiry month of the card | [optional] 
**CardExpirationYear** | **string** | Expiry year of the card | [optional] 
**CCLastFour** | **string** | Last 4 digits of CC | [optional] 
**CardType** | **string** | Type of the card | [optional] 
**CCSwiped** | **bool** | Whether card is swiped or not | [optional] 
**ACHLastFour** | **string** | Customer’s ACH last 4 digits | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


