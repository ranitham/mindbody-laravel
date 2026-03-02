# GetClientCompleteInfoResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Client** | [**\Nlocascio\Mindbody\Model\ClientWithSuspensionInfo**](ClientWithSuspensionInfo.md) | Contains information about the requested client. | [optional] 
**ClientServices** | [**\Nlocascio\Mindbody\Model\ClientServiceWithActivationType[]**](ClientServiceWithActivationType.md) | Contains information about client pricing options, including activation behavior details.  Each item includes ActivationType and CannotPayForClassesBeforeActivation fields  to help determine booking eligibility based on the pricing option&#39;s activation configuration. | [optional] 
**ClientContracts** | [**\Nlocascio\Mindbody\Model\ClientContract[]**](ClientContract.md) | Contains information about client contract. | [optional] 
**ClientMemberships** | [**\Nlocascio\Mindbody\Model\ClientMembership[]**](ClientMembership.md) | Contains information about client Memberships. | [optional] 
**ClientArrivals** | [**\Nlocascio\Mindbody\Model\ClientArrival[]**](ClientArrival.md) | Contains information about client arrival services. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


