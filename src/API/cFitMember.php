<?php

namespace Gueststream\PMS\IQWare\API;

class cFitMember
{

    /**
     * @var int $FitNo
     */
    protected $FitNo = null;

    /**
     * @var string $CardNumber
     */
    protected $CardNumber = null;

    /**
     * @var boolean $IsDefault
     */
    protected $IsDefault = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @param int $FitNo
     * @param boolean $IsDefault
     * @param boolean $IsActive
     */
    public function __construct($FitNo, $IsDefault, $IsActive)
    {
        $this->FitNo = $FitNo;
        $this->IsDefault = $IsDefault;
        $this->IsActive = $IsActive;
    }

    /**
     * @return int
     */
    public function getFitNo()
    {
        return $this->FitNo;
    }

    /**
     * @param int $FitNo
     * @return \Gueststream\PMS\IQWare\API\cFitMember
     */
    public function setFitNo($FitNo)
    {
        $this->FitNo = $FitNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }

    /**
     * @param string $CardNumber
     * @return \Gueststream\PMS\IQWare\API\cFitMember
     */
    public function setCardNumber($CardNumber)
    {
        $this->CardNumber = $CardNumber;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDefault()
    {
        return $this->IsDefault;
    }

    /**
     * @param boolean $IsDefault
     * @return \Gueststream\PMS\IQWare\API\cFitMember
     */
    public function setIsDefault($IsDefault)
    {
        $this->IsDefault = $IsDefault;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\cFitMember
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;
        return $this;
    }
}
