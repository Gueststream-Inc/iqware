<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfDailyBreakdown implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DailyBreakdown[] $DailyBreakdown
     */
    protected $DailyBreakdown = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DailyBreakdown[]
     */
    public function getDailyBreakdown()
    {
        return $this->DailyBreakdown;
    }

    /**
     * @param DailyBreakdown[] $DailyBreakdown
     * @return \Gueststream\PMS\IQWare\API\ArrayOfDailyBreakdown
     */
    public function setDailyBreakdown(array $DailyBreakdown = null)
    {
        $this->DailyBreakdown = $DailyBreakdown;
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
        return isset($this->DailyBreakdown[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DailyBreakdown
     */
    public function offsetGet($offset)
    {
        return $this->DailyBreakdown[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DailyBreakdown $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->DailyBreakdown[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->DailyBreakdown[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DailyBreakdown Return the current element
     */
    public function current()
    {
        return current($this->DailyBreakdown);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->DailyBreakdown);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->DailyBreakdown);
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
        reset($this->DailyBreakdown);
    }

    /**
     * Countable implementation
     *
     * @return DailyBreakdown Return count of elements
     */
    public function count()
    {
        return count($this->DailyBreakdown);
    }
}
