<?php

namespace Gueststream\PMS\IQWare\API;

class UnitAvailabilityCalendar
{

    /**
     * @var \DateTime $CalendarDate
     */
    protected $CalendarDate = null;

    /**
     * @var boolean $AvailableForArrival
     */
    protected $AvailableForArrival = null;

    /**
     * @var boolean $AvailableForDeparture
     */
    protected $AvailableForDeparture = null;

    /**
     * @param \DateTime $CalendarDate
     * @param boolean $AvailableForArrival
     * @param boolean $AvailableForDeparture
     */
    public function __construct(\DateTime $CalendarDate, $AvailableForArrival, $AvailableForDeparture)
    {
        $this->CalendarDate = $CalendarDate->format(\DateTime::ATOM);
        $this->AvailableForArrival = $AvailableForArrival;
        $this->AvailableForDeparture = $AvailableForDeparture;
    }

    /**
     * @return \DateTime
     */
    public function getCalendarDate()
    {
        if ($this->CalendarDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->CalendarDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $CalendarDate
     * @return \Gueststream\PMS\IQWare\API\UnitAvailabilityCalendar
     */
    public function setCalendarDate(\DateTime $CalendarDate)
    {
        $this->CalendarDate = $CalendarDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailableForArrival()
    {
        return $this->AvailableForArrival;
    }

    /**
     * @param boolean $AvailableForArrival
     * @return \Gueststream\PMS\IQWare\API\UnitAvailabilityCalendar
     */
    public function setAvailableForArrival($AvailableForArrival)
    {
        $this->AvailableForArrival = $AvailableForArrival;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailableForDeparture()
    {
        return $this->AvailableForDeparture;
    }

    /**
     * @param boolean $AvailableForDeparture
     * @return \Gueststream\PMS\IQWare\API\UnitAvailabilityCalendar
     */
    public function setAvailableForDeparture($AvailableForDeparture)
    {
        $this->AvailableForDeparture = $AvailableForDeparture;
        return $this;
    }
}
