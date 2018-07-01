<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfClientContract implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ClientContract[] $ClientContract
     */
    public $ClientContract = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClientContract[]
     */
    public function getClientContract()
    {
      return $this->ClientContract;
    }

    /**
     * @param ClientContract[] $ClientContract
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfClientContract
     */
    public function setClientContract(array $ClientContract = null)
    {
      $this->ClientContract = $ClientContract;
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
      return isset($this->ClientContract[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClientContract
     */
    public function offsetGet($offset)
    {
      return $this->ClientContract[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClientContract $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClientContract[] = $value;
      } else {
        $this->ClientContract[$offset] = $value;
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
      unset($this->ClientContract[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClientContract Return the current element
     */
    public function current()
    {
      return current($this->ClientContract);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClientContract);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClientContract);
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
      reset($this->ClientContract);
    }

    /**
     * Countable implementation
     *
     * @return ClientContract Return count of elements
     */
    public function count()
    {
      return count($this->ClientContract);
    }

}
