# Nlocascio\Mindbody\SiteApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**siteAddPromoCode**](SiteApi.md#siteAddPromoCode) | **POST** /public/v6/site/addpromocode | Add promo code to a site.
[**siteGetActivationCode**](SiteApi.md#siteGetActivationCode) | **GET** /public/v6/site/activationcode | Get an activation code for a site.
[**siteGetCategories**](SiteApi.md#siteGetCategories) | **GET** /public/v6/site/categories | Get categories for site.
[**siteGetGenders**](SiteApi.md#siteGetGenders) | **GET** /public/v6/site/genders | Get the gender options at a site.
[**siteGetLocations**](SiteApi.md#siteGetLocations) | **GET** /public/v6/site/locations | Get locations for a site.
[**siteGetMemberships**](SiteApi.md#siteGetMemberships) | **GET** /public/v6/site/memberships | Get the memberships at a site.
[**siteGetMobileProviders**](SiteApi.md#siteGetMobileProviders) | **GET** /public/v6/site/mobileproviders | Gets a list of active mobile providers for the site.
[**siteGetPaymentTypes**](SiteApi.md#siteGetPaymentTypes) | **GET** /public/v6/site/paymenttypes | Get payment types for a site.
[**siteGetPrograms**](SiteApi.md#siteGetPrograms) | **GET** /public/v6/site/programs | Get service categories offered at a site.
[**siteGetPromoCodes**](SiteApi.md#siteGetPromoCodes) | **GET** /public/v6/site/promocodes | Get promocodes for a site.
[**siteGetProspectStages**](SiteApi.md#siteGetProspectStages) | **GET** /public/v6/site/prospectstages | Gets a list of prospect stages for a site.
[**siteGetRelationships**](SiteApi.md#siteGetRelationships) | **GET** /public/v6/site/relationships | Returns all active relationships of the site.
[**siteGetResources**](SiteApi.md#siteGetResources) | **GET** /public/v6/site/resources | Get resources used at a site.
[**siteGetSessionTypes**](SiteApi.md#siteGetSessionTypes) | **GET** /public/v6/site/sessiontypes | Get the session types used at a site.
[**siteGetSites**](SiteApi.md#siteGetSites) | **GET** /public/v6/site/sites | Get all sites that can be accessed by an API Key.


# **siteAddPromoCode**
> \Nlocascio\Mindbody\Model\AddPromoCodeResponse siteAddPromoCode($Request)

Add promo code to a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\AddPromoCodeRequest(); // \Nlocascio\Mindbody\Model\AddPromoCodeRequest | 

try {
    $result = $apiInstance->siteAddPromoCode($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteAddPromoCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\AddPromoCodeRequest**](../Model/AddPromoCodeRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\AddPromoCodeResponse**](../Model/AddPromoCodeResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetActivationCode**
> \Nlocascio\Mindbody\Model\GetActivationCodeResponse siteGetActivationCode()

Get an activation code for a site.

Before you can use this endpoint, MINDBODY must approve your developer account for live access. If you have finished testing in the sandbox and are ready to begin working with MINDBODY customers, log into your account and request to go live.    See [Accessing Business Data From MINDBODY](https://developers.mindbodyonline.com/PublicDocumentation/V6#accessing-business-data) for more information about the activation code and how to use it.    Once you are approved, this endpoint returns an activation code.This endpoint supports only one site per call.

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

$apiInstance = new Nlocascio\Mindbody\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->siteGetActivationCode();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetActivationCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Nlocascio\Mindbody\Model\GetActivationCodeResponse**](../Model/GetActivationCodeResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetCategories**
> \Nlocascio\Mindbody\Model\GetCategoriesResponse siteGetCategories($RequestActive, $RequestCategoryIds, $RequestLimit, $RequestOffset, $RequestService, $RequestSubCategoryIds)

Get categories for site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestActive = true; // bool | The requested Active type categories. true indicates for Active Categories and false indicates for Deactivated Categories.
$RequestCategoryIds = array(56); // int[] | The requested category IDs.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestService = true; // bool | The requested Service type. true indicates for Revenue Categories and false indicates for Product Revenue Categories.
$RequestSubCategoryIds = array(56); // int[] | The requested sub category IDs.

try {
    $result = $apiInstance->siteGetCategories($RequestActive, $RequestCategoryIds, $RequestLimit, $RequestOffset, $RequestService, $RequestSubCategoryIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestActive** | **bool**| The requested Active type categories. true indicates for Active Categories and false indicates for Deactivated Categories. | [optional]
 **RequestCategoryIds** | [**int[]**](../Model/int.md)| The requested category IDs. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestService** | **bool**| The requested Service type. true indicates for Revenue Categories and false indicates for Product Revenue Categories. | [optional]
 **RequestSubCategoryIds** | [**int[]**](../Model/int.md)| The requested sub category IDs. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetCategoriesResponse**](../Model/GetCategoriesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetGenders**
> \Nlocascio\Mindbody\Model\GetGendersResponse siteGetGenders()

Get the gender options at a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->siteGetGenders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetGenders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Nlocascio\Mindbody\Model\GetGendersResponse**](../Model/GetGendersResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetLocations**
> \Nlocascio\Mindbody\Model\GetLocationsResponse siteGetLocations($RequestLimit, $RequestOffset)

Get locations for a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->siteGetLocations($RequestLimit, $RequestOffset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetLocationsResponse**](../Model/GetLocationsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetMemberships**
> \Nlocascio\Mindbody\Model\GetMembershipsResponse siteGetMemberships($RequestMembershipIds)

Get the memberships at a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestMembershipIds = array(56); // int[] | Filters results to memberships that belong to one of the given membership IDs. If omitted, all memberships are returned.

try {
    $result = $apiInstance->siteGetMemberships($RequestMembershipIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetMemberships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestMembershipIds** | [**int[]**](../Model/int.md)| Filters results to memberships that belong to one of the given membership IDs. If omitted, all memberships are returned. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetMembershipsResponse**](../Model/GetMembershipsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetMobileProviders**
> \Nlocascio\Mindbody\Model\GetMobileProvidersResponse siteGetMobileProviders($RequestActive)

Gets a list of active mobile providers for the site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestActive = true; // bool | When true, the response only contains mobile providers which are activated. When false, only deactivated mobile providers are returned. Default: All Mobile Providers

try {
    $result = $apiInstance->siteGetMobileProviders($RequestActive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetMobileProviders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestActive** | **bool**| When true, the response only contains mobile providers which are activated. When false, only deactivated mobile providers are returned. Default: All Mobile Providers | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetMobileProvidersResponse**](../Model/GetMobileProvidersResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetPaymentTypes**
> \Nlocascio\Mindbody\Model\GetPaymentTypesResponse siteGetPaymentTypes($RequestActive)

Get payment types for a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestActive = true; // bool | The requested Active payment types. true indicates for Active payment types and false indicates for Deactivated payment types.

try {
    $result = $apiInstance->siteGetPaymentTypes($RequestActive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetPaymentTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestActive** | **bool**| The requested Active payment types. true indicates for Active payment types and false indicates for Deactivated payment types. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetPaymentTypesResponse**](../Model/GetPaymentTypesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetPrograms**
> \Nlocascio\Mindbody\Model\GetProgramsResponse siteGetPrograms($RequestLimit, $RequestOffset, $RequestOnlineOnly, $RequestScheduleType)

Get service categories offered at a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestOnlineOnly = true; // bool | If `true`, filters results to show only those programs that are shown online.<br />  If `false`, all programs are returned.<br />  Default: **false**
$RequestScheduleType = "RequestScheduleType_example"; // string | A schedule type used to filter the returned results.

try {
    $result = $apiInstance->siteGetPrograms($RequestLimit, $RequestOffset, $RequestOnlineOnly, $RequestScheduleType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestOnlineOnly** | **bool**| If &#x60;true&#x60;, filters results to show only those programs that are shown online.&lt;br /&gt;  If &#x60;false&#x60;, all programs are returned.&lt;br /&gt;  Default: **false** | [optional]
 **RequestScheduleType** | **string**| A schedule type used to filter the returned results. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetProgramsResponse**](../Model/GetProgramsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetPromoCodes**
> \Nlocascio\Mindbody\Model\GetPromoCodesResponse siteGetPromoCodes($RequestActiveOnly, $RequestEndDate, $RequestLimit, $RequestOffset, $RequestOnlineOnly, $RequestStartDate)

Get promocodes for a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestActiveOnly = true; // bool | Filter only active, defaults to true
$RequestEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by activation end date
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestOnlineOnly = true; // bool | Filter only the ones that can be sold online
$RequestStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by activation start date

try {
    $result = $apiInstance->siteGetPromoCodes($RequestActiveOnly, $RequestEndDate, $RequestLimit, $RequestOffset, $RequestOnlineOnly, $RequestStartDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetPromoCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestActiveOnly** | **bool**| Filter only active, defaults to true | [optional]
 **RequestEndDate** | **\DateTime**| Filter by activation end date | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestOnlineOnly** | **bool**| Filter only the ones that can be sold online | [optional]
 **RequestStartDate** | **\DateTime**| Filter by activation start date | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetPromoCodesResponse**](../Model/GetPromoCodesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetProspectStages**
> \Nlocascio\Mindbody\Model\GetProspectStagesResponse siteGetProspectStages($RequestActive)

Gets a list of prospect stages for a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestActive = true; // bool | The requested Active type Prospect Stages. true indicates for Active Prospect Stages and false indicates for Deactivated Prospect Stages.

try {
    $result = $apiInstance->siteGetProspectStages($RequestActive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetProspectStages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestActive** | **bool**| The requested Active type Prospect Stages. true indicates for Active Prospect Stages and false indicates for Deactivated Prospect Stages. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetProspectStagesResponse**](../Model/GetProspectStagesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetRelationships**
> \Nlocascio\Mindbody\Model\GetRelationshipsResponse siteGetRelationships($RequestActive, $RequestLimit, $RequestOffset)

Returns all active relationships of the site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestActive = true; // bool | The requested Active type Relationships. true indicates for Active Relationships and false indicates for Deactivated Relationships.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->siteGetRelationships($RequestActive, $RequestLimit, $RequestOffset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetRelationships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestActive** | **bool**| The requested Active type Relationships. true indicates for Active Relationships and false indicates for Deactivated Relationships. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetRelationshipsResponse**](../Model/GetRelationshipsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetResources**
> \Nlocascio\Mindbody\Model\GetResourcesResponse siteGetResources($RequestEndDateTime, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestSessionTypeIds, $RequestStartDateTime)

Get resources used at a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestEndDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The time the resource ends. This parameter is ignored if `EndDateTime` or `LocationID` is not set.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationId = 56; // int | The location of the resource. This parameter is ignored if `EndDateTime` or `LocationID` is not set.<br />  Default: **all**
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestSessionTypeIds = array(56); // int[] | List of session type IDs.<br />  Default: **all**
$RequestStartDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The time the resource starts. This parameter is ignored if `EndDateTime` or `LocationID` is not set.

try {
    $result = $apiInstance->siteGetResources($RequestEndDateTime, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestSessionTypeIds, $RequestStartDateTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestEndDateTime** | **\DateTime**| The time the resource ends. This parameter is ignored if &#x60;EndDateTime&#x60; or &#x60;LocationID&#x60; is not set. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationId** | **int**| The location of the resource. This parameter is ignored if &#x60;EndDateTime&#x60; or &#x60;LocationID&#x60; is not set.&lt;br /&gt;  Default: **all** | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestSessionTypeIds** | [**int[]**](../Model/int.md)| List of session type IDs.&lt;br /&gt;  Default: **all** | [optional]
 **RequestStartDateTime** | **\DateTime**| The time the resource starts. This parameter is ignored if &#x60;EndDateTime&#x60; or &#x60;LocationID&#x60; is not set. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetResourcesResponse**](../Model/GetResourcesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetSessionTypes**
> \Nlocascio\Mindbody\Model\GetSessionTypesResponse siteGetSessionTypes($RequestLimit, $RequestOffset, $RequestOnlineOnly, $RequestProgramIDs)

Get the session types used at a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestOnlineOnly = true; // bool | When `true`, indicates that only the session types that can be booked online should be returned.<br />  Default: **false**
$RequestProgramIDs = array(56); // int[] | Filters results to session types that belong to one of the given program IDs. If omitted, all program IDs return.

try {
    $result = $apiInstance->siteGetSessionTypes($RequestLimit, $RequestOffset, $RequestOnlineOnly, $RequestProgramIDs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetSessionTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestOnlineOnly** | **bool**| When &#x60;true&#x60;, indicates that only the session types that can be booked online should be returned.&lt;br /&gt;  Default: **false** | [optional]
 **RequestProgramIDs** | [**int[]**](../Model/int.md)| Filters results to session types that belong to one of the given program IDs. If omitted, all program IDs return. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetSessionTypesResponse**](../Model/GetSessionTypesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetSites**
> \Nlocascio\Mindbody\Model\GetSitesResponse siteGetSites($RequestLimit, $RequestOffset, $RequestSiteIds)

Get all sites that can be accessed by an API Key.

Gets a list of sites that the developer has permission to view.  * Passing in no `SiteIds` returns all sites that the developer has access to.  * Passing in one `SiteIds` returns more detailed information about the specified site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestSiteIds = array(56); // int[] | List of the requested site IDs. When omitted, returns all sites that the source has access to.

try {
    $result = $apiInstance->siteGetSites($RequestLimit, $RequestOffset, $RequestSiteIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestSiteIds** | [**int[]**](../Model/int.md)| List of the requested site IDs. When omitted, returns all sites that the source has access to. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetSitesResponse**](../Model/GetSitesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

