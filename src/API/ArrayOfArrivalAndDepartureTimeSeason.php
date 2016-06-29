<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfArrivalAndDepartureTimeSeason implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ArrivalAndDepartureTimeSeason[] $ArrivalAndDepartureTimeSeason
     */
    protected $ArrivalAndDepartureTimeSeason = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrivalAndDepartureTimeSeason[]
     */
    public function getArrivalAndDepartureTimeSeason()
    {
        return $this->ArrivalAndDepartureTimeSeason;
    }

    /**
     * @param ArrivalAndDepartureTimeSeason[] $ArrivalAndDepartureTimeSeason
     * @return \Gueststream\PMS\IQWare\API\ArrayOfArrivalAndDepartureTimeSeason
     */
    public function setArrivalAndDepartureTimeSeason(array $ArrivalAndDepartureTimeSeason = null)
    {
        $this->ArrivalAndDepartureTimeSeason = $ArrivalAndDepartureTimeSeason;
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
        return isset($this->ArrivalAndDepartureTimeSeason[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ArrivalAndDepartureTimeSeason
     */
    public function offsetGet($offset)
    {
        return $this->ArrivalAndDepartureTimeSeason[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ArrivalAndDepartureTimeSeason $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->ArrivalAndDepartureTimeSeason[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->ArrivalAndDepartureTimeSeason[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ArrivalAndDepartureTimeSeason Return the current element
     */
    public function current()
    {
        return current($this->ArrivalAndDepartureTimeSeason);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ArrivalAndDepartureTimeSeason);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ArrivalAndDepartureTimeSeason);
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
        reset($this->ArrivalAndDepartureTimeSeason);
    }

    /**
     * Countable implementation
     *
     * @return ArrivalAndDepartureTimeSeason Return count of elements
     */
    public function count()
    {
        return count($this->ArrivalAndDepartureTimeSeason);
    }
}
