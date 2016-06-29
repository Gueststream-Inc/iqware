<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfNationality implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Nationality[] $Nationality
     */
    protected $Nationality = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Nationality[]
     */
    public function getNationality()
    {
        return $this->Nationality;
    }

    /**
     * @param Nationality[] $Nationality
     * @return \Gueststream\PMS\IQWare\API\ArrayOfNationality
     */
    public function setNationality(array $Nationality = null)
    {
        $this->Nationality = $Nationality;
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
        return isset($this->Nationality[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Nationality
     */
    public function offsetGet($offset)
    {
        return $this->Nationality[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Nationality $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->Nationality[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->Nationality[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Nationality Return the current element
     */
    public function current()
    {
        return current($this->Nationality);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->Nationality);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->Nationality);
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
        reset($this->Nationality);
    }

    /**
     * Countable implementation
     *
     * @return Nationality Return count of elements
     */
    public function count()
    {
        return count($this->Nationality);
    }
}
