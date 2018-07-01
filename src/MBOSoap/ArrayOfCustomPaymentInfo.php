<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfCustomPaymentInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CustomPaymentInfo[] $CustomPaymentInfo
     */
    public $CustomPaymentInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomPaymentInfo[]
     */
    public function getCustomPaymentInfo()
    {
      return $this->CustomPaymentInfo;
    }

    /**
     * @param CustomPaymentInfo[] $CustomPaymentInfo
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfCustomPaymentInfo
     */
    public function setCustomPaymentInfo(array $CustomPaymentInfo = null)
    {
      $this->CustomPaymentInfo = $CustomPaymentInfo;
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
      return isset($this->CustomPaymentInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomPaymentInfo
     */
    public function offsetGet($offset)
    {
      return $this->CustomPaymentInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomPaymentInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CustomPaymentInfo[] = $value;
      } else {
        $this->CustomPaymentInfo[$offset] = $value;
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
      unset($this->CustomPaymentInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CustomPaymentInfo Return the current element
     */
    public function current()
    {
      return current($this->CustomPaymentInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CustomPaymentInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CustomPaymentInfo);
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
      reset($this->CustomPaymentInfo);
    }

    /**
     * Countable implementation
     *
     * @return CustomPaymentInfo Return count of elements
     */
    public function count()
    {
      return count($this->CustomPaymentInfo);
    }

}
