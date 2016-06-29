<?php

namespace Gueststream\PMS\IQWare\API;

class UnitDate
{

    /**
     * @var \DateTime $ADate
     */
    protected $ADate = null;

    /**
     * @var ArrayOfUnitAvailable $Units
     */
    protected $Units = null;

    /**
     * @param \DateTime $ADate
     */
    public function __construct(\DateTime $ADate)
    {
        $this->ADate = $ADate->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getADate()
    {
        if ($this->ADate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ADate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ADate
     * @return \Gueststream\PMS\IQWare\API\UnitDate
     */
    public function setADate(\DateTime $ADate)
    {
        $this->ADate = $ADate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return ArrayOfUnitAvailable
     */
    public function getUnits()
    {
        return $this->Units;
    }

    /**
     * @param ArrayOfUnitAvailable $Units
     * @return \Gueststream\PMS\IQWare\API\UnitDate
     */
    public function setUnits($Units)
    {
        $this->Units = $Units;
        return $this;
    }
}
