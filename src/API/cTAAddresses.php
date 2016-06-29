<?php

namespace Gueststream\PMS\IQWare\API;

class cTAAddresses
{

    /**
     * @var cAddress $Profile
     */
    protected $Profile = null;

    /**
     * @var cAddress $BkgContact
     */
    protected $BkgContact = null;

    /**
     * @var cBankAddress $Billing
     */
    protected $Billing = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return cAddress
     */
    public function getProfile()
    {
        return $this->Profile;
    }

    /**
     * @param cAddress $Profile
     * @return \Gueststream\PMS\IQWare\API\cTAAddresses
     */
    public function setProfile($Profile)
    {
        $this->Profile = $Profile;
        return $this;
    }

    /**
     * @return cAddress
     */
    public function getBkgContact()
    {
        return $this->BkgContact;
    }

    /**
     * @param cAddress $BkgContact
     * @return \Gueststream\PMS\IQWare\API\cTAAddresses
     */
    public function setBkgContact($BkgContact)
    {
        $this->BkgContact = $BkgContact;
        return $this;
    }

    /**
     * @return cBankAddress
     */
    public function getBilling()
    {
        return $this->Billing;
    }

    /**
     * @param cBankAddress $Billing
     * @return \Gueststream\PMS\IQWare\API\cTAAddresses
     */
    public function setBilling($Billing)
    {
        $this->Billing = $Billing;
        return $this;
    }
}
