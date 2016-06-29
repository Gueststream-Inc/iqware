<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfCTelephone implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var cTelephone[] $cTelephone
     */
    protected $cTelephone = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return cTelephone[]
     */
    public function getCTelephone()
    {
        return $this->cTelephone;
    }

    /**
     * @param cTelephone[] $cTelephone
     * @return \Gueststream\PMS\IQWare\API\ArrayOfCTelephone
     */
    public function setCTelephone(array $cTelephone = null)
    {
        $this->cTelephone = $cTelephone;
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
        return isset($this->cTelephone[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return cTelephone
     */
    public function offsetGet($offset)
    {
        return $this->cTelephone[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param cTelephone $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->cTelephone[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->cTelephone[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return cTelephone Return the current element
     */
    public function current()
    {
        return current($this->cTelephone);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->cTelephone);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->cTelephone);
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
        reset($this->cTelephone);
    }

    /**
     * Countable implementation
     *
     * @return cTelephone Return count of elements
     */
    public function count()
    {
        return count($this->cTelephone);
    }
}
