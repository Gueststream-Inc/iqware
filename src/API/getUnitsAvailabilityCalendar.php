<?php

namespace Gueststream\PMS\IQWare\API;

class getUnitsAvailabilityCalendar
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
     * @var string $UnitIds
     */
    protected $UnitIds = null;

    /**
     * @param int $iGuid
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     * @param string $UnitIds
     */
    public function __construct($iGuid, \DateTime $StartDate, \DateTime $EndDate, $UnitIds)
    {
        $this->iGuid = $iGuid;
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        $this->UnitIds = $UnitIds;
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
     * @return \Gueststream\PMS\IQWare\API\getUnitsAvailabilityCalendar
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
     * @return \Gueststream\PMS\IQWare\API\getUnitsAvailabilityCalendar
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
     * @return \Gueststream\PMS\IQWare\API\getUnitsAvailabilityCalendar
     */
    public function setEndDate(\DateTime $EndDate)
    {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitIds()
    {
        return $this->UnitIds;
    }

    /**
     * @param string $UnitIds
     * @return \Gueststream\PMS\IQWare\API\getUnitsAvailabilityCalendar
     */
    public function setUnitIds($UnitIds)
    {
        $this->UnitIds = $UnitIds;
        return $this;
    }
}
