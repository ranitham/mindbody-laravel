# AutopaySchedule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**FrequencyType** | **string** | Defines how often clients are charged. Possible values are:  * SetNumberOfAutopays  * MonthToMonth | [optional] 
**FrequencyValue** | **int** | The interval of AutoPay frequency, combined with &#x60;FrequencyTimeUnit&#x60;. This value is null if &#x60;FrequencyType&#x60; is &#x60;MonthToMonth&#x60;. | [optional] 
**FrequencyTimeUnit** | **string** | Defines the time unit that sets how often to run the AutoPay, combined with &#x60;FrequencyValue&#x60;. This value is null if &#x60;FrequencyType&#x60; is &#x60;MonthToMonth&#x60;. Possible values are:  * Weekly  * Monthly  * Yearly | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


