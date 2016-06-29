<?php

namespace Gueststream\PMS\IQWare\API;

class ValidateRoomRefusals
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var int $ID_RateCode
     */
    protected $ID_RateCode = null;

    /**
     * @var int $NbrGuest
     */
    protected $NbrGuest = null;

    /**
     * @var int $Cat1
     */
    protected $Cat1 = null;

    /**
     * @var int $Cat2
     */
    protected $Cat2 = null;

    /**
     * @var int $Cat3
     */
    protected $Cat3 = null;

    /**
     * @var int $Cat4
     */
    protected $Cat4 = null;

    /**
     * @var \DateTime $ReservationArrivalDate
     */
    protected $ReservationArrivalDate = null;

    /**
     * @var \DateTime $ReservationDepartureDate
     */
    protected $ReservationDepartureDate = null;

    /**
     * @var int $intID_SuiteConfiguration
     */
    protected $intID_SuiteConfiguration = null;

    /**
     * @param int $guid
     * @param int $ID_Room
     * @param int $ID_RateCode
     * @param int $NbrGuest
     * @param int $Cat1
     * @param int $Cat2
     * @param int $Cat3
     * @param int $Cat4
     * @param \DateTime $ReservationArrivalDate
     * @param \DateTime $ReservationDepartureDate
     * @param int $intID_SuiteConfiguration
     */
    public function __construct($guid, $ID_Room, $ID_RateCode, $NbrGuest, $Cat1, $Cat2, $Cat3, $Cat4, \DateTime $ReservationArrivalDate, \DateTime $ReservationDepartureDate, $intID_SuiteConfiguration)
    {
        $this->guid = $guid;
        $this->ID_Room = $ID_Room;
        $this->ID_RateCode = $ID_RateCode;
        $this->NbrGuest = $NbrGuest;
        $this->Cat1 = $Cat1;
        $this->Cat2 = $Cat2;
        $this->Cat3 = $Cat3;
        $this->Cat4 = $Cat4;
        $this->ReservationArrivalDate = $ReservationArrivalDate->format(\DateTime::ATOM);
        $this->ReservationDepartureDate = $ReservationDepartureDate->format(\DateTime::ATOM);
        $this->intID_SuiteConfiguration = $intID_SuiteConfiguration;
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
     * @return \Gueststream\PMS\IQWare\API\ValidateRoomRefusals
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Room()
    {
        return $this->ID_Room;
    }

    /**
     * @param int $ID_Room
     * @return \Gueststream\PMS\IQWare\API\ValidateRoomRefusals
     */
    public function setID_Room($ID_Room)
    {
        $this->ID_Room = $ID_Room;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateCode()
    {
        return $this->ID_RateCode;
    }

    /**
     * @param int $ID_RateCode
     * @return \Gueststream\PMS\IQWare\API\ValidateRoomRefusals
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbrGuest()
    {
        return $this->NbrGuest;
    }

    /**
     * @param int $NbrGuest
     * @return \Gueststream\PMS\IQWare\API\ValidateRoomRefusals
     */
    public function setNbrGuest($NbrGuest)
    {
        $this->NbrGuest = $NbrGuest;
        return $this;
    }

    /**
     * @return int
     */
    public function getCat1()
    {
        return $this->Cat1;
    }

    /**
     * @param int $Cat1
     * @return \Gueststream\PMS\IQWare\API\ValidateRoomRefusals
     */
    public function setCat1($Cat1)
    {
        $this->Cat1 = $Cat1;
        return $this;
    }

    /**
     * @return int
     */
    public function getCat2()
    {
        return $this->Cat2;
    }

    /**
     * @param int $Cat2
     * @return \Gueststream\PMS\IQWare\API\ValidateRoomRefusals
     */
    public function setCat2($Cat2)
    {
        $this->Cat2 = $Cat2;
        return $this;
    }

    /**
     * @return int
     */
    public function getCat3()
    {
        return $this->Cat3;
    }

    /**
     * @param int $Cat3
     * @return \Gueststream\PMS\IQWare\API\ValidateRoomRefusals
     */
    public function setCat3($Cat3)
    {
        $this->Cat3 = $Cat3;
        return $this;
    }

    /**
     * @return int
     */
    public function getCat4()
    {
        return $this->Cat4;
    }

    /**
     * @param int $Cat4
     * @return \Gueststream\PMS\IQWare\API\ValidateRoomRefusals
     */
    public function setCat4($Cat4)
    {
        $this->Cat4 = $Cat4;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReservationArrivalDate()
    {
        if ($this->ReservationArrivalDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ReservationArrivalDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ReservationArrivalDate
     * @return \Gueststream\PMS\IQWare\API\ValidateRoomRefusals
     */
    public function setReservationArrivalDate(\DateTime $ReservationArrivalDate)
    {
        $this->ReservationArrivalDate = $ReservationArrivalDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReservationDepartureDate()
    {
        if ($this->ReservationDepartureDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ReservationDepartureDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ReservationDepartureDate
     * @return \Gueststream\PMS\IQWare\API\ValidateRoomRefusals
     */
    public function setReservationDepartureDate(\DateTime $ReservationDepartureDate)
    {
        $this->ReservationDepartureDate = $ReservationDepartureDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getIntID_SuiteConfiguration()
    {
        return $this->intID_SuiteConfiguration;
    }

    /**
     * @param int $intID_SuiteConfiguration
     * @return \Gueststream\PMS\IQWare\API\ValidateRoomRefusals
     */
    public function setIntID_SuiteConfiguration($intID_SuiteConfiguration)
    {
        $this->intID_SuiteConfiguration = $intID_SuiteConfiguration;
        return $this;
    }
}
