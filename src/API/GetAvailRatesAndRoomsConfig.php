<?php

namespace Gueststream\PMS\IQWare\API;

class GetAvailRatesAndRoomsConfig
{

    /**
     * @var int $iGUID
     */
    protected $iGUID = null;

    /**
     * @var \DateTime $dtArrivalDate
     */
    protected $dtArrivalDate = null;

    /**
     * @var \DateTime $dtDepartureDate
     */
    protected $dtDepartureDate = null;

    /**
     * @var int $intGuestCount
     */
    protected $intGuestCount = null;

    /**
     * @var string $strXmlChildrens
     */
    protected $strXmlChildrens = null;

    /**
     * @var string $ListOfAccomodationTypes
     */
    protected $ListOfAccomodationTypes = null;

    /**
     * @var string $strRateCodes
     */
    protected $strRateCodes = null;

    /**
     * @var string $strRoomTypes
     */
    protected $strRoomTypes = null;

    /**
     * @param int $iGUID
     * @param \DateTime $dtArrivalDate
     * @param \DateTime $dtDepartureDate
     * @param int $intGuestCount
     * @param string $strXmlChildrens
     * @param string $ListOfAccomodationTypes
     * @param string $strRateCodes
     * @param string $strRoomTypes
     */
    public function __construct($iGUID, \DateTime $dtArrivalDate, \DateTime $dtDepartureDate, $intGuestCount, $strXmlChildrens, $ListOfAccomodationTypes, $strRateCodes, $strRoomTypes)
    {
        $this->iGUID = $iGUID;
        $this->dtArrivalDate = $dtArrivalDate->format(\DateTime::ATOM);
        $this->dtDepartureDate = $dtDepartureDate->format(\DateTime::ATOM);
        $this->intGuestCount = $intGuestCount;
        $this->strXmlChildrens = $strXmlChildrens;
        $this->ListOfAccomodationTypes = $ListOfAccomodationTypes;
        $this->strRateCodes = $strRateCodes;
        $this->strRoomTypes = $strRoomTypes;
    }

    /**
     * @return int
     */
    public function getIGUID()
    {
        return $this->iGUID;
    }

    /**
     * @param int $iGUID
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomsConfig
     */
    public function setIGUID($iGUID)
    {
        $this->iGUID = $iGUID;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDtArrivalDate()
    {
        if ($this->dtArrivalDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dtArrivalDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dtArrivalDate
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomsConfig
     */
    public function setDtArrivalDate(\DateTime $dtArrivalDate)
    {
        $this->dtArrivalDate = $dtArrivalDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDtDepartureDate()
    {
        if ($this->dtDepartureDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dtDepartureDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dtDepartureDate
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomsConfig
     */
    public function setDtDepartureDate(\DateTime $dtDepartureDate)
    {
        $this->dtDepartureDate = $dtDepartureDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getIntGuestCount()
    {
        return $this->intGuestCount;
    }

    /**
     * @param int $intGuestCount
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomsConfig
     */
    public function setIntGuestCount($intGuestCount)
    {
        $this->intGuestCount = $intGuestCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrXmlChildrens()
    {
        return $this->strXmlChildrens;
    }

    /**
     * @param string $strXmlChildrens
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomsConfig
     */
    public function setStrXmlChildrens($strXmlChildrens)
    {
        $this->strXmlChildrens = $strXmlChildrens;
        return $this;
    }

    /**
     * @return string
     */
    public function getListOfAccomodationTypes()
    {
        return $this->ListOfAccomodationTypes;
    }

    /**
     * @param string $ListOfAccomodationTypes
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomsConfig
     */
    public function setListOfAccomodationTypes($ListOfAccomodationTypes)
    {
        $this->ListOfAccomodationTypes = $ListOfAccomodationTypes;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRateCodes()
    {
        return $this->strRateCodes;
    }

    /**
     * @param string $strRateCodes
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomsConfig
     */
    public function setStrRateCodes($strRateCodes)
    {
        $this->strRateCodes = $strRateCodes;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRoomTypes()
    {
        return $this->strRoomTypes;
    }

    /**
     * @param string $strRoomTypes
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomsConfig
     */
    public function setStrRoomTypes($strRoomTypes)
    {
        $this->strRoomTypes = $strRoomTypes;
        return $this;
    }
}
