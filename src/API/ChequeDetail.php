<?php

namespace Gueststream\PMS\IQWare\API;

class ChequeDetail
{

    /**
     * @var int $TrnNo
     */
    protected $TrnNo = null;

    /**
     * @var int $ID_Currency
     */
    protected $ID_Currency = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var \DateTime $PostingDate
     */
    protected $PostingDate = null;

    /**
     * @var \DateTime $AccountingDate
     */
    protected $AccountingDate = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var float $AmountMemo
     */
    protected $AmountMemo = null;

    /**
     * @param int $TrnNo
     * @param int $ID_Currency
     * @param string $Name
     * @param string $Reference
     * @param string $Comment
     * @param \DateTime $PostingDate
     * @param \DateTime $AccountingDate
     * @param float $Amount
     * @param float $AmountMemo
     */
    public function __construct($TrnNo, $ID_Currency, $Name, $Reference, $Comment, \DateTime $PostingDate, \DateTime $AccountingDate, $Amount, $AmountMemo)
    {
        $this->TrnNo = $TrnNo;
        $this->ID_Currency = $ID_Currency;
        $this->Name = $Name;
        $this->Reference = $Reference;
        $this->Comment = $Comment;
        $this->PostingDate = $PostingDate->format(\DateTime::ATOM);
        $this->AccountingDate = $AccountingDate->format(\DateTime::ATOM);
        $this->Amount = $Amount;
        $this->AmountMemo = $AmountMemo;
    }

    /**
     * @return int
     */
    public function getTrnNo()
    {
        return $this->TrnNo;
    }

    /**
     * @param int $TrnNo
     * @return \Gueststream\PMS\IQWare\API\ChequeDetail
     */
    public function setTrnNo($TrnNo)
    {
        $this->TrnNo = $TrnNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Currency()
    {
        return $this->ID_Currency;
    }

    /**
     * @param int $ID_Currency
     * @return \Gueststream\PMS\IQWare\API\ChequeDetail
     */
    public function setID_Currency($ID_Currency)
    {
        $this->ID_Currency = $ID_Currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Gueststream\PMS\IQWare\API\ChequeDetail
     */
    public function setName($Name)
    {
        $this->Name = $Name;
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
     * @return \Gueststream\PMS\IQWare\API\ChequeDetail
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return \Gueststream\PMS\IQWare\API\ChequeDetail
     */
    public function setComment($Comment)
    {
        $this->Comment = $Comment;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPostingDate()
    {
        if ($this->PostingDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->PostingDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $PostingDate
     * @return \Gueststream\PMS\IQWare\API\ChequeDetail
     */
    public function setPostingDate(\DateTime $PostingDate)
    {
        $this->PostingDate = $PostingDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAccountingDate()
    {
        if ($this->AccountingDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->AccountingDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $AccountingDate
     * @return \Gueststream\PMS\IQWare\API\ChequeDetail
     */
    public function setAccountingDate(\DateTime $AccountingDate)
    {
        $this->AccountingDate = $AccountingDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \Gueststream\PMS\IQWare\API\ChequeDetail
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountMemo()
    {
        return $this->AmountMemo;
    }

    /**
     * @param float $AmountMemo
     * @return \Gueststream\PMS\IQWare\API\ChequeDetail
     */
    public function setAmountMemo($AmountMemo)
    {
        $this->AmountMemo = $AmountMemo;
        return $this;
    }
}
