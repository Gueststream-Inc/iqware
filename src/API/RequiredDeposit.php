<?php

namespace Gueststream\PMS\IQWare\API;

class RequiredDeposit
{

    /**
     * @var \DateTime $ADate1
     */
    protected $ADate1 = null;

    /**
     * @var int $DateType1
     */
    protected $DateType1 = null;

    /**
     * @var float $LevelAmount1
     */
    protected $LevelAmount1 = null;

    /**
     * @var int $StatusLevel1
     */
    protected $StatusLevel1 = null;

    /**
     * @var int $NbDaysDeposit1
     */
    protected $NbDaysDeposit1 = null;

    /**
     * @var int $DepositType1
     */
    protected $DepositType1 = null;

    /**
     * @var \DateTime $ADate2
     */
    protected $ADate2 = null;

    /**
     * @var int $DateType2
     */
    protected $DateType2 = null;

    /**
     * @var float $LevelAmount2
     */
    protected $LevelAmount2 = null;

    /**
     * @var int $StatusLevel2
     */
    protected $StatusLevel2 = null;

    /**
     * @var int $NbDaysDeposit2
     */
    protected $NbDaysDeposit2 = null;

    /**
     * @var int $DepositType2
     */
    protected $DepositType2 = null;

    /**
     * @var \DateTime $ADate3
     */
    protected $ADate3 = null;

    /**
     * @var int $DateType3
     */
    protected $DateType3 = null;

    /**
     * @var float $LevelAmount3
     */
    protected $LevelAmount3 = null;

    /**
     * @var int $StatusLevel3
     */
    protected $StatusLevel3 = null;

    /**
     * @var int $NbDaysDeposit3
     */
    protected $NbDaysDeposit3 = null;

    /**
     * @var int $DepositType3
     */
    protected $DepositType3 = null;

    /**
     * @var string $CancelPolitics
     */
    protected $CancelPolitics = null;

    /**
     * @var string $SeasonName
     */
    protected $SeasonName = null;

    /**
     * @var float $TotStayBDGlobal
     */
    protected $TotStayBDGlobal = null;

    /**
     * @var float $TotStayBD1Global
     */
    protected $TotStayBD1Global = null;

    /**
     * @param \DateTime $ADate1
     * @param int $DateType1
     * @param float $LevelAmount1
     * @param int $StatusLevel1
     * @param int $NbDaysDeposit1
     * @param int $DepositType1
     * @param \DateTime $ADate2
     * @param int $DateType2
     * @param float $LevelAmount2
     * @param int $StatusLevel2
     * @param int $NbDaysDeposit2
     * @param int $DepositType2
     * @param \DateTime $ADate3
     * @param int $DateType3
     * @param float $LevelAmount3
     * @param int $StatusLevel3
     * @param int $NbDaysDeposit3
     * @param int $DepositType3
     * @param float $TotStayBDGlobal
     * @param float $TotStayBD1Global
     */
    public function __construct(\DateTime $ADate1, $DateType1, $LevelAmount1, $StatusLevel1, $NbDaysDeposit1, $DepositType1, \DateTime $ADate2, $DateType2, $LevelAmount2, $StatusLevel2, $NbDaysDeposit2, $DepositType2, \DateTime $ADate3, $DateType3, $LevelAmount3, $StatusLevel3, $NbDaysDeposit3, $DepositType3, $TotStayBDGlobal, $TotStayBD1Global)
    {
        $this->ADate1 = $ADate1->format(\DateTime::ATOM);
        $this->DateType1 = $DateType1;
        $this->LevelAmount1 = $LevelAmount1;
        $this->StatusLevel1 = $StatusLevel1;
        $this->NbDaysDeposit1 = $NbDaysDeposit1;
        $this->DepositType1 = $DepositType1;
        $this->ADate2 = $ADate2->format(\DateTime::ATOM);
        $this->DateType2 = $DateType2;
        $this->LevelAmount2 = $LevelAmount2;
        $this->StatusLevel2 = $StatusLevel2;
        $this->NbDaysDeposit2 = $NbDaysDeposit2;
        $this->DepositType2 = $DepositType2;
        $this->ADate3 = $ADate3->format(\DateTime::ATOM);
        $this->DateType3 = $DateType3;
        $this->LevelAmount3 = $LevelAmount3;
        $this->StatusLevel3 = $StatusLevel3;
        $this->NbDaysDeposit3 = $NbDaysDeposit3;
        $this->DepositType3 = $DepositType3;
        $this->TotStayBDGlobal = $TotStayBDGlobal;
        $this->TotStayBD1Global = $TotStayBD1Global;
    }

