<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRS_GetNewAvailability
{

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var boolean $IsSuite
     */
    protected $IsSuite = null;

    /**
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     * @param boolean $IsSuite
     */
    public function __construct(\DateTime $StartDate, \DateTime $EndDate, $IsSuite)
    {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        $this->IsSuite = $IsSuite;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        if ($this->StartDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StartDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartDate
     * @return \Gueststream\PMS\IQWare\API\WSCRS_GetNewAvailability
     */
    public function setStartDate(\DateTime $StartDate)
    {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        if ($this->EndDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndDate
     * @return \Gueststream\PMS\IQWare\API\WSCRS_GetNewAvailability
     */
    public function setEndDate(\DateTime $EndDate)
    {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSuite()
    {
        return $this->IsSuite;
    }

    /**
     * @param boolean $IsSuite
     * @return \Gueststream\PMS\IQWare\API\WSCRS_GetNewAvailability
     */
    public function setIsSuite($IsSuite)
    {
        $this->IsSuite = $IsSuite;
        return $this;
    }
}
