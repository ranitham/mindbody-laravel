<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfGenderOption implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GenderOption[] $GenderOption
     */
    public $GenderOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GenderOption[]
     */
    public function getGenderOption()
    {
      return $this->GenderOption;
    }

    /**
     * @param GenderOption[] $GenderOption
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfGenderOption
     */
    public function setGenderOption(array $GenderOption = null)
    {
      $this->GenderOption = $GenderOption;
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
      return isset($this->GenderOption[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GenderOption
     */
    public function offsetGet($offset)
    {
      return $this->GenderOption[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GenderOption $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->GenderOption[] = $value;
      } else {
        $this->GenderOption[$offset] = $value;
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
      unset($this->GenderOption[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GenderOption Return the current element
     */
    public function current()
    {
      return current($this->GenderOption);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GenderOption);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GenderOption);
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
      reset($this->GenderOption);
    }

    /**
     * Countable implementation
     *
     * @return GenderOption Return count of elements
     */
    public function count()
    {
      return count($this->GenderOption);
    }

}
