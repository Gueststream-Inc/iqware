<?php

namespace Gueststream\PMS\IQWare\API;

class UnitReservation
{

    /**
     * @var int $ID_Guest
     */
    protected $ID_Guest = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var TBookingCondoType $BookingCondoType
     */
    protected $BookingCondoType = null;

    /**
     * @var \DateTime $SystemCreationDate
     */
    protected $SystemCreationDate = null;

    /**
     * @var float $GrossRevenue
     */
    protected $GrossRevenue = null;

    /**
     * @var string $RateCodeName
     */
    protected $RateCodeName = null;

    /**
     * @param int $ID_Guest
     * @param \DateTime $ArrivalDate
     * @param \DateTime $DepartureDate
     * @param TBookingCondoType $BookingCondoType
     * @param \DateTime $SystemCreationDate
     * @param float $GrossRevenue
     */
    public function __construct($ID_Guest, \DateTime $ArrivalDate, \DateTime $DepartureDate, $BookingCondoType, \DateTime $SystemCreationDate, $GrossRevenue)
    {
        $this->ID_Guest = $ID_Guest;
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        $this->BookingCondoType = $BookingCondoType;
        $this->SystemCreationDate = $SystemCreationDate->format(\DateTime::ATOM);
        $this->GrossRevenue = $GrossRevenue;
    }

    /**
     * @return int
     */
    public function getID_Guest()
    {
        return $this->ID_Guest;
    }

    /**
     * @param int $ID_Guest
     * @return \Gueststream\PMS\IQWare\API\UnitReservation
     */
    public function setID_Guest($ID_Guest)
    {
        $this->ID_Guest = $ID_Guest;
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
     * @return \Gueststream\PMS\IQWare\API\UnitReservation
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
     * @return \Gueststream\PMS\IQWare\API\UnitReservation
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return TBookingCondoType
     */
    public function getBookingCondoType()
    {
        return $this->BookingCondoType;
    }

    /**
     * @param TBookingCondoType $BookingCondoType
     * @return \Gueststream\PMS\IQWare\API\UnitReservation
     */
    public function setBookingCondoType($BookingCondoType)
    {
        $this->BookingCondoType = $BookingCondoType;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSystemCreationDate()
    {
        if ($this->SystemCreationDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->SystemCreationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $SystemCreationDate
     * @return \Gueststream\PMS\IQWare\API\UnitReservation
     */
    public function setSystemCreationDate(\DateTime $SystemCreationDate)
    {
        $this->SystemCreationDate = $SystemCreationDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return float
     */
    public function getGrossRevenue()
    {
        return $this->GrossRevenue;
    }

    /**
     * @param float $GrossRevenue
     * @return \Gueststream\PMS\IQWare\API\UnitReservation
     */
    public function setGrossRevenue($GrossRevenue)
    {
        $this->GrossRevenue = $GrossRevenue;
        return $this;
    }

    /**
     * @return string
     */
    public function getRateCodeName()
    {
        return $this->RateCodeName;
    }

    /**
     * @param string $RateCodeName
     * @return \Gueststream\PMS\IQWare\API\UnitReservation
     */
    public function setRateCodeName($RateCodeName)
    {
        $this->RateCodeName = $RateCodeName;
        return $this;
    }
}
