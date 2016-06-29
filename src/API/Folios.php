<?php

namespace Gueststream\PMS\IQWare\API;

class Folios
{

    /**
     * @var float $AmountFolioA
     */
    protected $AmountFolioA = null;

    /**
     * @var float $AmountFolioB
     */
    protected $AmountFolioB = null;

    /**
     * @var float $AmountFolioC
     */
    protected $AmountFolioC = null;

    /**
     * @var float $AmountFolioD
     */
    protected $AmountFolioD = null;

    /**
     * @param float $AmountFolioA
     * @param float $AmountFolioB
     * @param float $AmountFolioC
     * @param float $AmountFolioD
     */
    public function __construct($AmountFolioA, $AmountFolioB, $AmountFolioC, $AmountFolioD)
    {
        $this->AmountFolioA = $AmountFolioA;
        $this->AmountFolioB = $AmountFolioB;
        $this->AmountFolioC = $AmountFolioC;
        $this->AmountFolioD = $AmountFolioD;
    }

    /**
     * @return float
     */
    public function getAmountFolioA()
    {
        return $this->AmountFolioA;
    }

    /**
     * @param float $AmountFolioA
     * @return \Gueststream\PMS\IQWare\API\Folios
     */
    public function setAmountFolioA($AmountFolioA)
    {
        $this->AmountFolioA = $AmountFolioA;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountFolioB()
    {
        return $this->AmountFolioB;
    }

    /**
     * @param float $AmountFolioB
     * @return \Gueststream\PMS\IQWare\API\Folios
     */
    public function setAmountFolioB($AmountFolioB)
    {
        $this->AmountFolioB = $AmountFolioB;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountFolioC()
    {
        return $this->AmountFolioC;
    }

    /**
     * @param float $AmountFolioC
     * @return \Gueststream\PMS\IQWare\API\Folios
     */
    public function setAmountFolioC($AmountFolioC)
    {
        $this->AmountFolioC = $AmountFolioC;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountFolioD()
    {
        return $this->AmountFolioD;
    }

    /**
     * @param float $AmountFolioD
     * @return \Gueststream\PMS\IQWare\API\Folios
     */
    public function setAmountFolioD($AmountFolioD)
    {
        $this->AmountFolioD = $AmountFolioD;
        return $this;
    }
}
