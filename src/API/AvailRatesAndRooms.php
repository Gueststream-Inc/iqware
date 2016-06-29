<?php

namespace Gueststream\PMS\IQWare\API;

class AvailRatesAndRooms
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var string $strLang
     */
    protected $strLang = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var int $AccomodationType
     */
    protected $AccomodationType = null;

    /**
     * @var int $RoomQuantity
     */
    protected $RoomQuantity = null;

    /**
     * @var int $GuestCount
     */
    protected $GuestCount = null;

    /**
     * @var string $Attributes
     */
    protected $Attributes = null;

    /**
     * @var string $Localizations
     */
    protected $Localizations = null;

    /**
     * @var string $ListOfRoomTypes
     */
    protected $ListOfRoomTypes = null;

    /**
     * @var string $ListOfRateCodes
     */
    protected $ListOfRateCodes = null;

    /**
     * @var string $ChidrenBreakDown
     */
    protected $ChidrenBreakDown = null;

    /**
     * @var IAB2BMode $BackToBackMode
     */
    protected $BackToBackMode = null;

    /**
     * @param int $intGUID
     * @param string $strLang
     * @param \DateTime $ArrivalDate
     * @param \DateTime $DepartureDate
     * @param int $AccomodationType
     * @param int $RoomQuantity
     * @param int $GuestCount
     * @param string $Attributes
     * @param string $Localizations
     * @param string $ListOfRoomTypes
     * @param string $ListOfRateCodes
     * @param string $ChidrenBreakDown
     * @param IAB2BMode $BackToBackMode
     */
    public function __construct($intGUID, $strLang, \DateTime $ArrivalDate, \DateTime $DepartureDate, $AccomodationType, $RoomQuantity, $GuestCount, $Attributes, $Localizations, $ListOfRoomTypes, $ListOfRateCodes, $ChidrenBreakDown, $BackToBackMode)
    {
        $this->intGUID = $intGUID;
        $this->strLang = $strLang;
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        $this->AccomodationType = $AccomodationType;
        $this->RoomQuantity = $RoomQuantity;
        $this->GuestCount = $GuestCount;
        $this->Attributes = $Attributes;
        $this->Localizations = $Localizations;
        $this->ListOfRoomTypes = $ListOfRoomTypes;
        $this->ListOfRateCodes = $ListOfRateCodes;
        $this->ChidrenBreakDown = $ChidrenBreakDown;
        $this->BackToBackMode = $BackToBackMode;
    }

    /**
     * @return int
     */
    public function getIntGUID()
    {
        return $this->intGUID;
    }

    /**
     * @param int $intGUID
     * @return \Gueststream\PMS\IQWare\API\AvailRatesAndRooms
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrLang()
    {
        return $this->strLang;
    }

    /**
     * @param string $strLang
     * @return \Gueststream\PMS\IQWare\API\AvailRatesAndRooms
     */
    public function setStrLang($strLang)
    {
        $this->strLang = $strLang;
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
     * @return \Gueststream\PMS\IQWare\API\AvailRatesAndRooms
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
     * @return \Gueststream\PMS\IQWare\API\AvailRatesAndRooms
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getAccomodationType()
    {
        return $this->AccomodationType;
    }

    /**
     * @param int $AccomodationType
     * @return \Gueststream\PMS\IQWare\API\AvailRatesAndRooms
     */
    public function setAccomodationType($AccomodationType)
    {
        $this->AccomodationType = $AccomodationType;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomQuantity()
    {
        return $this->RoomQuantity;
    }

    /**
     * @param int $RoomQuantity
     * @return \Gueststream\PMS\IQWare\API\AvailRatesAndRooms
     */
    public function setRoomQuantity($RoomQuantity)
    {
        $this->RoomQuantity = $RoomQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getGuestCount()
    {
        return $this->GuestCount;
    }

    /**
     * @param int $GuestCount
     * @return \Gueststream\PMS\IQWare\API\AvailRatesAndRooms
     */
    public function setGuestCount($GuestCount)
    {
        $this->GuestCount = $GuestCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }

    /**
     * @param string $Attributes
     * @return \Gueststream\PMS\IQWare\API\AvailRatesAndRooms
     */
    public function setAttributes($Attributes)
    {
        $this->Attributes = $Attributes;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocalizations()
    {
        return $this->Localizations;
    }

    /**
     * @param string $Localizations
     * @return \Gueststream\PMS\IQWare\API\AvailRatesAndRooms
     */
    public function setLocalizations($Localizations)
    {
        $this->Localizations = $Localizations;
        return $this;
    }

    /**
     * @return string
     */
    public function getListOfRoomTypes()
    {
        return $this->ListOfRoomTypes;
    }

    /**
     * @param string $ListOfRoomTypes
     * @return \Gueststream\PMS\IQWare\API\AvailRatesAndRooms
     */
    public function setListOfRoomTypes($ListOfRoomTypes)
    {
        $this->ListOfRoomTypes = $ListOfRoomTypes;
        return $this;
    }

    /**
     * @return string
     */
    public function getListOfRateCodes()
    {
        return $this->ListOfRateCodes;
    }

    /**
     * @param string $ListOfRateCodes
     * @return \Gueststream\PMS\IQWare\API\AvailRatesAndRooms
     */
    public function setListOfRateCodes($ListOfRateCodes)
    {
        $this->ListOfRateCodes = $ListOfRateCodes;
        return $this;
    }

    /**
     * @return string
     */
    public function getChidrenBreakDown()
    {
        return $this->ChidrenBreakDown;
    }

    /**
     * @param string $ChidrenBreakDown
     * @return \Gueststream\PMS\IQWare\API\AvailRatesAndRooms
     */
    public function setChidrenBreakDown($ChidrenBreakDown)
    {
        $this->ChidrenBreakDown = $ChidrenBreakDown;
        return $this;
    }

    /**
     * @return IAB2BMode
     */
    public function getBackToBackMode()
    {
        return $this->BackToBackMode;
    }

    /**
     * @param IAB2BMode $BackToBackMode
     * @return \Gueststream\PMS\IQWare\API\AvailRatesAndRooms
     */
    public function setBackToBackMode($BackToBackMode)
    {
        $this->BackToBackMode = $BackToBackMode;
        return $this;
    }
}
