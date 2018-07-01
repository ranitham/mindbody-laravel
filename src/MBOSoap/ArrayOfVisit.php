<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfVisit implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Visit[] $Visit
     */
    public $Visit = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Visit[]
     */
    public function getVisit()
    {
      return $this->Visit;
    }

    /**
     * @param Visit[] $Visit
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfVisit
     */
    public function setVisit(array $Visit = null)
    {
      $this->Visit = $Visit;
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
      return isset($this->Visit[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Visit
     */
    public function offsetGet($offset)
    {
      return $this->Visit[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Visit $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Visit[] = $value;
      } else {
        $this->Visit[$offset] = $value;
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
      unset($this->Visit[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Visit Return the current element
     */
    public function current()
    {
      return current($this->Visit);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Visit);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Visit);
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
      reset($this->Visit);
    }

    /**
     * Countable implementation
     *
     * @return Visit Return count of elements
     */
    public function count()
    {
      return count($this->Visit);
    }

}
