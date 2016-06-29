<?php

namespace Gueststream\PMS\IQWare\API;

class cFolioDist
{

    /**
     * @var int $ID_TrnCode
     */
    protected $ID_TrnCode = null;

    /**
     * @var int $ID_SubFolio
     */
    protected $ID_SubFolio = null;

    /**
     * @param int $ID_TrnCode
     * @param int $ID_SubFolio
     */
    public function __construct($ID_TrnCode, $ID_SubFolio)
    {
        $this->ID_TrnCode = $ID_TrnCode;
        $this->ID_SubFolio = $ID_SubFolio;
    }

    /**
     * @return int
     */
    public function getID_TrnCode()
    {
        return $this->ID_TrnCode;
    }

    /**
     * @param int $ID_TrnCode
     * @return \Gueststream\PMS\IQWare\API\cFolioDist
     */
    public function setID_TrnCode($ID_TrnCode)
    {
        $this->ID_TrnCode = $ID_TrnCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_SubFolio()
    {
        return $this->ID_SubFolio;
    }

    /**
     * @param int $ID_SubFolio
     * @return \Gueststream\PMS\IQWare\API\cFolioDist
     */
    public function setID_SubFolio($ID_SubFolio)
    {
        $this->ID_SubFolio = $ID_SubFolio;
        return $this;
    }
}
