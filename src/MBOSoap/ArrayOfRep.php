<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfRep implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Rep[] $Rep
     */
    public $Rep = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Rep[]
     */
    public function getRep()
    {
      return $this->Rep;
    }

    /**
     * @param Rep[] $Rep
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfRep
     */
    public function setRep(array $Rep = null)
    {
      $this->Rep = $Rep;
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
      return isset($this->Rep[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Rep
     */
    public function offsetGet($offset)
    {
      return $this->Rep[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Rep $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Rep[] = $value;
      } else {
        $this->Rep[$offset] = $value;
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
      unset($this->Rep[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Rep Return the current element
     */
    public function current()
    {
      return current($this->Rep);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Rep);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Rep);
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
      reset($this->Rep);
    }

    /**
     * Countable implementation
     *
     * @return Rep Return count of elements
     */
    public function count()
    {
      return count($this->Rep);
    }

}
