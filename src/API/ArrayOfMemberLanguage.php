<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfMemberLanguage implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MemberLanguage[] $MemberLanguage
     */
    protected $MemberLanguage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MemberLanguage[]
     */
    public function getMemberLanguage()
    {
        return $this->MemberLanguage;
    }

    /**
     * @param MemberLanguage[] $MemberLanguage
     * @return \Gueststream\PMS\IQWare\API\ArrayOfMemberLanguage
     */
    public function setMemberLanguage(array $MemberLanguage = null)
    {
        $this->MemberLanguage = $MemberLanguage;
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
        return isset($this->MemberLanguage[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MemberLanguage
     */
    public function offsetGet($offset)
    {
        return $this->MemberLanguage[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MemberLanguage $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->MemberLanguage[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->MemberLanguage[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MemberLanguage Return the current element
     */
    public function current()
    {
        return current($this->MemberLanguage);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->MemberLanguage);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->MemberLanguage);
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
        reset($this->MemberLanguage);
    }

    /**
     * Countable implementation
     *
     * @return MemberLanguage Return count of elements
     */
    public function count()
    {
        return count($this->MemberLanguage);
    }
}
