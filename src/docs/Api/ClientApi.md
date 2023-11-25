# Nlocascio\Mindbody\ClientApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clientAddArrival**](ClientApi.md#clientAddArrival) | **POST** /public/v6/client/addarrival | Add an arrival for a client.
[**clientAddClient**](ClientApi.md#clientAddClient) | **POST** /public/v6/client/addclient | Add a client to a site.
[**clientAddClientDirectDebitInfo**](ClientApi.md#clientAddClientDirectDebitInfo) | **POST** /public/v6/client/addclientdirectdebitinfo | Add client Direct debit info.
[**clientAddContactLog**](ClientApi.md#clientAddContactLog) | **POST** /public/v6/client/addcontactlog | Add a contact log to a client&#39;s account.
[**clientAddFormulaNote**](ClientApi.md#clientAddFormulaNote) | **POST** /public/v6/client/addclientformulanote | Add client&#39;s formula note
[**clientDeleteClientFormulaNote**](ClientApi.md#clientDeleteClientFormulaNote) | **DELETE** /public/v6/client/clientformulanote | Deletes client&#39;s formula note.
[**clientDeleteContactLog**](ClientApi.md#clientDeleteContactLog) | **DELETE** /public/v6/client/deletecontactlog | Delete client&#39;s contact log.
[**clientDeleteDirectDebitInfo**](ClientApi.md#clientDeleteDirectDebitInfo) | **DELETE** /public/v6/client/clientdirectdebitinfo | Delete direct debit info for a client.
[**clientGetActiveClientMemberships**](ClientApi.md#clientGetActiveClientMemberships) | **GET** /public/v6/client/activeclientmemberships | Get a client&#39;s active memberships.
[**clientGetActiveClientsMemberships**](ClientApi.md#clientGetActiveClientsMemberships) | **GET** /public/v6/client/activeclientsmemberships | Get a client&#39;s active memberships.
[**clientGetClientAccountBalances**](ClientApi.md#clientGetClientAccountBalances) | **GET** /public/v6/client/clientaccountbalances | Get account balance information for one or more client(s).
[**clientGetClientCompleteInfo**](ClientApi.md#clientGetClientCompleteInfo) | **GET** /public/v6/client/clientcompleteinfo | Get Services, Contracts, MemberShips and Arrivals for Client as per requirement
[**clientGetClientContracts**](ClientApi.md#clientGetClientContracts) | **GET** /public/v6/client/clientcontracts | Get contracts that a client has purchased.
[**clientGetClientDuplicates**](ClientApi.md#clientGetClientDuplicates) | **GET** /public/v6/client/clientduplicates | Get client records that would be considered duplicates of the client values passed in.
[**clientGetClientFormulaNotes**](ClientApi.md#clientGetClientFormulaNotes) | **GET** /public/v6/client/clientformulanotes | Get a client&#39;s formula notes.
[**clientGetClientIndexes**](ClientApi.md#clientGetClientIndexes) | **GET** /public/v6/client/clientindexes | Get a site&#39;s configured client indexes and client index values.
[**clientGetClientPurchases**](ClientApi.md#clientGetClientPurchases) | **GET** /public/v6/client/clientpurchases | Get a client&#39;s purchase history.
[**clientGetClientReferralTypes**](ClientApi.md#clientGetClientReferralTypes) | **GET** /public/v6/client/clientreferraltypes | Get a site&#39;s configured client referral types.
[**clientGetClientRewards**](ClientApi.md#clientGetClientRewards) | **GET** /public/v6/client/clientrewards | 
[**clientGetClientSchedule**](ClientApi.md#clientGetClientSchedule) | **GET** /public/v6/client/clientschedule | Gets a client&#39;s schedule history.
[**clientGetClientServices**](ClientApi.md#clientGetClientServices) | **GET** /public/v6/client/clientservices | Get pricing options that a client has purchased.
[**clientGetClientVisits**](ClientApi.md#clientGetClientVisits) | **GET** /public/v6/client/clientvisits | Get a client&#39;s visit history.
[**clientGetClients**](ClientApi.md#clientGetClients) | **GET** /public/v6/client/clients | Get clients.
[**clientGetContactLogTypes**](ClientApi.md#clientGetContactLogTypes) | **GET** /public/v6/client/contactlogtypes | Get All Active Contact Log Types
[**clientGetContactLogs**](ClientApi.md#clientGetContactLogs) | **GET** /public/v6/client/contactlogs | Get contact logs on a client&#39;s account.
[**clientGetCrossRegionalClientAssociations**](ClientApi.md#clientGetCrossRegionalClientAssociations) | **GET** /public/v6/client/crossregionalclientassociations | Get a client&#39;s cross regional site associations.
[**clientGetCustomClientFields**](ClientApi.md#clientGetCustomClientFields) | **GET** /public/v6/client/customclientfields | Get a site&#39;s configured custom client fields.
[**clientGetDirectDebitInfo**](ClientApi.md#clientGetDirectDebitInfo) | **GET** /public/v6/client/clientdirectdebitinfo | Get direct debit info for a client.
[**clientGetRequiredClientFields**](ClientApi.md#clientGetRequiredClientFields) | **GET** /public/v6/client/requiredclientfields | Get client required fields for a site.
[**clientMergeClient**](ClientApi.md#clientMergeClient) | **POST** /public/v6/client/mergeclients | 
[**clientSendAutoEmail**](ClientApi.md#clientSendAutoEmail) | **POST** /public/v6/client/sendautoemail | Send a client a supported auto email
[**clientSendPasswordResetEmail**](ClientApi.md#clientSendPasswordResetEmail) | **POST** /public/v6/client/sendpasswordresetemail | Send a password reset email to a client.
[**clientSuspendContract**](ClientApi.md#clientSuspendContract) | **POST** /public/v6/client/suspendcontract | Suspend client contract
[**clientTerminateContract**](ClientApi.md#clientTerminateContract) | **POST** /public/v6/client/terminatecontract | Terminate client contract
[**clientUpdateClient**](ClientApi.md#clientUpdateClient) | **POST** /public/v6/client/updateclient | Update a client at a site.
[**clientUpdateClientContractAutopays**](ClientApi.md#clientUpdateClientContractAutopays) | **POST** /public/v6/client/updateclientcontractautopays | 
[**clientUpdateClientRewards**](ClientApi.md#clientUpdateClientRewards) | **POST** /public/v6/client/clientrewards | Update Client Reward
[**clientUpdateClientService**](ClientApi.md#clientUpdateClientService) | **POST** /public/v6/client/updateclientservice | Update a client&#39;s purchase pricing option.
[**clientUpdateClientVisit**](ClientApi.md#clientUpdateClientVisit) | **POST** /public/v6/client/updateclientvisit | Update a client&#39;s visit.
[**clientUpdateContactLog**](ClientApi.md#clientUpdateContactLog) | **POST** /public/v6/client/updatecontactlog | Update a contact log on a client&#39;s account.
[**clientUploadClientDocument**](ClientApi.md#clientUploadClientDocument) | **POST** /public/v6/client/uploadclientdocument | Upload a document to a client&#39;s profile.
[**clientUploadClientPhoto**](ClientApi.md#clientUploadClientPhoto) | **POST** /public/v6/client/uploadclientphoto | Upload a profile photo to a client&#39;s profile.


# **clientAddArrival**
> \Nlocascio\Mindbody\Model\AddArrivalResponse clientAddArrival($Request)

Add an arrival for a client.

Marks a client as arrived for a specified location. A staff user token must be included with staff assigned the LaunchSignInScreen permission.                When used on a site that is part of a region, the following additional logic will apply:                * When a client exists within the region but not at the studio where the arrival is being logged, a local client record will be automatically created.  * If the local client does not have an applicable local membership or pricing option, a membership or pricing option will be automatically used if it exists elsewhere within the region.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\AddArrivalRequest(); // \Nlocascio\Mindbody\Model\AddArrivalRequest | 

try {
    $result = $apiInstance->clientAddArrival($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientAddArrival: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\AddArrivalRequest**](../Model/AddArrivalRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\AddArrivalResponse**](../Model/AddArrivalResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientAddClient**
> \Nlocascio\Mindbody\Model\AddClientResponse clientAddClient($Request)

Add a client to a site.

Starting the week of May 11th, 2020 all versions of the Public API will no longer allow duplicate clients to be created. This applies to both adding a client and updating a client record. A duplicate client is created when two profiles have the same first name, last name and email.<br />  Creates a new client record at the specified business.Passing a User Token as Authorization will create a client and respect Business Mode required fields.Omitting the token will create a client and respect Consumer Mode required fi elds. To make sure you are collecting all required pieces of information, first run GetRequired ClientFields.<br />  If you have purchased an Ultimate tier then this endpoint will automatically start showing new opportunity on Sales Pipeline.Starting the week of May 11th, 2020 all versions of the Public API will no longer allow duplicate clients to be created.This applies to both adding a client and updating a client record. A duplicate client is created when two profiles have the same first name, last name and email.<br />  Creates a new client record at the specified business.Passing a User Token as Authorization will create a client and respect Business Mode required fields.Omitting the token will create a client and respect Consumer Mode required fi elds. To make sure you are collecting all required pieces of information, first run GetRequired ClientFields.<br />  If you have purchased an Ultimate tier then this endpoint will automatically start showing new opportunity on Sales Pipeline.  The `FirstName` and `LastName` parameters are always required in this request. All other parameters are optional, but note that any of the optional parameters could be required by a particular business, depending on how the business has configured the site settings.  Use after calling the `GetRequiredClientFields` endpoint to make sure you are collecting all required pieces of information.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\AddClientRequest(); // \Nlocascio\Mindbody\Model\AddClientRequest | 

try {
    $result = $apiInstance->clientAddClient($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientAddClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\AddClientRequest**](../Model/AddClientRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\AddClientResponse**](../Model/AddClientResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientAddClientDirectDebitInfo**
> \Nlocascio\Mindbody\Model\AddClientDirectDebitInfoResponse clientAddClientDirectDebitInfo($Request)

Add client Direct debit info.

This endpoint adds direct debit info to a client’s account. This endpoint requires staff user credentials.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\AddClientDirectDebitInfoRequest(); // \Nlocascio\Mindbody\Model\AddClientDirectDebitInfoRequest | 

try {
    $result = $apiInstance->clientAddClientDirectDebitInfo($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientAddClientDirectDebitInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\AddClientDirectDebitInfoRequest**](../Model/AddClientDirectDebitInfoRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\AddClientDirectDebitInfoResponse**](../Model/AddClientDirectDebitInfoResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientAddContactLog**
> \Nlocascio\Mindbody\Model\ContactLog clientAddContactLog($Request)

Add a contact log to a client's account.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\AddContactLogRequest(); // \Nlocascio\Mindbody\Model\AddContactLogRequest | 

try {
    $result = $apiInstance->clientAddContactLog($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientAddContactLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\AddContactLogRequest**](../Model/AddContactLogRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\ContactLog**](../Model/ContactLog.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientAddFormulaNote**
> \Nlocascio\Mindbody\Model\FormulaNoteResponse clientAddFormulaNote($Request)

Add client's formula note

This endpoint adds a formula note for a specified client or specified client appointment. A staff user token must be included with staff assigned permission to view client profile or have both ViewAppointmentDetails and ModifyAppointment permissions.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\AddFormulaNoteRequest(); // \Nlocascio\Mindbody\Model\AddFormulaNoteRequest | 

try {
    $result = $apiInstance->clientAddFormulaNote($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientAddFormulaNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\AddFormulaNoteRequest**](../Model/AddFormulaNoteRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\FormulaNoteResponse**](../Model/FormulaNoteResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientDeleteClientFormulaNote**
> clientDeleteClientFormulaNote($RequestClientId, $RequestFormulaNoteId, $RequestLimit, $RequestOffset)

Deletes client's formula note.

This endpoint deletes an existing formula note. A staff user token must be included with staff assigned permission to view client profile or have both ViewAppointmentDetails and ModifyAppointment permissions.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClientId = "RequestClientId_example"; // string | The client ID of the client whose formula note needs to be deleted.
$RequestFormulaNoteId = 789; // int | The formula note ID for the note to be deleted.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.

try {
    $apiInstance->clientDeleteClientFormulaNote($RequestClientId, $RequestFormulaNoteId, $RequestLimit, $RequestOffset);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientDeleteClientFormulaNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClientId** | **string**| The client ID of the client whose formula note needs to be deleted. |
 **RequestFormulaNoteId** | **int**| The formula note ID for the note to be deleted. |
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

void (empty response body)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientDeleteContactLog**
> object clientDeleteContactLog($RequestClientId, $RequestContactLogId, $RequestTest)

Delete client's contact log.

This endpoint deletes contactlog of client. This endpoint requires staff user credentials.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClientId = "RequestClientId_example"; // string | The client ID of the client whose Contact Log is being deleted.
$RequestContactLogId = 789; // int | The Contact Log ID.
$RequestTest = true; // bool | When `true`, indicates that this is a test request and no data is inserted into the subscriber’s database.  When `false`, the database is updated.

try {
    $result = $apiInstance->clientDeleteContactLog($RequestClientId, $RequestContactLogId, $RequestTest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientDeleteContactLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClientId** | **string**| The client ID of the client whose Contact Log is being deleted. |
 **RequestContactLogId** | **int**| The Contact Log ID. |
 **RequestTest** | **bool**| When &#x60;true&#x60;, indicates that this is a test request and no data is inserted into the subscriber’s database.  When &#x60;false&#x60;, the database is updated. | [optional]

### Return type

**object**

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientDeleteDirectDebitInfo**
> object clientDeleteDirectDebitInfo($ClientId)

Delete direct debit info for a client.

This endpoint deletes direct debit info from a client’s account. This endpoint requires staff user credentials.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ClientId = "ClientId_example"; // string | 

try {
    $result = $apiInstance->clientDeleteDirectDebitInfo($ClientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientDeleteDirectDebitInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ClientId** | **string**|  | [optional]

### Return type

**object**

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetActiveClientMemberships**
> \Nlocascio\Mindbody\Model\GetActiveClientMembershipsResponse clientGetActiveClientMemberships($RequestClientId, $RequestClientAssociatedSitesOffset, $RequestCrossRegionalLookup, $RequestLimit, $RequestLocationId, $RequestOffset)

Get a client's active memberships.

Please note that client memberships with location restrictions can only be used to pay for scheduled services at the site to which they belong. Memberships with location restrictions can not be used to pay for scheduled services at other sites within an organization.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClientId = "RequestClientId_example"; // string | The ID of the client for whom memberships are returned.
$RequestClientAssociatedSitesOffset = 56; // int | Used to retrieve a client’s memberships from multiple sites within an organization when the client is associated with more than ten sites. To change which ten sites are searched, change this offset value. A value of 0 means that no sites are skipped and the first ten sites are returned. You can use the `CrossRegionalClientAssociations` value from `GET CrossRegionalClientAssociations` to determine how many sites the client is associated with. Note that you must always have `CrossRegionalLookup` set to `true` to use this parameter.<br />  Default: **0**    For example, if a client is associated with 25 sites, you need to call `GetClientServices` three times, as follows:  * Use `GET CrossRegionalClientAssociations` to determine how many sites a client is associated with, which tells you how many additional calls you need to make.  * Either omit `ClientAssociatedSitesOffset` or set it to 0 to return the client’s services (pricing options) from sites 1-10.  * Set `ClientAssociatedSitesOffset` to 10 to return the client pricing options from sites 11-20  * Set `ClientAssociatedSitesOffset` to 20 to return the client pricing options from sites 21-25
$RequestCrossRegionalLookup = true; // bool | Used to retrieve a client’s memberships from multiple sites within an organization. When included and set to `true`, it searches a maximum of ten sites with which this client is associated. When a client is associated with more than ten sites, use `ClientAssociatedSitesOffset` as many times as needed to search the additional sites with which the client is associated. You can use the `CrossRegionalClientAssociations` value from `GET CrossRegionalClientAssociations` to determine how many sites the client is associated with. Note that a `SiteID` is returned and populated in the `ClientServices` response when `CrossRegionalLookup` is set to `true`.  Default: **false**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationId = 56; // int | Filters results to memberships that can be used to pay for scheduled services at that location. This parameter can not be passed when `CrossRegionalLookup` is `true`.
$RequestOffset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->clientGetActiveClientMemberships($RequestClientId, $RequestClientAssociatedSitesOffset, $RequestCrossRegionalLookup, $RequestLimit, $RequestLocationId, $RequestOffset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetActiveClientMemberships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClientId** | **string**| The ID of the client for whom memberships are returned. |
 **RequestClientAssociatedSitesOffset** | **int**| Used to retrieve a client’s memberships from multiple sites within an organization when the client is associated with more than ten sites. To change which ten sites are searched, change this offset value. A value of 0 means that no sites are skipped and the first ten sites are returned. You can use the &#x60;CrossRegionalClientAssociations&#x60; value from &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites the client is associated with. Note that you must always have &#x60;CrossRegionalLookup&#x60; set to &#x60;true&#x60; to use this parameter.&lt;br /&gt;  Default: **0**    For example, if a client is associated with 25 sites, you need to call &#x60;GetClientServices&#x60; three times, as follows:  * Use &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites a client is associated with, which tells you how many additional calls you need to make.  * Either omit &#x60;ClientAssociatedSitesOffset&#x60; or set it to 0 to return the client’s services (pricing options) from sites 1-10.  * Set &#x60;ClientAssociatedSitesOffset&#x60; to 10 to return the client pricing options from sites 11-20  * Set &#x60;ClientAssociatedSitesOffset&#x60; to 20 to return the client pricing options from sites 21-25 | [optional]
 **RequestCrossRegionalLookup** | **bool**| Used to retrieve a client’s memberships from multiple sites within an organization. When included and set to &#x60;true&#x60;, it searches a maximum of ten sites with which this client is associated. When a client is associated with more than ten sites, use &#x60;ClientAssociatedSitesOffset&#x60; as many times as needed to search the additional sites with which the client is associated. You can use the &#x60;CrossRegionalClientAssociations&#x60; value from &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites the client is associated with. Note that a &#x60;SiteID&#x60; is returned and populated in the &#x60;ClientServices&#x60; response when &#x60;CrossRegionalLookup&#x60; is set to &#x60;true&#x60;.  Default: **false** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationId** | **int**| Filters results to memberships that can be used to pay for scheduled services at that location. This parameter can not be passed when &#x60;CrossRegionalLookup&#x60; is &#x60;true&#x60;. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetActiveClientMembershipsResponse**](../Model/GetActiveClientMembershipsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetActiveClientsMemberships**
> \Nlocascio\Mindbody\Model\GetActiveClientsMembershipsResponse clientGetActiveClientsMemberships($RequestClientIds, $RequestClientAssociatedSitesOffset, $RequestCrossRegionalLookup, $RequestLimit, $RequestLocationId, $RequestOffset)

Get a client's active memberships.

The endpoint returns a list of memberships for multiple clients we pass in query parameter. Please note that clients memberships with location restrictions can only be used to pay for scheduled services at the site to which they belong. Memberships with location restrictions can not be used to pay for scheduled services at other sites within an organization.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClientIds = array("RequestClientIds_example"); // string[] | The ID of the client for whom memberships are returned. Maximum allowed : 200.
$RequestClientAssociatedSitesOffset = 56; // int | Used to retrieve a client’s memberships from multiple sites within an organization when the client is associated with more than ten sites. To change which ten sites are searched, change this offset value. A value of 0 means that no sites are skipped and the first ten sites are returned. You can use the `CrossRegionalClientAssociations` value from `GET CrossRegionalClientAssociations` to determine how many sites the client is associated with. Note that you must always have `CrossRegionalLookup` set to `true` to use this parameter.<br />  Default: **0**    For example, if a client is associated with 25 sites, you need to call `GetClientServices` three times, as follows:  * Use `GET CrossRegionalClientAssociations` to determine how many sites a client is associated with, which tells you how many additional calls you need to make.  * Either omit `ClientAssociatedSitesOffset` or set it to 0 to return the client’s services (pricing options) from sites 1-10.  * Set `ClientAssociatedSitesOffset` to 10 to return the client pricing options from sites 11-20  * Set `ClientAssociatedSitesOffset` to 20 to return the client pricing options from sites 21-25
$RequestCrossRegionalLookup = true; // bool | Used to retrieve a client’s memberships from multiple sites within an organization. When included and set to `true`, it searches a maximum of ten sites with which this client is associated. When a client is associated with more than ten sites, use `ClientAssociatedSitesOffset` as many times as needed to search the additional sites with which the client is associated. You can use the `CrossRegionalClientAssociations` value from `GET CrossRegionalClientAssociations` to determine how many sites the client is associated with. Note that a `SiteID` is returned and populated in the `ClientServices` response when `CrossRegionalLookup` is set to `true`.  Default: **false**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationId = 56; // int | Filters results to memberships that can be used to pay for scheduled services at that location. This parameter can not be passed when `CrossRegionalLookup` is `true`.
$RequestOffset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->clientGetActiveClientsMemberships($RequestClientIds, $RequestClientAssociatedSitesOffset, $RequestCrossRegionalLookup, $RequestLimit, $RequestLocationId, $RequestOffset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetActiveClientsMemberships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClientIds** | [**string[]**](../Model/string.md)| The ID of the client for whom memberships are returned. Maximum allowed : 200. |
 **RequestClientAssociatedSitesOffset** | **int**| Used to retrieve a client’s memberships from multiple sites within an organization when the client is associated with more than ten sites. To change which ten sites are searched, change this offset value. A value of 0 means that no sites are skipped and the first ten sites are returned. You can use the &#x60;CrossRegionalClientAssociations&#x60; value from &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites the client is associated with. Note that you must always have &#x60;CrossRegionalLookup&#x60; set to &#x60;true&#x60; to use this parameter.&lt;br /&gt;  Default: **0**    For example, if a client is associated with 25 sites, you need to call &#x60;GetClientServices&#x60; three times, as follows:  * Use &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites a client is associated with, which tells you how many additional calls you need to make.  * Either omit &#x60;ClientAssociatedSitesOffset&#x60; or set it to 0 to return the client’s services (pricing options) from sites 1-10.  * Set &#x60;ClientAssociatedSitesOffset&#x60; to 10 to return the client pricing options from sites 11-20  * Set &#x60;ClientAssociatedSitesOffset&#x60; to 20 to return the client pricing options from sites 21-25 | [optional]
 **RequestCrossRegionalLookup** | **bool**| Used to retrieve a client’s memberships from multiple sites within an organization. When included and set to &#x60;true&#x60;, it searches a maximum of ten sites with which this client is associated. When a client is associated with more than ten sites, use &#x60;ClientAssociatedSitesOffset&#x60; as many times as needed to search the additional sites with which the client is associated. You can use the &#x60;CrossRegionalClientAssociations&#x60; value from &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites the client is associated with. Note that a &#x60;SiteID&#x60; is returned and populated in the &#x60;ClientServices&#x60; response when &#x60;CrossRegionalLookup&#x60; is set to &#x60;true&#x60;.  Default: **false** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationId** | **int**| Filters results to memberships that can be used to pay for scheduled services at that location. This parameter can not be passed when &#x60;CrossRegionalLookup&#x60; is &#x60;true&#x60;. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetActiveClientsMembershipsResponse**](../Model/GetActiveClientsMembershipsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientAccountBalances**
> \Nlocascio\Mindbody\Model\GetClientAccountBalancesResponse clientGetClientAccountBalances($RequestClientIds, $RequestBalanceDate, $RequestClassId, $RequestLimit, $RequestOffset)

Get account balance information for one or more client(s).

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClientIds = array("RequestClientIds_example"); // string[] | The list of clients IDs for which you want account balances.
$RequestBalanceDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date you want a balance relative to.   Default: **the current date**
$RequestClassId = 56; // int | The class ID of the event for which you want a balance.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->clientGetClientAccountBalances($RequestClientIds, $RequestBalanceDate, $RequestClassId, $RequestLimit, $RequestOffset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientAccountBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClientIds** | [**string[]**](../Model/string.md)| The list of clients IDs for which you want account balances. |
 **RequestBalanceDate** | **\DateTime**| The date you want a balance relative to.   Default: **the current date** | [optional]
 **RequestClassId** | **int**| The class ID of the event for which you want a balance. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetClientAccountBalancesResponse**](../Model/GetClientAccountBalancesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientCompleteInfo**
> \Nlocascio\Mindbody\Model\GetClientCompleteInfoResponse clientGetClientCompleteInfo($RequestClientId, $RequestClientAssociatedSitesOffset, $RequestCrossRegionalLookup, $RequestEndDate, $RequestRequiredClientData, $RequestStartDate)

Get Services, Contracts, MemberShips and Arrivals for Client as per requirement

This endpoint returns complete client information along with list of purchased services, contract details, membership details and arrival programs for a specific client.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClientId = "RequestClientId_example"; // string | The ID of the client to query.
$RequestClientAssociatedSitesOffset = 56; // int | Used to retrieve a client’s pricing options from multiple sites within an organization when the client is associated with more than ten sites. To change which ten sites are searched, change this offset value. A value of 0 means that no sites are skipped and the first ten sites are returned. You can use the `CrossRegionalClientAssociations` value from `GET CrossRegionalClientAssociations` to determine how many sites the client is associated with. Note that you must always have `CrossRegionalLookup` set to `true` to use this parameter.<br />  Default: **0**    For example, if a client is associated with 25 sites, you need to call `GetClientServices` three times, as follows:  * Use `GET CrossRegionalClientAssociations` to determine how many sites a client is associated with, which tells you how many additional calls you need to make.  * Either omit `ClientAssociatedSitesOffset` or set it to 0 to return the client’s services (pricing options) from sites 1-10.  * Set `ClientAssociatedSitesOffset` to 10 to return the client pricing options from sites 11-20  * Set `ClientAssociatedSitesOffset` to 20 to return the client pricing options from sites 21-25
$RequestCrossRegionalLookup = true; // bool | Used to retrieve a client’s data from multiple sites within an organization.  Default: **false**
$RequestEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to pricing options that are valid on or before this date.
$RequestRequiredClientData = array("RequestRequiredClientData_example"); // string[] | Used to store the required type of data for particular client
$RequestStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to pricing options that are valid on or after this date.

try {
    $result = $apiInstance->clientGetClientCompleteInfo($RequestClientId, $RequestClientAssociatedSitesOffset, $RequestCrossRegionalLookup, $RequestEndDate, $RequestRequiredClientData, $RequestStartDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientCompleteInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClientId** | **string**| The ID of the client to query. |
 **RequestClientAssociatedSitesOffset** | **int**| Used to retrieve a client’s pricing options from multiple sites within an organization when the client is associated with more than ten sites. To change which ten sites are searched, change this offset value. A value of 0 means that no sites are skipped and the first ten sites are returned. You can use the &#x60;CrossRegionalClientAssociations&#x60; value from &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites the client is associated with. Note that you must always have &#x60;CrossRegionalLookup&#x60; set to &#x60;true&#x60; to use this parameter.&lt;br /&gt;  Default: **0**    For example, if a client is associated with 25 sites, you need to call &#x60;GetClientServices&#x60; three times, as follows:  * Use &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites a client is associated with, which tells you how many additional calls you need to make.  * Either omit &#x60;ClientAssociatedSitesOffset&#x60; or set it to 0 to return the client’s services (pricing options) from sites 1-10.  * Set &#x60;ClientAssociatedSitesOffset&#x60; to 10 to return the client pricing options from sites 11-20  * Set &#x60;ClientAssociatedSitesOffset&#x60; to 20 to return the client pricing options from sites 21-25 | [optional]
 **RequestCrossRegionalLookup** | **bool**| Used to retrieve a client’s data from multiple sites within an organization.  Default: **false** | [optional]
 **RequestEndDate** | **\DateTime**| Filters results to pricing options that are valid on or before this date. | [optional]
 **RequestRequiredClientData** | [**string[]**](../Model/string.md)| Used to store the required type of data for particular client | [optional]
 **RequestStartDate** | **\DateTime**| Filters results to pricing options that are valid on or after this date. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetClientCompleteInfoResponse**](../Model/GetClientCompleteInfoResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientContracts**
> \Nlocascio\Mindbody\Model\GetClientContractsResponse clientGetClientContracts($RequestClientId, $RequestClientAssociatedSitesOffset, $RequestCrossRegionalLookup, $RequestLimit, $RequestOffset)

Get contracts that a client has purchased.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClientId = "RequestClientId_example"; // string | The ID of the client.
$RequestClientAssociatedSitesOffset = 56; // int | Determines how many sites are skipped over when retrieving a client’s cross regional contracts. Used when a client ID is linked to more than ten sites in an organization. Only a maximum of ten site databases are queried when this call is made and `CrossRegionalLookup` is set to `true`. To change which sites are queried, change this offset value.  Default: **0**
$RequestCrossRegionalLookup = true; // bool | When `true`, indicates that the requesting client’s cross regional contracts are returned, if any.<br />  When `false`, indicates that cross regional contracts are not returned.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->clientGetClientContracts($RequestClientId, $RequestClientAssociatedSitesOffset, $RequestCrossRegionalLookup, $RequestLimit, $RequestOffset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClientId** | **string**| The ID of the client. |
 **RequestClientAssociatedSitesOffset** | **int**| Determines how many sites are skipped over when retrieving a client’s cross regional contracts. Used when a client ID is linked to more than ten sites in an organization. Only a maximum of ten site databases are queried when this call is made and &#x60;CrossRegionalLookup&#x60; is set to &#x60;true&#x60;. To change which sites are queried, change this offset value.  Default: **0** | [optional]
 **RequestCrossRegionalLookup** | **bool**| When &#x60;true&#x60;, indicates that the requesting client’s cross regional contracts are returned, if any.&lt;br /&gt;  When &#x60;false&#x60;, indicates that cross regional contracts are not returned. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetClientContractsResponse**](../Model/GetClientContractsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientDuplicates**
> \Nlocascio\Mindbody\Model\GetClientDuplicatesResponse clientGetClientDuplicates($RequestEmail, $RequestFirstName, $RequestLastName, $RequestLimit, $RequestOffset)

Get client records that would be considered duplicates of the client values passed in.

This endpoint gets client records that would be considered duplicates based on case-insensitive matching of the client’s first name, last name, and email. For there to be results, all three parameters must match a client record. This endpoint requires staff user credentials.                An empty `ClientDuplicates` object in the response from this endpoint indicates that there were no client records found that match the first name, last name, and email fields passed in.                If one client record is returned, it is not a duplicate itself, but no other client record can be created or updated that would match this client’s first name, last name, and email combination.                If more than one client record is returned, these clients are duplicates of each other.We recommend discussing with the business how they would like to resolve duplicate records in the event the response contains more than one client record.Businesses can use the Merge Duplicate Clients tool in the Core Business Mode software to resolve the duplicate client records.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestEmail = "RequestEmail_example"; // string | The client email to match on when searching for duplicates.
$RequestFirstName = "RequestFirstName_example"; // string | The client first name to match on when searching for duplicates.
$RequestLastName = "RequestLastName_example"; // string | The client last name to match on when searching for duplicates.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->clientGetClientDuplicates($RequestEmail, $RequestFirstName, $RequestLastName, $RequestLimit, $RequestOffset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientDuplicates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestEmail** | **string**| The client email to match on when searching for duplicates. | [optional]
 **RequestFirstName** | **string**| The client first name to match on when searching for duplicates. | [optional]
 **RequestLastName** | **string**| The client last name to match on when searching for duplicates. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetClientDuplicatesResponse**](../Model/GetClientDuplicatesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientFormulaNotes**
> \Nlocascio\Mindbody\Model\GetClientFormulaNotesResponse clientGetClientFormulaNotes($RequestAppointmentId, $RequestClientId, $RequestLimit, $RequestOffset)

Get a client's formula notes.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestAppointmentId = 789; // int | The appointment ID of an appointment in the studio specified in the header of the request.
$RequestClientId = "RequestClientId_example"; // string | The client ID of the client whose formula notes are being requested.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->clientGetClientFormulaNotes($RequestAppointmentId, $RequestClientId, $RequestLimit, $RequestOffset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientFormulaNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestAppointmentId** | **int**| The appointment ID of an appointment in the studio specified in the header of the request. | [optional]
 **RequestClientId** | **string**| The client ID of the client whose formula notes are being requested. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetClientFormulaNotesResponse**](../Model/GetClientFormulaNotesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientIndexes**
> \Nlocascio\Mindbody\Model\GetClientIndexesResponse clientGetClientIndexes($RequestRequiredOnly)

Get a site's configured client indexes and client index values.

Client indexes are used to analyze client demographics. A business owner can set up different categories with sets of values which they can assign to each client. Client indexes are used in client searches, for tagging clients so that the owner can send mass emails to similar groups, and for many reports.    For more information, see Client Indexes and [Client Index Values (video tutorial)](https://support.mindbodyonline.com/s/article/203261653-Client-indexes-and-client-index-values-video-tutorial?language=en_USclient).

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestRequiredOnly = true; // bool | When `true`, filters the results to only indexes that are required on creation.<br />  When `false` or omitted, returns all of the client indexes.

try {
    $result = $apiInstance->clientGetClientIndexes($RequestRequiredOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientIndexes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestRequiredOnly** | **bool**| When &#x60;true&#x60;, filters the results to only indexes that are required on creation.&lt;br /&gt;  When &#x60;false&#x60; or omitted, returns all of the client indexes. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetClientIndexesResponse**](../Model/GetClientIndexesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientPurchases**
> \Nlocascio\Mindbody\Model\GetClientPurchasesResponse clientGetClientPurchases($RequestClientId, $RequestEndDate, $RequestLimit, $RequestOffset, $RequestSaleId, $RequestStartDate)

Get a client's purchase history.

Gets a list of purchases made by a specific client.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClientId = "RequestClientId_example"; // string | The ID of the client you are querying for purchases.
$RequestEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to purchases made before this timestamp.<br />  Default: **end of today**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestSaleId = 56; // int | Filters results to the single record associated with this ID.
$RequestStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to purchases made on or after this timestamp.<br />  Default: **now**

try {
    $result = $apiInstance->clientGetClientPurchases($RequestClientId, $RequestEndDate, $RequestLimit, $RequestOffset, $RequestSaleId, $RequestStartDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientPurchases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClientId** | **string**| The ID of the client you are querying for purchases. |
 **RequestEndDate** | **\DateTime**| Filters results to purchases made before this timestamp.&lt;br /&gt;  Default: **end of today** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestSaleId** | **int**| Filters results to the single record associated with this ID. | [optional]
 **RequestStartDate** | **\DateTime**| Filters results to purchases made on or after this timestamp.&lt;br /&gt;  Default: **now** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetClientPurchasesResponse**](../Model/GetClientPurchasesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientReferralTypes**
> \Nlocascio\Mindbody\Model\GetClientReferralTypesResponse clientGetClientReferralTypes($RequestIncludeInactive)

Get a site's configured client referral types.

Gets a list of referral types. Referral types are options that new clients can choose to identify how they learned about the business. Referral types are typically used for the sign-up process.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestIncludeInactive = true; // bool | When `true`, filters the results to include subtypes and inactive referral types.<br />  When `false`, includes no subtypes and only active types.  Default:**false**

try {
    $result = $apiInstance->clientGetClientReferralTypes($RequestIncludeInactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientReferralTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestIncludeInactive** | **bool**| When &#x60;true&#x60;, filters the results to include subtypes and inactive referral types.&lt;br /&gt;  When &#x60;false&#x60;, includes no subtypes and only active types.  Default:**false** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetClientReferralTypesResponse**](../Model/GetClientReferralTypesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientRewards**
> \Nlocascio\Mindbody\Model\GetClientRewardsResponse clientGetClientRewards($RequestClientId, $RequestEndDate, $RequestLimit, $RequestOffset, $RequestStartDate)



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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClientId = "RequestClientId_example"; // string | The ID of the client whose reward information is being requested.
$RequestEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to rewards transactions created before this date.<br />  Default: **the start date**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to rewards transactions created on or after this date.<br />  Default: **the current date**

try {
    $result = $apiInstance->clientGetClientRewards($RequestClientId, $RequestEndDate, $RequestLimit, $RequestOffset, $RequestStartDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientRewards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClientId** | **string**| The ID of the client whose reward information is being requested. |
 **RequestEndDate** | **\DateTime**| Filters the results to rewards transactions created before this date.&lt;br /&gt;  Default: **the start date** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestStartDate** | **\DateTime**| Filters the results to rewards transactions created on or after this date.&lt;br /&gt;  Default: **the current date** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetClientRewardsResponse**](../Model/GetClientRewardsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientSchedule**
> \Nlocascio\Mindbody\Model\GetClientScheduleResponse clientGetClientSchedule($RequestClientId, $RequestClientAssociatedSitesOffset, $RequestCrossRegionalLookup, $RequestEndDate, $RequestLimit, $RequestOffset, $RequestStartDate)

Gets a client's schedule history.

This endpoint can be utilized to retrieve scheduled visits which is associated with the requested client.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClientId = "RequestClientId_example"; // string | The ID of the requested client.
$RequestClientAssociatedSitesOffset = 56; // int | The number of sites to skip when returning the site associated with a client.
$RequestCrossRegionalLookup = true; // bool | When `true`, indicates that past and scheduled client visits across all sites in the region are returned.  When `false`, indicates that only visits at the current site are returned.
$RequestEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date past which class visits are not returned.  Default is today’s date
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date before which class visits are not returned.  Default is the end date

try {
    $result = $apiInstance->clientGetClientSchedule($RequestClientId, $RequestClientAssociatedSitesOffset, $RequestCrossRegionalLookup, $RequestEndDate, $RequestLimit, $RequestOffset, $RequestStartDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClientId** | **string**| The ID of the requested client. |
 **RequestClientAssociatedSitesOffset** | **int**| The number of sites to skip when returning the site associated with a client. | [optional]
 **RequestCrossRegionalLookup** | **bool**| When &#x60;true&#x60;, indicates that past and scheduled client visits across all sites in the region are returned.  When &#x60;false&#x60;, indicates that only visits at the current site are returned. | [optional]
 **RequestEndDate** | **\DateTime**| The date past which class visits are not returned.  Default is today’s date | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestStartDate** | **\DateTime**| The date before which class visits are not returned.  Default is the end date | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetClientScheduleResponse**](../Model/GetClientScheduleResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientServices**
> \Nlocascio\Mindbody\Model\GetClientServicesResponse clientGetClientServices($RequestClientId, $RequestClassId, $RequestClientAssociatedSitesOffset, $RequestCrossRegionalLookup, $RequestEndDate, $RequestIgnoreCrossRegionalSiteLimit, $RequestLimit, $RequestLocationIds, $RequestOffset, $RequestProgramIds, $RequestSessionTypeId, $RequestShowActiveOnly, $RequestStartDate, $RequestVisitCount)

Get pricing options that a client has purchased.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClientId = "RequestClientId_example"; // string | The ID of the client to query. The results are a list of pricing options that the client has purchased. Note that “service” and “pricing option” are synonymous in this section of the documentation.
$RequestClassId = 56; // int | Filters results to only those pricing options that can be used to pay for this class.
$RequestClientAssociatedSitesOffset = 56; // int | Used to retrieve a client’s pricing options from multiple sites within an organization when the client is associated with more than ten sites. To change which ten sites are searched, change this offset value. A value of 0 means that no sites are skipped and the first ten sites are returned. You can use the `CrossRegionalClientAssociations` value from `GET CrossRegionalClientAssociations` to determine how many sites the client is associated with. Note that you must always have `CrossRegionalLookup` set to `true` to use this parameter.<br />  Default: **0**    For example, if a client is associated with 25 sites, you need to call `GetClientServices` three times, as follows:  * Use `GET CrossRegionalClientAssociations` to determine how many sites a client is associated with, which tells you how many additional calls you need to make.  * Either omit `ClientAssociatedSitesOffset` or set it to 0 to return the client’s services (pricing options) from sites 1-10.  * Set `ClientAssociatedSitesOffset` to 10 to return the client pricing options from sites 11-20  * Set `ClientAssociatedSitesOffset` to 20 to return the client pricing options from sites 21-25
$RequestCrossRegionalLookup = true; // bool | Used to retrieve a client’s pricing options from multiple sites within an organization. When included and set to `true`, it searches a maximum of ten sites with which this client is associated. When a client is associated with more than ten sites, use `ClientAssociatedSitesOffset` as many times as needed to search the additional sites with which the client is associated. You can use the `CrossRegionalClientAssociations` value from `GET CrossRegionalClientAssociations` to determine how many sites the client is associated with. Note that a `SiteID` is returned and populated in the `ClientServices` response when `CrossRegionalLookup` is set to `true`.  Default: **false**
$RequestEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to pricing options that are valid on or before this date.  Default: **today’s date**
$RequestIgnoreCrossRegionalSiteLimit = true; // bool | Used to specify if the number of cross regional sites used to search for client’s pricing options should be ignored.   Default: **false**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationIds = array(56); // int[] | Filters results to pricing options that can be used at the listed location IDs.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestProgramIds = array(56); // int[] | Filters results to pricing options that belong to one of the given program IDs.
$RequestSessionTypeId = 56; // int | Filters results to pricing options that will pay for the given session type ID. Use this to find pricing options that will pay for a specific appointment type.
$RequestShowActiveOnly = true; // bool | When `true`, includes active services only.  Default: **false**
$RequestStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to pricing options that are valid on or after this date.  Default: **today’s date**
$RequestVisitCount = 56; // int | A filter on the minimum number of visits a service can pay for.

try {
    $result = $apiInstance->clientGetClientServices($RequestClientId, $RequestClassId, $RequestClientAssociatedSitesOffset, $RequestCrossRegionalLookup, $RequestEndDate, $RequestIgnoreCrossRegionalSiteLimit, $RequestLimit, $RequestLocationIds, $RequestOffset, $RequestProgramIds, $RequestSessionTypeId, $RequestShowActiveOnly, $RequestStartDate, $RequestVisitCount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClientId** | **string**| The ID of the client to query. The results are a list of pricing options that the client has purchased. Note that “service” and “pricing option” are synonymous in this section of the documentation. |
 **RequestClassId** | **int**| Filters results to only those pricing options that can be used to pay for this class. | [optional]
 **RequestClientAssociatedSitesOffset** | **int**| Used to retrieve a client’s pricing options from multiple sites within an organization when the client is associated with more than ten sites. To change which ten sites are searched, change this offset value. A value of 0 means that no sites are skipped and the first ten sites are returned. You can use the &#x60;CrossRegionalClientAssociations&#x60; value from &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites the client is associated with. Note that you must always have &#x60;CrossRegionalLookup&#x60; set to &#x60;true&#x60; to use this parameter.&lt;br /&gt;  Default: **0**    For example, if a client is associated with 25 sites, you need to call &#x60;GetClientServices&#x60; three times, as follows:  * Use &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites a client is associated with, which tells you how many additional calls you need to make.  * Either omit &#x60;ClientAssociatedSitesOffset&#x60; or set it to 0 to return the client’s services (pricing options) from sites 1-10.  * Set &#x60;ClientAssociatedSitesOffset&#x60; to 10 to return the client pricing options from sites 11-20  * Set &#x60;ClientAssociatedSitesOffset&#x60; to 20 to return the client pricing options from sites 21-25 | [optional]
 **RequestCrossRegionalLookup** | **bool**| Used to retrieve a client’s pricing options from multiple sites within an organization. When included and set to &#x60;true&#x60;, it searches a maximum of ten sites with which this client is associated. When a client is associated with more than ten sites, use &#x60;ClientAssociatedSitesOffset&#x60; as many times as needed to search the additional sites with which the client is associated. You can use the &#x60;CrossRegionalClientAssociations&#x60; value from &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites the client is associated with. Note that a &#x60;SiteID&#x60; is returned and populated in the &#x60;ClientServices&#x60; response when &#x60;CrossRegionalLookup&#x60; is set to &#x60;true&#x60;.  Default: **false** | [optional]
 **RequestEndDate** | **\DateTime**| Filters results to pricing options that are valid on or before this date.  Default: **today’s date** | [optional]
 **RequestIgnoreCrossRegionalSiteLimit** | **bool**| Used to specify if the number of cross regional sites used to search for client’s pricing options should be ignored.   Default: **false** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationIds** | [**int[]**](../Model/int.md)| Filters results to pricing options that can be used at the listed location IDs. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestProgramIds** | [**int[]**](../Model/int.md)| Filters results to pricing options that belong to one of the given program IDs. | [optional]
 **RequestSessionTypeId** | **int**| Filters results to pricing options that will pay for the given session type ID. Use this to find pricing options that will pay for a specific appointment type. | [optional]
 **RequestShowActiveOnly** | **bool**| When &#x60;true&#x60;, includes active services only.  Default: **false** | [optional]
 **RequestStartDate** | **\DateTime**| Filters results to pricing options that are valid on or after this date.  Default: **today’s date** | [optional]
 **RequestVisitCount** | **int**| A filter on the minimum number of visits a service can pay for. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetClientServicesResponse**](../Model/GetClientServicesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientVisits**
> \Nlocascio\Mindbody\Model\GetClientVisitsResponse clientGetClientVisits($RequestClientId, $RequestClientAssociatedSitesOffset, $RequestCrossRegionalLookup, $RequestEndDate, $RequestLimit, $RequestOffset, $RequestStartDate, $RequestUnpaidsOnly)

Get a client's visit history.

Gets the Client Visits for a specific client.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClientId = "RequestClientId_example"; // string | The ID of the requested client.
$RequestClientAssociatedSitesOffset = 56; // int | The number of sites to skip when returning the site associated with a client.
$RequestCrossRegionalLookup = true; // bool | When `true`, indicates that past and scheduled client visits across all sites in the region are returned.<br />  When `false`, indicates that only visits at the current site are returned.
$RequestEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date past which class visits are not returned.  Default: **today’s date**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date before which class visits are not returned.  Default: **the end date**
$RequestUnpaidsOnly = true; // bool | When `true`, indicates that only visits that have not been paid for are returned.<br />  When `false`, indicates that all visits are returned, regardless of whether they have been paid for.<br />  Default: **false**

try {
    $result = $apiInstance->clientGetClientVisits($RequestClientId, $RequestClientAssociatedSitesOffset, $RequestCrossRegionalLookup, $RequestEndDate, $RequestLimit, $RequestOffset, $RequestStartDate, $RequestUnpaidsOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientVisits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClientId** | **string**| The ID of the requested client. |
 **RequestClientAssociatedSitesOffset** | **int**| The number of sites to skip when returning the site associated with a client. | [optional]
 **RequestCrossRegionalLookup** | **bool**| When &#x60;true&#x60;, indicates that past and scheduled client visits across all sites in the region are returned.&lt;br /&gt;  When &#x60;false&#x60;, indicates that only visits at the current site are returned. | [optional]
 **RequestEndDate** | **\DateTime**| The date past which class visits are not returned.  Default: **today’s date** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestStartDate** | **\DateTime**| The date before which class visits are not returned.  Default: **the end date** | [optional]
 **RequestUnpaidsOnly** | **bool**| When &#x60;true&#x60;, indicates that only visits that have not been paid for are returned.&lt;br /&gt;  When &#x60;false&#x60;, indicates that all visits are returned, regardless of whether they have been paid for.&lt;br /&gt;  Default: **false** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetClientVisitsResponse**](../Model/GetClientVisitsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClients**
> \Nlocascio\Mindbody\Model\GetClientsResponse clientGetClients($RequestClientIDs, $RequestIncludeInactive, $RequestIsProspect, $RequestLastModifiedDate, $RequestLimit, $RequestOffset, $RequestSearchText, $RequestUniqueIds)

Get clients.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClientIDs = array("RequestClientIDs_example"); // string[] | The requested client IDs.  Default: **all IDs** that the authenticated user’s access level allows.<br />  Note: You can fetch information for maximum 20 clients at once.
$RequestIncludeInactive = true; // bool | When `true`, indicates the results to include active and inactive clients.<br />  When `false`, indicates that only those clients who are marked as active should be returned.  Default: **false**
$RequestIsProspect = true; // bool | When `true`, filters the results to include only those clients marked as prospects for the business.<br />  When `false`, indicates that only those clients who are not marked prospects should be returned.
$RequestLastModifiedDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to include only the clients that have been modified on or after this date.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestSearchText = "RequestSearchText_example"; // string | Text to use in the search. Can include FirstName, LastName, and Email. Note that user credentials must be provided.
$RequestUniqueIds = array(56); // int[] | Filters results to clients with these `UniqueIDs`. This parameter cannot be used with `ClientIDs` or `SearchText`.  Default: **all UniqueIDs** that the authenticated user’s access level allows.

try {
    $result = $apiInstance->clientGetClients($RequestClientIDs, $RequestIncludeInactive, $RequestIsProspect, $RequestLastModifiedDate, $RequestLimit, $RequestOffset, $RequestSearchText, $RequestUniqueIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClientIDs** | [**string[]**](../Model/string.md)| The requested client IDs.  Default: **all IDs** that the authenticated user’s access level allows.&lt;br /&gt;  Note: You can fetch information for maximum 20 clients at once. | [optional]
 **RequestIncludeInactive** | **bool**| When &#x60;true&#x60;, indicates the results to include active and inactive clients.&lt;br /&gt;  When &#x60;false&#x60;, indicates that only those clients who are marked as active should be returned.  Default: **false** | [optional]
 **RequestIsProspect** | **bool**| When &#x60;true&#x60;, filters the results to include only those clients marked as prospects for the business.&lt;br /&gt;  When &#x60;false&#x60;, indicates that only those clients who are not marked prospects should be returned. | [optional]
 **RequestLastModifiedDate** | **\DateTime**| Filters the results to include only the clients that have been modified on or after this date. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestSearchText** | **string**| Text to use in the search. Can include FirstName, LastName, and Email. Note that user credentials must be provided. | [optional]
 **RequestUniqueIds** | [**int[]**](../Model/int.md)| Filters results to clients with these &#x60;UniqueIDs&#x60;. This parameter cannot be used with &#x60;ClientIDs&#x60; or &#x60;SearchText&#x60;.  Default: **all UniqueIDs** that the authenticated user’s access level allows. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetClientsResponse**](../Model/GetClientsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetContactLogTypes**
> \Nlocascio\Mindbody\Model\GetContactLogTypesResponse clientGetContactLogTypes($RequestContactLogTypeId, $RequestLimit, $RequestOffset)

Get All Active Contact Log Types

This endpoint contains a variety of filters that can return not just all contact logs, but also system-generated contact logs, contact logs assigned to specific staff members, and contact logs of specific types or subtypes.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestContactLogTypeId = 56; // int | The requested ContactLogType ID.  Default: **all** IDs that the authenticated user’s access level allows.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->clientGetContactLogTypes($RequestContactLogTypeId, $RequestLimit, $RequestOffset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetContactLogTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestContactLogTypeId** | **int**| The requested ContactLogType ID.  Default: **all** IDs that the authenticated user’s access level allows. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetContactLogTypesResponse**](../Model/GetContactLogTypesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetContactLogs**
> \Nlocascio\Mindbody\Model\GetContactLogsResponse clientGetContactLogs($RequestClientId, $RequestEndDate, $RequestLimit, $RequestOffset, $RequestShowSystemGenerated, $RequestStaffIds, $RequestStartDate, $RequestSubtypeIds, $RequestTypeIds)

Get contact logs on a client's account.

This endpoint contains a variety of filters that can return not just all contact logs, but also system-generated contact logs, contact logs assigned to specific staff members, and contact logs of specific types or subtypes.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClientId = "RequestClientId_example"; // string | The ID of the client whose contact logs are being requested.
$RequestEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to contact logs created before this date.<br />  Default: **the start date**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestShowSystemGenerated = true; // bool | When `true`, system-generated contact logs are returned in the results.<br />  Default: **false**
$RequestStaffIds = array(56); // int[] | Filters the results to return contact logs assigned to one or more staff IDs.
$RequestStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to contact logs created on or after this date.<br />  Default: **the current date**
$RequestSubtypeIds = array(56); // int[] | Filters the results to contact logs assigned one or more of these subtype IDs.
$RequestTypeIds = array(56); // int[] | Filters the results to contact logs assigned one or more of these type IDs.

try {
    $result = $apiInstance->clientGetContactLogs($RequestClientId, $RequestEndDate, $RequestLimit, $RequestOffset, $RequestShowSystemGenerated, $RequestStaffIds, $RequestStartDate, $RequestSubtypeIds, $RequestTypeIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetContactLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClientId** | **string**| The ID of the client whose contact logs are being requested. |
 **RequestEndDate** | **\DateTime**| Filters the results to contact logs created before this date.&lt;br /&gt;  Default: **the start date** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestShowSystemGenerated** | **bool**| When &#x60;true&#x60;, system-generated contact logs are returned in the results.&lt;br /&gt;  Default: **false** | [optional]
 **RequestStaffIds** | [**int[]**](../Model/int.md)| Filters the results to return contact logs assigned to one or more staff IDs. | [optional]
 **RequestStartDate** | **\DateTime**| Filters the results to contact logs created on or after this date.&lt;br /&gt;  Default: **the current date** | [optional]
 **RequestSubtypeIds** | [**int[]**](../Model/int.md)| Filters the results to contact logs assigned one or more of these subtype IDs. | [optional]
 **RequestTypeIds** | [**int[]**](../Model/int.md)| Filters the results to contact logs assigned one or more of these type IDs. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetContactLogsResponse**](../Model/GetContactLogsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetCrossRegionalClientAssociations**
> \Nlocascio\Mindbody\Model\GetCrossRegionalClientAssociationsResponse clientGetCrossRegionalClientAssociations($RequestClientId, $RequestEmail, $RequestLimit, $RequestOffset)

Get a client's cross regional site associations.

Returns a list of sites that a particular client ID (also referred to as an RSSID) or a client email address is associated with in a cross-regional organization. Either the `ClientID` or `Email` parameter is required. If both are provided, the `ClientID` is used.    Use this endpoint to retrieve information for other Public API endpoints, about the same client at multiple sites within an organization. To use this endpoint, your developer account must have been granted permission to the site’s entire organization.    Note that this endpoint does not work on the Developer Sandbox site, as it is not set up for cross-regional use cases.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClientId = "RequestClientId_example"; // string | Looks up the cross regional associations by the client’s ID. Either `ClientId` or `Email` must be provided. If both are provided, the `ClientId` is used by default.
$RequestEmail = "RequestEmail_example"; // string | Looks up the cross regional associations by the client’s email address. Either `ClientId` or `Email` must be provided. If both are provided, the `ClientId` is used by default.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->clientGetCrossRegionalClientAssociations($RequestClientId, $RequestEmail, $RequestLimit, $RequestOffset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetCrossRegionalClientAssociations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClientId** | **string**| Looks up the cross regional associations by the client’s ID. Either &#x60;ClientId&#x60; or &#x60;Email&#x60; must be provided. If both are provided, the &#x60;ClientId&#x60; is used by default. | [optional]
 **RequestEmail** | **string**| Looks up the cross regional associations by the client’s email address. Either &#x60;ClientId&#x60; or &#x60;Email&#x60; must be provided. If both are provided, the &#x60;ClientId&#x60; is used by default. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetCrossRegionalClientAssociationsResponse**](../Model/GetCrossRegionalClientAssociationsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetCustomClientFields**
> \Nlocascio\Mindbody\Model\GetCustomClientFieldsResponse clientGetCustomClientFields($RequestLimit, $RequestOffset)

Get a site's configured custom client fields.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->clientGetCustomClientFields($RequestLimit, $RequestOffset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetCustomClientFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetCustomClientFieldsResponse**](../Model/GetCustomClientFieldsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetDirectDebitInfo**
> \Nlocascio\Mindbody\Model\DirectDebitInfo clientGetDirectDebitInfo($ClientId)

Get direct debit info for a client.

This endpoint returns direct debit info stored on a client's account. This endpoint requires staff user credentials.                A null response from this endpoint indicates that the client has no usable direct debit information on their account.Use the POST AddClientDirectDebitInfo endpoint to add direct debit information to a client’s account.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ClientId = "ClientId_example"; // string | 

try {
    $result = $apiInstance->clientGetDirectDebitInfo($ClientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetDirectDebitInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ClientId** | **string**|  | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\DirectDebitInfo**](../Model/DirectDebitInfo.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetRequiredClientFields**
> \Nlocascio\Mindbody\Model\GetRequiredClientFieldsResponse clientGetRequiredClientFields()

Get client required fields for a site.

Gets the list of fields that a new client has to fill out in business mode, specifically for the sign-up process. `AddClient` and `UpdateClient` validate against these fields.    This endpoint has no query parameters.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->clientGetRequiredClientFields();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetRequiredClientFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Nlocascio\Mindbody\Model\GetRequiredClientFieldsResponse**](../Model/GetRequiredClientFieldsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientMergeClient**
> object clientMergeClient($Request)



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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\MergeClientsRequest(); // \Nlocascio\Mindbody\Model\MergeClientsRequest | 

try {
    $result = $apiInstance->clientMergeClient($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientMergeClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\MergeClientsRequest**](../Model/MergeClientsRequest.md)|  |

### Return type

**object**

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientSendAutoEmail**
> object clientSendAutoEmail($Request)

Send a client a supported auto email

This endpoint requires staff user credentials.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\SendAutoEmailRequest(); // \Nlocascio\Mindbody\Model\SendAutoEmailRequest | 

try {
    $result = $apiInstance->clientSendAutoEmail($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientSendAutoEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\SendAutoEmailRequest**](../Model/SendAutoEmailRequest.md)|  |

### Return type

**object**

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientSendPasswordResetEmail**
> object clientSendPasswordResetEmail($Request)

Send a password reset email to a client.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\SendPasswordResetEmailRequest(); // \Nlocascio\Mindbody\Model\SendPasswordResetEmailRequest | 

try {
    $result = $apiInstance->clientSendPasswordResetEmail($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientSendPasswordResetEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\SendPasswordResetEmailRequest**](../Model/SendPasswordResetEmailRequest.md)|  |

### Return type

**object**

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientSuspendContract**
> \Nlocascio\Mindbody\Model\SuspendContractResponse clientSuspendContract($Request)

Suspend client contract

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\SuspendContractRequest(); // \Nlocascio\Mindbody\Model\SuspendContractRequest | 

try {
    $result = $apiInstance->clientSuspendContract($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientSuspendContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\SuspendContractRequest**](../Model/SuspendContractRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\SuspendContractResponse**](../Model/SuspendContractResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientTerminateContract**
> \Nlocascio\Mindbody\Model\TerminateContractResponse clientTerminateContract($Request)

Terminate client contract

This endpoint terminates a client contract. This endpoint requires staff user credentials with TerminateClientContract permission.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\TerminateContractRequest(); // \Nlocascio\Mindbody\Model\TerminateContractRequest | 

try {
    $result = $apiInstance->clientTerminateContract($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientTerminateContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\TerminateContractRequest**](../Model/TerminateContractRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\TerminateContractResponse**](../Model/TerminateContractResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientUpdateClient**
> \Nlocascio\Mindbody\Model\UpdateClientResponse clientUpdateClient($Request)

Update a client at a site.

Starting the week of May 11th, 2020 all versions of the Public API will no longer allow duplicate clients to be created. This applies to both adding a client and updating a client record. A duplicate client is created when two profiles have the same first name, last name and email.<br />   Updates an existing client for a specific subscriber.Passing a User Token as Authorization respects Business Mode required fields.Omitting the token respects Consumer Mode required fields.To make sure you are collecting all required pieces of information, first run GetRequiredClientFields..Use this endpoint as follows:   * If you need to update the `ReferredBy` parameter, use this endpoint after calling `GET ClientReferralTypes`.   * When updating a client’s home location, use after calling `GET Locations`.   * If you are updating a client’s stored credit card, use after calling `GET AcceptedCardTypes` so that you can make sure the card is a type that is accepted at the subscriber.   If this endpoint is used on a cross-regional site, passing in a client’s RSSID and email address creates a cross-regional link. This means that the client is created in cross-regional sites where the client does not exist and `GET CrossRegionalClientAssociations` returns all appropriate cross-regional sites. When `CrossRegionalUpdate` is omitted or set to `true`, the client’s updated information is propagated to all of the region’s sites. If `CrossRegionalUpdate` is set to `false`, only the local client is updated.      Note that the following items cannot be updated for a cross-regional client:   * `ClientIndexes`   * `ClientRelationships`   * `CustomClientFields`   * `SalesReps`   * `SendAccountEmails`   * `SendAccountTexts`   * `SendPromotionalEmails`   * `SendPromotionalTexts`   * `SendScheduleEmails`   * `SendScheduleTexts`   * `Gender` (for site custom values)  Custom client Gender options can only be created with non-cross-regional requests.     If you have purchased an Ultimate tier then this endpoint will automatically start showing a new opportunity on Sales Pipeline.It will create a new opportunity if the current request modify the contact as follows::     You need to update the `IsProspect` parameter, to `true`.<br />   You need to update the `ProspectStage`.`Description parameter`, to `New Lead`.<br />   Updates made to any inactive clients will automatically reactivate the client unless the `Acive` property is explicitly set to `false` in the request body.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\UpdateClientRequest(); // \Nlocascio\Mindbody\Model\UpdateClientRequest | 

try {
    $result = $apiInstance->clientUpdateClient($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientUpdateClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\UpdateClientRequest**](../Model/UpdateClientRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\UpdateClientResponse**](../Model/UpdateClientResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientUpdateClientContractAutopays**
> \Nlocascio\Mindbody\Model\Contract clientUpdateClientContractAutopays($Request)



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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\UpdateClientContractAutopaysRequest(); // \Nlocascio\Mindbody\Model\UpdateClientContractAutopaysRequest | 

try {
    $result = $apiInstance->clientUpdateClientContractAutopays($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientUpdateClientContractAutopays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\UpdateClientContractAutopaysRequest**](../Model/UpdateClientContractAutopaysRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\Contract**](../Model/Contract.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientUpdateClientRewards**
> \Nlocascio\Mindbody\Model\GetClientRewardsResponse clientUpdateClientRewards($Request)

Update Client Reward

Earns or redeems rewards points for a given client, based on site settings. Cross regional rewards are not supported at this time.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\UpdateClientRewardsRequest(); // \Nlocascio\Mindbody\Model\UpdateClientRewardsRequest | 

try {
    $result = $apiInstance->clientUpdateClientRewards($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientUpdateClientRewards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\UpdateClientRewardsRequest**](../Model/UpdateClientRewardsRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\GetClientRewardsResponse**](../Model/GetClientRewardsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientUpdateClientService**
> \Nlocascio\Mindbody\Model\UpdateClientServiceResponse clientUpdateClientService($Request)

Update a client's purchase pricing option.

Updates the active date and/or expiration date of a client pricing option. This request requires staff user credentials. If the active date is modified, the expiration date is also modified accordingly. If the expiration date is modified, the active date is unchanged.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\UpdateClientServiceRequest(); // \Nlocascio\Mindbody\Model\UpdateClientServiceRequest | 

try {
    $result = $apiInstance->clientUpdateClientService($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientUpdateClientService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\UpdateClientServiceRequest**](../Model/UpdateClientServiceRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\UpdateClientServiceResponse**](../Model/UpdateClientServiceResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientUpdateClientVisit**
> \Nlocascio\Mindbody\Model\UpdateClientVisitResponse clientUpdateClientVisit($Request)

Update a client's visit.

Updates the status of the specified visit.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\UpdateClientVisitRequest(); // \Nlocascio\Mindbody\Model\UpdateClientVisitRequest | 

try {
    $result = $apiInstance->clientUpdateClientVisit($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientUpdateClientVisit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\UpdateClientVisitRequest**](../Model/UpdateClientVisitRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\UpdateClientVisitResponse**](../Model/UpdateClientVisitResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientUpdateContactLog**
> \Nlocascio\Mindbody\Model\ContactLog clientUpdateContactLog($Request)

Update a contact log on a client's account.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\UpdateContactLogRequest(); // \Nlocascio\Mindbody\Model\UpdateContactLogRequest | 

try {
    $result = $apiInstance->clientUpdateContactLog($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientUpdateContactLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\UpdateContactLogRequest**](../Model/UpdateContactLogRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\ContactLog**](../Model/ContactLog.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientUploadClientDocument**
> \Nlocascio\Mindbody\Model\UploadClientDocumentResponse clientUploadClientDocument($Request)

Upload a document to a client's profile.

Uploads a document file for a specific client. Returns a string representation of the image byte array. The maximum size file that can be uploaded is **4MB**.

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\UploadClientDocumentRequest(); // \Nlocascio\Mindbody\Model\UploadClientDocumentRequest | 

try {
    $result = $apiInstance->clientUploadClientDocument($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientUploadClientDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\UploadClientDocumentRequest**](../Model/UploadClientDocumentRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\UploadClientDocumentResponse**](../Model/UploadClientDocumentResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientUploadClientPhoto**
> \Nlocascio\Mindbody\Model\UploadClientPhotoResponse clientUploadClientPhoto($Request)

Upload a profile photo to a client's profile.

Uploads a client’s profile photo. The maximum file size is 4 MB and acceptable file types are:  * bmp  * jpeg  * gif  * tiff  * png

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

$apiInstance = new Nlocascio\Mindbody\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\UploadClientPhotoRequest(); // \Nlocascio\Mindbody\Model\UploadClientPhotoRequest | 

try {
    $result = $apiInstance->clientUploadClientPhoto($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientUploadClientPhoto: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\UploadClientPhotoRequest**](../Model/UploadClientPhotoRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\UploadClientPhotoResponse**](../Model/UploadClientPhotoResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

