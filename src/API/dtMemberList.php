<?php

namespace Gueststream\PMS\IQWare\API;

class dtMemberList
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
     * @var string $PhoneNo
     */
    protected $PhoneNo = null;

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $CompanyNo
     */
    protected $CompanyNo = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @param string $AccountNo
     * @param string $FirstName
     * @param string $LastName
     * @param string $PhoneNo
     * @param string $Address1
     * @param string $City
     * @param string $CompanyNo
     * @param string $CompanyName
     */
    public function __construct($AccountNo, $FirstName, $LastName, $PhoneNo, $Address1, $City, $CompanyNo, $CompanyName)
    {
        $this->AccountNo = $AccountNo;
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->PhoneNo = $PhoneNo;
        $this->Address1 = $Address1;
        $this->City = $City;
        $this->CompanyNo = $CompanyNo;
        $this->CompanyName = $CompanyName;
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
     * @return \Gueststream\PMS\IQWare\API\dtMemberList
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
     * @return \Gueststream\PMS\IQWare\API\dtMemberList
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
     * @return \Gueststream\PMS\IQWare\API\dtMemberList
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
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
     * @return \Gueststream\PMS\IQWare\API\dtMemberList
     */
    public function setPhoneNo($PhoneNo)
    {
        $this->PhoneNo = $PhoneNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->Address1;
    }

    /**
     * @param string $Address1
     * @return \Gueststream\PMS\IQWare\API\dtMemberList
     */
    public function setAddress1($Address1)
    {
        $this->Address1 = $Address1;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return \Gueststream\PMS\IQWare\API\dtMemberList
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyNo()
    {
        return $this->CompanyNo;
    }

    /**
     * @param string $CompanyNo
     * @return \Gueststream\PMS\IQWare\API\dtMemberList
     */
    public function setCompanyNo($CompanyNo)
    {
        $this->CompanyNo = $CompanyNo;
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
     * @return \Gueststream\PMS\IQWare\API\dtMemberList
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
        return $this;
    }
}
