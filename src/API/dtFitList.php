<?php

namespace Gueststream\PMS\IQWare\API;

class dtFitList
{

    /**
     * @var string $FitNo
     */
    protected $FitNo = null;

    /**
     * @var string $FitName
     */
    protected $FitName = null;

    /**
     * @param string $FitNo
     * @param string $FitName
     */
    public function __construct($FitNo, $FitName)
    {
        $this->FitNo = $FitNo;
        $this->FitName = $FitName;
    }

    /**
     * @return string
     */
    public function getFitNo()
    {
        return $this->FitNo;
    }

    /**
     * @param string $FitNo
     * @return \Gueststream\PMS\IQWare\API\dtFitList
     */
    public function setFitNo($FitNo)
    {
        $this->FitNo = $FitNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getFitName()
    {
        return $this->FitName;
    }

    /**
     * @param string $FitName
     * @return \Gueststream\PMS\IQWare\API\dtFitList
     */
    public function setFitName($FitName)
    {
        $this->FitName = $FitName;
        return $this;
    }
}
