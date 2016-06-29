<?php

namespace Gueststream\PMS\IQWare\API;

class Evaluation
{

    /**
     * @var int $ID_Stay
     */
    protected $ID_Stay = null;

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var int $ID_RateCode
     */
    protected $ID_RateCode = null;

    /**
     * @var float $TotalStay
     */
    protected $TotalStay = null;

    /**
     * @var float $TotalStayTx
     */
    protected $TotalStayTx = null;

    /**
     * @var float $FirstNight
     */
    protected $FirstNight = null;

    /**
     * @var float $FirstNightTx
     */
    protected $FirstNightTx = null;

    /**
     * @var float $FirstNightOthers
     */
    protected $FirstNightOthers = null;

    /**
     * @var float $AvgNight
     */
    protected $AvgNight = null;

    /**
     * @var float $AvgNightTx
     */
    protected $AvgNightTx = null;

    /**
     * @var float $TotalRate
     */
    protected $TotalRate = null;

    /**
     * @var float $TotalOthers
     */
    protected $TotalOthers = null;

    /**
     * @var ArrayOfDailyEvaluation $DailyEvaluations
     */
    protected $DailyEvaluations = null;

    /**
     * @param int $ID_Stay
     * @param int $ID_RoomType
     * @param int $ID_RateCode
     * @param float $TotalStay
     * @param float $TotalStayTx
     * @param float $FirstNight
     * @param float $FirstNightTx
     * @param float $FirstNightOthers
     * @param float $AvgNight
     * @param float $AvgNightTx
     * @param float $TotalRate
     * @param float $TotalOthers
     */
    public function __construct($ID_Stay, $ID_RoomType, $ID_RateCode, $TotalStay, $TotalStayTx, $FirstNight, $FirstNightTx, $FirstNightOthers, $AvgNight, $AvgNightTx, $TotalRate, $TotalOthers)
    {
        $this->ID_Stay = $ID_Stay;
        $this->ID_RoomType = $ID_RoomType;
        $this->ID_RateCode = $ID_RateCode;
        $this->TotalStay = $TotalStay;
        $this->TotalStayTx = $TotalStayTx;
        $this->FirstNight = $FirstNight;
        $this->FirstNightTx = $FirstNightTx;
        $this->FirstNightOthers = $FirstNightOthers;
        $this->AvgNight = $AvgNight;
        $this->AvgNightTx = $AvgNightTx;
        $this->TotalRate = $TotalRate;
        $this->TotalOthers = $TotalOthers;
    }

    /**
     * @return int
     */
    public function getID_Stay()
    {
        return $this->ID_Stay;
    }

    /**
     * @param int $ID_Stay
     * @return \Gueststream\PMS\IQWare\API\Evaluation
     */
    public function setID_Stay($ID_Stay)
    {
        $this->ID_Stay = $ID_Stay;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RoomType()
    {
        return $this->ID_RoomType;
    }

    /**
     * @param int $ID_RoomType
     * @return \Gueststream\PMS\IQWare\API\Evaluation
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateCode()
    {
        return $this->ID_RateCode;
    }

    /**
     * @param int $ID_RateCode
     * @return \Gueststream\PMS\IQWare\API\Evaluation
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalStay()
    {
        return $this->TotalStay;
    }

    /**
     * @param float $TotalStay
     * @return \Gueststream\PMS\IQWare\API\Evaluation
     */
    public function setTotalStay($TotalStay)
    {
        $this->TotalStay = $TotalStay;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalStayTx()
    {
        return $this->TotalStayTx;
    }

    /**
     * @param float $TotalStayTx
     * @return \Gueststream\PMS\IQWare\API\Evaluation
     */
    public function setTotalStayTx($TotalStayTx)
    {
        $this->TotalStayTx = $TotalStayTx;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstNight()
    {
        return $this->FirstNight;
    }

    /**
     * @param float $FirstNight
     * @return \Gueststream\PMS\IQWare\API\Evaluation
     */
    public function setFirstNight($FirstNight)
    {
        $this->FirstNight = $FirstNight;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstNightTx()
    {
        return $this->FirstNightTx;
    }

    /**
     * @param float $FirstNightTx
     * @return \Gueststream\PMS\IQWare\API\Evaluation
     */
    public function setFirstNightTx($FirstNightTx)
    {
        $this->FirstNightTx = $FirstNightTx;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstNightOthers()
    {
        return $this->FirstNightOthers;
    }

    /**
     * @param float $FirstNightOthers
     * @return \Gueststream\PMS\IQWare\API\Evaluation
     */
    public function setFirstNightOthers($FirstNightOthers)
    {
        $this->FirstNightOthers = $FirstNightOthers;
        return $this;
    }

    /**
     * @return float
     */
    public function getAvgNight()
    {
        return $this->AvgNight;
    }

    /**
     * @param float $AvgNight
     * @return \Gueststream\PMS\IQWare\API\Evaluation
     */
    public function setAvgNight($AvgNight)
    {
        $this->AvgNight = $AvgNight;
        return $this;
    }

    /**
     * @return float
     */
    public function getAvgNightTx()
    {
        return $this->AvgNightTx;
    }

    /**
     * @param float $AvgNightTx
     * @return \Gueststream\PMS\IQWare\API\Evaluation
     */
    public function setAvgNightTx($AvgNightTx)
    {
        $this->AvgNightTx = $AvgNightTx;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalRate()
    {
        return $this->TotalRate;
    }

    /**
     * @param float $TotalRate
     * @return \Gueststream\PMS\IQWare\API\Evaluation
     */
    public function setTotalRate($TotalRate)
    {
        $this->TotalRate = $TotalRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalOthers()
    {
        return $this->TotalOthers;
    }

    /**
     * @param float $TotalOthers
     * @return \Gueststream\PMS\IQWare\API\Evaluation
     */
    public function setTotalOthers($TotalOthers)
    {
        $this->TotalOthers = $TotalOthers;
        return $this;
    }

    /**
     * @return ArrayOfDailyEvaluation
     */
    public function getDailyEvaluations()
    {
        return $this->DailyEvaluations;
    }

    /**
     * @param ArrayOfDailyEvaluation $DailyEvaluations
     * @return \Gueststream\PMS\IQWare\API\Evaluation
     */
    public function setDailyEvaluations($DailyEvaluations)
    {
        $this->DailyEvaluations = $DailyEvaluations;
        return $this;
    }
}
