<?php

namespace Gueststream\PMS\IQWare\API;

class Balances
{

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
     * @param float $SubFolioA
     * @param float $SubFolioB
     * @param float $SubFolioC
     * @param float $SubFolioD
     * @param float $Total
     */
    public function __construct($SubFolioA, $SubFolioB, $SubFolioC, $SubFolioD, $Total)
    {
        $this->SubFolioA = $SubFolioA;
        $this->SubFolioB = $SubFolioB;
        $this->SubFolioC = $SubFolioC;
        $this->SubFolioD = $SubFolioD;
        $this->Total = $Total;
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
     * @return \Gueststream\PMS\IQWare\API\Balances
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
     * @return \Gueststream\PMS\IQWare\API\Balances
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
     * @return \Gueststream\PMS\IQWare\API\Balances
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
     * @return \Gueststream\PMS\IQWare\API\Balances
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
     * @return \Gueststream\PMS\IQWare\API\Balances
     */
    public function setTotal($Total)
    {
        $this->Total = $Total;
        return $this;
    }
}
