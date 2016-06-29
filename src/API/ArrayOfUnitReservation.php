<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfUnitReservation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UnitReservation[] $UnitReservation
     */
    protected $UnitReservation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UnitReservation[]
     */
    public function getUnitReservation()
    {
        return $this->UnitReservation;
    }

    /**
     * @param UnitReservation[] $UnitReservation
     * @return \Gueststream\PMS\IQWare\API\ArrayOfUnitReservation
     */
    public function setUnitReservation(array $UnitReservation = null)
    {
        $this->UnitReservation = $UnitReservation;
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
        return isset($this->UnitReservation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UnitReservation
     */
    public function offsetGet($offset)
    {
        return $this->UnitReservation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UnitReservation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->UnitReservation[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->UnitReservation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UnitReservation Return the current element
     */
    public function current()
    {
        return current($this->UnitReservation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->UnitReservation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->UnitReservation);
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
        reset($this->UnitReservation);
    }

    /**
     * Countable implementation
     *
     * @return UnitReservation Return count of elements
     */
    public function count()
    {
        return count($this->UnitReservation);
    }
}
