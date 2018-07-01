<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfOption implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Option[] $Option
     */
    public $Option = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Option[]
     */
    public function getOption()
    {
      return $this->Option;
    }

    /**
     * @param Option[] $Option
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfOption
     */
    public function setOption(array $Option = null)
    {
      $this->Option = $Option;
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
      return isset($this->Option[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Option
     */
    public function offsetGet($offset)
    {
      return $this->Option[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Option $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Option[] = $value;
      } else {
        $this->Option[$offset] = $value;
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
      unset($this->Option[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Option Return the current element
     */
    public function current()
    {
      return current($this->Option);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Option);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Option);
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
      reset($this->Option);
    }

    /**
     * Countable implementation
     *
     * @return Option Return count of elements
     */
    public function count()
    {
      return count($this->Option);
    }

}
