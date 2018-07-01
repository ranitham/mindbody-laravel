<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfClientIndexValue implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ClientIndexValue[] $ClientIndexValue
     */
    public $ClientIndexValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClientIndexValue[]
     */
    public function getClientIndexValue()
    {
      return $this->ClientIndexValue;
    }

    /**
     * @param ClientIndexValue[] $ClientIndexValue
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfClientIndexValue
     */
    public function setClientIndexValue(array $ClientIndexValue = null)
    {
      $this->ClientIndexValue = $ClientIndexValue;
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
      return isset($this->ClientIndexValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClientIndexValue
     */
    public function offsetGet($offset)
    {
      return $this->ClientIndexValue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClientIndexValue $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClientIndexValue[] = $value;
      } else {
        $this->ClientIndexValue[$offset] = $value;
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
      unset($this->ClientIndexValue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClientIndexValue Return the current element
     */
    public function current()
    {
      return current($this->ClientIndexValue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClientIndexValue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClientIndexValue);
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
      reset($this->ClientIndexValue);
    }

    /**
     * Countable implementation
     *
     * @return ClientIndexValue Return count of elements
     */
    public function count()
    {
      return count($this->ClientIndexValue);
    }

}
