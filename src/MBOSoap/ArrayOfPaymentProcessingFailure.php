<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfPaymentProcessingFailure implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PaymentProcessingFailure[] $PaymentProcessingFailure
     */
    public $PaymentProcessingFailure = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PaymentProcessingFailure[]
     */
    public function getPaymentProcessingFailure()
    {
      return $this->PaymentProcessingFailure;
    }

    /**
     * @param PaymentProcessingFailure[] $PaymentProcessingFailure
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfPaymentProcessingFailure
     */
    public function setPaymentProcessingFailure(array $PaymentProcessingFailure = null)
    {
      $this->PaymentProcessingFailure = $PaymentProcessingFailure;
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
      return isset($this->PaymentProcessingFailure[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PaymentProcessingFailure
     */
    public function offsetGet($offset)
    {
      return $this->PaymentProcessingFailure[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PaymentProcessingFailure $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PaymentProcessingFailure[] = $value;
      } else {
        $this->PaymentProcessingFailure[$offset] = $value;
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
      unset($this->PaymentProcessingFailure[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PaymentProcessingFailure Return the current element
     */
    public function current()
    {
      return current($this->PaymentProcessingFailure);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PaymentProcessingFailure);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PaymentProcessingFailure);
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
      reset($this->PaymentProcessingFailure);
    }

    /**
     * Countable implementation
     *
     * @return PaymentProcessingFailure Return count of elements
     */
    public function count()
    {
      return count($this->PaymentProcessingFailure);
    }

}
