<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfActivityUnitAvail implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ActivityUnitAvail[] $ActivityUnitAvail
     */
    protected $ActivityUnitAvail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ActivityUnitAvail[]
     */
    public function getActivityUnitAvail()
    {
        return $this->ActivityUnitAvail;
    }

    /**
     * @param ActivityUnitAvail[] $ActivityUnitAvail
     * @return \Gueststream\PMS\IQWare\API\ArrayOfActivityUnitAvail
     */
    public function setActivityUnitAvail(array $ActivityUnitAvail = null)
    {
        $this->ActivityUnitAvail = $ActivityUnitAvail;
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
        return isset($this->ActivityUnitAvail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ActivityUnitAvail
     */
    public function offsetGet($offset)
    {
        return $this->ActivityUnitAvail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ActivityUnitAvail $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->ActivityUnitAvail[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->ActivityUnitAvail[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ActivityUnitAvail Return the current element
     */
    public function current()
    {
        return current($this->ActivityUnitAvail);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ActivityUnitAvail);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ActivityUnitAvail);
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
        reset($this->ActivityUnitAvail);
    }

    /**
     * Countable implementation
     *
     * @return ActivityUnitAvail Return count of elements
     */
    public function count()
    {
        return count($this->ActivityUnitAvail);
    }
}
