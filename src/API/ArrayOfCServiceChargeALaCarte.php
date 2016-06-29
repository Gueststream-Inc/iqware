<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfCServiceChargeALaCarte implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var cServiceChargeALaCarte[] $cServiceChargeALaCarte
     */
    protected $cServiceChargeALaCarte = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return cServiceChargeALaCarte[]
     */
    public function getCServiceChargeALaCarte()
    {
        return $this->cServiceChargeALaCarte;
    }

    /**
     * @param cServiceChargeALaCarte[] $cServiceChargeALaCarte
     * @return \Gueststream\PMS\IQWare\API\ArrayOfCServiceChargeALaCarte
     */
    public function setCServiceChargeALaCarte(array $cServiceChargeALaCarte = null)
    {
        $this->cServiceChargeALaCarte = $cServiceChargeALaCarte;
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
        return isset($this->cServiceChargeALaCarte[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return cServiceChargeALaCarte
     */
    public function offsetGet($offset)
    {
        return $this->cServiceChargeALaCarte[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param cServiceChargeALaCarte $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->cServiceChargeALaCarte[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->cServiceChargeALaCarte[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return cServiceChargeALaCarte Return the current element
     */
    public function current()
    {
        return current($this->cServiceChargeALaCarte);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->cServiceChargeALaCarte);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->cServiceChargeALaCarte);
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
        reset($this->cServiceChargeALaCarte);
    }

    /**
     * Countable implementation
     *
     * @return cServiceChargeALaCarte Return count of elements
     */
    public function count()
    {
        return count($this->cServiceChargeALaCarte);
    }
}
