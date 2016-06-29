<?php

namespace Gueststream\PMS\IQWare\API;

class dtCompanyList
{

    /**
     * @var string $CompanyNo
     */
    protected $CompanyNo = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

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
     * @param string $CompanyNo
     * @param string $CompanyName
     * @param string $PhoneNo
     * @param string $Address1
     * @param string $City
     */
    public function __construct($CompanyNo, $CompanyName, $PhoneNo, $Address1, $City)
    {
        $this->CompanyNo = $CompanyNo;
        $this->CompanyName = $CompanyName;
        $this->PhoneNo = $PhoneNo;
        $this->Address1 = $Address1;
        $this->City = $City;
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
     * @return \Gueststream\PMS\IQWare\API\dtCompanyList
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
     * @return \Gueststream\PMS\IQWare\API\dtCompanyList
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
     * @return \Gueststream\PMS\IQWare\API\dtCompanyList
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
     * @return \Gueststream\PMS\IQWare\API\dtCompanyList
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
     * @return \Gueststream\PMS\IQWare\API\dtCompanyList
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }
}
