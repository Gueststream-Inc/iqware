<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfGroupValues implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GroupValues[] $GroupValues
     */
    protected $GroupValues = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GroupValues[]
     */
    public function getGroupValues()
    {
        return $this->GroupValues;
    }

    /**
     * @param GroupValues[] $GroupValues
     * @return \Gueststream\PMS\IQWare\API\ArrayOfGroupValues
     */
    public function setGroupValues(array $GroupValues = null)
    {
        $this->GroupValues = $GroupValues;
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
        return isset($this->GroupValues[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GroupValues
     */
    public function offsetGet($offset)
    {
        return $this->GroupValues[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GroupValues $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->GroupValues[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->GroupValues[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GroupValues Return the current element
     */
    public function current()
    {
        return current($this->GroupValues);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->GroupValues);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->GroupValues);
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
        reset($this->GroupValues);
    }

    /**
     * Countable implementation
     *
     * @return GroupValues Return count of elements
     */
    public function count()
    {
        return count($this->GroupValues);
    }
}
