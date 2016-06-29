<?php

namespace Gueststream\PMS\IQWare\API;

class cGiftCertificate
{

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var string $PropertyEmail
     */
    protected $PropertyEmail = null;

    /**
     * @var int $DefaultRoomType
     */
    protected $DefaultRoomType = null;

    /**
     * @var int $GCRateCode
     */
    protected $GCRateCode = null;

    /**
     * @var int $IncentiveTrn
     */
    protected $IncentiveTrn = null;

    /**
     * @var ArrayOfCGiftCertificateIncentivePeriod $IncentiveList
     */
    protected $IncentiveList = null;

    /**
     * @param boolean $IsActive
     * @param int $DefaultRoomType
     * @param int $GCRateCode
     * @param int $IncentiveTrn
     */
    public function __construct($IsActive, $DefaultRoomType, $GCRateCode, $IncentiveTrn)
    {
        $this->IsActive = $IsActive;
        $this->DefaultRoomType = $DefaultRoomType;
        $this->GCRateCode = $GCRateCode;
        $this->IncentiveTrn = $IncentiveTrn;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * @param boolean $IsActive
     * @return \Gueststream\PMS\IQWare\API\cGiftCertificate
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;
        return $this;
    }

    /**
     * @return string
     */
    public function getPropertyEmail()
    {
        return $this->PropertyEmail;
    }

    /**
     * @param string $PropertyEmail
     * @return \Gueststream\PMS\IQWare\API\cGiftCertificate
     */
    public function setPropertyEmail($PropertyEmail)
    {
        $this->PropertyEmail = $PropertyEmail;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultRoomType()
    {
        return $this->DefaultRoomType;
    }

    /**
     * @param int $DefaultRoomType
     * @return \Gueststream\PMS\IQWare\API\cGiftCertificate
     */
    public function setDefaultRoomType($DefaultRoomType)
    {
        $this->DefaultRoomType = $DefaultRoomType;
        return $this;
    }

    /**
     * @return int
     */
    public function getGCRateCode()
    {
        return $this->GCRateCode;
    }

    /**
     * @param int $GCRateCode
     * @return \Gueststream\PMS\IQWare\API\cGiftCertificate
     */
    public function setGCRateCode($GCRateCode)
    {
        $this->GCRateCode = $GCRateCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getIncentiveTrn()
    {
        return $this->IncentiveTrn;
    }

    /**
     * @param int $IncentiveTrn
     * @return \Gueststream\PMS\IQWare\API\cGiftCertificate
     */
    public function setIncentiveTrn($IncentiveTrn)
    {
        $this->IncentiveTrn = $IncentiveTrn;
        return $this;
    }

    /**
     * @return ArrayOfCGiftCertificateIncentivePeriod
     */
    public function getIncentiveList()
    {
        return $this->IncentiveList;
    }

    /**
     * @param ArrayOfCGiftCertificateIncentivePeriod $IncentiveList
     * @return \Gueststream\PMS\IQWare\API\cGiftCertificate
     */
    public function setIncentiveList($IncentiveList)
    {
        $this->IncentiveList = $IncentiveList;
        return $this;
    }
}
