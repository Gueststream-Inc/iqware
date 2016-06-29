<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfSBDSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SBDSummary[] $SBDSummary
     */
    protected $SBDSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SBDSummary[]
     */
    public function getSBDSummary()
    {
        return $this->SBDSummary;
    }

    /**
     * @param SBDSummary[] $SBDSummary
     * @return \Gueststream\PMS\IQWare\API\ArrayOfSBDSummary
     */
    public function setSBDSummary(array $SBDSummary = null)
    {
        $this->SBDSummary = $SBDSummary;
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
        return isset($this->SBDSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SBDSummary
     */
    public function offsetGet($offset)
    {
        return $this->SBDSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SBDSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->SBDSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->SBDSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SBDSummary Return the current element
     */
    public function current()
    {
        return current($this->SBDSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->SBDSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->SBDSummary);
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
        reset($this->SBDSummary);
    }

    /**
     * Countable implementation
     *
     * @return SBDSummary Return count of elements
     */
    public function count()
    {
        return count($this->SBDSummary);
    }
}
