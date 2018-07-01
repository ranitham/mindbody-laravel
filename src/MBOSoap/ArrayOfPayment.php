<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfPayment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Payment[] $Payment
     */
    public $Payment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Payment[]
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param Payment[] $Payment
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfPayment
     */
    public function setPayment(array $Payment = null)
    {
      $this->Payment = $Payment;
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
      return isset($this->Payment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Payment
     */
    public function offsetGet($offset)
    {
      return $this->Payment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Payment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Payment[] = $value;
      } else {
        $this->Payment[$offset] = $value;
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
      unset($this->Payment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Payment Return the current element
     */
    public function current()
    {
      return current($this->Payment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Payment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Payment);
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
      reset($this->Payment);
    }

    /**
     * Countable implementation
     *
     * @return Payment Return count of elements
     */
    public function count()
    {
      return count($this->Payment);
    }

}
