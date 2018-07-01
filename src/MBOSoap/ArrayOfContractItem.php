<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfContractItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ContractItem[] $ContractItem
     */
    public $ContractItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContractItem[]
     */
    public function getContractItem()
    {
      return $this->ContractItem;
    }

    /**
     * @param ContractItem[] $ContractItem
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfContractItem
     */
    public function setContractItem(array $ContractItem = null)
    {
      $this->ContractItem = $ContractItem;
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
      return isset($this->ContractItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ContractItem
     */
    public function offsetGet($offset)
    {
      return $this->ContractItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ContractItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ContractItem[] = $value;
      } else {
        $this->ContractItem[$offset] = $value;
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
      unset($this->ContractItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ContractItem Return the current element
     */
    public function current()
    {
      return current($this->ContractItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ContractItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ContractItem);
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
      reset($this->ContractItem);
    }

    /**
     * Countable implementation
     *
     * @return ContractItem Return count of elements
     */
    public function count()
    {
      return count($this->ContractItem);
    }

}
