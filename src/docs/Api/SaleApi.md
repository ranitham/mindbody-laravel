# Nlocascio\Mindbody\SaleApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**saleCheckoutShoppingCart**](SaleApi.md#saleCheckoutShoppingCart) | **POST** /public/v6/sale/checkoutshoppingcart | Purchase pricing options, packages, retail products, or tips for a client.
[**saleGetAcceptedCardTypes**](SaleApi.md#saleGetAcceptedCardTypes) | **GET** /public/v6/sale/acceptedcardtypes | Get credit cards types that a site accepts.
[**saleGetContracts**](SaleApi.md#saleGetContracts) | **GET** /public/v6/sale/contracts | Get contracts available for purchase at a site.
[**saleGetCustomPaymentMethods**](SaleApi.md#saleGetCustomPaymentMethods) | **GET** /public/v6/sale/custompaymentmethods | Get payment methods that can be used to pay for sales at a site.
[**saleGetGiftCardBalance**](SaleApi.md#saleGetGiftCardBalance) | **GET** /public/v6/sale/giftcardbalance | Get a gift card&#39;s remaining balance.
[**saleGetGiftCards**](SaleApi.md#saleGetGiftCards) | **GET** /public/v6/sale/giftcards | Get gift cards available for purchase at a site.
[**saleGetPackages**](SaleApi.md#saleGetPackages) | **GET** /public/v6/sale/packages | Get packages available for purchase at a site.
[**saleGetProducts**](SaleApi.md#saleGetProducts) | **GET** /public/v6/sale/products | Get retail products available for purchase at a site.
[**saleGetProductsInventory**](SaleApi.md#saleGetProductsInventory) | **GET** /public/v6/sale/productsinventory | Get retail products inventory data available at a site.
[**saleGetSales**](SaleApi.md#saleGetSales) | **GET** /public/v6/sale/sales | Get sales completed at a site.
[**saleGetServices**](SaleApi.md#saleGetServices) | **GET** /public/v6/sale/services | Get pricing options available for purchase at a site
[**saleGetTransactions**](SaleApi.md#saleGetTransactions) | **GET** /public/v6/sale/transactions | Get transactions completed at a site.
[**salePurchaseAccountCredit**](SaleApi.md#salePurchaseAccountCredit) | **POST** /public/v6/sale/purchaseaccountcredit | Purchases account credit for a client
[**salePurchaseContract**](SaleApi.md#salePurchaseContract) | **POST** /public/v6/sale/purchasecontract | Purchase a contract for a client.
[**salePurchaseGiftCard**](SaleApi.md#salePurchaseGiftCard) | **POST** /public/v6/sale/purchasegiftcard | Purchase a gift card for a client.


# **saleCheckoutShoppingCart**
> object saleCheckoutShoppingCart($Request)

Purchase pricing options, packages, retail products, or tips for a client.

This endpoint provides a wide range of functionality. For example, you can use it when a client purchases new pricing options, retail products, packages, and tips. You can also combine purchasing a new pricing option and many other functions, such as booking a client into a class, booking a new appointment for a client, enrolling a client into an enrollment or course, or reconciling an unpaid, already booked appointment or class. Use this call when a client purchases:  * a pricing option, after calling `GET Services` and choosing a specific pricing option’s ID  * a retail product, after calling `GET Products` and choosing a specific retail product’s ID  * a package, after calling `GET Packages` and choosing a specific package’s ID  * a tip to give to a staff member, after calling `GET Staff` and choosing a specific staff member ID, and the amount that the client wants to tip  The documentation provides explanations of the request body and response, as well as the cart item metadata, payment item metadata, and purchased cart items.

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

$apiInstance = new Nlocascio\Mindbody\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\CheckoutShoppingCartRequest(); // \Nlocascio\Mindbody\Model\CheckoutShoppingCartRequest | 

try {
    $result = $apiInstance->saleCheckoutShoppingCart($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleCheckoutShoppingCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\CheckoutShoppingCartRequest**](../Model/CheckoutShoppingCartRequest.md)|  |

### Return type

**object**

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetAcceptedCardTypes**
> string[] saleGetAcceptedCardTypes()

Get credit cards types that a site accepts.

Gets a list of card types that the site accepts. You can also use `GET Sites` to return the Site object, which contains individual accepted card types for requested sites.    This endpoint has no query parameters.The response returns a list of strings. Possible values are:  * Visa  * MasterCard  * Discover  * AMEX

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

$apiInstance = new Nlocascio\Mindbody\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->saleGetAcceptedCardTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetAcceptedCardTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetContracts**
> \Nlocascio\Mindbody\Model\GetContractsResponse saleGetContracts($RequestLocationId, $RequestConsumerId, $RequestContractIds, $RequestLimit, $RequestOffset, $RequestSoldOnline)

Get contracts available for purchase at a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestLocationId = 56; // int | The ID of the location that has the requested contracts and AutoPay options.
$RequestConsumerId = 789; // int | The ID of the client.
$RequestContractIds = array(56); // int[] | When included, the response only contains details about the specified contract IDs.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestSoldOnline = true; // bool | When `true`, the response only contains details about contracts and AutoPay options that can be sold online.<br />  When `false`, only contracts that are not intended to be sold online are returned.<br />  Default: **all contracts**

try {
    $result = $apiInstance->saleGetContracts($RequestLocationId, $RequestConsumerId, $RequestContractIds, $RequestLimit, $RequestOffset, $RequestSoldOnline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestLocationId** | **int**| The ID of the location that has the requested contracts and AutoPay options. |
 **RequestConsumerId** | **int**| The ID of the client. | [optional]
 **RequestContractIds** | [**int[]**](../Model/int.md)| When included, the response only contains details about the specified contract IDs. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestSoldOnline** | **bool**| When &#x60;true&#x60;, the response only contains details about contracts and AutoPay options that can be sold online.&lt;br /&gt;  When &#x60;false&#x60;, only contracts that are not intended to be sold online are returned.&lt;br /&gt;  Default: **all contracts** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetContractsResponse**](../Model/GetContractsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetCustomPaymentMethods**
> \Nlocascio\Mindbody\Model\GetCustomPaymentMethodsResponse saleGetCustomPaymentMethods($RequestLimit, $RequestOffset)

Get payment methods that can be used to pay for sales at a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->saleGetCustomPaymentMethods($RequestLimit, $RequestOffset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetCustomPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetCustomPaymentMethodsResponse**](../Model/GetCustomPaymentMethodsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetGiftCardBalance**
> \Nlocascio\Mindbody\Model\GetGiftCardBalanceResponse saleGetGiftCardBalance($BarcodeId)

Get a gift card's remaining balance.

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

$apiInstance = new Nlocascio\Mindbody\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$BarcodeId = "BarcodeId_example"; // string | The barcode ID of the gift card for which you want the balance.

try {
    $result = $apiInstance->saleGetGiftCardBalance($BarcodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetGiftCardBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **BarcodeId** | **string**| The barcode ID of the gift card for which you want the balance. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetGiftCardBalanceResponse**](../Model/GetGiftCardBalanceResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetGiftCards**
> \Nlocascio\Mindbody\Model\GetGiftCardResponse saleGetGiftCards($RequestIds, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestSoldOnline)

Get gift cards available for purchase at a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestIds = array(56); // int[] | Filters the results to the requested gift card IDs.<br />  Default: **all** gift cards.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationId = 56; // int | When included, returns gift cards that are sold at the provided location ID.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestSoldOnline = true; // bool | When `true`, only returns gift cards that are sold online.<br />  Default: **false**

try {
    $result = $apiInstance->saleGetGiftCards($RequestIds, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestSoldOnline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetGiftCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestIds** | [**int[]**](../Model/int.md)| Filters the results to the requested gift card IDs.&lt;br /&gt;  Default: **all** gift cards. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationId** | **int**| When included, returns gift cards that are sold at the provided location ID. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestSoldOnline** | **bool**| When &#x60;true&#x60;, only returns gift cards that are sold online.&lt;br /&gt;  Default: **false** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetGiftCardResponse**](../Model/GetGiftCardResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetPackages**
> \Nlocascio\Mindbody\Model\GetPackagesResponse saleGetPackages($RequestLimit, $RequestOffset, $RequestPackageIds, $RequestSellOnline)

Get packages available for purchase at a site.

A package is typically used to combine multiple services and/or products into a single offering. Staff members can check out multiple appointments while selling the package, and can discount the items included. For example, a spa might bundle a massage, a pedicure, a manicure, a facial, and a few selected beauty products into a package.

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

$apiInstance = new Nlocascio\Mindbody\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestPackageIds = array(56); // int[] | A list of the packages IDs to filter by.
$RequestSellOnline = true; // bool | When `true`, only returns products that can be sold online.<br />  When `false`, all products are returned.<br />  Default: **false**

try {
    $result = $apiInstance->saleGetPackages($RequestLimit, $RequestOffset, $RequestPackageIds, $RequestSellOnline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetPackages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestPackageIds** | [**int[]**](../Model/int.md)| A list of the packages IDs to filter by. | [optional]
 **RequestSellOnline** | **bool**| When &#x60;true&#x60;, only returns products that can be sold online.&lt;br /&gt;  When &#x60;false&#x60;, all products are returned.&lt;br /&gt;  Default: **false** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetPackagesResponse**](../Model/GetPackagesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetProducts**
> \Nlocascio\Mindbody\Model\GetProductsResponse saleGetProducts($RequestCategoryIds, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestProductIds, $RequestSearchText, $RequestSellOnline, $RequestSubCategoryIds)

Get retail products available for purchase at a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestCategoryIds = array(56); // int[] | A list of category IDs to filter by.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationId = 56; // int | The location ID to use to determine the tax for the products that this request returns.<br />  Default: **online store**
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestProductIds = array("RequestProductIds_example"); // string[] | An ID filter for products.
$RequestSearchText = "RequestSearchText_example"; // string | A search filter, used for searching by term.
$RequestSellOnline = true; // bool | When `true`, only products that can be sold online are returned.<br />  When `false`, all products are returned.<br />  Default: **false**
$RequestSubCategoryIds = array(56); // int[] | A list of subcategory IDs to filter by.

try {
    $result = $apiInstance->saleGetProducts($RequestCategoryIds, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestProductIds, $RequestSearchText, $RequestSellOnline, $RequestSubCategoryIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestCategoryIds** | [**int[]**](../Model/int.md)| A list of category IDs to filter by. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationId** | **int**| The location ID to use to determine the tax for the products that this request returns.&lt;br /&gt;  Default: **online store** | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestProductIds** | [**string[]**](../Model/string.md)| An ID filter for products. | [optional]
 **RequestSearchText** | **string**| A search filter, used for searching by term. | [optional]
 **RequestSellOnline** | **bool**| When &#x60;true&#x60;, only products that can be sold online are returned.&lt;br /&gt;  When &#x60;false&#x60;, all products are returned.&lt;br /&gt;  Default: **false** | [optional]
 **RequestSubCategoryIds** | [**int[]**](../Model/int.md)| A list of subcategory IDs to filter by. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetProductsResponse**](../Model/GetProductsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetProductsInventory**
> \Nlocascio\Mindbody\Model\GetProductsInventoryResponse saleGetProductsInventory($RequestBarcodeIds, $RequestLimit, $RequestLocationIds, $RequestOffset, $RequestProductIds)

Get retail products inventory data available at a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestBarcodeIds = array("RequestBarcodeIds_example"); // string[] | An IDs is barcodeId to filter for products inventory data.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationIds = array(56); // int[] | The location IDs to use to determine the inventory data of the product of specific location.<br />  Default: **online store**
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestProductIds = array("RequestProductIds_example"); // string[] | An IDs filter for products inventory data.

try {
    $result = $apiInstance->saleGetProductsInventory($RequestBarcodeIds, $RequestLimit, $RequestLocationIds, $RequestOffset, $RequestProductIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetProductsInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestBarcodeIds** | [**string[]**](../Model/string.md)| An IDs is barcodeId to filter for products inventory data. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationIds** | [**int[]**](../Model/int.md)| The location IDs to use to determine the inventory data of the product of specific location.&lt;br /&gt;  Default: **online store** | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestProductIds** | [**string[]**](../Model/string.md)| An IDs filter for products inventory data. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetProductsInventoryResponse**](../Model/GetProductsInventoryResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetSales**
> \Nlocascio\Mindbody\Model\GetSalesResponse saleGetSales($RequestEndSaleDateTime, $RequestLimit, $RequestOffset, $RequestPaymentMethodId, $RequestSaleId, $RequestStartSaleDateTime)

Get sales completed at a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestEndSaleDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to sales that happened before this date and time.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestPaymentMethodId = 56; // int | Filters results to sales paid for by the given payment method ID.
$RequestSaleId = 789; // int | Filters results to the requested sale ID.
$RequestStartSaleDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to sales that happened after this date and time.

try {
    $result = $apiInstance->saleGetSales($RequestEndSaleDateTime, $RequestLimit, $RequestOffset, $RequestPaymentMethodId, $RequestSaleId, $RequestStartSaleDateTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetSales: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestEndSaleDateTime** | **\DateTime**| Filters results to sales that happened before this date and time. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestPaymentMethodId** | **int**| Filters results to sales paid for by the given payment method ID. | [optional]
 **RequestSaleId** | **int**| Filters results to the requested sale ID. | [optional]
 **RequestStartSaleDateTime** | **\DateTime**| Filters results to sales that happened after this date and time. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetSalesResponse**](../Model/GetSalesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetServices**
> \Nlocascio\Mindbody\Model\GetServicesResponse saleGetServices($RequestClassId, $RequestClassScheduleId, $RequestHideRelatedPrograms, $RequestIncludeDiscontinued, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestProgramIds, $RequestSellOnline, $RequestServiceIds, $RequestSessionTypeIds, $RequestStaffId)

Get pricing options available for purchase at a site

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

$apiInstance = new Nlocascio\Mindbody\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClassId = 56; // int | Filters to the pricing options for the specified class ID.
$RequestClassScheduleId = 56; // int | Filters to the pricing options for the specified class schedule ID.
$RequestHideRelatedPrograms = true; // bool | When `true`, indicates that pricing options of related programs are omitted from the response.<br />  Default: **false**
$RequestIncludeDiscontinued = true; // bool | When `true`, indicates that the filtered pricing option list includes discontinued pricing options.<br />  Default: **false**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationId = 56; // int | When specified, for each returned pricing option, `TaxRate` and `TaxIncluded` are calculated according to the specified location. Note that this does not filter results to only services provided at the given location, and for locations where Value-Added Tax (VAT) rules apply, the `TaxRate` is set to zero.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestProgramIds = array(56); // int[] | Filters to pricing options with the specified program IDs.
$RequestSellOnline = true; // bool | When `true`, filters to the pricing options that can be sold online.<br />  Default: **false**
$RequestServiceIds = array("RequestServiceIds_example"); // string[] | Filters to the pricing options with the specified IDs. In this context, service and pricing option are used interchangeably.
$RequestSessionTypeIds = array(56); // int[] | Filters to the pricing options with the specified session types IDs.
$RequestStaffId = 789; // int | Sets `Price` and `OnlinePrice` to the particular pricing of a specific staff member, if allowed by the business.

try {
    $result = $apiInstance->saleGetServices($RequestClassId, $RequestClassScheduleId, $RequestHideRelatedPrograms, $RequestIncludeDiscontinued, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestProgramIds, $RequestSellOnline, $RequestServiceIds, $RequestSessionTypeIds, $RequestStaffId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClassId** | **int**| Filters to the pricing options for the specified class ID. | [optional]
 **RequestClassScheduleId** | **int**| Filters to the pricing options for the specified class schedule ID. | [optional]
 **RequestHideRelatedPrograms** | **bool**| When &#x60;true&#x60;, indicates that pricing options of related programs are omitted from the response.&lt;br /&gt;  Default: **false** | [optional]
 **RequestIncludeDiscontinued** | **bool**| When &#x60;true&#x60;, indicates that the filtered pricing option list includes discontinued pricing options.&lt;br /&gt;  Default: **false** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationId** | **int**| When specified, for each returned pricing option, &#x60;TaxRate&#x60; and &#x60;TaxIncluded&#x60; are calculated according to the specified location. Note that this does not filter results to only services provided at the given location, and for locations where Value-Added Tax (VAT) rules apply, the &#x60;TaxRate&#x60; is set to zero. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestProgramIds** | [**int[]**](../Model/int.md)| Filters to pricing options with the specified program IDs. | [optional]
 **RequestSellOnline** | **bool**| When &#x60;true&#x60;, filters to the pricing options that can be sold online.&lt;br /&gt;  Default: **false** | [optional]
 **RequestServiceIds** | [**string[]**](../Model/string.md)| Filters to the pricing options with the specified IDs. In this context, service and pricing option are used interchangeably. | [optional]
 **RequestSessionTypeIds** | [**int[]**](../Model/int.md)| Filters to the pricing options with the specified session types IDs. | [optional]
 **RequestStaffId** | **int**| Sets &#x60;Price&#x60; and &#x60;OnlinePrice&#x60; to the particular pricing of a specific staff member, if allowed by the business. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetServicesResponse**](../Model/GetServicesResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetTransactions**
> \Nlocascio\Mindbody\Model\GetTransactionsResponse saleGetTransactions($RequestClientId, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestSaleId, $RequestStatus, $RequestTransactionEndDateTime, $RequestTransactionId, $RequestTransactionStartDateTime)

Get transactions completed at a site.

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

$apiInstance = new Nlocascio\Mindbody\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$RequestClientId = 789; // int | Filters results to the requested client ID.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationId = 56; // int | Filters results to the requested location ID.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestSaleId = 789; // int | Filters results to the requested sale ID.
$RequestStatus = "RequestStatus_example"; // string | Filters results to the requested status.
$RequestTransactionEndDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to transactions that happened before this date and time.
$RequestTransactionId = 56; // int | Filters results to the requested transaction ID.
$RequestTransactionStartDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to transactions that happened after this date and time.

try {
    $result = $apiInstance->saleGetTransactions($RequestClientId, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestSaleId, $RequestStatus, $RequestTransactionEndDateTime, $RequestTransactionId, $RequestTransactionStartDateTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClientId** | **int**| Filters results to the requested client ID. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationId** | **int**| Filters results to the requested location ID. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestSaleId** | **int**| Filters results to the requested sale ID. | [optional]
 **RequestStatus** | **string**| Filters results to the requested status. | [optional]
 **RequestTransactionEndDateTime** | **\DateTime**| Filters results to transactions that happened before this date and time. | [optional]
 **RequestTransactionId** | **int**| Filters results to the requested transaction ID. | [optional]
 **RequestTransactionStartDateTime** | **\DateTime**| Filters results to transactions that happened after this date and time. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetTransactionsResponse**](../Model/GetTransactionsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salePurchaseAccountCredit**
> \Nlocascio\Mindbody\Model\PurchaseAccountCreditResponse salePurchaseAccountCredit($Request)

Purchases account credit for a client

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

$apiInstance = new Nlocascio\Mindbody\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\PurchaseAccountCreditRequest(); // \Nlocascio\Mindbody\Model\PurchaseAccountCreditRequest | 

try {
    $result = $apiInstance->salePurchaseAccountCredit($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->salePurchaseAccountCredit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\PurchaseAccountCreditRequest**](../Model/PurchaseAccountCreditRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\PurchaseAccountCreditResponse**](../Model/PurchaseAccountCreditResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salePurchaseContract**
> \Nlocascio\Mindbody\Model\PurchaseContractResponse salePurchaseContract($Request)

Purchase a contract for a client.

Allows a client to sign up for a contract or autopay using the information returned from the `GET Contracts` endpoint. The client can pay with a new credit card or with a stored credit card. The client must exist at the site specified before this call is made.    This endpoint allows a developer to specify whether a client pays now or pays on the `StartDate`.If you are building a client-facing experience, you should talk with the business owner to understand the owner’s policies before you give clients a choice of the two payment types.

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

$apiInstance = new Nlocascio\Mindbody\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\PurchaseContractRequest(); // \Nlocascio\Mindbody\Model\PurchaseContractRequest | 

try {
    $result = $apiInstance->salePurchaseContract($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->salePurchaseContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\PurchaseContractRequest**](../Model/PurchaseContractRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\PurchaseContractResponse**](../Model/PurchaseContractResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salePurchaseGiftCard**
> \Nlocascio\Mindbody\Model\PurchaseGiftCardResponse salePurchaseGiftCard($Request)

Purchase a gift card for a client.

Allows a client to purchase a gift card from a business in a variety of designs. The card can be emailed to the recipient on a specific day, and a card title and a personal message can be added.

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

$apiInstance = new Nlocascio\Mindbody\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$Request = new \Nlocascio\Mindbody\Model\PurchaseGiftCardRequest(); // \Nlocascio\Mindbody\Model\PurchaseGiftCardRequest | 

try {
    $result = $apiInstance->salePurchaseGiftCard($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->salePurchaseGiftCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\PurchaseGiftCardRequest**](../Model/PurchaseGiftCardRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\PurchaseGiftCardResponse**](../Model/PurchaseGiftCardResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

