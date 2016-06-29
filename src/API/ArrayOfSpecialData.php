<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfSpecialData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SpecialData[] $SpecialData
     */
    protected $SpecialData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SpecialData[]
     */
    public function getSpecialData()
    {
        return $this->SpecialData;
    }

    /**
     * @param SpecialData[] $SpecialData
     * @return \Gueststream\PMS\IQWare\API\ArrayOfSpecialData
     */
    public function setSpecialData(array $SpecialData = null)
    {
        $this->SpecialData = $SpecialData;
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
        return isset($this->SpecialData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SpecialData
     */
    public function offsetGet($offset)
    {
        return $this->SpecialData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SpecialData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->SpecialData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->SpecialData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SpecialData Return the current element
     */
    public function current()
    {
        return current($this->SpecialData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->SpecialData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->SpecialData);
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
        reset($this->SpecialData);
    }

    /**
     * Countable implementation
     *
     * @return SpecialData Return count of elements
     */
    public function count()
    {
        return count($this->SpecialData);
    }
}
