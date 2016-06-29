<?php

namespace Gueststream\PMS\IQWare\API;

class RoomAttribute
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var float $ExtraAmt
     */
    protected $ExtraAmt = null;

    /**
     * @var int $ExtraAmtType
     */
    protected $ExtraAmtType = null;

    /**
     * @var int $BillingType
     */
    protected $BillingType = null;

    /**
     * @param int $Code
     * @param float $ExtraAmt
     * @param int $ExtraAmtType
     * @param int $BillingType
     */
    public function __construct($Code, $ExtraAmt, $ExtraAmtType, $BillingType)
    {
        $this->Code = $Code;
        $this->ExtraAmt = $ExtraAmt;
        $this->ExtraAmtType = $ExtraAmtType;
        $this->BillingType = $BillingType;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return \Gueststream\PMS\IQWare\API\RoomAttribute
     */
    public function setCode($Code)
    {
        $this->Code = $Code;
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
     * @return \Gueststream\PMS\IQWare\API\RoomAttribute
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return float
     */
    public function getExtraAmt()
    {
        return $this->ExtraAmt;
    }

    /**
     * @param float $ExtraAmt
     * @return \Gueststream\PMS\IQWare\API\RoomAttribute
     */
    public function setExtraAmt($ExtraAmt)
    {
        $this->ExtraAmt = $ExtraAmt;
        return $this;
    }

    /**
     * @return int
     */
    public function getExtraAmtType()
    {
        return $this->ExtraAmtType;
    }

    /**
     * @param int $ExtraAmtType
     * @return \Gueststream\PMS\IQWare\API\RoomAttribute
     */
    public function setExtraAmtType($ExtraAmtType)
    {
        $this->ExtraAmtType = $ExtraAmtType;
        return $this;
    }

    /**
     * @return int
     */
    public function getBillingType()
    {
        return $this->BillingType;
    }

    /**
     * @param int $BillingType
     * @return \Gueststream\PMS\IQWare\API\RoomAttribute
     */
    public function setBillingType($BillingType)
    {
        $this->BillingType = $BillingType;
        return $this;
    }
}
