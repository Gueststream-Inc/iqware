<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfCreditCardTypes implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CreditCardTypes[] $CreditCardTypes
     */
    protected $CreditCardTypes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CreditCardTypes[]
     */
    public function getCreditCardTypes()
    {
        return $this->CreditCardTypes;
    }

    /**
     * @param CreditCardTypes[] $CreditCardTypes
     * @return \Gueststream\PMS\IQWare\API\ArrayOfCreditCardTypes
     */
    public function setCreditCardTypes(array $CreditCardTypes = null)
    {
        $this->CreditCardTypes = $CreditCardTypes;
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
        return isset($this->CreditCardTypes[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CreditCardTypes
     */
    public function offsetGet($offset)
    {
        return $this->CreditCardTypes[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CreditCardTypes $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->CreditCardTypes[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->CreditCardTypes[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CreditCardTypes Return the current element
     */
    public function current()
    {
        return current($this->CreditCardTypes);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->CreditCardTypes);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->CreditCardTypes);
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
        reset($this->CreditCardTypes);
    }

    /**
     * Countable implementation
     *
     * @return CreditCardTypes Return count of elements
     */
    public function count()
    {
        return count($this->CreditCardTypes);
    }
}
