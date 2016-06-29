<?php

namespace Gueststream\PMS\IQWare\API;

class GeneratedStatementsList
{

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var ArrayOfDateTime $StatementMonths
     */
    protected $StatementMonths = null;

    /**
     * @param int $ID_Room
     */
    public function __construct($ID_Room)
    {
        $this->ID_Room = $ID_Room;
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
     * @return \Gueststream\PMS\IQWare\API\GeneratedStatementsList
     */
    public function setID_Room($ID_Room)
    {
        $this->ID_Room = $ID_Room;
        return $this;
    }

    /**
     * @return ArrayOfDateTime
     */
    public function getStatementMonths()
    {
        return $this->StatementMonths;
    }

    /**
     * @param ArrayOfDateTime $StatementMonths
     * @return \Gueststream\PMS\IQWare\API\GeneratedStatementsList
     */
    public function setStatementMonths($StatementMonths)
    {
        $this->StatementMonths = $StatementMonths;
        return $this;
    }
}
