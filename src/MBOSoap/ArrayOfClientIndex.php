<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfClientIndex implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ClientIndex[] $ClientIndex
     */
    public $ClientIndex = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClientIndex[]
     */
    public function getClientIndex()
    {
      return $this->ClientIndex;
    }

    /**
     * @param ClientIndex[] $ClientIndex
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfClientIndex
     */
    public function setClientIndex(array $ClientIndex = null)
    {
      $this->ClientIndex = $ClientIndex;
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
      return isset($this->ClientIndex[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClientIndex
     */
    public function offsetGet($offset)
    {
      return $this->ClientIndex[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClientIndex $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClientIndex[] = $value;
      } else {
        $this->ClientIndex[$offset] = $value;
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
      unset($this->ClientIndex[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClientIndex Return the current element
     */
    public function current()
    {
      return current($this->ClientIndex);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClientIndex);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClientIndex);
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
      reset($this->ClientIndex);
    }

    /**
     * Countable implementation
     *
     * @return ClientIndex Return count of elements
     */
    public function count()
    {
      return count($this->ClientIndex);
    }

}
