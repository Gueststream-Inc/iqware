<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfUnitDate implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UnitDate[] $UnitDate
     */
    protected $UnitDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UnitDate[]
     */
    public function getUnitDate()
    {
        return $this->UnitDate;
    }

    /**
     * @param UnitDate[] $UnitDate
     * @return \Gueststream\PMS\IQWare\API\ArrayOfUnitDate
     */
    public function setUnitDate(array $UnitDate = null)
    {
        $this->UnitDate = $UnitDate;
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
        return isset($this->UnitDate[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UnitDate
     */
    public function offsetGet($offset)
    {
        return $this->UnitDate[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UnitDate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->UnitDate[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->UnitDate[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UnitDate Return the current element
     */
    public function current()
    {
        return current($this->UnitDate);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->UnitDate);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->UnitDate);
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
        reset($this->UnitDate);
    }

    /**
     * Countable implementation
     *
     * @return UnitDate Return count of elements
     */
    public function count()
    {
        return count($this->UnitDate);
    }
}
