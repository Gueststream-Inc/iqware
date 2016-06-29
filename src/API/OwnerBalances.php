<?php

namespace Gueststream\PMS\IQWare\API;

class OwnerBalances
{

    /**
     * @var int $ID_Account
     */
    protected $ID_Account = null;

    /**
     * @var float $SubFolioA
     */
    protected $SubFolioA = null;

    /**
     * @var float $SubFolioB
     */
    protected $SubFolioB = null;

    /**
     * @var float $SubFolioC
     */
    protected $SubFolioC = null;

    /**
     * @var float $SubFolioD
     */
    protected $SubFolioD = null;

    /**
     * @var float $Total
     */
    protected $Total = null;

    /**
     * @var int $ID_CondoOwner
     */
    protected $ID_CondoOwner = null;

    /**
     * @param int $ID_Account
     * @param float $SubFolioA
     * @param float $SubFolioB
     * @param float $SubFolioC
     * @param float $SubFolioD
     * @param float $Total
     * @param int $ID_CondoOwner
     */
    public function __construct($ID_Account, $SubFolioA, $SubFolioB, $SubFolioC, $SubFolioD, $Total, $ID_CondoOwner)
    {
        $this->ID_Account = $ID_Account;
        $this->SubFolioA = $SubFolioA;
        $this->SubFolioB = $SubFolioB;
        $this->SubFolioC = $SubFolioC;
        $this->SubFolioD = $SubFolioD;
        $this->Total = $Total;
        $this->ID_CondoOwner = $ID_CondoOwner;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerBalances
     */
    public function setID_Account($ID_Account)
    {
        $this->ID_Account = $ID_Account;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubFolioA()
    {
        return $this->SubFolioA;
    }

    /**
     * @param float $SubFolioA
     * @return \Gueststream\PMS\IQWare\API\OwnerBalances
     */
    public function setSubFolioA($SubFolioA)
    {
        $this->SubFolioA = $SubFolioA;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubFolioB()
    {
        return $this->SubFolioB;
    }

    /**
     * @param float $SubFolioB
     * @return \Gueststream\PMS\IQWare\API\OwnerBalances
     */
    public function setSubFolioB($SubFolioB)
    {
        $this->SubFolioB = $SubFolioB;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubFolioC()
    {
        return $this->SubFolioC;
    }

    /**
     * @param float $SubFolioC
     * @return \Gueststream\PMS\IQWare\API\OwnerBalances
     */
    public function setSubFolioC($SubFolioC)
    {
        $this->SubFolioC = $SubFolioC;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubFolioD()
    {
        return $this->SubFolioD;
    }

    /**
     * @param float $SubFolioD
     * @return \Gueststream\PMS\IQWare\API\OwnerBalances
     */
    public function setSubFolioD($SubFolioD)
    {
        $this->SubFolioD = $SubFolioD;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * @param float $Total
     * @return \Gueststream\PMS\IQWare\API\OwnerBalances
     */
    public function setTotal($Total)
    {
        $this->Total = $Total;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerBalances
     */
    public function setID_CondoOwner($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        return $this;
    }
}
