<?php

namespace Gueststream\PMS\IQWare\API;

class RoomCalendarBreakdown
{

    /**
     * @var \DateTime $CalendarDate
     */
    protected $CalendarDate = null;

    /**
     * @var boolean $Available
     */
    protected $Available = null;

    /**
     * @param \DateTime $CalendarDate
     * @param boolean $Available
     */
    public function __construct(\DateTime $CalendarDate, $Available)
    {
        $this->CalendarDate = $CalendarDate->format(\DateTime::ATOM);
        $this->Available = $Available;
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
     * @return \Gueststream\PMS\IQWare\API\RoomCalendarBreakdown
     */
    public function setCalendarDate(\DateTime $CalendarDate)
    {
        $this->CalendarDate = $CalendarDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailable()
    {
        return $this->Available;
    }

    /**
     * @param boolean $Available
     * @return \Gueststream\PMS\IQWare\API\RoomCalendarBreakdown
     */
    public function setAvailable($Available)
    {
        $this->Available = $Available;
        return $this;
    }
}
