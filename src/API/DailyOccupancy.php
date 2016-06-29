<?php

namespace Gueststream\PMS\IQWare\API;

class DailyOccupancy
{

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Unit
     */
    protected $Unit = null;

    /**
     * @var \DateTime $Arrival
     */
    protected $Arrival = null;

    /**
     * @var \DateTime $Departure
     */
    protected $Departure = null;

    /**
     * @var int $ResNo
     */
    protected $ResNo = null;

    /**
     * @param \DateTime $Arrival
     * @param \DateTime $Departure
     * @param int $ResNo
     */
    public function __construct(\DateTime $Arrival, \DateTime $Departure, $ResNo)
    {
        $this->Arrival = $Arrival->format(\DateTime::ATOM);
        $this->Departure = $Departure->format(\DateTime::ATOM);
        $this->ResNo = $ResNo;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Gueststream\PMS\IQWare\API\DailyOccupancy
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Gueststream\PMS\IQWare\API\DailyOccupancy
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
        return $this->Unit;
    }

    /**
     * @param string $Unit
     * @return \Gueststream\PMS\IQWare\API\DailyOccupancy
     */
    public function setUnit($Unit)
    {
        $this->Unit = $Unit;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrival()
    {
        if ($this->Arrival == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Arrival);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Arrival
     * @return \Gueststream\PMS\IQWare\API\DailyOccupancy
     */
    public function setArrival(\DateTime $Arrival)
    {
        $this->Arrival = $Arrival->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeparture()
    {
        if ($this->Departure == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Departure);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Departure
     * @return \Gueststream\PMS\IQWare\API\DailyOccupancy
     */
    public function setDeparture(\DateTime $Departure)
    {
        $this->Departure = $Departure->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getResNo()
    {
        return $this->ResNo;
    }

    /**
     * @param int $ResNo
     * @return \Gueststream\PMS\IQWare\API\DailyOccupancy
     */
    public function setResNo($ResNo)
    {
        $this->ResNo = $ResNo;
        return $this;
    }
}
