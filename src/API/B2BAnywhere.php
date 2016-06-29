<?php

namespace Gueststream\PMS\IQWare\API;

class B2BAnywhere
{

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var int $ID_SuiteConfiguration
     */
    protected $ID_SuiteConfiguration = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var ArrayOfEvaluationResult $Evaluation
     */
    protected $Evaluation = null;

    /**
     * @param int $ID_Room
     * @param int $ID_RoomType
     * @param int $ID_SuiteConfiguration
     * @param \DateTime $ArrivalDate
     * @param \DateTime $DepartureDate
     */
    public function __construct($ID_Room, $ID_RoomType, $ID_SuiteConfiguration, \DateTime $ArrivalDate, \DateTime $DepartureDate)
    {
        $this->ID_Room = $ID_Room;
        $this->ID_RoomType = $ID_RoomType;
        $this->ID_SuiteConfiguration = $ID_SuiteConfiguration;
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getID_Room()
    {
        return $this->ID_Room;
    }

    /**
     * @param int $ID_Room
     * @return \Gueststream\PMS\IQWare\API\B2BAnywhere
     */
    public function setID_Room($ID_Room)
    {
        $this->ID_Room = $ID_Room;
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
     * @return \Gueststream\PMS\IQWare\API\B2BAnywhere
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_SuiteConfiguration()
    {
        return $this->ID_SuiteConfiguration;
    }

    /**
     * @param int $ID_SuiteConfiguration
     * @return \Gueststream\PMS\IQWare\API\B2BAnywhere
     */
    public function setID_SuiteConfiguration($ID_SuiteConfiguration)
    {
        $this->ID_SuiteConfiguration = $ID_SuiteConfiguration;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        if ($this->ArrivalDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ArrivalDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ArrivalDate
     * @return \Gueststream\PMS\IQWare\API\B2BAnywhere
     */
    public function setArrivalDate(\DateTime $ArrivalDate)
    {
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        if ($this->DepartureDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DepartureDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DepartureDate
     * @return \Gueststream\PMS\IQWare\API\B2BAnywhere
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return ArrayOfEvaluationResult
     */
    public function getEvaluation()
    {
        return $this->Evaluation;
    }

    /**
     * @param ArrayOfEvaluationResult $Evaluation
     * @return \Gueststream\PMS\IQWare\API\B2BAnywhere
     */
    public function setEvaluation($Evaluation)
    {
        $this->Evaluation = $Evaluation;
        return $this;
    }
}
