<?php

namespace Gueststream\PMS\IQWare\API;

class PMSResaSearch
{

    /**
     * @var string $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $PhoneNo
     */
    protected $PhoneNo = null;

    /**
     * @var string $ClubMemberCardNo
     */
    protected $ClubMemberCardNo = null;

    /**
     * @var \DateTime $ArrivalDateMin
     */
    protected $ArrivalDateMin = null;

    /**
     * @var \DateTime $ArrivalDateMax
     */
    protected $ArrivalDateMax = null;

    /**
     * @var TSearchRigidity $SearchRigidity
     */
    protected $SearchRigidity = null;

    /**
     * @param string $AccountNo
     * @param string $FirstName
     * @param string $LastName
     * @param string $CompanyName
     * @param string $PhoneNo
     * @param string $ClubMemberCardNo
     * @param \DateTime $ArrivalDateMin
     * @param \DateTime $ArrivalDateMax
     * @param TSearchRigidity $SearchRigidity
     */
    public function __construct($AccountNo, $FirstName, $LastName, $CompanyName, $PhoneNo, $ClubMemberCardNo, \DateTime $ArrivalDateMin, \DateTime $ArrivalDateMax, $SearchRigidity)
    {
        $this->AccountNo = $AccountNo;
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->CompanyName = $CompanyName;
        $this->PhoneNo = $PhoneNo;
        $this->ClubMemberCardNo = $ClubMemberCardNo;
        $this->ArrivalDateMin = $ArrivalDateMin->format(\DateTime::ATOM);
        $this->ArrivalDateMax = $ArrivalDateMax->format(\DateTime::ATOM);
        $this->SearchRigidity = $SearchRigidity;
    }

    /**
     * @return string
     */
    public function getAccountNo()
    {
        return $this->AccountNo;
    }

    /**
     * @param string $AccountNo
     * @return \Gueststream\PMS\IQWare\API\PMSResaSearch
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
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
     * @return \Gueststream\PMS\IQWare\API\PMSResaSearch
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
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
     * @return \Gueststream\PMS\IQWare\API\PMSResaSearch
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \Gueststream\PMS\IQWare\API\PMSResaSearch
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNo()
    {
        return $this->PhoneNo;
    }

    /**
     * @param string $PhoneNo
     * @return \Gueststream\PMS\IQWare\API\PMSResaSearch
     */
    public function setPhoneNo($PhoneNo)
    {
        $this->PhoneNo = $PhoneNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getClubMemberCardNo()
    {
        return $this->ClubMemberCardNo;
    }

    /**
     * @param string $ClubMemberCardNo
     * @return \Gueststream\PMS\IQWare\API\PMSResaSearch
     */
    public function setClubMemberCardNo($ClubMemberCardNo)
    {
        $this->ClubMemberCardNo = $ClubMemberCardNo;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDateMin()
    {
        if ($this->ArrivalDateMin == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ArrivalDateMin);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ArrivalDateMin
     * @return \Gueststream\PMS\IQWare\API\PMSResaSearch
     */
    public function setArrivalDateMin(\DateTime $ArrivalDateMin)
    {
        $this->ArrivalDateMin = $ArrivalDateMin->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDateMax()
    {
        if ($this->ArrivalDateMax == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ArrivalDateMax);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ArrivalDateMax
     * @return \Gueststream\PMS\IQWare\API\PMSResaSearch
     */
    public function setArrivalDateMax(\DateTime $ArrivalDateMax)
    {
        $this->ArrivalDateMax = $ArrivalDateMax->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return TSearchRigidity
     */
    public function getSearchRigidity()
    {
        return $this->SearchRigidity;
    }

    /**
     * @param TSearchRigidity $SearchRigidity
     * @return \Gueststream\PMS\IQWare\API\PMSResaSearch
     */
    public function setSearchRigidity($SearchRigidity)
    {
        $this->SearchRigidity = $SearchRigidity;
        return $this;
    }
}
