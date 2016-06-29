<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfOaccTelephone implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OaccTelephone[] $oaccTelephone
     */
    protected $oaccTelephone = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OaccTelephone[]
     */
    public function getOaccTelephone()
    {
        return $this->oaccTelephone;
    }

    /**
     * @param OaccTelephone[] $oaccTelephone
     *
*@return \Gueststream\PMS\IQWare\API\ArrayOfOaccTelephone
     */
    public function setOaccTelephone(array $oaccTelephone = null)
    {
        $this->oaccTelephone = $oaccTelephone;
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
        return isset($this->oaccTelephone[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     *
*@return OaccTelephone
     */
    public function offsetGet($offset)
    {
        return $this->oaccTelephone[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OaccTelephone $value The value to set
     *
*@return void
     */
    public function offsetSet($offset, $value)
    {
        $this->oaccTelephone[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->oaccTelephone[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OaccTelephone Return the current element
     */
    public function current()
    {
        return current($this->oaccTelephone);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->oaccTelephone);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->oaccTelephone);
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
        reset($this->oaccTelephone);
    }

    /**
     * Countable implementation
     *
     * @return OaccTelephone Return count of elements
     */
    public function count()
    {
        return count($this->oaccTelephone);
    }
}
