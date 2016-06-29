<?php

namespace Gueststream\PMS\IQWare\API;

class dtFitMemberList
{

    /**
     * @var string $MemberNo
     */
    protected $MemberNo = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $FitNo
     */
    protected $FitNo = null;

    /**
     * @var string $FitName
     */
    protected $FitName = null;

    /**
     * @var string $CardNumber
     */
    protected $CardNumber = null;

    /**
     * @var boolean $IsDefault
     */
    protected $IsDefault = null;

    /**
     * @param string $MemberNo
     * @param string $LastName
     * @param string $FirstName
     * @param string $FitNo
     * @param string $FitName
     * @param string $CardNumber
     * @param boolean $IsDefault
     */
    public function __construct($MemberNo, $LastName, $FirstName, $FitNo, $FitName, $CardNumber, $IsDefault)
    {
        $this->MemberNo = $MemberNo;
        $this->LastName = $LastName;
        $this->FirstName = $FirstName;
        $this->FitNo = $FitNo;
        $this->FitName = $FitName;
        $this->CardNumber = $CardNumber;
        $this->IsDefault = $IsDefault;
    }

    /**
     * @return string
     */
    public function getMemberNo()
    {
        return $this->MemberNo;
    }

    /**
     * @param string $MemberNo
     * @return \Gueststream\PMS\IQWare\API\dtFitMemberList
     */
    public function setMemberNo($MemberNo)
    {
        $this->MemberNo = $MemberNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Gueststream\PMS\IQWare\API\dtFitMemberList
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Gueststream\PMS\IQWare\API\dtFitMemberList
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFitNo()
    {
        return $this->FitNo;
    }

    /**
     * @param string $FitNo
     * @return \Gueststream\PMS\IQWare\API\dtFitMemberList
     */
    public function setFitNo($FitNo)
    {
        $this->FitNo = $FitNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getFitName()
    {
        return $this->FitName;
    }

    /**
     * @param string $FitName
     * @return \Gueststream\PMS\IQWare\API\dtFitMemberList
     */
    public function setFitName($FitName)
    {
        $this->FitName = $FitName;
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
     * @return \Gueststream\PMS\IQWare\API\dtFitMemberList
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
     * @return \Gueststream\PMS\IQWare\API\dtFitMemberList
     */
    public function setIsDefault($IsDefault)
    {
        $this->IsDefault = $IsDefault;
        return $this;
    }
}
