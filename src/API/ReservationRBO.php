<?php

namespace Gueststream\PMS\IQWare\API;

class ReservationRBO
{

    /**
     * @var int $Resultcode
     */
    protected $Resultcode = null;

    /**
     * @var Reservation $ReservationInfo
     */
    protected $ReservationInfo = null;

    /**
     * @var ArrayOfDailyBreakdown $DailyBreakdownInfo
     */
    protected $DailyBreakdownInfo = null;

    /**
     * @var SummarySBD $SummarySBDInfo
     */
    protected $SummarySBDInfo = null;

    /**
     * @param int $Resultcode
     */
    public function __construct($Resultcode)
    {
        $this->Resultcode = $Resultcode;
    }

    /**
     * @return int
     */
    public function getResultcode()
    {
        return $this->Resultcode;
    }

    /**
     * @param int $Resultcode
     * @return \Gueststream\PMS\IQWare\API\ReservationRBO
     */
    public function setResultcode($Resultcode)
    {
        $this->Resultcode = $Resultcode;
        return $this;
    }

    /**
     * @return Reservation
     */
    public function getReservationInfo()
    {
        return $this->ReservationInfo;
    }

    /**
     * @param Reservation $ReservationInfo
     * @return \Gueststream\PMS\IQWare\API\ReservationRBO
     */
    public function setReservationInfo($ReservationInfo)
    {
        $this->ReservationInfo = $ReservationInfo;
        return $this;
    }

    /**
     * @return ArrayOfDailyBreakdown
     */
    public function getDailyBreakdownInfo()
    {
        return $this->DailyBreakdownInfo;
    }

    /**
     * @param ArrayOfDailyBreakdown $DailyBreakdownInfo
     * @return \Gueststream\PMS\IQWare\API\ReservationRBO
     */
    public function setDailyBreakdownInfo($DailyBreakdownInfo)
    {
        $this->DailyBreakdownInfo = $DailyBreakdownInfo;
        return $this;
    }

    /**
     * @return SummarySBD
     */
    public function getSummarySBDInfo()
    {
        return $this->SummarySBDInfo;
    }

    /**
     * @param SummarySBD $SummarySBDInfo
     * @return \Gueststream\PMS\IQWare\API\ReservationRBO
     */
    public function setSummarySBDInfo($SummarySBDInfo)
    {
        $this->SummarySBDInfo = $SummarySBDInfo;
        return $this;
    }
}
