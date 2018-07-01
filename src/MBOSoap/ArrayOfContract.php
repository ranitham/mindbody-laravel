<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfContract implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Contract[] $Contract
     */
    public $Contract = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Contract[]
     */
    public function getContract()
    {
      return $this->Contract;
    }

    /**
     * @param Contract[] $Contract
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfContract
     */
    public function setContract(array $Contract = null)
    {
      $this->Contract = $Contract;
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
      return isset($this->Contract[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Contract
     */
    public function offsetGet($offset)
    {
      return $this->Contract[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Contract $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Contract[] = $value;
      } else {
        $this->Contract[$offset] = $value;
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
      unset($this->Contract[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Contract Return the current element
     */
    public function current()
    {
      return current($this->Contract);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Contract);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Contract);
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
      reset($this->Contract);
    }

    /**
     * Countable implementation
     *
     * @return Contract Return count of elements
     */
    public function count()
    {
      return count($this->Contract);
    }

}
