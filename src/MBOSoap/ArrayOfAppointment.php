<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfAppointment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Appointment[] $Appointment
     */
    public $Appointment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Appointment[]
     */
    public function getAppointment()
    {
      return $this->Appointment;
    }

    /**
     * @param Appointment[] $Appointment
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfAppointment
     */
    public function setAppointment(array $Appointment = null)
    {
      $this->Appointment = $Appointment;
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
      return isset($this->Appointment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Appointment
     */
    public function offsetGet($offset)
    {
      return $this->Appointment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Appointment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Appointment[] = $value;
      } else {
        $this->Appointment[$offset] = $value;
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
      unset($this->Appointment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Appointment Return the current element
     */
    public function current()
    {
      return current($this->Appointment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Appointment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Appointment);
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
      reset($this->Appointment);
    }

    /**
     * Countable implementation
     *
     * @return Appointment Return count of elements
     */
    public function count()
    {
      return count($this->Appointment);
    }

}
