<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfFormulaNote implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FormulaNote[] $FormulaNote
     */
    public $FormulaNote = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FormulaNote[]
     */
    public function getFormulaNote()
    {
      return $this->FormulaNote;
    }

    /**
     * @param FormulaNote[] $FormulaNote
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfFormulaNote
     */
    public function setFormulaNote(array $FormulaNote = null)
    {
      $this->FormulaNote = $FormulaNote;
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
      return isset($this->FormulaNote[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FormulaNote
     */
    public function offsetGet($offset)
    {
      return $this->FormulaNote[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FormulaNote $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FormulaNote[] = $value;
      } else {
        $this->FormulaNote[$offset] = $value;
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
      unset($this->FormulaNote[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FormulaNote Return the current element
     */
    public function current()
    {
      return current($this->FormulaNote);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FormulaNote);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FormulaNote);
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
      reset($this->FormulaNote);
    }

    /**
     * Countable implementation
     *
     * @return FormulaNote Return count of elements
     */
    public function count()
    {
      return count($this->FormulaNote);
    }

}
