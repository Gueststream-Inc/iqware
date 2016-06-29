<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfDailyOccupancy implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DailyOccupancy[] $DailyOccupancy
     */
    protected $DailyOccupancy = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DailyOccupancy[]
     */
    public function getDailyOccupancy()
    {
        return $this->DailyOccupancy;
    }

    /**
     * @param DailyOccupancy[] $DailyOccupancy
     * @return \Gueststream\PMS\IQWare\API\ArrayOfDailyOccupancy
     */
    public function setDailyOccupancy(array $DailyOccupancy = null)
    {
        $this->DailyOccupancy = $DailyOccupancy;
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
        return isset($this->DailyOccupancy[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DailyOccupancy
     */
    public function offsetGet($offset)
    {
        return $this->DailyOccupancy[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DailyOccupancy $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->DailyOccupancy[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->DailyOccupancy[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DailyOccupancy Return the current element
     */
    public function current()
    {
        return current($this->DailyOccupancy);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->DailyOccupancy);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->DailyOccupancy);
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
        reset($this->DailyOccupancy);
    }

    /**
     * Countable implementation
     *
     * @return DailyOccupancy Return count of elements
     */
    public function count()
    {
        return count($this->DailyOccupancy);
    }
}
