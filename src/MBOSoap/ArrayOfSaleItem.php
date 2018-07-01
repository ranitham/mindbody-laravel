<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfSaleItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SaleItem[] $SaleItem
     */
    public $SaleItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SaleItem[]
     */
    public function getSaleItem()
    {
      return $this->SaleItem;
    }

    /**
     * @param SaleItem[] $SaleItem
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfSaleItem
     */
    public function setSaleItem(array $SaleItem = null)
    {
      $this->SaleItem = $SaleItem;
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
      return isset($this->SaleItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SaleItem
     */
    public function offsetGet($offset)
    {
      return $this->SaleItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SaleItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SaleItem[] = $value;
      } else {
        $this->SaleItem[$offset] = $value;
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
      unset($this->SaleItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SaleItem Return the current element
     */
    public function current()
    {
      return current($this->SaleItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SaleItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SaleItem);
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
      reset($this->SaleItem);
    }

    /**
     * Countable implementation
     *
     * @return SaleItem Return count of elements
     */
    public function count()
    {
      return count($this->SaleItem);
    }

}
