<?php

namespace Gueststream\PMS\IQWare\API;

class ArrivalAndDepartureTime
{

    /**
     * @var string $CheckInTimeFrom
     */
    protected $CheckInTimeFrom = null;

    /**
     * @var string $CheckInTimeTo
     */
    protected $CheckInTimeTo = null;

    /**
     * @var string $CheckOutTimeFrom
     */
    protected $CheckOutTimeFrom = null;

    /**
     * @var string $CheckOutTimeTo
     */
    protected $CheckOutTimeTo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCheckInTimeFrom()
    {
        return $this->CheckInTimeFrom;
    }

    /**
     * @param string $CheckInTimeFrom
     * @return \Gueststream\PMS\IQWare\API\ArrivalAndDepartureTime
     */
    public function setCheckInTimeFrom($CheckInTimeFrom)
    {
        $this->CheckInTimeFrom = $CheckInTimeFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckInTimeTo()
    {
        return $this->CheckInTimeTo;
    }

    /**
     * @param string $CheckInTimeTo
     * @return \Gueststream\PMS\IQWare\API\ArrivalAndDepartureTime
     */
    public function setCheckInTimeTo($CheckInTimeTo)
    {
        $this->CheckInTimeTo = $CheckInTimeTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckOutTimeFrom()
    {
        return $this->CheckOutTimeFrom;
    }

    /**
     * @param string $CheckOutTimeFrom
     * @return \Gueststream\PMS\IQWare\API\ArrivalAndDepartureTime
     */
    public function setCheckOutTimeFrom($CheckOutTimeFrom)
    {
        $this->CheckOutTimeFrom = $CheckOutTimeFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckOutTimeTo()
    {
        return $this->CheckOutTimeTo;
    }

    /**
     * @param string $CheckOutTimeTo
     * @return \Gueststream\PMS\IQWare\API\ArrivalAndDepartureTime
     */
    public function setCheckOutTimeTo($CheckOutTimeTo)
    {
        $this->CheckOutTimeTo = $CheckOutTimeTo;
        return $this;
    }
}
