<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoOwnerListOfInvoices
{

    /**
     * @var string $WSlogin
     */
    protected $WSlogin = null;

    /**
     * @var string $WSpassword
     */
    protected $WSpassword = null;

    /**
     * @var int $ID_CondoOwner
     */
    protected $ID_CondoOwner = null;

    /**
     * @var int $PropertyGUID
     */
    protected $PropertyGUID = null;

    /**
     * @param string $WSlogin
     * @param string $WSpassword
     * @param int $ID_CondoOwner
     * @param int $PropertyGUID
     */
    public function __construct($WSlogin, $WSpassword, $ID_CondoOwner, $PropertyGUID)
    {
        $this->WSlogin = $WSlogin;
        $this->WSpassword = $WSpassword;
        $this->ID_CondoOwner = $ID_CondoOwner;
        $this->PropertyGUID = $PropertyGUID;
    }

    /**
     * @return string
     */
    public function getWSlogin()
    {
        return $this->WSlogin;
    }

    /**
     * @param string $WSlogin
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerListOfInvoices
     */
    public function setWSlogin($WSlogin)
    {
        $this->WSlogin = $WSlogin;
        return $this;
    }

    /**
     * @return string
     */
    public function getWSpassword()
    {
        return $this->WSpassword;
    }

    /**
     * @param string $WSpassword
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerListOfInvoices
     */
    public function setWSpassword($WSpassword)
    {
        $this->WSpassword = $WSpassword;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_CondoOwner()
    {
        return $this->ID_CondoOwner;
    }

    /**
     * @param int $ID_CondoOwner
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerListOfInvoices
     */
    public function setID_CondoOwner($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        return $this;
    }

    /**
     * @return int
     */
    public function getPropertyGUID()
    {
        return $this->PropertyGUID;
    }

    /**
     * @param int $PropertyGUID
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerListOfInvoices
     */
    public function setPropertyGUID($PropertyGUID)
    {
        $this->PropertyGUID = $PropertyGUID;
        return $this;
    }
}
