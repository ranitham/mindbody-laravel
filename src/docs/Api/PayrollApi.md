# Nlocascio\Mindbody\PayrollApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payrollGetCommissions**](PayrollApi.md#payrollGetCommissions) | **GET** /public/v6/payroll/commissions | Get commission payroll for staff members.
[**payrollGetScheduledServiceEarnings**](PayrollApi.md#payrollGetScheduledServiceEarnings) | **GET** /public/v6/payroll/scheduledserviceearnings | Get class payroll for staff members.
[**payrollGetTimeCards**](PayrollApi.md#payrollGetTimeCards) | **GET** /public/v6/payroll/timecards | Get time card payroll for staff members.
[**payrollGetTips**](PayrollApi.md#payrollGetTips) | **GET** /public/v6/payroll/tips | Get tips for staff members.


# **payrollGetCommissions**
> \Nlocascio\Mindbody\Model\GetCommissionsResponse payrollGetCommissions($RequestEndDateTime, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestStaffId, $RequestStartDateTime)

Get commission payroll for staff members.

A staff authorization token is not required for this endpoint, but if one is passed, its permissions are honored. Depending on the access permissions configured for the staff member whose token is passed, the endpoint returns either only the payroll information for that staff member or it returns the payroll information for all staff members.

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

$apiInstance = new Nlocascio\Mindbody\Api\PayrollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestEndDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.<br />  Default: **Today’s date**  * If you do not supply an `EndDateTime`, the data returns for the period from the `StartDateTime` that you supply to today’s date.  * If you do not supply an `EndDateTime` or a `StartDateTime`, data returns for the seven days prior to today’s date.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationId = 56; // int | A LocationId that you want to retrieve payroll information for. If you do not supply a `LocationId`, data from all locations is returned.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestStaffId = 789; // int | A list of staff IDs that you want to retrieve payroll information for. If you do not supply a `StaffId`, all active staff members return, ordered by staff ID.
$RequestStartDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The beginning of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.  * If you do not supply a `StartDateTime`, data returns for the seven days prior to the `EndDateTime` that you supply.  * If you do not supply either a `StartDateTime` or an `EndDateTime`, the data returns for seven days prior to today’s date.

try {
    $result = $apiInstance->payrollGetCommissions($RequestEndDateTime, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestStaffId, $RequestStartDateTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollApi->payrollGetCommissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestEndDateTime** | **\DateTime**| The end of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.&lt;br /&gt;  Default: **Today’s date**  * If you do not supply an &#x60;EndDateTime&#x60;, the data returns for the period from the &#x60;StartDateTime&#x60; that you supply to today’s date.  * If you do not supply an &#x60;EndDateTime&#x60; or a &#x60;StartDateTime&#x60;, data returns for the seven days prior to today’s date. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationId** | **int**| A LocationId that you want to retrieve payroll information for. If you do not supply a &#x60;LocationId&#x60;, data from all locations is returned. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestStaffId** | **int**| A list of staff IDs that you want to retrieve payroll information for. If you do not supply a &#x60;StaffId&#x60;, all active staff members return, ordered by staff ID. | [optional]
 **RequestStartDateTime** | **\DateTime**| The beginning of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.  * If you do not supply a &#x60;StartDateTime&#x60;, data returns for the seven days prior to the &#x60;EndDateTime&#x60; that you supply.  * If you do not supply either a &#x60;StartDateTime&#x60; or an &#x60;EndDateTime&#x60;, the data returns for seven days prior to today’s date. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetCommissionsResponse**](../Model/GetCommissionsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payrollGetScheduledServiceEarnings**
> \Nlocascio\Mindbody\Model\GetScheduledServiceEarningsResponse payrollGetScheduledServiceEarnings($RequestEndDateTime, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestScheduledServiceId, $RequestScheduledServiceType, $RequestStaffId, $RequestStartDateTime)

Get class payroll for staff members.

A staff authorization token is not required for this endpoint, but if one is passed, its permissions are honored. Depending on the access permissions configured for the staff member whose token is passed, the endpoint returns either only the payroll information for that staff member or it returns the payroll information for all staff members.    Note that if a staff member is not paid for a class, earnings of zero are returned by this endpoint.    Note that this endpoint calculates both bonus and no-reg rates for assistants.These rates are not supported by the Payroll report in the web interface.    Note that this endpoint returns both the teacher’s adjusted rate and the assistant’s pay rate when the assistant is paid by the teacher.The Payroll report in the web interface only returns the teacher’s adjusted rate.

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

$apiInstance = new Nlocascio\Mindbody\Api\PayrollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestEndDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.<br />  Default: **Today’s date**  * If you do not supply an `EndDateTime`, the data returns for the period from the `StartDateTime` that you supply to today’s date.  * If you do not supply an `EndDateTime` or a `StartDateTime`, data returns for the seven days prior to today’s date.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationId = 56; // int | A LocationId that you want to retrieve payroll information for. If you do not supply a `LocationId`, data from all locations is returned.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestScheduledServiceId = 789; // int | The ID for the instance of the service offered
$RequestScheduledServiceType = "RequestScheduledServiceType_example"; // string | Defines a payroll filter for the type of service offered, either \"Class\", \"Appointment\", or \"Enrollment\".
$RequestStaffId = 789; // int | A list of staff IDs that you want to retrieve payroll information for. If you do not supply a `StaffId`, all active staff members return, ordered by staff ID.
$RequestStartDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The beginning of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.  * If you do not supply a `StartDateTime`, data returns for the seven days prior to the `EndDateTime` that you supply.  * If you do not supply either a `StartDateTime` or an `EndDateTime`, the data returns for seven days prior to today’s date.

try {
    $result = $apiInstance->payrollGetScheduledServiceEarnings($RequestEndDateTime, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestScheduledServiceId, $RequestScheduledServiceType, $RequestStaffId, $RequestStartDateTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollApi->payrollGetScheduledServiceEarnings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestEndDateTime** | **\DateTime**| The end of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.&lt;br /&gt;  Default: **Today’s date**  * If you do not supply an &#x60;EndDateTime&#x60;, the data returns for the period from the &#x60;StartDateTime&#x60; that you supply to today’s date.  * If you do not supply an &#x60;EndDateTime&#x60; or a &#x60;StartDateTime&#x60;, data returns for the seven days prior to today’s date. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationId** | **int**| A LocationId that you want to retrieve payroll information for. If you do not supply a &#x60;LocationId&#x60;, data from all locations is returned. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestScheduledServiceId** | **int**| The ID for the instance of the service offered | [optional]
 **RequestScheduledServiceType** | **string**| Defines a payroll filter for the type of service offered, either \&quot;Class\&quot;, \&quot;Appointment\&quot;, or \&quot;Enrollment\&quot;. | [optional]
 **RequestStaffId** | **int**| A list of staff IDs that you want to retrieve payroll information for. If you do not supply a &#x60;StaffId&#x60;, all active staff members return, ordered by staff ID. | [optional]
 **RequestStartDateTime** | **\DateTime**| The beginning of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.  * If you do not supply a &#x60;StartDateTime&#x60;, data returns for the seven days prior to the &#x60;EndDateTime&#x60; that you supply.  * If you do not supply either a &#x60;StartDateTime&#x60; or an &#x60;EndDateTime&#x60;, the data returns for seven days prior to today’s date. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetScheduledServiceEarningsResponse**](../Model/GetScheduledServiceEarningsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payrollGetTimeCards**
> \Nlocascio\Mindbody\Model\GetTimeCardsResponse payrollGetTimeCards($RequestEndDateTime, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestStaffId, $RequestStartDateTime)

Get time card payroll for staff members.

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

$apiInstance = new Nlocascio\Mindbody\Api\PayrollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestEndDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.<br />  Default: **Today’s date**  * If you do not supply an `EndDateTime`, the data returns for the period from the `StartDateTime` that you supply to today’s date.  * If you do not supply an `EndDateTime` or a `StartDateTime`, data returns for the seven days prior to today’s date.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationId = 56; // int | A LocationId that you want to retrieve payroll information for. If you do not supply a `LocationId`, data from all locations is returned.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestStaffId = 789; // int | A list of staff IDs that you want to retrieve payroll information for. If you do not supply a `StaffId`, all active staff members return, ordered by staff ID.
$RequestStartDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The beginning of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.  * If you do not supply a `StartDateTime`, data returns for the seven days prior to the `EndDateTime` that you supply.  * If you do not supply either a `StartDateTime` or an `EndDateTime`, the data returns for seven days prior to today’s date.

try {
    $result = $apiInstance->payrollGetTimeCards($RequestEndDateTime, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestStaffId, $RequestStartDateTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollApi->payrollGetTimeCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestEndDateTime** | **\DateTime**| The end of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.&lt;br /&gt;  Default: **Today’s date**  * If you do not supply an &#x60;EndDateTime&#x60;, the data returns for the period from the &#x60;StartDateTime&#x60; that you supply to today’s date.  * If you do not supply an &#x60;EndDateTime&#x60; or a &#x60;StartDateTime&#x60;, data returns for the seven days prior to today’s date. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationId** | **int**| A LocationId that you want to retrieve payroll information for. If you do not supply a &#x60;LocationId&#x60;, data from all locations is returned. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestStaffId** | **int**| A list of staff IDs that you want to retrieve payroll information for. If you do not supply a &#x60;StaffId&#x60;, all active staff members return, ordered by staff ID. | [optional]
 **RequestStartDateTime** | **\DateTime**| The beginning of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.  * If you do not supply a &#x60;StartDateTime&#x60;, data returns for the seven days prior to the &#x60;EndDateTime&#x60; that you supply.  * If you do not supply either a &#x60;StartDateTime&#x60; or an &#x60;EndDateTime&#x60;, the data returns for seven days prior to today’s date. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetTimeCardsResponse**](../Model/GetTimeCardsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payrollGetTips**
> \Nlocascio\Mindbody\Model\GetTipsResponse payrollGetTips($RequestEndDateTime, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestStaffId, $RequestStartDateTime)

Get tips for staff members.

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

$apiInstance = new Nlocascio\Mindbody\Api\PayrollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestEndDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.<br />  Default: **Today’s date**  * If you do not supply an `EndDateTime`, the data returns for the period from the `StartDateTime` that you supply to today’s date.  * If you do not supply an `EndDateTime` or a `StartDateTime`, data returns for the seven days prior to today’s date.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationId = 56; // int | A LocationId that you want to retrieve payroll information for. If you do not supply a `LocationId`, data from all locations is returned.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestStaffId = 789; // int | A list of staff IDs that you want to retrieve payroll information for. If you do not supply a `StaffId`, all active staff members return, ordered by staff ID.
$RequestStartDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The beginning of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.  * If you do not supply a `StartDateTime`, data returns for the seven days prior to the `EndDateTime` that you supply.  * If you do not supply either a `StartDateTime` or an `EndDateTime`, the data returns for seven days prior to today’s date.

try {
    $result = $apiInstance->payrollGetTips($RequestEndDateTime, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestStaffId, $RequestStartDateTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollApi->payrollGetTips: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestEndDateTime** | **\DateTime**| The end of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.&lt;br /&gt;  Default: **Today’s date**  * If you do not supply an &#x60;EndDateTime&#x60;, the data returns for the period from the &#x60;StartDateTime&#x60; that you supply to today’s date.  * If you do not supply an &#x60;EndDateTime&#x60; or a &#x60;StartDateTime&#x60;, data returns for the seven days prior to today’s date. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationId** | **int**| A LocationId that you want to retrieve payroll information for. If you do not supply a &#x60;LocationId&#x60;, data from all locations is returned. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestStaffId** | **int**| A list of staff IDs that you want to retrieve payroll information for. If you do not supply a &#x60;StaffId&#x60;, all active staff members return, ordered by staff ID. | [optional]
 **RequestStartDateTime** | **\DateTime**| The beginning of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.  * If you do not supply a &#x60;StartDateTime&#x60;, data returns for the seven days prior to the &#x60;EndDateTime&#x60; that you supply.  * If you do not supply either a &#x60;StartDateTime&#x60; or an &#x60;EndDateTime&#x60;, the data returns for seven days prior to today’s date. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetTipsResponse**](../Model/GetTipsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

