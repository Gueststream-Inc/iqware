<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoOwnerInvoiceByID
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
     * @var int $DocumentID
     */
    protected $DocumentID = null;

    /**
     * @var int $PropertyGUID
     */
    protected $PropertyGUID = null;

    /**
     * @param string $WSlogin
     * @param string $WSpassword
     * @param int $DocumentID
     * @param int $PropertyGUID
     */
    public function __construct($WSlogin, $WSpassword, $DocumentID, $PropertyGUID)
    {
        $this->WSlogin = $WSlogin;
        $this->WSpassword = $WSpassword;
        $this->DocumentID = $DocumentID;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerInvoiceByID
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerInvoiceByID
     */
    public function setWSpassword($WSpassword)
    {
        $this->WSpassword = $WSpassword;
        return $this;
    }

    /**
     * @return int
     */
    public function getDocumentID()
    {
        return $this->DocumentID;
    }

    /**
     * @param int $DocumentID
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerInvoiceByID
     */
    public function setDocumentID($DocumentID)
    {
        $this->DocumentID = $DocumentID;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerInvoiceByID
     */
    public function setPropertyGUID($PropertyGUID)
    {
        $this->PropertyGUID = $PropertyGUID;
        return $this;
    }
}
