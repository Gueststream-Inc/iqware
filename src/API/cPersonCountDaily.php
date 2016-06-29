<?php

namespace Gueststream\PMS\IQWare\API;

class cPersonCountDaily
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var int $NumberOfGuests
     */
    protected $NumberOfGuests = null;

    /**
     * @var ArrayOfInt $ChildrenAges
     */
    protected $ChildrenAges = null;

    /**
     * @param \DateTime $Date
     * @param int $NumberOfGuests
     */
    public function __construct(\DateTime $Date, $NumberOfGuests)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        $this->NumberOfGuests = $NumberOfGuests;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        if ($this->Date == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Date);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Date
     * @return \Gueststream\PMS\IQWare\API\cPersonCountDaily
     */
    public function setDate(\DateTime $Date)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfGuests()
    {
        return $this->NumberOfGuests;
    }

    /**
     * @param int $NumberOfGuests
     * @return \Gueststream\PMS\IQWare\API\cPersonCountDaily
     */
    public function setNumberOfGuests($NumberOfGuests)
    {
        $this->NumberOfGuests = $NumberOfGuests;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getChildrenAges()
    {
        return $this->ChildrenAges;
    }

    /**
     * @param ArrayOfInt $ChildrenAges
     * @return \Gueststream\PMS\IQWare\API\cPersonCountDaily
     */
    public function setChildrenAges($ChildrenAges)
    {
        $this->ChildrenAges = $ChildrenAges;
        return $this;
    }
}
