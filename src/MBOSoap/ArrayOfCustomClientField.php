<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfCustomClientField implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CustomClientField[] $CustomClientField
     */
    public $CustomClientField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomClientField[]
     */
    public function getCustomClientField()
    {
      return $this->CustomClientField;
    }

    /**
     * @param CustomClientField[] $CustomClientField
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfCustomClientField
     */
    public function setCustomClientField(array $CustomClientField = null)
    {
      $this->CustomClientField = $CustomClientField;
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
      return isset($this->CustomClientField[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomClientField
     */
    public function offsetGet($offset)
    {
      return $this->CustomClientField[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomClientField $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CustomClientField[] = $value;
      } else {
        $this->CustomClientField[$offset] = $value;
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
      unset($this->CustomClientField[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CustomClientField Return the current element
     */
    public function current()
    {
      return current($this->CustomClientField);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CustomClientField);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CustomClientField);
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
      reset($this->CustomClientField);
    }

    /**
     * Countable implementation
     *
     * @return CustomClientField Return count of elements
     */
    public function count()
    {
      return count($this->CustomClientField);
    }

}
