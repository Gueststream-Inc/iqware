<?php

namespace Gueststream\PMS\IQWare\API;

class PostTransaction
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var int $ID_Account
     */
    protected $ID_Account = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var int $ID_TrnCodePenalty
     */
    protected $ID_TrnCodePenalty = null;

    /**
     * @var float $AmountPenalty
     */
    protected $AmountPenalty = null;

    /**
     * @var int $SfolioPenalty
     */
    protected $SfolioPenalty = null;

    /**
     * @var int $LedgerType
     */
    protected $LedgerType = null;

    /**
     * @var int $ID_Dept
     */
    protected $ID_Dept = null;

    /**
     * @var string $Comments
     */
    protected $Comments = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @param int $intGUID
     * @param int $ID_Account
     * @param int $AccountNo
     * @param int $ID_TrnCodePenalty
     * @param float $AmountPenalty
     * @param int $SfolioPenalty
     * @param int $LedgerType
     * @param int $ID_Dept
     * @param string $Comments
     * @param string $Reference
     */
    public function __construct($intGUID, $ID_Account, $AccountNo, $ID_TrnCodePenalty, $AmountPenalty, $SfolioPenalty, $LedgerType, $ID_Dept, $Comments, $Reference)
    {
        $this->intGUID = $intGUID;
        $this->ID_Account = $ID_Account;
        $this->AccountNo = $AccountNo;
        $this->ID_TrnCodePenalty = $ID_TrnCodePenalty;
        $this->AmountPenalty = $AmountPenalty;
        $this->SfolioPenalty = $SfolioPenalty;
        $this->LedgerType = $LedgerType;
        $this->ID_Dept = $ID_Dept;
        $this->Comments = $Comments;
        $this->Reference = $Reference;
    }

    /**
     * @return int
     */
    public function getIntGUID()
    {
        return $this->intGUID;
    }

    /**
     * @param int $intGUID
     * @return \Gueststream\PMS\IQWare\API\PostTransaction
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Account()
    {
        return $this->ID_Account;
    }

    /**
     * @param int $ID_Account
     * @return \Gueststream\PMS\IQWare\API\PostTransaction
     */
    public function setID_Account($ID_Account)
    {
        $this->ID_Account = $ID_Account;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\PostTransaction
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnCodePenalty()
    {
        return $this->ID_TrnCodePenalty;
    }

    /**
     * @param int $ID_TrnCodePenalty
     * @return \Gueststream\PMS\IQWare\API\PostTransaction
     */
    public function setID_TrnCodePenalty($ID_TrnCodePenalty)
    {
        $this->ID_TrnCodePenalty = $ID_TrnCodePenalty;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountPenalty()
    {
        return $this->AmountPenalty;
    }

    /**
     * @param float $AmountPenalty
     * @return \Gueststream\PMS\IQWare\API\PostTransaction
     */
    public function setAmountPenalty($AmountPenalty)
    {
        $this->AmountPenalty = $AmountPenalty;
        return $this;
    }

    /**
     * @return int
     */
    public function getSfolioPenalty()
    {
        return $this->SfolioPenalty;
    }

    /**
     * @param int $SfolioPenalty
     * @return \Gueststream\PMS\IQWare\API\PostTransaction
     */
    public function setSfolioPenalty($SfolioPenalty)
    {
        $this->SfolioPenalty = $SfolioPenalty;
        return $this;
    }

    /**
     * @return int
     */
    public function getLedgerType()
    {
        return $this->LedgerType;
    }

    /**
     * @param int $LedgerType
     * @return \Gueststream\PMS\IQWare\API\PostTransaction
     */
    public function setLedgerType($LedgerType)
    {
        $this->LedgerType = $LedgerType;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Dept()
    {
        return $this->ID_Dept;
    }

    /**
     * @param int $ID_Dept
     * @return \Gueststream\PMS\IQWare\API\PostTransaction
     */
    public function setID_Dept($ID_Dept)
    {
        $this->ID_Dept = $ID_Dept;
        return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param string $Comments
     * @return \Gueststream\PMS\IQWare\API\PostTransaction
     */
    public function setComments($Comments)
    {
        $this->Comments = $Comments;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return \Gueststream\PMS\IQWare\API\PostTransaction
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
        return $this;
    }
}
