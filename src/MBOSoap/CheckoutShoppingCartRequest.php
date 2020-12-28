<?php

namespace Nlocascio\Mindbody\MBOSoap;

class CheckoutShoppingCartRequest extends MBRequest
{

    /**
     * @var string $CartID
     */
    public $CartID = null;

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var boolean $Test
     */
    public $Test = null;

    /**
     * @var ArrayOfCartItem $CartItems
     */
    public $CartItems = null;

    /**
     * @var boolean $InStore
     */
    public $InStore = null;

    /**
     * @var string $PromotionCode
     */
    public $PromotionCode = null;

    /**
     * @var ArrayOfPaymentInfo $Payments
     */
    public $Payments = null;

    /**
     * @var boolean $SendEmail
     */
    public $SendEmail = null;

    /**
     * @var int $LocationID
     */
    public $LocationID = null;

    /**
     * @var string $Image
     */
    public $Image = null;

    /**
     * @var string $ImageFileName
     */
    public $ImageFileName = null;

    /**
     * @var boolean $ConsumerPresent
     */
    public $ConsumerPresent = null;

    /**
     * @var string $PaymentAuthenticationCallbackUrl
     */
    public $PaymentAuthenticationCallbackUrl = null;

    /**
     * @var ArrayOfInt $TransactionIDs
     */
    public $TransactionIDs = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getCartID()
    {
      return $this->CartID;
    }

    /**
     * @param string $CartID
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartRequest
     */
    public function setCartID($CartID)
    {
      $this->CartID = $CartID;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param string $ClientID
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTest()
    {
      return $this->Test;
    }

    /**
     * @param boolean $Test
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

    /**
     * @return ArrayOfCartItem
     */
    public function getCartItems()
    {
      return $this->CartItems;
    }

    /**
     * @param ArrayOfCartItem $CartItems
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartRequest
     */
    public function setCartItems($CartItems)
    {
      $this->CartItems = $CartItems;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInStore()
    {
      return $this->InStore;
    }

    /**
     * @param boolean $InStore
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartRequest
     */
    public function setInStore($InStore)
    {
      $this->InStore = $InStore;
      return $this;
    }

    /**
     * @return string
     */
    public function getPromotionCode()
    {
      return $this->PromotionCode;
    }

    /**
     * @param string $PromotionCode
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartRequest
     */
    public function setPromotionCode($PromotionCode)
    {
      $this->PromotionCode = $PromotionCode;
      return $this;
    }

    /**
     * @return ArrayOfPaymentInfo
     */
    public function getPayments()
    {
      return $this->Payments;
    }

    /**
     * @param ArrayOfPaymentInfo $Payments
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartRequest
     */
    public function setPayments($Payments)
    {
      $this->Payments = $Payments;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendEmail()
    {
      return $this->SendEmail;
    }

    /**
     * @param boolean $SendEmail
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartRequest
     */
    public function setSendEmail($SendEmail)
    {
      $this->SendEmail = $SendEmail;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocationID()
    {
      return $this->LocationID;
    }

    /**
     * @param int $LocationID
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartRequest
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
      return $this->Image;
    }

    /**
     * @param string $Image
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartRequest
     */
    public function setImage($Image)
    {
      $this->Image = $Image;
      return $this;
    }

    /**
     * @return string
     */
    public function getImageFileName()
    {
      return $this->ImageFileName;
    }

    /**
     * @param string $ImageFileName
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartRequest
     */
    public function setImageFileName($ImageFileName)
    {
      $this->ImageFileName = $ImageFileName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getConsumerPresent()
    {
      return $this->ConsumerPresent;
    }

    /**
     * @param boolean $ConsumerPresent
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartRequest
     */
    public function setConsumerPresent($ConsumerPresent)
    {
      $this->ConsumerPresent = $ConsumerPresent;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentAuthenticationCallbackUrl()
    {
      return $this->PaymentAuthenticationCallbackUrl;
    }

    /**
     * @param string $PaymentAuthenticationCallbackUrl
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartRequest
     */
    public function setPaymentAuthenticationCallbackUrl($PaymentAuthenticationCallbackUrl)
    {
      $this->PaymentAuthenticationCallbackUrl = $PaymentAuthenticationCallbackUrl;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getTransactionIDs()
    {
      return $this->TransactionIDs;
    }

    /**
     * @param ArrayOfInt $TransactionIDs
     * @return \Nlocascio\Mindbody\MBOSoap\CheckoutShoppingCartRequest
     */
    public function setTransactionIDs($TransactionIDs)
    {
      $this->TransactionIDs = $TransactionIDs;
      return $this;
    }

}
