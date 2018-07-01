<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfSale implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Sale[] $Sale
     */
    public $Sale = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Sale[]
     */
    public function getSale()
    {
      return $this->Sale;
    }

    /**
     * @param Sale[] $Sale
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfSale
     */
    public function setSale(array $Sale = null)
    {
      $this->Sale = $Sale;
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
      return isset($this->Sale[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Sale
     */
    public function offsetGet($offset)
    {
      return $this->Sale[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Sale $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Sale[] = $value;
      } else {
        $this->Sale[$offset] = $value;
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
      unset($this->Sale[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Sale Return the current element
     */
    public function current()
    {
      return current($this->Sale);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Sale);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Sale);
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
      reset($this->Sale);
    }

    /**
     * Countable implementation
     *
     * @return Sale Return count of elements
     */
    public function count()
    {
      return count($this->Sale);
    }

}
