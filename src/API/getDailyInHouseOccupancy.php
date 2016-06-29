<?php

namespace Gueststream\PMS\IQWare\API;

class getDailyInHouseOccupancy
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var \DateTime $atDate
     */
    protected $atDate = null;

    /**
     * @param int $guid
     * @param \DateTime $atDate
     */
    public function __construct($guid, \DateTime $atDate)
    {
        $this->guid = $guid;
        $this->atDate = $atDate->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param int $guid
     * @return \Gueststream\PMS\IQWare\API\getDailyInHouseOccupancy
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAtDate()
    {
        if ($this->atDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->atDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $atDate
     * @return \Gueststream\PMS\IQWare\API\getDailyInHouseOccupancy
     */
    public function setAtDate(\DateTime $atDate)
    {
        $this->atDate = $atDate->format(\DateTime::ATOM);
        return $this;
    }
}
