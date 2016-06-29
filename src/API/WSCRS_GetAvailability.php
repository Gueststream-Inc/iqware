<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRS_GetAvailability
{

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @param \DateTime $StartDate
     */
    public function __construct(\DateTime $StartDate)
    {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\WSCRS_GetAvailability
     */
    public function setStartDate(\DateTime $StartDate)
    {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        return $this;
    }
}
