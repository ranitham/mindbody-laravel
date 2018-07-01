<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfLocation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Location[] $Location
     */
    public $Location = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Location[]
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param Location[] $Location
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfLocation
     */
    public function setLocation(array $Location = null)
    {
      $this->Location = $Location;
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
      return isset($this->Location[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Location
     */
    public function offsetGet($offset)
    {
      return $this->Location[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Location $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Location[] = $value;
      } else {
        $this->Location[$offset] = $value;
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
      unset($this->Location[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Location Return the current element
     */
    public function current()
    {
      return current($this->Location);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Location);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Location);
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
      reset($this->Location);
    }

    /**
     * Countable implementation
     *
     * @return Location Return count of elements
     */
    public function count()
    {
      return count($this->Location);
    }

}