    /**
     * @return \DateTime
     */
    public function getADate1()
    {
        if ($this->ADate1 == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ADate1);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ADate1
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setADate1(\DateTime $ADate1)
    {
        $this->ADate1 = $ADate1->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getDateType1()
    {
        return $this->DateType1;
    }

    /**
     * @param int $DateType1
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setDateType1($DateType1)
    {
        $this->DateType1 = $DateType1;
        return $this;
    }

    /**
     * @return float
     */
    public function getLevelAmount1()
    {
        return $this->LevelAmount1;
    }

    /**
     * @param float $LevelAmount1
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setLevelAmount1($LevelAmount1)
    {
        $this->LevelAmount1 = $LevelAmount1;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatusLevel1()
    {
        return $this->StatusLevel1;
    }

    /**
     * @param int $StatusLevel1
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setStatusLevel1($StatusLevel1)
    {
        $this->StatusLevel1 = $StatusLevel1;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbDaysDeposit1()
    {
        return $this->NbDaysDeposit1;
    }

    /**
     * @param int $NbDaysDeposit1
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setNbDaysDeposit1($NbDaysDeposit1)
    {
        $this->NbDaysDeposit1 = $NbDaysDeposit1;
        return $this;
    }

    /**
     * @return int
     */
    public function getDepositType1()
    {
        return $this->DepositType1;
    }

    /**
     * @param int $DepositType1
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setDepositType1($DepositType1)
    {
        $this->DepositType1 = $DepositType1;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getADate2()
    {
        if ($this->ADate2 == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ADate2);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ADate2
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setADate2(\DateTime $ADate2)
    {
        $this->ADate2 = $ADate2->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getDateType2()
    {
        return $this->DateType2;
    }

    /**
     * @param int $DateType2
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setDateType2($DateType2)
    {
        $this->DateType2 = $DateType2;
        return $this;
    }

    /**
     * @return float
     */
    public function getLevelAmount2()
    {
        return $this->LevelAmount2;
    }

    /**
     * @param float $LevelAmount2
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setLevelAmount2($LevelAmount2)
    {
        $this->LevelAmount2 = $LevelAmount2;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatusLevel2()
    {
        return $this->StatusLevel2;
    }

    /**
     * @param int $StatusLevel2
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setStatusLevel2($StatusLevel2)
    {
        $this->StatusLevel2 = $StatusLevel2;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbDaysDeposit2()
    {
        return $this->NbDaysDeposit2;
    }

    /**
     * @param int $NbDaysDeposit2
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setNbDaysDeposit2($NbDaysDeposit2)
    {
        $this->NbDaysDeposit2 = $NbDaysDeposit2;
        return $this;
    }

    /**
     * @return int
     */
    public function getDepositType2()
    {
        return $this->DepositType2;
    }

    /**
     * @param int $DepositType2
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setDepositType2($DepositType2)
    {
        $this->DepositType2 = $DepositType2;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getADate3()
    {
        if ($this->ADate3 == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ADate3);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ADate3
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setADate3(\DateTime $ADate3)
    {
        $this->ADate3 = $ADate3->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getDateType3()
    {
        return $this->DateType3;
    }

    /**
     * @param int $DateType3
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setDateType3($DateType3)
    {
        $this->DateType3 = $DateType3;
        return $this;
    }

    /**
     * @return float
     */
    public function getLevelAmount3()
    {
        return $this->LevelAmount3;
    }

    /**
     * @param float $LevelAmount3
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setLevelAmount3($LevelAmount3)
    {
        $this->LevelAmount3 = $LevelAmount3;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatusLevel3()
    {
        return $this->StatusLevel3;
    }

    /**
     * @param int $StatusLevel3
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setStatusLevel3($StatusLevel3)
    {
        $this->StatusLevel3 = $StatusLevel3;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbDaysDeposit3()
    {
        return $this->NbDaysDeposit3;
    }

    /**
     * @param int $NbDaysDeposit3
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setNbDaysDeposit3($NbDaysDeposit3)
    {
        $this->NbDaysDeposit3 = $NbDaysDeposit3;
        return $this;
    }

    /**
     * @return int
     */
    public function getDepositType3()
    {
        return $this->DepositType3;
    }

    /**
     * @param int $DepositType3
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setDepositType3($DepositType3)
    {
        $this->DepositType3 = $DepositType3;
        return $this;
    }

    /**
     * @return string
     */
    public function getCancelPolitics()
    {
        return $this->CancelPolitics;
    }

    /**
     * @param string $CancelPolitics
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setCancelPolitics($CancelPolitics)
    {
        $this->CancelPolitics = $CancelPolitics;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeasonName()
    {
        return $this->SeasonName;
    }

    /**
     * @param string $SeasonName
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setSeasonName($SeasonName)
    {
        $this->SeasonName = $SeasonName;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotStayBDGlobal()
    {
        return $this->TotStayBDGlobal;
    }

    /**
     * @param float $TotStayBDGlobal
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setTotStayBDGlobal($TotStayBDGlobal)
    {
        $this->TotStayBDGlobal = $TotStayBDGlobal;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotStayBD1Global()
    {
        return $this->TotStayBD1Global;
    }

    /**
     * @param float $TotStayBD1Global
     * @return \Gueststream\PMS\IQWare\API\RequiredDeposit
     */
    public function setTotStayBD1Global($TotStayBD1Global)
    {
        $this->TotStayBD1Global = $TotStayBD1Global;
        return $this;
    }
}
