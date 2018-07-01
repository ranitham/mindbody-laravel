<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfContactLogType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ContactLogType[] $ContactLogType
     */
    public $ContactLogType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContactLogType[]
     */
    public function getContactLogType()
    {
      return $this->ContactLogType;
    }

    /**
     * @param ContactLogType[] $ContactLogType
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfContactLogType
     */
    public function setContactLogType(array $ContactLogType = null)
    {
      $this->ContactLogType = $ContactLogType;
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
      return isset($this->ContactLogType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ContactLogType
     */
    public function offsetGet($offset)
    {
      return $this->ContactLogType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ContactLogType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ContactLogType[] = $value;
      } else {
        $this->ContactLogType[$offset] = $value;
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
      unset($this->ContactLogType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ContactLogType Return the current element
     */
    public function current()
    {
      return current($this->ContactLogType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ContactLogType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ContactLogType);
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
      reset($this->ContactLogType);
    }

    /**
     * Countable implementation
     *
     * @return ContactLogType Return count of elements
     */
    public function count()
    {
      return count($this->ContactLogType);
    }

}
