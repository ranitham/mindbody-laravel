# CheckoutItemWrapper

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Item** | [**\Nlocascio\Mindbody\Model\CheckoutItem**](CheckoutItem.md) | Information about an item in the cart. | [optional] 
**DiscountAmount** | **double** | The amount the item is discounted. This parameter is ignored for packages. | [optional] 
**AppointmentBookingRequests** | [**\Nlocascio\Mindbody\Model\CheckoutAppointmentBookingRequest[]**](CheckoutAppointmentBookingRequest.md) | A list of appointments to be booked then paid for by this item. This parameter applies only to pricing option items. | [optional] 
**EnrollmentIds** | **int[]** | A list of enrollment IDs that this item is to pay for. This parameter applies only to pricing option items. | [optional] 
**ClassIds** | **int[]** | A list of class IDs that this item is to pay for. This parameter applies only to pricing option items. | [optional] 
**CourseIds** | **int[]** | A list of course IDs that this item is to pay for. This parameter applies only to pricing option items. | [optional] 
**VisitIds** | **int[]** | A list of visit IDs that this item is to pay for. This parameter applies only to pricing option items. | [optional] 
**AppointmentIds** | **int[]** | A list of appointment IDs that this item is to reconcile. | [optional] 
**Id** | **int** | The item’s unique ID within the cart. | [optional] 
**Quantity** | **int** | The number of this item to be purchased. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


