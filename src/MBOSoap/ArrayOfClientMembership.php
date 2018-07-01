<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfClientMembership implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ClientMembership[] $ClientMembership
     */
    public $ClientMembership = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClientMembership[]
     */
    public function getClientMembership()
    {
      return $this->ClientMembership;
    }

    /**
     * @param ClientMembership[] $ClientMembership
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfClientMembership
     */
    public function setClientMembership(array $ClientMembership = null)
    {
      $this->ClientMembership = $ClientMembership;
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
      return isset($this->ClientMembership[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClientMembership
     */
    public function offsetGet($offset)
    {
      return $this->ClientMembership[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClientMembership $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClientMembership[] = $value;
      } else {
        $this->ClientMembership[$offset] = $value;
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
      unset($this->ClientMembership[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClientMembership Return the current element
     */
    public function current()
    {
      return current($this->ClientMembership);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClientMembership);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClientMembership);
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
      reset($this->ClientMembership);
    }

    /**
     * Countable implementation
     *
     * @return ClientMembership Return count of elements
     */
    public function count()
    {
      return count($this->ClientMembership);
    }

}
