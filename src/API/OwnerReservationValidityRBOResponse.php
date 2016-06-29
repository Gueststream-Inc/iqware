<?php

namespace Gueststream\PMS\IQWare\API;

class OwnerReservationValidityRBOResponse
{

    /**
     * @var OwnerReservationRBOValidity $Validity
     */
    protected $Validity = null;

    /**
     * @var RoomRestrictionStatus $RestrictionType
     */
    protected $RestrictionType = null;

    /**
     * @var int $RateYield_MinLengthValidity
     */
    protected $RateYield_MinLengthValidity = null;

    /**
     * @var int $RateCodeId
     */
    protected $RateCodeId = null;

    /**
     * @var int $RoomId
     */
    protected $RoomId = null;

    /**
     * @var string $RoomNo
     */
    protected $RoomNo = null;

    /**
     * @var int $RoomTypeId
     */
    protected $RoomTypeId = null;

    /**
     * @var string $RateCodeName
     */
    protected $RateCodeName = null;

    /**
     * @var string $RoomTypeName
     */
    protected $RoomTypeName = null;

    /**
     * @var string $RateCodeDescription
     */
    protected $RateCodeDescription = null;

    /**
     * @var string $RoomTypeDescription
     */
    protected $RoomTypeDescription = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var ArrayOfSBDSummary $StayBreakDownRBO
     */
    protected $StayBreakDownRBO = null;

    /**
     * @param OwnerReservationRBOValidity $Validity
     * @param RoomRestrictionStatus $RestrictionType
     * @param int $RateYield_MinLengthValidity
     * @param int $RateCodeId
     * @param int $RoomId
     * @param int $RoomTypeId
     */
    public function __construct($Validity, $RestrictionType, $RateYield_MinLengthValidity, $RateCodeId, $RoomId, $RoomTypeId)
    {
        $this->Validity = $Validity;
        $this->RestrictionType = $RestrictionType;
        $this->RateYield_MinLengthValidity = $RateYield_MinLengthValidity;
        $this->RateCodeId = $RateCodeId;
        $this->RoomId = $RoomId;
        $this->RoomTypeId = $RoomTypeId;
    }

    /**
     * @return OwnerReservationRBOValidity
     */
    public function getValidity()
    {
        return $this->Validity;
    }

    /**
     * @param OwnerReservationRBOValidity $Validity
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValidityRBOResponse
     */
    public function setValidity($Validity)
    {
        $this->Validity = $Validity;
        return $this;
    }

    /**
     * @return RoomRestrictionStatus
     */
    public function getRestrictionType()
    {
        return $this->RestrictionType;
    }

    /**
     * @param RoomRestrictionStatus $RestrictionType
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValidityRBOResponse
     */
    public function setRestrictionType($RestrictionType)
    {
        $this->RestrictionType = $RestrictionType;
        return $this;
    }

    /**
     * @return int
     */
    public function getRateYield_MinLengthValidity()
    {
        return $this->RateYield_MinLengthValidity;
    }

    /**
     * @param int $RateYield_MinLengthValidity
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValidityRBOResponse
     */
    public function setRateYield_MinLengthValidity($RateYield_MinLengthValidity)
    {
        $this->RateYield_MinLengthValidity = $RateYield_MinLengthValidity;
        return $this;
    }

    /**
     * @return int
     */
    public function getRateCodeId()
    {
        return $this->RateCodeId;
    }

    /**
     * @param int $RateCodeId
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValidityRBOResponse
     */
    public function setRateCodeId($RateCodeId)
    {
        $this->RateCodeId = $RateCodeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomId()
    {
        return $this->RoomId;
    }

    /**
     * @param int $RoomId
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValidityRBOResponse
     */
    public function setRoomId($RoomId)
    {
        $this->RoomId = $RoomId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomNo()
    {
        return $this->RoomNo;
    }

    /**
     * @param string $RoomNo
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValidityRBOResponse
     */
    public function setRoomNo($RoomNo)
    {
        $this->RoomNo = $RoomNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomTypeId()
    {
        return $this->RoomTypeId;
    }

    /**
     * @param int $RoomTypeId
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValidityRBOResponse
     */
    public function setRoomTypeId($RoomTypeId)
    {
        $this->RoomTypeId = $RoomTypeId;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValidityRBOResponse
     */
    public function setRateCodeName($RateCodeName)
    {
        $this->RateCodeName = $RateCodeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeName()
    {
        return $this->RoomTypeName;
    }

    /**
     * @param string $RoomTypeName
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValidityRBOResponse
     */
    public function setRoomTypeName($RoomTypeName)
    {
        $this->RoomTypeName = $RoomTypeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRateCodeDescription()
    {
        return $this->RateCodeDescription;
    }

    /**
     * @param string $RateCodeDescription
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValidityRBOResponse
     */
    public function setRateCodeDescription($RateCodeDescription)
    {
        $this->RateCodeDescription = $RateCodeDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeDescription()
    {
        return $this->RoomTypeDescription;
    }

    /**
     * @param string $RoomTypeDescription
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValidityRBOResponse
     */
    public function setRoomTypeDescription($RoomTypeDescription)
    {
        $this->RoomTypeDescription = $RoomTypeDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValidityRBOResponse
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return ArrayOfSBDSummary
     */
    public function getStayBreakDownRBO()
    {
        return $this->StayBreakDownRBO;
    }

    /**
     * @param ArrayOfSBDSummary $StayBreakDownRBO
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValidityRBOResponse
     */
    public function setStayBreakDownRBO($StayBreakDownRBO)
    {
        $this->StayBreakDownRBO = $StayBreakDownRBO;
        return $this;
    }
}
