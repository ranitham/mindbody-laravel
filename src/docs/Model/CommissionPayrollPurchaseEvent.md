# CommissionPayrollPurchaseEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**StaffId** | **int** | The ID of the staff member who earned commissions. | [optional] 
**SaleDateTime** | [**\DateTime**](\DateTime.md) | The date and time when the sale occurred. | [optional] 
**SaleId** | **int** | The sale’s ID. | [optional] 
**SaleType** | **string** | The Sales type. When this is \&quot;Purchase\&quot; indicates that this sale paid commission to a staff. When this is \&quot;Return\&quot; | [optional] 
**ProductId** | **int** | The product ID of the item for which the staff earned commissions. | [optional] 
**EarningsDetails** | [**\Nlocascio\Mindbody\Model\CommissionDetail[]**](CommissionDetail.md) | Contains information about which commissions the staff earned for this item. | [optional] 
**Earnings** | **double** | The total commissions earned by the staff for this item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


