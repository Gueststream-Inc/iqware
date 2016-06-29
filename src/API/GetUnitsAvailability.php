<?php

namespace Gueststream\PMS\IQWare\API;

class GetUnitsAvailability
{

    /**
     * @var int $iGuid
     */
    protected $iGuid = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var boolean $ShowOnlyUnitsAvailable
     */
    protected $ShowOnlyUnitsAvailable = null;

    /**
     * @param int $iGuid
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     * @param boolean $ShowOnlyUnitsAvailable
     */
    public function __construct($iGuid, \DateTime $StartDate, \DateTime $EndDate, $ShowOnlyUnitsAvailable)
    {
        $this->iGuid = $iGuid;
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        $this->ShowOnlyUnitsAvailable = $ShowOnlyUnitsAvailable;
    }

    /**
     * @return int
     */
    public function getIGuid()
    {
        return $this->iGuid;
    }

    /**
     * @param int $iGuid
     * @return \Gueststream\PMS\IQWare\API\GetUnitsAvailability
     */
    public function setIGuid($iGuid)
    {
        $this->iGuid = $iGuid;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\GetUnitsAvailability
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
     * @return \Gueststream\PMS\IQWare\API\GetUnitsAvailability
     */
    public function setEndDate(\DateTime $EndDate)
    {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowOnlyUnitsAvailable()
    {
        return $this->ShowOnlyUnitsAvailable;
    }

    /**
     * @param boolean $ShowOnlyUnitsAvailable
     * @return \Gueststream\PMS\IQWare\API\GetUnitsAvailability
     */
    public function setShowOnlyUnitsAvailable($ShowOnlyUnitsAvailable)
    {
        $this->ShowOnlyUnitsAvailable = $ShowOnlyUnitsAvailable;
        return $this;
    }
}
