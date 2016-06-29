<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfAvailabilityOverview implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AvailabilityOverview[] $AvailabilityOverview
     */
    protected $AvailabilityOverview = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityOverview[]
     */
    public function getAvailabilityOverview()
    {
        return $this->AvailabilityOverview;
    }

    /**
     * @param AvailabilityOverview[] $AvailabilityOverview
     * @return \Gueststream\PMS\IQWare\API\ArrayOfAvailabilityOverview
     */
    public function setAvailabilityOverview(array $AvailabilityOverview = null)
    {
        $this->AvailabilityOverview = $AvailabilityOverview;
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
        return isset($this->AvailabilityOverview[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AvailabilityOverview
     */
    public function offsetGet($offset)
    {
        return $this->AvailabilityOverview[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AvailabilityOverview $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->AvailabilityOverview[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->AvailabilityOverview[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AvailabilityOverview Return the current element
     */
    public function current()
    {
        return current($this->AvailabilityOverview);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->AvailabilityOverview);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->AvailabilityOverview);
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
        reset($this->AvailabilityOverview);
    }

    /**
     * Countable implementation
     *
     * @return AvailabilityOverview Return count of elements
     */
    public function count()
    {
        return count($this->AvailabilityOverview);
    }
}
