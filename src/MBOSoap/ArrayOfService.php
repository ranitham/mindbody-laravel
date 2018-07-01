<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfService implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Service[] $Service
     */
    public $Service = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Service[]
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param Service[] $Service
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfService
     */
    public function setService(array $Service = null)
    {
      $this->Service = $Service;
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
      return isset($this->Service[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Service
     */
    public function offsetGet($offset)
    {
      return $this->Service[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Service $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Service[] = $value;
      } else {
        $this->Service[$offset] = $value;
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
      unset($this->Service[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Service Return the current element
     */
    public function current()
    {
      return current($this->Service);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Service);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Service);
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
      reset($this->Service);
    }

    /**
     * Countable implementation
     *
     * @return Service Return count of elements
     */
    public function count()
    {
      return count($this->Service);
    }

}
