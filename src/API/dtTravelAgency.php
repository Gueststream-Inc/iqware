<?php

namespace Gueststream\PMS\IQWare\API;

class dtTravelAgency
{

    /**
     * @var string $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var string $IATANo
     */
    protected $IATANo = null;

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $PhoneNo
     */
    protected $PhoneNo = null;

    /**
     * @param string $AccountNo
     * @param string $IATANo
     * @param string $AccountName
     * @param string $Address1
     * @param string $City
     * @param string $PhoneNo
     */
    public function __construct($AccountNo, $IATANo, $AccountName, $Address1, $City, $PhoneNo)
    {
        $this->AccountNo = $AccountNo;
        $this->IATANo = $IATANo;
        $this->AccountName = $AccountName;
        $this->Address1 = $Address1;
        $this->City = $City;
        $this->PhoneNo = $PhoneNo;
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
     * @return \Gueststream\PMS\IQWare\API\dtTravelAgency
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getIATANo()
    {
        return $this->IATANo;
    }

    /**
     * @param string $IATANo
     * @return \Gueststream\PMS\IQWare\API\dtTravelAgency
     */
    public function setIATANo($IATANo)
    {
        $this->IATANo = $IATANo;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return \Gueststream\PMS\IQWare\API\dtTravelAgency
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;
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
     * @return \Gueststream\PMS\IQWare\API\dtTravelAgency
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
     * @return \Gueststream\PMS\IQWare\API\dtTravelAgency
     */
    public function setCity($City)
    {
        $this->City = $City;
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
     * @return \Gueststream\PMS\IQWare\API\dtTravelAgency
     */
    public function setPhoneNo($PhoneNo)
    {
        $this->PhoneNo = $PhoneNo;
        return $this;
    }
}
