<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfUpcomingAutopayEvent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UpcomingAutopayEvent[] $UpcomingAutopayEvent
     */
    public $UpcomingAutopayEvent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UpcomingAutopayEvent[]
     */
    public function getUpcomingAutopayEvent()
    {
      return $this->UpcomingAutopayEvent;
    }

    /**
     * @param UpcomingAutopayEvent[] $UpcomingAutopayEvent
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfUpcomingAutopayEvent
     */
    public function setUpcomingAutopayEvent(array $UpcomingAutopayEvent = null)
    {
      $this->UpcomingAutopayEvent = $UpcomingAutopayEvent;
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
      return isset($this->UpcomingAutopayEvent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UpcomingAutopayEvent
     */
    public function offsetGet($offset)
    {
      return $this->UpcomingAutopayEvent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UpcomingAutopayEvent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->UpcomingAutopayEvent[] = $value;
      } else {
        $this->UpcomingAutopayEvent[$offset] = $value;
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
      unset($this->UpcomingAutopayEvent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UpcomingAutopayEvent Return the current element
     */
    public function current()
    {
      return current($this->UpcomingAutopayEvent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->UpcomingAutopayEvent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->UpcomingAutopayEvent);
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
      reset($this->UpcomingAutopayEvent);
    }

    /**
     * Countable implementation
     *
     * @return UpcomingAutopayEvent Return count of elements
     */
    public function count()
    {
      return count($this->UpcomingAutopayEvent);
    }

}
