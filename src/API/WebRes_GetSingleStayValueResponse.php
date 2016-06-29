<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetSingleStayValueResponse
{

    /**
     * @var float $dFirstNight
     */
    protected $dFirstNight = null;

    /**
     * @var float $dTotalStay
     */
    protected $dTotalStay = null;

    /**
     * @var float $dAvgNight
     */
    protected $dAvgNight = null;

    /**
     * @var float $dRequiredDeposit
     */
    protected $dRequiredDeposit = null;

    /**
     * @var int $ID_Currency
     */
    protected $ID_Currency = null;

    /**
     * @var dstDailyBreakdown $dstDailyBreakdown
     */
    protected $dstDailyBreakdown = null;

    /**
     * @param float $dFirstNight
     * @param float $dTotalStay
     * @param float $dAvgNight
     * @param float $dRequiredDeposit
     * @param int $ID_Currency
     * @param dstDailyBreakdown $dstDailyBreakdown
     */
    public function __construct($dFirstNight, $dTotalStay, $dAvgNight, $dRequiredDeposit, $ID_Currency, $dstDailyBreakdown)
    {
        $this->dFirstNight = $dFirstNight;
        $this->dTotalStay = $dTotalStay;
        $this->dAvgNight = $dAvgNight;
        $this->dRequiredDeposit = $dRequiredDeposit;
        $this->ID_Currency = $ID_Currency;
        $this->dstDailyBreakdown = $dstDailyBreakdown;
    }

    /**
     * @return float
     */
    public function getDFirstNight()
    {
        return $this->dFirstNight;
    }

    /**
     * @param float $dFirstNight
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSingleStayValueResponse
     */
    public function setDFirstNight($dFirstNight)
    {
        $this->dFirstNight = $dFirstNight;
        return $this;
    }

    /**
     * @return float
     */
    public function getDTotalStay()
    {
        return $this->dTotalStay;
    }

    /**
     * @param float $dTotalStay
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSingleStayValueResponse
     */
    public function setDTotalStay($dTotalStay)
    {
        $this->dTotalStay = $dTotalStay;
        return $this;
    }

    /**
     * @return float
     */
    public function getDAvgNight()
    {
        return $this->dAvgNight;
    }

    /**
     * @param float $dAvgNight
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSingleStayValueResponse
     */
    public function setDAvgNight($dAvgNight)
    {
        $this->dAvgNight = $dAvgNight;
        return $this;
    }

    /**
     * @return float
     */
    public function getDRequiredDeposit()
    {
        return $this->dRequiredDeposit;
    }

    /**
     * @param float $dRequiredDeposit
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSingleStayValueResponse
     */
    public function setDRequiredDeposit($dRequiredDeposit)
    {
        $this->dRequiredDeposit = $dRequiredDeposit;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSingleStayValueResponse
     */
    public function setID_Currency($ID_Currency)
    {
        $this->ID_Currency = $ID_Currency;
        return $this;
    }

    /**
     * @return dstDailyBreakdown
     */
    public function getDstDailyBreakdown()
    {
        return $this->dstDailyBreakdown;
    }

    /**
     * @param dstDailyBreakdown $dstDailyBreakdown
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSingleStayValueResponse
     */
    public function setDstDailyBreakdown($dstDailyBreakdown)
    {
        $this->dstDailyBreakdown = $dstDailyBreakdown;
        return $this;
    }
}
