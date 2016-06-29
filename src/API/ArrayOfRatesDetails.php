<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfRatesDetails implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RatesDetails[] $RatesDetails
     */
    protected $RatesDetails = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RatesDetails[]
     */
    public function getRatesDetails()
    {
        return $this->RatesDetails;
    }

    /**
     * @param RatesDetails[] $RatesDetails
     * @return \Gueststream\PMS\IQWare\API\ArrayOfRatesDetails
     */
    public function setRatesDetails(array $RatesDetails = null)
    {
        $this->RatesDetails = $RatesDetails;
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
        return isset($this->RatesDetails[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RatesDetails
     */
    public function offsetGet($offset)
    {
        return $this->RatesDetails[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RatesDetails $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->RatesDetails[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->RatesDetails[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RatesDetails Return the current element
     */
    public function current()
    {
        return current($this->RatesDetails);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->RatesDetails);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->RatesDetails);
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
        reset($this->RatesDetails);
    }

    /**
     * Countable implementation
     *
     * @return RatesDetails Return count of elements
     */
    public function count()
    {
        return count($this->RatesDetails);
    }
}
