# CompletedSaleCartItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Item** | [**\Nlocascio\Mindbody\Model\CompletedSaleItemBase**](CompletedSaleItemBase.md) | A purchased item; either a pricing option or a retail product. | [optional] 
**DiscountAmount** | **double** | The amount of the discount applied to the item. | [optional] 
**VisitIds** | **int[]** | The IDs of the booked classes, enrollments, or courses that were reconciled by this cart item. This list is only returned if a valid visit ID was passed in the request’s &#x60;VisitIds&#x60; list. | [optional] 
**AppointmentIds** | **int[]** | Gets or sets the item. | [optional] 
**Appointments** | [**\Nlocascio\Mindbody\Model\Appointment[]**](Appointment.md) | The IDs of the appointments that were reconciled by this cart item. This list is only returned if a valid appointment ID was passed in the request’s &#x60;AppointmentIds&#x60; list. | [optional] 
**Id** | **int** | The item’s ID in the current cart. | [optional] 
**Quantity** | **int** | The quantity of the item being purchased. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


