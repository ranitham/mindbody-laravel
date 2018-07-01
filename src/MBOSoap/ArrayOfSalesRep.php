<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfSalesRep implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesRep[] $SalesRep
     */
    public $SalesRep = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesRep[]
     */
    public function getSalesRep()
    {
      return $this->SalesRep;
    }

    /**
     * @param SalesRep[] $SalesRep
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfSalesRep
     */
    public function setSalesRep(array $SalesRep = null)
    {
      $this->SalesRep = $SalesRep;
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
      return isset($this->SalesRep[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesRep
     */
    public function offsetGet($offset)
    {
      return $this->SalesRep[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesRep $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SalesRep[] = $value;
      } else {
        $this->SalesRep[$offset] = $value;
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
      unset($this->SalesRep[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesRep Return the current element
     */
    public function current()
    {
      return current($this->SalesRep);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesRep);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesRep);
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
      reset($this->SalesRep);
    }

    /**
     * Countable implementation
     *
     * @return SalesRep Return count of elements
     */
    public function count()
    {
      return count($this->SalesRep);
    }

}
