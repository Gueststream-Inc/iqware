<?php

namespace Gueststream\PMS\IQWare\API;

class cBankAddress extends cAddressBase
{

    /**
     * @var string $BankName
     */
    protected $BankName = null;

    /**
     * @var string $BranchNumber
     */
    protected $BranchNumber = null;

    /**
     * @var string $InstitutionNo
     */
    protected $InstitutionNo = null;

    /**
     * @var string $BankAccountNo
     */
    protected $BankAccountNo = null;

    /**
     * @var boolean $IsElectronicTransfer
     */
    protected $IsElectronicTransfer = null;

    /**
     * @param boolean $IsElectronicTransfer
     */
    public function __construct($IsElectronicTransfer)
    {
        parent::__construct();
        $this->IsElectronicTransfer = $IsElectronicTransfer;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
        return $this->BankName;
    }

    /**
     * @param string $BankName
     * @return \Gueststream\PMS\IQWare\API\cBankAddress
     */
    public function setBankName($BankName)
    {
        $this->BankName = $BankName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBranchNumber()
    {
        return $this->BranchNumber;
    }

    /**
     * @param string $BranchNumber
     * @return \Gueststream\PMS\IQWare\API\cBankAddress
     */
    public function setBranchNumber($BranchNumber)
    {
        $this->BranchNumber = $BranchNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getInstitutionNo()
    {
        return $this->InstitutionNo;
    }

    /**
     * @param string $InstitutionNo
     * @return \Gueststream\PMS\IQWare\API\cBankAddress
     */
    public function setInstitutionNo($InstitutionNo)
    {
        $this->InstitutionNo = $InstitutionNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankAccountNo()
    {
        return $this->BankAccountNo;
    }

    /**
     * @param string $BankAccountNo
     * @return \Gueststream\PMS\IQWare\API\cBankAddress
     */
    public function setBankAccountNo($BankAccountNo)
    {
        $this->BankAccountNo = $BankAccountNo;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsElectronicTransfer()
    {
        return $this->IsElectronicTransfer;
    }

    /**
     * @param boolean $IsElectronicTransfer
     * @return \Gueststream\PMS\IQWare\API\cBankAddress
     */
    public function setIsElectronicTransfer($IsElectronicTransfer)
    {
        $this->IsElectronicTransfer = $IsElectronicTransfer;
        return $this;
    }
}
