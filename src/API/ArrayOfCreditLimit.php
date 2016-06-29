<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfCreditLimit implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CreditLimit[] $CreditLimit
     */
    protected $CreditLimit = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CreditLimit[]
     */
    public function getCreditLimit()
    {
        return $this->CreditLimit;
    }

    /**
     * @param CreditLimit[] $CreditLimit
     * @return \Gueststream\PMS\IQWare\API\ArrayOfCreditLimit
     */
    public function setCreditLimit(array $CreditLimit = null)
    {
        $this->CreditLimit = $CreditLimit;
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
        return isset($this->CreditLimit[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CreditLimit
     */
    public function offsetGet($offset)
    {
        return $this->CreditLimit[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CreditLimit $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->CreditLimit[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->CreditLimit[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CreditLimit Return the current element
     */
    public function current()
    {
        return current($this->CreditLimit);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->CreditLimit);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->CreditLimit);
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
        reset($this->CreditLimit);
    }

    /**
     * Countable implementation
     *
     * @return CreditLimit Return count of elements
     */
    public function count()
    {
        return count($this->CreditLimit);
    }
}
