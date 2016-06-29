<?php

namespace Gueststream\PMS\IQWare\API;

class cServiceChargeALaCarte
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var int $ID_ServiceCharge
     */
    protected $ID_ServiceCharge = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @param \DateTime $Date
     * @param float $Amount
     * @param int $Quantity
     * @param int $ID_ServiceCharge
     */
    public function __construct(\DateTime $Date, $Amount, $Quantity, $ID_ServiceCharge)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        $this->Amount = $Amount;
        $this->Quantity = $Quantity;
        $this->ID_ServiceCharge = $ID_ServiceCharge;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        if ($this->Date == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Date);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Date
     * @return \Gueststream\PMS\IQWare\API\cServiceChargeALaCarte
     */
    public function setDate(\DateTime $Date)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\cServiceChargeALaCarte
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \Gueststream\PMS\IQWare\API\cServiceChargeALaCarte
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_ServiceCharge()
    {
        return $this->ID_ServiceCharge;
    }

    /**
     * @param int $ID_ServiceCharge
     * @return \Gueststream\PMS\IQWare\API\cServiceChargeALaCarte
     */
    public function setID_ServiceCharge($ID_ServiceCharge)
    {
        $this->ID_ServiceCharge = $ID_ServiceCharge;
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
     * @return \Gueststream\PMS\IQWare\API\cServiceChargeALaCarte
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
        return $this;
    }
}
