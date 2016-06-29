<?php

namespace Gueststream\PMS\IQWare\API;

class CancelResponse
{

    /**
     * @var int $CancellationNo
     */
    protected $CancellationNo = null;

    /**
     * @var Folios $FolioAmounts
     */
    protected $FolioAmounts = null;

    /**
     * @var int $SfolioPenalty
     */
    protected $SfolioPenalty = null;

    /**
     * @var float $AmountPenalty
     */
    protected $AmountPenalty = null;

    /**
     * @var int $ID_TrnCodePenalty
     */
    protected $ID_TrnCodePenalty = null;

    /**
     * @var int $LedgerType
     */
    protected $LedgerType = null;

    /**
     * @var int $ID_Account
     */
    protected $ID_Account = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var int $ID_Dept
     */
    protected $ID_Dept = null;

    /**
     * @var boolean $MustRefundCard
     */
    protected $MustRefundCard = null;

    /**
     * @param int $CancellationNo
     * @param int $SfolioPenalty
     * @param float $AmountPenalty
     * @param int $ID_TrnCodePenalty
     * @param int $LedgerType
     * @param int $ID_Account
     * @param int $AccountNo
     * @param int $ID_Dept
     * @param boolean $MustRefundCard
     */
    public function __construct($CancellationNo, $SfolioPenalty, $AmountPenalty, $ID_TrnCodePenalty, $LedgerType, $ID_Account, $AccountNo, $ID_Dept, $MustRefundCard)
    {
        $this->CancellationNo = $CancellationNo;
        $this->SfolioPenalty = $SfolioPenalty;
        $this->AmountPenalty = $AmountPenalty;
        $this->ID_TrnCodePenalty = $ID_TrnCodePenalty;
        $this->LedgerType = $LedgerType;
        $this->ID_Account = $ID_Account;
        $this->AccountNo = $AccountNo;
        $this->ID_Dept = $ID_Dept;
        $this->MustRefundCard = $MustRefundCard;
    }

    /**
     * @return int
     */
    public function getCancellationNo()
    {
        return $this->CancellationNo;
    }

    /**
     * @param int $CancellationNo
     * @return \Gueststream\PMS\IQWare\API\CancelResponse
     */
    public function setCancellationNo($CancellationNo)
    {
        $this->CancellationNo = $CancellationNo;
        return $this;
    }

    /**
     * @return Folios
     */
    public function getFolioAmounts()
    {
        return $this->FolioAmounts;
    }

    /**
     * @param Folios $FolioAmounts
     * @return \Gueststream\PMS\IQWare\API\CancelResponse
     */
    public function setFolioAmounts($FolioAmounts)
    {
        $this->FolioAmounts = $FolioAmounts;
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
     * @return \Gueststream\PMS\IQWare\API\CancelResponse
     */
    public function setSfolioPenalty($SfolioPenalty)
    {
        $this->SfolioPenalty = $SfolioPenalty;
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
     * @return \Gueststream\PMS\IQWare\API\CancelResponse
     */
    public function setAmountPenalty($AmountPenalty)
    {
        $this->AmountPenalty = $AmountPenalty;
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
     * @return \Gueststream\PMS\IQWare\API\CancelResponse
     */
    public function setID_TrnCodePenalty($ID_TrnCodePenalty)
    {
        $this->ID_TrnCodePenalty = $ID_TrnCodePenalty;
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
     * @return \Gueststream\PMS\IQWare\API\CancelResponse
     */
    public function setLedgerType($LedgerType)
    {
        $this->LedgerType = $LedgerType;
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
     * @return \Gueststream\PMS\IQWare\API\CancelResponse
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
     * @return \Gueststream\PMS\IQWare\API\CancelResponse
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
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
     * @return \Gueststream\PMS\IQWare\API\CancelResponse
     */
    public function setID_Dept($ID_Dept)
    {
        $this->ID_Dept = $ID_Dept;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMustRefundCard()
    {
        return $this->MustRefundCard;
    }

    /**
     * @param boolean $MustRefundCard
     * @return \Gueststream\PMS\IQWare\API\CancelResponse
     */
    public function setMustRefundCard($MustRefundCard)
    {
        $this->MustRefundCard = $MustRefundCard;
        return $this;
    }
}
