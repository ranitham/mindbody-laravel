<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfTransactionResponse implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TransactionResponse[] $TransactionResponse
     */
    public $TransactionResponse = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TransactionResponse[]
     */
    public function getTransactionResponse()
    {
      return $this->TransactionResponse;
    }

    /**
     * @param TransactionResponse[] $TransactionResponse
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfTransactionResponse
     */
    public function setTransactionResponse(array $TransactionResponse = null)
    {
      $this->TransactionResponse = $TransactionResponse;
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
      return isset($this->TransactionResponse[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TransactionResponse
     */
    public function offsetGet($offset)
    {
      return $this->TransactionResponse[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TransactionResponse $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TransactionResponse[] = $value;
      } else {
        $this->TransactionResponse[$offset] = $value;
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
      unset($this->TransactionResponse[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TransactionResponse Return the current element
     */
    public function current()
    {
      return current($this->TransactionResponse);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TransactionResponse);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TransactionResponse);
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
      reset($this->TransactionResponse);
    }

    /**
     * Countable implementation
     *
     * @return TransactionResponse Return count of elements
     */
    public function count()
    {
      return count($this->TransactionResponse);
    }

}
