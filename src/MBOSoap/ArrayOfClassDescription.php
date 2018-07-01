<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfClassDescription implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ClassDescription[] $ClassDescription
     */
    public $ClassDescription = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClassDescription[]
     */
    public function getClassDescription()
    {
      return $this->ClassDescription;
    }

    /**
     * @param ClassDescription[] $ClassDescription
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfClassDescription
     */
    public function setClassDescription(array $ClassDescription = null)
    {
      $this->ClassDescription = $ClassDescription;
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
      return isset($this->ClassDescription[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClassDescription
     */
    public function offsetGet($offset)
    {
      return $this->ClassDescription[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClassDescription $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClassDescription[] = $value;
      } else {
        $this->ClassDescription[$offset] = $value;
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
      unset($this->ClassDescription[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClassDescription Return the current element
     */
    public function current()
    {
      return current($this->ClassDescription);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClassDescription);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClassDescription);
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
      reset($this->ClassDescription);
    }

    /**
     * Countable implementation
     *
     * @return ClassDescription Return count of elements
     */
    public function count()
    {
      return count($this->ClassDescription);
    }

}
