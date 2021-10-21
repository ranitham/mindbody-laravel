# GetWaitlistEntriesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClassIds** | **int[]** | The requested class IDs. If a class ID is present, the request automatically disregards any class schedule IDs in the request. &lt;br /&gt;  Either &#x60;ClassScheduleIds&#x60;, &#x60;ClientIds&#x60;, &#x60;WaitlistEntryIds&#x60;, or &#x60;ClassIds&#x60; is required; the others become optional.&lt;br /&gt;  Default: **all ClassIds** | [optional] 
**ClassScheduleIds** | **int[]** | The requested class schedule IDs. If a class ID is present, the request automatically disregards any class schedule IDs in the request.&lt;br /&gt;  Either &#x60;ClassScheduleIds&#x60;, &#x60;ClientIds&#x60;, &#x60;WaitlistEntryIds&#x60;, or &#x60;ClassIds&#x60; is required; the others become optional.&lt;br /&gt;  Default: **all ClassScheduleIds** | [optional] 
**ClientIds** | **string[]** | The requested client IDs.&lt;br /&gt;  Either &#x60;ClassScheduleIds&#x60;, &#x60;ClientIds&#x60;, &#x60;WaitlistEntryIds&#x60;, or &#x60;ClassIds&#x60; is required; the others become optional.&lt;br /&gt;  Default: **all ClientIds** | [optional] 
**HidePastEntries** | **bool** | When &#x60;true&#x60;, indicates that past waiting list entries are hidden from clients.&lt;br /&gt;  When &#x60;false&#x60;, indicates that past entries are not hidden from clients.&lt;br /&gt;  Default: **false** | [optional] 
**WaitlistEntryIds** | **int[]** | The requested waiting list entry IDs.&lt;br /&gt;  Either &#x60;ClassScheduleIds&#x60;, &#x60;ClientIds&#x60;, &#x60;WaitlistEntryIds&#x60;, or &#x60;ClassIds&#x60; is required; the others become optional.&lt;br /&gt;  Default: **all WaitlistEntryIds** | [optional] 
**Limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**Offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


