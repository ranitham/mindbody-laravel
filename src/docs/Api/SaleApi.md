# Nlocascio\Mindbody\SaleApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**saleCheckoutShoppingCart**](SaleApi.md#saleCheckoutShoppingCart) | **POST** /public/v6/sale/checkoutshoppingcart | Purchase pricing options, packages, retail products, or tips for a client.
[**saleCompleteCheckoutShoppingCartUsingAlternativePayments**](SaleApi.md#saleCompleteCheckoutShoppingCartUsingAlternativePayments) | **POST** /public/v6/sale/completecheckoutshoppingcart | Complete the Checkout Shopping Cart process, after the payments have been made by the client.
[**saleGetAcceptedCardTypes**](SaleApi.md#saleGetAcceptedCardTypes) | **GET** /public/v6/sale/acceptedcardtypes | Get credit cards types that a site accepts.
[**saleGetAlternativePaymentMethods**](SaleApi.md#saleGetAlternativePaymentMethods) | **GET** /public/v6/sale/alternativepaymentmethods | Get alternative and local payment methods that are allowed for a site.
[**saleGetContracts**](SaleApi.md#saleGetContracts) | **GET** /public/v6/sale/contracts | Get contracts available for purchase at a site.
[**saleGetCustomPaymentMethods**](SaleApi.md#saleGetCustomPaymentMethods) | **GET** /public/v6/sale/custompaymentmethods | Get payment methods that can be used to pay for sales at a site.
[**saleGetGiftCardBalance**](SaleApi.md#saleGetGiftCardBalance) | **GET** /public/v6/sale/giftcardbalance | Get a gift card&#39;s remaining balance.
[**saleGetGiftCards**](SaleApi.md#saleGetGiftCards) | **GET** /public/v6/sale/giftcards | Get gift cards available for purchase at a site.
[**saleGetPackages**](SaleApi.md#saleGetPackages) | **GET** /public/v6/sale/packages | Get packages available for purchase at a site.
[**saleGetProducts**](SaleApi.md#saleGetProducts) | **GET** /public/v6/sale/products | Get retail products available for purchase at a site.
[**saleGetProductsInventory**](SaleApi.md#saleGetProductsInventory) | **GET** /public/v6/sale/productsinventory | Get retail products inventory data available at a site.
[**saleGetPurchaseContractStatus**](SaleApi.md#saleGetPurchaseContractStatus) | **GET** /public/v6/sale/purchasecontractstatus | Fetches the status of an initiate purchase contract given accessToken.
[**saleGetSales**](SaleApi.md#saleGetSales) | **GET** /public/v6/sale/sales | Get sales completed at a site.
[**saleGetServices**](SaleApi.md#saleGetServices) | **GET** /public/v6/sale/services | Get pricing options available for purchase at a site
[**saleGetTransactions**](SaleApi.md#saleGetTransactions) | **GET** /public/v6/sale/transactions | Get transactions completed at a site.
[**saleInitiateCheckoutShoppingCartUsingAlternativePayments**](SaleApi.md#saleInitiateCheckoutShoppingCartUsingAlternativePayments) | **POST** /public/v6/sale/initiatecheckoutshoppingcart | Initiate the Checkout Shopping Cart process, for payments to be made directly by the client.
[**saleInitiatePurchaseContractUsingAlternativePayments**](SaleApi.md#saleInitiatePurchaseContractUsingAlternativePayments) | **POST** /public/v6/sale/initiatepurchasecontract | Purchase a contract for a client using apm/lpm.
[**salePurchaseAccountCredit**](SaleApi.md#salePurchaseAccountCredit) | **POST** /public/v6/sale/purchaseaccountcredit | Purchases account credit for a client
[**salePurchaseContract**](SaleApi.md#salePurchaseContract) | **POST** /public/v6/sale/purchasecontract | Purchase a contract for a client.
[**salePurchaseGiftCard**](SaleApi.md#salePurchaseGiftCard) | **POST** /public/v6/sale/purchasegiftcard | Purchase a gift card for a client.
[**saleReturnSale**](SaleApi.md#saleReturnSale) | **POST** /public/v6/sale/returnsale | Retunn sale
[**saleUpdateProductPrice**](SaleApi.md#saleUpdateProductPrice) | **POST** /public/v6/sale/updateproductprice | Update retail product&#39;s unit and online price.
[**saleUpdateProducts**](SaleApi.md#saleUpdateProducts) | **PUT** /public/v6/sale/products | Update retail products available for purchase at a site.
[**saleUpdateSaleDate**](SaleApi.md#saleUpdateSaleDate) | **PUT** /public/v6/sale/updatesaledate | This endpoint updates the SaleDate and returns the details of the sale.
[**saleUpdateServices**](SaleApi.md#saleUpdateServices) | **PUT** /public/v6/sale/services | Update unit price and online price of provided services.


# **saleCheckoutShoppingCart**
> \Nlocascio\Mindbody\Model\CheckoutShoppingCartResponse saleCheckoutShoppingCart($Request)

Purchase pricing options, packages, retail products, or tips for a client.

This endpoint provides a wide range of functionality. For example, you can use it when a client purchases new pricing options, retail products, packages, and tips. You can also combine purchasing a new pricing option and many other functions, such as booking a client into a class, booking a new appointment for a client, enrolling a client into an enrollment or course, or reconciling an unpaid, already booked appointment or class. Use this call when a client purchases:  * a pricing option, after calling `GET Services` and choosing a specific pricing option’s ID  * a retail product, after calling `GET Products` and choosing a specific retail product’s ID  * a package, after calling `GET Packages` and choosing a specific package’s ID  * a tip to give to a staff member, after calling `GET Staff` and choosing a specific staff member ID, and the amount that the client wants to tip  The documentation provides explanations of the request body and response, as well as the cart item metadata, payment item metadata, and purchased cart items.  This endpoint had been updated to support Strong Customer Authentication (SCA).  **Note :**  Protect yourself from processor fees and credit card fraud.Remember to always protect your web forms that leverage POST CheckoutShoppingCart, POST PurchaseContract or POST PurchaseGiftCard with a CAPTCHA!

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

[**\Nlocascio\Mindbody\Model\CheckoutShoppingCartResponse**](../Model/CheckoutShoppingCartResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleCompleteCheckoutShoppingCartUsingAlternativePayments**
> \Nlocascio\Mindbody\Model\CheckoutShoppingCartResponse saleCompleteCheckoutShoppingCartUsingAlternativePayments($Request)

Complete the Checkout Shopping Cart process, after the payments have been made by the client.

This endpoint complements the InitiateCheckoutShoppintCart endpoint. Please visit its documentation to understand further.    The currently supported alternative payments are:  - iDEAL | Wero  - Apple Pay    **How to use :**  InitiateCheckoutShoppingCart and CompleteCheckoutShoppingCart endpoints work together. InitiateCheckoutShoppingCart endpoint will capture the intent to perform a checkout, and return a redirect URL for the end user to make the payment. Once the payment concludes, the end user will be redirected back to the PaymentAuthenticationCallbackUrl, which was provided while invoking the InitiateCheckoutShoppingCart endpoint. You can then invoke the CompleteCheckoutShoppingCart endpoint to complete the remaining checkout activities and obtain the CheckoutShoppingCartResponse.    **For a comprehensive guide, follow this tutorial:** [Checkout Shopping Cart Using Alternative Payments](https://developers.mindbodyonline.com/ui/documentation/public-api#/http/tutorials/checkout-shopping-cart-using-alternative-payments)    **Notes:**  - This endpoint is only available for Studios on MBPS (Mindbody Payments) with Stripe payment processor.  - Protect yourself from processor fees. Remember to always protect your web forms that leverage POST InitiateCheckoutShoppingCart or POST CompleteCheckoutShoppingCart with a CAPTCHA!

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
$Request = new \Nlocascio\Mindbody\Model\CompleteCheckoutShoppingCartUsingAlternativePaymentsRequest(); // \Nlocascio\Mindbody\Model\CompleteCheckoutShoppingCartUsingAlternativePaymentsRequest | 

try {
    $result = $apiInstance->saleCompleteCheckoutShoppingCartUsingAlternativePayments($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleCompleteCheckoutShoppingCartUsingAlternativePayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\CompleteCheckoutShoppingCartUsingAlternativePaymentsRequest**](../Model/CompleteCheckoutShoppingCartUsingAlternativePaymentsRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\CheckoutShoppingCartResponse**](../Model/CheckoutShoppingCartResponse.md)

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

# **saleGetAlternativePaymentMethods**
> \Nlocascio\Mindbody\Model\GetAlternativePaymentMethodsResponse saleGetAlternativePaymentMethods($RequestClientId, $RequestLocationId)

Get alternative and local payment methods that are allowed for a site.

Get alternative and local payment methods that are allowed for a site.  These payment methods can later be used in `Initiate Checkout Shopping Cart Using Alternative Payments`   and `Initiate Purchase Contract Using Alternative Payments` to make the payment.                The currently supported alternative payments are:  - iDEAL | Wero  - Apple Pay    **Notes:**  - This endpoint is only available for Studios on MBPS (Mindbody Payments) with Stripe payment processor.  - This endpoint only supports the online store location (LocationId = 98). If LocationId is not provided, it will default to 98.

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
$RequestClientId = "RequestClientId_example"; // string | The client ID
$RequestLocationId = 56; // int | The location ID  Default: **null** (Online store location)

try {
    $result = $apiInstance->saleGetAlternativePaymentMethods($RequestClientId, $RequestLocationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetAlternativePaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestClientId** | **string**| The client ID | [optional]
 **RequestLocationId** | **int**| The location ID  Default: **null** (Online store location) | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetAlternativePaymentMethodsResponse**](../Model/GetAlternativePaymentMethodsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetContracts**
> \Nlocascio\Mindbody\Model\GetContractsResponse saleGetContracts($RequestLocationId, $RequestContractIds, $RequestLimit, $RequestOffset, $RequestPromoCode, $RequestSoldOnline, $RequestUniqueClientId)

Get contracts available for purchase at a site.

Returns the contracts and autopay options that are available on a location-by-location basis. Depending on the configurations established by the site, this endpoint returns options that can be used to sign up clients for recurring payments for services offered by the business.

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
$RequestContractIds = array(56); // int[] | When included, the response only contains details about the specified contract IDs.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestPromoCode = "RequestPromoCode_example"; // string | PromoCode to apply
$RequestSoldOnline = true; // bool | When `true`, the response only contains details about contracts and AutoPay options that can be sold online.   When `false`, all contracts are returned.  Default: **false**
$RequestUniqueClientId = 789; // int | The ID of the client.

try {
    $result = $apiInstance->saleGetContracts($RequestLocationId, $RequestContractIds, $RequestLimit, $RequestOffset, $RequestPromoCode, $RequestSoldOnline, $RequestUniqueClientId);
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
 **RequestContractIds** | [**int[]**](../Model/int.md)| When included, the response only contains details about the specified contract IDs. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestPromoCode** | **string**| PromoCode to apply | [optional]
 **RequestSoldOnline** | **bool**| When &#x60;true&#x60;, the response only contains details about contracts and AutoPay options that can be sold online.   When &#x60;false&#x60;, all contracts are returned.  Default: **false** | [optional]
 **RequestUniqueClientId** | **int**| The ID of the client. | [optional]

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

Returns a gift card’s remaining balance.

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
> \Nlocascio\Mindbody\Model\GetGiftCardResponse saleGetGiftCards($RequestIds, $RequestIncludeCustomLayouts, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestSoldOnline)

Get gift cards available for purchase at a site.

Returns information about gift cards that can be purchased.

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
$RequestIncludeCustomLayouts = true; // bool | When `true`, includes custom gift card layouts.<br />  When `false`, includes only system layouts.  Default: **false**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationId = 56; // int | When included, returns gift cards that are sold at the provided location ID.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestSoldOnline = true; // bool | When `true`, only returns gift cards that are sold online.<br />  Default: **false**

try {
    $result = $apiInstance->saleGetGiftCards($RequestIds, $RequestIncludeCustomLayouts, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestSoldOnline);
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
 **RequestIncludeCustomLayouts** | **bool**| When &#x60;true&#x60;, includes custom gift card layouts.&lt;br /&gt;  When &#x60;false&#x60;, includes only system layouts.  Default: **false** | [optional]
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
> \Nlocascio\Mindbody\Model\GetPackagesResponse saleGetPackages($RequestLimit, $RequestLocationId, $RequestOffset, $RequestPackageIds, $RequestSellOnline)

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
$RequestLocationId = 56; // int | The location ID to use to determine the tax for the products that this request returns.<br />  Default: **online store**
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestPackageIds = array(56); // int[] | A list of the packages IDs to filter by.
$RequestSellOnline = true; // bool | When `true`, only returns products that can be sold online.<br />  When `false`, all products are returned.<br />  Default: **false**

try {
    $result = $apiInstance->saleGetPackages($RequestLimit, $RequestLocationId, $RequestOffset, $RequestPackageIds, $RequestSellOnline);
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
 **RequestLocationId** | **int**| The location ID to use to determine the tax for the products that this request returns.&lt;br /&gt;  Default: **online store** | [optional]
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
> \Nlocascio\Mindbody\Model\GetProductsResponse saleGetProducts($RequestCategoryIds, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestProductIds, $RequestSearchText, $RequestSecondaryCategoryIds, $RequestSellOnline, $RequestSubCategoryIds)

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
$RequestCategoryIds = array(56); // int[] | A list of revenue category IDs to filter by. Use this ID when calling the GET Categories endpoint.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationId = 56; // int | The location ID to use to determine the tax for the products that this request returns.<br />  Default: **online store**
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestProductIds = array("RequestProductIds_example"); // string[] | The barcode number of the product to be filter by.
$RequestSearchText = "RequestSearchText_example"; // string | A search filter, used for searching by term.
$RequestSecondaryCategoryIds = array(56); // int[] | A list of secondary categories to filter by. Use this ID when calling the GET Categories endpoint.
$RequestSellOnline = true; // bool | When `true`, only products that can be sold online are returned.<br />  When `false`, all products are returned.<br />  Default: **false**
$RequestSubCategoryIds = array(56); // int[] | A list of subcategory IDs to filter by. Use this ID when calling the GET Categories endpoint.

try {
    $result = $apiInstance->saleGetProducts($RequestCategoryIds, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestProductIds, $RequestSearchText, $RequestSecondaryCategoryIds, $RequestSellOnline, $RequestSubCategoryIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RequestCategoryIds** | [**int[]**](../Model/int.md)| A list of revenue category IDs to filter by. Use this ID when calling the GET Categories endpoint. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationId** | **int**| The location ID to use to determine the tax for the products that this request returns.&lt;br /&gt;  Default: **online store** | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestProductIds** | [**string[]**](../Model/string.md)| The barcode number of the product to be filter by. | [optional]
 **RequestSearchText** | **string**| A search filter, used for searching by term. | [optional]
 **RequestSecondaryCategoryIds** | [**int[]**](../Model/int.md)| A list of secondary categories to filter by. Use this ID when calling the GET Categories endpoint. | [optional]
 **RequestSellOnline** | **bool**| When &#x60;true&#x60;, only products that can be sold online are returned.&lt;br /&gt;  When &#x60;false&#x60;, all products are returned.&lt;br /&gt;  Default: **false** | [optional]
 **RequestSubCategoryIds** | [**int[]**](../Model/int.md)| A list of subcategory IDs to filter by. Use this ID when calling the GET Categories endpoint. | [optional]

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
$RequestBarcodeIds = array("RequestBarcodeIds_example"); // string[] | When included, the response only contains details about the specified Barcode Ids.
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationIds = array(56); // int[] | When included, the response only contains details about the specified location Ids.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestProductIds = array("RequestProductIds_example"); // string[] | When included, the response only contains details about the specified product Ids.

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
 **RequestBarcodeIds** | [**string[]**](../Model/string.md)| When included, the response only contains details about the specified Barcode Ids. | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationIds** | [**int[]**](../Model/int.md)| When included, the response only contains details about the specified location Ids. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestProductIds** | [**string[]**](../Model/string.md)| When included, the response only contains details about the specified product Ids. | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetProductsInventoryResponse**](../Model/GetProductsInventoryResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetPurchaseContractStatus**
> \Nlocascio\Mindbody\Model\PurchaseContractResponse saleGetPurchaseContractStatus($AccessToken)

Fetches the status of an initiate purchase contract given accessToken.

Fetches the status of an initiate purchase contract given accessToken.  This endpoint complements the `Initiate Purchase Contract Using Alternative Payments` endpoint. `Initiate Purchase Contract Using Alternative Payments` endpoint will capture the intent to purchase a contract, and return a redirect URL for the end user to make the payment. Once the payment concludes, the end user will be redirected back to the PaymentAuthenticationCallbackUrl, which was provided while invoking the `Initiate Purchase Contract Using Alternative Payments` endpoint. You can then invoke this endpoint to obtain the `PurchaseContractResponse`.                **For a comprehensive guide, follow this tutorial:** [Purchase a Contract](https://developers.mindbodyonline.com/ui/documentation/public-api#/http/tutorials/purchase-a-contract)                The currently supported alternative payments are:  - iDEAL | Wero  - Apple Pay

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
$AccessToken = "AccessToken_example"; // string | 

try {
    $result = $apiInstance->saleGetPurchaseContractStatus($AccessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetPurchaseContractStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **AccessToken** | **string**|  |

### Return type

[**\Nlocascio\Mindbody\Model\PurchaseContractResponse**](../Model/PurchaseContractResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetSales**
> \Nlocascio\Mindbody\Model\GetSalesResponse saleGetSales($RequestEndSaleDateTime, $RequestLimit, $RequestOffset, $RequestPaymentMethodId, $RequestSaleId, $RequestStartSaleDateTime)

Get sales completed at a site.

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
$RequestPaymentMethodId = 56; // int | Filters results to sales paid for by the given payment method ID which indicates payment method(s) (i.e. cash, VISA, AMEX, Check, etc.).
$RequestSaleId = 789; // int | The sale ID associated with the particular item. It Filters results to the requested sale ID.
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
 **RequestPaymentMethodId** | **int**| Filters results to sales paid for by the given payment method ID which indicates payment method(s) (i.e. cash, VISA, AMEX, Check, etc.). | [optional]
 **RequestSaleId** | **int**| The sale ID associated with the particular item. It Filters results to the requested sale ID. | [optional]
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
> \Nlocascio\Mindbody\Model\GetServicesResponse saleGetServices($RequestClassId, $RequestClassScheduleId, $RequestHideRelatedPrograms, $RequestIncludeDiscontinued, $RequestIncludeSaleInContractOnly, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestProgramIds, $RequestSellOnline, $RequestServiceIds, $RequestSessionTypeIds, $RequestStaffId)

Get pricing options available for purchase at a site

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
$RequestIncludeSaleInContractOnly = true; // bool | When `true`, indicates that the filtered pricing option list includes sale in contract only pricing options.<br />  Default: **false**
$RequestLimit = 56; // int | Number of results to include, defaults to 100
$RequestLocationId = 56; // int | When specified, for each returned pricing option, `TaxRate` and `TaxIncluded` are calculated according to the specified location. Note that this does not filter results to only services provided at the given location, and for locations where Value-Added Tax (VAT) rules apply, the `TaxRate` is set to zero.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestProgramIds = array(56); // int[] | Filters to pricing options with the specified program IDs.
$RequestSellOnline = true; // bool | When `true`, filters the pricing options to display only those available for online purchase.  This parameter is only applicable in Business Mode (when a staff authentication header is included) and ignored in Consumer Mode (when no authentication header is passed).  <br />Default: `false` (for staff users)  <br />Business Mode: This parameter controls the filtering behavior. Staff users can set this to `true`  to show only pricing options that can be sold online, or `false` to show all available pricing options.  <br />Consumer Mode: This value is automatically set to `true` and cannot be overridden,  ensuring consumers only see pricing options available for online purchase.
$RequestServiceIds = array("RequestServiceIds_example"); // string[] | Filters to the pricing options with the specified IDs. In this context, service and pricing option are used interchangeably. These are the `PurchasedItems[].Id` returned from GET Sales.
$RequestSessionTypeIds = array(56); // int[] | Filters to the pricing options with the specified session types IDs.
$RequestStaffId = 789; // int | Sets `Price` and `OnlinePrice` to the particular pricing of a specific staff member, if allowed by the business.

try {
    $result = $apiInstance->saleGetServices($RequestClassId, $RequestClassScheduleId, $RequestHideRelatedPrograms, $RequestIncludeDiscontinued, $RequestIncludeSaleInContractOnly, $RequestLimit, $RequestLocationId, $RequestOffset, $RequestProgramIds, $RequestSellOnline, $RequestServiceIds, $RequestSessionTypeIds, $RequestStaffId);
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
 **RequestIncludeSaleInContractOnly** | **bool**| When &#x60;true&#x60;, indicates that the filtered pricing option list includes sale in contract only pricing options.&lt;br /&gt;  Default: **false** | [optional]
 **RequestLimit** | **int**| Number of results to include, defaults to 100 | [optional]
 **RequestLocationId** | **int**| When specified, for each returned pricing option, &#x60;TaxRate&#x60; and &#x60;TaxIncluded&#x60; are calculated according to the specified location. Note that this does not filter results to only services provided at the given location, and for locations where Value-Added Tax (VAT) rules apply, the &#x60;TaxRate&#x60; is set to zero. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestProgramIds** | [**int[]**](../Model/int.md)| Filters to pricing options with the specified program IDs. | [optional]
 **RequestSellOnline** | **bool**| When &#x60;true&#x60;, filters the pricing options to display only those available for online purchase.  This parameter is only applicable in Business Mode (when a staff authentication header is included) and ignored in Consumer Mode (when no authentication header is passed).  &lt;br /&gt;Default: &#x60;false&#x60; (for staff users)  &lt;br /&gt;Business Mode: This parameter controls the filtering behavior. Staff users can set this to &#x60;true&#x60;  to show only pricing options that can be sold online, or &#x60;false&#x60; to show all available pricing options.  &lt;br /&gt;Consumer Mode: This value is automatically set to &#x60;true&#x60; and cannot be overridden,  ensuring consumers only see pricing options available for online purchase. | [optional]
 **RequestServiceIds** | [**string[]**](../Model/string.md)| Filters to the pricing options with the specified IDs. In this context, service and pricing option are used interchangeably. These are the &#x60;PurchasedItems[].Id&#x60; returned from GET Sales. | [optional]
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

This endpoint returns a list of transaction details of processed sales.

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
$RequestLocationId = 56; // int | Filters the transaction results with the ID number associated with the location of the sale.
$RequestOffset = 56; // int | Page offset, defaults to 0.
$RequestSaleId = 789; // int | Filters the transaction results with the ID number associated with the sale.
$RequestStatus = "RequestStatus_example"; // string | Filters the transaction results by the estimated transaction status.
$RequestTransactionEndDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the transaction results that happpened before this date and time.   Default: **today’s date**
$RequestTransactionId = 56; // int | Filters the transaction results with the ID number generated when the sale is processed.
$RequestTransactionStartDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the transaction results that happpened after this date and time.   Default: **today’s date**

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
 **RequestLocationId** | **int**| Filters the transaction results with the ID number associated with the location of the sale. | [optional]
 **RequestOffset** | **int**| Page offset, defaults to 0. | [optional]
 **RequestSaleId** | **int**| Filters the transaction results with the ID number associated with the sale. | [optional]
 **RequestStatus** | **string**| Filters the transaction results by the estimated transaction status. | [optional]
 **RequestTransactionEndDateTime** | **\DateTime**| Filters the transaction results that happpened before this date and time.   Default: **today’s date** | [optional]
 **RequestTransactionId** | **int**| Filters the transaction results with the ID number generated when the sale is processed. | [optional]
 **RequestTransactionStartDateTime** | **\DateTime**| Filters the transaction results that happpened after this date and time.   Default: **today’s date** | [optional]

### Return type

[**\Nlocascio\Mindbody\Model\GetTransactionsResponse**](../Model/GetTransactionsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleInitiateCheckoutShoppingCartUsingAlternativePayments**
> object saleInitiateCheckoutShoppingCartUsingAlternativePayments($Request)

Initiate the Checkout Shopping Cart process, for payments to be made directly by the client.

This endpoint provides a wide range of functionality. For example, you can use it when a client purchases new pricing options, retail products, packages, and tips. You can also combine purchasing a new pricing option and many other functions, such as booking a client into a class, booking a new appointment for a client, enrolling a client into an enrollment or course, or reconciling an unpaid, already booked appointment or class. Use this call when a client purchases:  * a pricing option, after calling `GET Services` and choosing a specific pricing option’s ID  * a retail product, after calling `GET Products` and choosing a specific retail product’s ID  * a package, after calling `GET Packages` and choosing a specific package’s ID  * a tip to give to a staff member, after calling `GET Staff` and choosing a specific staff member ID, and the amount that the client wants to tip  The documentation provides explanations of the request body and response, as well as the cart item metadata, payment item metadata, and purchased cart items.    The currently supported alternative payments are:  - iDEAL | Wero  - Apple Pay                **How to use :**  InitiateCheckoutShoppingCart and CompleteCheckoutShoppingCart endpoints work together. InitiateCheckoutShoppingCart endpoint will capture the intent to perform a checkout, and return a redirect URL for the end user to make the payment. Once the payment concludes, the end user will be redirected back to the PaymentAuthenticationCallbackUrl, which was provided while invoking the InitiateCheckoutShoppingCart endpoint. You can then invoke the CompleteCheckoutShoppingCart endpoint to complete the remaining checkout activities and obtain the CheckoutShoppingCartResponse.    **For a comprehensive guide, follow this tutorial:** [Checkout Shopping Cart Using Alternative Payments](https://developers.mindbodyonline.com/ui/documentation/public-api#/http/tutorials/checkout-shopping-cart-using-alternative-payments)    **Notes:**  - This endpoint is only available for Studios on MBPS (Mindbody Payments) with Stripe payment processor.  - This endpoint only supports the online store location (LocationId = 98). If LocationId is not provided, it will default to 98.  - Product purchases are currently not supported on the online store location.  - This endpoint only supports those payment methods as obtained from the GetAlternativePaymentMethods endpoint.  - Protect yourself from processor fees. Remember to always protect your web forms that leverage POST InitiateCheckoutShoppingCart or POST CompleteCheckoutShoppingCart with a CAPTCHA!

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
$Request = new \Nlocascio\Mindbody\Model\InitiateCheckoutShoppingCartUsingAlternativePaymentsRequest(); // \Nlocascio\Mindbody\Model\InitiateCheckoutShoppingCartUsingAlternativePaymentsRequest | 

try {
    $result = $apiInstance->saleInitiateCheckoutShoppingCartUsingAlternativePayments($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleInitiateCheckoutShoppingCartUsingAlternativePayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\InitiateCheckoutShoppingCartUsingAlternativePaymentsRequest**](../Model/InitiateCheckoutShoppingCartUsingAlternativePaymentsRequest.md)|  |

### Return type

**object**

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleInitiatePurchaseContractUsingAlternativePayments**
> object saleInitiatePurchaseContractUsingAlternativePayments($Request)

Purchase a contract for a client using apm/lpm.

Allows a client to sign up for a contract or autopay using the information returned from the `GET Contracts` endpoint. The client can pay with allowed alternative and local payment methods returned from `Get Alternative Payment Method`. The client must exist at the site specified before this call is made.                The currently supported alternative payments are:  - iDEAL | Wero  - Apple Pay                **For a comprehensive guide, follow this tutorial:** [Purchase a Contract](https://developers.mindbodyonline.com/ui/documentation/public-api#/http/tutorials/purchase-a-contract)                **Notes:**  - This endpoint is only available for Studios on MBPS (Mindbody Payments) with Stripe payment processor.  - This endpoint only supports the online store location (LocationId = 98). If LocationId is not provided, it will default to 98.  - This endpoint only supports those payment methods as obtained from the GetAlternativePaymentMethods endpoint.  - Protect yourself from processor fees and credit card fraud. Remember to always protect your web forms that leverage POST CheckoutShoppingCart, POST PurchaseContract or POST PurchaseGiftCard with a CAPTCHA!

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
$Request = new \Nlocascio\Mindbody\Model\InitiatePurchaseContractRequest(); // \Nlocascio\Mindbody\Model\InitiatePurchaseContractRequest | 

try {
    $result = $apiInstance->saleInitiatePurchaseContractUsingAlternativePayments($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleInitiatePurchaseContractUsingAlternativePayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\InitiatePurchaseContractRequest**](../Model/InitiatePurchaseContractRequest.md)|  |

### Return type

**object**

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salePurchaseAccountCredit**
> \Nlocascio\Mindbody\Model\PurchaseAccountCreditResponse salePurchaseAccountCredit($Request)

Purchases account credit for a client

Allows a client to purchase account credit from a business.

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

Allows a client to sign up for a contract or autopay using the information returned from the `GET Contracts` endpoint. The client can pay with a new credit card or with a stored credit card. The client must exist at the site specified before this call is made.    This endpoint allows a developer to specify whether a client pays now or pays on the `StartDate`. If you are building a client-facing experience, you should talk with the business owner to understand the owner’s policies before you give clients a choice of the two payment types.  This endpoint also allows a developer to specify a `ProrateDate`. If the date is passed, the Totals returned will always include the pro-rate amount for instant payment, like:  - `FirstPaymentOccurs` = `Instant` =&gt; returns instant payment total for the contract + pro-rate amount.  - `FirstPaymentOccurs` = `StartDate` =&gt; returns pro-rate amount + contract amount requiring instant payment. The rest of the contract will be due on `StartDate`.  - Pro-rate amount payment on `StartDate` is not supported by this endpoint.  This endpoint has been updated to support Strong Customer Authentication (SCA).    **Note:**  Protect yourself from processor fees and credit card fraud. Remember to always protect your web forms that leverage POST CheckoutShoppingCart, POST PurchaseContract or POST PurchaseGiftCard with a CAPTCHA!

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

Allows a client to purchase a gift card from a business in a variety of designs. The card can be emailed to the recipient on a specific day, and a card title and a personal message can be added.   **Note**  Protect yourself from processor fees and credit card fraud.Remember to always protect your web forms that leverage POST CheckoutShoppingCart, POST PurchaseContract or POST PurchaseGiftCard with a CAPTCHA!

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

# **saleReturnSale**
> \Nlocascio\Mindbody\Model\ReturnSaleResponse saleReturnSale($ReturnSaleRequest)

Retunn sale

Return a comped sale for a specified sale ID in business mode. The sale is returnable only if it is a sale of a service, product or gift card and it has not been used. Currently, only the comp payment method is supported.

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
$ReturnSaleRequest = new \Nlocascio\Mindbody\Model\ReturnSaleRequest(); // \Nlocascio\Mindbody\Model\ReturnSaleRequest | 

try {
    $result = $apiInstance->saleReturnSale($ReturnSaleRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleReturnSale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ReturnSaleRequest** | [**\Nlocascio\Mindbody\Model\ReturnSaleRequest**](../Model/ReturnSaleRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\ReturnSaleResponse**](../Model/ReturnSaleResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleUpdateProductPrice**
> \Nlocascio\Mindbody\Model\UpdateProductPriceResponse saleUpdateProductPrice($Request)

Update retail product's unit and online price.

This endpoint updates the retail price and an online price for a product. Passing at least one of them is mandatory.

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
$Request = new \Nlocascio\Mindbody\Model\UpdateProductPriceRequest(); // \Nlocascio\Mindbody\Model\UpdateProductPriceRequest | 

try {
    $result = $apiInstance->saleUpdateProductPrice($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleUpdateProductPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\UpdateProductPriceRequest**](../Model/UpdateProductPriceRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\UpdateProductPriceResponse**](../Model/UpdateProductPriceResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleUpdateProducts**
> \Nlocascio\Mindbody\Model\GetProductsResponse saleUpdateProducts($UpdateProductsRequests)

Update retail products available for purchase at a site.

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
$UpdateProductsRequests = array(new \Nlocascio\Mindbody\Model\UpdateProductRequest()); // \Nlocascio\Mindbody\Model\UpdateProductRequest[] | 

try {
    $result = $apiInstance->saleUpdateProducts($UpdateProductsRequests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleUpdateProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **UpdateProductsRequests** | [**\Nlocascio\Mindbody\Model\UpdateProductRequest[]**](../Model/UpdateProductRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\GetProductsResponse**](../Model/GetProductsResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleUpdateSaleDate**
> \Nlocascio\Mindbody\Model\UpdateSaleDateResponse saleUpdateSaleDate($Request)

This endpoint updates the SaleDate and returns the details of the sale.

This endpoint updates the SaleDate and returns the details of the sale.

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
$Request = new \Nlocascio\Mindbody\Model\UpdateSaleDateRequest(); // \Nlocascio\Mindbody\Model\UpdateSaleDateRequest | 

try {
    $result = $apiInstance->saleUpdateSaleDate($Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleUpdateSaleDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Request** | [**\Nlocascio\Mindbody\Model\UpdateSaleDateRequest**](../Model/UpdateSaleDateRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\UpdateSaleDateResponse**](../Model/UpdateSaleDateResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleUpdateServices**
> \Nlocascio\Mindbody\Model\UpdateServiceResponse saleUpdateServices($UpdateServicesRequest)

Update unit price and online price of provided services.

Update unit price and online price of provided services.

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
$UpdateServicesRequest = array(new \Nlocascio\Mindbody\Model\UpdateServiceRequest()); // \Nlocascio\Mindbody\Model\UpdateServiceRequest[] | 

try {
    $result = $apiInstance->saleUpdateServices($UpdateServicesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleUpdateServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **UpdateServicesRequest** | [**\Nlocascio\Mindbody\Model\UpdateServiceRequest[]**](../Model/UpdateServiceRequest.md)|  |

### Return type

[**\Nlocascio\Mindbody\Model\UpdateServiceResponse**](../Model/UpdateServiceResponse.md)

### Authorization

[API-Key](../../README.md#API-Key), [authorization](../../README.md#authorization), [siteId](../../README.md#siteId)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

