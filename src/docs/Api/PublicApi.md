# Nlocascio\Mindbody\PublicApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**staffGetSalesReps**](PublicApi.md#staffGetSalesReps) | **GET** /public/v6/staff/salesreps | 


# **staffGetSalesReps**
> \Nlocascio\Mindbody\Model\GetSalesRepsResponse staffGetSalesReps($RequestActiveOnly, $RequestLimit, $RequestOffset, $RequestSalesRepNumbers)



This endpoint returns the basic details of the staffs that are marked as sales reps.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API-Key
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');
// Configure API key authorization: authorization
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');
// Configure API key authorization: siteId
$config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKey('siteId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nlocascio\Mindbody\Configuration::getDefaultConfiguration()->setApiKeyPrefix('siteId', 'Bearer');

$apiInstance = new Nlocascio\Mindbody\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestActiveOnly = true; // bool | When `true`, will return only active reps data.  Default : **false**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestSalesRepNumbers = array(56); // int[] | This is the list of the sales rep numbers for which the salesrep data will be fetched.

try {
    $result = $apiInstance->staffGetSalesReps($RequestActiveOnly, $RequestLimit, $RequestOffset, $RequestSalesRepNumbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->staffGetSalesReps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestActiveOnly** | **bool**| When &#x60;true&#x60;, will return only active reps data.  Default : **false** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestSalesRepNumbers** | [**int[]**](../Model/int.md)| This is the list of the sales rep numbers for which the salesrep data will be fetched. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetSalesRepsResponse**](../Model/GetSalesRepsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

