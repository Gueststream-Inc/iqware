<?php

namespace Gueststream\PMS\IQWare\API;

class ArrivalAndDepartureTimeSeason
{

    /**
     * @var int $SeqNo
     */
    protected $SeqNo = null;

    /**
     * @var int $CheckInSeasonFrom_Day
     */
    protected $CheckInSeasonFrom_Day = null;

    /**
     * @var int $CheckInSeasonFrom_Month
     */
    protected $CheckInSeasonFrom_Month = null;

    /**
     * @var int $CheckOutSeasonFrom_Day
     */
    protected $CheckOutSeasonFrom_Day = null;

    /**
     * @var int $CheckOutSeasonFrom_Month
     */
    protected $CheckOutSeasonFrom_Month = null;

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

    /**
     * @param int $SeqNo
     * @param int $CheckInSeasonFrom_Day
     * @param int $CheckInSeasonFrom_Month
     * @param int $CheckOutSeasonFrom_Day
     * @param int $CheckOutSeasonFrom_Month
     */
    public function __construct($SeqNo, $CheckInSeasonFrom_Day, $CheckInSeasonFrom_Month, $CheckOutSeasonFrom_Day, $CheckOutSeasonFrom_Month)
    {
        $this->SeqNo = $SeqNo;
        $this->CheckInSeasonFrom_Day = $CheckInSeasonFrom_Day;
        $this->CheckInSeasonFrom_Month = $CheckInSeasonFrom_Month;
        $this->CheckOutSeasonFrom_Day = $CheckOutSeasonFrom_Day;
        $this->CheckOutSeasonFrom_Month = $CheckOutSeasonFrom_Month;
    }

    /**
     * @return int
     */
    public function getSeqNo()
    {
        return $this->SeqNo;
    }

    /**
     * @param int $SeqNo
     * @return \Gueststream\PMS\IQWare\API\ArrivalAndDepartureTimeSeason
     */
    public function setSeqNo($SeqNo)
    {
        $this->SeqNo = $SeqNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getCheckInSeasonFrom_Day()
    {
        return $this->CheckInSeasonFrom_Day;
    }

    /**
     * @param int $CheckInSeasonFrom_Day
     * @return \Gueststream\PMS\IQWare\API\ArrivalAndDepartureTimeSeason
     */
    public function setCheckInSeasonFrom_Day($CheckInSeasonFrom_Day)
    {
        $this->CheckInSeasonFrom_Day = $CheckInSeasonFrom_Day;
        return $this;
    }

    /**
     * @return int
     */
    public function getCheckInSeasonFrom_Month()
    {
        return $this->CheckInSeasonFrom_Month;
    }

    /**
     * @param int $CheckInSeasonFrom_Month
     * @return \Gueststream\PMS\IQWare\API\ArrivalAndDepartureTimeSeason
     */
    public function setCheckInSeasonFrom_Month($CheckInSeasonFrom_Month)
    {
        $this->CheckInSeasonFrom_Month = $CheckInSeasonFrom_Month;
        return $this;
    }

    /**
     * @return int
     */
    public function getCheckOutSeasonFrom_Day()
    {
        return $this->CheckOutSeasonFrom_Day;
    }

    /**
     * @param int $CheckOutSeasonFrom_Day
     * @return \Gueststream\PMS\IQWare\API\ArrivalAndDepartureTimeSeason
     */
    public function setCheckOutSeasonFrom_Day($CheckOutSeasonFrom_Day)
    {
        $this->CheckOutSeasonFrom_Day = $CheckOutSeasonFrom_Day;
        return $this;
    }

    /**
     * @return int
     */
    public function getCheckOutSeasonFrom_Month()
    {
        return $this->CheckOutSeasonFrom_Month;
    }

    /**
     * @param int $CheckOutSeasonFrom_Month
     * @return \Gueststream\PMS\IQWare\API\ArrivalAndDepartureTimeSeason
     */
    public function setCheckOutSeasonFrom_Month($CheckOutSeasonFrom_Month)
    {
        $this->CheckOutSeasonFrom_Month = $CheckOutSeasonFrom_Month;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\ArrivalAndDepartureTimeSeason
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
     * @return \Gueststream\PMS\IQWare\API\ArrivalAndDepartureTimeSeason
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
     * @return \Gueststream\PMS\IQWare\API\ArrivalAndDepartureTimeSeason
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
     * @return \Gueststream\PMS\IQWare\API\ArrivalAndDepartureTimeSeason
     */
    public function setCheckOutTimeTo($CheckOutTimeTo)
    {
        $this->CheckOutTimeTo = $CheckOutTimeTo;
        return $this;
    }
}
