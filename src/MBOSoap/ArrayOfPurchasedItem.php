<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfPurchasedItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PurchasedItem[] $PurchasedItem
     */
    public $PurchasedItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PurchasedItem[]
     */
    public function getPurchasedItem()
    {
      return $this->PurchasedItem;
    }

    /**
     * @param PurchasedItem[] $PurchasedItem
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfPurchasedItem
     */
    public function setPurchasedItem(array $PurchasedItem = null)
    {
      $this->PurchasedItem = $PurchasedItem;
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
      return isset($this->PurchasedItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PurchasedItem
     */
    public function offsetGet($offset)
    {
      return $this->PurchasedItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PurchasedItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PurchasedItem[] = $value;
      } else {
        $this->PurchasedItem[$offset] = $value;
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
      unset($this->PurchasedItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PurchasedItem Return the current element
     */
    public function current()
    {
      return current($this->PurchasedItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PurchasedItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PurchasedItem);
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
      reset($this->PurchasedItem);
    }

    /**
     * Countable implementation
     *
     * @return PurchasedItem Return count of elements
     */
    public function count()
    {
      return count($this->PurchasedItem);
    }

}
