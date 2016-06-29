<?php

namespace Gueststream\PMS\IQWare\API;

class SummaryItem
{

    /**
     * @var int $RoomIndex
     */
    protected $RoomIndex = null;

    /**
     * @var int $ID_CodeSrc
     */
    protected $ID_CodeSrc = null;

    /**
     * @var string $CodeName
     */
    protected $CodeName = null;

    /**
     * @var PricingSBDItemType $ItemType
     */
    protected $ItemType = null;

    /**
     * @var \DateTime $ADate
     */
    protected $ADate = null;

    /**
     * @var string $QtyElem
     */
    protected $QtyElem = null;

    /**
     * @var float $AmountBeforeTaxes
     */
    protected $AmountBeforeTaxes = null;

    /**
     * @var float $Taxes
     */
    protected $Taxes = null;

    /**
     * @var int $ID_Currency
     */
    protected $ID_Currency = null;

    /**
     * @var boolean $InTheRate
     */
    protected $InTheRate = null;

    /**
     * @param int $RoomIndex
     * @param int $ID_CodeSrc
     * @param PricingSBDItemType $ItemType
     * @param \DateTime $ADate
     * @param float $AmountBeforeTaxes
     * @param float $Taxes
     * @param int $ID_Currency
     * @param boolean $InTheRate
     */
    public function __construct($RoomIndex, $ID_CodeSrc, $ItemType, \DateTime $ADate, $AmountBeforeTaxes, $Taxes, $ID_Currency, $InTheRate)
    {
        $this->RoomIndex = $RoomIndex;
        $this->ID_CodeSrc = $ID_CodeSrc;
        $this->ItemType = $ItemType;
        $this->ADate = $ADate->format(\DateTime::ATOM);
        $this->AmountBeforeTaxes = $AmountBeforeTaxes;
        $this->Taxes = $Taxes;
        $this->ID_Currency = $ID_Currency;
        $this->InTheRate = $InTheRate;
    }

    /**
     * @return int
     */
    public function getRoomIndex()
    {
        return $this->RoomIndex;
    }

    /**
     * @param int $RoomIndex
     * @return \Gueststream\PMS\IQWare\API\SummaryItem
     */
    public function setRoomIndex($RoomIndex)
    {
        $this->RoomIndex = $RoomIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_CodeSrc()
    {
        return $this->ID_CodeSrc;
    }

    /**
     * @param int $ID_CodeSrc
     * @return \Gueststream\PMS\IQWare\API\SummaryItem
     */
    public function setID_CodeSrc($ID_CodeSrc)
    {
        $this->ID_CodeSrc = $ID_CodeSrc;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodeName()
    {
        return $this->CodeName;
    }

    /**
     * @param string $CodeName
     * @return \Gueststream\PMS\IQWare\API\SummaryItem
     */
    public function setCodeName($CodeName)
    {
        $this->CodeName = $CodeName;
        return $this;
    }

    /**
     * @return PricingSBDItemType
     */
    public function getItemType()
    {
        return $this->ItemType;
    }

    /**
     * @param PricingSBDItemType $ItemType
     * @return \Gueststream\PMS\IQWare\API\SummaryItem
     */
    public function setItemType($ItemType)
    {
        $this->ItemType = $ItemType;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getADate()
    {
        if ($this->ADate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ADate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ADate
     * @return \Gueststream\PMS\IQWare\API\SummaryItem
     */
    public function setADate(\DateTime $ADate)
    {
        $this->ADate = $ADate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getQtyElem()
    {
        return $this->QtyElem;
    }

    /**
     * @param string $QtyElem
     * @return \Gueststream\PMS\IQWare\API\SummaryItem
     */
    public function setQtyElem($QtyElem)
    {
        $this->QtyElem = $QtyElem;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountBeforeTaxes()
    {
        return $this->AmountBeforeTaxes;
    }

    /**
     * @param float $AmountBeforeTaxes
     * @return \Gueststream\PMS\IQWare\API\SummaryItem
     */
    public function setAmountBeforeTaxes($AmountBeforeTaxes)
    {
        $this->AmountBeforeTaxes = $AmountBeforeTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }

    /**
     * @param float $Taxes
     * @return \Gueststream\PMS\IQWare\API\SummaryItem
     */
    public function setTaxes($Taxes)
    {
        $this->Taxes = $Taxes;
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
     * @return \Gueststream\PMS\IQWare\API\SummaryItem
     */
    public function setID_Currency($ID_Currency)
    {
        $this->ID_Currency = $ID_Currency;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInTheRate()
    {
        return $this->InTheRate;
    }

    /**
     * @param boolean $InTheRate
     * @return \Gueststream\PMS\IQWare\API\SummaryItem
     */
    public function setInTheRate($InTheRate)
    {
        $this->InTheRate = $InTheRate;
        return $this;
    }
}
