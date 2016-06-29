<?php

namespace Gueststream\PMS\IQWare\API;

class cTransfer
{

    /**
     * @var int $SubFolioFrom
     */
    protected $SubFolioFrom = null;

    /**
     * @var int $SecondaryAccountNo
     */
    protected $SecondaryAccountNo = null;

    /**
     * @var int $ID_TrnAccounting
     */
    protected $ID_TrnAccounting = null;

    /**
     * @var int $SubFolioTo
     */
    protected $SubFolioTo = null;

    /**
     * @var int $TransferType
     */
    protected $TransferType = null;

    /**
     * @var int $TransferPriority
     */
    protected $TransferPriority = null;

    /**
     * @var boolean $IsDesactive
     */
    protected $IsDesactive = null;

    /**
     * @var boolean $IsManual
     */
    protected $IsManual = null;

    /**
     * @param int $SubFolioFrom
     * @param int $SecondaryAccountNo
     * @param int $ID_TrnAccounting
     * @param int $SubFolioTo
     * @param int $TransferType
     * @param int $TransferPriority
     * @param boolean $IsDesactive
     * @param boolean $IsManual
     */
    public function __construct($SubFolioFrom, $SecondaryAccountNo, $ID_TrnAccounting, $SubFolioTo, $TransferType, $TransferPriority, $IsDesactive, $IsManual)
    {
        $this->SubFolioFrom = $SubFolioFrom;
        $this->SecondaryAccountNo = $SecondaryAccountNo;
        $this->ID_TrnAccounting = $ID_TrnAccounting;
        $this->SubFolioTo = $SubFolioTo;
        $this->TransferType = $TransferType;
        $this->TransferPriority = $TransferPriority;
        $this->IsDesactive = $IsDesactive;
        $this->IsManual = $IsManual;
    }

    /**
     * @return int
     */
    public function getSubFolioFrom()
    {
        return $this->SubFolioFrom;
    }

    /**
     * @param int $SubFolioFrom
     * @return \Gueststream\PMS\IQWare\API\cTransfer
     */
    public function setSubFolioFrom($SubFolioFrom)
    {
        $this->SubFolioFrom = $SubFolioFrom;
        return $this;
    }

    /**
     * @return int
     */
    public function getSecondaryAccountNo()
    {
        return $this->SecondaryAccountNo;
    }

    /**
     * @param int $SecondaryAccountNo
     * @return \Gueststream\PMS\IQWare\API\cTransfer
     */
    public function setSecondaryAccountNo($SecondaryAccountNo)
    {
        $this->SecondaryAccountNo = $SecondaryAccountNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnAccounting()
    {
        return $this->ID_TrnAccounting;
    }

    /**
     * @param int $ID_TrnAccounting
     * @return \Gueststream\PMS\IQWare\API\cTransfer
     */
    public function setID_TrnAccounting($ID_TrnAccounting)
    {
        $this->ID_TrnAccounting = $ID_TrnAccounting;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubFolioTo()
    {
        return $this->SubFolioTo;
    }

    /**
     * @param int $SubFolioTo
     * @return \Gueststream\PMS\IQWare\API\cTransfer
     */
    public function setSubFolioTo($SubFolioTo)
    {
        $this->SubFolioTo = $SubFolioTo;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransferType()
    {
        return $this->TransferType;
    }

    /**
     * @param int $TransferType
     * @return \Gueststream\PMS\IQWare\API\cTransfer
     */
    public function setTransferType($TransferType)
    {
        $this->TransferType = $TransferType;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransferPriority()
    {
        return $this->TransferPriority;
    }

    /**
     * @param int $TransferPriority
     * @return \Gueststream\PMS\IQWare\API\cTransfer
     */
    public function setTransferPriority($TransferPriority)
    {
        $this->TransferPriority = $TransferPriority;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDesactive()
    {
        return $this->IsDesactive;
    }

    /**
     * @param boolean $IsDesactive
     * @return \Gueststream\PMS\IQWare\API\cTransfer
     */
    public function setIsDesactive($IsDesactive)
    {
        $this->IsDesactive = $IsDesactive;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsManual()
    {
        return $this->IsManual;
    }

    /**
     * @param boolean $IsManual
     * @return \Gueststream\PMS\IQWare\API\cTransfer
     */
    public function setIsManual($IsManual)
    {
        $this->IsManual = $IsManual;
        return $this;
    }
}
