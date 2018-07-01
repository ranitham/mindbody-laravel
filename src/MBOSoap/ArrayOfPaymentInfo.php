<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfPaymentInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PaymentInfo[] $PaymentInfo
     */
    public $PaymentInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PaymentInfo[]
     */
    public function getPaymentInfo()
    {
      return $this->PaymentInfo;
    }

    /**
     * @param PaymentInfo[] $PaymentInfo
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfPaymentInfo
     */
    public function setPaymentInfo(array $PaymentInfo = null)
    {
      $this->PaymentInfo = $PaymentInfo;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->PaymentInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PaymentInfo
     */
    public function offsetGet($offset)
    {
      return $this->PaymentInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PaymentInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PaymentInfo[] = $value;
      } else {
        $this->PaymentInfo[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PaymentInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PaymentInfo Return the current element
     */
    public function current()
    {
      return current($this->PaymentInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PaymentInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PaymentInfo);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->PaymentInfo);
    }

    /**
     * Countable implementation
     *
     * @return PaymentInfo Return count of elements
     */
    public function count()
    {
      return count($this->PaymentInfo);
    }

}
