<?php

namespace Gueststream\PMS\IQWare\API;

class cCompany
{

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var cCpyProfile $Profile
     */
    protected $Profile = null;

    /**
     * @var cCpyAccount $Account
     */
    protected $Account = null;

    /**
     * @var cAddresses $Addresses
     */
    protected $Addresses = null;

    /**
     * @var cTemplate $Template
     */
    protected $Template = null;

    /**
     * @param int $AccountNo
     */
    public function __construct($AccountNo)
    {
        $this->AccountNo = $AccountNo;
    }

    /**
     * @return int
     */
    public function getAccountNo()
    {
        return $this->AccountNo;
    }

    /**
     * @param int $AccountNo
     * @return \Gueststream\PMS\IQWare\API\cCompany
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return cCpyProfile
     */
    public function getProfile()
    {
        return $this->Profile;
    }

    /**
     * @param cCpyProfile $Profile
     * @return \Gueststream\PMS\IQWare\API\cCompany
     */
    public function setProfile($Profile)
    {
        $this->Profile = $Profile;
        return $this;
    }

    /**
     * @return cCpyAccount
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param cCpyAccount $Account
     * @return \Gueststream\PMS\IQWare\API\cCompany
     */
    public function setAccount($Account)
    {
        $this->Account = $Account;
        return $this;
    }

    /**
     * @return cAddresses
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }

    /**
     * @param cAddresses $Addresses
     * @return \Gueststream\PMS\IQWare\API\cCompany
     */
    public function setAddresses($Addresses)
    {
        $this->Addresses = $Addresses;
        return $this;
    }

    /**
     * @return cTemplate
     */
    public function getTemplate()
    {
        return $this->Template;
    }

    /**
     * @param cTemplate $Template
     * @return \Gueststream\PMS\IQWare\API\cCompany
     */
    public function setTemplate($Template)
    {
        $this->Template = $Template;
        return $this;
    }
}
