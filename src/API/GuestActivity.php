<?php

namespace Gueststream\PMS\IQWare\API;

class GuestActivity
{

    /**
     * @var int $ID_Account
     */
    protected $ID_Account = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var int $OOE
     */
    protected $OOE = null;

    /**
     * @var int $OOR
     */
    protected $OOR = null;

    /**
     * @var int $OOO
     */
    protected $OOO = null;

    /**
     * @var \DateTime $AccountDate
     */
    protected $AccountDate = null;

    /**
     * @var float $TotRoomRev
     */
    protected $TotRoomRev = null;

    /**
     * @var float $TotComm
     */
    protected $TotComm = null;

    /**
     * @var float $TotTax1
     */
    protected $TotTax1 = null;

    /**
     * @var float $TotTax2
     */
    protected $TotTax2 = null;

    /**
     * @var float $TotTax3
     */
    protected $TotTax3 = null;

    /**
     * @var float $TotOtherCB
     */
    protected $TotOtherCB = null;

    /**
     * @var float $TotReferal
     */
    protected $TotReferal = null;

    /**
     * @var float $TotCommCC
     */
    protected $TotCommCC = null;

    /**
     * @var float $DailyPct
     */
    protected $DailyPct = null;

    /**
     * @var int $BookingType
     */
    protected $BookingType = null;

    /**
     * @var int $SeqNo
     */
    protected $SeqNo = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @param int $ID_Account
     * @param int $AccountNo
     * @param int $OOE
     * @param int $OOR
     * @param int $OOO
     * @param \DateTime $AccountDate
     * @param float $TotRoomRev
     * @param float $TotComm
     * @param float $TotTax1
     * @param float $TotTax2
     * @param float $TotTax3
     * @param float $TotOtherCB
     * @param float $TotReferal
     * @param float $TotCommCC
     * @param float $DailyPct
     * @param int $BookingType
     * @param int $SeqNo
     * @param \DateTime $ArrivalDate
     * @param \DateTime $DepartureDate
     */
    public function __construct($ID_Account, $AccountNo, $OOE, $OOR, $OOO, \DateTime $AccountDate, $TotRoomRev, $TotComm, $TotTax1, $TotTax2, $TotTax3, $TotOtherCB, $TotReferal, $TotCommCC, $DailyPct, $BookingType, $SeqNo, \DateTime $ArrivalDate, \DateTime $DepartureDate)
    {
        $this->ID_Account = $ID_Account;
        $this->AccountNo = $AccountNo;
        $this->OOE = $OOE;
        $this->OOR = $OOR;
        $this->OOO = $OOO;
        $this->AccountDate = $AccountDate->format(\DateTime::ATOM);
        $this->TotRoomRev = $TotRoomRev;
        $this->TotComm = $TotComm;
        $this->TotTax1 = $TotTax1;
        $this->TotTax2 = $TotTax2;
        $this->TotTax3 = $TotTax3;
        $this->TotOtherCB = $TotOtherCB;
        $this->TotReferal = $TotReferal;
        $this->TotCommCC = $TotCommCC;
        $this->DailyPct = $DailyPct;
        $this->BookingType = $BookingType;
        $this->SeqNo = $SeqNo;
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getID_Account()
    {
        return $this->ID_Account;
    }

    /**
     * @param int $ID_Account
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setID_Account($ID_Account)
    {
        $this->ID_Account = $ID_Account;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountNo()
    {
        return $this->AccountNo;
    }

    /**
     * @param int $AccountNo
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getOOE()
    {
        return $this->OOE;
    }

    /**
     * @param int $OOE
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setOOE($OOE)
    {
        $this->OOE = $OOE;
        return $this;
    }

    /**
     * @return int
     */
    public function getOOR()
    {
        return $this->OOR;
    }

    /**
     * @param int $OOR
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setOOR($OOR)
    {
        $this->OOR = $OOR;
        return $this;
    }

    /**
     * @return int
     */
    public function getOOO()
    {
        return $this->OOO;
    }

    /**
     * @param int $OOO
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setOOO($OOO)
    {
        $this->OOO = $OOO;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAccountDate()
    {
        if ($this->AccountDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->AccountDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $AccountDate
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setAccountDate(\DateTime $AccountDate)
    {
        $this->AccountDate = $AccountDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return float
     */
    public function getTotRoomRev()
    {
        return $this->TotRoomRev;
    }

    /**
     * @param float $TotRoomRev
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setTotRoomRev($TotRoomRev)
    {
        $this->TotRoomRev = $TotRoomRev;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotComm()
    {
        return $this->TotComm;
    }

    /**
     * @param float $TotComm
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setTotComm($TotComm)
    {
        $this->TotComm = $TotComm;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotTax1()
    {
        return $this->TotTax1;
    }

    /**
     * @param float $TotTax1
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setTotTax1($TotTax1)
    {
        $this->TotTax1 = $TotTax1;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotTax2()
    {
        return $this->TotTax2;
    }

    /**
     * @param float $TotTax2
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setTotTax2($TotTax2)
    {
        $this->TotTax2 = $TotTax2;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotTax3()
    {
        return $this->TotTax3;
    }

    /**
     * @param float $TotTax3
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setTotTax3($TotTax3)
    {
        $this->TotTax3 = $TotTax3;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotOtherCB()
    {
        return $this->TotOtherCB;
    }

    /**
     * @param float $TotOtherCB
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setTotOtherCB($TotOtherCB)
    {
        $this->TotOtherCB = $TotOtherCB;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotReferal()
    {
        return $this->TotReferal;
    }

    /**
     * @param float $TotReferal
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setTotReferal($TotReferal)
    {
        $this->TotReferal = $TotReferal;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotCommCC()
    {
        return $this->TotCommCC;
    }

    /**
     * @param float $TotCommCC
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setTotCommCC($TotCommCC)
    {
        $this->TotCommCC = $TotCommCC;
        return $this;
    }

    /**
     * @return float
     */
    public function getDailyPct()
    {
        return $this->DailyPct;
    }

    /**
     * @param float $DailyPct
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setDailyPct($DailyPct)
    {
        $this->DailyPct = $DailyPct;
        return $this;
    }

    /**
     * @return int
     */
    public function getBookingType()
    {
        return $this->BookingType;
    }

    /**
     * @param int $BookingType
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setBookingType($BookingType)
    {
        $this->BookingType = $BookingType;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setSeqNo($SeqNo)
    {
        $this->SeqNo = $SeqNo;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        if ($this->ArrivalDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ArrivalDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ArrivalDate
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setArrivalDate(\DateTime $ArrivalDate)
    {
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        if ($this->DepartureDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DepartureDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DepartureDate
     * @return \Gueststream\PMS\IQWare\API\GuestActivity
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        return $this;
    }
}
