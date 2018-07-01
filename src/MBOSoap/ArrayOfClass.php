<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfClass implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ClassCustom[] $Class
     */
    public $Class = null;

    
    public function __construct()
    {

    }

    /**
     * @return ClassCustom[]
     */
    public function getClass()
    {
      return $this->Class;
    }

    /**
     * @param ClassCustom[] $Class
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfClass
     */
    public function setClass(array $Class = null)
    {
      $this->Class = $Class;
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
      return isset($this->Class[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClassCustom
     */
    public function offsetGet($offset)
    {
      return $this->Class[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClassCustom $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Class[] = $value;
      } else {
        $this->Class[$offset] = $value;
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
      unset($this->Class[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClassCustom Return the current element
     */
    public function current()
    {
      return current($this->Class);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Class);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Class);
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
      reset($this->Class);
    }

    /**
     * Countable implementation
     *
     * @return ClassCustom Return count of elements
     */
    public function count()
    {
      return count($this->Class);
    }

}
