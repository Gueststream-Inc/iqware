<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfSpecialOffers implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SpecialOffers[] $SpecialOffers
     */
    protected $SpecialOffers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SpecialOffers[]
     */
    public function getSpecialOffers()
    {
        return $this->SpecialOffers;
    }

    /**
     * @param SpecialOffers[] $SpecialOffers
     * @return \Gueststream\PMS\IQWare\API\ArrayOfSpecialOffers
     */
    public function setSpecialOffers(array $SpecialOffers = null)
    {
        $this->SpecialOffers = $SpecialOffers;
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
        return isset($this->SpecialOffers[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SpecialOffers
     */
    public function offsetGet($offset)
    {
        return $this->SpecialOffers[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SpecialOffers $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->SpecialOffers[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->SpecialOffers[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SpecialOffers Return the current element
     */
    public function current()
    {
        return current($this->SpecialOffers);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->SpecialOffers);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->SpecialOffers);
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
        reset($this->SpecialOffers);
    }

    /**
     * Countable implementation
     *
     * @return SpecialOffers Return count of elements
     */
    public function count()
    {
        return count($this->SpecialOffers);
    }
}
