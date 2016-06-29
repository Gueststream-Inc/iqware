<?php

namespace Gueststream\PMS\IQWare\API;

class ContractExpenses
{

    /**
     * @var int $ID_CondoOwner
     */
    protected $ID_CondoOwner = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $CalculationType
     */
    protected $CalculationType = null;

    /**
     * @var float $Retail
     */
    protected $Retail = null;

    /**
     * @param int $ID_CondoOwner
     * @param string $Name
     * @param int $CalculationType
     * @param float $Retail
     */
    public function __construct($ID_CondoOwner, $Name, $CalculationType, $Retail)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        $this->Name = $Name;
        $this->CalculationType = $CalculationType;
        $this->Retail = $Retail;
    }

    /**
     * @return int
     */
    public function getID_CondoOwner()
    {
        return $this->ID_CondoOwner;
    }

    /**
     * @param int $ID_CondoOwner
     * @return \Gueststream\PMS\IQWare\API\ContractExpenses
     */
    public function setID_CondoOwner($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
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
     * @return \Gueststream\PMS\IQWare\API\ContractExpenses
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return int
     */
    public function getCalculationType()
    {
        return $this->CalculationType;
    }

    /**
     * @param int $CalculationType
     * @return \Gueststream\PMS\IQWare\API\ContractExpenses
     */
    public function setCalculationType($CalculationType)
    {
        $this->CalculationType = $CalculationType;
        return $this;
    }

    /**
     * @return float
     */
    public function getRetail()
    {
        return $this->Retail;
    }

    /**
     * @param float $Retail
     * @return \Gueststream\PMS\IQWare\API\ContractExpenses
     */
    public function setRetail($Retail)
    {
        $this->Retail = $Retail;
        return $this;
    }
}
