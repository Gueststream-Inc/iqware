<?php

namespace Gueststream\PMS\IQWare\API;

class cMember
{

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var cMemberProfile $Profile
     */
    protected $Profile = null;

    /**
     * @var cMemberAccount $Account
     */
    protected $Account = null;

    /**
     * @var cInfoTmpl $InfoTmpl
     */
    protected $InfoTmpl = null;

    /**
     * @var cAddresses $Addresses
     */
    protected $Addresses = null;

    /**
     * @var cTemplate $Template
     */
    protected $Template = null;

    /**
     * @var cMemberLinks $Links
     */
    protected $Links = null;

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
     * @return \Gueststream\PMS\IQWare\API\cMember
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return cMemberProfile
     */
    public function getProfile()
    {
        return $this->Profile;
    }

    /**
     * @param cMemberProfile $Profile
     * @return \Gueststream\PMS\IQWare\API\cMember
     */
    public function setProfile($Profile)
    {
        $this->Profile = $Profile;
        return $this;
    }

    /**
     * @return cMemberAccount
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param cMemberAccount $Account
     * @return \Gueststream\PMS\IQWare\API\cMember
     */
    public function setAccount($Account)
    {
        $this->Account = $Account;
        return $this;
    }

    /**
     * @return cInfoTmpl
     */
    public function getInfoTmpl()
    {
        return $this->InfoTmpl;
    }

    /**
     * @param cInfoTmpl $InfoTmpl
     * @return \Gueststream\PMS\IQWare\API\cMember
     */
    public function setInfoTmpl($InfoTmpl)
    {
        $this->InfoTmpl = $InfoTmpl;
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
     * @return \Gueststream\PMS\IQWare\API\cMember
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
     * @return \Gueststream\PMS\IQWare\API\cMember
     */
    public function setTemplate($Template)
    {
        $this->Template = $Template;
        return $this;
    }

    /**
     * @return cMemberLinks
     */
    public function getLinks()
    {
        return $this->Links;
    }

    /**
     * @param cMemberLinks $Links
     * @return \Gueststream\PMS\IQWare\API\cMember
     */
    public function setLinks($Links)
    {
        $this->Links = $Links;
        return $this;
    }
}
