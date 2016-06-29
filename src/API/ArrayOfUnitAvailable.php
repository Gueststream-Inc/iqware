<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfUnitAvailable implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UnitAvailable[] $UnitAvailable
     */
    protected $UnitAvailable = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UnitAvailable[]
     */
    public function getUnitAvailable()
    {
        return $this->UnitAvailable;
    }

    /**
     * @param UnitAvailable[] $UnitAvailable
     * @return \Gueststream\PMS\IQWare\API\ArrayOfUnitAvailable
     */
    public function setUnitAvailable(array $UnitAvailable = null)
    {
        $this->UnitAvailable = $UnitAvailable;
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
        return isset($this->UnitAvailable[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UnitAvailable
     */
    public function offsetGet($offset)
    {
        return $this->UnitAvailable[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UnitAvailable $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->UnitAvailable[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->UnitAvailable[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UnitAvailable Return the current element
     */
    public function current()
    {
        return current($this->UnitAvailable);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->UnitAvailable);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->UnitAvailable);
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
        reset($this->UnitAvailable);
    }

    /**
     * Countable implementation
     *
     * @return UnitAvailable Return count of elements
     */
    public function count()
    {
        return count($this->UnitAvailable);
    }
}
