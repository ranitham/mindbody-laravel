<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfResource implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Resource[] $Resource
     */
    public $Resource = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Resource[]
     */
    public function getResource()
    {
      return $this->Resource;
    }

    /**
     * @param Resource[] $Resource
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfResource
     */
    public function setResource(array $Resource = null)
    {
      $this->Resource = $Resource;
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
      return isset($this->Resource[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Resource
     */
    public function offsetGet($offset)
    {
      return $this->Resource[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Resource $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Resource[] = $value;
      } else {
        $this->Resource[$offset] = $value;
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
      unset($this->Resource[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Resource Return the current element
     */
    public function current()
    {
      return current($this->Resource);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Resource);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Resource);
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
      reset($this->Resource);
    }

    /**
     * Countable implementation
     *
     * @return Resource Return count of elements
     */
    public function count()
    {
      return count($this->Resource);
    }

}
