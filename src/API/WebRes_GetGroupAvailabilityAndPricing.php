<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetGroupAvailabilityAndPricing
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var int $GuestCount
     */
    protected $GuestCount = null;

    /**
     * @var string $Childrens
     */
    protected $Childrens = null;

    /**
     * @var int $RoomQty
     */
    protected $RoomQty = null;

    /**
     * @var string $strListOfRoomTypes
     */
    protected $strListOfRoomTypes = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var string $GrpID
     */
    protected $GrpID = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var TGroupBlocType $BlocType
     */
    protected $BlocType = null;

    /**
     * @var TGroupBlocQtyType $BlocQtyType
     */
    protected $BlocQtyType = null;

    /**
     * @var IAB2BMode $BackToBackMode
     */
    protected $BackToBackMode = null;

    /**
     * @param int $guid
     * @param int $GuestCount
     * @param string $Childrens
     * @param int $RoomQty
     * @param string $strListOfRoomTypes
     * @param string $LanguageCode
     * @param string $GrpID
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     * @param TGroupBlocType $BlocType
     * @param TGroupBlocQtyType $BlocQtyType
     * @param IAB2BMode $BackToBackMode
     */
    public function __construct($guid, $GuestCount, $Childrens, $RoomQty, $strListOfRoomTypes, $LanguageCode, $GrpID, \DateTime $StartDate, \DateTime $EndDate, $BlocType, $BlocQtyType, $BackToBackMode)
    {
        $this->guid = $guid;
        $this->GuestCount = $GuestCount;
        $this->Childrens = $Childrens;
        $this->RoomQty = $RoomQty;
        $this->strListOfRoomTypes = $strListOfRoomTypes;
        $this->LanguageCode = $LanguageCode;
        $this->GrpID = $GrpID;
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        $this->BlocType = $BlocType;
        $this->BlocQtyType = $BlocQtyType;
        $this->BackToBackMode = $BackToBackMode;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupAvailabilityAndPricing
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupAvailabilityAndPricing
     */
    public function setGuestCount($GuestCount)
    {
        $this->GuestCount = $GuestCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getChildrens()
    {
        return $this->Childrens;
    }

    /**
     * @param string $Childrens
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupAvailabilityAndPricing
     */
    public function setChildrens($Childrens)
    {
        $this->Childrens = $Childrens;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomQty()
    {
        return $this->RoomQty;
    }

    /**
     * @param int $RoomQty
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupAvailabilityAndPricing
     */
    public function setRoomQty($RoomQty)
    {
        $this->RoomQty = $RoomQty;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrListOfRoomTypes()
    {
        return $this->strListOfRoomTypes;
    }

    /**
     * @param string $strListOfRoomTypes
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupAvailabilityAndPricing
     */
    public function setStrListOfRoomTypes($strListOfRoomTypes)
    {
        $this->strListOfRoomTypes = $strListOfRoomTypes;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }

    /**
     * @param string $LanguageCode
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupAvailabilityAndPricing
     */
    public function setLanguageCode($LanguageCode)
    {
        $this->LanguageCode = $LanguageCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getGrpID()
    {
        return $this->GrpID;
    }

    /**
     * @param string $GrpID
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupAvailabilityAndPricing
     */
    public function setGrpID($GrpID)
    {
        $this->GrpID = $GrpID;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        if ($this->StartDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StartDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartDate
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupAvailabilityAndPricing
     */
    public function setStartDate(\DateTime $StartDate)
    {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        if ($this->EndDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndDate
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupAvailabilityAndPricing
     */
    public function setEndDate(\DateTime $EndDate)
    {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return TGroupBlocType
     */
    public function getBlocType()
    {
        return $this->BlocType;
    }

    /**
     * @param TGroupBlocType $BlocType
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupAvailabilityAndPricing
     */
    public function setBlocType($BlocType)
    {
        $this->BlocType = $BlocType;
        return $this;
    }

    /**
     * @return TGroupBlocQtyType
     */
    public function getBlocQtyType()
    {
        return $this->BlocQtyType;
    }

    /**
     * @param TGroupBlocQtyType $BlocQtyType
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupAvailabilityAndPricing
     */
    public function setBlocQtyType($BlocQtyType)
    {
        $this->BlocQtyType = $BlocQtyType;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupAvailabilityAndPricing
     */
    public function setBackToBackMode($BackToBackMode)
    {
        $this->BackToBackMode = $BackToBackMode;
        return $this;
    }
}
