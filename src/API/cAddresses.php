<?php

namespace Gueststream\PMS\IQWare\API;

class cAddresses
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
     * @var cAddress $Billing
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
     * @return \Gueststream\PMS\IQWare\API\cAddresses
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
     * @return \Gueststream\PMS\IQWare\API\cAddresses
     */
    public function setBkgContact($BkgContact)
    {
        $this->BkgContact = $BkgContact;
        return $this;
    }

    /**
     * @return cAddress
     */
    public function getBilling()
    {
        return $this->Billing;
    }

    /**
     * @param cAddress $Billing
     * @return \Gueststream\PMS\IQWare\API\cAddresses
     */
    public function setBilling($Billing)
    {
        $this->Billing = $Billing;
        return $this;
    }
}
