# UpdateClientRewardsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | **string** | Required.  The client’s ID, as configured by the business owner. This is the client’s barcode ID if the business owner assigns barcodes to clients. | 
**Points** | **int** | Required. The amount of Rewards Points we are earning/redeeming | 
**Source** | **string** | Required if Action is \&quot;Earned\&quot;.  Must be one of \&quot;Sale\&quot;,\&quot;Class Booking\&quot;,\&quot;Appointment Booking\&quot;, or \&quot;Referral\&quot; | [optional] 
**SourceId** | **int** | Optional.  The unique Id in the MINDBODY System for the Source of the reward.  For example, If the Action is \&quot;Earned\&quot; and Source is \&quot;Sale\&quot; then the SourceId is the unique Id for the   sale in the MINDBODY System.  If action is redeemed, the RedemptionType will be \&quot;Purchase\&quot; and if provided the SourceId is the unique id of the sale in the MINDBODY system where the points were redeemed. | [optional] 
**Action** | **string** | Required.  The Action we are taking on the rewards points.  Must be either \&quot;Earned\&quot; or \&quot;Redeemed\&quot; | 
**ActionDateTime** | [**\DateTime**](\DateTime.md) | Optional.  The Date and Time the Action Occurred in UTC.  May not be in the future, if omitted defaults to current Date/Time in UTC. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


