<?php

namespace Gueststream\PMS\IQWare\API;

class cTravelAgentAccount
{

    /**
     * @var int $ID_TaxExemption
     */
    protected $ID_TaxExemption = null;

    /**
     * @var int $ID_Currency
     */
    protected $ID_Currency = null;

    /**
     * @var string $TaxNo
     */
    protected $TaxNo = null;

    /**
     * @var string $TaxNo2
     */
    protected $TaxNo2 = null;

    /**
     * @param int $ID_TaxExemption
     * @param int $ID_Currency
     */
    public function __construct($ID_TaxExemption, $ID_Currency)
    {
        $this->ID_TaxExemption = $ID_TaxExemption;
        $this->ID_Currency = $ID_Currency;
    }

    /**
     * @return int
     */
    public function getID_TaxExemption()
    {
        return $this->ID_TaxExemption;
    }

    /**
     * @param int $ID_TaxExemption
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentAccount
     */
    public function setID_TaxExemption($ID_TaxExemption)
    {
        $this->ID_TaxExemption = $ID_TaxExemption;
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
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentAccount
     */
    public function setID_Currency($ID_Currency)
    {
        $this->ID_Currency = $ID_Currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxNo()
    {
        return $this->TaxNo;
    }

    /**
     * @param string $TaxNo
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentAccount
     */
    public function setTaxNo($TaxNo)
    {
        $this->TaxNo = $TaxNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxNo2()
    {
        return $this->TaxNo2;
    }

    /**
     * @param string $TaxNo2
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentAccount
     */
    public function setTaxNo2($TaxNo2)
    {
        $this->TaxNo2 = $TaxNo2;
        return $this;
    }
}
