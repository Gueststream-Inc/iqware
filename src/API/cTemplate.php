<?php

namespace Gueststream\PMS\IQWare\API;

class cTemplate
{

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var int $ID_RateCode
     */
    protected $ID_RateCode = null;

    /**
     * @var float $ManuelRate
     */
    protected $ManuelRate = null;

    /**
     * @var int $ID_RateReason
     */
    protected $ID_RateReason = null;

    /**
     * @var ArrayOfInt $AttributesCode
     */
    protected $AttributesCode = null;

    /**
     * @var ArrayOfInt $LocalizationsCode
     */
    protected $LocalizationsCode = null;

    /**
     * @var ArrayOfInt $SpecialRequest
     */
    protected $SpecialRequest = null;

    /**
     * @var cAccount $Account
     */
    protected $Account = null;

    /**
     * @var cTmplProfile $Profile
     */
    protected $Profile = null;

    /**
     * @param int $ID_RoomType
     * @param int $ID_RateCode
     * @param float $ManuelRate
     * @param int $ID_RateReason
     */
    public function __construct($ID_RoomType, $ID_RateCode, $ManuelRate, $ID_RateReason)
    {
        $this->ID_RoomType = $ID_RoomType;
        $this->ID_RateCode = $ID_RateCode;
        $this->ManuelRate = $ManuelRate;
        $this->ID_RateReason = $ID_RateReason;
    }

    /**
     * @return int
     */
    public function getID_RoomType()
    {
        return $this->ID_RoomType;
    }

    /**
     * @param int $ID_RoomType
     * @return \Gueststream\PMS\IQWare\API\cTemplate
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
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
     * @return \Gueststream\PMS\IQWare\API\cTemplate
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getManuelRate()
    {
        return $this->ManuelRate;
    }

    /**
     * @param float $ManuelRate
     * @return \Gueststream\PMS\IQWare\API\cTemplate
     */
    public function setManuelRate($ManuelRate)
    {
        $this->ManuelRate = $ManuelRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateReason()
    {
        return $this->ID_RateReason;
    }

    /**
     * @param int $ID_RateReason
     * @return \Gueststream\PMS\IQWare\API\cTemplate
     */
    public function setID_RateReason($ID_RateReason)
    {
        $this->ID_RateReason = $ID_RateReason;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getAttributesCode()
    {
        return $this->AttributesCode;
    }

    /**
     * @param ArrayOfInt $AttributesCode
     * @return \Gueststream\PMS\IQWare\API\cTemplate
     */
    public function setAttributesCode($AttributesCode)
    {
        $this->AttributesCode = $AttributesCode;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getLocalizationsCode()
    {
        return $this->LocalizationsCode;
    }

    /**
     * @param ArrayOfInt $LocalizationsCode
     * @return \Gueststream\PMS\IQWare\API\cTemplate
     */
    public function setLocalizationsCode($LocalizationsCode)
    {
        $this->LocalizationsCode = $LocalizationsCode;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSpecialRequest()
    {
        return $this->SpecialRequest;
    }

    /**
     * @param ArrayOfInt $SpecialRequest
     * @return \Gueststream\PMS\IQWare\API\cTemplate
     */
    public function setSpecialRequest($SpecialRequest)
    {
        $this->SpecialRequest = $SpecialRequest;
        return $this;
    }

    /**
     * @return cAccount
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param cAccount $Account
     * @return \Gueststream\PMS\IQWare\API\cTemplate
     */
    public function setAccount($Account)
    {
        $this->Account = $Account;
        return $this;
    }

    /**
     * @return cTmplProfile
     */
    public function getProfile()
    {
        return $this->Profile;
    }

    /**
     * @param cTmplProfile $Profile
     * @return \Gueststream\PMS\IQWare\API\cTemplate
     */
    public function setProfile($Profile)
    {
        $this->Profile = $Profile;
        return $this;
    }
}
